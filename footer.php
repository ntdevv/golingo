<?php
$twitter = get_field('twitter', 'options');
$linkedin = get_field('linkedin', 'options');
$facebook = get_field('facebook', 'options');

?>
			<footer class="footer">
				<nav role="navigation">
					<?php wp_nav_menu(array(
						'container' => '',                           // enter '' to remove nav container (just make sure .footer-links in _base.scss isn't wrapping)
						'menu' => __( 'Footer Links', 'bonestheme' ),   // nav name
						'menu_class' => 'footer__links',            // adding custom nav class
						'theme_location' => 'footer-links',             // where it's located in the theme
						'before' => '',                                 // before the menu
						'after' => '',                                  // after the menu
						'link_before' => '',                            // before each link
						'link_after' => '',                             // after each link
						'depth' => 0,                                   // limit the depth of the nav
						'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
					)); ?>
				</nav>
				<div class="social-footer">
				    <a href="<?= $facebook; ?>"><i class="fab fa-facebook-f"></i></a>
				    <a href="<?= $linkedin; ?>"><i class="fab fa-linkedin-in"></i></a>
				    <a href="<?= $twitter;?>"><i class="fab fa-twitter"></i></a>
				</div>
				<div class="legal">
					<p class="source-copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>. All Rights Reserved.</p>
					
				</div>
			</footer>


		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html> <!-- end of site. what a ride! -->
