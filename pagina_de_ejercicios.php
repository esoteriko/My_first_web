<?php
session_start();

include("conexion.php");
//mostrar usuario
$varsesion = $_SESSION['u_usuario'];
$consulta= $conexion->query ("SELECT usuario FROM basesita WHERE usuario='$varsesion'");
$resultado= mysqli_fetch_array ($consulta);
$grupo = $resultado['usuario'];
//seguridad
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
<center>
<!-- Título -->
<table border="0" cellpadding="10" cellspacing="3" width="105%">
<tr><td><img src="prepa6.png" width="131" height="115"></td>
<th align="left"><center><font size="15" color="3B6A6A">Finales y Extras</center></font></th>
<th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th>
</tr>
</table>
<!-- Tabla Principal -->
<table border="5" cellpadding="20" cellspacing="1" width="80%">
<tr>
<td bgcolor="D1DFDE"><center><h1><font size="5.2" color="3B6A6A">Ejercicios</font></center></h1>
<table border="0" align="left"><tr><td><?php echo"Sesión de $grupo"; ?></td></tr></table><table border="0" align="right"><tr><td><a href="sesion.php">Salir</a></td></tr></table>
</td></tr>
<tr><td bgcolor="D1DFDE">
<br>
<!-- Primera Tabla -->
<table border="1" align="center" cellpadding="25">
<tr>
<th colspan="5" bgcolor="b2c6c5"><font color="3B6A6A">Materias quinto año</th>
</tr>
<tr>
<th><font color="516b6c">MatematicasV</font></th>
<th><font color="516b6c">Química</font></th>
<th><font color="516b6c">Historia de México II</font></th>
<th><font color="516b6c">Literatura universal</font></th>
<th><font color="516b6c">Educación para la Salud</font></th>
</tr>
<tr>
<td><a href="examenmate.php">Ejercicios</a></td>
<td><a href="examenhistoria.php">Ejercicios</a></td>
<td><a href="examenhistoria.php">Ejercicios</a></td>
<td><a href="examenhistoria.php">Ejercicios</a></td>
<td><a href="examenhistoria.php">Ejercicios</a></td>
</tr>
</table>

<br><br>
<table border="1" align="center" cellpadding="25">
<tr>
<th colspan="5" bgcolor="b2c6c5"><font color="3B6A6A">Sexto Año</th>
</tr>
<tr>
<th><font color="516b6c">MatematicasVI</font></th>
<th><font color="516b6c">QuímicaIV</font></th>
<th><font color="516b6c">BiologíaV</font></th>
<th><font color="516b6c">Literatura Iberoaméricana</font></th>
<th><font color="516b6c">Derecho</font></th>
</tr>
<tr>
<td><a href="examenmate.php">Ejercicio</a></td>
<td><a href="examenmate.php">Ejercicio</a></td>
<td><a href="examenmate.php">Ejercicio</a></td>
<td><a href="examenmate.php">Ejercicio</a></td>
<td><a href="examenmate.php">Ejercicio</a></td>

</tr>
</table>
</td></tr>
</table>



</center></body></html>