jQuery(document).ready(function($) {

	// Fitvids
	//$('.widget .item.video,article.entry').fitVids();

	$(document).on('focusin', '.field, textarea', function() {
		if(this.title==this.value) {
			this.value = '';
		}
	}).on('focusout', '.field, textarea', function(){
		if(this.value=='') {
			this.value = this.title;
		}
	});
	
	/*if (parallax){
		$('#banner').each(function(){
	        var $bgobj = $(this); // assigning the object
	     
	        $(window).scroll(function() {
	            var yPos = -($(window).scrollTop() / 2.5) * -1;
	            yPos = yPos - 50;
	            var coords = 'center '+ yPos + 'px';
	            $bgobj.css({ backgroundPosition: coords });
	        }); 
	    });
    }
    
	/*$('.modal-popup').magnificPopup({
		type:'inline',
		midClick: true
	});*/
	
	/*$('.ask-question-button').click(function(){
		$('#ask-question-block').slideDown(200);
		$(this).hide();
		return false;
	});*/

	// Main Navigation Dropdowns
	if($('nav > ul > li > ul').length) {
        $('nav > ul > li > ul').each(function() {
            
            $(this).parent().addClass('has-dd');
            $(this).wrap('<div class="dd" />');
            
            if($(this).find('ul').length) {
                $(this).find('ul > li:first').addClass('first');
                $(this).find('ul > li:last').addClass('last');
            }
            $(this).show();
        });
    }
    
    if ($('.mobile-nav-toggle').length) {
		$('.mobile-nav-toggle').bind("click touch", function(){
			$(this).toggleClass('active');
			if($(this).hasClass('active')){ $(this).html('&times;'); } else { $(this).html('+'); }
			$('#mobile-nav > ul').slideToggle('fast');
		});
	}

	$('.dd').animate({opacity:0},0);

    $('nav > ul > li').on('mouseenter', function() {
    	if($(this).find('.dd').length) {
    		if($.browser.msie && $.browser.version < 9) {
                $(this).find('.dd').show().animate({opacity:1},0);
            } else {
                $(this).find('.dd').show().stop().animate({opacity:1},200,'easeOutQuad');
                $(this).find('.dd > ul').stop().animate({'padding-top':10},200,'easeOutQuad');
            }
    	}
    }).on('mouseleave', function() {
    	if($(this).find('.dd').length) {
    		if($.browser.msie && $.browser.version < 9) {
                $(this).find('.dd').animate({opacity:0},0,function(){
                	$(this).hide();
                });
            } else {
            	$(this).find('.dd > ul').stop().animate({'padding-top':5},200,'easeOutQuad');
                $(this).find('.dd').stop().animate({opacity:0},200,'easeInQuad',function(){
                	$(this).hide();
                });
            }
    	}
    });


	// Homepage Featured Projects
	/*
	if ($('#bb-bookblock').length){
	
		var sliderClicked = false;
	
		$('.col3 nav li:eq(0)').addClass('active');
	
		var bb = $('#bb-bookblock').bookblock({
			perspective	: 1500,
			speed		: 600,
			shadowSides : 0.5,
			interval	: slider_auto_cycle_speed,
			autoplay 	: slider_auto_cycle,
			shadowFlip  : 0.5,
			onEndFlip   : function(page,isLimit) {
			
				if (sliderClicked){
					sliderClicked = false;
				} else {
					var actualPage = page + 1;
					var bbnav = $('.bookblock-nav').find('nav a');
					var $dot = $('.bookblock-nav').find('nav a').eq(actualPage);
					bbnav.parent().removeClass( 'active' );
					$dot.parent().addClass( 'active' );
				}
				
			}
		});
		
		var bbnav = $('.bookblock-nav').find('nav a');
		bbnav.each( function( i ) {
									
			$( this ).bind("click touch", function(event){
				
				var $dot = $( this );
				if( !bb.isActive() ) {
					bbnav.parent().removeClass( 'active' );
					$dot.parent().addClass( 'active' );
					sliderClicked = true;
				}
				bb.jump( i + 1 );
				return false;
			
			} );
			
		} );

	}*/

	
	
	// Projects Lists
	
	if ($('#projects-masonry').length){
	
		$('#projects-masonry').masonry({
			itemSelector : '.project-block',
			isAnimated: true,
			columnWidth: 300,
			gutterWidth: 20
		});
	
	}
	
	// Profile Projects List
	
	if ($('.atcf-profile-campaigns').length){
	
		$('.atcf-profile-campaigns').masonry({
			itemSelector : '.atcf-profile-campaign-overview',
			isAnimated: true,
			columnWidth: 300,
			gutterWidth: 20
		});
	
	}
	function count(el, options){
		var options = options || {};

		var max_val = parseInt( el.attr('data-max-val') );
		var step = typeof(options['step']) != 'undefined' ? options['step'] : 1;
		var time = typeof(options['time']) != 'undefined' ? options['time'] : 10;
		var callback = typeof(options['callback']) != 'undefined' ? options['callback'] : function(){};
		var val = 0;
		var i = window.setInterval(function(){
			val+= step;
			if( val >= max_val ) {
				val = max_val;
				window.clearInterval(i);
			}
			callback( val );
			el.html( val );
		}, time);
	}

	var arrow = $('span.arrow');
	var arrow_start = -30;
	var arrow_end = -160;
	arrow.css('opacity', '0').css('bottom', arrow_start);

	$(window).load(function(){
	
		/*if (!no_count_animation){
			count($('.count-percent'), { time:20 });
			count($('.count-pledgers'));
			count($('.count-days'), { time: 50 });
		}*/

		window.setTimeout(function(){
			arrow.animate({
				'opacity': 1,
				'bottom': arrow_end - 10,
				'easing': 'easeOutExpo'
			}, 200, function(){
				arrow.animate({
					'opacity': 1,
					'bottom': arrow_end,
					'easing': 'easeInExpo'
				}, 100);
			})
		}, 800);


	});
	
	// Widget Functions
	
	if($('.recent').length) {
		$('.recent').each(function(){
			
			var show = parseInt($(this).attr('rel'));
		
			$(this).find('ul').carouFredSel({
				direction: 'up',
				width: "100%",
				height: 'variable',
				circular: false,
				infinite: false,
				items: {
					height: 'variable',
					visible: show
				},
				scroll: {
					items: 1,
					easing: 'easeInOutExpo'
				},
				auto: false,
				prev: $(this).parent().find('.prev'),
				next: $(this).parent().find('.next')
			});
		});
	}
	/*
	if($('.tweets-widget').length) {
		$('.tweets-widget').each(function(){
		
			var show = parseInt($(this).attr('rel'));
		
			var thisWidget = $(this);
			var twitterID = $(this).find('.tweets-container').attr('id');
			twitterUser = twitterID.split('-');
			twitterUser = twitterUser[0];
			var tweetCount = $(this).find('.tweets-container').html();

			$('.tweets-container').show();
			thisWidget.find('ul').carouFredSel({
				direction: 'up',
				width: "100%",
				height: 'variable',
				circular: false,
				infinite: false,
				items: {
					height: 'variable',
					visible: show
				},
				scroll: {
					items: 1,
					easing: 'easeInOutExpo'
				},
				auto: false,
				prev: $(this).parent().find('.prev'),
				next: $(this).parent().find('.next')
			});
			
		});
	}
	
	if($('.facebook-widget').length) {
		$('.facebook-widget').each(function(){
		
			var show = parseInt($(this).attr('rel'));
		
			$(this).find('ul').carouFredSel({
				direction: 'up',
				width: "100%",
				height: 'variable',
				circular: false,
				infinite: false,
				items: {
					height: 'variable',
					visible: show
				},
				scroll: {
					items: 1,
					easing: 'easeInOutExpo',
					onBefore	: function() {
						$(this).find('object').remove();
						$(this).find('.button-small').fadeIn('normal');
					}
				},
				auto: false,
				prev: $(this).parent().find('.prev'),
				next: $(this).parent().find('.next')
			});
			
		});
	}
	*/
});
