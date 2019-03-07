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

<div class="jumbotron jumbotron-fluid text-center hero--bg-image text-light" style="background-image: 
    linear-gradient(rgba(20,20,20, .3), rgba(20,20,20, .3)), url('<?php the_field('hero_image'); ?>');">
  <div class="container hero-content">
    <h1 class="text-uppercase mb-5"><?php the_field('hero_heading'); ?></h1>

    <a class="btn btn-primary btn-lg" href="#" role="button"><?php the_field('hero_button'); ?></a>
  </div>
</div>