<?php
$id = get_sub_field('id');
$script = get_field('script');
$column_1 = get_sub_field('column_1');
$column_2 = get_sub_field('column_2');
$column_3 = get_sub_field('column_3');
$legend = get_sub_field('legend');
$copyright = get_sub_field('copyright');
$chat_whatsapp = get_sub_field('chat_whatsapp');
$lgpd = get_sub_field('lgpd');
?>

<footer <?php echo $id == "" ? "" : 'id='.$id.''; ?> class="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-column footer-about">
                        <h3 class="footer-title"><?php echo $column_1['title']; ?></h3>
                        <div class="footer-about-text">
                            <?php echo $column_1['text']; ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 offset-md-1">
                    <div class="footer-column footer-explore clearfix">
                        <h3 class="footer-title"><?php echo $column_2['title']; ?></h3>
                        <?php
                        wp_nav_menu(
                            array(
                                'container' => '',
                                'menu_class' => 'footer-explore-list list-unstyled',
                                'menu' => $column_2['menu']
                            ));
                        ?>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer-column footer-contact">
                        <h3 class="footer-title"><?php echo $column_3['title']; ?></h3>
                        <p class="footer-contact-text">
                            <?php echo $column_3['address']; ?>
                            <i><strong><?php echo $legend; ?></strong></i>
                        </p>
                        <div class="footer-contact-info">
                            <p class="footer-contact-phone">
                                <svg style="top: 8px;position: relative;" xmlns="http://www.w3.org/2000/svg" fill="#00BD07" width="30" height="30" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                                <?php
                                    $typeLink = ( !isMobile()) ? 'https://web.whatsapp.com/send?phone=': 'https://api.whatsapp.com/send?phone=';
                                    echo ($column_3['whatsapp'] != '' ? '<a class="color-1" target="_blank" href="'.$typeLink.preg_replace("/[^0-9]/","",'+55'.$column_3['whatsapp']).'&text='.$column_3['whatsapp_message'].'" title="WhatsApp"><span>'.$column_3['whatsapp'].'</span></a>' : '');
                                ?>
                            <p class="footer-contact-mail"><a title="Enviar email" target="_blank" href="mailto:<?php echo $column_3['mail']; ?>"><?php echo $column_3['mail']; ?></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="footer-bottom-inner">
                        <p class="footer-bottom-copy-right"><?php echo $copyright; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="button-whatsapp-flutuante">
    <span>Chama no Zap</span>
    <div class="button-whatsapp icon-whats" style="display: block;" title="Enviar mensagem no WhatsApp">
        <div class="animated infinite zoomIn mypage-alo-ph-circle"></div>
        <div class="animated infinite pulse mypage-alo-ph-circle-fill"></div>
        <div class="animated infinite tada mypage-alo-ph-img-circle"></div>
    </div>
</div>

 <div class="whatsapp-aej" style="display: none">
    <div class="header-whatsapp">
        <input id="telefone-whatsapp" type="hidden" value="<?php echo $chat_whatsapp['phone']; ?>">
        <div class="image">
            <img src="<?php echo $chat_whatsapp['photo']; ?>" alt="<?php echo $chat_whatsapp['name']; ?>">
        </div>
        <span class="name-whatsapp"><?php echo $chat_whatsapp['name']; ?></span>
        <div class="close-whatsapp">x</div>
    </div>
    <div class="container-whatsapp">
        <div class="load">
            <div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
        </div>
        <div class="message-whatsapp" style="display: none">
            <?php echo $chat_whatsapp['text']; ?>
        </div>
    </div>
    <div class="text-whatsapp">
        <textarea id="mensagem-whatsapp" placeholder="Digite aqui sua mensagem"></textarea><a id="button-send" class="button-send disabled" href="#" title="Enviar WhatsApp" target="_blank">Enviar</a>
    </div>
</div>


    <?php if($lgpd['show_lgpd'] == true){ ?>
        <div class="cookie-notice" style="display: none">
            <div class="container">
                <div class="notice-text">
                    <span>
                        <?php echo $lgpd['text']; ?>
                    </span>
                </div
                ><div class="notice-buttons">
                    <span class="btn-cookie accept" title="<?php echo $lgpd['button']; ?>"><?php echo $lgpd['button']; ?></span>
                </div>
            </div>
        </div>
    <?php }
    wp_footer();
        if($script['script_footer'] != ""){
            echo $script['script_footer'];
        }
    ?>
</body>
</html>

