<body <?php body_class(); ?>>

<div id="wrapper">
<div id="son_of_wrapper">

	<div class="container">
	<div class="span-24 last">
<!-- HEADER -->
		<div id="header">
			<!-- TOP NAVIGATION -->
			<div class="right" id="top_nav">
				<!--<div id="search">
					<input type="text" class="text" value="" name="search" /><input type="submit" class="submit" value="SEARCH" name="submit" />
				</div>-->
				<a href="#" class="login">LOGIN</a> | 
				<a href="#">CART</a> |
				<a href="<?php bloginfo('url'); ?>/?page_id=66">CONTACT</a> | 
				<a href="#">310.545.1409</a>
			</div>

			<!-- LOGO -->
			<div id="logo"><a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="Encore Bridal" /></a></div>

			<!-- NAVIGATION -->
			<div id="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'primary-menu' ) ); ?>
			</div>
		</div><br clear="both" />