<sections class="our-team bg-dark-blue w-full py-20">
        <div class="container">
            <h1 class="title-secondary">MEET OUR LEADERSHIP TEAM</h1>
            <div class="flex flex-row lg:flex-col lg:gap-6 gap-[140px] mt-8">
            <?php
                query_posts(array (  
                'post_type' => 'our-team'
                )); 
                while (have_posts()) : the_post();
            ?>
                <div class="relative w-full">
                    <div class="absolute top-[50px] left-[-100px] w-[200px] h-[200px]">
                        <img src="<?= CFS()->get('our-team-img') ?>" alt="" class="w-full h-full rounded-full">
                    </div>
                    <div class="bg-white p-6 ps-[108px] flex flex-col max-w-[500px]">
                        <h4 class="font-bold"><?= CFS()->get('our-team-name') ?></h4>
                        <p class="text-red mt-2"><?= CFS()->get('our-team-position') ?></p>
                        <p class="font-normal mt-4"><?= CFS()->get('our-team-desc') ?></p>
                    </div>
                </div>
            <?php
                endwhile;
                wp_reset_query();
            ?>
            </div>
        </div>
    </sections>