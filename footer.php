</div>

        </div>

        <?php get_sidebar();?>

      </div>

    </div>
  </div>
  <!-- / PAGE -->
  
  <!-- FOOTER -->
  <div class="footer">
    <div class="wrap">
      
      <div class="footer-left"><?php if(dynamic_sidebar('footer-1')) : else : endif; ?></div><span class="footer-right">Copyright &copy; <a href="/">www.vzs.cz</a> <?php echo date('Y'); ?></span>
      
    </div>
  </div>
  <!-- / FOOTER -->

  <script src="<?php echo BASE_URL; ?>/js/respond_menu.js"></script>
 
  <?php wp_footer(); ?>
  
  </body>
</html>