<section class="reviews" id="reviews">
        <div class="container">
            <h2 class="title-primary">What Our Customers Say About Us on GOOGLE</h2>
            <div class="grid grid-cols-4 lg:grid-cols-2 md:grid-cols-1 gap-6 animation-row">
                <?php
                    query_posts(array (  
                    'post_type' => 'reviews'
                    )); 
                    while (have_posts()) : the_post();
                ?>
                <div class="bg-white border border-light-gray p-4 rounded-md show-animation">
                    <div class="flex flex-row items-center gap-2">
                        <div class="w-fit"><img src="<?= CFS()->get('reviews-img') ?>" alt=""></div>
                        <div>
                            <h6><?= CFS()->get('reviews-name') ?></h6>
                            <div class="flex flex-row gap-1 mt-1">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/star-icon.png" alt="">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/star-icon.png" alt="">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/star-icon.png" alt="">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/star-icon.png" alt="">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/star-icon.png" alt="">
                            </div>
                        </div>
                    </div>
                    <p class="font-normal mt-2"><?= CFS()->get('reviews-desc') ?></p>
                    <p class="text-blue-400 mt-6 font-normal"><?= CFS()->get('reviews-date') ?></p>
                </div>
                <?php
                    endwhile;
                    wp_reset_query();
                ?>
            </div>
            <a href="" class="text-red underline w-full mt-8"><p class="text-red text-center w-full" >Read More Customer Reviews</p></a>

        </div>
    </section>