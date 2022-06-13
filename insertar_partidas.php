<html>
  <head>
  <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Insertado de datos de partida</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="estilos/estilos.css"></link>
  </head>
  <body>
     <div id="encabezado">

<?php
$Valor=0;
$Valor2=0;
$NumPartida=$_GET["NumPartida"];
$Fecha=$_GET["Fecha"];
$Descripcion=$_GET["Descripcion"];
$NumCuenta=$_GET["Cuenta1"];
$NumCuenta2=$_GET["Cuenta2"];
$Valor=$_GET["ValorDeDebe"];
$Valor2=$_GET["ValorDeHaber"];

$link = mysqli_connect('localhost', 'root', '','contabilidad') or die('Could not connect: ' . mysqli_error());

$query = "INSERT INTO partidas VALUES ($NumPartida,'$Fecha','$Descripcion')";
$result = mysqli_query($link,$query) or die('Hubo un error: ' . mysqli_error($link));
$query2 = "INSERT INTO detallepartida VALUES ($NumPartida, $NumCuenta, 'D',$Valor)";
$result2 = mysqli_query($link,$query2) or die('Hubo un error: ' . mysqli_error($link));
$query3 = "INSERT INTO detallepartida VALUES ($NumPartida, $NumCuenta2, 'H',$Valor2)";
$result3 = mysqli_query($link,$query3) or die('Hubo un error: ' . mysqli_error($link));

echo 'Se registraton correctamente sus datos<br>';

mysqli_close($link);

?>



<center><a href="insertar_partida.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Regresar</a></center>
     </div>
  </body>
</html>
