<!doctype html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div class="container-fluid mp-main-header">
		<div class="container">
			<div class="mp-logo">
			<?php
			if (function_exists('the_custom_logo')) {
				the_custom_logo();
			}
			?>
			</div>
			<div class="mp-main-manu">
				<?php wp_nav_menu(array('theme_location' => 'primary')); ?>
			</div>
		</div>
	</div>