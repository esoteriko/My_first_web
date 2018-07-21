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
<form action="historiaproceso.php" method="POST">
<center>
<!-- Título -->
<table border="0" cellpadding="10" cellspacing="3" width="105%">
<tr><td><img src="prepa6.png" width="131" height="115"></td>
<th align="left"><center><font size="15" color="3B6A6A">MatematicasV</center></font></th>
<th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th>
</tr>
</table>
<!-- Tabla Principal -->
<table border="5" cellpadding="20" cellspacing="1" width="80%">
<tr>
<td bgcolor="D1DFDE"  ><table border="0"><tr><td><?php echo"Sesión de $grupo"; ?></td></tr></table> <table border="0" align="right"><tr><td><a href="ejercicio.php">Salir</td></tr></table>

<!-- pregunta 1 -->
<table border="0" align="center" >
<tr>
<td><font size="4.2" color="516b6c">1.-¿Quienes eran los encargados de las colonias de España, que podian expedir leyes, nombrar funcionarios, fundar organismos de gobierno y revisar la real audiencia?</font>
</td></tr>
<tr><td><center><select name="A">
<option value="1">Virrey</option>
<option value="2">Rey</option>
<option value="3">Consejo de indias</option>
<option value="4">Audiencia</option>
</center></td></tr><br>
<tr><td><br></td></tr>
<!-- pregunta 2 -->
<tr>
<td><font size="4.2" color="516b6c"> 2.-¿Barco Español con ertilleria en los costados? </font>
</td></tr>
<tr>
<td><table border="0" align="center" width="70%">
<tr>
<td><font size="4.2" color="516b6c">Carabela<br><center><input type="radio" name="B" value="1"></center></font> </td>
<td><font size="4.2" color="516b6c">Galeon<br><center><input type="radio" name="B" value="2"></center> </font></td>
<td><font size="4.2" color="516b6c">Fragata<br><center><input type="radio" name="B" value="3"></center></font> </td>
<td><font size="4.2" color="516b6c">Bergatín<br><center><input type="radio" name="B" value="4"></center></font> </td>
</tr>
</table></td></tr>
<!-- pregunta 3 -->
<tr>
<td><font size="4.2" color="516b6c"> 3.-¿Barco Español con ertilleria en los costados? </font>
</td></tr>
<tr>
<td><table border="0" align="center" width="70%">
<tr>
<td><font size="4.2" color="516b6c">Carabela<br><center><input type="radio" name="C" value="1"></center></font> </td>
<td><font size="4.2" color="516b6c">Galeon<br><center><input type="radio" name="C" value="2"></center> </font></td>
<td><font size="4.2" color="516b6c">Fragata<br><center><input type="radio" name="C" value="3"></center></font> </td>
<td><font size="4.2" color="516b6c">Bergatín<br><center><input type="radio" name="C" value="4"></center></font> </td>
</tr>
</table></td></tr>
<!-- pregunta 4 -->
<tr>
<td><font size="4.2" color="516b6c">4.-¿Quienes eran los encargados de las colonias de España, que podian expedir leyes, nombrar funcionarios, fundar organismos de gobierno y revisar la real audiencia?</font>
</td></tr>
<tr><td><center><select name="D">
<option value="1">Virrey</option>
<option value="2">Rey</option>
<option value="3">Consejo de indias</option>
<option value="4">Audiencia</option>
</center></td></tr><br>
<tr><td><br></td></tr>
<!-- pregunta 5 -->
<tr>
<td><font size="4.2" color="516b6c"> 5.-¿Barco Español con ertilleria en los costados? </font>
</td></tr>
<tr>
<td><table border="0" align="center" width="70%">
<tr>
<td><font size="4.2" color="516b6c">Carabela<br><center><input type="radio" name="E" value="1"></center></font> </td>
<td><font size="4.2" color="516b6c">Galeon<br><center><input type="radio" name="E" value="2"></center> </font></td>
<td><font size="4.2" color="516b6c">Fragata<br><center><input type="radio" name="E" value="3"></center></font> </td>
<td><font size="4.2" color="516b6c">Bergatín<br><center><input type="radio" name="E" value="4"></center></font> </td>
</tr>
</table></td></tr>

<!-- Enviar -->
<tr>
<td><center><input type="submit" name="enviar" value="Enviar"></center></td></tr>


</table>

</td></tr></table>

</center></form></body></html>
