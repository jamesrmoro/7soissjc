<?php
    $title = get_sub_field('title');
    $subtitle = get_sub_field('subtitle');
    $flag = get_sub_field('flag');
    $background_color = get_sub_field('background_color');
    $color = get_sub_field('color');
    $id = get_sub_field('id');
    if($background_color != "") { ?>
    <style>
        .section-l {background-color: <?php echo $background_color; ?>}
        .section-l .section-title, .section-l .section-subtitle {color: <?php echo $color; ?>}
    </style>
<?php } ?>


<section <?php echo $id == "" ? "" : 'id='.$id.''; ?> class="section-l rooms1 section-padding bg-cream" data-scroll-index="1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php echo $title = "" ? "" : '<div class="section-subtitle">'.$title.'</div>'; ?>
                <?php echo $subtitle = "" ? "" : '<div class="section-title">'.$subtitle.'</div>'; ?>
            </div>
        </div>
        <div class="row">
            <?php
            $count = 1;
            if(have_rows('items')) : ?>
                <?php while(have_rows('items')) : the_row();
                    $title = get_sub_field('title');
                    $legend = get_sub_field('legend');
                    $cover = get_sub_field('cover');
                    $image = get_sub_field('image');
                ?>
                    <div class="<?php echo $count > 3 ? "col-md-6" : "col-md-4"; ?>">
                        <a href="<?php echo $image; ?>" title="<?php echo $title; ?>" class="img-zoom item">
                            <div class="position-re o-hidden">
                                <img src="<?php echo $cover; ?>" alt="<?php echo $title; ?>">
                            </div> <?php echo $flag == "" ? "" : '<span class="category">'.$flag.'</span>'; ?>
                            <div class="con">
                                <h5><?php echo $title; ?></h5>
                                <div class="line"></div>
                                <p><?php echo $legend; ?></p>
                                <div class="row facilities">
                                    <div class="col col-md-5">
                                        <div class="permalink">
                                            Ampliar <i class="ti-arrow-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php $count++; endwhile;
            endif; ?>
        </div>
    </div>
</section>
