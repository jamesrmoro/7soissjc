<?php
/**
 * Template Name: Default
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
			<div class="page-default">
				<div class="center">
					<h1><?php the_title(); ?></h1>
					<?php the_content(); ?>
				</div>
			</div>
			<footer class="footer">
				<div class="center">
					<span>© Todos os direitos reservados <?php echo date("Y"); ?></span>
				</div>
			</footer>
		</article>
	</main>
	<?php wp_footer(); ?>
</body>
</html>
