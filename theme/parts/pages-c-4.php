<?php
global	$post,
		$btp_query,			
		$btp_max_per_row,		
		$btp_hide, 				// hidden elements
		$btp_lightbox_group;

/* Normalize variables */		
$btp_query = ( $btp_query === null ) ? $wp_query : $btp_query;
$btp_lightbox_group = empty($btp_lightbox_group) ? '' : '['.$btp_lightbox_group.']' ;	
$btp_max_per_row = btp_normalize_max_per_row($btp_max_per_row, 3);

$i = 0;

?>
	<?php while ($btp_query->have_posts()): $btp_query->the_post(); ?>
		
		<?php if( ($i % $btp_max_per_row) == 0): ?><div class="grid collection-c-4 pages-c-4"><?php endif; ?>	            
	            <div class="c-4">    	            
	            	<div class="pid-<?php the_ID(); ?>">            	
						<?php if ( !isset($btp_hide['thumb']) ) { btp_the_page_thumb('c-4'); } ?>
						<?php if ( !isset($btp_hide['title']) ) btp_the_page_title(); ?>          
										
						<?php if ( !isset($btp_hide['summary']) ) { btp_the_page_summary();} ?>
														                
		                <?php if ( !isset($btp_hide['button_1']) ): ?>
		                <ul class="entry-buttons">
		                	<li><?php btp_the_page_primary_button(); ?></li>
		                </ul>
		                <?php endif; ?>	
					</div><!-- .pid-XX -->						
				</div>	
		<?php $i++; if( ($i % $btp_max_per_row) == 0): ?></div><?php endif; ?>
	<?php endwhile; ?>			        
	<?php if( $i % $btp_max_per_row != 0): ?></div><?php endif; ?>