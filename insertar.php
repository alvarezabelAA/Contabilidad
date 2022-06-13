<html>
  <head>
  <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Insertado de datos</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="estilos/estilos.css"></link>
  </head>
  <body>
     <div id="encabezado">



<?php

$NumCuenta=$_GET["NumCuenta"];
$NombreCuenta=$_GET["NombreCuenta"];
$Tipo=$_GET["Tipo"];

$link = mysqli_connect('localhost', 'root', '','contabilidad') or die('Could not connect: ' . mysqli_error());

$query = "INSERT INTO cuentas VALUES ($NumCuenta,'$NombreCuenta','$Tipo')";

$result = mysqli_query($link,$query) or die('Hubo un error: ' . mysqli_error($link));
echo 'Se registraton correctamente sus datos<br>';

mysqli_close($link);


?>


     <center>
         <a href="insertar_forma.html">regresar</a>
     </center>
     </div>
  </body>
</html>
