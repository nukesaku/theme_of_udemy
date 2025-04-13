<?php
add_action('init', function () {
  add_theme_support('post-thumbnails');
  add_theme_support('title-tag'); // こちら動画の解説にないが、テーマのタイトルを自動で取得してくれる

  // メニューをサポート
  register_nav_menus([
    'global_nav' => 'グローバルナビゲーション',
  ]);
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

if (!function_exists('dd')) {
  function dd(...$vars) {
    foreach ($vars as $var) {
        ob_start();                  // 出力バッファリング開始
        var_dump($var);              // 画面に出さずメモリに出力
        $output = ob_get_clean();    // バッファから文字列として取得し、バッファ終了

        // htmlspecialcharsでHTML無害化し、preタグで整形して出力
        echo '<pre>' . htmlspecialchars($output, ENT_QUOTES, 'UTF-8') . '</pre>';
    }
    die; // Laravelと同様、即スクリプト停止
  }
}
