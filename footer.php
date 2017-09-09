<footer class="main-footer">
	<div class="grid">
		<div class="row">
		
			<div class="footer-widgets">
				<?php if(dynamic_sidebar('footer_widgets')) : else : endif; ?>
			</div> <!-- .footer-widgets -->

			<div class="col-wd-12">
				<div class="col">
					<div class="footer-navigation">
						<?php wp_nav_menu(array('theme_location' => 'footer')); ?>
					</div> <!-- .footer-navigation -->
				</div> <!-- .col -->
			</div> <!-- .col- -->
		
			<?php get_template_part('template-parts/footer/site','info'); ?>
			
		</div> <!-- .row -->
	</div> <!-- .grid -->
</footer> <!-- .main-footer -->
<?php get_template_part('template-parts/global/content','scroller'); ?>
<?php wp_footer(); ?>
</body>
</html>
