<?php
$text = get_sub_field('text');
$image_1 = get_sub_field('image_1');
$image_2 = get_sub_field('image_2');
$id = get_sub_field('id');
$link = get_sub_field('link');
?>

<section <?php echo $id == "" ? "" : 'id='.$id.''; ?> class="about">
	<div class="container">
		<div class="row">
			<div class="col-md-5">
				<?php echo $text; ?>
				<div class="butn-light mt-30 mb-30"> <a href="<?php echo $link; ?>"><span>Saiba mais<svg fill="#fff" width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M21.883 12l-7.527 6.235.644.765 9-7.521-9-7.479-.645.764 7.529 6.236h-21.884v1h21.883z"></path></svg></span></a> </div>
			</div>
			<div class="col-md-7">
				<div class="gallery-special">
					<div class="image-1">
						<img src="<?php echo $image_1; ?>" alt="<?php the_title(); ?>">
					</div>
					<div class="image-2">
						<img src="<?php echo $image_2; ?>" alt="<?php the_title(); ?>">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>