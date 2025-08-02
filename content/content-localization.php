<?php
$image = get_sub_field('image');
$image_mobile = get_sub_field('image_mobile');
$background = get_sub_field('background');
$id = get_sub_field('id');
?>

<section <?php echo $id == "" ? "" : 'id='.$id.''; ?> class="localization" style="background-color: <?php echo $background; ?>">
	<picture class="open-modal-tour-js" data-url="https://sferica.com.br/temporario/mrv/caminho_jerivas/">
        <source media="(max-width: 800px)" srcset="<?php echo $image_mobile; ?>">
        <img src="<?php echo $image; ?>" alt="<?php the_title(); ?>">
    </picture>
</section>

<div id="localizacao" class="modal">
<div class="bg-modal"></div>
    <div class="wrapper-modal">
        <div class="center-wrapper">
            <div class="content iframe-content">
                <div class="loader-fake">
                    <img src="<?php bloginfo('template_url'); ?>/src/images/loading.svg" alt="carregando">
                </div>
                <span class="close-modal">x</span>
                <div class="wrapper"></div>
            </div>
        </div>
    </div>
</div>