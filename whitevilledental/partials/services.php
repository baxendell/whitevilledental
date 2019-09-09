<?php if( have_rows('service', 41) ): ?>

<section class="services">

	<div class="container">

		<div class="row align-items-center justify-content-center">

			<div class="col-lg-10 col-xl-8 text-center entry-content">

				<div class="section-title">Our Services</div>

				<div class="row justify-content-center">

					<?php while ( have_rows('service', 41) ) : the_row(); 

						$post_object = get_sub_field('service_link', 41);
						$img = get_sub_field('service_icon', 41);

						if( $post_object ):
							$post = $post_object;
							setup_postdata( $post );
					?>

					<div class="col-6 col-md-3">

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