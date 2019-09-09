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

        	<div class="col-md-10 col-lg-8 col-xl-6">

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