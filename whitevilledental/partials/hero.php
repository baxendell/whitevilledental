<?php
/**
 * Hero Partial
 */
?>

<section class="hero">

    <div class="container">

        <div class="row align-items-center justify-content-md-center">
        	<?php if(get_field('banner_title')): ?>
            <div class="hero-title col-md-10 col-lg-5">

                <?php the_field('banner_title') ?>

            </div>
            <?php endif ?>
        </div>

    </div>

</section>






