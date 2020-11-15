<?php

get_header(); ?>

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="<?php bloginfo('template_directory'); ?>/img/slider2.jpg" alt="Slider1" class="img-responsive">
    </div>
    <div class="item">
      <img src="<?php bloginfo('template_directory'); ?>/img/slider3.jpg" alt="Slider1" class="img-responsive">
    </div>
    <div class="item">
      <img src="<?php bloginfo('template_directory'); ?>/img/slider4.jpg" alt="Slider1" class="img-responsive">
      <!--<div class="carousel-caption">
        Test
      </div>-->
    </div>

  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<div class="container div-galery-feed">
<div class="row">
	<div class="col-md-12">
		<h3 class="title-galery-feed">News Feed</h3>
	</div>
</div>

<div class="row galery-feed">
	<div class="col-md-4 col-sm-6 col-xs-6"><img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/img/feed1.png" /></div>
	<div class="col-md-4 col-sm-6 col-xs-6"><img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/img/feed2.png" /></div>
	<div class="col-md-4 col-sm-6 col-xs-6"><img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/img/feed3.png" /></div>
	<div class="col-md-4 col-sm-6 col-xs-6"><img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/img/feed4.png" /></div>
	<div class="col-md-4 col-sm-6 col-xs-6"><img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/img/feed5.png" /></div>
	<div class="col-md-4 col-sm-6 col-xs-6"><img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/img/feed6.png" /></div>
</div>
<div class="center">
	<a href="#" class="more-galery-feed">View More</a>
</div>

</div>

<div class="container div-articles">

<?php // opinion posts loop begins here
						$opinionPosts = new WP_Query('cat=7&posts_per_page=2');

						if ($opinionPosts->have_posts()) :

							while ($opinionPosts->have_posts()) : $opinionPosts->the_post(); ?>
								<!-- post-item -->
								<div class="post-item clearfix">

									<!-- post-thumbnail -->
									<div class="square-thumbnail">
										<a href="<?php the_permalink(); ?>"><?php
										if (has_post_thumbnail()) {
											the_post_thumbnail('square-thumbnail');
										} else { ?>

											<img src="<?php echo get_template_directory_uri(); ?>/images/leaf.jpg">

										<?php } ?></a>
									</div><!-- /post-thumbnail -->

									<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <span class="subtle-date"><?php the_time('n/j/Y'); ?></span></h4>

									<?php the_excerpt(); ?>

									</div><!-- /post-item -->
							<?php endwhile;

							else :
								// fallback no content message here
						endif;
						wp_reset_postdata(); ?>
</div>
	
	<?php get_footer();

?>