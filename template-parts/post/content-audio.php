<article class="post-<?php the_ID(); ?> the-excerpt">
	<a class="the-excerpt-link" href="<?php the_permalink(); ?>">	
	
		<?php echo main_embedded_post( array('audio','iframe')); ?>
	
		<header class="excerpt-head">
			<h2><a class="the-excerpt-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<h5 class="post-info">
				<?php _e('Posted by '); ?> <?php the_author(); ?> 
				<?php _e(' on '); ?> <?php the_time('F j, Y'); ?>
			</h5> <!-- .post-info -->
		</header> <!-- .excerpt-head -->

		
		<footer class="excerpt-foot">
			<?php edit_post_link(); ?>
		</footer> <!-- .excerpt-foot -->
	</a> <!-- .the-excerpt-link -->
</article> <!-- .the-excerpt -->