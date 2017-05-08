<html>
  <head>
     <title>
        Modificar Permisos
     </title>
  </head>
  <body background="fondoee.jpg" >
     <center><br>
<P style="color:#8b4513; background-color:#ffe4c4;width:1000px">
<table border=3>
<tr>
<th>Nombre de Empleado</th>
<th>Fecha</th>
<th>Motivo</th>
</tr>

<?php

$link = mysqli_connect('localhost', 'root', '', 'pfinal') or die('Could not connect: ' . mysqli_error());


$query = "select * from Permiso ORDER BY fecha";
$result = mysqli_query($link, $query) or die('Query failed: ' . mysqli_error($link));
$id_empleado = 0;
$fecha = "";
$motivo = "";

while ($line = mysqli_fetch_array($result, MYSQL_ASSOC)){ 

   $id_empleado=$line["id_empleado"];
   $fecha = $line["fecha"];
   $motivo = $line["motivo"];


$query2 = "select nombre_empleado from Empleado WHERE id_empleado=$id_empleado";
$result2 = mysqli_query($link, $query2) or die('Query failed: ' . mysqli_error($link));

while ($line2 = mysqli_fetch_array($result2, MYSQL_ASSOC)){ 
$nombre = $line2["nombre_empleado"];

   echo "\t<tr>\n";
   echo "\t\t<td>$nombre</td>\n";
   echo "\t\t<td>$fecha</td>\n";
   echo "\t\t<td>$motivo</td>\n";
   echo "\t\t<td><a href=eliminarJornada.php?id_empleado=$id_empleado&fecha=$fecha><img src=\"delete.png\" height=\"15\" width=\"15\"></a></td>\n";
   echo "\t\t<td><a href=modificarJornada.php?id_empleado=$id_empleado&fecha=$fecha&motivo=$motivo><img src=\"modify.png\" height=\"15\" width=\"15\"></a></td>\n";
   echo "\t</tr>\n";
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