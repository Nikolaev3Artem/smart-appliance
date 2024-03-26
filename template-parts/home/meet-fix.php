<!-- <section class="meet-fix bg-dark-blue py-10 w-full">
        <div class="container flex flex-row md:flex-col gap-6">
            <div class="w-full flex flex-col justify-between">
                <h2 class="title-secondary">Meet Fix Appliances CA™</h2>

                <h5 class="mt-8 text-white">Household appliances are one of the outstanding achievements of the last century, but they are changing every day and becoming even “cleverer” than we can imagine. You don’t pay much attention when they work properly. However, you throw up your hands nervously and try to find an appliance repair company. You need express appliance repair to save you time and energy. Give us a call to receive immediate help from our best technicians.
                </h5>
                <h5 class="mt-4 text-white">FIX Appliances CA has appliance repair experts on standby who can offer a licensed all brand appliance repair same day service of any gas and electrical appliances, including refrigerators, dishwashers, washing machines, dryers, stoves and ovens, cooktops and ranges, range hoods and microwaves, and more either residential or commercial ones. When you contact FIX Appliances CA for your home appliance repairs near me, the service call is FREE with any repair!
                </h5>
                <a href="#" class="button-primary w-fit mt-8 flex items-center"><div><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/icon Work.png" alt="" class="w-[25px] h-[25px] me-3"></div>Request Service</a>

            </div>
            <div class="w-full">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/content/meet-a-fix.png" alt="" class="w-[628px] h-[537px] object-cover object-center">
            </div>
        </div>
    </section> -->

    <section class="meet-fix bg-dark-blue py-10 w-full">
        <div class="container flex flex-row md:flex-col gap-6">
            <div class="w-full flex flex-col justify-between">
                <h2 class="title-secondary"><?= CFS()->get('meet-fix-title') ?></h2>
                
                <?= CFS()->get('meet-fix-desc') ?>
                <a href="#" class="button-primary w-fit mt-8 flex items-center"><div><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/icon Work.png" alt="" class="w-[25px] h-[25px] me-3"></div>Request Service</a>
            </div>
            <div class="w-full">
                <img src="<?= CFS()->get('meet-fix-img') ?>" alt="" class="w-[628px] h-[537px] object-cover object-center">
            </div>
        </div>
    </section>