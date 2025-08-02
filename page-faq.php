<?php
/**
 * @package Cidade Sete Sóis
 * @since 0.0.1
 */
get_header();?>
	<main>
		<article>
			<section>
				<?php if (have_posts()): ?>
				<?php while (have_posts()) : the_post(); ?>
					<?php get_template_part( 'content/content', 'faq' ); ?>
				<?php endwhile; ?>
				<?php endif; wp_reset_postdata(); ?>
			</section>
		</article>
	</main>
<?php get_footer(); ?>