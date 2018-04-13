<?php 

require_once("config.php");

//======================================================
//Orientado objeto somente SQL
//$sql = new Sql();

//$usuarios = $sql->select("SELECT * FROM tb_usuarios");

//echo json_encode($usuarios);

//======================================================
//Carrega um usuário
//$root = new Usuario();

//$root->loadById(3);

//echo $root;

//======================================================
//Carrega uma lista de usuários

//$lista = Usuario::getList();

//echo json_encode($lista);

//======================================================
//Carrega uma lista de usuários buscando pelo login

//$search = Usuario::search("jo");

//echo json_encode($search);

//======================================================
//Carrega um usuário usando o login e a senha

//$usuario = new Usuario();
//$usuario->login("root", "!@#$");

//echo $usuario;

//======================================================
//Insere um novo usuário sem método construtor

//$aluno = new Usuario();
//$aluno->setDeslogin("aluno");
//$aluno->setDessenha("@lun0");

//$aluno->insert();

//echo $aluno;

//======================================================
//Insere um novo usuário com método construtor

//$aluno = new Usuario("aluno", "@lun0");

//$aluno->insert();

//echo $aluno;

//======================================================
//Alterando um usuário

$usuario = new Usuario();
$usuario->loadById(8);

$usuario->update("professor", "dosajg");

echo $usuario;

 ?>