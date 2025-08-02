<?php
$background = get_sub_field('background');
$text = get_sub_field('text');
?>

<footer class="footer" style="background-color: <?php echo $background; ?>">
	<div class="center">
		<span><?php echo $text; ?></span>
	</div>
</footer>