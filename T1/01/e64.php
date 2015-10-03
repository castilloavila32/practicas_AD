<?php

	$numero = mt_rand(100,200);
	$almacen = "numero"; //Almacena el nombre de la variable con el valor real

?>

<html>

	<p><b><u>Numero aleatorio entre 100 y 200, ambos inclusive</u></b></p>
	<br/>
	<br/>
	<h1><?php echo $$almacen ?></h1>

</html>
