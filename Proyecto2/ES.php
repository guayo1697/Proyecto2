<html>
  <head>
     <title>
        Ingreso de Entradas/Salidas
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
    <H1><font face="Comic Sans MS,arial,verdana"><P style="color:#8b4513; background-color:#ffe4c4;width:500px"> Marcador de Entrada/Salida </P></H1></font>
    </center>
    <br>
    <br>
    <br>
    <br>
  <center>

     <form action="ESDB.php" method="get">
       <b><font face="Comic Sans MS,arial,verdana"><P style="color:#8b4513; background-color:#ffe4c4;width:400px">
       <br>Codigo de Trabajador: </b>
       <?php

            $link = mysqli_connect('localhost', 'root', '', 'pfinal') or die('Could not connect: ' . mysqli_error());


            $query = "select * from Empleado order by id_empleado";
            $result = mysqli_query($link,$query) or die('Query failed: ' . mysqli_error($link));

            $codigo=1;
            $nombre="";

            echo "<select name=codigo>\n";

            while ($line = mysqli_fetch_array($result, MYSQL_ASSOC)) {

               $codigo=$line["id_empleado"];
               $nombre=$line["nombre_empleado"];

               echo "<option name=CuentaD value=$codigo>$codigo=$nombre</option>";
            }

            echo "</select>\n";

            mysqli_close($link);


?>
       <br>
       <br>
       <b>Tipo de Marca: </b>
       <br>
       <br>
       <b><font face="Comic Sans MS,arial,verdana">ENTRADA </b><input type="radio" name="es" value="E">
       <br>
       <br>
       <b><font face="Comic Sans MS,arial,verdana">SALIDA </b><input type="radio" name="es" value="S">
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