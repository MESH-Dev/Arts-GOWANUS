<?php 
get_header('deep'); 
/* Template Name: Events page
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

					<h1 class="page-title"><?php the_title(); ?>/</h1>

					<?php the_content(); ?>

				<?php endwhile; ?>
			</div>

			<div class="grid twelve columns">

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
								<div class="content-text-block">
									<div class="overlay purple"></div>
									<p class="title"><?php echo $eventType ?>/</p>
								</div>
								<img src="<?php echo $thumbImageUrl ?>" />
								<!-- <p><?php var_dump($thumbImageUrl); ?> </p> -->
							</div>
							</a>

						<?php elseif ($block_type == 'text_block'): ?>
							
							<a href="<?php echo $link ?>">
							<div class="content-block four columns has-border text-block">
								<div class="content-text-block">
									<p class="title"><?php echo $eventType ?>/</p>
									<h2><?php echo $title ?></h2>
									<?php echo $details ?>
								</div>
							</div>
							</a>

						<?php  elseif ($block_type == 'text_image_new'): ?>
							
							<a href="<?php echo $link ?>">
							<div class="content-block four columns has-border text-image-new">
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
							<div class="content-block four columns has-border text-image-past">
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
							<div class="content-block four columns has-border new-event-info">
								<div class="content-text-block">
									<h2><?php echo $title ?></h2>
								</div>
							</div>
							</a>

						<?php elseif ($block_type == 'past_event_info'): ?>

							<a href="<?php echo $link ?>">
							<div class="content-block four columns has-border past-event-info">
								<div class="content-text-block">
									<p class="title"><?php echo $eventType ?>/</p>
									<h2><?php echo $title ?></h2>
									<p><?php echo $description ?></p>
								</div>
							</div>
							</a>	

						<?php elseif ($block_type == 'cta_block'): ?>

							<div class="content-block four columns cta-block">
								<a class="cta-link" href="<?php echo $link ?>" target="_blank"><?php echo $ctatext ?>/</a>
							</div>

						<?php else: endif;
						endwhile;
						endif;
						?>
					</div>
			
			<!--Instagram feed -->
			<div class="row">
				<div class="twelve columns"	>
					<div id="instafeed">
						<p class="title">
							arts gowanus on instagram
						</p>
					</div>		
				</div>
			</div>
			<!--Instagram feed -->

		
	</div>

</main><!-- End of Content -->

<?php get_footer(); ?>