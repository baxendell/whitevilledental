<?php
/**
 * Template Name: Contact
 *
 */
get_header();

$number           = get_field( 'site_phone_number', 'option' );
$formatted_number = preg_replace( '/(\W*)/', '', $number );;
?>

    <section class="main-content">

        <div class="container">

            <div class="row justify-content-center">

                <div class="entry-content col-12 col-lg-11 col-xl-8">
                    <h1 class="page-title text-center"><?php h1_title(); ?></h1>
                    <div class="contact-social-call row align-items-center">

                        <div class="col-sm-7">

                            <p>Call Now: <a href="tel:<?php echo $formatted_number; ?>"><?php echo $number; ?></a></p>

                        </div>

                        <div class="col-sm-5">

                            <ul class="social-icon-list justify-content-between">

								<?php if ( get_field( 'linkedin_link', 'option' ) ): ?>
                                    <li>
                                        <a href="<?php the_field( 'linkedin_link', 'option' ) ?>" target="_blank">
											<?php cws_get_svg( 'social-icons/icon-linkedin.svg' ); ?>
                                        </a>
                                    </li>
								<?php endif; ?>

								<?php if ( get_field( 'youtube_link', 'option' ) ): ?>
                                    <li>
                                        <a href="<?php the_field( 'youtube_link', 'option' ) ?>" target="_blank">
											<?php cws_get_svg( 'social-icons/icon-youtube.svg' ); ?>
                                        </a>
                                    </li>
								<?php endif; ?>

								<?php if ( get_field( 'facebook_link', 'option' ) ): ?>
                                    <li>
                                        <a href="<?php the_field( 'facebook_link', 'option' ) ?>" target="_blank">
											<?php cws_get_svg( 'social-icons/icon-facebook.svg' ); ?>
                                        </a>
                                    </li>
								<?php endif; ?>

								<?php if ( get_field( 'twitter_link', 'option' ) ): ?>
                                    <li>
                                        <a href="<?php the_field( 'twitter_link', 'option' ) ?>" target="_blank">
											<?php cws_get_svg( 'social-icons/icon-twitter.svg' ); ?>
                                        </a>
                                    </li>
								<?php endif ?>

								<?php if ( get_field( 'yelp_link', 'option' ) ): ?>
                                    <li>
                                        <a href="<?php the_field( 'yelp_link', 'option' ) ?>" target="_blank">
											<?php cws_get_svg( 'social-icons/icon-yelp.svg' ); ?>
                                        </a>
                                    </li>
								<?php endif ?>

								<?php if ( get_field( 'instagram_link', 'option' ) ): ?>
                                    <li>
                                        <a href="<?php the_field( 'instagram_link', 'option' ) ?>" target="_blank">
											<?php cws_get_svg( 'social-icons/icon-instagram.svg' ); ?>
                                        </a>
                                    </li>
								<?php endif ?>

                            </ul>

                        </div>

                    </div>
                </div>
            
            </div>

            <div class="row justify-content-center">

                <div class="col-xs-12 col-xl-8">
					<?php get_template_part( 'partials/form' ) ?>
                </div>

                <div class="col-item col-lg-4 mt-5">

                    <?php get_template_part( 'sidebars/parts/locations' ) ?>

                </div>

            </div>


        </div>

    </section>

<?php get_template_part( 'partials/testimonial-part' ); ?>
<?php get_footer() ?>