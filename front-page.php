<!DOCTYPE html>
<html lang="ja">
<head>
  <?php get_header(); ?>
</head>
<body ontouchstart="">
  <header>
    <div class="hamburger">
      <span class="line line--top"></span>
      <span class="line line--center"></span>
      <span class="line line--bottom"></span>
    </div>
    <h1 class="header__ttl font-size_64"><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
    <p class="header__sub-ttl font-size_16"><?php echo bloginfo('description'); ?></p>
    <nav class="grv-nav margin_S">
    <?php
    $args = array(
      'menu' => 'global-navigation',
      'container' => false,
    );
    wp_nav_menu($args);
    ?>
    </nav>
    <!-- custom header -->
    <?php
    $header_image = get_header_image();
    if ( ! empty( $header_image ) ) :
    ?>
    <img src="<?php header_image(); ?>" alt="<?php bloginfo('name'); ?>" class="header__img">
    <?php endif;?>
    <div class="rec-articles">
      <h2 class="rec-articles__ttl font-size_32">オススメ記事</h2>
      <div class="rec-articles__list-outer">
        <ul class="rec-articles__list">
          <?php get_template_part('loop', 'recommend'); ?>
        </ul>
      </div>
    </div>
  </header>

  <div class="wrapper">
    <section class="main">
      <h2 class="main__ttl font-size_48">NEW POST</h2>
      <div class="main__body">
        <?php get_template_part('loop', 'main'); ?>
        <?php
        // wp_pagenavi関数が定義されているかを調べる
        if(function_exists('wp_pagenavi')){
          wp_pagenavi();
        }
        ?>
      </div>
    </section>
    <section class="sidebar">
      <ul class="sidebar__list">
        <?php get_sidebar('profile'); ?>
        <?php get_sidebar('archives'); ?>
        <?php get_sidebar('categories'); ?>
      </ul>
    </section>
  </div>

  <?php get_template_part('loop', 'menu'); ?>

  <?php get_footer(); ?>

</body>
</html>
