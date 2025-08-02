<?php
$id = get_sub_field('id');
$opacity_color = get_sub_field('opacity_color');
$button_color = get_sub_field('button_color');
$button_color_hover = get_sub_field('button_color_hover');
$cta = get_sub_field('cta');
$whatsapp = get_sub_field('whatsapp');
$whatsapp_message = get_sub_field('whatsapp_message');
$typeLink = ( !isMobile()) ? 'https://web.whatsapp.com/send?phone=': 'https://api.whatsapp.com/send?phone=';
if(have_rows('items')) : ?>

    <style type="text/css">
        [data-overlay-dark]:before {
            background-color: <?php echo $opacity_color; ?>
        }
        .slider-fade .butn-light a  {
            background-color: <?php echo $button_color; ?>;
            transition: all 0.5s ease;
        }
        .slider-fade .butn-light a:hover {
            background-color: <?php echo $button_color_hover; ?>;
        }
        .slider-fade .butn-light a:hover span {
            color: #fff;
        }

    </style>
    <div <?php echo $id == "" ? "" : 'id='.$id.''; ?> class="notice-msg">
        <div class="container">
            <?php echo $cta; ?>
            <?php echo ($whatsapp != '' ? '<a class="shake-whatsapp" target="_blank" href="'.$typeLink.preg_replace("/[^0-9]/","",'+55'.$whatsapp).'&text='.$whatsapp_message.'" title="WhatsApp"><span>Chama no ZAP</span><span><svg fill="#fff" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg></span></a>' : ''); ?>
                <div class="nav-item">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <i>Menu</i>
                </div>
                <div class="menu-multinivel wrapper">
                    <div class="rmm">
                        <?php
                        wp_nav_menu(
                            array(
                                'container' => '',
                                'add_a_class'     => 'nav-link',
                                'menu_class' => 'navbar-nav ml-auto',
                                'menu' => 'menu-terrazo-di-dante'
                            ));
                        ?>
                    </div>
                    <div class="tap-mobile"></div>
                </div>
        </div>
    </div>
    <section id="slider" class="header slider-fade">
        <div class="owl-carousel owl-theme">
            <?php while(have_rows('items')) : the_row();
                $title = get_sub_field('title');
                $subtitle = get_sub_field('subtitle');
                $link = get_sub_field('link');
                $button = get_sub_field('button');
                $image_desktop = get_sub_field('image_desktop');
                $image_mobile = get_sub_field('image_mobile');
                $opacity = get_sub_field('opacity');
                $icon = get_sub_field('icon');
            ?>
                <div
                class="text-center item bg-img"
                data-overlay-dark="<?php echo $opacity; ?>"
                data-background="<?php echo wp_is_mobile() == true ? $image_mobile :  $image_desktop; ?>">
                    <div class="v-middle caption">
                        <div class="container">
                            <div class="row">
                                <?php if($icon != ""){ ?>
                                    <img class="icon-banner" width="100" height="98" src="<?php echo $icon; ?>" alt="<?php the_title(); ?>">
                                <?php } ?>
                                <div class="col-md-10 offset-md-1">
                                    <span>
                                        <i class="star-rating"></i>
                                        <i class="star-rating"></i>
                                        <i class="star-rating"></i>
                                        <i class="star-rating"></i>
                                        <i class="star-rating"></i>
                                    </span>
                                    <h2><?php echo $title; ?></h2>
                                    <h3 class="subtitle"><?php echo $subtitle; ?></h3>
                                    <div class="butn-light mt-30 mb-30"> <a href="<?php echo $link; ?>"><span><?php echo $button; ?><svg fill="#fff" width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M21.883 12l-7.527 6.235.644.765 9-7.521-9-7.479-.645.764 7.529 6.236h-21.884v1h21.883z"/></svg></span></a> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </section>

<?php endif; ?>