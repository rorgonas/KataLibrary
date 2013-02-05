<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>QUnit</title>
	
	<!-- Include Header -->
	<link href="http://localhost:8080/KataLibrary/plugin/qunit.css" rel="stylesheet" type="text/css">
	<script src="http://localhost:8080/KataLibrary/plugin/qunit.js"></script>

</head>
	<body>
		<div id="qunit"></div>
		
		<!-- Fizz Buzz - Kata -->
		<?php 

			$namespace = 'fizzbuzz';
			echo '<script src="http://localhost:8080/KataLibrary/dev/app/js/'.$namespace.'.js"></script>';
			echo '<script src="http://localhost:8080/KataLibrary/dev/test/js/'.$namespace.'.test.js"></script>';

		?>
		
	</body>
</html>