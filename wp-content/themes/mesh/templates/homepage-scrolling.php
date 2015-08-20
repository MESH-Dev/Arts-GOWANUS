<?php /*
* Template Name: Homepage - Scrolling
*/

get_header(); 
?>

<main id="" class="" role="main"> <!-- site-main -->
 <div class="strip"></div>
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
                if ( !empty ($top_image)): 
            ?>
              <div id="home" class="panel" style="background-image:url('<?php echo $top_image['url']?>')">
             <?php endif; ?>
             <div class="black overlay"></div>
             <div class="user-gateway">
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
             
             <div id="twitter">
	             <a href="#" target="_blank">
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
                if ( !empty ($event_image)): 
            ?>
                <div id="events" class="panel" style="background-image:url('<?php echo $event_image['url']?>')">
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
    if (!empty ($program_image)):
    ?>
  <div id="programs" class=" panel" style="background-image:url('<?php echo $program_image['url']?>')">
  <?php endif; ?>
    <div class="title">
    	<a href="<?php echo site_url(); ?>/programs">
	    	<p>Programs/</p>
			<h2>Our Programs</h2>
		</a>
    </div>
  </div> <!-- End program panel -->
  <?php 
    $artist_image = get_field('fa_background');
    if (!empty ($artist_image)):
    ?>
   <div id="featured-artists" class=" panel" style="background-image:url('<?php echo $artist_image['url']?>')">
    <?php endif; ?>
    <div class="title">
 		<a href="<?php get_field('fa_link') ?>" target="_blank"><p>Feature Artist/</p>
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
