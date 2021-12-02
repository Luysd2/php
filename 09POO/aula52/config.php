<?php
spl_autoload_register(function($nameClass){
    //var_dump($nameClass);
    $dirClass = "class";
    //$filename = $dirClass . DIRECTORY_SEPARATOR . $nameClass . ".php"; 
    //usando este caminho da erro
    $filename = str_replace ("\\", "/", $dirClass . DIRECTORY_SEPARATOR . $nameClass . ".php");

    if(file_exists($filename)){
    /* a função file_exists ela so retorna false ou true, entao eu n preciso colocar === true
    (if(file_exists($filename)===true))*/

    require_once($filename);
    }
});
?>