<?php
$args = array(
  //recommendタグがついている記事
  'tag' => 'recommend',
  //最新3件まで
  'posts_per_page' => 3,
);
$the_query = new WP_Query($args);
if($the_query->have_posts()):
while($the_query->have_posts()):
$the_query->the_post();
?>
<li class="rec-articles__item">
  <div class="rec-articles__item-inner">
    <a href="<?php the_permalink(); ?>">
      <h3 class="rec-articles__item-ttl"><?php the_title(); ?></h3>
      <?php
      if(has_post_thumbnail()):
      the_post_thumbnail('medium');
      else:
      ?>
      <img src="<?php echo get_template_directory_uri(); ?>/img/noimage.png" alt="">
      <?php endif; ?>
    </a>
  </div>
</li>
<?php
endwhile;
endif;
?>
