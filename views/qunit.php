<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>QUnit</title>
	
	<!-- Include Header -->
	<link href="../plugins/qunit/qunit.css" rel="stylesheet" type="text/css">
	<script src="../plugins/qunit/qunit.js"></script>

</head>
	<body>
		<div id="qunit"></div>
		
		<!-- Fizz Buzz - Kata -->
		<?php 
			// create diff namespace for each qUnit from link alt tab
			if (isset($_GET['kata'])) {
				$kata_name = $_GET['kata'];
			}
			echo '<script src="../app/js/'.$kata_name.'.js"></script>';
			echo '<script src="../test/js/'.$kata_name.'.test.js"></script>';

		?>
		
	</body>
</html>