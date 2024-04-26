<?php
    $args = array(
        'post_type' => 'product',
        'post_per_page' => 1,
    );
    $the_query = new WP_Query($args);
    // var_dump($the_query);
?>

<?php if( $the_query->have_posts() ): ?>
    <div class="row">
    <!-- LOOP START -->
    <?php while( $the_query->have_posts() ):
        $the_query->the_post();
    ?>

        <div class="col-3 product">
            <!-- Titel des Produkts ausgeben -->
            <?php // the_title( '<h2 class="color-dark">', '</h2>' ); ?>

            <h2 class="color-dark">
                <a href="<?php echo get_permalink() ?>">
                    <?php echo get_the_title(); ?>
                </a>
            </h2>
            
            
            <!-- Bild des Produkts ausgeben -->
            <?php echo get_the_post_thumbnail(); ?>
            
            <!-- Inhalt (Text-Editor) des Produkts ausgeben -->
            <?php the_content() ?>
            
            <!-- Preis des Produkts ausgeben -->
            <?php $product = wc_get_product( get_the_ID() ); ?>
            <p><?php echo $product->get_price_html(); ?></p>


            <?php 
                // var_dump($product);
            ?>
        </div>

    <?php endwhile; ?>
    <!-- LOOP STOP -->
        
    </div> <!-- end .row -->
    <?php wp_reset_postdata() ?>
<?php else: ?>
    <p>leider keine Produkte verfügbar!</p>
<?php endif; ?>













<div class="my-3 p-3 bg-body rounded shadow-sm">
    <h6 class="border-bottom pb-2 mb-0">Recent updates</h6>
    <div class="d-flex text-body-secondary pt-3">
      <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"/><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>
      <p class="pb-3 mb-0 small lh-sm border-bottom">
        <strong class="d-block text-gray-dark">@username</strong>
        Some representative placeholder content, with some information about this user. Imagine this being some sort of status update, perhaps?
      </p>
    </div>
    <div class="d-flex text-body-secondary pt-3">
      <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#e83e8c"/><text x="50%" y="50%" fill="#e83e8c" dy=".3em">32x32</text></svg>
      <p class="pb-3 mb-0 small lh-sm border-bottom">
        <strong class="d-block text-gray-dark">@username</strong>
        Some more representative placeholder content, related to this other user. Another status update, perhaps.
      </p>
    </div>
    <div class="d-flex text-body-secondary pt-3">
      <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#6f42c1"/><text x="50%" y="50%" fill="#6f42c1" dy=".3em">32x32</text></svg>
      <p class="pb-3 mb-0 small lh-sm border-bottom">
        <strong class="d-block text-gray-dark">@username</strong>
        This user also gets some representative placeholder content. Maybe they did something interesting, and you really want to highlight this in the recent updates.
      </p>
    </div>
    <small class="d-block text-end mt-3">
      <a href="#">All updates</a>
    </small>
  </div>