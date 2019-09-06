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

        	<div class="col-md-10 col-lg-6">

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

<?php if( have_rows('service') ): ?>

<section class="services">

	<div class="container">

		<div class="row align-items-center justify-content-center">

			<div class="col-md-10 col-lg-8 text-center entry-content">

				<div class="section-title">Our Services</div>

				<div class="row justify-content-center">

					<?php while ( have_rows('service') ) : the_row(); 

						$post_object = get_sub_field('service_link');
						$img = get_sub_field('service_icon');

						if( $post_object ):
							$post = $post_object;
							setup_postdata( $post );
					?>

					<div class="col-lg-3">

						<a class="services-item" href="<?php the_permalink(); ?>">

							<img src="<?php echo $img['url']?>" alt="<?php echo $img['alt']?>"/>

							<span><?php the_title(); ?></span>

						</a>

					</div>

					<?php wp_reset_postdata(); endif; endwhile; ?>

				</div>

			</div>

		</div>

	</div>

</section>

<?php endif ?>

<section class="main-content">

	<div class="container">

		<div class="row align-items-center justify-content-center">

			<div class="col-md-11">

				<div class="row">

					<div class="col-md-6 text-center">	

						<a class="btn btn-2" href="/technology/">Technology</a>

					</div>

					<div class="col-md-6 text-center">

						<a class="btn btn-2" href="#">Blank</a>

					</div>

				</div>

			</div>

		</div>

	</div>

</section>

<?php get_footer(); ?>