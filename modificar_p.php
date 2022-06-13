<html>
  <head>
  <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Listado Usuarios</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="estilos/estilos.css"></link>
  </head>
  <body>
  <div id="encabezado">


<?php

$NumPartida=$_POST["NumPartida"];
$Fecha=$_POST["Fecha"];
$Descripcion=$_POST["Descripcion"];

$link = mysqli_connect('localhost', 'root', '','contabilidad') or die('Could not connect: ' . mysql_error());

$query = "UPDATE partidas SET Fecha='$Fecha', Descripcion='$Descripcion' WHERE NumPartida=$NumPartida";

$result = mysqli_query($link,$query) or die('Query failed: ' . mysqli_error($link));
echo "Se modifico correctamente<br>";

mysqli_close($link);


?>

     <center>
         <a href="listado_partidas.php">Regresar a Listado</a>
     </center>
   </div>
  </body>
</html>
