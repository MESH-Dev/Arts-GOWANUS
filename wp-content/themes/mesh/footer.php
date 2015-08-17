</div><!-- #page -->

<div class="tower-footer">
	<div class="tower">
		<img src="<?php echo get_template_directory_uri('/'); ?>/img/footer-tower.png"  />
	</div>
</div>

<footer class="site-footer <?php if( is_page_template('templates/homepage-fullscreen.php') ) { echo "footer-fullscreen"; } ?>">
	<div class="tower-footer">
		<div class="tower">
			<img src="<?php echo get_template_directory_uri('/'); ?>/img/footer-tower.png"  />
		</div>
	</div>
	<div class="">
		<div class="stack"><!-- row -->
			<div class=""><!-- twelve columns -->
				<!-- <nav class="main-navigation">
					<?php wp_nav_menu( array('menu_id' => 'footer-menu', 'theme_location' => 'footer-menu') ); ?>
				</nav> -->
				<div class="contact">
					<div class="address">
						<p>Arts Gowanus, 543 Union Street, #1C, <br />
						 Brooklyn, NY 11215<br />
						(347) - 446 - 8254</p>
					</div>
					<div class="social">
						<ul>
							<li><a href="#" target="_blank"><i class="fa fa-fw fa-twitter"></i></a></li>
							<li><a href="#" target="_blank"><i class="fa fa-fw fa-facebook"></i></a></li>
							<li><a href="#" target="_blank"><i class="fa fa-fw fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="subscribe">
					<p>Subscribe to arts Gowanus</p>
					<input type="text" placeholder="Enter valid e-mail address"></input>
					<input type="submit" value="Sign Up"></input>
				</div>
					<!-- <p>Designed by <a href="http://meshfresh.com" target="_blank">MESH</a></p> -->
			</div><!-- End of Footer -->
		</div>
	</div>

</footer>

<?php wp_footer(); ?>

</body>
</html>
