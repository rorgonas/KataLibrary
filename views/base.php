<!DOCTYPE html>
<html>
<head>
	<?php echo $this->writeIncludes(); ?>
</head>
	<body>
		<div id="wrap">
		
			<!-- Inlcude Main Nav -->
			<?php echo $this->writeSection("navbar"); ?>

			<div class="container-fluid">
				<div class="row-fluid">
					<aside class="span3">
						<!-- Inlcude Main Nav -->
						<?php echo $this->writeSection("asidenav"); ?>
					</aside>
					<section class="span9">
						<!-- Content -->
						<?php echo $this->writeSection("body"); ?>
					</section>
		</div> <!-- #wrap -->

		
		<!-- Inlcude Footer -->
		<?php echo $this->writeSection("footer"); ?>

	</body>
</html>