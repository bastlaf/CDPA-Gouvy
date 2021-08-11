<?php 

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

add_theme_support( 'menus' );


function gouvy_register_assets() {



     // Déclarer jQuery
     wp_deregister_script( 'jquery' ); // On annule l'inscription du jQuery de WP
     wp_enqueue_script( // On déclare une version plus moderne
         'jquery', 
         'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', 
         false, 
         '3.3.1', 
         true 
     );
     
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
		'page_title' 	=> 'Nav Dark',
		'menu_title'	=> 'Nav Dark',
		'menu_slug' 	=> 'header-settings',
        'position' => 1,
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
 


//add_action('admin_menu', 'remove_links_tab_menu_pages');

function remove_links_tab_menu_pages()
{
    remove_menu_page('upload.php');
    remove_menu_page('edit-comments.php');
    remove_menu_page('themes.php');
    remove_menu_page('tools.php');
    remove_menu_page('options-general.php');
    remove_menu_page('edit.php');
    remove_menu_page('plugins.php');
    remove_menu_page('index.php');
    
}

// add_filter('acf/settings/show_admin', '__return_false');



 
function capitaine_login_logo() {
	wp_enqueue_style( 
        'custom-login', 
        get_template_directory_uri() . '/css/custom-login.css', 
        array( 'login' ) 
    );
}
add_action( 'login_enqueue_scripts', 'capitaine_login_logo' );