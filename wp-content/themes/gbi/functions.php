<?php

add_action('init', 'createProductPostType', 0);
add_action('init', 'createBookPostType', 0);
add_action('init', 'createQuestionPostType', 0);
add_action('init', 'createLearnArticlePostType', 0);

function createProductPostType() {
    $labels = array(
        'name'               => _x('Products', 'post type general name'),
        'singular_name'      => _x('Product', 'post type singular name'),
        'search_name'        => __('Product'),
        'add_new'            => _x('Add New', 'product'),
        'add_new_item'       => __('Add New Product'),
        'edit_item'          => __('Edit Product'),
        'new_item'           => __('New Product'),
        'all_items'          => __('All Products'),
        'view_item'          => __('View Products'),
        'search_items'       => __('Search Products'),
        'not_found'          => __('No products found'),
        'not_found_in_trash' => __('No products found in the Trash'),
        'parent_item_colon'  => '',
        'menu_name'          => 'Products'
    );

    $args = array(
        'labels'             => $labels,
        'description'        => 'Products',
        'public'             => true,
        'publicly_queryable' => true,
        'menu_position'      => 5,
        'supports'           => array('title'),
        'has_archive'        => true,
        'show_ui'            => true,
        'capability_type'    => 'post',
        'menu_icon'   => 'dashicons-products'
    );

    register_post_type('product', $args);

    register_taxonomy(
        'metal-type',
        'product',
        array(
            'label' =>  'Type',
            'rewrite' => array('slug' => 'metal-type'),
            'hierarchical' => true,
        )
    );

    register_taxonomy(
        'metal-shape',
        'product',
        array(
            'label' =>  'Shape',
            'rewrite' => array('slug' => 'metal-shape'),
            'hierarchical' => true,
        )
    );

    register_taxonomy(
        'metal-weight',
        'product',
        array(
            'label' =>  'Weight',
            'rewrite' => array('slug' => 'metal-weight'),
            'hierarchical' => true,
        )
    );

    register_taxonomy(
        'metal-diameter',
        'product',
        array(
            'label' =>  'Diameter',
            'rewrite' => array('slug' => 'metal-diameter'),
            'hierarchical' => true,
        )
    );

    register_taxonomy(
        'metal-thickness',
        'product',
        array(
            'label' =>  'Thickness',
            'rewrite' => array('slug' => 'metal-thickness'),
            'hierarchical' => true,
        )
    );

    register_taxonomy(
        'metal-eligibility',
        'product',
        array(
            'label' =>  'Eligibility',
            'rewrite' => array('slug' => 'metal-eligibility'),
            'hierarchical' => true,
        )
    );

    register_taxonomy(
        'metal-face-value',
        'product',
        array(
            'label' =>  'Face Value',
            'rewrite' => array('slug' => 'metal-face-value'),
            'hierarchical' => true,
        )
    );

    register_taxonomy(
        'metal-purity',
        'product',
        array(
            'label' =>  'Purity',
            'rewrite' => array('slug' => 'metal-purity'),
            'hierarchical' => true,
        )
    );
}

function createBookPostType() {
    $labels = array(
        'name'               => _x('Books', 'post type general name'),
        'singular_name'      => _x('Book', 'post type singular name'),
        'search_name'        => __('Book'),
        'add_new'            => _x('Add New', 'book'),
        'add_new_item'       => __('Add New Book'),
        'edit_item'          => __('Edit Book'),
        'new_item'           => __('New Book'),
        'all_items'          => __('All Books'),
        'view_item'          => __('View Books'),
        'search_items'       => __('Search Books'),
        'not_found'          => __('No books found'),
        'not_found_in_trash' => __('No books found in the Trash'),
        'parent_item_colon'  => '',
        'menu_name'          => 'Books'
    );

    $args = array(
        'labels'             => $labels,
        'description'        => 'Books',
        'public'             => true,
        'publicly_queryable' => true,
        'menu_position'      => 5,
        'supports'           => array('title'),
        'has_archive'        => true,
        'show_ui'            => true,
        'capability_type'    => 'post',
        'menu_icon'   => 'dashicons-book'
    );

    register_post_type('book', $args);
}

function createQuestionPostType() {
    $labels = array(
        'name'               => _x('FAQs', 'post type general name'),
        'singular_name'      => _x('FAQ', 'post type singular name'),
        'search_name'        => __('FAQs'),
        'add_new'            => _x('Add New', 'question'),
        'add_new_item'       => __('Add New FAQ'),
        'edit_item'          => __('Edit FAQ'),
        'new_item'           => __('New FAQ'),
        'all_items'          => __('All FAQs'),
        'view_item'          => __('View FAQ'),
        'search_items'       => __('Search FAQs'),
        'not_found'          => __('No FAQs found'),
        'not_found_in_trash' => __('No FAQs found in the Trash'),
        'parent_item_colon'  => '',
        'menu_name'          => 'FAQs'
    );

    $args = array(
        'labels'             => $labels,
        'description'        => 'FAQs',
        'public'             => true,
        'publicly_queryable' => true,
        'menu_position'      => 5,
        'supports'           => array('title', 'editor'),
        'has_archive'        => true,
        'show_ui'            => true,
        'capability_type'    => 'post',
        'menu_icon'   => 'dashicons-info'
    );

    register_post_type('question', $args);

    register_taxonomy(
        'faq-category',
        'question',
        array(
            'label' =>  'Category',
            'rewrite' => array('slug' => 'faq-category'),
            'hierarchical' => true,
        )
    );
}

function createLearnArticlePostType() {
    $labels = array(
        'name'               => _x('Learn Articles', 'post type general name'),
        'singular_name'      => _x('Learn Article', 'post type singular name'),
        'search_name'        => __('Learn Articles'),
        'add_new'            => _x('Add New', 'learn_article'),
        'add_new_item'       => __('Add New Learn Article'),
        'edit_item'          => __('Edit Learn Article'),
        'new_item'           => __('New Learn Article'),
        'all_items'          => __('All Learn Articles'),
        'view_item'          => __('View Learn Article'),
        'search_items'       => __('Search Learn Articles'),
        'not_found'          => __('No Learn Articles found'),
        'not_found_in_trash' => __('No Learn Articles found in the Trash'),
        'parent_item_colon'  => '',
        'menu_name'          => 'How It Works Articles'
    );

    $args = array(
        'labels'             => $labels,
        'description'        => 'Learn Articles',
        'public'             => true,
        'publicly_queryable' => true,
        'menu_position'      => 5,
        'supports'           => array('title'),
        'has_archive'        => true,
        'show_ui'            => true,
        'capability_type'    => 'post',
        'menu_icon'   => 'dashicons-welcome-learn-more'
    );

    register_post_type('learn_article', $args);
}

add_action('acf/render_field_settings/type=text', 'add_readonly_and_disabled_to_text_field');
function add_readonly_and_disabled_to_text_field($field) {
    acf_render_field_setting($field, array(
        'label'      => __('Read Only?','acf'),
        'instructions'  => '',
        'type'      => 'radio',
        'name'      => 'readonly',
        'choices'    => array(
            1        => __("Yes",'acf'),
            0        => __("No",'acf'),
        ),
        'layout'  =>  'horizontal',
    ));
    acf_render_field_setting($field, array(
        'label'      => __('Disabled?','acf'),
        'instructions'  => '',
        'type'      => 'radio',
        'name'      => 'disabled',
        'choices'    => array(
            1        => __("Yes",'acf'),
            0        => __("No",'acf'),
        ),
        'layout'  =>  'horizontal',
    ));
}

if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title' 	=> 'GoldSilver Settings'
    ));
}