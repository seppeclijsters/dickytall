<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div id="barba-wrapper">
  <div class="barba-container" data-namespace="projectDetail">

		<!-- <div class="projects__title">
			<p><?php the_title(); ?><p>
		</div> -->

<div class="projects__container">
  <div class="project__overlay__title">Bulo</div>
  <header>

		<?php
			$defaults = array(
				'container' => false,
				'theme_location'  => 'primary-menu2',
				'menu_class'  => 'nav expanded row align-middle',
			);

			wp_nav_menu( $defaults );
		?>

    <div class="header__project">
      <div class="row align-center">
        <div class="column large-12 medium-11 small-11"><span class="header__project__title"><?php the_title(); ?>, <?php the_field('description');?></span></div>
      </div>

      <div class="row align-center">
        <div class="header__project__tag column large-6 medium-5 small-11"><?php the_field('tags');?></div>
        <div class="header__project__date column large-6 medium-6 small-11"><?php the_title(); ?> - <?php the_field('year');?></div>
      </div>

      <div class="row allign-center">
        <div class="header__project__image column large-12 medium-11 small-11">
          <img src="<?php bloginfo('template_url') ?>/src/assets/images/projectImage.jpg" width="100%" height="auto" alt="">
        </div>
      </div>

      <div class="row align-center header__project__needContainer header__text-padding">
        <div class="header__project__need column large-3 medium-3 small-11">
					<div class="fadeInNeed">T</div>
					<div class="fadeInNeed">h</div>
					<div class="fadeInNeed">e</div>
					<div class="fadeInNeed">&nbsp;</div>
					<div class="fadeInNeed">n</div>
					<div class="fadeInNeed">e</div>
					<div class="fadeInNeed">e</div>
					<div class="fadeInNeed">d</div>
				</div>
        <div class="header__project__needInfo column large-9 medium-8 small-11 fadeInNeedInfo">
          <?php the_field('needs');?>
        </div>
      </div>

			<div class="row align-center slideshow-container">
			  <div class="column large-12 medium-11 small-12 projects">
			    <div class="row align-left projects__flex">
						<div class="column medium-6 small-11 project project1fadeIn">
							<img class="project__image" src="<?php  the_post_thumbnail_url(); ?>" />
						</div>
						<div class="column medium-6 small-11 project project1fadeIn">
							<img class="project__image" src="<?php  the_post_thumbnail_url(); ?>" />
						</div>
					</div>
				</div>
			</div>

			<div class="row slideshow-container align-center">
				<?php if( have_rows('slideshow') ): ?>
			    <?php while( have_rows('slideshow') ): the_row(); ?>
						<div class="column large-12 medium-11 mySlides fade firstItem" style="display: block;">
							<div class="numbertext">1 / 3</div>
							<?php $image = wp_get_attachment_image_src(get_sub_field('image'), 'full'); ?>
							<img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('image'))?>" width="100%" />
						</div>
			    <?php endwhile; ?>
				<?php endif; ?>
				<div class="previous"></div>
				<div class="next2"></div>
			</div>

      <div class="row align-center header__project__needContainer header__text-padding">
        <div class="header__project__solution column large-3 medium-3 small-11">
					<div class="fadeInSolution">T</div>
					<div class="fadeInSolution">h</div>
					<div class="fadeInSolution">e</div>
					<div class="fadeInSolution">&nbsp;</div>
					<div class="fadeInSolution">s</div>
					<div class="fadeInSolution">o</div>
					<div class="fadeInSolution">l</div>
					<div class="fadeInSolution">u</div>
					<div class="fadeInSolution">t</div>
					<div class="fadeInSolution">i</div>
					<div class="fadeInSolution">o</div>
					<div class="fadeInSolution">n</div>
				</div>
        <div class="header__project__solutionInfo column large-9 medium-8 small-11 fadeInSolutionInfo">
          <?php the_field('needs');?>
        </div>
      </div>

      <div class="row allign-center">
        <div class="header__project__image column large-12 medium-11 small-11">
          <img src="<?php bloginfo('template_url') ?>/src/assets/images/projectImage2.jpg" width="100%" height="auto" alt="">
        </div>
      </div>

      <div class="row allign-center">
        <div class="header__project__image header__image-padding column large-12 medium-11 small-11">
          <img src="<?php bloginfo('template_url') ?>/src/assets/images/projectImage4.jpg" width="100%" height="auto" alt="">
        </div>
      </div>
    </div>
  </header>

  <div class="row align-center project__how header__text-padding">
    <div class="column large-3 medium-5 small-11 project__how__title fadeInHow">
      Wat hebben we gedaan
    </div>
    <div class="column align-center large-9 medium-6 small-11">
      <div class="row project__how__text">
        <div class="column large-4 small-12 fadeInHow">
          Digital Strategy </br>
          Search Engine Marketing</br>
          Measure & Optimize Target</br>
          Group Activation
        </div>
        <div class="column large-4 small-12 fadeInHow">
          UI & UX</br>
          Design Web & App Design </br>
          Development Digital</br>
          Bannering</br>
        </div>
        <div class="column large-4 small-12 fadeInHow">
          UI & UX</br>
          Design Web & App Design </br>
          Development Digital</br>
          Bannering</br>
        </div>
      </div>
    </div>
  </div>

  <div class="row customNavigation align-center">
    <div class="related__work column large-6 medium-6 small-11 ">Gerelateerd werk</div>
    <div class="buttons column large-6 medium-5 small-11">
      <a class="prev">Previous</a>
      <a class="next">Next</a>
    </div>
  </div>

	<?php $args = array(
		'post_type' => 'projects'
	); ?>
	<?php $the_projects = new WP_Query( $args ); ?>

<div id="owl-demo" class="owl-carousel owl-theme">
		<?php if ( $the_projects->have_posts() ) : ?>
		<?php while ( $the_projects->have_posts() ) : $the_projects->the_post(); ?>
			<a href="<?php the_permalink(); ?>">
    		<div class="item">
					<?php  the_post_thumbnail( 'custom-size2');?>
				</div>
				<!-- <?php the_post_thumbnail( 'featured-xlarge size'); ?> -->
				<!-- <?php  echo get_the_post_thumbnail( null, $size, $attr );  the_title();?> -->
			</a>
		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
		<?php endif; ?>
  </div>
</div>
<?php get_footer();?>

</div>
</div>
