<?php

/**
 * Template Name: Home
 */
get_header();
?>

    
<section class="py-10 bg-gray-200">
    <div class="container mx-auto border border-gray-400 rounded">
        <ul class="categories flex justify-between items-center">
            <li class="hover:bg-cyan bg-gray-400 w-1/4 p-5">
                <a href="#" class="icon-big transition transition-duration ease-in icon-cap w-full h-full inline-block">Caps</a>  
            </li>
            <li class="hover:bg-cyan bg-gray-400 w-1/4 p-5">
                <a href="#" class="icon-big transition transition-duration ease-in icon-goggles w-full h-full inline-block">Goggles</a>
            </li>
            <li class="hover:bg-cyan bg-gray-400 w-1/4 p-5">
                <a href="#" class="icon-big transition transition-duration ease-in icon-trunk w-full h-full inline-block">
                Swimwear</a>
            </li>
            <li class="hover:bg-cyan bg-gray-400 w-1/4 p-5">
                <a href="#" class="icon-big transition transition-duration ease-in icon-pull-buoy w-full h-full inline-block">trainers</a>
            </li>
        </ul>
    </div>
    
</section>
<section class="py-10 bg-gray-500">
    <div class="container mx-auto">
        <h3 class="goggles text-center mt-4 mb-10 text-3xl font-bold ">
            <i class="icon icon-goggles"></i>
            <span class="highlighter relative">
               Goggles 
            </span>
            
        </h3>
        <div class="grid-list flex justify-between">
            <?php get_template_part( '/template-parts/home/featured', 'products' ); ?>
        </div>
    </div>
    
</section>
<section class="py-10 bg-gray-900 relative">
    <div class="container mx-auto">
        <h3 class="caps text-center mt-4 mb-10 font-heading text-gray-200 text-3xl font-bold">
            <i class="icon  icon-cap"></i>
            <span class="highlighter relative">
                Caps
            </span>
            
        </h3>
        <div class="grid-list flex justify-between items-center">
        <?php 
            //Swimghana::part_load('/home/highlight', 'grid-2', [] ); 
            get_template_part('/template-parts/home/product', 'highlight'); 
        ?>
            
        </div>
        <div class="more-caps mt-10 text-center">
            <a href="<?php echo esc_url( get_term_link('uncategorized', 'product_cat') ); ?>" class="icon-arrow-right-double text-cyan uppercase"> 
                <?php echo _e('more', 'swimghana'); ?> 
            </a>
        </div>
        <span class="absolute right-0 icon-top-path svg-path-top"></span>
    </div>  
</section>
<section class="py-10 bg-white relative mb-40">
    <div class="container mx-auto">
        
        <h3 class="caps text-center mt-4 mb-10 font-heading">
            <i class="icon-pull-buoy text-2xl icon-mo"></i>
            Training kids
        </h3>
        <div class="training-kits">
            
                <?php 
                Swimghana::load_part('/home/product', 'list', []);
                ?>
               
            <span class="absolute left-0 icon-bottom-path svg-path-bottom"></span>
        </div>
    </div>
</section>
<section class="py-10 bg-gray-200 contact">
    <div class="container mx-auto">
        <h3 class="text-center mt-4 mb-10 font-heading text-3xl font-bold">
            <i class="icon-phone"></i>
            <?php echo _e('Contact', 'swimghana'); ?> 
        </h3>
        <div class="map-preview">
            load map
        </div>
        <div class="contact-details mt-10 flex justify-between">
            <div class="">
                <ul class="media-accounts"> 
                    <li class="mb-3">
                    <a href="#" class="icon-facebook w-4"></a>
                    </li>
                    <li class="mb-3">
                    <a href="#" class="icon-twitter w-4"></a>
                    </li>
                </ul>
            </div>
            <div class="">
                <ul class="contact-numbers">
                    <li class="mb-3">
                        <span class="text-gray-400 text-base">Accra: </span>
                        <span class="ml-5"> 0246557767</span>
                    </li>
                    <li class="mb-3">
                        <span class="text-gray-400 text-base">Kumasi:  </span>
                        <span class="ml-5"> 0246557767</span>
                    </li>
                    <li class="mb-3">
                        <span class="text-gray-400 text-base">Tamale: </span>
                        <span class="ml-5">0246557767 </span>
                    </li>
                    <li class="mb-3">
                        <span class="text-gray-400 text-base">Takoradi: </span>
                        <span class="ml-5">0246557767</span>
                    </li>
                </ul>
            </div>
            <div class="">  
                <a href="#" class="px-4 py-2 bg-cyan text-white rounded">Send us a message </a>
            </div>
        </div>
    </div>
