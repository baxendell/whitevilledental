<?php //get_template_part( 'partials/awards' ); ?>

<div class="footer">

    <div class="container">

        <div class="row justify-content-center align-items-center">

            <div class="col-lg-4 text-center">

                <a href="https://patientviewer.com/WebFormsGWT/GWT/WebForms/WebForms.html?DOID=43509&WSDID=34489&NFID=34490&NFID=34491&ReturnURL=https%3awhitevilledentist.com" class="footer-forms">Patient Forms</a>

            </div>

            <div class="col-lg-4 text-center d-none d-lg-block">

                <ul class="social-icon-list">

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

                <a href="#" target="_blank">Omnistar Marketing & Design</a>

            </div>

            <div class="col-lg-4">

                <div class="inner-col-wrap" itemtype="http://schema.org/Dentist">

                    <div itemscope="" itemtype="http://schema.org/PostalAddress">

                        <div class="client-name" itemprop="name">Whiteville Family & Cosmetic Dentistry</div>

                        <div class="address">
                            <p itemprop="streetAddress">904 Spivey Rd<br/>
                            <span itemprop="addressLocality">Whiteville</span>, <span itemprop="addressRegion">NC</span> <span itemprop="postalCode">28472</span>
                            <br/>
                            <span class="phone" itemprop="telephone">(910) 642-6500</span></p>
                        </div>

                    </div>

                </div>

                <a class="privacy" href="/notice-of-privacy-practices/">Privacy Policy</a>

            </div>

            <div class="col-lg-4 text-center d-lg-none">

                <ul class="social-icon-list">

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

                <a href="#" target="_blank">Omnistar Marketing & Design</a>

            </div>

        </div>

    </div>

</div>

<?php wp_footer(); ?>

</div><!--end of .main-wrapper-->

</body>

</html>