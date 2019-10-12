<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name') ?> Katsumasa Sato</title>
    <meta name="description"  content="<?php bloginfo('description'); ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/styles.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Serif+JP|Taviraj&amp;display=swap"><script src="https://kit.fontawesome.com/48f542ac57.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/ie.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/app.js" defer></script>
  <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <nav class="l-menu__container is-none" id="js-menu"><span class="l-menu__status">Portfolio Katsumasa Sato</span>
      <ul class="l-menuInline">
        <li>
          <button class="js-btnResume l-menuInline__list">Resume</button>
        </li>
        <li>
          <button class="js-btnWork l-menuInline__list">Work</button>
        </li>
        <li>
          <button class="js-btnBlog l-menuInline__list">Blog</button>
        </li>
        <li>
          <button class="l-menuInline__list" id="js-btnCloseContent"><span class="fas fa-times"></span></button>
        </li>
      </ul>
    </nav>
    <p class="l-content__ieError" id="ieError"></p>
    <main class="l-container__background l-container__background--img">
