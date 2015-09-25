<?php

	$numero = mt_rand(1,100);

?>

<html>

	<p><b><u>Numero aleatorio entre 1 y 100, ambos inclusive</u></b></p>
	<br/>
	<br/>
	<h1>

		<?php echo $numero ?>,
		<?php printf("%b",$numero) ?>,
		<?php printf("%o",$numero) ?>,
		<?php printf("%X",$numero) ?>

	</h1>

</html>