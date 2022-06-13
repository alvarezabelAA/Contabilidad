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
<?php
$link = mysqli_connect('localhost', 'root', '', 'contabilidad' ) or die('Could not connect: ' . mysql_error());
$query = "select * from cuentas order by NumCuenta";
$NumCuenta=0;
$NombreCuenta="";
$Tipo="";
$NumCuenta2=0;
$NombreCuenta2="";
$Tipo2="";
?>
    <!-- ----------------------------------------------------------------------------------------------------------------------------- -->
    <div id="encabezado">
       <center><h1>Datos de Partida</h1></center>
      </div>
   </br>
   <form action="insertar_partidas.php" method="get">
      Numero de Partida: <input class="form-control" type="number" value="Ingrese su numero aqui..." aria-label="readonly input example" name="NumPartida">
      Fecha de Partida: <input class="form-control" type="date" value="Ingresar la fecha..." aria-label="readonly input example" name="Fecha">
      Descripcion:   <input class="form-control" type="text" value="Ingrese la descripcion..." aria-label="readonly input example" name="Descripcion">
   </br>

</br>
<div class="hola">
Debe:<select name=Cuenta1>
   </br>     
</br>     
<?php
$result = mysqli_query($link, $query) or die('Query failed: ' . mysqli_error($link));
while ($line = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
   $NumCuenta=$line["NumCuenta"];
   $NombreCuenta=$line["NombreCuenta"];
   $Tipo=$line["Tipo"];
   echo "<option value=$NumCuenta>$NombreCuenta</option>\n";
   
}
?>
</select>
</br>
</div>
<input class="form-control" type="number"  aria-label="readonly input example" name="ValorDeDebe">
</br>   

<!-- ----------------------------------------------------------------------------------------------------------------------------- -->
</br>


Haber:<select name=Cuenta2>
 
</br> 
<?php

$result1 = mysqli_query($link, $query) or die('Query failed: ' . mysqli_error($link));
while ($line = mysqli_fetch_array($result1, MYSQLI_ASSOC)) {
   $NumCuenta2=$line["NumCuenta"];
   $NombreCuenta2=$line["NombreCuenta"];
   $Tipo2=$line["Tipo"];
   echo "<option value=$NumCuenta2>$NombreCuenta2</option>\n";
   mysqli_close($link);
}
?>
</select>
</br>
<input class="form-control" type="number"  aria-label="readonly input example" name="ValorDeHaber">
</br>
               <button type="submit" class="btn btn-primary" name="submit">Ingresar</button>
               </form>
            <center>
            <center><a href="index.html" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Regresar</a></center>
            </center>






      <!-- Bootstrap Bundle with Popper -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>