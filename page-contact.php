<!DOCTYPE html>
<html lang="ja">
<head>
  <?php get_header(); ?>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/page-contact.css">
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
        <form class="contact__form" action="index.html" method="post">
          <h2 class="contact__ttl font-size_48">お問い合わせ</h2>
          <!-- <table class="contact__table">
            <tr>
              <td>お名前</td>
              <td>
                <?php echo [text* your-name] ?>
              </td>
            </tr>
            <tr>
              <td>メールアドレス</td>
              <td>
                <input type="text" name="" value="">
              </td>
            </tr>
            <tr>
              <td>お問い合わせ内容</td>
              <td>
                <input type="textarea" name="" value="" class="contact__textarea">
              </td>
            </tr>
          </table> -->
          <!-- <input type="submit" name="" value="送信" class="btn btn--primary submit-btn font-size_24"> -->
          <?php echo apply_filters('the_content', '[contact-form-7 id="2211" title="form"]'); ?>
        </form>
      </div>
    </section>

    <section class="sidebar">
      <?php get_sidebar('archives'); ?>
      <?php get_sidebar('categories'); ?>
    </section>

  </div>

  <?php get_template_part('loop', 'menu'); ?>
  <?php get_footer(); ?>

</body>
</html>
