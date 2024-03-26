    <section class="professional-appliance">
        <div class="container">
            <h2 class="title-primary">Professional Appliance Services We Provide</h2>
            <h6 class="mb-8">Select which appliance needs service and repair:</h6>
            <div class="professional-appliance-card-wrapper">
            <?php
                query_posts(array (  
                'post_type' => 'Repair'
                )); 
                while (have_posts()) : the_post();
            ?>
                <div class="professional-appliance-card">
                    <div><img src="<?= CFS()->get('main-img') ?>" alt=""></div>
                    <a href="<?php the_permalink() ?>" class="button-primary h-[68px] w-full flex items-center justify-center text-center mt-2"><?= CFS()->get('title') ?></a>
                </div>
            <?php
                endwhile;
                wp_reset_query();
            ?>
            </div>
        </div>
    </section>