<?php 
    $legend_group = get_sub_field('legend_group');
    $id = get_sub_field('id');
?>

<section <?php echo $id == "" ? "" : 'id='.$id.''; ?> class="services section-padding">
    <div class="container gallery">
        <?php
        $count = 1;
        if(have_rows('items')) :
            while(have_rows('items')) : the_row();
                $image = get_sub_field('image');
                $subtitle = get_sub_field('subtitle');
                $title = get_sub_field('title');
                $legend = get_sub_field('legend');
                $description = get_sub_field('description');
                $button = get_sub_field('button');
                $link = get_sub_field('link');
            ?>
                <div class="row">
                    <?php if($count % 2){ ?>
                        <div class="col-md-6 p-0 animate-box <?php echo $count % 2 ? "order2" : ""; ?>" data-animate-effect="fadeInLeft">
                            <div class="img left">
                                <a href="<?php echo $image['url']; ?>" title="<?php echo $legend; ?>">
                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $title; ?>">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 p-0 bg-cream valign animate-box <?php echo $count % 2 ? "order1" : ""; ?>" data-animate-effect="fadeInRight">
                            <div class="content">
                                <div class="cont text-left">
                                    <div class="info">
                                        <h6><?php echo $subtitle; ?></h6>
                                    </div>
                                    <h4><?php echo $title; ?></h4>
                                    <?php echo $description == "" ? "" : '<p>'.$description.'</p>';
                                    if($link != ""){ ?>
                                        <div class="butn-dark"> <a href="<?php echo $link; ?>"><span><?php echo $button; ?></span></a> </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    <?php } else { ?>
                        <div class="col-md-6 p-0 bg-cream valign animate-box <?php echo $count % 2 ? "order1" : ""; ?>" data-animate-effect="fadeInRight">
                            <div class="content">
                                <div class="cont text-left">
                                    <div class="info">
                                        <h6><?php echo $subtitle; ?></h6>
                                    </div>
                                    <h4><?php echo $title; ?></h4>
                                    <?php echo $description == "" ? "" : '<p>'.$description.'</p>';
                                    if($link != ""){ ?>
                                        <div class="butn-dark"> <a href="<?php echo $link; ?>"><span><?php echo $button; ?></span></a> </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 p-0 animate-box <?php echo $count % 2 ? "order2" : ""; ?>" data-animate-effect="fadeInLeft">
                            <div class="img left">
                                <a href="<?php echo $image['url']; ?>" title="<?php echo $legend; ?>">
                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $title; ?>">
                                </a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            <?php $count++; endwhile;
        endif;
        echo $legend_group = "" ? "" : '<i class="photo-legend">'.$legend_group.'</i>'; ?>
    </div>
</section>