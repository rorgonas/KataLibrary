<?php 
$root = dirname($_SERVER['SCRIPT_FILENAME']);
// echo $root; 
// $root = "C:/wamp/www/KataLibrary"

require_once("$root/config/setup.php");
$page = new Page($root);

?>