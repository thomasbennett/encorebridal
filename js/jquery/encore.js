var $j = jQuery.noConflict();

var nextItem;
var myTimer;
$j(document).ready(function() {
        set_first_slide();
        start_timer();

        // NEXT ITEM IN THE ROTATOR
        nextItem = function() {
                // FIND THE SELECTED FEATURE
                var curFeature = $j('#slider').find('.cur_slider');
                var nextFeature = curFeature.next();
                var curButton = $j('#slider_navigation').find('.selected');

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
                var new_value = "url('" + curImage + "') center center no-repeat";
                
                $j('#slider').css('background', function(index, value){
                    $j('#slider').fadeOut(500, function(){
                        $j('#slider').css('background', new_value);
                    });
                    $j('#slider').fadeIn(700);
                });
                button.find('img').addClass('selected');
                cur.fadeIn();
        }

        // INITIALIZE ROTATOR
        function set_first_slide() {
                pick_me($j('.slider_content:first'), $j("#slider_navigation a:first"));
        }

        // CLICK ON A BUTTON
        $j('#slider_navigation > a').click(function(e) {
                e.preventDefault();

                // GET THE BUTTON I CLICKED ON
                var myButton = $j(this);

                // FIND THE CORRESPONDING FEATURE
                var buttonID = myButton.find('img').attr('id').split("_");
                var myFeature = $j('#slider_' + buttonID[1]);

                // HANDLE OLD ITEMS
                handle_old_features($j('#slider').find('.cur_slider'), $j('#slider_navigation').find('.selected'));

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
        $j('.one_thumbnail_link').find('a').hover(function() {
                $j(this).parent().animate({paddingBottom: '20'}, 200);
        }, function() {
                $j(this).parent().animate({paddingBottom: '10'}, 200);
        });

        //$j('#image').addimagezoom();

        $j('#product_images .more-views').children('a').each(function(){
            $j(this).click(function(){
                var src = $j(this).children('img').attr('src');
                src = src.replace(/cache\/\w+\/thumbnail\/\w+\/\w+/, '');
                $j('#image').attr('src', src);
                $j('#image').addimagezoom();
            })
        })

        $j('.zoomtracker').live('click', function(){
            window.open($j('#image').attr('src'),'_newtab');
        })
});

jQuery(function($){
  $('#price-track').parent().after('<a href="#" class="more" id="refine_search">Refine Search</a><hr />');
  $('#refine_search').nextAll().wrapAll('<div class="hide" id="refine_items"></div>');

  $('#refine_search').click(function(){
    $(this).next().slideDown(200);
    return false;
  });

  $('span.m-selected-filter-item').live('click', function(){
    var currentlyPos = $('.currently').offset().top;
    $('body,html').animate({'scrollTop':currentlyPos+'px'}, 600);
    $('#explain').show().html('Remove items from your search or clear all here.');
   // $('#explain').delay(1200).remove();
  });

  $('.m-show-more-action').click(function(){
    $('.m-filter-item-list').css({'height':'0'}).find('li').hide();
    $('.m-show-less-action').hide();
    $('.m-show-more-action').show();
  });

  // Style Consult Form
    // NEXT --->
  var fieldset = $('#webform_4_form').find('.fieldset');
  fieldset.first().addClass('active');
  $('#consult-next').click(function(e){
    e.preventDefault();
    if(fieldset.hasClass('active')){
      t = $('.active');
      t.hide().removeClass('active');
      next = t.next('.fieldset');
      next.show().addClass('active');
      if(next.length == 0){
        $(this).hide();
      }
    }
  });

      // <--- PREV
  $('#consult-prev').click(function(e){
    e.preventDefault();
    if(fieldset.hasClass('active')){
      t = $('.active');
      t.hide().removeClass('active');
      prev = t.prev('.fieldset');
      prev.show().addClass('active');
      if(next.length == 0){
        $(this).hide();
      }
    }
  });
});
