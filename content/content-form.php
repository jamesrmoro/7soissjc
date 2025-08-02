<?php
    $image_desktop = get_sub_field('image_desktop');
    $image_mobile = get_sub_field('image_mobile');
    $title = get_sub_field('title');
    $text = get_sub_field('text');
    $subtitle = get_sub_field('subtitle');
    $phone = get_sub_field('phone');
    $description = get_sub_field('description');
    $opacity = get_sub_field('opacity');
    $font = get_sub_field('font');
    $contact_form = get_sub_field('form');
    $id = get_sub_field('id');

    $whatsapp = get_sub_field('whatsapp');
    $whatsapp_message = get_sub_field('whatsapp_message');
    $typeLink = ( !isMobile()) ? 'https://web.whatsapp.com/send?phone=': 'https://api.whatsapp.com/send?phone=';
?>

<section <?php echo $id == "" ? "" : 'id='.$id.''; ?> class="testimonials">
    <div
        id="contato"
        class="background bg-img bg-fixed section-padding"
        data-overlay-dark="<?php echo $opacity; ?>"
        data-background="<?php echo wp_is_mobile() == true ? $image_mobile :  $image_desktop; ?>"
    >
        <div class="container">
            <div class="row">
                <div class="col-md-5 mb-30 mt-30">
                    <p><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i></p>
                    <h5 class="<?php echo $font == "Normal" ? "title-normal" : 'title-special'; ?>"><?php echo $title; ?></h5>
                    <h6 class="title"><?php echo $text; ?></h6>
                    <div class="reservations mb-30">
                        <div class="icon color-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="#fff" width="55" height="50" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                        </div>
                        <div class="text">
                            <p class="color-1"><?php echo $subtitle; ?></p>
                            <?php echo ($whatsapp != '' ? '<a class="color-1" target="_blank" href="'.$typeLink.preg_replace("/[^0-9]/","",'+55'.$whatsapp).'&text='.$whatsapp_message.'" title="WhatsApp"><span>'.$whatsapp.'</span></a>' : ''); ?>
                        </div>
                    </div>
                    <p><i class="ti-check"></i><small>Conheça todas as possibilidades de como transformar o seu novo mundo!</small></p>
                    <div class="group-flex">
                        <p>Empreendimento:</p>
                        <img style="width:100px" src="<?php bloginfo('template_url'); ?>/src/images/logo-mrv.png" alt="<?php the_title(); ?>">
                    </div>
                </div>
                <div class="col-md-5 offset-md-2">
                    <div class="booking-box">
                        <div class="head-box">
                            <h6><?php echo $contact_form['title_form']; ?></h6>
                            <h4><?php echo $contact_form['subtitle_form']; ?></h4>
                        </div>
                        <div class="booking-inner clearfix">
                            <div class="form1 clearfix">
                                <div class="row">
                                    <?php echo do_shortcode('[contact-form-7 id="'.$contact_form['contact_form']->ID.'" title="'.$contact_form['contact_form']->post_title.'"]'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>