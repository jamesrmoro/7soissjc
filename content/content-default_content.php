<?php
$title = get_sub_field('title');
$id = get_sub_field('id');
$subtitle = get_sub_field('subtitle');
$content = get_sub_field('content');
?>
<section <?php echo $id == "" ? "" : 'id='.$id.''; ?> class="building">
    <div class="container">
        <?php
            echo $title == "" ? "" : '<div class="section-subtitle">'.$title.'</div>';
            echo $subtitle == "" ? "" : '<h2 class="section-title">'.$subtitle.'</h2>';
            echo $content;
        ?>
    </div>
</section>