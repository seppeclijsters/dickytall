<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<div class="projects__overlay">
			<p>Hello</p>
		</div>
		<div class="overons__overlay"></div>
		<div class="overons__overlay2"></div>

		<div class="menu__overlay">
      <div class="row text-right">
        <div class="column large-1 menu__overlay__close">
          Sluit menu
        </div>
      </div>
      <!-- <nav> -->
        <!-- <ul class="menu__overlay__size">
          <li class="menu__overlay__item"><a href="#">onze projecten</a></li>
          <li class="menu__overlay__item"><a href="#">over ons</a></li>
          <li class="menu__overlay__item"><a href="#">contact</a></li>
        </ul> -->
      <!-- </nav> -->
			<?php
				$defaults = array(
					'container' => false,
					'theme_location'  => 'mobile-menu',
					'menu_class'  => 'menu__overlay__size',
				);

				wp_nav_menu($defaults);
			?>
    </div>

    <nav class="navMobile">
      <ul class="row align-center align-middle">
        <li class="column small-6 navMobile__item">
					<a href="<?php echo esc_url(get_permalink(get_page_by_title('home')));?>"><img src="<?php bloginfo('template_url') ?>/src/assets/images/logo.svg" class="" height="auto" width="117" alt="logo Dickytall"></a>
        </li>
        <li class="column text-right small-5 navMobile__item navMobile__item__open">menu</li>
      </ul>
    </nav>

    <section class="contact">
      <div class="expanded row align-justify form__container">
        <div class="column large-3 medium-2 small-12 show-for-small-only">
          <div class="row align-right">
            <div class="contact__back">
              <img class="contact__back__arrow" src="<?php bloginfo('template_url') ?>/src/assets/images/icon-arrow-left.svg" width="60" height="10" alt="arrow back">
            </div>
          </div>
        </div>
        <form class="column large-9 medium-10 small-12 contact__form" style="max-width: 65rem;" action="index.html" method="post">
          <div class="">
            <span class="contact__text">Hallo! Ik ben</span>
            <span class="contact__text contact__formfield"><input type="text" size="9" name="" value="" placeholder="jouw naam"></span>
            <span class="contact__text">en zou</span>
            <span class="contact__text">graag met</span>
            <span class="contact__text">met</span>
            <span class="contact__text">jullie</span>
            <span class="contact__text">in zee</span>
            <span class="contact__text">gaan</span>
            <span class="contact__text">voor</span>
            <div class="contact__select">
              <select class="contact__select__hide" name="">
                <option value="een website" selected="selected">een website</option>
                <option value="een banner">een banner</option>
                <option value="een design">een design</option>
              </select>
              <div class="contact__select__trigger">een website</div>
              <ul class="contact__select__options">
                <li class="contact__select__options-style">een website</li>
                <li class="contact__select__options-style">een banner</li>
                <li class="contact__select__options-style">iets anders</li>
              </ul>
            </div>
            <span class="contact__text">.</span>
            <span class="contact__text">Je</span>
            <span class="contact__text">kan me</span>
            <span class="contact__text">contacteren</span>
            <span class="contact__text">via</span>
            <span class="contact__text contact__formfield"><input type="email" size="9" name="" value="" placeholder="jouw email"></span>
            <span class="contact__text">of bel</span>
            <span class="contact__text">me op</span>
            <span class="contact__text contact__formfield"><input type="text" size="14" name="" value="" placeholder="telefoonnummer"></span>
            <span class="contact__text">.</span>
            <input type="submit" class="contact__button" value="Send message">
          </div>
        </form>

        <div class="column large-3 medium-2 small-11 show-for-medium">
          <div class="row align-right">
            <div class="contact__back">
              <img class="contact__back__arrow" src="<?php bloginfo('template_url') ?>/src/assets/images/icon-arrow-left.svg" width="60" height="10" alt="arrow back">
            </div>
          </div>
        </div>
      </div>


      <div class="contact__info__container">
        <div class="expanded row align-justify contact__info">
          <div class="column large-10 medium-10 small-12 contact__info__details">
            <div class="row">
              <div class="column medium-6 small-12 makeContact contact__connect__slidein">
                <div class="makeContact__title">Contact</div>
                <div class="makeContact__text">
                  hello@dickytall.be </br>
                  tel. +32 3 284 29 70 </br>
                  mob. +32 478 406 996 </br>
                </div>
              </div>
              <div class="column medium-6 small-12 address contact__connect__slidein">
                <div class="address__title">Adres</div>
                <div class="address__text">
                  Kattendijkdok-Oostkaai 11 </br>
                  2000 Antwerpen</br>
                  Google maps
                </div>
              </div>
            </div>
          </div>
          <div class="column large-2 medium-2 small-12 align-self-bottom social">
            <a href="https://www.facebook.com/dickytall/"><div class="social__facebook contact__social__slidein"></div></a>
            <a href="https://www.facebook.com/dickytall/"><div class="social__instagram contact__social__slidein"></div></a>
            <a href="https://www.facebook.com/dickytall/"><div class="social__linkedin contact__social__slidein"></div></a>
          </div>
        </div>
      </div>
    </section>

		<?php
			$defaults = array(
				'container' => false,
				'theme_location'  => 'primary-menu',
				'menu_class'  => 'nav expanded row align-middle'
			);

			wp_nav_menu( $defaults );

		?>

	<!-- <?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>


	<header class="site-header" role="banner">
		<div class="site-title-bar title-bar" <?php foundationpress_title_bar_responsive_toggle(); ?>>
			<div class="title-bar-left">
				<button aria-label="<?php _e( 'Main Menu', 'foundationpress' ); ?>" class="menu-icon" type="button" data-toggle="<?php foundationpress_mobile_menu_id(); ?>"></button>
				<span class="site-mobile-title title-bar-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
				</span>
			</div>
		</div>

		<nav class="site-navigation top-bar" role="navigation">
			<div class="top-bar-left">
				<div class="site-desktop-title top-bar-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
				</div>
			</div>
			<div class="top-bar-right">
				<?php foundationpress_top_bar_r(); ?>

				<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) === 'topbar' ) : ?>
					<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
				<?php endif; ?>
			</div>
		</nav> -->

	</header>
