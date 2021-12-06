<?php
/*Usando transações 
 */

//$dsn = 'mysql:dbname=dbphp7;host=127.0.0.1';
$dsn = 'mysql:dbname=dbphp7;host=Localhost';
$user = 'root';
$password = '';
$conn = new PDO($dsn, $user, $password);
$stmt = $conn->prepare("DELETE FROM tb_usuario WHERE idusuario= :ID");
$conn -> beginTransaction();


$id = 8;

$stmt -> bindParam(":ID", $id);

$stmt->execute();
echo "O delete foi executado no id = " .$id;
//$conn -> rollBack(); // nega o execute, assim n apaga os dados do id escolhido
//echo "<br>";
//echo "O delete foi negado pelo rollBack no id = " .$id;

$conn -> commit(); // confirma o execute no id escolhido
echo "<br>";
echo "O delete foi confirmado pelo commit no id = " .$id;

?>