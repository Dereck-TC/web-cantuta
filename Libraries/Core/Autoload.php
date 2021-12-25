<?php
    spl_autoload_register(function($class){
        if(file_exists("Libraries/".'Core/'.$class.".php")){//validando si existe
            require_once("Libraries/".'Core/'.$class.".php");
        }
    });
?>