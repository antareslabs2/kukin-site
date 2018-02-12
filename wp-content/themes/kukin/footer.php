<?php
/**
 * The template for displaying the footer
 */
?>

		</div><!-- .site-content -->

		<footer class="footer">
			<div class="footer__top">
				<div class="container">
					<h5 class="footer__title">Мы в соцсетях</h5>
					<div class="footer__socials">
						<?php if( $instagram = get_field('instagram', 'option')) { ?>
						<a class="footer__social footer__social_in" href="<?= $instagram ?>" target="_blank"><span class="flaticon-instagram-logo"></span>Instagram</a>
						<?php } ?>

						<?php if( $vk = get_field('vk', 'option')) { ?>
						<a class="footer__social footer__social_vk" href="<?= $vk ?>" target="_blank"><span class="flaticon-vk-social-network-logo"></span>VK</a>
						<?php } ?>

						<?php if( $facebook = get_field('facebook', 'option')) { ?>
						<a class="footer__social footer__social_fb" href="<?= $facebook ?>" target="_blank"><span class="flaticon-facebook-logo"></span>Facebook</a>
						<?php } ?>
					</div>
				</div>
			</div>
			<div class="footer__bot">
				<div class="container">
					<?php if($copyrights = get_field('copyrights', 'option')) { ?>
					<p class="footer__left"><?= $copyrights ?></p>
					<?php } ?>
					<?php if( $created_by = get_field('created_by', 'option')) { ?>
					<p class="footer__right"><?= $created_by ?></p>
					<?php } ?>
				</div>
			</div>
		</footer>

<!-- 		<footer id="colophon" class="site-footer" role="contentinfo">
			<?php if ( has_nav_menu( 'primary' ) ) : ?>
				<nav class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Primary Menu', 'twentysixteen' ); ?>">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'primary',
							'menu_class'     => 'primary-menu',
						 ) );
					?>
				</nav>
			<?php endif; ?>

			<?php if ( has_nav_menu( 'social' ) ) : ?>
				<nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'twentysixteen' ); ?>">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'social',
							'menu_class'     => 'social-links-menu',
							'depth'          => 1,
							'link_before'    => '<span class="screen-reader-text">',
							'link_after'     => '</span>',
						) );
					?>
				</nav>
			<?php endif; ?>

			<div class="site-info">
				<span class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span>
			</div>
		</footer>
	</div>
</div>
-->

<?php wp_register_script('main', get_template_directory_uri() . '/js/main.js', array('jquery'), false, true); ?>
<?php wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array('jquery'), false, true); ?>

<?php wp_footer(); ?>
</body>
</html>
