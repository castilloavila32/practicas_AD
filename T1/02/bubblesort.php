<?php

	$arr = array();

	for ($i = 0; $i < 100; $i++) { //Creamos el array con todos los numeros aleatorios entre 1 y 100

	  $num_aleatorio = rand(1,100);
	  $arr[$i] = $num_aleatorio;

	}


	for ( $i = 0; $i < 100; $i++ ) { //Ordenamos mediante Bubble Sort

	   for ($j = 0; $j < 100; $j++ ) {

	      if ($arr[$i] < $arr[$j]) {

	         $aux = $arr[$i];
	         $arr[$i] = $arr[$j];
	         $arr[$j] = $aux;

	      }

	   }

	}


	foreach ($arr as $key => $value) { //Mostramos todos los numeros del array ya ordenados junto con la posicion que ocupan en el array

		echo $key.' => '.$value."<br/>";

	}


 ?>