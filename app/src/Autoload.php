<?php

class Autoload 
{
    public static function registrate()
    {
        spl_autoload_register(function($class)
        {
            $class = str_replace('\\', '/', $class);
            $file = __DIR__ . "/" . $class . ".php";
            if(file_exists($file))
            {
                //print_r($file);
                include($file);
                return true;
            }
            return false;
        });
    }
}