<?php 

	// echo '<br />DOCUMENT_ROOT: '.$_SERVER['DOCUMENT_ROOT'];
	// echo '<br />SCRIPT_FILENAME: '.$_SERVER["SCRIPT_FILENAME"];
	// echo '<br />SCRIPT_NAME: '.$_SERVER["SCRIPT_NAME"];
	// echo '<br />PHP_SELF: '.$_SERVER["PHP_SELF"];
	// echo '<br />SERVER_NAME: '.$_SERVER["SERVER_NAME"];
	// echo '<br />SERVER URL: '.$_SERVER["HTTP_HOST"];
	// echo '<br />REQUEST_URI: '.$_SERVER['REQUEST_URI'];

	$root = dirname(dirname(__DIR__));
	//echo '<br /><br />2 level up current DIR: '. $root;

	$root = dirname(__DIR__);
	//echo '<br />1 level up current DIR: '. $root;

	$root = __DIR__;
	//echo '<br />current DIR: '. $root;


	// define Project root path
	define('KATA_ROOT', 'http://localhost:8080/KataLibrary/');

	// define Dev path
	define('DEV_ROOT', 'http://localhost:8080/KataLibrary/dev');


	?>
