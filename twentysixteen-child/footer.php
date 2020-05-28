<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

	


<div class="nyhedsbrev-container">
<div id="Nyhedsbrev">
    <h3 class="text-center">Modtag vores nyhedsbrev</h2>
  </div>

    <button class="button1">Tilmeld dig</button>

    <div id="id01" class="modal">
      <form class="modal-content newsletter-form" action="http://kathrineiris.dk/veganskbagvaerk/">
        <div class="container">
          <h1>Tilmeld dig</h1>
          <p>Udfyld din email og få tilsendt vores nyhedsbrev med lækre nye opskirfter og ideer.</p>
          <hr>
          <label for="name">Navn <span class="required">*</span></label>
          <input type="text" placeholder="Navn ..." name="navn" required>
 <label for="email">Email <span class="required">*</span></label>
          <input type="text" class="newsletter-form-email" placeholder="Email ..." name="email" required>
          <div class="clearfix">
            <button type="submit" class="signupbtn">Sign Up</button>
          </div>
        </div>
      </form>
    </div>
    </div>

	<p class="footer-text">Dette er et skoleprojekt // &copy; Kathrine, Helena, Sofie, Thit</p>
  </div><!-- .site-content -->	
	

			<?php if ( has_nav_menu( 'social' ) ) : ?>
				<nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'twentysixteen' ); ?>">
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'social',
								'menu_class'     => 'social-links-menu',
								'depth'          => 1,
								'link_before'    => '<span class="screen-reader-text">',
								'link_after'     => '</span>',
							)
						);
					?>
				</nav><!-- .social-navigation -->
			<?php endif; ?>

			<div class="site-info">
				<?php
					/**
					 * Fires before the twentysixteen footer text for footer customization.
					 *
					 * @since Twenty Sixteen 1.0
					 */
					do_action( 'twentysixteen_credits' );
				?>
		
				<?php
				if ( function_exists( 'the_privacy_policy_link' ) ) {
					the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' );
				}
				?>
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'twentysixteen' ) ); ?>" class="imprint">
				
				</a>
			</div><!-- .site-info -->
		</footer><!-- .site-footer -->
	</div><!-- .site-inner -->
</div><!-- .site -->

<?php wp_footer(); ?>
</body>
</html>