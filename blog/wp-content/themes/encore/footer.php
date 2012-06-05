<br clear="both" />
<!-- BIG FOOTER -->
		<div id="big_footer">
			<div class="column">
				<h5><a href="<?php bloginfo('url'); ?>/?page_id=14">For Brides</a></h5>

				<?php 
					wp_nav_menu( array( 'theme_location' => 'footer-for-brides' ) ); ?>
			</div>

			<div class="column">
				<h5><a href="<?php bloginfo('url'); ?>/?page_id=12">Consignors</a></h5>
				<?php 
					wp_nav_menu( array( 'theme_location' => 'footer-consignors' ) ); ?>
			</div>

			<div class="column">
				<h5><a href="<?php bloginfo('url'); ?>/?page_id=10">ABOUT</a></h5>
				<?php 
					wp_nav_menu( array( 'theme_location' => 'footer-about' ) ); ?>
			</div>

			<div class="column last">
				<h5><a href="<?php bloginfo('url'); ?>/?page_id=43">Customer Service</a></h5>
				<?php 
					wp_nav_menu( array( 'theme_location' => 'footer-customer-service' ) ); ?>
			</div><br clear="both" />
		</div>

		<hr />

<!-- FOOTER -->
		<div id="footer">
			<div class="left">
				Copyright &copy; <?php echo date("Y"); ?>. Encore Bridal. All Rights Reserved.<br />
				Finely Crafted by <a href="http://www.proofbranding.com" title="Proof Branding">Proof Branding.</a>
			</div>

			<div class="right">
				<a href="http://www.pinterest.com"><img src="<?php bloginfo('template_url'); ?>/images/spacer.gif" class="social_networking_icons pinterest right" /></a>
				<a href="<?php bloginfo('rss2_url'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/spacer.gif" class="social_networking_icons rss right" /></a>
				<a href="http://www.facebook.com"><img src="<?php bloginfo('template_url'); ?>/images/spacer.gif" class="social_networking_icons facebook right" /></a>
				<a href="http://www.twitter.com"><img src="<?php bloginfo('template_url'); ?>/images/spacer.gif" class="social_networking_icons twitter right" /></a>
			</div><br clear="both" />
		</div>

	</div>
	</div>

</div>
</div>

<?php wp_footer(); ?>

</body>
</html>