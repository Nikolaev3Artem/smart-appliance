<section class="we-offer bg-light-gray w-full py-20 mt-0">
        <div class="container">
            <h2 class="title-primary"><?= CFS()->get('service-range-block-title') ?></h2>
            <?= CFS()->get('service-range-block-desc') ?>
            <div class="repair-service-wrapper lg:grid-cols-2 md:grid-cols-1 animation-row mt-8">
            <?php
                query_posts(array (  
                'post_type' => 'service-range'
                )); 
                while (have_posts()) : the_post();
            ?>
                <div class="show-animation">
                    <h4 class="w-full text-center"><?= CFS()->get('service-range-title') ?></h4>
                    <p><?= CFS()->get('service-range-desc') ?></p>
                    <a href="/request-service/" class="text-red text-end w-full">REQUEST SERVICE</a>
                </div>
            <?php
                endwhile;
                wp_reset_query();
            ?>
            </div>        
        </div>
    </section>