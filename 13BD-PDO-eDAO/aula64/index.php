<?php
 require_once("config.php");
// $sql = new Sql();
// $usuario =$sql->select("SELECT * FROM tb_usuario");
//  echo json_encode($usuario);

//carrega o usuario
// $root = new Usuario();
// $root->loadById(7);
// echo $root;

//carrega lista
// $lista = Usuario::getList();
// echo json_encode($lista);

//carrega um usuario aparte de uma pesquisa
// $search = Usuario::search("Fiz"); //ta pesquisando pela letra
// echo json_encode($search);

//carrega um usuario verificando o login e senha
$usuario = new Usuario();
$usuario->login("ff", "633de4b0c14ca52ea2432a3c8a5c4c31");
echo $usuario;

 ?>