<?php /*
* Template Name: Homepage - Scrolling
*/

get_header(); 
?>

<main id="" class="" role="main"> <!-- site-main -->
 
 <!--  <div class=""> --><!-- container -->

   <!--  <div class=""> --><!-- row -->
    <!--   <div class=""> -->
      	<?php if ( have_posts() ) : 
      // Do we have any posts/pages in the databse that match our query?
      ?>

        <?php while ( have_posts() ) : the_post(); 
        // If we have a page to show, start a loop that will display it
        ?>
            
           <?php 
              $top_image = get_field('top_panel_image');
              $top_image_url = $top_image['sizes']['background-fullscreen'];
                if ( !empty ($top_image)): 
            ?>
              <div id="home" class="panel" style="background-image:url('<?php echo $top_image_url?>')">
             <?php endif; ?>
             <div class="strip"></div>
             <div class="black overlay"></div>
             <div class="logo fixed-top">
				<a href="<?php echo site_url(); ?>">
					<img src="<?php echo get_template_directory_uri('/'); ?>/img/ag_logo.png"  />
				</a>
			</div>
             <div class="user-gateway fixed-top">
								<div class="social">
									<ul>
										<li><a href="https://twitter.com/artsgowanus" target="_blank"><i class="fa fa-fw fa-twitter"></i></a></li>
										<li><a href="https://www.facebook.com/gowanusopenstudios" target="_blank"><i class="fa fa-fw fa-facebook"></i></a></li>
										<li><a href="https://instagram.com/artsgowanus/" target="_blank"><i class="fa fa-fw fa-instagram"></i></a></li>
									</ul>
								</div>
								<div id="donate" class="button purple">
									<a class="purple" href="<?php echo site_url(); ?>/about/donate">Donate</a>
								</div>
								<div id="subscribe" class="button green">
									<a class="green" href="<?php echo site_url(); ?>/subscribe">Subscribe</a>
								</div>
								<div class="responsive-menu-trigger hide-for-desktop">
									<a class="responsive-menu-button fa fa-fw fa-navicon"></a>
								</div>
							</div>


							<nav class="main-navigation sticky">
						
							<div class="global-nav absolute-bottom">
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
								
					</nav>







                <div class="greeting-container">
                  <div class="greeting">
                    <h1><?php echo the_field('greeting') ?></h1>
                    <h2><?php echo the_field('mission') ?></h2>
                  </div>
                </div>
                  <!-- <div class="title">
                    <h2><?php echo the_field('greeting') ?></h2>
                    <h3><?php echo the_field('mission') ?></h3>
                  </div> -->
             <div class="tw-feed-block">
               	<div id="tweet-container" class="tw-close">
                    <i class="fa fa-fw fa-close"></i>
                </div>
                <div class="twitter-tweet">
                    <?php get_template_part( 'partials/twitter' ); ?>
                </div>
             <!-- 	<p><a href="https://instagram.com/artsgowanus/" target="_blank">@artsgowanus</a><br />
             		OPEN CALL!  Am I invisible? NYC SP invites artists in NYC to share their experiences of biking in the city.  <a href="http://bicycleutoianyc.com" target="_blank">http://bicycleutoianyc.com</a>
             	</p> -->
             </div>
             <div id="twitter">
	             <a href="#">
	              	<img class="top" src="<?php echo get_template_directory_uri('/'); ?>/img/twitter-white.png" />
	              	<img class="bottom" src="<?php echo get_template_directory_uri('/'); ?>/img/twitter-purple.png" />
	          	</a>
            </div>

             <div class="down-container">
                  <div class="down">
                    <a href="#events"><img src="<?php echo get_template_directory_uri('/'); ?>/img/arrow-down.png" /></a>
                  </div>
              </div>
            </div> <!-- End home panel -->         
            
          <?php 
              $event_image = get_field('ep_background');
              $event_image_url = $event_image['sizes']['background-fullscreen'];
                if ( !empty ($event_image)): 
            ?>
                <div id="events" class="panel" style="background-image:url('<?php echo $event_image_url ?>')">
              <?php endif; ?>
              <div class="black overlay"></div>

                  <div class="event_link">

                    <!--<?php 
                      $icon = get_field('el_background');
                      if ( !empty ($icon)):?>-->

                    <div class="event_link_icon">
                    	<img class="top" src="<?php echo get_template_directory_uri("/"); ?>/img/polygon.png" />
                    	<img class="bottom" src="<?php echo get_template_directory_uri("/"); ?>/img/polygon_white.png" />
                    </div>

                    <?php endif; ?>

                    <?php 
                      $external = get_field('external_link');
                      //var_dump($external);
                      $target = '_self';
                    if ($external == 'false'):
                      $target = '_blank';
                    else:
                    endif; ?>

                    <h2><a href="<?php the_field('event_link')?>" target="<?php echo $target; ?>"><?php the_field('event_link_text')?></a></h2>

                  </div>
                  <div class="event-cta">
                  	<h2><?php the_field('event_cta') ?></h2>
                  	<a class="button" href="cta_link"><?php the_field('cta_link_text'); ?></a>
                  </div>
                </div> <!-- End event panel -->
  <?php 
    $program_image = get_field('pp_background');
    $program_image_url = $program_image['sizes']['background-fullscreen'];
    if (!empty ($program_image)):
    ?>
  <div id="programs" class=" panel" style="background-image:url('<?php echo $program_image_url ?>')">
  <?php endif; ?>
    <div class="title">
    	<a href="<?php echo site_url(); ?>/about">
	    	<p>Programs/</p>
			<h2>Our Programs</h2>
		</a>
    </div>
  </div> <!-- End program panel -->
  <?php 
    $artist_image = get_field('fa_background');
    $artist_image_url = $artist_image['sizes']['background-fullscreen'];
    if (!empty ($artist_image)):
    ?>
   <div id="featured-artists" class=" panel" style="background-image:url('<?php echo $artist_image_url?>')">
    <?php endif; ?>
    <div class="title">
 		<a href="<?php get_field('fa_link') ?>"><p>Feature Artist/</p>
		<h2><?php echo get_field('fa_name') ?></h2>
		<h3><?php echo get_field('fa_description') ?></h3></a>
    </div>
  </div><!-- End featured artist div -->
<?php endwhile;?>
<?php endif; ?>
   <!--    </div>
    </div>

  </div> -->

</main><!-- #main -->


<?php get_footer(); ?>
</div>
