<?php get_header(); ?>

<main class="main-content">
	<div class="grid">
		<div class="row">
				
				<?php
					
					$recentposts = new WP_Query('posts_per_page=3');
					
					while($recentposts->have_posts()) : $recentposts->the_post();
		
						get_template_part('template-parts/post/content', get_post_format() );
		
					endwhile;
	
				?>
			
		</div> <!-- .row -->
	</div> <!-- .grid -->
</main> <!-- .main-content -->


<?php get_footer(); ?>