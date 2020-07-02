<?php
    /**
     * List Style
     */
?>
<?php $product = wc_get_product(get_the_ID()); ?>
<article class="w-1/2 flex mr-10 shadow p-10">
    <?php the_post_thumbnail('medium', ['class' => "w-2/5 mr-6"]); ?>
    
    <div class="product-meta w-3/5">
        <h2 class="product-title font-bold text-xl">
            <a href="<?php echo esc_url(get_permalink(get_the_ID()));  ?>">
                <?php the_title(); ?>
            </a>
            
        </h2>
        <div class="description text-sm text-gray-500">
            <p> <?php the_excerpt("more", '...')?>
            </p>
            <?php if( $product->is_type('variable')): 
            $variations = $product->get_variation_attributes();
            ?>
            <fieldset class="relative inline-block mt-4">
                <select name="" class="appearance-none border px-4 py-2 text-sm pr-10">
                <option value="">Choose Color</option>
                    <?php foreach(current($variations) as $variation ): ?>
                        
                        <option value="<?php echo esc_attr($variation); ?>"><?php echo esc_html($variation); ?></option>
                        
                    <?php endforeach; ?>   
                </select>
                <i class="icon-angle-down absolute right-3 top-6"></i>
            </fieldset>
        <?php endif; ?>
            <div class="flex mt-4 justify-around items-center">
                <span class="price text-lg text-brown-500 font-bold">20ghc </span>
                <button class="px-4 py-2 border border-gray-500 rounded">Add to Cart</button>  
            </div>
        </div>
    </div>
</article>