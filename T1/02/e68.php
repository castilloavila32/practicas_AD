<?php

	$numero1 = mt_rand(-100,100);
	$numero2 = mt_rand(1,100);
	$suma = $numero1 + $numero2;
	$resta = $numero1 - $numero2;
	$multiplicacion = $numero1 * $numero2;
	$division = $numero1 / $numero2;
	$resto = $numero1 % $numero2;
	$opuesto = -$numero1;
	$incremento = ++$numero1;
	$numero1--;
	$decremento = --$numero1;
	++$numero1;



 ?>

<html>
<title>e68</title>
<body>
	<p><b><?php echo "$numero1 + $numero2 = $suma" ?></b></p>
	<p><b><?php echo "$numero1 - $numero2 = $resta" ?></b></p>
	<p><b><?php echo "$numero1 * $numero2 = $multiplicacion" ?></b></p>
	<p><b><?php echo "$numero1 / $numero2 = $division" ?></b></p>
	<p><b><?php echo "$numero1 % $numero2 = $resto" ?></b></p>
	<p><b><?php echo "El opuesto de $numero1 es $opuesto" ?></b></p>
	<p><b><?php echo "$numero1++ vale $incremento" ?></b></p>
	<p><b><?php echo "$numero1-- vale $decremento" ?></b></p>
</body>
</html>