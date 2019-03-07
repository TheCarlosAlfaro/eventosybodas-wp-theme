<?php

/**
 * Template Name: Full Width Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package eventosybodas
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod('eventosybodas_container_type');
?>

<!-- Hero Section/Jumbotron -->
<?php get_template_part('global-templates/jumbotron'); ?>

<!-- Sign up Section -->
<?php get_template_part('global-templates/signup'); ?>

<!-- Latest Section -->
<?php get_template_part('global-templates/latest'); ?>

<!-- Quote Section -->
<?php get_template_part('global-templates/quote'); ?>

<!-- Book Section -->
<?php get_template_part('global-templates/book'); ?>

<!-- Live Section -->
<?php get_template_part('global-templates/live'); ?>

<!-- Biography Section -->
<?php get_template_part('global-templates/biography'); ?>

<!-- Gallery Section -->
<?php get_template_part('global-templates/gallery'); ?>


<?php get_footer(); ?>
