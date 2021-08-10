<?php get_header(); ?>

<div class="imgHeader">
    <img src="<?php the_field('headerherotarifs'); ?>" alt="">

    <div class="custom-shape-divider-bottom-1615475501">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M598.97 114.72L0 0 0 120 1200 120 1200 0 598.97 114.72z" class="shape-fill"></path>
        </svg>
    </div>
</div>

<h1><?php the_field('headertitletarifs'); ?></h1>



<section class="sectionTable">
    

    <div class="svg svg1"><?php echo file_get_contents(get_template_directory_uri() . "/img/blob.svg"); ?></div>
    <div class="svg svg1"><?php echo file_get_contents(get_template_directory_uri() . "/img/blob2.svg"); ?></div>

    <div class="svg svg2"><?php echo file_get_contents(get_template_directory_uri() . "/img/blob2.svg"); ?></div>
    <div class="svg svg3"><?php echo file_get_contents(get_template_directory_uri() . "/img/blob2.svg"); ?></div>

    <div class="svg svg4"><?php echo file_get_contents(get_template_directory_uri() . "/img/blob3.svg"); ?></div>
    <div class="svg svg5"><?php echo file_get_contents(get_template_directory_uri() . "/img/blob3.svg"); ?></div>
    
    <div class="svg svg6"><?php echo file_get_contents(get_template_directory_uri() . "/img/blob4.svg"); ?></div>
    <div class="svg svg7"><?php echo file_get_contents(get_template_directory_uri() . "/img/blob4.svg"); ?></div>



<?php while( have_rows('tarifannee') ): the_row();?> 

    <h2><?= get_sub_field('tarifsanneetitle'); ?></h2>
    
    <div class="tarifBox">
        <?php while( have_rows('tarifcardrepeater') ): the_row();?> 
        <div class="cardTarif">
            <div class="cardTarifTop">
                <img src="<?= get_sub_field( 'tarifcardimg' )?>" alt="">
                <h3><?= get_sub_field( 'tarifcardtitle' )?></h3>
            </div>
            <div class="cardTarifContain">
                <div class="flexG1">Durée du séjour</div>
                <div class="flexD1">Par personne</div>
                <?php while( have_rows('tarifcardpricerepeater') ): the_row();?> 
                    <div class="flexG"><?= get_sub_field( 'tarifcardpersonne' )?></div>
                    <div class="flexD"><?= get_sub_field( 'tarifcardprice' )?></div>
                <?php endwhile; ?>
            </div>
        </div>
        <?php endwhile; ?>
    </div>

<?php endwhile; ?>

</section>


<section class="section1Tarifs" >
    
    <div class="divPrincipale" style= "background-image: linear-gradient(360deg, rgba(255,255,255,0) 0%, rgba(255,255,255,0) 14%, rgba(255,255,255,1) 87%, rgba(255,255,255,1) 100%), url(<?= get_field( 'section1background' )?>);">

        <h2><?php the_field('tarifssection1title'); ?></h2>

        <div class="section4PDF">
            <?php while( have_rows('tarifssection1repeater') ): the_row();?> 
                <div class="pdfTarifs" >
                    <a href="<?= get_sub_field( 'tarifssection1documents' )?>" download="<?= get_sub_field( 'documentspdf' )?>">
                        <img src="<?= get_sub_field( 'tarifssection1img' )?>">
                    </a>
                    <h4><?= get_sub_field( 'tarifssection1name' )?></h4>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>

















<?php get_footer(); ?>