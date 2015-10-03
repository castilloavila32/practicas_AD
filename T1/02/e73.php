<?php

	$numero1;

	for ($i = 1; $i <= 5; $i++) {

		$numero = mt_rand(0,12);
	    if ($numero < 10) $numero1 = $numero1.((string)$numero);
		else if ($numero == 10) $numero1 = $numero1.'a';
		else if ($numero == 11) $numero1 = $numero1.'b';
		else if ($numero == 12) $numero1 = $numero1.'c';

	}


	$numero2;

	for ($i = 1; $i <= 5; $i++) {

		$numero = mt_rand(0,12);
		if ($i == 3) $numero2 = $numero2.'.';
	    else if ($numero < 10) $numero2 = $numero2.((string)$numero);
		else if ($numero == 10) $numero2 = $numero2.'a';
		else if ($numero == 11) $numero2 = $numero2.'b';
		else if ($numero == 12) $numero2 = $numero2.'c';

	}

?>

<meta charset="utf-8"/>
<html>
<head>
 	<title>e73</title>
</head>
<body>
	 <p><?php echo "La cadena entera " ?> <b><?php echo "$numero1" ?></b> <?php  echo " se convierte al entero " ?> <b><?php echo ((integer)$numero1) ?></b></p>

	 <p><?php echo "La cadena real " ?> <b><?php echo "$numero2" ?></b> <?php  echo " se convierte al número real " ?> <b><?php echo ((float)$numero2) ?></b></p>
</body>
</html>