<li class="sidebar__item archive">
  <h3 class="sidebar__item-ttl font-size_32">Category</h3>
  <ul class="archive__list">
  <?php
  $args = array(
    'title_li' => '',
    'show_count' => 'true',
  );
  wp_list_categories($args);
  ?>
  </ul>
</li>
