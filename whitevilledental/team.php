<?php
/**
 * Template Name: Team
 */
get_header();

$args = array(
	'post_type' => 'staff',
    'orderby' => 'menu_order',
    'order' => 'ASC',
    'posts_per_page' => -1
);

$staff = new WP_Query( $args );
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

<?php if($staff->have_posts()): ?>
<section class="main-content">

    <div class="container">

        <div class="row entry-content">

            <?php while($staff->have_posts()): $staff->the_post(); ?>

            <div class="col-12 staff">

                <?php if(has_post_thumbnail()): ?>

                <div class="staff-image image-holder">

                    <?php the_post_thumbnail('medium') ?>

                </div>

                <?php endif ?>

                <?php the_content() ?>

            </div>

            <?php endwhile; wp_reset_postdata(); ?>

        </div>

    </div>

</section>

<?php endif ?>

<?php get_template_part('partials/services') ?>

<?php get_footer(); ?>