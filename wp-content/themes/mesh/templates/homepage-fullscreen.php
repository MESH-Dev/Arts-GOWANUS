<?php /*
* Template Name: Homepage - Fullscreen
*/
get_header(); ?>

<main id="main" class="site-main homepage-fullscreen" role="main">

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
              <img src="<?php echo get_template_directory_uri('/'); ?>/img/twitter-white.png" /></a>
            </div>
             <div class="down-container">
                  <div class="down">
                    <a href="#events"><img src="<?php echo get_template_directory_uri('/'); ?>/img/arrow-down.png" /></a>
                  </div>
              </div>
                 </div>          
            
          <?php 
              $event_image = get_field('ep_background');
                if ( !empty ($event_image)): 
            ?>
                <div id="events" class="panel" style="background-image:url('<?php echo $event_image['url']?>')">
              <?php endif; ?>

                  <div class="event_link">

                    <?php 
                      $icon = get_field('el_background');
                      if ( !empty ($icon)):?>

                    <div class="event_link_icon"><img src="<?php echo $icon['url']; ?>" /></div>

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
                </div> <!-- End event panel -->
  <?php 
    $program_image = get_field('pp_background');
    if (!empty ($program_image)):
    ?>
  <div id="programs" class=" panel" style="background-image:url('<?php echo $program_image['url']?>')">
  <?php endif; ?>
    <div class="title">
      <h2>Programs</h2>
    </div>
  </div> <!-- End program panel -->
  <?php 
    $artist_image = get_field('fa_background');
    if (!empty ($artist_image)):
    ?>
   <div id="featured-artists" class=" panel" style="background-image:url('<?php echo $artist_image['url']?>')">
    <?php endif; ?>
    <div class="title">
      <h2><?php echo get_field('fa_name') ?></h2>
      <h3><?php echo get_field('fa_description') ?></h3>
    </div>
  </div><!-- End featured artist div -->
<?php endwhile;?>
<?php endif; ?>
  <!--<?php if (get_field("callout_headline")): ?>
    <div class="container">
      <div class="row">
        <div class="twelve columns">
          <div class="callout">
            <h1><?php the_field("callout_headline"); ?></h1>
          </div>
        </div>
      </div>
    </div>
  <?php endif ?>

  <?php if (have_rows("content_blocks")): ?>
    <div class="container">
      <div class="row">

        <?php while ( have_rows('content_blocks') ) : the_row(); ?>

          <div class="four columns">
            <?php if (get_sub_field('content_block_title')): ?>
              <h3><?php the_sub_field('content_block_title'); ?></h3>
            <?php endif ?>
            <?php if (get_sub_field('content_block_description')): ?>
              <p><?php the_sub_field('content_block_description'); ?></p>
            <?php endif ?>
          </div>

        <?php endwhile; ?>

      </div>
    </div>
  <?php endif ?>

  <?php if (get_field("callout_description")): ?>
    <div class="container">
      <div class="row">
        <div class="eight columns">
          <p><?php the_field('callout_description'); ?></p>
        </div>
      </div>
    </div>
  <?php endif ?> -->

</main><!-- #main -->

<?php get_footer(); ?>
