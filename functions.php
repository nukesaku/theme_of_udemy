<?php
add_action('init', function () {
  add_theme_support('post-thumbnails');
});
function get_eyecatch_with_default() {
  if (has_post_thumbnail()) {
    // アイキャッチ画像が設定されている場合
    $id = get_post_thumbnail_id();
    $img = wp_get_attachment_image_src($id, 'large');
  } else {
    // アイキャッチ画像が設定されていない場合
    $img = array(get_template_directory_uri() . '/assets/img/about-bg.jpg');
  }

  return $img;
}
