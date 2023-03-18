<?php
get_header();


if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();

		echo '<a href="'.get_the_permalink().'">';
		echo "<h3>".get_the_title()."</h3>";
		echo '<div class="thumbnail-img">';
		if(has_post_thumbnail()){
			the_post_thumbnail('thumbnail');
		}
		echo "</div>";
		echo '</a>';

		echo "<h4> Kategoria:";
		the_category();
		echo "</h4>";
		
		echo "<h4> Data publikacji: ".get_the_time('j F Y')."</h4>";
		echo "<hr>";


	}
}

get_footer();