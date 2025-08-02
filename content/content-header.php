<?php 
    $logo_white = get_sub_field('logo_white');
    $logo_color = get_sub_field('logo_color');
    $menu = get_sub_field('menu');
    $id = get_sub_field('id');
?>
    <nav <?php echo $id == "" ? "" : 'id='.$id.''; ?> class="navbar navbar-expand-lg">
        <div class="container">
            <div class="logo-wrapper navbar-brand valign">
                <h1 class="title-hide"><?php the_title(); ?></h1>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <?php
                wp_nav_menu(
                    array(
                        'container' => '',
                        'add_a_class'     => 'nav-link',
                        'menu_class' => 'navbar-nav ml-auto',
                        'menu' => $menu
                    ));
                ?>
            </div>
        </div>
    </nav>
