<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>    
    <?php wp_head(); ?>
</head>

<?php wp_body_open(); ?>
<body <?php body_class(); ?>>

    <header class="header">

        <nav class="navDark">
            <div class="navDarkDiv1">
                <img class="navDarkImg" src="<?php echo wp_get_attachment_image_src(18, 'thumbnail')[0] ?>" alt="">
                <p><?php the_field('navTitle', 'option'); ?></p>
            </div>
            <p>0456/02 11 09</p>
        </nav>

        <div class="search">
            <?php
            wp_nav_menu([
                "menu" => "primary",
                "container" => "",
                "items_wrap" => '<ul class="sub-nav">%3$s</ul>',
                "theme_location" => "primary"
            ])
            ?>
        </div>

        <div id="menu" class="menu">
        <?php
            wp_nav_menu([
                "menu" => "primary",
                "container" => "",
                "items_wrap" => '<ul class="sub-nav">%3$s</ul>',
                "theme_location" => "primary"
            ])
            ?>
        </div>
        
        <button id="btnMenuResp" class="btnMenuResp">
            <span id="span1" class="span"></span>
            <span id="span2" class="span"></span>
            <span id="span3" class="span"></span>
        </button>

    </header>






