<?php /* Template Name: Products: c-3 */ ?>
<?php get_header(); ?>	

	<div id="content">
		<div id="content-inner">	

			<?php get_template_part( '/theme/parts/content_header', 'products' ); ?>
			
			<div class="bd">
				
				<?php get_template_part( '/theme/parts/prepare', 'products' ); ?>		
			
				<?php if(have_posts()): ?>		
					<?php get_template_part( '/theme/parts/products', 'c-3' ); ?>
					<?php echo btp_pagination(); ?>
				<?php else: ?>
					<div class="entry-content">
						<p class="no-results"><?php _e( 'No results found.', 'btp_theme' ); ?></p>	
					</div><!-- .entry-content -->
		        <?php endif; ?>        
		
			</div><!-- .bd -->

			<?php get_template_part( '/theme/parts/content_footer', 'products' ); ?>
	
		</div><!-- #content-inner -->
		<div class="background"><!--  --></div>
	</div><!-- #content -->
	
<?php get_footer(); ?>