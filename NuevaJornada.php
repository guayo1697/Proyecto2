<html>
  <head>
     <title>
        Ingreso de Jornadas
     </title>
  </head>
  <body background="fondoee.jpg" >
    <right>
<style type="text/css">
      
      * {
        margin:0px;
        padding:0px;
      }
      
      #header {
        margin:left;
        width:500px;
        font-family:Arial, Helvetica, sans-serif;
      }
      
      ul, ol {
        list-style:none;
      }
      
      .nav > li {
        float:left;
      }
      
      .nav li a {
        background-color:#000;
        color:#fff;
        text-decoration:none;
        padding:10px 12px;
        display:block;
      }
      
      .nav li a:hover {
        background-color:#434343;
      }
      
      .nav li ul {
        display:none;
        position:absolute;
        min-width:140px;
      }
      
      .nav li:hover > ul {
        display:block;
      }
      
      .nav li ul li {
        position:relative;
      }
      
      .nav li ul li ul {
        right:-140px;
        top:0px;
      }
      
    </style>
  </head>
  <body>
    <div id="header">
      <ul class="nav">
        <li><a href="">Menu</a>
          <ul>
            <li><a href="index.html">Inicio</a></li>
            <li><a href="ES.html">Entradas/Salidas</a></li>
            <li><a href="">Reporte</a></li>
            <li><a href="NuevaJornada.php">Nueva Jornada</a></li>
            <li><a href="NuevoDep.php">Nueva Departamento</a></li>
            <li><a href="">Nueva Empleado</a></li>
            <li><a href="NuevoPerm.html">Nueva Permiso</a></li>


      </ul>
    </div>
  </right>
    <br>
    <br>
    <br>
    <br>
    <center>
    <H1><font face="Comic Sans MS,arial,verdana"><P style="color:#8b4513; background-color:#ffe4c4;width:500px"> Nueva Jornada </P></H1></font>
    </center>
    <br>
    <br>
    <br>
    <br>
  <center>

     <form action="NJDB.php" method="get">
       <b><font face="Comic Sans MS,arial,verdana"><P style="color:#8b4513; background-color:#ffe4c4;width:400px">
       <br>Codigo de Jornada: </b>
       <br>
       <br>
<?php
       
        $link = mysqli_connect('localhost', 'root', '', 'pfinal') or die('Could not connect: ' . mysqli_error());
        $query = "SELECT id_jornada FROM Jornada";
        $result = mysqli_query($link, $query) or die('Query failed: ' . mysqli_error());

 $codigo=0;

 while ($line = mysqli_fetch_array($result, MYSQL_ASSOC)) {
  $codigo=$line["id_jornada"];
 }
 $codigo = $codigo + 1;
 echo "<input type=text name=codigo readonly required=required value=$codigo>";
mysqli_close($link);
?>
       <br>
       <br>
       <b>Nombre de Jornada: </b>
       <br>
       <br>
       <input type="text" name="nombre" maxlength="20" required = required ><br><br>
       <br>
       <br>
       <b>Hora de Entrada: </b>
       <br>
       <br>
       <input type="time" name="horae" required = required ><br><br>
       <br>
       <br>
       <b>Hora de Salida: </b>
       <br>
       <br>
       <input type="time" name="horas" required = required ><br><br>
       <br>
       <br>
       <input type="submit" name="submit" value="Enviar" align="center">
       <br>
       <br>
       </P>
     </form>
         <br>
         <br>
         <a href="index.html"><P style="color:#8b4513; background-color:#ffe4c4;width:500px">Regresar al Menu<img src="menu.png" height = "20" width = "20"></P></a>
     </center>
  </body>
</html>