<?php 
require_once ("config.php");

/*
$sql = new Sql();

$registro = $sql->select("SELECT * FROM tb_usuario");

echo json_encode($registro);
*/


/* seleciona apenas um usuario
$root = new Usuario();

$root->loadById(3);

echo $root;*/


/* traz uma lista de usuarios usando metodo statico
$lista = Usuario::getList();

echo json_encode($lista); */


/*pesquisa e retorna um usuario
$search = Usuario::search("a");

echo json_encode($search);*/

/* verifica o login e senha e retorna o usuario */
$usuario = new Usuario();
$usuario->login("Gilma","1234567890");

echo $usuario;




 ?>