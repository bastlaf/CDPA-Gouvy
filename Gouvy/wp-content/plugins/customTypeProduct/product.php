<?php

 // Plugin Name: My First Plugin 
function wporg_custom_post_type()
{
    register_post_type(
        'wporg_product',
        array(
            'labels'      => array(
                'name'          => __('Products', 'textdomain'),
                'singular_name' => __('Product', 'textdomain'),
            ),
            'public'      => true,
            'has_archive' => true,
            'rewrite'     => array('slug' => 'products'), // my custom slug
        )
    );
} 

add_action( 'init', 'wporg_custom_post_type' );

?>