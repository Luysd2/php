<?php
/*Autoload 

*/
function __autoload($nomeClasse){
    var_dump($nomeClasse);
    require_once("$nomeClasse.php");
}

//;
$x = new DelRey();
$x ->acelerar(40);


?>