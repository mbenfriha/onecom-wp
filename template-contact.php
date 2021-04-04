<?php /* Template Name: Modèle page contact */ ?>

<?php get_header(); ?>

<main role="main">

    <div class="wrapper">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 mb-36">
            <div></div>
            <div class="relative text-xl text-normal">
            <img class="stroke-menu black-image" style="left: -11em;" src="<?php echo get_template_directory_uri(); ?>/img/icons/losange_trace.png" alt="">
                <h2 class="text-5xl mb-8 font-normal mt-15 font-bold">Ecrivez-nous !</h2>
                <div class="col-span-6">
                    <div class="py-4">
                        <h3 class="text-2xl mb-12 font-normal col-span-6">Une question, un devis, un café ? Nous vous
                            répondrons rapidement !</h3>
                        <?php do_shortcode(the_field('shortcode_formulaire')); ?>

                    </div>
                </div>
            </div>
            <div></div>
        </div>

        <section class="grid grid-cols-1 gap-4 lg:grid-cols-3 mb-36">
            <div class="m-auto">
                <?php
                    $informationsContact = get_field('informations_contact');
                ?>

                <a href="<?php echo home_url(); ?>"> <img class="m-auto"
                        src="<?= $informationsContact['logo']['url'] ?>" alt="<?= $informationsContact['logo']['alt'] ?>" /></a>
                <div class="py-4">
                    <p class="font-normal text-center">
                        <?= $informationsContact['address'] ?>
                        <br>
                        <?= $informationsContact['zip_city'] ?>
                        <br>
                        FRANCE
                    </p>
                        <br>
                    <p class="font-normal text-center">
                        
                    <?= $informationsContact['tel'] ?>
                        <br>
                        <?= $informationsContact['mail'] ?></p>

                </div>
            </div>
            <div class="col-span-2"><?php do_shortcode(the_field('map')); ?></div>
        </section>


    </div>


    <!-- /section -->
</main>


<?php get_footer(); ?>