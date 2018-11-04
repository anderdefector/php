<?php
	/*
	TIPOS DE DATOS:
	Enteros (int/integer)
	Coma flotante / decimales (float/double)
	Cadenas (string)
	Boleano (bool)
	null
	Array
	Objetos
	*/
	
	$numero = 100;
	echo gettype($numero).'<br>';
	
	$decimal = 30.5;
	echo gettype($decimal).'<br>';

	$cadena = "Hola que pues";
	$texto = 'Soy un texto '.$numero;
	echo $texto.'<br>';
	echo gettype($cadena).'<br>';

	$verdadero = true;
	echo gettype($verdadero).'<br>';

	$nula = null;
	echo gettype($nula).'<br>';

	//Debuggear
	$mi_nombre= "Andres Cureño Ramirez";
	var_dump($mi_nombre);
?>
