<?php
/**
 * Template Name: projects
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div id="barba-wrapper">
  <div class="barba-container" data-namespace="projects">

<!-- <nav>
  <ul class="nav expanded row align-middle">
    <li class="nav__item column large-4 fadeInScroll"><a href="<?php site_url()?>index.php/projects">onze projecten</a></li>
    <li class="nav__item column large-4 text-center fadeInScroll">
      <a href="http://localhost/localwp.dev"><img class="fadeInScroll" src="<?php bloginfo('template_url') ?>/src/assets/images/logo.svg" class="" height="auto" width="117" alt="logo Dickytall"></a>
    </li>
    <li class="nav__item column">
      <ul class="row align-right text-right">
        <li class="nav__item fadeInScroll"><a href="overons.html">over ons</a></li>
        <li class="nav__item nav__item__contact fadeInScroll">contact</li>
      </ul>
    </li>
  </ul>
</nav> -->

<!-- <?php
	$defaults = array(
		'container' => false,
		'theme_location'  => 'primary-menu',
		'menu_class'  => 'nav expanded row align-middle',
	);

	wp_nav_menu( $defaults );
?> -->

<?php $args = array(
	'post_type' => 'projects'
); ?>
<?php $the_projects = new WP_Query( $args ); ?>
<div class="row align-center">
  <div class="column large-12 medium-11 small-12 projects">
    <div class="row align-left projects__flex">
			<?php if ( $the_projects->have_posts() ) : ?>
			<?php while ( $the_projects->have_posts() ) : $the_projects->the_post(); ?>

			<div class="column medium-6 small-11 project project1fadeIn">
				<a href="<?php the_permalink(); ?>">
				<div class="row">
					<div class="testing column">
						<div class="project__overlay projectOverlay">
							<div class="project__title"><?php the_field('description'); ?></div>
							<div class="project__arrow"></div>
						</div>
					</div>
				</div>
				</a>
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



<?php get_footer(); ?>

</div>
</div>
