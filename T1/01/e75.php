<?php

	$numero = mt_rand(1,100);

?>

<html>

<style type="text/css">
	.cajita {
		width:30px;
		text-align:center;
		border: solid 1px red;
		background-color: aqua;
		color: green;
	}
</style>

	<p><b><u>Numero aleatorio entre 1 y 100, ambos inclusive</u></b></p>
	<br/>
	<br/>
	<p><textarea class="cajita" readonly><?php echo $numero ?></textarea></p>

</html>