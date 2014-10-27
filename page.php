<?php get_header(); ?>

<section class="row">
	<div class="small-12 columns text-center">
		<div class="leader">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<p><?php the_content(); ?></p>

			<?php endwhile; else : ?>

				<p><?php _e( 'Sorry, no posts matched your criteria.', 'tth-portfolio' ); ?></p>

			<?php endif; ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>