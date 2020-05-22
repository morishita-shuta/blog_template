<!DOCTYPE html>
<html lang="ja">
<head>
  <?php get_header(); ?>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/page-profile.css">
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
      <div class="main__body margin_0">
        <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>
        <div class="profile">
          <h2 class="profile__ttl font-size_48"><?php the_title(); ?></h2>
          <?php the_post_thumbnail('full'); ?>
          <?php the_content(); ?>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
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
