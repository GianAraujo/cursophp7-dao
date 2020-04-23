<?php

spl_autoload_register(function($class_nome){

    $fileneme = "class".DIRECTORY_SEPARATOR.$class_nome.".php";

    if(file_exists(($fileneme))){
        require_once ($fileneme);
    }


});


?>