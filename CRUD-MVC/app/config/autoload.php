<?php 
# Criando o autoload manual
spl_autoload_register(function($class_name){

    $class_name = str_replace(["\\"], '/', $class_name);

    $class_controller = $class_name.'.php';
    $class_model = $class_name.'.php';
    $class_dao = $class_name.'.php';

    if(file_exists($class_controller))
    {   
        include $class_controller;
    }
    else if(file_exists($class_model))
    {
        include $class_model;
    }
    else if(file_exists($class_dao))
    {
        include $class_dao;
    }
});
?>