	<div class="row div-single-articles <?php if ( has_post_thumbnail() ) { ?>has-thumbnail <?php } ?>">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-10 col-sm-10 col-xs-8">
					<h3 class="title-article"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<p class="author-article">by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></p>
					<p class="comment-article"><i class="fa fa-comment-o"></i>&nbsp;&nbsp;99&nbsp;&nbsp;<i class="fa fa-tags"></i>&nbsp;&nbsp;
					<?php

			$categories = get_the_category();
			$separator = ", ";
			$output = '';

			if ($categories) {

				foreach ($categories as $category) {

					$output .= '<a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>'  . $separator;

				}

				echo trim($output, $separator);

			}

			?></p>
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
