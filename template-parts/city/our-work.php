    <section class="bg-dark-blue">
        <div class="container py-20 animation-row">
            <h2 class="title-secondary">Some Examples of Our Work in Toronto</h2>
            <div class="grid grid-cols-3 lg:grid-cols-2 md:grid-cols-1 gap-6 mt-8 ">
                <?php 
                  $our_works = CFS()->get('city-our-works-loop');
                  foreach($our_works as $our_work){
                ?>
                <div class="w-full show-animation">
                    <div class="w-full"><img src="<?= $our_work["city-our-works-img"] ?>" alt="" class="w-full h-full"></div>
                    <div class="p-6 bg-white">
                        <p class="font-normal"><?= $our_work["city-our-works-desc"] ?></p>
                    </div>
                </div>
                <?php 
                    };
                ?>
            </div>
        </div>
    </section>