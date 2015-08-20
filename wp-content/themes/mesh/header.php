<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<?php

	if( is_page_template('templates/homepage-fullscreen.php') ) {
		$imageArray = get_field('background_image');
		$imageURL = $imageArray['sizes']['background-fullscreen'];
	}

?>

<html <?php if( is_page_template('templates/homepage-fullscreen.php') ) { ?> style="background: url('<?php echo $imageURL; ?>') no-repeat center center fixed;" class="background-fullscreen" <?php } ?>>

<head>


<head>
	<meta charset="utf-8">
	<title><?php bloginfo('name'); ?></title>

	<!-- Meta / og: tags -->
	<meta name="description" content="">
	<meta name="author" content="">


	<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS (* with Edge Inspect Fix)
	================================================== -->
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

	<!-- Fontkit
	================================================== -->
	<script type="text/javascript">
		WebFontConfig = { fontdeck: { id: '58862' } };

		(function() {
		  var wf = document.createElement('script');
		  wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
		  '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
		  wf.type = 'text/javascript';
		  wf.async = 'true';
		  var s = document.getElementsByTagName('script')[0];
		  s.parentNode.insertBefore(wf, s);
		})();
	</script>

	<?php wp_head(); ?>

</head>

<body <?php body_class($classes); ?>>

	<div id="page" class='hfeed site <?php if( is_page_template('templates/homepage-fullscreen.php') && is_front_page() ) { echo "content-fullscreen"; } ?>'><!-- content-fullscreen -->

		<header class="fixed-bottom">
			<div class="container">

				<div class="twelve columns">
					<!-- <div class="logo" style="width:45%;">
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">Welcome to <?php bloginfo( 'name' ); ?></a></h1>
					</div> -->
					<nav class="main-navigation">
						<div class="logo hide">
							<a href="<?php echo site_url(); ?>">
								<img src="<?php echo get_template_directory_uri('/'); ?>/img/ag_logo.png"  />
							</a>
						</div>
							<div class="global-nav">
								<li>
									<div class="hide-for-desktop hide sidr-close"><i class="fa fa-fw fa-close"></i></div>
								</li>
						<?php if(has_nav_menu('main_nav')){
									$defaults = array(
										'theme_location'  => 'main_nav',
										'menu'            => 'main_nav',
										'container'       => false,
										'container_class' => '',
										'container_id'    => '',
										'menu_class'      => 'menu hide-for-mobile',
										'menu_id'         => '',
										'echo'            => true,
										'fallback_cb'     => 'wp_page_menu',
										'before'          => '',
										'after'           => '',
										'link_before'     => '',
										'link_after'      => '',
										'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
										'depth'           => 0,
										'walker'          => ''
									); wp_nav_menu( $defaults );
								}else{
									echo "<p><em>main_nav</em> doesn't exist! Create it and it'll render here.</p>";
								} ?>
								
							</div>
								<div class="user-gateway hide">
									<div class="social">
										<ul>
											<li><a href="#" target="_blank"><i class="fa fa-fw fa-twitter"></i></a></li>
											<li><a href="#" target="_blank"><i class="fa fa-fw fa-facebook"></i></a></li>
											<li><a href="#" target="_blank"><i class="fa fa-fw fa-instagram"></i></a></li>
										</ul>
									</div>

									<div id="donate" class="button">
										<a class="purple" href="#" target="_blank">Donate</a>
									</div>
									<div id="subscribe" class="button">
										<a class="green" href="#" target="_blank">Subscribe</a>
									</div>
									<div class="responsive-menu-trigger hide-for-desktop">
										<a class="responsive-menu-button fa fa-fw fa-navicon"></a>
									</div>
								</div>
					</nav>
				</div>

			</div>
		</header>
