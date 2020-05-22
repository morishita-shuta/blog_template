<?php
function init_func() {
  // アイキャッチ画像を使用可能にする。
  add_theme_support('post-thumbnails');
  set_post_thumbnail_size( 640, 420, true );
  //カスタムメニュー機能
  add_theme_support('menus');
  add_image_size('post_thumb', 240, 160, true );
  add_image_size('related_thumb', 150, 100, true );
  // カスタムヘッダー
  add_theme_support( 'custom-header' );
}
add_action('init', 'init_func');

?>
