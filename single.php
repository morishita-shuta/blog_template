<!DOCTYPE html>
<html lang="ja">
<head>
  <?php get_header(); ?>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/single.css">
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
      <div class="main__body single-main__body">
        <?php
        if(have_posts()):
          while(have_posts()): the_post();
        ?>
        <article>
          <div class="article__inner">
            <div href="" class="article__category"><?php the_category(); ?></div>
            <h2 class="article__ttl font-size_48"><?php the_title(); ?></h2>
            <p class="article__date"><?php the_time("Y/m/d") ?></p>
            <div class="article__thumb">
              <?php if(has_post_thumbnail()): ?>
                <?php the_post_thumbnail('full'); ?>
              <?php else: ?>
                <img src="<?php echo get_template_directory_uri(); ?>/img/noimage.png" alt="" style="width:100%;">
              <?php endif; ?>
            </div>
            <div class="article__content">
                <?php the_content(); ?>
            </div>
            <div class="related-articles">
              <h3 class="related-articles__ttl font-size_32">関連記事</h3>
              <?php
              $cats = get_the_category();
              $catkwds = array();
              foreach($cats as $cat){
                   $catkwds[] = $cat->term_id;
              }
              ?>
              <?php
              $args = array(
              'post_type' => 'post',
              'posts_per_page' => '4',
              'post__not_in' =>array( $post->ID ),
              'category__in' => $catkwds,
              'orderby' => 'rand'
              );
              $my_query = new WP_Query( $args );
              ?>
              <ul class="related-articles__list">
                <?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
                  <li class="related-articles__item">
                    <a href="<?php the_permalink(); ?>">
                      <?php if(has_post_thumbnail()): ?>
                        <?php the_post_thumbnail(); ?>
                      <?php else: ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/noimage.png" alt="" style="width:100%;">
                      <?php endif; ?>
                      <div class="related-articles__item-ttl">
                        <?php the_title(); ?>
                      </div>
                    </a>
                  </li>
                <?php endwhile; ?>
              </ul>
            </div>
          </div>
        </article>
        <?php
        endwhile;
          endif;
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
