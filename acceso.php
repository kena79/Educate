<?php 
session_start();

require_once "clases/conexion.php";
$obj= new conectar();
$conexion=$obj->conexion();

$user_id = $_SESSION['user_id'];

$tildes = $conexion->query("SET NAMES 'utf8'");

// if (isset($user_id)) {
// 	$sql="SELECT * 
// 	FROM user 
//     WHERE id = $user_id";
// 	$res_login = mysqli_fetch_array(mysqli_query($conexion,$sql));
// 	$user = null;
  
// 	if (count($res_login) > 0) {
//         $user = $res_login;
//         $date = date('y-m-d h:m:s');
//         mysqli_query($conexion, "UPDATE user SET fecha_ult = '$date' WHERE id = $user_id");
// 	}
// }else{

//     if ($vista == 'manager') {
//         // header('Location: index.php');
//     }
// }
