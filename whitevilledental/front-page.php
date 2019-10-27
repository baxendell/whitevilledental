<?php
/**
 * Front-page
 *
 * Front page action hooks in inc/front-page-hooks.php
 */
get_header();
?>

<section class="pattern-content">

    <div class="container">

        <div class="row align-items-center justify-content-center">

        	<div class="col-xl-10">

			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post() ?>

                    <h1 class="page-title"><?php h1_title(); ?></h1>

                    <div class="pattern-content-text text-center">

						<?php the_content(); ?>

					</div>

				<?php endwhile; ?>

			<?php endif; ?>

			</div>

        </div>

    </div>

</section>

<?php get_template_part('partials/services') ?>

<section class="main-content cta-tri">

	<div class="container">

		<div class="row align-items-center justify-content-center">

			<div class="col-md-11">

				<div class="row">

					<div class="col-md-4 text-center">	

						<div class="cta-box">

							<div class="cta-box-title">

								<?php the_field('left_box_title') ?>

							</div>

							<div class="cta-box-content">

								<?php the_field('left_box_content') ?>

							</div>

						</div>

					</div>

					<div class="col-md-4 text-center">

						<div class="cta-box">

							<div class="cta-box-title">

								<?php the_field('testimonial_section_title') ?>

							</div>

							<div class="cta-box-content">

								<?php $post_objects = get_field('testimonials');

									if( $post_objects ):

								?>

			                    <div class="testimonials-section-slider">

			                        <?php foreach( $post_objects as $post): setup_postdata($post); ?>

			                        <div class="testimonials-section-item">

			                           <?php the_excerpt() ?>

			                            <cite><?php the_title() ?></cite>

			                        </div>

			                        <?php endforeach; ?>

			                    </div>

			                    <div class="custom-nav-test sameHeight"></div>

			                    <!--<a class="arrow-link" href="/testimionials/">See More Testimonials</a>-->

			                 	<?php wp_reset_postdata(); endif; ?>

		                    </div>

						</div>

					</div>


					<div class="col-md-4 text-center">

						<div class="cta-box">

							<div class="cta-box-title">

								<?php the_field('right_bottom_title') ?>

							</div>

							<div class="cta-box-content">

								<?php the_field('right_bottom_content') ?>

							</div>

						</div>

					</div>

				</div>

			</div>

		</div>

	</div>

</section>

<?php get_footer(); ?>