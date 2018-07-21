<?php
session_start();	
$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];

include("conexion.php");

$proceso = $conexion->query("SELECT * FROM basesita WHERE usuario='$usuario' AND contrasena='$contrasena'");

if($resultado = mysqli_fetch_array($proceso))
{
	$_SESSION['u_usuario']=$usuario;
	header("location: sesion.php");
	
	
}
else
{
	//header("location: login1.php");
	echo"<html>
	<head></head>
	<title></title>
	<body bgcolor='f1f7f7'>
	<center>
	<br><br>
	<h1><font size='10' color='3B6A6A'>Contraseña o Usuario incorrecto</h1>
	<br><p><a href='login.php'>Salir</a></p>
	</center></body></html>";
	

}
?>