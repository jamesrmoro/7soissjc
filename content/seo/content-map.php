<?php
$image_desktop = get_sub_field('image_desktop');
$image_mobile = get_sub_field('image_mobile');
?>
<section class="map space space-0">
	<picture>
		<source media="(max-width: 800px)" srcset="<?php echo $image_mobile; ?>">
		<img src="<?php echo $image_desktop; ?>" alt="<?php the_title(); ?>">
	</picture>
</section>