<section class="careers-work-with-us">
	<div class="open-positions">
		<div class="ui center aligned container">
			<div class="ui centered grid">
				<div class="sixteen wide mobile eleven wide computer column">
					<?php
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					$args = array( 'post_type' => 'position', 'posts_per_page' => 10, 'paged' => $paged );
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();
					?>
					<div class="ui vertical segment">
						<div class="ui equal width grid">
							<div class="column"><h3 class="ui header"><?php the_title(); ?></h3></div>
							<div class="column"><a href="<?php echo get_permalink(get_page_by_title('Contact')); ?>" class="right floated ui button blue apply">apply</a></div>
						</div>
						<div class="ui two column grid">
							<div class="sixteen wide mobile fourteen wide column">
								<div class="left floated content description">
									<div class="excerpt">
										<?php the_excerpt(); ?>
									</div>
									<div class="more">
										<?php the_content(); ?>
									</div>
									<div class="readmore link"><a href="">READ MORE</a></div>
								</div>
							</div>
						</div>
					</div><!--segment end-->
					<?php endwhile; ?>
					<?php wp_reset_postdata();?>
				</div>
			</div>
		</div>
	</div>
</section>