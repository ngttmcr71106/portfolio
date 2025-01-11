<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Tomoki's Portfolio</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;900&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700;900&amp;display=swap"
    rel="stylesheet">

  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/public/assets/css/output.css" />

  <?php wp_head(); ?>
</head>

<body>
<div class="footerFixed">
<header class="p-10 mx-auto">
    <ul class="flex justify-center gap-10">
        <li><a href="<?php echo home_url("/"); ?>">About Me</a></li>
        <li><a href="<?php echo home_url("/portfolio"); ?>">Portfolio</a></li>
        <li><a href="https://www.instagram.com/nippon_no_tomoki/" target="_blank">Contact</a></li>
    </ul>
</header>
<main class="max-w-screen-lg mx-auto">