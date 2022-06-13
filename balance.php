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
      <center><h1>Reporte Balance</h1></center>
   </div>
</br>
<table class="table caption-top">
  <caption>Seccion por fechas</caption>
  <thead>
    <tr>

      <th scope="col">Numero Cuenta</th>
      <th scope="col">Suma Debe</th>
      <th scope="col">Suma Haber</th>
      

    

<?php
$cont=0;
$suma1=0;
$link = mysqli_connect('localhost', 'root', '','contabilidad') or die('Could not connect: ' . mysqli_error());

$query = "SELECT NumCuenta, sum(if (debehaber='D',valor,0)) as Debe,
sum(if (debehaber='H',valor,0)) as Haber
FROM DetallePartida
GROUP BY NumCuenta";
$result = mysqli_query($link,$query) or die('Query failed: ' . mysqli_error($link));

$query2="SELECT NumCuenta, sum(if (debehaber='D',valor,0)) as Debe1,
sum(if (debehaber='H',valor,0)) as Haber1
FROM DetallePartida";

$result2 = mysqli_query($link,$query2) or die('Query failed: ' . mysqli_error($link));

while ($line = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
  
  $NumCuenta=$line["NumCuenta"];
  $Debe=$line["Debe"];
  $Haber=$line["Haber"];
 
  
  echo "\t<tr>\n";
  echo "\t\t<td>$NumCuenta</td>\n";
  echo "\t\t<td>$Debe</td>\n";
  echo "\t\t<td>$Haber</td>\n";
  echo "\t</tr>\n";
}


?>
<th scope="col"> </th>
<th scope="col"> Suma Total Debe</th>
<th scope="col"> Suma Total Haber</th>
</tr>
</thead>
</br>

<?php

while ($line = mysqli_fetch_array($result2,MYSQLI_ASSOC)) {
  $SumaD=$line["Debe1"];
  $SumaH=$line["Haber1"];
  
echo "\t<tr>\n";
echo "\t\t<td></td>\n";
echo "\t\t<td>$SumaD</td>\n";
echo "\t\t<td>$SumaH</td>\n";
}
mysqli_close($link);

?>
</table>


<center><a href="Menu_Reportes.html" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Regresar</a></center>

 <!-- Bootstrap Bundle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>