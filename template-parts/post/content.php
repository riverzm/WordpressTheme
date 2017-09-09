<div class="col-wd-12 col-md-6 col-sm-4">
	<div class="col">
		<article class="post-<?php the_ID(); ?> the-excerpt">

				<div class="excerpt-image">
				<a class="the-excerpt-link" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_post_thumbnail('post-thumbnails'); ?>
				</a> <!-- .the-excerpt-link -->
				</div> <!-- .excerpt-title -->
		
				<header class="excerpt-head">
					<h2><a class="the-excerpt-link" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
					<h5 class="post-info">
						<?php _e('Posted by '); ?> <?php the_author(); ?> 
						<?php _e(' on '); ?> <?php the_time('F j, Y'); ?>
					</h5> <!-- .post-info -->
				</header> <!-- .excerpt-head -->
		
			<?php the_excerpt(); ?>
		
			<footer class="excerpt-foot">
				<?php edit_post_link(); ?>
			</footer> <!-- .excerpt-foot -->

	</a> <!-- .the-excerpt-link -->
</article> <!-- .the-excerpt -->
</div> <!-- .col -->
</div> <!-- .col- -->
