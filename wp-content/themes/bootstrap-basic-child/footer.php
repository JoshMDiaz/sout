<?php
/**
 * The theme footer
 *
 * @package bootstrap-basic
 */
?>

			</div><!--.site-content-->

			<!-- Custom Footer Widget -->
			<?php
			if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Custom Footer Widget Area') ) : ?>
		<?php endif; ?>

			<footer id="site-footer" role="contentinfo">
				<div id="footer-row" class="row site-footer">
					<div class="col-md-6 footer-left">
						<p>
							Special Olympics Utah | Created By: Utah Valley University | <a href="http://sout.caitlinherzog.com/wp-admin" target="_blank">Login</a>
						</p>
					</div>
					<div class="col-md-6 footer-right text-right">
						<?php dynamic_sidebar('footer-right'); ?>
					</div>
				</div>
			</footer>
		</div><!--.container page-container-->

		<script type="text/javascript" src="js/toucheffects.js"></script>
		<script type="text/javascript" src="js/modernizr.custom.js"></script>
		<!--wordpress footer-->
		<?php wp_footer(); ?>
	</body>
</html>
