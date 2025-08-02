<?php
$title = get_sub_field('title');
$legend = get_sub_field('legend');
$image = get_sub_field('image');
$url = get_sub_field('url');
$tour = get_sub_field('tour');
?>

<section <?php echo $id == "" ? "" : 'id='.$id.''; ?> class="tour">
    <div class="container">
        <div class="wrapper-tour">
            <div>
                <h2><?php echo $title; ?></h2>
                <?php echo $legend == "" ? "" : '<p>'.$legend.'</p>'; ?>
            </div>
            <div class="image open-modal-tour-js" data-url="<?php echo $url; ?>">
                <img class="icon" src="<?php bloginfo('template_url'); ?>/img/icon-360.png" alt="Tour 360º">
                <img src="<?php echo $image; ?>" alt="<?php echo $title; ?>">
            </div>
        </div>
    </div>
</section>

<div id="tour" class="modal">
<div class="bg-modal"></div>
	<div class="wrapper-modal">
		<div class="center-wrapper">
			<div class="content iframe-content">
                <div class="loader-fake">
                    <img src="<?php bloginfo('template_url'); ?>/img/loading.svg" alt="carregando">
                </div>
				<span class="close-modal">x</span>
				<div class="wrapper"></div>
			</div>
		</div>
	</div>
</div>