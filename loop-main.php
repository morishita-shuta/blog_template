<?php if(have_posts()): ?>
<ul class="new-articles__list">
  <?php while(have_posts()): the_post(); ?>
  <li class="new-articles__item">
    <h3 class="new-articles__item-category"><?php the_category(); ?></h3>
    <div class="new-articles__item-img">
      <a href="<?php the_permalink(); ?>">
        <?php
        if(has_post_thumbnail()):
        the_post_thumbnail('medium');
        else:
        ?>
        <img src="<?php echo get_template_directory_uri(); ?>/img/noimage.png" alt="" style="width:300px;">
        <?php endif; ?>
        <div class="new-articles__item-overlay"><span class="font-size_32">Read</span></div>
      </a>
    </div>
    <h3  class="new-articles__item-ttl font-size_24">
      <a href="<?php the_permalink(); ?>">
        <!-- タイトル20字以上で省略 -->
        <?php
        if(mb_strlen($post->post_title)>20) {
          $title= mb_substr($post->post_title,0,20) ;
            echo $title . '...';
          } else {
            echo $post->post_title;
          }
        ?>
      </a>
    </h3>
    <p class="new-articles__item-date"><?php the_time("Y/m/d") ?></p>
    <div class="new-articles__item-text">
      <a href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a>
    </div>
  </li>
<?php endwhile; ?>
</ul>
<?php
$args = array(
  'mid_size' => 2,
  'prev_text' => '←',
  'next_text' => '→',
);
the_posts_pagination($args);
?>
<?php endif; ?>
