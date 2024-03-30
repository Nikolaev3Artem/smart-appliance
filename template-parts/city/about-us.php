    <section class="about-us">
        <div class="container mt-10">
            <h2 class="title-primary">Why people choose Smart Appliances</h2>
            <div class="grid grid-cols-2 md:grid-cols-1 gap-6 animation-row">
                <?php 
                  $why_choose_smart_appliance_loop = CFS()->get('city-why-choose-smart-appliance-loop');
                  foreach($why_choose_smart_appliance_loop as $why_choose_smart_appliance){
                ?>
                <div class="flex flex-col p-4 show-animation">
                    <div class="flex flex-row items-center">
                        <div>
                            <img src="<?= $why_choose_smart_appliance["why-choose-smart-appliance-img"] ?>" alt="">
                        </div>
                        <h3 class="font-bold lg:text-center w-full text-center"><?= $why_choose_smart_appliance["why-choose-smart-appliance-title"] ?></h3>
                    </div>
                    <?= $why_choose_smart_appliance["why-choose-smart-appliance-desc"] ?>
                </div>
                <?php 
                    };
                ?>
            </div>
        </div>
    </section>