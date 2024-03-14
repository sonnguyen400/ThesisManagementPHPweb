<?php 
    namespace utils;
    class EntityUtils{
        private $class;
        public function __construct($object){
            $this->class=new \ReflectionClass($object);
        }
        public function getClass(){
            return $this->class;
        }
        public function getShortName(){
            return $this->class->getShortName();
        }
        public function getProperties(){
            $result=array();
            $result["name"]=$this->getShortName();
            $result["properties"]=array_map(function($property){
                return $property->name;
            },$this->class->getProperties());
            return $result;
        }
    }
?>