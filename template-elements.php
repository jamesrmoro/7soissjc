<?php
/**
 * Template Name: Elements
 * @package Cidade Sete Sóis
 * @since 0.0.1
 */
if ( have_posts() ) :
$id_post = get_the_ID();
$colors = get_field('colors');
$script = get_field('script');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=2.0, width=device-width" />
	<?php $color = '#aa8453'; ?>
	<meta name="theme-color" content="<?php echo $color; ?>">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="<?php echo $color; ?>">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="<?php echo $color; ?>">
	<link rel="mask-icon" href="<?php bloginfo('template_url') ?>/favicon/images/safari-pinned-tab.svg" color="<?php echo $color; ?>">
	<?php include (TEMPLATEPATH . '/favicon/favicon.php'); ?>
	<?php wp_head();
		if($script['script_header_inside_head'] != ""){
			echo $script['script_header_inside_head'];
		}
    ?>
</head>
<body <?php body_class(); ?>>
		<?php
		if($script['script_header_after_body'] != ""){
			echo $script['script_header_after_body'];
		}
		if($colors != ""){ ?>
		<style type="text/css">
			.tab-cont .but.active, .butn-light a, .news {
				background-color: <?php echo $colors['primary_color']; ?>;
				transition: all 0.5s ease;
			}
			.facilties .single-facility {
				border: 1px solid <?php echo $colors['primary_color']; ?>;
			}
			.butn-light a:hover {
				background-color: <?php echo $colors['secondary_color']; ?>;
			}
			.butn-light a:hover span {
				color: #fff;
			}
			input[type="submit"] {
				background-color: <?php echo $colors['secondary_color']; ?>;
			}
			.video-wrapper .vid .vid-butn .icon,
			.navbar .navbar-nav .nav-link:hover,
			.nav-scroll .icon-bar,
			.about .text a,
			.about .reservations .icon span,
			.progress-wrap::after {
				color: <?php echo $colors['secondary_color']; ?>;
			}
			.owl-theme .owl-dots .owl-dot:hover span {
				background-color: <?php echo $colors['primary_color']; ?>;
				border: 1px solid <?php echo $colors['primary_color']; ?>;
			}
			.progress-wrap svg.progress-circle path {
				stroke: <?php echo $colors['primary_color']; ?>;
			}
			.footer-explore-list li a,
			.footer-about-text,
			.footer-contact-text,
			#cidade-inteligente p,
			.reservations .text a {
				color: #fff;
			}
		</style>
	<?php }
		if( have_rows('elements', $id_post) ):
			while ( have_rows('elements', $id_post) ) : the_row();
				array_map(function($component) {
					if( get_row_layout() == $component ):
						get_template_part( 'content/content', $component );
					endif;
				}, [
					'header',
					'banner',
					'diferentials',
					'gallery',
					'slider',
					'video',
					'icons',
					'architect',
					'text_image',
					'leisure_options',
					'form',
					'logos',
					'building',
					'default_content',
					'tour',
					'about',
					'localization',
					'chamada',
					'datasheet',
					'faq',
					'footer'
				]);
			endwhile;
		else :
			echo "Nenhum conteúdo cadastrado";
		endif;
	wp_reset_postdata();
endif;
?>