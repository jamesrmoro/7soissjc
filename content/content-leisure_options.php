<?php
    $title = get_sub_field('title');
    $subtitle = get_sub_field('subtitle');
    $id = get_sub_field('id');
    $active = get_sub_field('active');
?>
<?php if($active == true){ ?>
<section <?php echo $id == "" ? "" : 'id='.$id.''; ?> class="news section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php echo $title == "" ? "" : '<div class="section-subtitle"><span>'.$title.'</span></div>'; ?>
                <?php echo $subtitle == "" ? "" : '<div class="section-title"><span>'.$subtitle.'</span></div>'; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 gallery">
                <?php if(have_rows('items')) : ?>
                    <div class="owl-carousel owl-theme img">
                        <?php while(have_rows('items')) : the_row();
                            $image = get_sub_field('image');
                            $title = get_sub_field('title');
                            $legend = get_sub_field('legend');
                        ?>
                            <a href="<?php echo $image; ?>" class="item" title="<?php echo $legend; ?>">
                                <div class="position-re o-hidden"> <img src="<?php echo $image; ?>" alt="<?php echo $title; ?>">
                                </div>
                                <div class="con">
                                    <span class="category"><?php echo $title; ?></span>
                                    <h5><?php echo $legend; ?></h5>
                                </div>
                            </a>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>

    </div>
</section>
<?php } ?>