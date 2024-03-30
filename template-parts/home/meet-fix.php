    <section class="meet-fix bg-dark-blue py-10 w-full">
        <div class="container flex flex-row md:flex-col gap-6">
            <div class="w-full flex flex-col justify-between">
                <h2 class="title-secondary"><?= CFS()->get('meet-fix-title') ?></h2>
                
                <?= CFS()->get('meet-fix-desc') ?>
                <a href="/request-service/" class="button-primary w-fit mt-8 flex items-center"><div><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/icon Work.png" alt="" class="w-[25px] h-[25px] me-3"></div>Request Service</a>
            </div>
            <div class="w-full">
                <img src="<?= CFS()->get('meet-fix-img') ?>" alt="" class="w-[628px] h-[537px] object-cover object-center">
            </div>
        </div>
    </section>