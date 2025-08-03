<?php
// Registra o Custom Post Type "FAQ"
add_action('init', 'faq_register_init');

function faq_register_init() {
    $labels = array(
        'name' => _x('FAQs', 'post type general name', 'sprintcodes'),
        'singular_name' => _x('FAQ', 'post type singular name', 'sprintcodes'),
        'add_new' => _x('Nova FAQ', 'faq entry', 'sprintcodes'),
        'add_new_item' => __('Nova FAQ', 'sprintcodes'),
        'edit_item' => __('Editar FAQ', 'sprintcodes'),
        'new_item' => __('Nova FAQ', 'sprintcodes'),
        'view_item' => __('Visualizar FAQ', 'sprintcodes'),
        'search_items' => __('Buscar FAQ', 'sprintcodes'),
        'not_found' => __('Nenhuma FAQ encontrada', 'sprintcodes'),
        'not_found_in_trash' => __('Nenhuma FAQ foi encontrada na lixeira', 'sprintcodes'),
        'parent_item_colon' => ''
    );

    $args = array(
        'labels' => $labels,
        'public' => false, // 🔴 define como não público
        'publicly_queryable' => false, // 🔴 impede acesso direto
        'show_ui' => true, // 🔵 ainda visível no admin
        'query_var' => true,
        'rewrite' => false, // 🔴 desabilita URLs amigáveis
        'exclude_from_search' => true, // 🔴 não aparece em buscas
        'has_archive' => false,
        'menu_icon' => 'dashicons-editor-help',
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'comments')
    );


    register_post_type('faq', $args);

    // Taxonomia personalizada para o tipo "faq"
    register_taxonomy('faq-type', 'faq', array(
        'hierarchical' => true,
        'label' => 'Tipo de FAQ',
        'singular_label' => 'Tipo de FAQ',
        'rewrite' => array('slug' => 'tipo-de-faq'),
    ));
}

// Adiciona coluna de imagem destacada no admin
add_filter('manage_faq_posts_columns', 'faq_custom_columns');
add_action('manage_faq_posts_custom_column', 'faq_custom_column_content', 10, 2);

function faq_custom_columns($columns) {
    $new_columns = array();
    foreach ($columns as $key => $value) {
        $new_columns[$key] = $value;
        if ($key === 'title') {
            $new_columns['thumbnail'] = __('Imagem Destacada', 'sprintcodes');
        }
    }
    return $new_columns;
}

function faq_custom_column_content($column_name, $post_id) {
    if ($column_name === 'thumbnail') {
        echo get_the_post_thumbnail($post_id, 'thumbnail');
    }
}

// Estilo customizado para miniaturas no admin
add_filter('post_thumbnail_html', 'custom_thumbnail_style', 10, 4);
function custom_thumbnail_style($thumbnail_html, $post_id, $thumbnail_id, $size) {
    if ($size === 'thumbnail') {
        $thumbnail_html = preg_replace('/(width|height)=\"\d*\"\s/', "", $thumbnail_html);
        $thumbnail_html = str_replace('<img', '<img style="max-width: 80px; height: auto;"', $thumbnail_html);
    }
    return $thumbnail_html;
}
?>
