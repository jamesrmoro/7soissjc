<?php
$title = get_sub_field('title');
$button = get_sub_field('button');
$whatsapp = get_sub_field('whatsapp');
$text = get_sub_field('text');
$phone = get_sub_field('phone');
$typeLink = ( !isMobile()) ? 'https://web.whatsapp.com/send?phone='.$phone.'&text='.$text.'': 'https://api.whatsapp.com/send?phone='.$phone.'&text='.$text.'';
?>

<section class="cta text-center bg-green space">
	<h3 class="title text-white">Fale com um corretor</h3>
	<a href="<?php echo $whatsapp == true ? $typeLink : $button['link']; ?>" class="button <?php echo $button['color']; ?>" title="<?php echo $button['text']; ?>">
		<div>
			<span><?php echo $button['text']; ?></span>
			<svg fill="#fff" width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M21.883 12l-7.527 6.235.644.765 9-7.521-9-7.479-.645.764 7.529 6.236h-21.884v1h21.883z"/></svg>
		</div>
	</a>
</section>