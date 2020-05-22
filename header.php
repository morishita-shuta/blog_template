<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet"  href="<?php  echo get_template_directory_uri(); ?>/css/reset.css" type="text/css" >
<link rel="stylesheet"  href="<?php  echo get_template_directory_uri(); ?>/css/cosmetic.css" type="text/css" >
<link rel="stylesheet"  href="<?php  echo get_template_directory_uri(); ?>/css/btn.css" type="text/css" >
<link rel="stylesheet"  href="<?php  echo get_template_directory_uri(); ?>/css/plugin.css" type="text/css" >
<link rel="stylesheet"  href="<?php  echo get_template_directory_uri(); ?>/css/header.css" type="text/css" >
<link rel="stylesheet"  href="<?php  echo get_template_directory_uri(); ?>/css/footer.css" type="text/css" >
<link rel="stylesheet"  href="<?php  echo get_template_directory_uri(); ?>/css/menu.css" type="text/css" >
<link rel="stylesheet"  href="<?php  echo get_template_directory_uri(); ?>/css/grv-nav.css" type="text/css" >
<link rel="stylesheet"  href="<?php  echo get_template_directory_uri(); ?>/css/rec-articles.css" type="text/css" >
<link rel="stylesheet"  href="<?php  echo get_template_directory_uri(); ?>/css/main.css" type="text/css" >
<link rel="stylesheet"  href="<?php  echo get_template_directory_uri(); ?>/css/sidebar.css" type="text/css" >
<link rel="stylesheet"  href="<?php  echo get_template_directory_uri(); ?>/css/new-articles.css" type="text/css" >
<link rel="stylesheet"  href="<?php  echo get_template_directory_uri(); ?>/css/profile.css" type="text/css" >
<link rel="stylesheet"  href="<?php  echo get_template_directory_uri(); ?>/css/archive.css" type="text/css" >
<title><?php echo bloginfo('name'); ?></title>
<?php wp_head(); ?>
<script type="text/javascript">
jQuery(function($){
  $('.hamburger').on('click', function() {
    $('.sp-menu').toggleClass("sp-menu--open");
    $('.hamburger').toggleClass("hamburger--open")
    $('.full-overlay').toggleClass("full-overlay--open")
  });
});
</script>
