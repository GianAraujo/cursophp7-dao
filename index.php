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
$usuario = new Usuario();
$usuario->login("root", "qualquercoisa");
echo $usuario;


?>