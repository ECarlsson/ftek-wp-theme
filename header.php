<?php
/**
 * Template for displaying header
 * 
 * @package ftek-wp-theme
 * @since ftek-wp-theme 1.0.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page">

        <?php get_template_part( 'template-parts/header', 'nav' ); ?>

        <main id="main" role="main">