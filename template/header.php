<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico" type="image/vnd.microsoft.icon">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico" type="image/vnd.microsoft.icon">
    <!-- wp_head -->
    <?php wp_head(); ?>
    <!-- /wp_head -->
    <script src="https://kit.fontawesome.com/c4d15628cf.js" crossorigin="anonymous"></script>
  </head>
<?php if(is_front_page()): ?>
  <body id="top" class="top">
    <header class="header">
      <div class="header__inr">
        <a href="/"  class="header__logo">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" width="167" height="102" alt="とんかつネット">
      </a>
      <p class="header__caption u-serif">TOPページは工事中です</p>
    </div>
  </header>
<?php else: ?>
  <body id="top">
    <header class="header">
      <div class="header__inr">
        <a href="/"  class="header__logo">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" width="167" height="102" alt="とんかつネット">
      </a>
      <p class="header__caption u-serif">とんかつ好きによる、とんかつ好きのための、とんかつメディア。</p>
    </div>
  </header>
<?php endif; ?>