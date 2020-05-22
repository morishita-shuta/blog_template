<?php
$args = array(
  'pagename' => 'profile',
);
$the_query = new WP_Query($args);
if($the_query->have_posts()):
while($the_query->have_posts()): $the_query->the_post();
?>
<li class="sidebar__item">
  <h3 class="sidebar__item-ttl font-size_32"><?php the_title(); ?></h3>
  <div class="profile__body">
    <div class="profile__img-outer">
      <?php the_post_thumbnail('medium'); ?>
    </div>
    <?php the_excerpt(); ?>
  </div>
  <a href="<?php the_permalink(); ?>" class="btn btn--primary profile__btn font-size_32">More</a>
</li>
<?php
endwhile;
endif;
?>
