<?php

	do {
		$numero = mt_rand(0,50);

		if ($numero == 16) {

			echo $numero.".";
			break;
		}
		else echo $numero.", ";

	}
	while ($numero != 16);

 ?>