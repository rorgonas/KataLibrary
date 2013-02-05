<?php include_once 'class/page.class.php'; ?>

<!DOCTYPE html>
<html>
<head>
	
	<!-- Meta includes -->
	<meta charset="utf-8">
	<title>Kata Library</title>

	<!-- List of includes -->
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="css/custom.css" rel="stylesheet">
	
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>


</head>
	<body>
		<div id="wrap">
			
			<!-- Inlcude Main Nav -->
			<?php echo Page::NavList(); ?>


			<!-- Content -->
			<?php echo Page::Content(); ?>

		</div> <!-- #wrap -->

		
		<!-- Inlcude Footer -->
		<?php echo Page::MainFooter(); ?>

	</body>
</html>