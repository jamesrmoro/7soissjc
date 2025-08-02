<?php
    $title = get_sub_field('title');
    $subtitle = get_sub_field('subtitle');
    $id = get_sub_field('id');
    $active = get_sub_field('active');
?>
<?php if($active == true){ ?>
<section <?php echo $id == "" ? "" : 'id='.$id.''; ?> class="building">
    <div class="container">
        <span>
            <i class="star-rating"></i>
            <i class="star-rating"></i>
            <i class="star-rating"></i>
            <i class="star-rating"></i>
            <i class="star-rating"></i>
        </span>
        <?php
            echo $title == "" ? "" : '<div class="section-subtitle">'.$title.'</div>';
            echo $subtitle == "" ? "" : '<h2 class="section-title">'.$subtitle.'</h2>';
        ?>
        <div class="tab-cont">
            <?php
                $count = 1;
                while(have_rows('items')) : the_row();
                $title_building = get_sub_field('title_building');
                $type = get_sub_field('type');
            ?>
                <button class="but <?php echo $type == "3D" ? 'b-3d' : ''; ?>" onclick="building(event, 'item-<?php echo $count;?>')"><?php echo $title_building; ?></button>
            <?php $count++; endwhile; ?>
        </div>
            <?php 
                if(have_rows('items')) :   
                $count = 1;
                while(have_rows('items')) : the_row();
                $title_building = get_sub_field('title_building');
                $type = get_sub_field('type');
            ?>
            <h3 class="tab-mobile <?php echo $count == 1 ? 'active' : ''; ?> <?php echo $type == "3D" ? 'b-3d' : ''; ?>" data-tab="item-<?php echo $count; ?>"><?php echo $title_building; ?></h3>
                <div class="tab-content" id="item-<?php echo $count; ?>">
                    <div class="slider-item slider<?php echo $count; ?>">
                        <div class="owl-carousel owl-theme">
                            <?php while(have_rows('items_building')) : the_row();
                                $image = get_sub_field('image');
                                $image_mobile = get_sub_field('imagem_mobile');
                                $legend = get_sub_field('legend');
                            ?>
                                <div class="item">
                                    <picture>
                                        <source media="(max-width: 800px)" srcset="<?php echo $image_mobile; ?>">
                                        <img src="<?php echo $image; ?>" alt="<?php echo $legend; ?>">
                                    </picture>
                                    <?php if($legend != ""){ ?>
                                        <div class="legend">
                                            <span><?php echo $legend; ?></span>
                                        </div>
                                    <?php } ?>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>
            <?php $count++; endwhile;
        endif; ?>
    </div>
</section>
<?php } ?>