<?php get_header(); ?>

<main class="main-content">
	<div class="grid">
		<div class="row">
			<?php
	
				if(have_posts()) : 
				while(have_posts()) : the_post();
		
					get_template_part('template-parts/post/content','post');
		
				endwhile;
		
				else :
		
				endif;
	
			?>
		</div> <!-- .row -->
	</div> <!-- .grid -->
</main> <!-- .main-content -->

<?php get_footer(); ?>