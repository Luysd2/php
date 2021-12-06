<?php
/*Alterando os dados do banco
 */

//$dsn = 'mysql:dbname=dbphp7;host=127.0.0.1';
$dsn = 'mysql:dbname=dbphp7;host=Localhost';
$user = 'root';
$password = '';

$conn = new PDO($dsn, $user, $password);

$stmt = $conn->prepare("UPDATE tb_usuario SET deslogin= :LOGIN, dessenha= :SENHA WHERE idusuario= :ID");

$login = "Luis";
$senha = "Fernando";
$id = 9;


$stmt -> bindParam(":LOGIN", $login);
$stmt -> bindParam(":SENHA", $senha);
$stmt -> bindParam(":ID", $id);

$stmt->execute();


echo "Dados alterados no id = " .$id;
?>