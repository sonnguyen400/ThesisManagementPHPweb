<?php
    namespace utils;
    class Log{
        public static function log($value){
            print("<pre>");
            print_r($value);
            print("</pre>");
        }
    }
?>