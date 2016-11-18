<?php

    function _autoload($class_name){
        if(file_exists(__DIR__ . '/controller/' . $class_name . '.php')){
            require_once __DIR__ . '/controller/' . $class_name . '.php';
        }elseif (file_exists(__DIR__ . '/model/' . $class_name . '.php')){
            require_once __DIR__ . '/model/' . $class_name . '.php';
        }else{
            exit();
        }
    }
?>