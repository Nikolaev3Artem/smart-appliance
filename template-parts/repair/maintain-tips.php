    <section class="faq py-20">
        <div class="container">
            <h2 class="title-primary">Refrigerator Maintenance Tips</h2>
            <div class="faq-wrapper flex flex-col gap-2">
                <?php 
                  $repair_tips = CFS()->get('repair-tips-loop');
                  foreach($repair_tips as $repair_tip){
                ?>
                <div class="w-full flex flex-col">
                    <div class="faq-block flex justify-between w-full items-center">
                        <div class="flex flex-row items-center gap-4">
                            <div><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/FAQ Circle.png" alt=""></div>
                            <h3><?= $repair_tip["repair-tips-title"] ?></h3>
                        </div>
                        <div id="btn-open-service"><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/arrow.png" alt=""></div>
                    </div>
                    <div class="faq-dropdown-block" id="drop-down-block" style="display: none;">
                        <div class="flex flex-row items-end gap-2 h-fit">
                            <h5 class="font-normal mt-3"><?= $repair_tip["repair-tips-desc"] ?></h5>
                        </div>
                    </div>
                </div>
                <?php 
                    };
                ?>
            </div>
        </div>
    </section>