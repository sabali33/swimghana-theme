<?php 
    /**
     * Displays featured products
     */
?>

<?php
    $featured_products = new WP_Query([
        'post_type' => 'product',
        'posts_per_page' => 4,
        'post__in' => wc_get_featured_product_ids()
    ]);

    if($featured_products->have_posts()):
        while($featured_products->have_posts()):
            $featured_products->the_post();
            get_template_part('/template-parts/listing/grid', 1);
        endwhile;
    endif;
    wp_reset_query(  );