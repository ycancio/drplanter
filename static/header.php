<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 

  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha256-NuCn4IvuZXdBaFKJOAcsU2Q3ZpwbdFisd5dux4jkQ5w=" crossorigin="anonymous" />

  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/normalize.css">
  <link rel="stylesheet" href="assets/css/main.css">
 <?php 
    error_reporting(E_ALL ^ E_NOTICE);
    $page = $_SERVER['SCRIPT_NAME'];
    $is_home = strpos($page, 'index.php') !== false?true:false;   
  ?>
</head>

<body class="<?php if ($is_home) echo 'home'; else echo 'page'; ?>">
  <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

  
<div class="<?php if ($is_home) echo 'container'; else echo 'container_header'; ?>">
<header>
  <?php if (!$is_home) echo '<div class="container">'; ?>
<nav class="navbar navbar-light navbar-expand-lg">
  <a class="navbar-brand" href="index.php"><img src="assets/img/drplanter_logo.png" alt="Dr Planter"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="about.php">About Dr. Planter</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="gallery.php">Gallery</a>
      </li> 
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Services
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="plant-sales.php">Plant Sales</a>
          <a class="dropdown-item" href="plant-installation.php">Plant Installation</a> 
          <a class="dropdown-item" href="plant-maintenance.php">Plant Maintenance</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>
    </ul> 
  </div>
</nav>
 <?php if (!$is_home) echo '</div>'; ?>
</header>
</div>

<div class="container">