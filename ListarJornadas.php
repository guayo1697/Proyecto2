<html>
  <head>
     <title>
        Modificar Jornadas
     </title>
  </head>
  <body background="fondoee.jpg" >
     <center><br>
<P style="color:#8b4513; background-color:#ffe4c4;width:500px">
<table border=3>
<tr>
<th><b>ID Jornada</b></th>
<th>Nombre de Jornada</th>
<th>Hora de Entrada</th>
<th>Hora de Salida</th>
</tr>

<?php

$link = mysqli_connect('localhost', 'root', '', 'pfinal') or die('Could not connect: ' . mysqli_error());


$query = "select * from Jornada ORDER BY id_jornada";
$result = mysqli_query($link, $query) or die('Query failed: ' . mysqli_error($link));
$id_jornada = 0;
$nombre_jornada="";
$horae = "";
$horas = "";



while ($line = mysqli_fetch_array($result, MYSQL_ASSOC)){ 

   $id_jornada=$line["id_jornada"];
   $nombre_jornada=$line["nombre_jornada"];
   $horae = $line["hora_entrada"];
   $horas = $line["hora_salida"];
   echo "\t<tr>\n";
   echo "\t\t<td>$id_jornada</td>\n";
   echo "\t\t<td>$nombre_jornada</td>\n";
   echo "\t\t<td>$horae</td>\n";
   echo "\t\t<td>$horas</td>\n";
   echo "\t\t<td><a href=eliminarJornada.php?id_jornada=$id_jornada><img src=\"delete.png\" height=\"15\" width=\"15\"></a></td>\n";
   echo "\t\t<td><a href=modificarJornada.php?id_jornada=$id_jornada&nombre_jornada=$nombre_jornada&hora_entrada=$horae&hora_salida=$horas><img src=\"modify.png\" height=\"15\" width=\"15\"></a></td>\n";
   echo "\t</tr>\n";
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