<?php
    $title = get_sub_field('title');
    $id = get_sub_field('id');
    $active = get_sub_field('active');
?>

<?php if($active == true){ ?>
<section <?php echo $id == "" ? "" : 'id='.$id.''; ?> class="facilties section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title"><?php echo $title; ?></div>
            </div>
        </div>
        <?php
        $count = 1;
        if(have_rows('items')) : ?>
            <div class="row">
                <?php while(have_rows('items')) : the_row();
                    $title = get_sub_field('title');
                    $text = get_sub_field('text');
                    $icon = get_sub_field('icon');
                ?>
                <div class="col-md-4">
                    <div class="single-facility animate-box" data-animate-effect="fadeInUp">
                        <span class="icon">
                            <img src="<?php echo $icon; ?>" alt="<?php echo str_replace("<br>", "", $title); ?>">
                        </span>
                        <h5><?php echo $title; ?></h5>
                        <p><?php echo $text; ?> </p>
                        <div class="facility-shape"> </div>
                    </div>
                </div>
                <?php $count++; endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
<?php } ?>