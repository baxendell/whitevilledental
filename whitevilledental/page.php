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

        	<div class="col-xl-10">

			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post() ?>

                    <div class="pattern-content-text">

	                    <h1 class="page-title"><?php h1_title(); ?></h1>

						<?php the_content(); ?>

					</div>

				<?php endwhile; ?>

			<?php endif; ?>

			</div>

        </div>

    </div>

</section>

<?php endif ?>

<?php if(is_page('ways-to-pay')){
	get_template_part('partials/insurance');
}
?>

<?php get_template_part( 'partials/services' ); ?>

<?php if(is_page('services')){
	get_template_part('partials/insurance');
}
?>

<?php get_footer(); ?>