<?php
$title = get_sub_field('title');
$content = get_sub_field('content');
$bg = get_sub_field('bg');
?>
<section class="ficha-tecnica <?php echo $bg; ?> space">
	<div class="center">
		<div class="title-base">
			<div class="center">
				<h2 class="uppercase text-orange"><?php echo $title['title']; ?></h2>
				<h3><?php echo $title['subtitle']; ?></h3>
			</div>
		</div>
		<?php echo $content; ?>
	</div>
</section>