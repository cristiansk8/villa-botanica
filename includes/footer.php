<footer class="site-footer">
  <div class="site-sub-footer__wrapper container">
    <hr/>
    <div class="row">
      <?php dynamic_sidebar('footer-widget-area'); ?>
    </div>
    <hr/>
    <div class="row">
      <div class="col-lg-12 site-sub-footer">
        <p>&copy; <?php echo date('Y'); ?> <a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a></p>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
