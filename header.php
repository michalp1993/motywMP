<!doctype html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php
	wp_body_open(); 
	wp_nav_menu( array('theme_location'=>'primary') ); ?>

<?php
if ( function_exists( 'the_custom_logo' ) ) {
	the_custom_logo();
}
?>
<h1>Strona</h1>
