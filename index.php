<?php
defined( 'ABSPATH' ) || exit;

get_header();
?>
<div class="wrapper" id="index-wrapper">

	<div class="container" id="content" tabindex="-1">

		<div class="row">

			<main class="site-main" id="main">

				<?php if ( have_posts() ) : ?>
					<!-- Start the Loop. -->
					<?php while ( have_posts() ) : the_post(); ?>

			
						<?php get_template_part( 'template-parts/content' );?>

					<?php endwhile; ?>
				<?php else: ?>
                    <p>keine Posts vorhanden</p>
					
                <?php endif; ?>
			</main>

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #index-wrapper -->

<?php
get_footer();