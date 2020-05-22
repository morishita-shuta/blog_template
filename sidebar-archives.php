<li class="sidebar__item archive">
  <h3 class="sidebar__item-ttl font-size_32">Archive</h3>
  <ul class="archive__list">
  <?php
  $args = array(
    'type' => 'monthly',
    'show_post_count' => 'true',
  );
  wp_get_archives($args);
  ?>
  </ul>
</li>
