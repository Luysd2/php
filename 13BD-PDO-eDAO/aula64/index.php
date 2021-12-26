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
// $usuario = new Usuario();
// $usuario->login("Fiz", "Fernando");
// echo $usuario;

//criando um novo usuario
// $aluno = new Usuario("Fernando", "D@2");
// $aluno->insert();
// echo $aluno;

//atualizando dados
// $usuario = new Usuario();
// $usuario->loadById(12);
// $usuario->update("Sophia", "Filha");
// echo $usuario;

$usuario = new Usuario();
$usuario->loadById(17);
$usuario->delete();
echo $usuario;

 ?>