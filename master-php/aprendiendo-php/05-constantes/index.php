<?php
	
	//CONSTANTES
	define('nombre','Andres Cureño');
	define('web','anderdefector');

	echo '<h1>'.nombre.'</h1>';
	echo web;
	
	//Constantes predefinidas
	echo PHP_OS.'<br>';
	echo PHP_VERSION.'<br>';
	echo PHP_EXTENSION_DIR.'<br>';
	echo __LINE__;
	echo __FILE__;
	echo __FUNCTION__;
	
?>
