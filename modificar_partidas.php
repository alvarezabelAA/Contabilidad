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
         <form action="modificar_p.php" method="post">
            <center><h1>Modificar Cuenta</h1></center>
         </div>
<?php
    
	$NumPartida=$_GET["NumPartida"];
	$Fecha=$_GET["Fecha"];
	$Descripcion=$_GET["Descripcion"];
	

	   echo "<b>Numero de Partida: </b>\n";
      echo "<input class=form-control type=text value=$NumPartida input here... readonly>";
      echo "<input type=hidden name=NumPartida value=$NumPartida>\n";
      echo "</br>";
      echo "<b>Fecha de Partida:</b>\n";
      echo "<input class=form-control type=date value=$Fecha input here... readonly>";
      echo "<input type=hidden name=Fecha value=$Fecha length=20><br>\n";
      echo "</br>";
      echo "<b>Descripcion de Partida: </b>\n";
      echo "<input class=form-control type=text value=$Descripcion input here... name = Descripcion length=100>";
      echo "</br>";
         

?>

       <input type="submit" name="submit" value="Modificar">     
     </form>
     <center><a href="index.html" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Regresar a Listado</a></center>
 <!-- Bootstrap Bundle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
