<?php

/*
Template Name: Special Layout
*/

get_header();

if (have_posts()) :
	while (have_posts()) : the_post(); ?>
	
<div class="container div-post-list">
  <div class="row">
  <div class="col-md-12">
		<h2><?php the_title(); ?></h2>
		
		<!-- info-box -->
		<div class="info-box">
			<h4>Disclaimer Title</h4>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim venia.</p>
		</div><!-- /info-box -->
		
		<?php the_content(); ?>
	</article>
	
	<?php endwhile;
	
	else :
		echo '<p>No content found</p>';
	
	endif;?>

  </div>
</div>
</div>	
<?php get_footer();

?>