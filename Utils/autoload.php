<?php 
    spl_autoload_register(function ($clase){
        if(file_exists($_SERVER['DOCUMENT_ROOT'] . "/Modelo/$clase.class.php"))
            require $_SERVER['DOCUMENT_ROOT'] . "/Modelo/$clase.class.php";
    
        if(file_exists($_SERVER['DOCUMENT_ROOT'] . "/Controlador/$clase.class.php"))
            require $_SERVER['DOCUMENT_ROOT'] . "/Controlador/$clase.class.php";
        
    });

    require_once "config.php";