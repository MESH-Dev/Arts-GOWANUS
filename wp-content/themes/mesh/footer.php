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
							<li><a href="https://twitter.com/artsgowanus" target="_blank"><i class="fa fa-fw fa-twitter"></i></a></li>
							<li><a href="https://www.facebook.com/gowanusopenstudios" target="_blank"><i class="fa fa-fw fa-facebook"></i></a></li>
							<li><a href="https://instagram.com/artsgowanus/" target="_blank"><i class="fa fa-fw fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="subscribe">
					<p>Subscribe to arts Gowanus</p>
					<form action="<?php echo site_url(); ?>/subscribe">
						<input type="text" placeholder="Enter e-mail here"></input>
						<input type="submit" value="Sign Up" formaction="<?php echo site_url(); ?>/subscribe"></input>
					</form>
					<div class="watermark">
						<p>Website by <a href="http://www.meshfresh.com" target="_blank">MESH</a></p>
					</div>
				</div>

					<!-- <p>Designed by <a href="http://meshfresh.com" target="_blank">MESH</a></p> -->
			</div><!-- End of Footer -->
		</div>
	</div>

</footer>

<?php wp_footer(); ?>

<!--<script>window.twttr = (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0],
    t = window.twttr || {};
  if (d.getElementById(id)) return t;
  js = d.createElement(s);
  js.id = id;
  js.src = "https://platform.twitter.com/widgets.js";
  fjs.parentNode.insertBefore(js, fjs);
 
  t._e = [];
  t.ready = function(f) {
    t._e.push(f);
  };
 
  return t;
}(document, "script", "twitter-wjs"));

 			twttr.ready( function(twttr){
                twttr.widgets.createTweet(
                    "20",
                    document.getElementById("tweet-container"),
                    {
                      linkColor: "#55acee"
                    }
                  );
                });
              </script>-->

</body>
</html>
