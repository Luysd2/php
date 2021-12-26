<?php
//exemplo usando na aula
//essa forma de conexão n da certo
$dsn = 'mysql:dbname=dbphp7;host=Localhost';
$user = 'root';
$password = '';

$conn = new PDO($dsn, $user, $password);



$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(?, ?)");

//$stmt->bind_param("ss", $login, $pass);

$login = "user";
$pass = "12345";

$stmt->bindParam("ss", $login, $pass);
$stmt->execute();

$login = "root";
$pass = "!@$%#";

$stmt->execute();

?>