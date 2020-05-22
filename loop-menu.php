<section class="sp-menu">
  <h2 class="sp-menu__ttl font-size_48">Menu</h2>
  <nav class="sp-menu-nav">
    <?php
    $args = array(
      'menu' => 'menu',
      'container' => false,
    );
    wp_nav_menu($args);
    ?>
  </nav>
</section>

<div class="full-overlay"></div>
