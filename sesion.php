<?php
session_start();
include("conexion.php");
error_reporting(0);
$varsesion = $_SESSION['u_usuario'];
$consulta= $conexion->query ("SELECT usuario FROM basesita WHERE usuario='$varsesion'");
$resultado= mysqli_fetch_array ($consulta);
$grupo = $resultado['usuario'];

if($varsesion == null || $varsesion = ''){
echo "<html>
	<head></head>
	<title></title>
	<body bgcolor='f1f7f7'>
	<center>
	<br><br>
	<h1><font size='10' color='3B6A6A'>Usted no ha iniciado sesión</h1>
	<br><p><a href='login.php'>Salir</a></p>
	</center></body></html>";
die();
}
?>
<html>    
<head></head>
<title></title>
<body background="ENP6.jpg">
<form action="proceso.php" method="POST">
<center>
<!-- Título -->
<table border="0" cellpadding="10" cellspacing="3" width="105%">
<tr><td><img src="prepa6.png" width="131" height="115"></td>
<th align="left"><center><font size="15" color="3B6A6A">Sesión Iniciada</center></font></th>
<th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th>
</tr>
</table>
<br><br><br><br>
<!-- Tabla Principal -->
<table border="5" cellpadding="20" cellspacing="1" width="80%">
<tr>
<td bgcolor="D1DFDE"  >
<table border="0">

<tr>
<td><?php echo"Sesión de $grupo "; ?> </tr></td>
<tr><td><font size="5.2" color="516b6c">Tenemos diferentes cursos para muchas materias, elige el que deseas hacer...</font>
<!-- Segunda Tabla -->

<tr><td><table border="0" align="center" cellpadding="25" cellspacing="20" >
<tr>
<th><a href="plandeestudio.php"><font color="516b6c" size="5">Consultar Plan de Estudios</font></th>
<th><a href="ejercicio.php"><font color="516b6c" size="5">Realizar Ejercicios</font></th> 	
<th><a href="plandeestudio.php"><font color="516b6c" size="5">Hacer Examen de Prueba</font></th>
</tr>
<tr>
<td><font size="4.2" color="516b6c"><center><img src="guia.png" width="100" height="100"></center></font></td>
<td><font size="4.2" color="516b6c"><center><img src="compu.png" width="100" height="100"></center></font></td>
<td><font size="4.2"color="516b6c"><center><img src="examen.png" width="100" height="100"></center></font></td>
</tr>
<tr><td><a href="close.php">Cerrar Sesion</tr></td>
</table>
</table>
</td></tr>

</td></tr></table>
<br>
