<?php 
// Adjust the amount of rows in the grid
$grid_columns = 4; ?>

<?php if( 0 === ( $wp_query->current_post  )  % $grid_columns ): ?>

    <div class="row archive-grid" data-equalizer> <!--Begin Row:--> 

<?php endif; ?> 

		<!--Item: -->
		<div id="home-grid" class="small-12 large-3 medium-4 columns panel">
			
			<div class="image-wrapper overlay-fade-in">
				<?php the_post_thumbnail('square'); ?>
				
				<a href="<?php the_permalink(); ?>" />
					<div class="image-overlay-content">
						<button class="readmore hollow round large button">read more</button>
					</div>
				</a>
			</div>
			<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
			<small><?php get_template_part( 'parts/grid', 'byline' ); ?></small>
		</div>

<?php if( 0 === ( $wp_query->current_post + 1 )  % $grid_columns ||  ( $wp_query->current_post + 1 ) ===  $wp_query->post_count ): ?>

   </div>  <!--End Row: --> 

<?php endif; ?>

