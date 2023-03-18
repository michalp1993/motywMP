<?php
get_header();


echo '<div class="container">';
if (have_posts()) {
	while (have_posts()) {
		the_post();
		?>
		<div class="row mp-article-item">
			<div class="col-xl-4 col-md-5 col-12">
				<div class="thumbnail-img">
					<a href="<?php the_permalink() ?>">
						<?php
						if (has_post_thumbnail()) {
							the_post_thumbnail('large', array('class'=>'img-fluid'));
						}
						?>
					</a>
				</div>
			</div>
			<div class="col-xl-8 col-md-7 col-12">
				<?php the_title( sprintf( '<h3 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
				<h5 class="d-md-none d-lg-block"> Kategoria: <?php the_category(); ?>
				</h5>
				<h5 class="d-md-none d-lg-block"> Data publikacji: <?php the_time('j F Y') ?>
				</h5>
				<p><?php the_excerpt() ?></p>
			</div>
		</div>
		<?php
	}
}
echo '</div>';

get_footer();