<?php
/*Namespace
 */
require_once("config.php");
use Cliente\Cadastro;
// palavra reservada use para usar um namespace
$cad = new Cadastro();

$cad ->setNome("Luis Fernando");
$cad -> setEmail("luysd2@gmail.com");
$cad -> setSenha("12345");

//echo $cad;
$cad ->registrarVenda();
?>