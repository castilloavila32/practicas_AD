<?php

	$numero1 = mt_rand()/mt_getrandmax();
	$numero2 = -1000+mt_rand()/mt_getrandmax()*2000;

 ?>

<meta charset="UTF-8">
 <html>
 <head>
 	<title>e69</title>
 </head>
 <body>
 	<p><b><?php echo "Numero real aleatorio entre 0 y 1: " ?></b> <?php echo "$numero1" ?></p>
 	<p><b><?php echo "Numero real aleatorio entre -1000 y 1000: " ?></b> <?php echo "$numero2" ?></p>
 	<p><b><?php echo "Segundo número truncado a las milésimas: " ?></b> <?php echo round(($numero2 > 0)?$numero2-0.0005:$numero2+0.0005,3) ?></p>
 	<p><b><?php echo "Segundo número truncado a las decenas: " ?></b> <?php echo round(($numero2 > 0)?$numero2-5:$numero2+5,-1) ?></p>
 </body>
 </html>