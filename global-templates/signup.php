<?php

/**
 * Jumbotron setup.
 *
 * @package eventosybodas
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
?>

<div id="home-signup">
    <div class="hidden-sx section parallax py-5" style="background: url('http://staging.guillermojimenez.online/wp-content/uploads/2019/01/signup-eventosybodas.jpg');
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;">
        <!-- <div style="background-color: #EFEFEF;" class="py-5"> -->
        <h3 class="text-center section-header">
            <?php echo get_theme_mod('home_devotionals_heading', 'SUSCRÍBASE A NUESTRO DEVOCIONAL DIARIO'); ?>
        </h3>
        <p class="text-center section-sub-header">
            <?php echo get_theme_mod('home_devotionals_sub_heading', 'Subscribe and receive our daily devotionals'); ?>
        </p>
        <div class="container text-center">
            <div class="top-pad">
                <!-- Sign up form -->
                <div id="header__contact-form">
                    <?php echo do_shortcode('[contact-form-7 id="2805" title="Suscribirse"]'); ?>

                </div>
            </div>
        </div>
    </div>
</div> 