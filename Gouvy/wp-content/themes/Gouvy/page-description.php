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


<section class="section1Description">
    <div class="descriptionLieu">
        <?php the_field('descriptionprincipale'); ?>
    </div>
</section>


<section class="section2Description">
    <div class="custom-shape-divider-top-1616421080">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M649.97 0L599.91 54.12 550.03 0 0 0 0 120 1200 120 1200 0 649.97 0z" class="shape-fill"></path>
        </svg>
    </div>

    <div class="descriptionInfra">
        <h2><?php the_field('infrastructuretitle'); ?></h2>
            <div class="descriptionInfraBox">
                <div class="descriptionInfraGauche">   
                    <?php while( have_rows('infrastructurerepeater') ): the_row();?> 
                        <ul>
                            <li><?= get_sub_field( 'infrastructurepuce' )?></li>
                        </ul> 
                    <?php endwhile; ?>
                </div>

                <div class="descriptionInfraDroite">   
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <?php while( have_rows('infrastructureimagerepeater') ): the_row();?> 
                            <div class="swiper-slide"><img src="<?= get_sub_field( 'infrastructureimage' )?>" alt=""></div>
                            <?php endwhile; ?>  
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination pagination-Description"></div>
                    </div>
                </div> 
            </div>
    </div>
</section>


<section class="section3Description" style= "background-image: linear-gradient(90deg, rgba(45,45,57,0) 0%, rgba(45,45,57,0.5998774509803921) 50%, rgba(45,45,57,0.8547794117647058) 100%), url(<?= get_field( 'actibackground' )?>);">


    <div class="section3Box">
        <div class="section3Text">
            <h2><?php the_field('actititle'); ?></h2>
            <p><?php the_field('actisubtitle'); ?></p>
            <?php while( have_rows('actirepeater') ): the_row();?> 
                <ul>
                    <li><?= get_sub_field( 'actipuce' )?></li>
                </ul> 
            <?php endwhile; ?>
            <?php the_field('actideplacement'); ?>
        </div>
    </div>

    <div class="section3PDF">
        <?php while( have_rows('documentsrepeater') ): the_row();?> 
        <div class="pdf" >
                <a href="<?= get_sub_field( 'documentspdf' )?>" download="<?= get_sub_field( 'documentspdf' )?>">
                    <img src="<?= get_sub_field( 'documentsimg' )?>">
                </a>
                <h4><?= get_sub_field( 'documentstitle' )?></h4>
                <?= get_sub_field( 'documentsdescription' )?>
            </div>
        <?php endwhile; ?>

    </div>


</section>

<section class="section4Description">
    <h2>public cible :</h2>
    <div>
        <p>Les élèves de l'enseignement ordinaire :</p>
        <ul>
            <li>3ème maternelle à 6ème primaire</li>
            <li>1er degré du secondaire</li>
        </ul>
        <p>Les élèves de l'enseignement spécialisé (type 1 & 8).</p>
        <ul>
            <li>Primaire</li>
            <li>1ère phase secondaire</li>
        </ul>
        <p>En cas de classe mixte (par types), nous sommes en mesure d'accueillir quelques élèves fréquentant l'enseignement de type 2 et 3</p>
    </div>

</section>






<?php get_footer(); ?>