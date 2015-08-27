jQuery(document).ready(function($){

  //Are we loaded?
  console.log('New theme loaded!  Lets do this!');

  //Let's do something awesome!

   //$('footer, main').wrap('<div class="stack" />');

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

			$('.panel').each(function(i){
			i = i++;
			$(this).parallax("50%", .08);
			});	 

			$('.banner').parallax("50%", .08);
		}

		else if ( width < 480 ){
			//$('.hide-for-mobile').remove();
		}

		// $(window).scroll(function() {

		// 	var eventTop = $('#events').offset().top;
		// 	var windowTop = $(window).scrollTop();
		// 	var homeHeight = $('#home').height();
		// 	var halfHome = homeHeight/2;

		// 	console.log("Event panel top position" + eventTop);
		// 	console.log("Window top position" +windowTop);
		// 	console.log("Home panel height" + homeHeight);

		// 	if(windowTop < eventTop || windowTop == 0){
		// 		//$('.home header.absolute-top').slideDown();
		// 		//$('.home header.fixed-bottom').slideDown();
		// 		$('.home header')
		// 			.addClass('fixed-bottom')
		// 			.removeClass('fixed-top');
		// 		//$('.main-navigation ul')
		// 			//.animate({marginLeft: 0},100);
		// 		$('#home .user-gateway')
		// 			.slideDown();
		// 		$('.home header .logo')
		// 			.addClass('hide');
		// 		$('.home header .user-gateway')
		// 			.addClass('hide');
		// 	}
		// 	if(windowTop >= eventTop){
		// 		$('.home header')
		// 			.removeClass('fixed-bottom')
		// 			.addClass('fixed-top');
		// 		//$('.main-navigation ul')
		// 			//.animate({marginLeft: 260},100);
		// 		$('#home .user-gateway')
		// 			.slideUp();
		// 		$('.home header .logo')
		// 			.removeClass('hide');
		// 		$('.home header .user-gateway')
		// 			.removeClass('hide');
		// 	}
		// });

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

		// var userFeed = new Instafeed({
		// limit: 3,
		// get: 'mesh_design',	
  //       clientId: '	d346c1de6d274f4994f9345b72b3a633',
  //       after: function(){
  //       	$('#instafeed a').wrap('<div class="four columns" />')
  //       }
		//     });
		// userFeed.run();

		// var feed = new Instafeed({
		// limit: 3,	
  //       clientId: '	d346c1de6d274f4994f9345b72b3a633',
  //       after: function(){
  //       	$('#instafeed a').wrap('<div class="four columns" />')
  //       }
		//     });
		// feed.run();

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
