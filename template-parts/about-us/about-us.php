<section class="about-us">
        <div class="container mt-10">
            <div class="grid grid-cols-2 md:grid-cols-1 gap-6 animation-row">
                <?php 
                  $about_us_blocks = CFS()->get('about-us-blocks');
                  foreach($about_us_blocks as $about_us_block){
                ?>
                <div class="flex flex-col p-4 show-animation">
                    <div class="flex flex-row items-center">
                        <div>
                            <img src="<?= $about_us_block["about-us-block-img"] ?>" alt="">
                        </div>
                        <h3 class="font-bold lg:text-center w-full text-center"><?= $about_us_block["about-us-block-title"] ?></h3>
                    </div>
                    <?= $about_us_block["about-us-block-desc"] ?>
                </div>
                <?php 
                    };
                ?>
            </div>
        </div>
    </section>