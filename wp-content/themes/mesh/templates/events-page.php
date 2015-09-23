<?php 
get_header('deep'); 
/* Template Name: Content Grid page
*/
?>

<main id="content">

	<div class="container">
		<div class="row">
			<?php 
              $banner_image = get_field('banner_image');
              $bannerimageURL = $banner_image['sizes']['short-banner'];
                if ( !empty ($banner_image)): 
            ?>
				<div class="banner" style="background-image:url('<?php echo $bannerimageURL ?>')"></div>

			<?php endif; ?>
			<div>
			<div class="title-bar">
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
					<div class="twelve columns">
						<h1 class="page-title"><?php  //the_title(); ?><?php $parent_title = get_the_title($post->post_parent);
echo $parent_title;?>/</h1>
						<?php
  							if($post->post_parent)

  								$children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0");

  							else

  								$children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0");

  							if ($children) { ?>

 								 <ul class="subnav">
  									<?php echo $children; ?>
  								</ul>

						<?php } ?>
						 
					</div>
					<?php the_content(); ?>

				<?php endwhile; ?>
			</div>

			<div class="grid ">

				<!-- Change this to repeater of custom fields -->

				<div class="content-block four columns intro">
					<h2><?php echo get_field('page_content_title') ?></h2>
					<p><?php echo get_field('page_content_description') ?></p>
				</div>

				<?php if (have_rows ('event_blocks')):
						

						while(have_rows('event_blocks')) : the_row();
						
						//variables
						$block_type = get_sub_field('event_block_type');
						$image = get_sub_field('event_image');
						$thumbImageUrl = $image['sizes']['large'];
						$title = get_sub_field('event_title');
						$details = get_sub_field('event_details');
						$description = get_sub_field('event_description');
						$ctatext = get_sub_field('cta_link_text');
						$link = get_sub_field('link');
						$eventType = get_sub_field('event_date_type');
						//var_dump($thumbImageUrl);
 
						if($block_type == 'image_only'): ?>

							<a href="<?php echo $link ?>">
							<div class="content-block four columns image-only" style="background-image:src('<?php echo $thumbImageUrl ?>')">
								<div class="content-wrapper">	
									<div class="content-text-block">
										<div class="overlay purple"></div>
										<p class="title"><?php echo $eventType ?>/</p>
									</div>
									<img src="<?php echo $thumbImageUrl ?>" />
									<!-- <p><?php var_dump($thumbImageUrl); ?> </p> -->
								</div>
							</div>
							</a>

						<?php elseif ($block_type == 'text_block'): ?>
							
							<a href="<?php echo $link ?>">
							<div class="content-block four columns text-block">
								<div class="has-border">
									<div class="content-text-block">
										<p class="title"><?php echo $eventType ?>/</p>
										<h2><?php echo $title ?></h2>
										<?php echo $details ?>
									</div>
								</div>
							</div>
							</a>

						<?php  elseif ($block_type == 'text_image_new'): ?>
							
							<a href="<?php echo $link ?>">
							<div class="content-block four columns text-image-new">
								<div class="title-block">
									<div class="content-text-block">
										<p class="title"><?php echo $eventType ?>/</p>
										<h2><?php echo $title ?></h2>
										<p><?php echo $description ?></p>
									</div>
								</div>
								<img src="<?php echo $thumbImageUrl ?>">
							</div>
							</a>

						<?php  elseif ($block_type == 'text_image_past'): ?>
							
							<a href="<?php echo $link ?>">
							<div class="content-block four columns text-image-past">
								<img src="<?php echo $thumbImageUrl ?>">
								<div class="title-block">
									<div class="content-text-block">
										<p class="title"><?php echo $eventType ?>/</p>
										<h2><?php echo $title ?></h2>
									</div>
								</div>
							</div>
							</a>

						<?php elseif ($block_type == 'new_event_info'): ?>
							
							<a href="<?php echo $link ?>">
							<div class="content-block four columns new-event-info">
								<div class="has-border">
									<div class="content-text-block">
										<h2><?php echo $title ?></h2>
									</div>
								</div>
							</div>
							</a>

						<?php elseif ($block_type == 'past_event_info'): ?>

							<a href="<?php echo $link ?>">
							<div class="content-block four columns past-event-info">
								<div class="has-border">
									<div class="content-text-block">
										<p class="title"><?php echo $eventType ?>/</p>
										<h2><?php echo $title ?></h2>
										<p><?php echo $description ?></p>
									</div>
								</div>
							</div>
							</a>	

						<?php elseif ($block_type == 'two_col_image_only'): ?>

							<a href="<?php echo $link ?>">
							<div class="content-block eight columns image-only" style="background-image:src('<?php echo $thumbImageUrl ?>')">
								<div class="content-wrapper">
									<div class="content-text-block">
										<div class="overlay purple"></div>
										<p class="title"><?php echo $eventType ?>/</p>
									</div>
									<img src="<?php echo $thumbImageUrl ?>" />
									<!-- <p><?php var_dump($thumbImageUrl); ?> </p> -->
								</div>
							</div>
							</a>


						<?php elseif ($block_type == 'cta_block'): ?>

							<div class="content-block four columns cta-block">
								<a class="cta-link" href="<?php echo $link ?>"><?php echo $ctatext ?>/</a>
							</div>

						<?php else: endif;
						endwhile;
						endif;
						?>
					</div>
			
			<!--Instagram feed -->
			<div class="row">
				<div class=""	>
					<div id="instafeed">
						<h3 class="title">
							Arts Gowanus on Instagram
						</h3>
						<!-- <div class="four columns">
							<a href="https://instagram.com/artsgowanus/" target="_blank"><img src="<?php echo get_template_directory_uri('/'); ?>/img/instagram-1.png"  /></a>
						</div>
						<div class="four columns">
							<a href="https://instagram.com/artsgowanus/" target="_blank"><img src="<?php echo get_template_directory_uri('/'); ?>/img/instagram-2.png"  /></a>
						</div>
						<div class="four columns">
							<a href="https://instagram.com/artsgowanus/" target="_blank"><img src="<?php echo get_template_directory_uri('/'); ?>/img/instagram-3.png"  /></a>
						</div> -->
					</div>		
				</div>
			</div>
			<!--Instagram feed -->

		
	</div>

</main><!-- End of Content -->

<?php get_footer(); ?>
