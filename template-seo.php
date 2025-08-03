<?php
/**
 * Template Name: SEO
 * @package Cidade Sete Sóis
 * @since 0.0.1
 */
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

	<?php
	$css_critical = get_sub_field('css_critical');
	if(wp_is_mobile()){ ?>
		<link rel="preload" href="<?php echo $css_critical['mobile']; ?>" type="text/css" as="style" onload="this.onload=null;this.rel='stylesheet';"/>
	<?php } else { ?>
		<link rel="preload" href="<?php echo $css_critical['desktop']; ?>" type="text/css" as="style" onload="this.onload=null;this.rel='stylesheet';"/>
	<?php } ?>

	<?php wp_head(); ?>
</head>
<?php flush(); ?>
<body <?php body_class(); ?>>
	<main>
		<article>
			<header class="header">
				<div class="center">
					<span>Cidade Sete Sóis</span>
				</div>
			</header>
			<?php
			$id_post = get_the_ID();
			if( have_rows('elements', $id_post) ):
				while ( have_rows('elements', $id_post) ) : the_row();
					array_map(function($component) {
						if( get_row_layout() == $component ):
							get_template_part( 'content/seo/content', $component );
						endif;
					}, [
						'banner',
						'gallery',
						'slider',
						'map',
						'content',
						'form',
						'cta',
						'whatsapp',
						'schema_product',
						'footer'
					]);
				endwhile;
			else :
				echo "Nenhum conteúdo cadastrado";
			endif;
			wp_reset_postdata(); ?>
			</article>
		</main>

		<?php wp_footer(); ?>
	</body>
	</html>

