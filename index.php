<?php get_header(); ?>

<main class="main-content">
	<div class="grid">
		<div class="row">
			
			<?php
	
				while(have_posts()) : the_post();
		
					get_template_part('template-parts/post/content', get_post_format() );
		
				endwhile;
	
			?>
			
		</div> <!-- .row -->
	</div> <!-- .grid -->
</main> <!-- .main-content -->

<?php get_footer(); ?>