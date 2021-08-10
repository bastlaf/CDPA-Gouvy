<?php get_header(); ?>

    <div class="imgHeader">
        <img src="<?php the_field('headerherocontact'); ?>" alt="">

        <div class="custom-shape-divider-bottom-1615475501">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M598.97 114.72L0 0 0 120 1200 120 1200 0 598.97 114.72z" class="shape-fill"></path>
            </svg>
        </div>
    </div>

    <h1><?php the_field('contacttitlehero'); ?></h1>

    <section class="contactSection1">
        <div class="boxContact">
            <div class="contactGauche">
                <h2 class="adresse">Adresse</h2>
                <p class="nomDuLieu"><?php the_field('nomlieu'); ?></p>
                <p class="rue"><?php the_field('nomrue'); ?></p>
                <p class="adressePostale"><?php the_field('codepostal'); ?></p>
                <p class="mailGouvy"><?php the_field('mail'); ?></p>
                <p class="telGouvy"><?php the_field('numerotelephone'); ?></p>

            </div>
            <div class="contactDroite">
                <h2 class="personneDeContact">Personnes de contact</h2>
                <?php while( have_rows('contactrepeater') ): the_row();?> 
                    <p class="contactposte"><?= get_sub_field( 'contactposte' )?></p>
                    <p><?= get_sub_field( 'contactname' )?></p>
                    <p><?= get_sub_field( 'contactmail' )?></p>
                    <?= get_sub_field( 'contacttel' )?>
                <?php endwhile; ?>
            </div>
        </div>
    </section>



<?php get_footer(); ?>