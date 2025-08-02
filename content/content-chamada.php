<?php
$background = get_sub_field('background');
$title = get_sub_field('title');
$subtitle = get_sub_field('subtitle');
$text = get_sub_field('text');
$button = get_sub_field('button');
$whatsapp = get_sub_field('whatsapp');
$whatsapp_message = get_sub_field('whatsapp_message');
$typeLink = ( !isMobile()) ? 'https://web.whatsapp.com/send?phone=': 'https://api.whatsapp.com/send?phone=';
?>

<section class="chamada" style="background-image: url('<?php echo $background; ?>');">
	<div class="container">
		<div class="wrapper">
			<div class="text">
				<h2><?php echo $title; ?></h2>
				<h3><?php echo $subtitle; ?></h3>
				<p><?php echo $text; ?></p>
				<div class="butn-light mt-30 mb-30">
					<?php echo ($whatsapp != '' ? '<a target="_blank" href="'.$typeLink.preg_replace("/[^0-9]/","",'+55'.$whatsapp).'&text='.$whatsapp_message.'" title="WhatsApp"><span>'.$button.'</span></a>' : ''); ?>
				</div>
			</div>
			<div class="image">
			</div>
		</div>
	</div>
</section>