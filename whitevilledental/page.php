<?php
/**
 * Page Template
 *
 * Page action methods found in inc/set-vars-hooks.php
 */
get_header();
?>

<?php if ( is_page( 'site-map' ) ) : ?>
	<?php get_template_part( 'partials/sitemap' ) ?>
<?php else : ?>
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

<?php endif ?>

<?php get_template_part( 'partials/services' ); ?>

<?php get_footer(); ?>