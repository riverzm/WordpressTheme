<article class="post-<?php the_ID(); ?> the-post">

	<header class="post-header">
		<h1><?php the_title(); ?></h1>
		<h5 class="post-info">
			<?php _e('Posted by '); ?> <?php the_author(); ?> 
			<?php _e(' on '); ?> <?php the_time('F j, Y'); ?>
		</h5> <!-- .post-info -->
	</header> <!-- .post-head -->	
	
	<div class="p-content">
		<div class="post-image">
			<?php the_post_thumbnail('post-thumbnails'); ?>
		</div> <!-- .post-image -->
	
		<div class="post-body">
			<?php the_content(); ?>
			<p><?php edit_post_link(); ?></p>
		</div> <!-- .post-body -->
	
		<footer class="post-footer">
			
		</footer> <!-- .post-footer -->
	</div> <!-- .p-content -->

</article> <!-- .the-post -->
