<html>
  <head>
     <title>
        Modificar Empleados
     </title>
  </head>
  <body background="fondoee.jpg" >
     <center><br>
<P style="color:#8b4513; background-color:#ffe4c4;width:500px">
<table border=3>
<tr>
<th><b>ID Empleado</b></th>
<th>Nombre de Empleado</th>
<th>Departamento</th>
<th>Jornada</th>
</tr>

<?php

$link = mysqli_connect('localhost', 'root', '', 'pfinal') or die('Could not connect: ' . mysqli_error());


$query = "select * from Empleado ORDER BY id_empleado";
$result = mysqli_query($link, $query) or die('Query failed: ' . mysqli_error($link));
$id_empleado = 0;
$nombre_empleado="";
$departamento = "";
$jornada = "";

while ($line = mysqli_fetch_array($result, MYSQL_ASSOC)){ 

   $id_empleado=$line["id_empleado"];
   $nombre_empleado=$line["nombre_empleado"];
   $departamento = $line["id_departamento"];
   $jornada = $line["id_jornada"];


$query2 = "select nombre_departamento from Departamento WHERE id_departamento=$departamento";
$result2 = mysqli_query($link, $query2) or die('Query failed: ' . mysqli_error($link));

while ($line2 = mysqli_fetch_array($result2, MYSQL_ASSOC)){ 
$dep = $line2["nombre_departamento"];

$query3 = "select nombre_jornada from Jornada WHERE id_jornada=$jornada";
$result3 = mysqli_query($link, $query3) or die('Query failed: ' . mysqli_error($link));

while ($line3 = mysqli_fetch_array($result3, MYSQL_ASSOC)){ 
$jor = $line3["nombre_jornada"];
   echo "\t<tr>\n";
   echo "\t\t<td>$id_empleado</td>\n";
   echo "\t\t<td>$nombre_empleado</td>\n";
   echo "\t\t<td>$dep</td>\n";
   echo "\t\t<td>$jor</td>\n";
   echo "\t\t<td><a href=eliminarJornada.php?id_empleado=$id_empleado><img src=\"delete.png\" height=\"15\" width=\"15\"></a></td>\n";
   echo "\t\t<td><a href=modificarJornada.php?id_empleado=$id_empleado&nombre_empleado=$nombre_empleado&departamento=$departamento&jornada=$jornada><img src=\"modify.png\" height=\"15\" width=\"15\"></a></td>\n";
   echo "\t</tr>\n";
 }
 }
}
echo "</table>\n";


mysqli_close($link);


?>
</P>
     <center>
       <br>
       <P style="color:#8b4513; background-color:#ffe4c4;width:500px">
       <br>
       <a href="Mantenimiento.html">Regresar a Mantenimiento<img src="Mantenimiento.png" height = "20" width = "20"></a>
       <br>
       <br>
         <a href="index.html">Regresar al Menú<img src="menu.png" height = "20" width = "20"></a>
         <br>
         <br>
        </P>
     </center>
  </body>
</html>