<?php
    namespace utils;
    class RequestUtils{
        public function __construct(){

        }
        public function parse($class){
            $reflectionClass=new \ReflectionClass($class);
            $properties=$reflectionClass->getProperties();
            $object=$reflectionClass->newInstance();
            foreach ($properties as $key => $property) {
                if(isset($_POST[$property->name]))
                    $property->setValue($object,$_POST[$property->name]);
            }
            return $object;  
        }
    }
?>