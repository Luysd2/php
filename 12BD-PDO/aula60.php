<?php
/*Inserindo valores no banco
 */
//$dsn = 'mysql:dbname=dbphp7;host=127.0.0.1';
$dsn = 'mysql:dbname=dbphp7;host=Localhost';
$user = 'root';
$password = '';

$conn = new PDO($dsn, $user, $password);

$stmt = $conn->prepare("INSERT INTO tb_usuario (deslogin, dessenha) VALUES (:LOGIN, md5(:SENHA))");

$login = "teste";
$senha = "teste";

$stmt -> bindParam(":LOGIN", $login);
$stmt -> bindParam(":SENHA", $senha);

$stmt->execute();

echo "blz";
?>