<?php 
require_once ("config.php");

$sql = new Sql();

$registro = $sql->select("SELECT * FROM tb_usuario");

echo json_encode($registro);

 ?>