</section>
<section class="subscribe py-20 bg-gray-400 relative">
    <div class="container mx-auto"> 
        <h3 class="inline-block mr-12 font-heading text-2xl">Subscribe</h3>
        <span class="icon-longline w-1\2"> </span>
        <form action="" class="flex justify-between items-center mt-12">
            <div class="w-2/3 flex">
                <fieldset class="relative w-1/2 mr-10">
                    <input type="email" name="email" id="email" class="inline-block leading-10 pl-4 pt-3 rounded mr-10 transition ease-in duration-300 shadow-md w-full" placeholder="email">
                    <label for="email" class="absolute top-0 hover:text-xs opacity-0 invisible text-gray-900">Email</label>
                </fieldset>
                <fieldset class="relative w-1/2">
                    <input type="text" name="full_name" id="full-name" class="inline-block leading-10 pl-4 pt-3 rounded transition focus:h-12 ease-in duration-300 shadow-md w-full" placeholder="Name">
                    <label for="full-name" class="absolute top-0 focus:text-xs opacity-0 invisible text-gray-900">Name</label>
                </fieldset>
                
            </div>
            <div class="w-1/3 text-center">
                <button class="px-4 py-2 border rounded capitalize">Subscribe</button>
            </div>
            
        </form>
        <span class="icon-water-curve absolute right-0 translate-y-20 water-curve bottom-0"></span>
    </div>
</section>
<footer class="bg-gray-500 pt-12">
    <div class="container mx-auto">
        <div class="upper flex justify-between">
            <section class="w-1/3 mr-10">
                <img src="#logo" alt="SwimGhana">
                <p class="about-text mt-4 text-gray-900 leading-6">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eligendi earum, praesentium dicta consequatur vel excepturi ex. Nulla earum voluptas animi ea autem eaque consectetur illo nostrum maiores, inventore quidem exercitationem.
                </p>
            </section>
            <section class="w-1/3 mr-10">
                <h3 class="font-heading text-xl font-bold text-gray-900 mb-8">Disclaimer resources</h3>
                <ul class="footer-menu">
                    <li>
                        <a href="#" class="text-cyan">Privacy</a>   
                    </li>
                    <li>
                        <a href="#" class="text-cyan">Terms and conditions</a> 
                    </li>
                    <li>
                        <a href="#" class="text-cyan">Support</a> 
                    </li>
                    <li>
                        <a href="#" class="text-cyan">Refund</a> 
                    </li>
                </ul>
            </section>
            <section class="w-1/3">
                <h3 class="font-heading text-xl bold text-gray-900 mb-8 capitalize font-bold">Blog</h3>
                <ul class="footer-menu">
                    <li>
                        <a href="#" class="text-cyan"></a>   
                    </li>
                    <li>
                        <a href="#" class="text-cyan">Terms and conditions</a> 
                    </li>
                    <li>
                        <a href="#" class="text-cyan">Support</a> 
                    </li>
                    <li>
                        <a href="#" class="text-cyan">Refund</a> 
                    </li>
                </ul>
            </section>
        </div>
        
    </div>
    <div class="lower mt-10 bg-gray-900">
        <div class="flex justify-between container mx-auto items-center text-base text-gray-200 p-4">
            <span class="icon-copyright"> Zimbel Ventures 2020</span>
        <span class="icon icon-angle-up p-2 text-cyan">
            <a href="#">Top</a>
        </span>
        </div>
        
    </div>
</footer>
<?php get_footer() ?>