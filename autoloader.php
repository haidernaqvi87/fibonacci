<?php
declare(strict_types=1);
if(!function_exists('classAutoLoader')){
    function classAutoLoader($class){
        $class=strtolower($class);
        $classFile=$_SERVER['DOCUMENT_ROOT'].'/class/'.$class.'.php';
        if (is_file($classFile)&&!class_exists($class))
            include $classFile;
        else {

            $interfaceFile = $_SERVER['DOCUMENT_ROOT'] . '/interface/' . $class . '.php';
            if (is_file($interfaceFile) && !class_exists($class)) include $interfaceFile;
        }
    }
}

spl_autoload_register('classAutoLoader');
