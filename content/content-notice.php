<?php
$message = get_sub_field('message');
$id = get_sub_field('id');
?>

<section <?php echo $id == "" ? "" : 'id='.$id.''; ?> class="notice-msg">
	<div class="container">
		<?php echo $message; ?>
	</div>
</section>