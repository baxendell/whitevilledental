<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
    <meta charset="<?php echo esc_attr( get_bloginfo( 'charset' ) ) ?>">
    <title><?php wp_title( '-', true, 'right' );
		echo esc_html( get_bloginfo( 'name' ) ) ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=2"/>
    <meta name="format-detection" content="telephone=no">
    <link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ) ?>">
	<?php get_template_part( 'partials/favicons' ) ?>

    <link href="#" rel="publisher"/>
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-124889900-3"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-124889900-3');
    </script>


    <?php wp_head(); ?>

	<?php
	$post_slug = $post->post_name;
	$page_slug = 'page-' . $post_slug;
	$post_id   = 'post-id-' . $post->ID;
	$classes   = array( $page_slug, $post_id );
	?>
    <!-- Google Tag Manager -->

    <?php if(is_home() || is_single() || is_archive()) {
        $banner_image = get_field('banner_image', 267);
    } else {
        $banner_image = get_field('banner_image');
    }
    ?>
</head>
<body id="top-page" <?php body_class( $classes ) ?>>
<a href="#main-wrapper" class="skiplink" tabindex="-1">Skip Navigation</a>
<!-- Google Tag Manager (noscript) -->

<div class="header" style="background-image: url('<?php echo $banner_image;?>')">

    <div class="top-header-mobile d-block d-md-none">

        <div class="container">

            <nav id="nav-mobile" class="navbar">

                <a class="navbar-brand site-logo" href="/" itemprop="url">
                    <img itemprop="logo" class="logo img-fluid" src="<?php echo esc_url( get_stylesheet_directory_uri() ) ?>/assets/images/whiteville-dental-logo.svg" alt="logo">
                </a>

                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

				<?php
				wp_nav_menu(
					array(
						'container'       => 'div',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarsExample09',
						'theme_location'  => 'mobile-menu',
						'menu_class'      => 'navbar-nav mobile-menu',
						'walker'          => new Walker_Nav_Primary(),
					)
				);
				?>
            </nav>
        </div>

    </div>

    <div class="top-header-desktop d-none d-md-block fixed-top">

        <div class="container">

            <div class="row align-items-center">

                <div class="site-logo-wrap text-center col-lg-3" itemscope itemtype="http://schema.org/Organization">
                    <a class="site-logo" href="/" itemprop="url">
                        <img itemprop="logo" class="logo img-fluid" src="<?php echo esc_url( get_stylesheet_directory_uri() ) ?>/assets/images/whiteville-dental-logo.svg" alt="Whiteville NC Dentist">
                    </a>
                </div>

                <div class="col-lg-9 offset-xl-1 col-xl-8">

                    <div class="banner-buttons text-right">

                        <a class="btn btn-1" href="/contact/">Request an Appointment</a>

                        <a class="btn btn-1" href="tel:9103272248">Call: (910) 642-6500</a>

                    </div>
                
                    <nav id="nav-desktop" class="navbar navbar-expand-md d-none d-md-block">

                        <?php wp_nav_menu(
                            array(
                                'container'       => 'div',
                                'container_class' => 'menu-container',
                                'theme_location'  => 'header-menu',
                                'menu_class'      => 'navbar-nav header-menu',
                                'walker'          => new Walker_Nav_Primary(),
                            )
                        ) ?>

                    </nav>

                </div>

            </div>

        </div>

    </div>

    <?php if(!is_page_template('contact.php')){
        get_template_part('partials/hero');
        }  ?>

</div>



<?php
if ( ! is_front_page() ) {
	get_template_part( 'partials/breadcrumbs' );
}
?>

<div class="main-wrapper" id="main-wrapper">
