<?php
get_header();
?>
<div class="container">
	<div class="row">
		<div class="col-lg-9">
			<?php
			if (have_posts()) {
				while (have_posts()) {
					the_post();

					the_title('<h2>', '</h2>');
					the_content('<p>', '</p>');

				}
			}
			?>


		</div>
		<div class="col-lg-3 d-lg-block d-none">
			<?php get_sidebar() ?>

		</div>


	</div>
</div>

<?php
get_footer();