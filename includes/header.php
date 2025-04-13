<?php wp_body_open() ?>

<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
  <div class="container px-4 px-lg-5">
    <a class="navbar-brand" href="<?= home_url() ?>">Start Bootstrap</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      Menu
      <i class="fas fa-bars"></i>
    </button>
    <?php
      // メニューIDを取得
      $menu_name = 'global_nav';
      $locations = get_nav_menu_locations();
      $menu = wp_get_nav_menu_object($locations[$menu_name]);

      // メニュー取得。メニューIDを元に。
      $menu_items = wp_get_nav_menu_items($menu->term_id);
    ?>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ms-auto py-4 py-lg-0">
        <?php foreach ($menu_items as $item): ?>
          <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="<?= $item->url; ?>"><?= $item->title; ?></a></li>
        <?php endforeach; ?>
    </div>
  </div>
</nav>
