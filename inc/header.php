<?php 
require "config.php";
require "connect.php";
?>

<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title><?php echo $pageTitle; ?></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="<?php echo BASE_URL ?>css/normalize.css">
  <link rel="stylesheet" href="<?php echo BASE_URL ?>css/main.css">
</head>

<body>
  <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->
  <header>
    <a class="" href="<?php echo BASE_URL ?>index.php">CD Catalog</a>
    <nav>
      <ul>
        <li><a href="<?php echo BASE_URL ?>artist.php">Artists</a></li>
        <li><a href="<?php echo BASE_URL ?>label.php">Labels</a></li>
        <li><a href="<?php echo BASE_URL ?>album.php">Albums</a></li>
        <li><a href="<?php echo BASE_URL ?>genre.php">Genres</a></li>
      </ul>
    </nav>    
  </header>
  <main>