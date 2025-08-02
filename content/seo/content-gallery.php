<?php
$gallery = get_sub_field('gallery');
$title = get_sub_field('title');
$button = get_sub_field('button');
?>

<section class="gallery-item space">
	<div class="center">
		<div class="title-base">
			<div class="center">
				<h2 class="uppercase text-green"><?php echo $title['title']; ?></h2>
				<h3><?php echo $title['subtitle']; ?></h3>
			</div>
		</div>
		<?php echo $gallery; ?>
		<a href="<?php echo $button['link']; ?>" class="button <?php echo $button['color']; ?>" title="<?php echo $button['text']; ?>">
			<div>
				<span><?php echo $button['text']; ?></span>
				<svg fill="#000" width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M21.883 12l-7.527 6.235.644.765 9-7.521-9-7.479-.645.764 7.529 6.236h-21.884v1h21.883z"/></svg>
			</div>
		</a>
	</div>
</section>