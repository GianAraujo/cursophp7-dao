<?php

require_once("config.php");

#$sql = new Sql();
#$usuarios = $sql->select("SELECT * FROM tb_usuarios");
#echo json_encode($usuarios);

// Carrega usuario.
//$user= new Usuario();
//$user->loadById(7);
//echo $user;

// carrega uma lista de usuario.
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de Usuarios buscando pelo dominio.
//$search = Usuario::search("e");
//echo json_encode($search);

// Carrega um usuario usando login e senha.
//$usuario = new Usuario();
//$usuario->login("root", "qualquercoisa");
//echo $usuario;

//iserção de um novo aluno no banco passando os setters
//$aluno = new Usuario();
//$aluno->setDeslogin('Aluno');
//$aluno->setDessenha('gian@10');
//$aluno->insert();
//echo $aluno;

//alteração de usuario
//$usuario = new Usuario();
//$usuario->loadById(30);
//$usuario->update("Sebastião", "seba@10");
//echo $usuario;

// Deletar usuario.
$usuario = new Usuario();
$usuario->loadById("9");
$usuario->delete();
echo $usuario;


?>