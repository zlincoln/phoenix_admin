<?php

add_action('init', 'create_product_post_type');
add_action('init', 'create_book_post_type');
add_action('init', 'create_question_post_type');
add_action('init', 'create_learn_article_post_type');

function create_product_post_type() {
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
        'menu_icon'   => 'dashicons-products',
        'taxonomies' => array('category')
    );

    register_post_type('product', $args);
}

function create_book_post_type() {
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

function create_question_post_type() {
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
        'supports'           => array('title'),
        'has_archive'        => true,
        'show_ui'            => true,
        'capability_type'    => 'post',
        'menu_icon'   => 'dashicons-info'
    );

    register_post_type('question', $args);
}

function create_learn_article_post_type() {
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