<html>
  <head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Proyecto 1</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="estilos/estilos.css"></link>
  
      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  

    </head>
    <body class="p-5">
  <div id="encabezado">


<?php

$NumCuenta=$_POST["NumCuenta"];
$NombreCuenta=$_POST["NombreCuenta"];
$Tipo=$_POST["Tipo"];

$link = mysqli_connect('localhost', 'root', '','contabilidad') or die('Could not connect: ' . mysql_error());

$query = "UPDATE Cuentas SET NombreCuenta='$NombreCuenta', Tipo='$Tipo' WHERE NumCuenta=$NumCuenta";

$result = mysqli_query($link,$query) or die('Query failed: ' . mysqli_error($link));
echo "Se modifico correctamente<br>";

mysqli_close($link);


?>

     <center>
     <center><a href="listado.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Regresar a Listado</a></center>

     </center>
   </div>
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
