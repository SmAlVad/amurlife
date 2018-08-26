<?php get_header(); ?>

	<main>
		<?php the_post(); ?>
		<section>
			<?php the_post_thumbnail( "thumbnail" ); ?>
			<h2><?php the_title(); ?></h2>
			<?php the_excerpt(); ?>
		</section>
	</main>

<?php get_footer(); ?>