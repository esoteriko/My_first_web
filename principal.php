

<html>

<head></head>
<title></title>
<body bgcolor="f1f7f7">
<center>
<form action="principal.php" method="post">
<!-- Título -->
<table border="0" cellpadding="10" cellspacing="3" width="100%" align="left">
<tr><td><img src="prepa6.png" width="131" height="115"></td>
<th><font size="20" color="3B6A6A" >Registro</font></th>
<th></th><th></th><th></th><th></th><th></th><th></th>
</tr>

</table>

<br>
<br>
<table border="0" cellpadding="18" cellspacing="18" width="50%">
<tr>
<td width="70%" bgcolor="D1DFDE"><center><font size="4" color="516b6c">Nombre</center></td>
<td width="70%" bgcolor="D1DFDE"><input type="text" name="nombre"/></td>
</tr>
<tr>
<td width="10%" bgcolor="D1DFDE"><center><font size="4" color="516b6c">Apellido Paterno</center></td>
<td width="30%" bgcolor="D1DFDE"><input type="text" name="apellido"/></td>
</tr>
<tr>
<td width="70%" bgcolor="D1DFDE"><center><font size="4" color="516b6c">Apellido Materno</center></td>
<td width="70%" bgcolor="D1DFDE"><input type="text" name="materno"/></td>
</tr>
<tr>
<td width="70%" bgcolor="D1DFDE"><center><font size="4" color="516b6c">Grupo</center></td>
<td width="70%" bgcolor="D1DFDE"><center><select name="grupo"/>
<option value="uno">401</option>
<option value="dos">402</option>
<option value="tres">403</option>
<option value="cuatro">404</option>
<option value="cinco">405</option>
<option value="seis">406</option>
<option value="siete">407</option>
<option value="ocho">408</option>
<option value="nueve">409</option>
<option value="diez">410</option>
<option value="once">411</option>
<option value="doce">412</option>
<option value="trece">413</option>
<option value="catorce">414</option>
<option value="quince">415</option>
<option value="diezseis">416</option>
<option value="diezsiete">417</option>
<option value="diezocho">418</option>
<option value="cincouno">501</option>
<option value="cincodos">502</option>
<option value="cincotres">503</option>
<option value="cincocuatro">504</option>
<option value="cincocinco">505</option>
<option value="cincoseis">506</option>
<option value="cincosiete">507</option>
<option value="cincoocho">508</option>
<option value="cinconueve">509</option>
<option value="cincodiez">510</option>
<option value="cincoonce">511</option>
<option value="cincodoce">512</option>
<option value="cincotrece">513</option>
<option value="cincocatorce">514</option>
<option value="cincoquince">515</option>
<option value="cincodiezsesis">516</option>
<option value="cincodiezsiete">517</option>
<option value="cincodiezocho">518</option>
</select></td></center>
</tr>
<tr>
<td width="70%" bgcolor="D1DFDE"><center><font size="4" color="516b6c">Número de Cuenta</center></td>
<td width="70%" bgcolor="D1DFDE"><input type="text" name="numerodecuenta"/></td>
</tr>
<tr>
<td width="70%" bgcolor="D1DFDE"><center><font size="4" color="516b6c">Corre Electronico</center></td></td>
<td width="70%" bgcolor="D1DFDE"><input type="text" name="correo"/></td>
<tr>
<td width="70%" bgcolor="D1DFDE"><center><font size="4" color="516b6c">Usuario</center></td></td>
<td width="70%" bgcolor="D1DFDE"><input type="text" name="usuario"/></td>
</tr>
<tr>
<td width="70%" bgcolor="D1DFDE"><center><font size="4" color="516b6c">Contraseña</center></td></td>
<td width="70%" bgcolor="D1DFDE"><input type="password" name="contrasena"/></td>
</tr>
<tr>
<td width="70%" bgcolor="D1DFDE"><center><font size="4" color="516b6c">Repite Contraseña</center></td></td>
<td width="70%" bgcolor="D1DFDE"><input type="password" name="contrasena2"/></td>
</tr>
<tr>
<td><center><p><input type="reset"  value="limpiar"></center></td></p>
<td><p><center><input type="submit" name="envio" value="Enviar datos"></center></p></td>
</tr>


</center>



</table>
<a href="indice.php"><font align="left" >Salir</a></font>
</form>
</body>
</html>
<?php


$link = mysql_connect("localhost","root","fundacion","basesita");
mysql_select_db("basesita",$link);


$sql="INSERT INTO `basesita`( `nombre` , `apellido` , `materno`  ,`grupo` , `numerodecuenta` , `correo`, `usuario`, `contrasena`,`contrasena2`) 
VALUES ('$nombre', '$apellido', '$materno', '$grupo','$numerodecuenta','$correo','$usuario','$contrasena', '$contrasena2');";
$resultado=mysql_query($sql);


?>

