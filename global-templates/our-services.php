<?php
/**
 * Our Services setup.
 *
 * @package eventosybodas
 */

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}
?>
<div class="container">
  <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-5"><?php the_field('service_heading'); ?></h1>
    <p class="lead"><?php the_field('service_sub_heading'); ?></p>
  </div>
</div>

<div class="container">
  <div class="card-deck mb-3">
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal text-uppercase text-center"><?php the_field('service_1_title') ?></h4>
      </div>
      <div class="thumbnail">
        <img src="<?php the_field('service_1_image'); ?>" alt="">
      </div>
      <div class="card-body">
        <p><?php the_field('service_1_excerpt'); ?></p>
        <button type="button" class="btn btn-lg btn-block btn-outline-secondary">Give us a call!</button>
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal text-uppercase text-center"><?php the_field('service_2_title') ?></h4>
      </div>
      <div class="thumbnail">
        <img src="<?php the_field('service_2_image'); ?>" alt="">
      </div>
      <div class="card-body">
        <p><?php the_field('service_2_excerpt'); ?></p>
        <button type="button" class="btn btn-lg btn-block btn-secondary">Get started</button>
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal text-uppercase text-center"><?php the_field('service_3_title') ?></h4>
      </div>
      <div class="thumbnail">
        <img src="<?php the_field('service_3_image'); ?>" alt="">
      </div>
      <div class="card-body">
        <p><?php the_field('service_3_excerpt'); ?></p>
        <button type="button" class="btn btn-lg btn-block btn-secondary">Contact us</button>
      </div>
    </div>
  </div>
</div>