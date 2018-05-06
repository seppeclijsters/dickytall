<!-- <?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<?php

?>

<nav>

  <ul class="nav expanded row align-middle">
    <li class="nav__item column large-4 fadeInScroll"><a href="<?php site_url()?>index.php/projects">onze projecten</a></li>
    <li class="nav__item column large-4 text-center fadeInScroll">
      <a href="http://localhost/localwp.dev"><img class="fadeInScroll" src="wp-content/themes/test-FoundationPress/src/assets/images/logo.svg" class="" height="auto" width="117" alt="logo Dickytall"></a>
    </li>
    <li class="nav__item column">
      <ul class="row align-right text-right">
        <li class="nav__item fadeInScroll"><a href="overons.html">over ons</a></li>
        <li class="nav__item nav__item__contact fadeInScroll">contact</li>
      </ul>
    </li>
  </ul>

	<?php

      $defaults = array(
        'container' => false,
        'theme_location'  => 'primary-menu',
        'menu_class'  => 'nav expanded row align-middle'
      );

      wp_nav_menu( $defaults );

    ?>
</nav>

<header>
  <div class="expanded align-center row dickytall">
    <div class="column large-12 medium-11 small-11 ">
      <div class="dickytall__image data-tilt" data-tilt data-tilt-max="3" data-tilt-speed="200" data-tilt-perspective="2000">
        <div class="column large-5 medium-4 small-8 dickytall__text">
          <span class="hallo">Dickytall</span>
          <span class="hallo">is</span>
          <span class="hallo">een</span>
          <span class="hallo">multidisciplinaire</span>
          <span class="hallo">digitale </span>
          <span class="hallo">communicatie</span>
          <span class="hallo">studio</span>
          <span class="hallo">gevestigd</span>
          <span class="hallo">in</span>
          <span class="hallo">Antwerp.</span>
        </div>
        <div class="tilt2"></div>
        <div class="tilt3"></div>
      </div>
    </div>
  </div>
</header>

<?php $args = array(
	'post_type' => 'projects',
	'posts_per_page' => '4'
); ?>
<?php $the_projects = new WP_Query( $args ); ?>
<div class="row align-center">
  <div class="column large-12 medium-11 small-12 projects">
    <div class="row align-left projects__flex">
			<?php if ( $the_projects->have_posts() ) : ?>
			<?php while ( $the_projects->have_posts() ) : $the_projects->the_post(); ?>
			<div class="column medium-6 small-11 project project1fadeIn">
				<div class="row">
					<div class="testing column">
						<a href="<?php the_permalink(); ?>">
							<div class="project__overlay projectOverlay">
								<div class="project__title"><?php the_field('description'); ?></div>
								<div class="project__arrow"></div>
							</div>
						</a>
					</div>
				</div>
				<img class="project__image" src="<?php  the_post_thumbnail_url() ?>" />
				<div class="project__title__mobile"><?php the_title(); ?></div>
			</div>

			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>

			<?php else : ?>
				<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
			</div>
		</div>
	</div>
</div>

<div class="projects__button">
  <a class= "projects__button__link btn-1c" href="<?php site_url()?>index.php/projects">Meer projecten</a>
</div>

<div class="info">
  <div class="row align-center info__dickytallContainer">
    <div class="column large-12 medium-11 small-12">
      <div class="row align-center">
        <div class="column medium-6 small-11 info__intro fadeInDickytallInfo1">
          We zijn Dickytall, een digitaal</br>
          communicatiebureau, gevestigd</br>
          op het Eilandje in Antwerpen.
        </div>
        <div class="column medium-6 small-11 info__dickytall fadeInDickytallInfo2">
          Ons team van professionals kent moderne communicatie en technologische
          trends, sociale media, conversie en e-commerce. Vaak bieden we het design
          en de bouw van sites aan in combinatie met een op maat gemaakte
          strategie. Usability en functioneel/grafisch ontwerp maken deel uit van ons
          DNA. Onze toegevoegde waarde ligt in het aanbieden aan de eindgebruikers
          van een gebruiksgemak zodat hun afhankelijkheid van IT sterk vermindert.
        </div>
      </div>
    </div>
  </div>

  <div class="row align-center info__diensten">
    <div class="column large-12 medium-11 small-12">
      <div class="row align-center">
        <div class="column large-3 medium-6 small-11 info__diensten__title fadeInDiensten1">
          Onze diensten
        </div>
        <div class="column large-9 medium-6 small-11">
          <div class="row">
            <div class="column large-4 small-12 fadeInDiensten2">
              Digital Strategy </br>
              Search Engine Marketing</br>
              Measure & Optimize Target</br>
              Group Activation
            </div>
            <div class="column large-4 small-12 fadeInDiensten3">
              UI & UX</br>
              Design Web & App Design </br>
              Development </br>
              Digital Bannering</br>
            </div>
            <div class="column large-4 small-12 fadeInDiensten4">
              Creative Direction</br>
              Graphic Design</br>
              Brand Identities</br>
              Content Creation</br>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row align-center">
    <div class="column large-10 medium-11 small-11 info__diensten__image"></div>
  </div>
</div>

<div class="info__extra">
  <div class="row align-center">
    <div class="column large-5 medium-7 small-9 info__extra__team">
      Met een team van ontwerpers en
      ontwikkelaars, vertellers en met oog
      voor detail <span class="blur">creëren wij op maat</span>
      gemaakte oplossingen voor en met
      u in het digitale landschap.
    </div>
  </div>
  <div class="info__extra__center">
    <div class="info__extra__email">Vul je emailadres in en blijf op de hoogte</div>
    <form class="content" action="#" method="post">
      <span class="input input--hoshi">
        <input class="input__field input__field--hoshi" type="email" name="email" placeholder="vul hier je emailadres in" required>
        <label class="input__label--hoshi input__label--hoshi-color-1">
      </span>
    </form>
  </div>
</div>

<div class="connect">
  <div class="row align-center">
    <div class="column medium-6 small-11 connect__address fadeInContact">
      <div class="connect__info__title">contact</div>
      <div class="connect__info__text">
        <a class="click" href="https://www.google.be/maps/place/Kattendijkdok-Oostkaai+11,+2000+Antwerpen/@51.2339279,4.4071912,17z/data=!3m1!4b1!4m5!3m4!1s0x47c3f64fca149df9:0x58a104922c2825b0!8m2!3d51.2339246!4d4.4093852" target="_blank">
          Kattendijkdok-Oostkaai 11 </br>
          2000 Antwerpen </br></a>
        <a class="click" href="mailto:info@dickytall.be" target="_top">info@dickytall.be</a> </br>
        tel. +32 3 284 29 70</br>
      </div>
    </div>
    <div class="column medium-6 small-11 connect__social fadeInSociaal">
      <div class="connect__info__title">sociaal</div>
      <div class="connect__info__text">
        Facebook </br>
        Instagram </br>
        LinkedIn</br>
      </div>
    </div>
  </div>
</div>

<div class="main-grid">
	<main class="main-content">
	<?php if ( have_posts() ) : ?>

		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/content', get_post_format() ); ?>
		<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; // End have_posts() check. ?>

		<?php /* Display navigation to next/previous pages when applicable */ ?>
		<?php
		if ( function_exists( 'foundationpress_pagination' ) ) :
			foundationpress_pagination();
		elseif ( is_paged() ) :
		?>
			<nav id="post-nav">
				<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'foundationpress' ) ); ?></div>
				<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'foundationpress' ) ); ?></div>
			</nav>
		<?php endif; ?>

	</main>
	<?php get_sidebar(); ?>

</div>

<?php get_footer(); -->
