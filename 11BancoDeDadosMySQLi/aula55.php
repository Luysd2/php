<?php
//conectando com o banco 
/*
$conn = new mysqli("127.0.0.1", "root", " ", "dbphp7");
if ($conn->concect_error){
    echo "Error: " . $conn->concect_error;
}*/


define('HOST', '127.0.0.1');
define('USUARIO', 'root');
define('SENHA', '');
define('DB', 'dbphp7');
/* definindo o banco de dados com seus campos */

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die("Não foi possivel conectar");
/* fazendo a conexão com o banco de dados */

?>