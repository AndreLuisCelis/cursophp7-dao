<?php 
require_once ("config.php");

/*
$sql = new Sql();

$registro = $sql->select("SELECT * FROM tb_usuario");

echo json_encode($registro);
*/
$root = new Usuario();

$root->loadById(3);

echo $root;

 ?>