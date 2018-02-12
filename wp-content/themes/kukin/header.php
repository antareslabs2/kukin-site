<?php
/**
 * The template for displaying the header
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ;?>/css/main.css" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header class="header">
	<a class="header__brandnig" href="/">
		<?php if($header_logo = get_field('header_logo', 'option')) { ?>
		<img class="header__branding-img" src="<?= $header_logo['url'] ?>" alt="<?= $header_logo['title'] ?>"></a>
		<?php } ?>
		<div class="header__main">
			<div class="header__top">

				<?php if($header_title = get_field('header_title', 'option')) { ?>
				<h1 class="header__title"><?= $header_title ?></h1>
				<?php } ?>
				<?php if($header_description = get_field('header_description', 'option')) { ?>
				<p class="header__subtitle"><?= $header_description ?></p>
				<?php } ?>

			</div>

			<?php wp_nav_menu(array(
				'location' => 'header-menu',
				'container' => 'nav',
				'container_class' => 'header__nav',
				'menu_class' => 'header__menu',
				'items_wrap' => '<ul class="%2$s">%3$s</ul>'
			)); ?>
		</div>
		<div class="header__socials">
			<div class="header__socials-top">
				<a class="header__btn header__btn_login" href="#" target="_blank">Войти</a>
				<?php if($instagram = get_field('instagram', 'option')) { ?>
				<a class="header__btn header__btn_in" href="<?= $instagram ?>" target="_blank">
					<span class="flaticon-instagram-logo"></span>Instagram
				</a>
				<?php } ?>
				<?php if($vk = get_field('vk', 'option')) { ?>
				<a class="header__btn header__btn_vk" href="<?= $vk ?>" target="_blank">
					<span class="flaticon-vk-social-network-logo"></span>VK
				</a>
				<?php } ?>
				<?php if($facebook = get_field('facebook', 'option')) { ?>
				<a class="header__btn header__btn_fb" href="<?= $facebook ?>" target="_blank">
					<span class="flaticon-facebook-logo"></span>Facebook
				</a>
				<?php } ?>
			</div>
			<?php if( ($company_tel = get_option('company_tel', 'option')) && ($company_phone = get_field('company_phone', 'option')) ) { ?>
			<a class="header__tel" href="<?= $company_tel ?>"><?= $company_phone ?></a>
			<?php } ?>
			<div class="header__socials-external">
				<span class="header__socials-text">связаться через</span>
				<?php if( $whatsapp_link = get_field('whatsapp_link', 'option')) { ?>
				<a class="header__btn header__btn_wu header__btn_external" href="<?= $whatsapp_link ?>" target="_blank"><span class="flaticon-whatsapp-logo"></span>WhatsApp</a>
				<?php } ?>
				<?php if( $viber_link = get_field('viber_link', 'option')) { ?>
				<a class="header__btn header__btn_vi header__btn_external" href="<?= $viber_link ?>" target="_blank"><span class="flaticon-viber"></span>Viber</a>
				<?php } ?>
			</div>
		</div>
	</header>

<!-- <div id="page" class="site">
	<div class="site-inner">
		<header id="masthead" class="site-header" role="banner">
			<div class="site-header-main">
				<div class="site-branding">
					<?php if ( is_front_page() && is_home() ) : ?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php else : ?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php endif;

					$description = get_bloginfo( 'description', 'display' );
					if ( $description  ) : ?>
						<p class="site-description"><?php echo $description; ?></p>
					<?php endif; ?>
				</div>

				<?php if ( has_nav_menu( 'primary' ) ) : ?>

					<div id="site-header-menu" class="site-header-menu">
						<?php if ( has_nav_menu( 'primary' ) ) : ?>
							<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'twentysixteen' ); ?>">
								<?php
									wp_nav_menu( array(
										'theme_location' => 'primary',
										'menu_class'     => 'primary-menu',
									 ) );
								?>
							</nav>
						<?php endif; ?>
					</div>
				<?php endif; ?>
			</div>

			<?php if ( get_header_image() ) : ?>
				<div class="header-image">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img src="<?php header_image(); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
					</a>
				</div>
			<?php endif; // End header image check. ?>
		</header>
 -->
		<div id="content" class="site-content">
