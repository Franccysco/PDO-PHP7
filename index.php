<?php 

require_once("config.php");

/*$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);*/

//Carrega apenas um usuario
//$root = new Usuario();
//$root->loadById(4);
//echo $root;

//Carrega uma lista de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuarios  em uma busca
//$search =  Usuario::search("Fran");
//echo json_encode($search);

//Carrega usuario verificando login e senha
//$usuario = new Usuario();
//$usuario->login("Francisco","eqwasdaios");
//echo $usuario;


/*/Inserindo novo usuario
$aluno = new Usuario("Aluno", "23456231");
//$aluno->setDeslogin("Aluno");
//$aluno->setDessenha("23456");
$aluno->insert();
echo $aluno;*/

//Update do usuario
$usuario = new Usuario();
$usuario->loadById(14);
$usuario->update("Professor", "54321344");

echo $usuario;
?>