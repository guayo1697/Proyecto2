<html>
  <head>
     <title>
        Permiso Registrado
     </title>
  </head>
  <body background="fondoee.jpg" >
     <center><br>

<?php
     $codigo = $_GET["codigo"];
     $fecha = $_GET["fecha"];
     $motivo = $_GET["motivo"];
     $link = mysqli_connect('localhost', 'root', '', 'pfinal') or die('Could not connect: ' . mysqli_error());
    $query = "INSERT INTO Permiso VALUES ('$motivo',STR_TO_DATE('$fecha', '%Y-%m-%d'),$codigo)";
     $result = mysqli_query($link, $query) or die('Query failed: ' . mysqli_error($link));
mysqli_close($link);
?>
     	 <br>
     	 <br>
         <font face="Comic Sans MS,arial,verdana"><P style="color:#8b4513; background-color:#ffe4c4;width:400px">
     	 <a href="ES.html">Nuevo Permiso<img src="agregar.png" height = "20" width = "20"></a>
     	 <br>
     	 <br>
         <a href="index.html">Regresar al Menú<img src="menu.png" height = "20" width = "20"></a></P>
         <br>
         <br>
     </center>
  </body>
</html>