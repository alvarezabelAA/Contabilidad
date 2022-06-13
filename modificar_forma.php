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
      <center><h1>Modificar Cuenta</h1></center>
   </div>
</br>
   <center>
   <form action="modificar.php" method="post">
<?php
    
	$NumCuenta=$_GET["NumCuenta"];
	$NombreCuenta=$_GET["NombreCuenta"];
	$Tipo=$_GET["Tipo"];
	

	    echo "<b>Numero de Cuenta: \n";
       echo "<input class=form-control type=text value=$NumCuenta input here... readonly>";
       echo "<input type=hidden name=NumCuenta value=$NumCuenta>\n";
       echo "</br>";
       echo "<b>Nombre de Cuenta:</b>\n";
       echo "<input class=form-control type=text value=$NombreCuenta class=form-control name=NombreCuenta length=20>";
       echo "</br>";
       echo "<b>Tipo de Cuenta: ";
       echo "</br>";
       echo "$Tipo";
       echo "</br>";
       echo "<input type=hidden name=Tipo value=$Tipo>\n";
         

?>

       <input type="submit" name="submit" value="Modificar">
           
     </form>
     </center>
     <center>
     <center><a href="listado.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Regresar a Listado</a></center>
     </center>

 
   <!-- Bootstrap Bundle with Popper -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
