<?php
//usando o Cookies
//Recuperando(caso ele exista) o Cookie
if(isset($_COOKIE["NOME_DO_COOKIES"])){
    $objeto = json_decode($_COOKIE["NOME_DO_COOKIES"]); //usando ele como objeto
    echo $objeto->Nome;

    echo "<br>";

    $array = json_decode($_COOKIE["NOME_DO_COOKIES"], true);//usando ele como um array
    echo $array["Sobrenome"];

}

?>