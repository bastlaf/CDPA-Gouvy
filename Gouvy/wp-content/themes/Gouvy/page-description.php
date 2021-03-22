<?php get_header(); ?>

<div class="imgHeader">
    <img src="<?php the_field('headerherodescription'); ?>" alt="">

    <div class="custom-shape-divider-bottom-1615475501">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M598.97 114.72L0 0 0 120 1200 120 1200 0 598.97 114.72z" class="shape-fill"></path>
        </svg>
    </div>
</div>

<h1><?php the_field('headertitledescription'); ?></h1>

<?php get_footer(); ?>