<footer class="margin-top_M">
  <div class="footer-category">
    <h2 class="footer-category__ttl font-size_48">Category</h2>
    <ul class="footer-category__list">
      <?php
      $args = array(
        'title_li' => '',
        'show_count' => '',
      );
      wp_list_categories($args);
      ?>
    </ul>
  </div>
  <div class="footer__line"></div>
  <p class="copyright">@ Copyright Shuta Morishita</p>
</footer>

<?php wp_footer(); ?>
