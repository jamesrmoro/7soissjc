<?php
$title = get_sub_field('title');
$subtitle = get_sub_field('subtitle');
$description = get_sub_field('description');
$image = get_sub_field('image');
$form = get_sub_field('form');
?>

<section id="form" class="form space">
	<div class="collumn">
		<div class="wrapper wrapper-first">
			<div class="content">
				<div class="text">
					<h2 class="title"><?php echo $title; ?></h2>
					<h3 class="subtitle"><?php echo $subtitle; ?></h3>
					<p><?php echo $description; ?></p>
				</div>
				<div class="image">
					<img src="<?php echo $image; ?>" alt="<?php echo $title; ?>">
				</div>
			</div>
		</div>
	</div>
	<div class="collumn">
		<div class="wrapper wrapper-second">
			<?php echo do_shortcode('[contact-form-7 id="'.$form->ID.'" title="'.$form->title.'"]'); ?>
			<p></p>
		</div>
	</div>
	<script>
		var field_value = document.querySelectorAll("input[name='renda-familiar'],input[name='fgts']");
		for (var i = 0; i < field_value.length; i++) {
			let element = field_value[i]
			element.addEventListener("keyup", function(e,v){
				element.value = e.target.value.replace(/\D/g,'')
				element.value = Number(e.target.value).toLocaleString('pt-br', {minimumFractionDigits: 0})
			});
			element.addEventListener("focusin", function(e,v){
				split2 = element.value.split(',')[0].trim().replace(/\D/g,'')
				element.value = Number(split2).toLocaleString('pt-br', {minimumFractionDigits: 0})
			});
			element.addEventListener("focusout", function(e,v){
				element.value = e.target.value.replace(/\D/g,'')
				var f = Number(e.target.value).toLocaleString('pt-br',{minimumFractionDigits: 2});
				e.target.value = f
			});
		}
	</script>
</section>