<html>
  <head>
     <title>
        Modificar Departamentos
     </title>
  </head>
  <body background="fondoee.jpg" >
     <center><br>
<P style="color:#8b4513; background-color:#ffe4c4;width:500px">
<table border=3>
<tr>
<th><b>ID Departamento</b></th>
<th>Nombre de Departamento</th>
</tr>

<?php

$link = mysqli_connect('localhost', 'root', '', 'pfinal') or die('Could not connect: ' . mysqli_error());


$query = "select * from departamento ORDER BY id_departamento";
$result = mysqli_query($link, $query) or die('Query failed: ' . mysqli_error($link));
$id_departamento = 0;
$nombre_departamento="";


while ($line = mysqli_fetch_array($result, MYSQL_ASSOC)){ 

   $id_departamento=$line["id_departamento"];
   $nombre_departamento=$line["nombre_departamento"];
   echo "\t<tr>\n";
   echo "\t\t<td>$id_departamento</td>\n";
   echo "\t\t<td>$nombre_departamento</td>\n";
   echo "\t\t<td><a href=eliminarDepartamento.php?id_departamento=$id_departamento><img src=\"delete.png\" height=\"15\" width=\"15\"></a></td>\n";
   echo "\t\t<td><a href=modificarDepartamento.php?id_departamento=$id_departamento&nombre_jornada=$nombre_departamento><img src=\"modify.png\" height=\"15\" width=\"15\"></a></td>\n";
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