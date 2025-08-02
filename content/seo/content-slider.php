<?php
$title = get_sub_field('title');
$icon = get_sub_field('icon');
$legend = get_sub_field('legend');
?>

<section class="slider-section space space-bottom-0">
	<div class="title-base">
		<div class="center">
			<h2 class="uppercase text-green"><?php echo $title['title']; ?></h2>
			<h3><?php echo $title['subtitle']; ?></h3>
		</div>
	</div>
	
		<div class="slider-location space">
			<?php if(have_rows('items')) : ?>
			<div class="center relative">
				<div class="swiper mySwiper">
					<div class="swiper-wrapper">
						<?php while(have_rows('items')) : the_row();
						$image = get_sub_field('image');
						$icon = get_sub_field('icon');
						$legend_item = get_sub_field('legend');
						?>
						<div class="swiper-slide">
							<img src="<?php echo $image; ?>" alt="<?php echo $legend_item; ?>">
							<div class="title">
								<img src="<?php echo $icon; ?>" alt="<?php echo $legend_item; ?>">
								<p><?php echo $legend_item; ?></p>
							</div>
						</div>
						<?php endwhile; ?>
					</div>
				</div>
				<div class="group-flex">
					<div class="group-nav">
						<div class="swiper-button-next">
							<img src="<?php bloginfo('template_url') ?>/src/images/arrow-right-big-white.png" alt="Next">
						</div>
						<div class="swiper-button-prev">
							<img src="<?php bloginfo('template_url') ?>/src/images/arrow-left-big-white.png" alt="Prev">
						</div>
					</div>
					<div class="progress-bar">
						<div class="swiper-pagination"></div>
					</div>
				</div>
			</div>
			<?php endif;
			if($legend != ""){ ?>
				<address class="address">
					<div class="center">
						<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path d="M12 0c-4.198 0-8 3.403-8 7.602 0 4.198 3.469 9.21 8 16.398 4.531-7.188 8-12.2 8-16.398 0-4.199-3.801-7.602-8-7.602zm0 11c-1.657 0-3-1.343-3-3s1.343-3 3-3 3 1.343 3 3-1.343 3-3 3z"/></svg>
						<span><?php echo $legend; ?></span>
					</div>
				</address>
			<?php } ?>
		</div>
</section>