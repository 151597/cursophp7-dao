<?php 

require_once("config.php");

//carrega um usuario
//$root = new Usuario();
//$root->loadbyId(2);
//echo $root;

//carrega uma lista de usuarios
//$lista = Usuario::getList();

//echo json_encode($lista);

//carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("may");

//echo json_encode($search);


//carrega um usuario usando0 um login e a senha
//$usuario = new Usuario();
//$usuario->login("mayara", "linda");

//echo $usuario;

//criando um novo usuario
/*$aluno = new Usuario("aluno", "@luno");

$aluno->insert();

echo $aluno ;*/

/*$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);*/

$usuario = new Usuario();
$usuario->loadById(6);

$usuario->update("Professor", "prof");

echo $usuario;

 ?>