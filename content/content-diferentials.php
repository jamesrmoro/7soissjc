<?php 
    $title = get_sub_field('title');
    $subtitle = get_sub_field('subtitle');
    $image_1 = get_sub_field('image_1');
    $image_2 = get_sub_field('image_2');
    $image_3 = get_sub_field('image_3');
    $image_4 = get_sub_field('image_4');
    $cta = get_sub_field('cta');
    $qtd_column = get_sub_field('qtd_column');
    $id = get_sub_field('id');
?>

<section <?php echo $id == "" ? "" : 'id='.$id.''; ?> class="about section-padding">
    <div class="container">
        <div class="wrapper-diferentials">
            <div class="mb-30 animate-box" data-animate-effect="fadeInUp">
                <span>
                    <i class="star-rating"></i>
                    <i class="star-rating"></i>
                    <i class="star-rating"></i>
                    <i class="star-rating"></i>
                    <i class="star-rating"></i>
                </span>
                <?php echo $title == "" ? "" : '<div class="section-subtitle">'.$title.'</div>'; ?>
                <?php echo $subtitle == "" ? "" : '<div class="section-title">'.$subtitle.'</div>'; ?>
                <?php if(have_rows('items')) : ?>
                    <div class="diferenciais <?php echo $qtd_column == 2 ? "diferenciais-2" : ""; ?>">
                        <?php while(have_rows('items')) : the_row();
                        $icon = get_sub_field('icon');
                        $title = get_sub_field('title'); ?>
                            <div class="item">
                                <div class="image">
                                    <img src="<?php echo $icon; ?>" alt="<?php echo $title; ?>">
                                </div>
                                <h3><?php echo $title; ?></h3>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
                <?php if($cta['title'] != ""){ ?>
                    <div class="reservations">
                        <div class="icon"><span class="flaticon-call"></span></div>
                        <div class="text">
                            <p><?php echo $cta['title']; ?></p>
                            <a target="_blank" href="tel:<?php echo $cta['phone']; ?>" title="Ligar"><?php echo $cta['phone']; ?></a>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <section class="rooms1" data-scroll-index="1">
                <div class="col animate-box gallery rooms1__wrapper" data-animate-effect="fadeInUp">
                    <div class="img img--modifier">
                        <?php if($image_1['sizes']['small_thumbnail'] != ""){ ?>
                            <a href="<?php echo $image_1['sizes']['large']; ?>"  title="<?php echo $image_1['caption'] == "" ? $image_1['title'] : $image_1['caption']; ?>" class="item ">
                                <div class="position-re o-hidden item1"><img src="<?php echo $image_1['sizes']['small_thumbnail']; ?>" alt=""></div>
                                <div class="con diferentials">
                                    <h5><?php echo $image_1['title']; ?></h5>
                                    <div class="line diferentials"></div>
                                    <div class="row facilities">
                                        <div class="col">
                                            <div class="permalink diferentials">
                                                Ampliar <i class="ti-arrow-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        <?php }
                        if($image_2['sizes']['small_thumbnail'] != ""){ ?>
                            <a href="<?php echo $image_2['sizes']['large']; ?>"  title="<?php echo $image_2['caption'] == "" ? $image_2['title'] : $image_2['caption']; ?>" class=" item ">
                                <div class="position-re o-hidden item2"><img src="<?php echo $image_2['sizes']['small_thumbnail_vertical']; ?>" alt=""></div>
                                <div class="con diferentials">
                                    <h5><?php echo $image_2['title']; ?></h5>
                                    <div class="line diferentials"></div>
                                    <div class="row facilities">
                                        <div class="col">
                                            <div class="permalink diferentials">
                                                Ampliar <i class="ti-arrow-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        <?php } ?>
                    </div>
                    <div class="img img--modifier">
                        <?php if($image_3['sizes']['small_thumbnail'] != ""){ ?>
                            <a href="<?php echo $image_3['sizes']['large']; ?>"  title="<?php echo $image_3['caption'] == "" ? $image_3['title'] : $image_3['caption']; ?>" class=" item" >
                                <div class="position-re o-hidden item3"><img src="<?php echo $image_3['sizes']['small_thumbnail_vertical']; ?>" alt=""></div>
                                <div class="con diferentials">
                                    <h5><?php echo $image_3['title']; ?></h5>
                                    <div class="line diferentials"></div>
                                    <div class="row facilities">
                                        <div class="col">
                                            <div class="permalink diferentials">
                                                Ampliar <i class="ti-arrow-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        <?php }
                        if($image_4['sizes']['small_thumbnail'] != ""){ ?>
                            <a href="<?php echo $image_4['sizes']['large']; ?>" title="<?php echo $image_4['caption'] == "" ? $image_4['title'] : $image_4['caption']; ?>" class="item">
                                <div class="position-re o-hidden item4"><img src="<?php echo $image_4['sizes']['small_thumbnail']; ?>" alt=""></div>
                                <div class="con diferentials">
                                    <h5><?php echo $image_4['title']; ?></h5>
                                    <div class="line diferentials"></div>
                                    <div class="row facilities">
                                        <div class="col">
                                            <div class="permalink diferentials">
                                                Ampliar <i class="ti-arrow-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        <?php } ?>
                    </div>
                </div>
            </section>
        </div>
    </div>
</section>