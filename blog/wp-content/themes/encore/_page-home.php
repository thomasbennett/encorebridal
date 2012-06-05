<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>
<!-- JAVASCRIPT -->
<script type="text/javascript" charset="utf-8">
	var nextItem;
	var myTimer;
	$(document).ready(function() {
		set_first_slide();
		start_timer();
		
		// NEXT ITEM IN THE ROTATOR
		nextItem = function() {								
			// FIND THE SELECTED FEATURE
			var curFeature = $('#slider').find('.cur_slider');
			var nextFeature = curFeature.next();
			var curButton = $('#slider_navigation').find('.selected');

			// IF THERE IS NO NEXT, GO BACK TO THE FIRST SLIDE
			if (nextFeature.attr('id') == 'slider_navigation') {
				handle_old_features(curFeature, curButton);			// DESELECT THE CURRENT STUFF
				set_first_slide();
			} else {
				var nextButton = curButton.parent().next();			// FIND THE NEXT BUTTON
				handle_old_features(curFeature, curButton);			// DESELECT THE CURRENT STUFF
				pick_me(nextFeature, nextButton);					// SET THE NEW STUFF
			}
		}
		
		// DESELECT ALL THE OLD STUFF
		function handle_old_features(cur, button) {
			cur.removeClass('cur_slider').fadeOut().hide();
			button.removeClass('selected');
		}
		
		// PICK A SLIDE
		function pick_me(cur, button) {
			var curImage = cur.attr('rel');
			cur.addClass('cur_slider');
			$('#slider').css('background', "url('" + curImage + "') center center no-repeat");
			button.find('img').addClass('selected');
			cur.fadeIn();
		}
		
		// INITIALIZE ROTATOR
		function set_first_slide() {
			pick_me($('.slider_content:first'), $("#slider_navigation a:first"));
		}
		
		// CLICK ON A BUTTON
		$('#slider_navigation > a').click(function(e) {
			e.preventDefault();
			
			// GET THE BUTTON I CLICKED ON
			var myButton = $(this);
			
			// FIND THE CORRESPONDING FEATURE
			var buttonID = myButton.find('img').attr('id').split("_");
			var myFeature = $('#slider_' + buttonID[1]);
			
			// HANDLE OLD ITEMS
			handle_old_features($('#slider').find('.cur_slider'), $('#slider_navigation').find('.selected'));
			
			pick_me(myFeature, myButton);
			
			// RESET THE TIMER
			clearInterval(myTimer);
			start_timer();
		});
		
		// START THE TIMER
		function start_timer() {
			myTimer = setInterval ( "nextItem()", 7500 );
		}
		
		
		// THUMBNAIL ROLLOVER
		$('.one_thumbnail_link').find('a').hover(function() {
			$(this).parent().animate({paddingBottom: '20'}, 200);
		}, function() {
			$(this).parent().animate({paddingBottom: '10'}, 200);
		});
	});
</script>
<?php include (TEMPLATEPATH . '/inc/page-top.php' ); ?>

<!-- SLIDER -->
		<div id="slider">
			<div class="slider_content hide" rel="<?php bloginfo('template_url') ?>/images/feature.jpg" id="slider_1">
				&nbsp;
			</div>
			<div class="slider_content hide" rel="<?php bloginfo('template_url'); ?>/images/feature.jpg" id="slider_2">
				&nbsp;
			</div>
			<div id="slider_navigation">
				<a href="#"><img src="<?php bloginfo('template_url'); ?>/images/spacer.gif" class="slider_item" id="button_1" /></a>
				<a href="#"><img src="<?php bloginfo('template_url'); ?>/images/spacer.gif" class="slider_item" id="button_2" /></a>
			</div>
		</div>
	
		<hr />

