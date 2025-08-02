<?php 
    $background = get_sub_field('background');
    $background_mobile = get_sub_field('background_mobile');
    $title = get_sub_field('title');
    $url_video = get_sub_field('url_video');
    $button = get_sub_field('button');
    $legend = get_sub_field('legend');
    $id = get_sub_field('id');
?>

<section <?php echo $id == "" ? "" : 'id='.$id.''; ?> class="video-wrapper video section-padding bg-img bg-fixed" data-overlay-dark="3" data-background="<?php echo wp_is_mobile() == true ? $background_mobile : $background; ?>">

    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 text-center">
                <span><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i></span>
                <div class="section-subtitle"><span><?php echo $title; ?></span></div>
                <div class="section-title"><span><?php echo $button; ?></span></div>
            </div>
        </div>
        <div class="row">
            <div class="text-center col-md-12">
                <a class="vid" href="<?php echo $url_video; ?>" title="Assistir ao vídeo">
                    <div class="vid-butn">
                        <span class="icon">
                            <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M23 12l-22 12v-24l22 12zm-21 10.315l18.912-10.315-18.912-10.315v20.63z"/></svg>
                        </span>
                    </div>
                </a>
            </div>
            <p style="color:#fff;text-align: center;margin:0 auto;display:block;margin-top: 10px;"><?php echo $legend; ?></p>
        </div>
    </div>
</section>