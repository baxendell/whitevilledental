<?php
/**
 * CWS Custom Shortcodes
 */

/**
 * Map for content areas
 *
 * @add_shortcode
 *
 * @return get_template_part( 'content-map' ) partial
 */
function cws_form_output() {
	ob_start();
	?>
    <div class="banner-form-container form-block">
		<?php get_template_part( 'partials/form' ) ?>
    </div>
	<?php
	return ob_get_clean();
}

add_shortcode( 'cws_form', 'cws_form_output' );


/**
 * Download Form
 *
 * @add_shortcode
 *
 * @return get_template_part( 'content-map' ) partial
 */
function cws_download_form() {
	ob_start();
	?>
    <div class="banner-form-container form-block">
		<?php get_template_part( 'partials/downloadform' ) ?>
    </div>
	<?php
	return ob_get_clean();
}

add_shortcode( 'cws_download', 'cws_download_form' );

/**
 * Download Form
 *
 * @add_shortcode
 *
 * @return get_template_part( 'content-map' ) partial
 */
function cws_request_form() {
	ob_start();
	?>
    <div class="banner-form-container form-block">
		<?php get_template_part( 'partials/requestform' ) ?>
    </div>
	<?php
	return ob_get_clean();
}

add_shortcode( 'cws_request', 'cws_request_form' );


//Contact Button
function contact_btn() {
	return '<a href="/contact-us/" class="btn btn-std"><span>Tell Us About Your Case</span></a>';
}

add_shortcode( 'btn_contact', 'contact_btn' );

//Column

function cw_one_third( $atts, $content = null ) {
	return '<div class="col-md-4">' . do_shortcode( $content ) . '</div>';
}

add_shortcode( 'one_third', 'cw_one_third' );

function cw_one_half( $atts2, $content2 = null ) {
	return '<div class="col-md-6">' . do_shortcode( $content2 ) . '</div>';
}

add_shortcode( 'one_half', 'cw_one_half' );

