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
  <div id="fondo">

  <table class="table caption-top">
  <caption>Lista de Usuarios</caption>
  <thead>
    <tr>
      <th scope="col">Numero Cuenta</th>
      <th scope="col">Nombre Cuenta</th>
      <th scope="col">Tipo Cuenta</th>
      <th scope="col">Eliminar</th>
      <th scope="col">Modificar</th>
    </tr>
  </thead>

<?php

$link = mysqli_connect('localhost', 'root', '', 'contabilidad') or die('Could not connect: ' . mysqli_error());

$query = "select * from Cuentas order by NumCuenta";

$result = mysqli_query($link,$query) or die('Query failed: ' . mysqli_error($link));

$NumCuenta=0;
$NombreCuenta="";
$Tipo="";


while ($line = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

   $NumCuenta=$line["NumCuenta"];
   $NombreCuenta=$line["NombreCuenta"];
   $Tipo=$line["Tipo"];

   echo "\t<tr>\n";
   echo "<td>"; echo $NumCuenta; echo "</td>";
   echo "<td>"; echo $NombreCuenta; echo "</td>";
   echo "<td>"; echo $Tipo; echo "</td>";
   echo "<td> <a href=eliminar.php?NumCuenta=$NumCuenta><img src=remover.png width=30 height=30></a></td>\n";
   echo "<td> <a href=modificar_forma.php?NumCuenta=$NumCuenta&NombreCuenta=$NombreCuenta&Tipo=$Tipo><img src=editar.jpg width=30 height=30></a></td>\n";
   echo "</tr>";
}
echo "</table>\n";


mysqli_close($link);


?>

   <center><a href="index.html" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Regresar a Menu</a></center>
   </div>
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
