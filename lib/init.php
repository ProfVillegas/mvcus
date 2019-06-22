<?php
require_once(ROOT.DS.'config'.DS.'config.php');

spl_autoload_register(function($class_name){
   echo $lib_path=ROOT.DS.'lib'.DS.strtolower($class_name).'.class.php';
   $controller_path=ROOT.DS.'controller'.DS.str_replace('controller','',strtolowe($class_name)).'.controller.php';
    
    $model_path=ROOT.DS.'models'.DS.strtolower($class_name).'.php';
    
    if(file_exists($lib_path)){
        require_once($lib_path);
    } elseif(file_exists($controller_path)){
        require_once($controller_path);
    } elseif(file_exists($model_path)){
        require_once($model_path);
    } else {
        throw new Exception('Fallo al incluir la clase'.$class_name);
    }
    
});