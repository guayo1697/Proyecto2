<html>
  <head>
     <title>
        Empleado Ingresado
     </title>
  </head>
  <body background="fondoee.jpg" >
     <center><br>

<?php
     $codigo = $_GET["codigo"];
     $nombre = $_GET["nombre"];
     $departamento = $_GET["Departamento"];
     $jornada = $_GET["Jornada"];
     $link = mysqli_connect('localhost', 'root', '', 'pfinal') or die('Could not connect: ' . mysqli_error());
    $query = "INSERT INTO Empleado VALUES ($codigo,'$nombre',$departamento,$jornada)";
     $result = mysqli_query($link, $query) or die('Query failed: ' . mysqli_error($link));
mysqli_close($link);
?>
     	 <br>
     	 <br>
         <font face="Comic Sans MS,arial,verdana"><P style="color:#8b4513; background-color:#ffe4c4;width:400px">
     	 <a href="ES.html">Nuevo Empleado<img src="agregar.png" height = "20" width = "20"></a>
     	 <br>
     	 <br>
         <a href="index.html">Regresar al Menú<img src="menu.png" height = "20" width = "20"></a></P>
         <br>
         <br>
     </center>
  </body>
</html>