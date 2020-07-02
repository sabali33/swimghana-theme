<?php 
    /**
     * Grid Style 1
     */
?>
<?php $product = wc_get_product(get_the_ID()); ?>
<div class="grid-item shadow-xl w-1/4 bg-white rounded-lg mr-8">
    <img src="" alt="" class="w-full h-2/3">
    <?php the_post_thumbnail('medium', [ 'class' => 'rounded']); ?>
    <div class="product-meta px-10 pb-10">
        <h2 class="product-title my-4 capitalize">
            
            <a href="<?php echo esc_url(get_permalink(get_the_ID())); ?>"><?php the_title() ?></a> 
        </h2>
        <div class="price text-brown-500">
            <?php echo  wc_price( esc_html( $product->get_regular_price() )); ?>
           
        </div>
        <?php if( $product->is_type('variable')): 
            $variations = $product->get_variation_attributes();
            ?>
            <fieldset class="relative inline-block">
                <select name="" class="appearance-none border px-4 py-2 text-sm pr-10">
                <option value="">Choose Color</option>
                    <?php foreach(current($variations) as $variation ): ?>
                        
                        <option value="<?php echo esc_attr($variation); ?>"><?php echo esc_html($variation); ?></option>
                        
                    <?php endforeach; ?>   
                </select>
                <i class="icon-angle-down absolute right-3 top-6"></i>
            </fieldset>
        <?php endif; ?>
        <button class="add-to-cart text-sm shadow uppercase px-4 py-2 bg-cyan rounded mt-4">
            add to cart
        </button>
    </div>
</div>