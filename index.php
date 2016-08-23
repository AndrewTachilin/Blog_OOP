<?php

namespace app;
use app\components\Router;
//require_once 'vendor/autoload.php';



session_start();

spl_autoload_register(function($className){
    $parts = explode("\\", $className);
    array_shift($parts);
    $path = implode(DIRECTORY_SEPARATOR, $parts);
    require_once ($path . '.php');
});

Router::getInstance()->handle($_SERVER['REQUEST_URI']);
