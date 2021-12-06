<?php
/*Apagando os dados do banco
 */

//$dsn = 'mysql:dbname=dbphp7;host=127.0.0.1';
$dsn = 'mysql:dbname=dbphp7;host=Localhost';
$user = 'root';
$password = '';
$conn = new PDO($dsn, $user, $password);
$stmt = $conn->prepare("DELETE FROM tb_usuario WHERE idusuario= :ID");


//$login = "Luis";
//$senha = "Fernando";
$id = 2;

//$stmt -> bindParam(":LOGIN", $login);
//$stmt -> bindParam(":SENHA", $senha);
$stmt -> bindParam(":ID", $id);

$stmt->execute();

echo "Dados apagados no ID = " .$id;
?>