<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
	<link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <title>INICIO</title>
  </head>
<body>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<body style="background-color: black">
	<center><div class="img-fluid" style="background-image: url('imagen3.png');background-repeat:no-repeat;  background-position-x:center;
  background-position-y:center;  height: 100vh ; background-size: cover; width: 201vh">
  <div class="header">

</div>
<br>

	    <br>
<div>
            <div>
                <br>
            </div>

 <br>
 <div>
<?php

$odv=$_POST["odv"];
$restitucion=$_POST["restitucion"];
$dato_tiro=$_POST["dato_tiro"];

if($odv>64 or $restitucion>64  or $dato_tiro>64)
{
	echo "<h4 style='color:red;'>ALGUNO DE LOS DATOS</h4>";
	echo "<h4 style='color:red;'>ES MAYOR DE 6400,</h4>";
	echo "<h4 style='color:red;'>REVISE DATOS</h4>";
}


$a=0;
$resultado=0;
$a=$dato_tiro-$restitucion;
$resultado=$odv-$a;
echo "<br/>";
echo "<br/>";
echo "<br/>";
	echo "<br/>";
echo "<h4 style='color:red;'>LA ORIENTACIÓN ES:</h4>";
	echo "<br/>";

if($resultado>0)
{
	if($resultado<=999)
	{
		echo "<h4 style='color:red;'>0$resultado  ºº</h4>";
	}
	else
	{
		echo "<h4 style='color:red;'>$resultado  ºº</h4>";
	}
}
else
{
	$resultado=$resultado+6400;
	if($resultado<=999)
	{
		echo "<h4 style='color:red;'>0$resultado  ºº</h4>";
	}
	else
	{
		echo "<h4 style='color:red;'>$resultado  ºº</h4>";
	}
}

echo "<br>";
echo "<br>";




?>

   <form action="index.php" method="POST" >
	  <button type="submit" class="btn btn-warning">Regresar</button>
	   </form>
	   
<?php
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<small style='color:white;'>power by Barrero and Baños</small>";
?>  
</div>
</div></center>
   </body> 
  </body>
</html>
