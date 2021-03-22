<?php 

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

add_theme_support( 'menus' );


function gouvy_register_assets() {



     // Déclarer jQuery
     //wp_enqueue_script('jquery' );
    
     // déclarer swiper JS
     wp_enqueue_script( 
        'swiper JS js', 
        'https://unpkg.com/swiper/swiper-bundle.min.js', 
        array(), 
        '1.0', 
        true
    );

    wp_enqueue_style( 
        'swiper JS css',
        'https://unpkg.com/swiper/swiper-bundle.min.css', 
        array(), 
        '1.0'
    );

     // Déclarer le JS
     wp_enqueue_script( 
         'gouvy JS', 
         get_template_directory_uri() . '/js/script.js', 
         ['swiper JS js'], 
         '1.0', 
         true
     );

    // Déclarer style.css à la racine du thème
    wp_enqueue_style( 
        'gouvy',
        get_stylesheet_uri(), 
        array(), 
        '1.0'
    );


    // Déclarer un autre fichier CSS
    wp_enqueue_style( 
        'gouvy main', 
        get_template_directory_uri() . '/css/main.css',
        array(), 
        '1.0'
    );
    

    // wp_enqueue_style( 
    //     'gouvy front-page', 
    //     get_template_directory_uri() . '/css/front-page.css',
    //     array(), 
    //     '1.0'
    // );

    // wp_enqueue_style( 
    //     'gouvy footer', 
    //     get_template_directory_uri() . '/css/footer.css',
    //     array(), 
    //     '1.0'
    // );

};
add_action( 'wp_enqueue_scripts', 'gouvy_register_assets' );



if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'header',
		'menu_title'	=> 'header',
		'menu_slug' 	=> 'header-settings',
        'position' => 4,
        'icon_url' => 'dashicons-format-image',
		'redirect'		=> false
	));
}



function custom_menus()
{
    $locations = [
        "primary" => "Desktop menu"
    ];

    register_nav_menus($locations);
}

add_action("init", "custom_menus"); 

add_filter( 'use_block_editor_for_post', '__return_false' );


add_filter('show_admin_bar', '__return_false');
 
