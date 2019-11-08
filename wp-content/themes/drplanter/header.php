<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package drplanter
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


<div class="<?php if (is_front_page()) echo 'container'; else echo 'container_header'; ?>">
<header>
  <?php if (!is_front_page()) echo '<div class="container">'; ?>
<nav class="navbar navbar-light navbar-expand-lg">
  <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri().'/assets/img/drplanter_logo.png';?>" alt="Dr Planter"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo get_page_link(41); ?>">About Dr. Planter</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="gallery">Gallery</a>
      </li> 
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Services
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="plant-sales">Plant Sales</a>
          <a class="dropdown-item" href="plant-installation">Plant Installation</a> 
          <a class="dropdown-item" href="plant-maintenance">Plant Maintenance</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact">Contact</a>
      </li>
    </ul> 
  </div>
</nav>
 <?php if (!is_front_page()) echo '</div>'; ?>
</header>
</div>

<div id="content" class="container">
