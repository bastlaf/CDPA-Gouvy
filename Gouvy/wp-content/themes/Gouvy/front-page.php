<?php get_header(); ?>


<div class="imgHeader">
    <img src="<?php the_field('headerhero'); ?>" alt="">

    <div class="custom-shape-divider-bottom-1615475501">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M598.97 114.72L0 0 0 120 1200 120 1200 0 598.97 114.72z" class="shape-fill"></path>
        </svg>
    </div>
</div>

<h1><?php the_field('headertitlefrontpage'); ?></h1>


<div class="section1">
    <div class="Section1Box">
        <div class="section1Gauche">
            <h2><?php the_field('titlesection2'); ?></h2>
            <?php the_field('section1phrase1'); ?>
            <?php while( have_rows('section1repeater') ): the_row();?> 
                <div class="test"><?= get_sub_field( 'section1puce' )?></div>
            <?php endwhile; ?>
        </div>
        
        <div class="section1Droite">
            <img class="section1__image1" src="<?php the_field('imagesection1a'); ?>" alt="">
            <img class="section1__image2" src="<?php the_field('imagesection1b'); ?>" alt="">
        </div>  
    </div>
</div>

    <div class="section2">
        <div class="custom-shape-divider-top-1615556839">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M1200 0L0 0 598.97 114.72 1200 0z" class="shape-fill"></path>
            </svg>
        </div>

    <div class="section2Box">
        <div class="section2Gauche">
            <img class="section2__image" src="<?php the_field('imagesection2'); ?>" alt="">
        </div>
        <div class="section2Droite">
            <h2><?php the_field('section2titre'); ?></h2>
            <?php while( have_rows('section2anneerepeater') ): the_row();?> 
                <p><?= get_sub_field( 'section2annee' )?> :</p>
                <?php while( have_rows('section2repeater') ): the_row();?>
                    <ul>
                        <li><?= get_sub_field( 'section2date' )?></li>
                    </ul> 
                <?php endwhile; ?>
            <?php endwhile; ?>
        </div>

    </div>

    </div>
<?php get_footer(); ?>