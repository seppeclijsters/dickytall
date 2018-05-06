
<?php
/**
 * Template Name: home
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
<!-- <div class="overons__overlay"></div> -->
<div class="overlay__loading__animation">
	<div id="bm" class="watch"> </div>
</div>
<!-- <div class="overlay"></div> -->
<div class="overlay__loading"></div>


<div id="barba-wrapper">
  <div class="barba-container" data-namespace="homepage">

	<!-- <?php
    $defaults = array(
      'container' => false,
      'theme_location'  => 'primary-menu',
      'menu_class'  => 'nav expanded row align-middle',
    );

    wp_nav_menu( $defaults );
  ?> -->



<header>
  <div class="expanded align-center row dickytall">
    <div class="column large-12 medium-11 small-11 ">
      <div class="dickytall__image data-tilt" data-tilt data-tilt-max="3" data-tilt-speed="200" data-tilt-perspective="2000">
        <div class="column large-5 medium-4 small-8 dickytall__text">
          <div class="hallo">Dickytall</div>
          <div class="hallo1">is</div>
          <div class="hallo2">een</div>
          <div class="hallo3">multidisciplinaire</div>
          <div class="hallo4">digitale </div>
          <div class="hallo5">communicatie</div>
          <div class="hallo6">studio</div>
          <div class="hallo7">gevestigd</div>
          <div class="hallo8">in</div>
          <div class="hallo9">Antwerp.</div>
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
  <div class="column large-12 medium-11 small-12 projects projects-margin">
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

<div class="projects__button">
  <a class= "projects__button__link btn-1c" href="<?php echo esc_url(get_permalink(get_page_by_title('projects')));?>">Meer projecten</a>
</div>

<div class="info">
	<?php
		while ( have_rows('componenten') ) : the_row();
			if( get_row_layout() == 'intro' ):
				get_template_part('template-parts/home/introductie');
			elseif( get_row_layout() == 'diensten' ):
				get_template_part('template-parts/home/diensten');
			elseif( get_row_layout() == 'form' ):
				get_template_part('template-parts/home/form');
			endif;
		endwhile;
	?>

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

<!-- <div class="main-grid">
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

</div> -->



<?php get_footer(); ?>

</div>
</div>
