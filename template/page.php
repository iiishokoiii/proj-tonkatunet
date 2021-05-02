<?php
get_header();
?>
    <div class="l-content-wrapper post">
      <div class="l-content-2col">
        <main class="l-2col__main">
          <div class="content">
<?php
if( have_posts()):
  while(have_posts()):the_post();
    the_content();
  endwhile;
endif;
?>
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