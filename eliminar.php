<html>
  <head>
  <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Eliminado</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="estilos/estilos.css"></link>
  </head>
  <body>
   <div id="encabezado">

<?php

$NumCuenta=$_GET["NumCuenta"];

$link = mysqli_connect('localhost', 'root', '','contabilidad') or die('Could not connect: ' . mysqli_error());

$query = "DELETE FROM cuentas WHERE NumCuenta=$NumCuenta";

$result = mysqli_query($link,$query) or die('Query failed: ' . mysqli_error($link));

echo 'Se elimino correctamente<br>';

mysqli_close($link);


?>


     <center>
         <a href="listado.php">Regresar</a>
     </center>
     </div>
  </body>
</html>
