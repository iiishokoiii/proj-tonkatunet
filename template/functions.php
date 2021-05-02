<?php
function my_enqueue_scripts() {
  wp_enqueue_script( 'jquery' );
  wp_enqueue_script( 'main', get_template_directory_uri(). '/assets/js/main.js', array() );
  wp_enqueue_style( 'my_style', get_template_directory_uri(). '/assets/css/common.css', array() );
}
add_action( 'wp_enqueue_scripts', 'my_enqueue_scripts' );

// SNS アドレス設定
function get_insta_addres() {
  $url_insta ='';
  return $url_insta;
}
function get_fb_addres() {
  $url_fb ='';
  return $url_fb;
}

// ヘッダー、フッターのカスタムメニュー化
// register_nav_menus(
// 	array(
// 		'place_global' => ' グローバル',
// 	)
// );

// ページタイトルの取得
// function get_main_title() {
// 	if ( is_singular( 'post' ) ):
// 		$category_obj = get_the_category();
// 		return $category_obj[0]->name;
//   elseif ( is_page() ):
//     return get_the_title();
//   elseif ( is_category() ):
//     return single_cat_title();
// 	endif;
// }

// アーカイブの年月表示変換
function my_archives_link($html){
  $html = str_replace('年','.',$html);
  $html = str_replace('月','',$html);
  return $html;
}
add_filter('get_archives_link', 'my_archives_link');
function my_gettext($translated_text, $original_text, $domain) {
  if ($original_text == '%1$s %2$d') {
    $translated_text = '%2$s.%1$02d';
  }
  return $translated_text;
}
add_filter('gettext', 'my_gettext', 20, 3);

// アイキャッチ画像の設定
add_theme_support( 'post-thumbnails' );

// function get_page_slug() {
//   $post_obj =  $GLOBALS['wp_the_query']->get_queried_object();
//   $slug = '';
//   if(is_front_page()) {
//     $slug = 'top';
//   } else  if ($post_obj->post_parent) {
//     $post_data = get_post($post_obj->post_parent);
//     $slug = $post_data->post_name;
//   } elseif(is_page() && get_post( get_the_ID() )->post_name) {
//     $slug = $post_obj->post_name;
//   } elseif (is_category()) {
//     $slug = $post_obj->category_nicename;
//   }
//   $_slug = esc_attr($slug);
//   return $_slug;
// }

// メニューの表示設定
// function remove_menus() {
  //remove_menu_page( 'index.php' ); // ダッシュボード
  //remove_menu_page( 'edit.php' ); // 投稿
  // remove_submenu_page( 'edit.php', 'edit-tags.php?taxonomy=post_tag' ); 
  //remove_menu_page( 'upload.php' ); // メディア
  //remove_menu_page( 'edit.php?post_type=page' ); // 固定★
  //remove_menu_page( 'edit-comments.php' ); // コメント★
  // remove_menu_page( 'themes.php' ); // 外観★
  //remove_menu_page( 'plugins.php' ); // プラグイン
  //remove_menu_page( 'users.php' ); // ユーザー
  //remove_menu_page( 'tools.php' ); // ツール★
  //remove_menu_page( 'options-general.php' ); // 設定
  //プラグイン
  // remove_menu_page( 'media-library-folders' ); //Media Library
  // remove_menu_page( 'responsive-lightbox-settings' );   //ライトボックス
  // remove_menu_page( 'rl_gallery' );   //ライトボックス
  // remove_menu_page( 'aioseo' );   //SEO
// }
// add_action( 'admin_menu', 'remove_menus' );


//ブロックパターンの削除
add_action('admin_init', function () {
  $patterns = array(
    'text-two-columns',
    'two-buttons',
    'text-two-columns-with-images',
    'text-three-columns-buttons',
    'two-images', 
    'large-header',
    'large-header-button',
    'three-buttons',
    'heading-paragraph',
    'quote',
  );
  foreach ($patterns as $pattern) {
    unregister_block_pattern('core/' . $pattern);
  }
});

add_action( 'init', 'add_block_pattern' );
function add_block_pattern() {
  $gallery01 = ' 
  ';
  register_block_pattern(
    'ex-editor-plugin/pattern01',
    array(
      'title' => __( 'パターン01', 'ex-editor-plugin' ),
      'categories' => array( 'galleary' ),
      'content' => $gallery01,
    )
  );
}

add_action( 'init', 'add_block_pattern_category' );
function add_block_pattern_category() {
  register_block_pattern_category(
    'galleary',
    array( 'label' => __( 'ギャラリー', 'ex-editor-plugin' ) ),
  );
}