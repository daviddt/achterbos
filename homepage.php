<?php /* Template Name: Homepage */ get_header(); ?>
	

	<!-- section -->
	<section class="homepage main-content clear" role="main">


		<div class="mast-head">

			<div class="extend">

				<?php the_post_thumbnail(); ?>

				<div class="inner">

					<h1><?php the_title(); ?></h1>
					
				</div>

				<div class="expand content">
					<p>Jachthaven Achterbos is gelegen aan de Vinkeveense plassen, één van de mooiste watersportgebieden van Nederland. Wij, Bob en Cees, twee watersportfanaten, hebben de jachthaven in 2004 overgenomen. Op onze jachthaven zijn verscheidene activiteiten ontstaan waarbij we in staat zijn geweest om de gemoedelijkheid van een kleine jachthaven te bewaren. </p>
				</div>
				
			</div>

			
		</div>

		<?php $loop = new WP_Query( array( 'post_type' => 'homepage', 'posts_per_page' => 3 ) ); ?>
		<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

			<div class="post-content">

				<div class="extend_right"></div>

				<div class="extend">

					<div class="inner content">

						<article>
							<h1><?php the_title(); ?></h1>
							<?php the_content(); ?>
						</article>


						<?php the_post_thumbnail(); ?>

						
					</div>


					
				</div>

			</div>


		<?php endwhile; ?>

	
	</section>
	<!-- /section -->
<?php get_sidebar(); ?>


<?php get_footer(); ?>