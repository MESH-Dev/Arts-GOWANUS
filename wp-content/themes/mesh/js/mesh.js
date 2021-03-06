jQuery(document).ready(function($){

	//Are we loaded?
	console.log('New theme loaded!  Lets do this!');

	//Let's do something awesome!


   		//Increment through each container and apply parrallax
		//Doing this applies parallax individually to each instance of the "container" class
		//Otherwise, parallax will be controlled by scrolling as one group.
		

		$('.event_link h2 a').hover(function(){
			$('.event_link_icon img.top').hide();
		},
		function(){
			$('.event_link_icon img.top').show();
		})

		$('#twitter').hover(function(){
			$(this).find('img.top').hide();
		},
		function(){
			$(this).find('img.top').show();
		}
		);

		var grid = $('.grid')

		grid.imagesLoaded( function(){ grid.masonry({
		  itemSelector: '.content-block',
			});
		});

		var width = $( window ).width();

		if ( width > 481) {

			//Increment through each container and apply parrallax
			//Doing this applies parallax individually to each instance of the "container" class
			//Otherwise, parallax will be controlled by scrolling as one group.
			$('.panel').each(function(i){
			i = i++;
			$(this).parallax("50%", .08);
			});	 

			//Add parallax functionality to banner images
			$('.banner').parallax("50%", .08);
		}

		else if ( width < 480 ){
			//$('.hide-for-mobile').remove();
		}

	
		//Add add 16px margin to the top of the user gateway
		$(window).bind('scroll', function() {
		   var navHeight = $( window ).height() - 70;
				 if ($(window).scrollTop() > navHeight) {
					 $('.home nav').addClass('fixed-top');
					 //$('.home .logo').css({top:'0'});
					 $('.home .user-gateway').css({top:'0', marginTop: '0px'});

					 //$('.home nav ul').css({marginLeft: 260});
				 }
				 else {
					 $('.home nav').removeClass('fixed-top');
					 //$('.home .logo').css({top:'16px'});
					 $('.home .user-gateway').css({top:'16px', marginTop: '0px'});
					 //$('.home nav ul').css({marginLeft: 0});
				 }
			});
		//============================================

		//Twitter button interactivity
		$('#twitter').click(function(e){
			e.preventDefault();
			$(this)
				.addClass('bounceOutRight animated')
				.removeClass('bounceInRight');
			$('.tw-feed-block')
				.animate({opacity:1}, 700);
		});

		$('.tw-close').click(function(e){
			$('.tw-feed-block')
				.animate({opacity:0}, 700);
			$('#twitter')
				.removeClass('bounceOutRight')
				.addClass('bounceInRight');
		});
		//============================================

		//Instagram feed
		var feed = new Instafeed({
		limit: 3,	
	    clientId: '1f5241191694419fa1db55f743157f54',
	    //415040633.1f52411.cbd8754eeb1b4112ab857cad4b9bc4b5
	    get: 'user',
	    userId: 415040633,
	    accessToken: '415040633.1f52411.cbd8754eeb1b4112ab857cad4b9bc4b5',
	    resolution: 'standard_resolution',
	    after: function(){
	    	$('#instafeed a').wrap('<div class="four columns" />')
	    }
		    });
		feed.run();
		//============================================

		//That mobile nav that we all love so much :)
		$('.responsive-menu-button').sidr({
		      name: 'sidr-main',
		      source: '.global-nav',
		      renaming: false
			});

		$('.sidr-close').click(
	 	function(){
	 		$.sidr('close', 'sidr-main');
	 		console.log("Sidr should be closed");
	 	});
		//============================================


		//Scroll down on arrow click
		$('a[href*=#]:not([href=#])').click(function() {
			if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	  			var target = $(this.hash);
	  			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	  		if (target.length) {
	    		$('html,body').animate({
	      			scrollTop: target.offset().top
	    		}, 500);
	    return false;
	  		}
		}
	  	});
	//============================================
		
});
