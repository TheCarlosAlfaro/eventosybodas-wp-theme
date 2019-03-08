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

<!-- Our Services Section -->
<?php if (get_field('service_section')) {

	get_template_part('global-templates/our-services');
} ?>


<?php get_footer(); ?>