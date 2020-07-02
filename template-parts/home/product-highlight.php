<?php
    /**
     * Load highlighted products
     */
?>

<?php
    $products = new WP_Query([
        'post_type' => 'product',
        'posts_per_page' => 2,
        // 'tax_query' => [
        //     [
        //         'taxonomy' => 'product_cat',
        //         'term' => get_post_meta(get_the_ID(), '_swimghana_product_cat', true),
        //         'field' => 'id'
        //     ]
        // ]
    ]);

    if( $products->have_posts() ){
        while( $products->have_posts()): 
            $products->the_post();
            get_template_part('/template-parts/listing/grid', 2);
        endwhile;

        wp_reset_query();
    }else{
        echo __("No posts yet", 'swimghana');
    }
    