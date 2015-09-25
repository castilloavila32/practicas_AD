<?php

	$numero = mt_rand(100,200);
	$otro = &$numero; //Variable de referencia

?>

<html>

	<p><b><u>Numero aleatorio entre 100 y 200, ambos inclusive</u></b></p>
	<br/>
	<br/>
	<h1><?php echo $otro ?></h1>

</html>