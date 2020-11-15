<?php
get_header(); ?>


<div class="container div-post-list">
  <div class="row">
  <div class="col-md-8">
	<?php if (have_posts()) :
		while (have_posts()) : the_post();

		get_template_part('content', 'page');

		endwhile;

		else :
			echo '<p>No content found</p>';

		endif;
		?>

	</div>

  <div class="col-md-3 col-md-offset-1">
  	<?php get_sidebar(); ?>
  </div>
  </div>
</div>



<?php get_footer();

?>