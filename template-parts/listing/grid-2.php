<?php 
    /**
     * Grid Style 2
     */
?>
<?php $product = wc_get_product(get_the_ID()); ?>
<div class="grid-item shadow-xl w-1/2 bg-white rounded-lg mr-8 p-10 text-center">
    <img src="" alt="" class="w-full h-2/3">
    <?php the_post_thumbnail('large', [ 'class' => 'rounded']); ?>
    
    <h2 class="product-title my-4 capitalize">
        <a href="<?php echo esc_url(get_permalink(get_the_ID())); ?>" title="<?php the_title_attribute([]); ?>">
            <?php the_title() ?>
        </a> 
    </h2>
    <div class="price text-brown-500 mb-4">
        <?php echo  wc_price( esc_html( $product->get_regular_price() )); ?>
        
    </div>
    <?php if( $product->is_type('variable')): $variations = []; ?>
        <!-- <div class="variation-box my-4">
            <select name="variations" id="variation-<?php echo esc_attr(get_the_ID()) ?>" class="appearance-none w-40 border border-gray-500 px-4 py-1">
            <?php foreach($variations as $variation ): ?>
                <option value="blue"><?php var_dump($variation); ?></option>
                <option value="white">White</option>
                <option value="green">Green</option>
            <?php endforeach; ?>
            </select>
            <i class="icon-angle-down -ml-8"></i>
        </div> -->
    <?php endif; ?>
    <div>
        <button class="add-to-cart text-sm uppercase px-4 py-2 bg-cyan shadow rounded mr-4">
        add to cart
        </button> 
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
    </div>
    
   
</div>