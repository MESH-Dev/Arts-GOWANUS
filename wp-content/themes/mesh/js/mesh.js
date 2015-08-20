jQuery(document).ready(function($){

  //Are we loaded?
  console.log('New theme loaded!  Lets do this!');

  //Let's do something awesome!

   //$('footer, main').wrap('<div class="stack" />');

   //Increment through each container and apply parrallax
		//Doing this applies parallax individually to each instance of the "container" class
		//Otherwise, parallax will be controlled by scrolling as one group.
		$('.panel').each(function(i){
			i = i++;
			$(this).parallax("50%", .08);
		});	  

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
			//$('.hide-for-desktop').remove();
		}

		else if ( width < 480 ){
			//$('.hide-for-mobile').remove();
		}

		$(window).scroll(function() {

			var eventTop = $('#events').offset().top;
			var windowTop = $(window).scrollTop();
			var homeHeight = $('#home').height();
			var halfHome = homeHeight/2;

			console.log("Event panel top position" + eventTop);
			console.log("Window top position" +windowTop);
			console.log("Home panel height" + homeHeight);

			if(windowTop < eventTop || windowTop == 0){
				//$('.home header.absolute-top').slideDown();
				//$('.home header.fixed-bottom').slideDown();
				$('.home header')
					.addClass('fixed-bottom')
					.removeClass('fixed-top');
				$('.main-navigation ul')
					.animate({marginLeft: 0},100);
				$('#home .user-gateway')
					.slideDown();
				$('.home header .logo')
					.addClass('hide');
				$('.home header .user-gateway')
					.addClass('hide');
			}
			if(windowTop >= eventTop){
				$('.home header')
					.removeClass('fixed-bottom')
					.addClass('fixed-top');
				$('.main-navigation ul')
					.animate({marginLeft: 260},100);
				$('#home .user-gateway')
					.slideUp();
				$('.home header .logo')
					.removeClass('hide');
				$('.home header .user-gateway')
					.removeClass('hide');
			}
		});

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

		//$('.logged-in #wpadminbar').hide();
});
