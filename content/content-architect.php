<?php 
    $image = get_sub_field('image');
    $title = get_sub_field('title');
    $subtitle = get_sub_field('subtitle');
    $text = get_sub_field('text');
    $info = get_sub_field('info');
    $id = get_sub_field('id');
?>

<section <?php echo $id == "" ? "" : 'id='.$id.''; ?> class="testimonials">
    <div class="background bg-img bg-fixed section-padding pb-0" data-background="<?php echo $image; ?>" data-overlay-dark="7">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="testimonials-box">
                        <div class="head-box">
                            <?php
                            echo $title == "" ? "" : '<h6>'.$title.'</h6>';
                            echo $subtitle == "" ? "" : '<h4>'.$subtitle.'</h4>';
                            ?>
                            <div class="line"></div>
                        </div>
                        <div class="item">
                            <span class="quote"><img src="<?php bloginfo('template_url'); ?>/img/quot.png"></span>
                            <?php echo $text == "" ? "" : '<div class="info">'.$text.'</div>'; ?>
                            <div class="info-architect">
                                <img src="<?php echo $info['photo'];?>" alt="<?php echo $info['name'];?>">
                                <div class="text">
                                    <h2><?php echo $info['name'];?></h2>
                                    <?php echo $info['description'] == "" ? "" : ' <p>'.$info['description'].' </p>';?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>