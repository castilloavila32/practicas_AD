<?php

	$numero1 = mt_rand(1,10);
	$numero2 = mt_rand(1,10);
	$numero3 = mt_rand(1,10);

	echo "$numero1, $numero2, $numero3 <br/>";

	if ($numero1 >= $numero2 && $numero1 >= $numero3) {
			if ($numero2 >= $numero3) {
				echo "$numero1, $numero2, $numero3";
			}
			else {
				echo "$numero1, $numero3, $numero2";
			}
	}

	else if ($numero2 >= $numero1 && $numero2 >= $numero3) {
			if ($numero1 >= $numero3) {
				echo "$numero2, $numero1, $numero3";
			}
			else {
				echo "$numero2, $numero3, $numero1";
			}
	}

	else {
		if ($numero1 >= $numero2) {
				echo "$numero3, $numero1, $numero2";
			}
			else {
				echo "$numero3, $numero2, $numero1";
			}
	}


 ?>