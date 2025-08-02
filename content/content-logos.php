<?php
$title = get_sub_field('title');
$id = get_sub_field('id');
?>

<section <?php echo $id == "" ? "" : 'id='.$id.''; ?> class="clients">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="clients-logo">
                    <?php echo $title == "" ? "" : '<h4>'.$title.'</h4>';
                    if(have_rows('items')) :
                        while(have_rows('items')) : the_row();
                        $image = get_sub_field('image');
                        $link = get_sub_field('link');
                        ?>
                        <a href="<?php echo $link; ?>" target="_blank" title="<?php echo $image['title'] != "" ? $image['title'] : " " ; ?>"><img src="<?php bloginfo('template_url'); ?>/img/mm-cortes.png" alt="<?php echo $image['alt'] != "" ? $image['alt'] : " " ; ?>"></a>
                        <?php endwhile;
                    endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>