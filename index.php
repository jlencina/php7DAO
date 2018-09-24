<?php

require_once("config.php");


//Carrega um usuário
//$root = new Usuario();
//$root->loadById(3);
//echo $root;

//Carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrrega uma lista de usuários buscando pelo login
//$search = Usuario::search("jo");
//echo json_encode($search);

//Carrega um usuário usando login e a senha
//$usuario = new Usuario();
//$usuario->login("root", "!@#$");

//Inserção de usuário novo
//$aluno = new Usuario("aluno", "112233");
//$aluno->insert();

//Update no usuário
//$usuario = new Usuario();
//$usuario->loadById(8);
//$usuario->update("professor", "professor");
//echo $usuario;

$usuario = new Usuario();
$usuario->loadById(13);
$usuario->delete();

echo $usuario;

?>