<?php
/**
 * Site map partial
 */
?>

<section class="main-content">

    <div class="container">

        <div class="row">

            <div class="content col-12">

                <h1 class="page-title"><?php h1_title() ?></h1>

                <div class="site-map-content">

                    <ul>
						<?php
						// Add pages you'd like to exclude in the exclude here
						wp_list_pages(
							array(
								'exclude'  => '',
								'title_li' => '',
							)
						);
						?>
                    </ul>

					<?php
					$team_args = array(
						'post_type'      => 'staff',
						'posts_per_page' => - 1,
					);

					$team_query = new WP_Query( $team_args );
					if ( $team_query->have_posts() ):
						?>
                        <ul>
							<?php while ( $team_query->have_posts() ): $team_query->the_post();	?>
                                <li><a href="<?php the_permalink() ?>"><?php the_title() ?></a></li>
							<?php endwhile ?>
                        </ul>
					<?php endif; ?>

                </div>

            </div>

        </div>

    </div>

</section>