<?php
    $products = new WP_Query([
        'post_type' => 'product',
        'posts_per_page' => 4,
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

            if( !$products->current_post || !$products->current_post%2 ){
                 echo '<div class="row flex">';
            }
           
            get_template_part('/template-parts/listing/list', '');

            if( $products->current_post > 0 && $products->current_post%2 ){
                echo "</div>";
                if($products->current_post+1 < $products->post_count ){
                    echo '<div class="row flex mt-10">';
                }
            }
            
        endwhile;

        wp_reset_query();
    }else{
        echo __("No posts yet", 'swimghana');
    }
    