<!DOCTYPE html>
<html lang="ja">
<head>
  <?php get_header(); ?>
</head>
<body>
  <header>
    <div class="container">
      <div class="hamburger">
        <span class="line line--top"></span>
        <span class="line line--center"></span>
        <span class="line line--bottom"></span>
      </div>
      <h2 class="header__ttl font-size_64"><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h2>
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
    </div>
  </header>

  <div class="wrapper">
    <section class="main">
      <h2 class="main__ttl arc-main__ttl font-size_48">
        <?php
        if(is_month()){
          the_time('Y年m月');
        }else{
           wp_title('');
        }
        ?>
      </h2>
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
        <?php get_sidebar('archives'); ?>
        <?php get_sidebar('categories'); ?>
      </ul>
    </section>
  </div>

  <?php get_template_part('loop', 'menu'); ?>

  <?php get_footer(); ?>
</body>
</html>
