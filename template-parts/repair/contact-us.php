    <section section class="contact-us bg-dark-blue py-20">
        <div class="container">
            <h2 class="title-secondary">Contact Us For Refrigerator Repair Services</h2>
            <div class="flex flex-row md:flex-col gap-14 mt-8">
                <a href="tel://<?= CFS()->get('contacts-phone-number', 99) ?>"><h2 class="title-secondary">CALL: <span class="text-red"><?= CFS()->get('contacts-phone-number', 99) ?></span></h2></a>
                <a href="/request-service/" class="button-primary flex items-center"><div><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/icon Work.png" alt="" class="w-[25px] h-[25px] me-3"></div>Request Service</a>
            </div>
        </div>  
    </section>