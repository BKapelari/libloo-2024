<?php
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

        <h2 class="color-dark">
            <a href="<?php echo get_permalink() ?>">
                <?php echo get_the_title(); ?>
            </a>
        </h2>

	</header><!-- .entry-header -->

	<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

	<div class="entry-content">

		<?php
		    the_content();
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">


	</footer><!-- .entry-footer -->

</article>