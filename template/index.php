<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="refresh" content="0;URL='/news/'" />
    <meta name="robots" content="noindex, nofollow">
    <title><?php echo wp_get_document_title(); ?></title>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico" type="image/vnd.microsoft.icon">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico" type="image/vnd.microsoft.icon">
  </head>
  <body>

  </body>
</html>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="refresh" content="0;URL='/'" />
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="robots" content="noindex, nofollow">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico" type="image/vnd.microsoft.icon">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico" type="image/vnd.microsoft.icon">
  </head>
  <body id="top">
    <header class="header">
      <div class="header__logo">
        <a href="/">
          <p><img src="" width="" height="" alt="とんかつネット"></p> 
        </a>
      </div> 
    </header>
    <div class="l-content-wrapper post">
      <div class="l-content-2col">
        <main class="l-2col__main">
          <div class="content">
<p>トップに戻ります</p>
          </div>
        </main>
<?php
  get_template_part('content-side');
?>
      </div>
    </div>
<?php
get_footer();
?>