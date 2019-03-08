<?php

/**
 * Template for Front-page 
 *
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