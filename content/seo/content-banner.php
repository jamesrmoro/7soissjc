<?php
$subtitle = get_sub_field('subtitle');
$title = get_sub_field('title');
$description = get_sub_field('description');
$button = get_sub_field('button');
$image_desktop = get_sub_field('image_desktop');
$image_mobile = get_sub_field('image_mobile');
?>
<section class="hero-banner">
	<div class="column first-column">
		<div class="text">
			<h2 class="small"><?php echo $subtitle; ?></h2>
			<h1 class="title-main"><?php echo $title; ?></h1>
			<p><?php echo $description; ?></p>
			<a href="<?php echo $button['link']; ?>" class="button <?php echo $button['color']; ?>" title="<?php echo $button['text']; ?>">
				<div>
					<span><?php echo $button['text']; ?></span>
					<svg fill="#fff" width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M21.883 12l-7.527 6.235.644.765 9-7.521-9-7.479-.645.764 7.529 6.236h-21.884v1h21.883z"/></svg>
				</div>
			</a>
		</div>
	</div>
	<div class="column">
		<picture>
			<source media="(max-width: 800px)" srcset="<?php echo $image_mobile; ?>">
			<img width="675" height="387" src="<?php echo $image_desktop; ?>" alt="<?php the_title(); ?>">
		</picture>
	</div>
</section>