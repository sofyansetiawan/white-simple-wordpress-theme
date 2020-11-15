	<div class="row div-single-articles <?php if ( has_post_thumbnail() ) { ?>has-thumbnail <?php } ?>">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-10 col-sm-10 col-xs-8">
					<h3 class="title-article"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					
				</div>

				<div class="col-md-2 col-sm-2 col-xs-4">
					<div class="date-article">
						<?php the_time('F Y'); ?>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 content-post">
					<?php the_post_thumbnail('banner-image'); ?>

					<?php the_content(); ?>
				</div>
			</div>
			
			
		</div>
		</div>
