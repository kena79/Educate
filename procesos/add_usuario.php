<?php
require_once "../clases/conexion.php";
require_once "../clases/metodos.php";
$obj = new crud();

$datos = array(
	$_POST['txtTipoDoc'],
	$_POST['txtNoDocumento']
);

echo json_encode($obj->agregarUsusario($datos));
