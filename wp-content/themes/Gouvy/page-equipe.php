<?php get_header(); ?>

<div class="imgHeader">
    <img src="<?php the_field('headerheroequipe1'); ?>" alt="">

    <div class="custom-shape-divider-bottom-1615475501">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M598.97 114.72L0 0 0 120 1200 120 1200 0 598.97 114.72z" class="shape-fill"></path>
        </svg>
    </div>
</div>

<h1><?php the_field('herotitleequipe'); ?></h1>

<section class="sectionEquipe equipeSection1">
    <h2>Equipe éducatives</h2>
    <div class="equipeBox">
        <?php while( have_rows('cardeduc') ): the_row();?> 
            <div class="card cardEduc">
                <div class="boxImgEquipe">
                    <img src="<?= get_sub_field( 'educimg' )?>" alt="">
                </div>
                <h3 class="name"><?= get_sub_field( 'educname' )?></h3>
            </div>
            <?php endwhile; ?>
    </div> 
</section>

<section class="sectionEquipe equipeSection2">
    <h2>Personnel de cuisine</h2>
    <div class="equipeBox">
        <?php while( have_rows('cardcuisine') ): the_row();?> 
            <div class="card cardCuisine">
                <div class="boxImgEquipe">
                    <img src="<?= get_sub_field( 'cuisineimg' )?>" alt="">
                </div>
                <div class="boxName">
                    <h3 class="name"><?= get_sub_field( 'cuisinename' )?></h3>
                </div> 
            </div>
            <?php endwhile; ?>
    </div> 
</section>

<section class="sectionEquipe equipeSection3">
    <h2>Personnel d'entretien et de décoration</h2>
    <div class="equipeBox">
        <?php while( have_rows('cardentretien') ): the_row();?> 
            <div class="card cardentretien">
                <div class="boxImgEquipe">
                    <img src="<?= get_sub_field( 'entretienimg' )?>" alt="">
                </div>
                <div class="boxName">
                    <h3 class="name"><?= get_sub_field( 'entretienname' )?></h3>
                </div> 
            </div>
            <?php endwhile; ?>
    </div> 
</section>

<section class="sectionEquipe equipeSection4">
    <h2>Personnel entretien extérieur et conduite bus</h2>
    <div class="equipeBox">
        <?php while( have_rows('cardexterieur') ): the_row();?> 
            <div class="card cardexterieur">
                <div class="boxImgEquipe">
                    <img src="<?= get_sub_field( 'exterieurimg' )?>" alt="">
                </div>
                <div class="boxName">
                    <h3 class="name"><?= get_sub_field( 'exterieurname' )?></h3>
                </div> 
            </div>
            <?php endwhile; ?>
    </div> 
</section>

<section class="sectionEquipe equipeSection5">
    <h2>Comptabilité</h2>
    <div class="equipeBox">
        <?php while( have_rows('cardcompta') ): the_row();?> 
            <div class="card cardcompta">
                <div class="boxImgEquipe">
                    <img src="<?= get_sub_field( 'comptaimg' )?>" alt="">
                </div>
                <div class="boxName">
                    <h3 class="name"><?= get_sub_field( 'comptaname' )?></h3>
                </div> 
            </div>
            <?php endwhile; ?>
    </div> 
</section>

<section class="sectionEquipe equipeSection6">
    <h2>Directeur</h2>
    <div class="equipeBox">
        <?php while( have_rows('carddirection') ): the_row();?> 
            <div class="card carddirection">
                <div class="boxImgEquipe">
                    <img src="<?= get_sub_field( 'directionimg' )?>" alt="">
                </div>
                <div class="boxName">
                    <h3 class="name"><?= get_sub_field( 'directionname' )?></h3>
                </div> 
            </div>
            <?php endwhile; ?>
    </div> 
</section>













<?php get_footer(); ?>