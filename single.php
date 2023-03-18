<?php
get_header();


if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
		echo "<h3>".get_the_title()."</h3>";
		echo '<div class="thumbnail-img">';
		if(has_post_thumbnail()){
			the_post_thumbnail(array(500,500));
		}
		echo "</div>";
		echo "<h4> Kategoria:";
		the_category();
		echo "</h4>";
		echo "<h4> Data publikacji: ".get_the_time('j F Y')."</h4>";
		echo the_content();
	}
}

get_footer();