<?php 

	$numero = mt_rand(0,10);

	if ($numero % 2 == 0) {
		$resultado = "par";
	}
	else $resultado = "impar";

 ?>

 <html>
 <head>
 	<title>e65</title>
 </head>
 <body>
 	<p><?php echo "$numero es $resultado" ?></p>
 </body>
 </html>