<!-- BOXES -->
		<div class="span-12">
			<!-- ABOUT ENCORE -->
			<div id="about_encore">
				<h2 class="paint">learn more</h2>
				<a href="#" class="more">ABOUT US</a>
				<script src="http://videoplayer.turnhere.com/player.js?width=452&height=237&embedCode=x0OWFjMjrVzMTO-u4jGQLK07hAOHqEvm&autoplay=0"></script>
						<noscript>
						<p style="margin-top: 0; margin-bottom: 0;">
						  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
										id="ooyalaPlayer_72c6_gjet6vjx" width="452" height="237"
										codebase="http://fpdownload.macromedia.com/get/flashplayer/current/swflash.cab">
						    <param name="movie" value="http://videoplayer.turnhere.com/player.swf?embedCode=x0OWFjMjrVzMTO-u4jGQLK07hAOHqEvm=2" />
						    <param name="bgcolor" value="#000000" />
						    <param name="allowScriptAccess" value="always" />
						    <param name="allowFullScreen" value="true" />
						    <param name="flashvars" value="embedType=noscriptObjectTag&embedCode=x0OWFjMjrVzMTO-u4jGQLK07hAOHqEvm&autoplay=0" />
						    <embed
								src="http://videoplayer.turnhere.com/player.swf/player.swf?embedCode=x0OWFjMjrVzMTO-u4jGQLK07hAOHqEvm&version=2"
								bgcolor="#000000" width="452" height="237"
								name="ooyalaPlayer_72c6_gjet6vjx" align="middle" play="true"
								loop="false" allowscriptaccess="always" allowfullscreen="true"
								type="application/x-shockwave-flash"
								flashvars="&embedCode=x0OWFjMjrVzMTO-u4jGQLK07hAOHqEvm&autoplay=0"
								pluginspage="http://www.adobe.com/go/getflashplayer"></embed>
						    </object>
						  </p>
						</noscript>
			</div>
		</div>

		<div class="span-12 last">
			<!-- CONSIGNOR BOX -->
			<div id="consignor">
				<h2>Consignors</h2>
				<h3>HUNDREDS HAVE SOLD THEIR<br />DRESSES FAST AND EASILY <br />AT ENCORE BRIDAL.</h3>
				<a href="#" class="more">FIND OUT HOW YOU CAN BE OUR NEXT CONSIGNOR</a>
			</div>

			<div class="span-6">
				<!-- RECENT BLOG POST -->
				<div class="small_box_2">
					<h5>Most Recent Blog Post</h5>
					<h3><a href="<?php bloginfo('url'); ?>?page_id=8" class="arrow">Blog Post</a></h3>
				</div>
			</div>

			<div class="span-6 last">
				<!-- STYLIST -->
				<div class="small_box">
					<h5>EVERY SUNDAY 11AM - 4PM</h5>
					<h3><a href="#" class="arrow">STYLE SALON</a></h3>
				</div>
			</div>
		</div>
		<br clear="both" />

		<hr />
	

<!-- NEW PRODUCTS -->
		<h2 class="paint" id="heading_new_products">new products</h2>
		<div class="span-8">
			<div class="product_box">
				<a href="#"><img src="<?php bloginfo('template_url'); ?>/images/product_necklace.jpg" /></a>
				<div class="product_details">
					<a href="#" class="more">More Information</a>
					<h3><a href="#">BLUE BRIDESMAIDS SHOES</a></h3>
				</div>
			</div>
		</div>

		<div class="span-8">
			<div class="product_box">
				<a href="#"><img src="<?php bloginfo('template_url'); ?>/images/product_shoes.jpg" /></a>
				<div class="product_details">
					<a href="#" class="more">More Information</a>
					<h3><a href="#">SPARKLING HAIR PIN</a></h3>
				</div>
			</div>
		</div>

		<div class="span-8 last">
			<div id="testimonial_box">
				<h5>TESTIMONIAL</h5>
				"I purchased the Jenny Lee dress. I expressed how much I adore the dress, but I wanted to emphasize again how incredibly grateful I am to have found your e-boutique! I love the dress; it is so me!! Thank you for making my designer dress dreams come true in a way that is truly better than I ever could have imagined"
 				<div class="right">– Leah, Texas</div>
			</div>
		</div>

		<hr class="space" />

<?php include (TEMPLATEPATH . '/inc/featured-on.php' ); ?>

<?php get_footer(); ?>
