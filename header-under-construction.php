<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
	
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<title>
		<?php 
		if(is_front_page())
			echo get_bloginfo('name').' - '.get_bloginfo('description');
		else
			 wp_title( '', true, 'right' ); 
		 ?>
	</title>
	
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	
	<?php btp_include_skin_css(); ?>
	
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri().'/js/prettyPhoto/css/prettyPhoto.css'; ?>" />
	
	<?php btp_render_favicon(); ?>
	<?php btp_render_apple_touch_icon(); ?>
	
	<!--[if IE 7]><link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/ie7.css" /><![endif]-->
	<!--[if IE 8]><link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/ie8.css" /><![endif]-->

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<?php 
		wp_enqueue_script('jquery'); 
		wp_enqueue_script('metadata', get_template_directory_uri().'/js/jquery-metadata/jquery.metadata.js', array('jquery'));
		wp_enqueue_script('easing', get_template_directory_uri().'/js/easing/jquery.easing.1.3.js', array('jquery'));
	
		wp_enqueue_script('jcycle', get_template_directory_uri().'/js/jquery.cycle/jquery.cycle.all.min.js', array('jquery'));
		wp_enqueue_script('kwicks', get_template_directory_uri().'/js/jquery.kwicks.2.0/js/jquery.kwicks.min.js', array('jquery'));		
		wp_enqueue_script('prettyphoto', get_template_directory_uri().'/js/prettyPhoto/js/jquery.prettyPhoto.js', array('jquery'));
			
		wp_enqueue_script('cufon', get_template_directory_uri().'/js/cufon/cufon-yui.js', array('jquery'));
		
		$btp_font = btp_get_theme_option('style_font_replacement_font');
		wp_enqueue_script('cufon_font', get_template_directory_uri().'/js/cufon/'.$btp_font.'.js', array('jquery', 'cufon'));
		
		wp_enqueue_script('swfobject', get_template_directory_uri().'/js/swfobject/swfobject.js', array('jquery'));
		wp_enqueue_script('main', get_template_directory_uri().'/js/main.js', array('jquery'), '1.0');
	?>

	<?php
		if ( is_singular() && get_option( 'thread_comments' ) )
			wp_enqueue_script( 'comment-reply' );
		wp_head();
	?>
			
	<?php btp_render_custom_styles(); ?>	
</head>

<body <?php body_class(); ?>>
<?php echo btp_the_jquery_metadata(); ?>

<div id="page">
		
	<div id="header">	
		
		<div id="header-inner" class="clearfix">
		
			<div class="grid">
				<div class="c-8">	
					<?php btp_render_id(); ?>	
				</div>
				<div class="c-4">				
				</div>
			</div>	
				
		</div><!-- #header-inner -->		
		<div class="background"><!-- --></div>	
	</div><!-- #header -->