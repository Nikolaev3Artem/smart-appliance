<section class="faq bg-dark-blue py-20">
        <div class="container">
            <h2 class="title-secondary">Top Frequent Asked Questions</h2>
            <div class="faq-wrapper flex flex-col gap-2">
            <?php
                query_posts(array (  
                'post_type' => 'faq'
                )); 
                while (have_posts()) : the_post();
            ?>
                <div class="w-full flex flex-col">
                    <div class="faq-block flex justify-between w-full items-center">
                        <div class="flex flex-row items-center gap-4">
                            <div><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/FAQ Circle.png" alt=""></div>
                            <h3><?= CFS()->get('faq-title') ?></h3>
                        </div>
                        <div id="btn-open-service"><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/arrow.png" alt=""></div>
                    </div>
                    <div class="faq-dropdown-block" id="drop-down-block" style="display: none;">
                        <div class="flex flex-row items-end gap-2 h-fit">
                            <h5 class="font-normal mt-3"><?= CFS()->get('faq-answer') ?></h5>
                        </div>
                    </div>
                </div>
            <?php
                endwhile;
                wp_reset_query();
            ?>
            </div>
        </div>
    </section>