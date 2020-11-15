<div class="footer">
  <div class="container">
  <div class="row">
    <?php if (is_active_sidebar('footer1')) : ?>
				
		<div class="footer-widget-area">
			<?php dynamic_sidebar('footer1'); ?>
		</div>

	<?php endif; ?>
	
	<?php if (is_active_sidebar('footer2')) : ?>
		
		<div class="footer-widget-area">
			<?php dynamic_sidebar('footer2'); ?>
		</div>

	<?php endif; ?>
	
	<?php if (is_active_sidebar('footer3')) : ?>
		
		<div class="footer-widget-area">
			<?php dynamic_sidebar('footer3'); ?>
		</div>

	<?php endif; ?>
  </div>
</div>
</div>

<?php wp_footer(); ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php bloginfo('template_directory'); ?>/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
    <script>
    	$('.navbar .menu ul').addClass('nav navbar-nav nav-menu navbar-right menu-top cl-effect-3');
    	$('.footer-widget-area').addClass('col-md-4');
    </script    
  </body>
</html>