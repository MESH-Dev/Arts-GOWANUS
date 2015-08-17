<?php 
get_header('deep'); 
/* Template Name: Text page
*/
?>

<main id="content" class="text-page">

	<div class="container">
		<div class="row">
			<?php 
              $banner_image = get_field('banner_image');
              $bannerimageURL = $banner_image['sizes']['short-banner'];
                if ( !empty ($banner_image)): 
            ?>
				<div class="banner" style="background-image:url('<?php echo $bannerimageURL ?>')"></div>

			<?php endif; ?>
			
			<div class="title-bar">
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

					<h1 class="page-title"><?php the_title(); ?>/</h1>

					

				<?php endwhile; ?>
			</div>

				<div class="grid twelve columns" id="sidebar">
				<div class="three columns">
					
					<?php if (have_rows('sidebar_block')): 

					  while (have_rows('sidebar_block')) : the_row(); 

						$title = get_sub_field('box_title');
						$description = get_sub_field('description');

					  ?>
					  <div class="sidebar-block">
					  	<h3 class="title"><?php echo $title ?></h3>
					  	<div class="description">
					  		<?php echo $description ?>
					  	</div>
					  	<ul>
					  	<?php if (have_rows('links')):
					  		while (have_rows ('links')) : the_row();

					  			$destination = get_sub_field('link_destination');
					  			$link = get_sub_field('link_text');

					  		?>

					  		<li><a href="<?php echo $destination ?>"><?php echo $link ?></a></li>
					  	<? endwhile; endif; ?>
					  	</ul>
					  </div>

					<?php endwhile; ?>
				<?php endif; ?>

				</div>

				<div class="eight columns offset-by-one">
					<div class="the-content">
						<?php the_content(); ?>
					</div>
				</div>
				<!-- Change this to repeater of custom fields -->

				<div class="content-block four columns intro">
					<h2><?php echo get_field('page_content_title') ?></h2>
					<p><?php echo get_field('page_content_description') ?></p>
				</div>

				

			<!--Instagram feed -->
			<div class="twelve columns"	>
				<div id="instafeed">
					<h3 class="title">
						Arts Gowanus on Instagram
					</h3>
				</div>		
			</div>
			<!--Instagram feed -->

			
		</div>
		
	</div>

</main><!-- End of Content -->

<?php get_footer(); ?>
