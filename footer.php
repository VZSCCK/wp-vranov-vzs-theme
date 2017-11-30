		  	</div>
			</main>
				<?php get_sidebar();?>
			</div>
		</div>
	</div>
	<!-- / PAGE -->

	<!-- FOOTER -->
	<footer role="contentinfo" class="footer">
		<div class="wrap">
			<div class="footer-left">
				<?php if(dynamic_sidebar('footer-1')) : else : endif; ?>
			</div>

			<span class="footer-right">Copyright &copy; <a href="https://www.vzs.cz" target="_blank">www.vzs.cz</a> <?php echo date('Y'); ?></span>
		</div>
	</footer>
	<!-- / FOOTER -->

	<script src="<?php echo BASE_URL; ?>/js/respond_menu.js"></script>

	<?php wp_footer(); ?>

	</body>
</html>