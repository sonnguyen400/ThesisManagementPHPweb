<?php
    namespace service;
    require_once("../Utils/EntityUtils.php");
    require_once("../service/connection.php");
    require_once("../model/Faculty.php");
require_once('../Utils/Log.php');
use ReflectionClass;
use utils\EntityUtils;
use utils\Log;
    class Service{
        public function insertQuery($object) {
            $entityUtil=new EntityUtils($object);
            $entityProperties=$entityUtil->getProperties();
            if(!assert($entityProperties["name"])||!assert($entityProperties["properties"])||count($entityProperties["properties"])==0){
                throw new \InvalidArgumentException("Invalid Entity Information check usage of EntityUtils Class ");
            }else{
                $props=array_reduce($entityProperties["properties"],function($pre,$currentValue) use($entityUtil,$object){
                    if($entityUtil->getClass()->getProperty($currentValue)->getDocComment()===TRANSIENT){
                        return $pre;
                    }
                    $value=$entityUtil->getClass()->getProperty($currentValue)->getValue($object);
                    if(!is_null($value)){
                        if(is_string($value)) $value="\"$value\"";
                        array_push($pre,[$currentValue,$value]);
                    }
                    return $pre;
                },[]);
                $column=join(",",array_column($props,0));
                $value=join(",",array_column($props,1));
                $query="insert into $entityProperties[name]($column) value($value)";
                return $query;
            }
        }
        public function deleteQuery($tablename,...$predicate){
            $query="";
            if(count($predicate)> 0){
                $predicate=join(" and ",$predicate);
                $query="delete from $tablename where $predicate";
            }else{
                $query="delete from $tablename";
            }
            return $query;
        }
        public function selectQuery($tablename,...$predicate){
            $query= "";
            if(count($predicate)> 0){
                $predicate=join(" and ",$predicate);
                $query="select * from $tablename where $predicate";
            }else{
                $query="select * from $tablename";
            }
            return $query;
        }
        public function limit($selectquery,int $limit,int $offset= 0){
            if($offset==0){
                return "$selectquery limit $limit";
            }
            return "$selectquery limit $limit,$offset";
        }
        public function updateQuery($tablename,$key_value,...$predicate){
            $prop=join(" and ",array_map(function($value){
                return "$value[key]=$value[value]";
            },$key_value));
            $query= "";
            if(count($predicate)> 0){
                $predicate=join(" and ",$predicate);
                $query= "update $tablename set $prop where $predicate";
            }else{
                $query= "update $tablename set $prop";
            }
            return $query;
        }
        public function executeInsert($object){
            global $conn;
            $query=$this->insertQuery($object);
            if($conn->query($query)===true){
                return $conn->insert_id;
            }
            return false;
        }
        public function executeUpdate($tablename,$key_value,...$predicate){
            global $conn;
            $query=$this->updateQuery($tablename, $key_value,...$predicate);
            if($conn->query($query)===false){
                return false;
            }
            return true;
        }
        public function executeSelect($query,$class){
            global $conn;
            $reflectionClass=new ReflectionClass($class);
            $result=$conn->query($query);
            $outcome=[];
            while($row=$result->fetch_assoc()){
                $object=$reflectionClass->newInstanceArgs();
                foreach ($reflectionClass->getProperties() as $key => $property) {
                    if($property->getDocComment()===TRANSIENT) continue;
                    $property->setValue($object,$row[$property->name]);
                }
                array_push($outcome,$object);
            }
            return $outcome;
        }
    }