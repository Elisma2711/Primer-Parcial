<?php 
    $directorio = "C:\\xampp\htdocs\Primer Parcial Prog\Primer-Parcial";

    spl_autoload_register(function ($clase){
        if(file_exists("$directorio\Modelo\\$clase.class.php"))
            require "$directorio\Modelo\\$clase.class.php";
    
        if(file_exists("$directorio\Controlador\\$clase.class.php"))
            require "$directorio\Controlador\\$clase.class.php";
        
    });

    require_once "$directorio\config.php";