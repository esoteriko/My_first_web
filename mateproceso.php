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
<body bgcolor="f1f7f7">
<!-- Título -->
<table border="0" cellpadding="10" cellspacing="3" width="105%">
<tr><td><img src="prepa6.png" width="131" height="115"></td>
<th align="left"><center><font size="15" color="3B6A6A">Resultados</center></font></th>
<th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th>
</tr>
</table>
<table border="0" align="center"><tr><td><?php echo"Sesión de $grupo"; ?></td></tr></table>
<?php

$A= $_POST['A'];
$B= $_POST['B'];
$C= $_POST['C'];
$D= $_POST['D'];
$E= $_POST['E'];
//1
if ($A== 3)
{
	echo("<center><font size='3.2' color='516b6c'>1.-correcto<br></center>");
}
else
{
	echo("<center><font size='3.2' color='516b6c'>1.-incorrecto<br></center>");
}
//2
if ($B== 2)
{
	echo("<center><font size='3.2' color='516b6c'>2.-correcto<br></center>");
}
else
{
	echo("<center><font size='3.2' color='516b6c'>2.-incorrecto<br></center>");
}
//3 
if ($C== 2)
{
	echo("<center><font size='3.2' color='516b6c'>3.-correcto<br></center>");
}
else
{
	echo("<center><font size='3.2' color='516b6c'>3.-incorrecto<br></center>");
}//4
if ($D== 3)
{
	echo("<center><font size='3.2' color='516b6c'>4.-correcto<br></center>");
}
else
{
	echo("<center><font size='3.2' color='516b6c'>4.-incorrecto<br></center>");
}//5
if ($E== 2)
{
	echo("<center><font size='3.2' color='516b6c'>5.-correcto<br></center>");
}
else
{
	echo("<center><font size='3.2' color='516b6c'>5.-incorrecto<br></center>");
}
echo("<center><a href='examenhistoria.php'><br>Salir</center>");

?>

</body></html>