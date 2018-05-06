
<?php
/**
 * Template Name: overons
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
<div id="barba-wrapper">
  <div class="barba-container" data-namespace="overons">

<!-- <?php
	$defaults = array(
		'container' => false,
		'theme_location'  => 'primary-menu',
		'menu_class'  => 'nav expanded row align-middle'
	);

	wp_nav_menu( $defaults );

?> -->
<?php
	while ( have_rows('overons_componenten') ) : the_row();
		if( get_row_layout() == 'header' ):
			get_template_part('template-parts/overons/header');
		elseif( get_row_layout() == 'introductie' ):
			get_template_part('template-parts/overons/introductie');
		endif;
	endwhile;
?>

  <div class="row align-center about__strategy">
    <div class="column large-5 medium-4 small-11 about__strategy__title">
      <div class="about__strategy__title-selected">- Digital strategy</div>
      <div class="about__strategy__title-unselected">Web & App Design</div>
      <div class="about__strategy__title-unselected">Development</div>

    </div>
    <div class="row large-6 medium-7 small-11">
      <div class="column small-12 about__strategy__text">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        Nam et lectus at magna dignissim convallis vitae sit amet tellus.
        Suspendisse potenti. Etiam aliquet quam a laoreet dictum.
        Integer efficitur, orci id sodales condimentum, nisl magna
        efficitur augue, nec euismod ligula velit nec diam. Donec
        convallis odio neque, id tellus tincidunt in. Proin in felis
        fringilla, nulla ut, volutpat eros. Praesent lacus urna, porttitor id eros.
      </div>
      <div class="column small-12 about__strategy__text">
        Nunc vel nibh eu nisi congue imperdiet. Proin sed pretium lacus.
        Nullam id convallis erat. Vivamus ac placerat augue, eu porttitor massa mauris sit amet.
      </div>
    </div>
  </div>
</div>

<?php
	while ( have_rows('overons_componenten') ) : the_row();
		if( get_row_layout() == 'diensten' ):
			get_template_part('template-parts/overons/diensten');
		elseif( get_row_layout() == 'partners' ):
			get_template_part('template-parts/overons/partners');
		elseif( get_row_layout() == 'team' ):
			get_template_part('template-parts/overons/team');
		endif;
	endwhile;
?>

<?php get_footer(); ?>

</div>
</div>
