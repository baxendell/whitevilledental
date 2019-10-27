<?php if( have_rows('service', 41) ): 

$pagename = get_query_var('pagename');  
if ( !$pagename && $id > 0 ) {  
    // If a static page is set as the front page, $pagename will not be set. Retrieve it from the queried object  
    $post = $wp_query->get_queried_object();  
    $pagename = $post->post_name;  
}

?>

<section class="services">

	<div class="container">

		<div class="row align-items-center justify-content-center">

			<div class="col text-center entry-content">

				<div class="section-title">Our Services</div>

				<div class="row justify-content-center">

					<?php while ( have_rows('service', 41) ) : the_row(); 

						$post_object = get_sub_field('service_link', 41);
						$img = get_sub_field('service_icon', 41);

						if( $post_object ):
							$post = $post_object;
							setup_postdata( $post );
					?>

					<div class="col-md-2">

						<a class="services-item <?php if ($pagename == $post->post_name) echo 'active'; ?> service-<?php echo $post->post_name ?>" href="<?php the_permalink(); ?>">

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