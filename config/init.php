<?php

require_once  'Configuration.php';

spl_autoload_register(/**
 * @throws Exception
 */ function($class_name){

    $file = __DIR__ . '/../Engine/'. $class_name . '.php';

    if(file_exists($file)){
        require_once  $file;
    } else {
        throw new Exception('Class not found: '. $class_name);
    }

});