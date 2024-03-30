<section class="why-choose-us">
        <div class="container">
            <h2 class="title-primary">Why Choose Us?</h2>
            <?= CFS()->get('why-choose-us-desc') ?>
            <div class="grid grid-cols-3 lg:grid-cols-2 md:grid-cols-1 gap-6 mt-8">
                <?php 
                  $сhoose_us_blocks = CFS()->get('why-choose-us-blocks');
                  foreach($сhoose_us_blocks as $сhoose_us_block){
                ?>
                <div class="flex flex-col p-4 bg-dark-blue rounded-md">
                    <div class="flex flex-row items-center w-full bg-white rounded-md p-3">
                        <div><img src="<?= $сhoose_us_block["why-choose-us-block-img"] ?>" alt=""></div>
                        <div class="flex flex-col">
                            <h4 class="font-bold text-dark-blue "><?= $сhoose_us_block["why-choose-us-block-title"] ?></h4>
                            <p class="text-xs text-dark-blue"><?= $сhoose_us_block["why-choose-us-block-subtitle"] ?></p>
                        </div>
                    </div>
                    <div class="mt-6 ">
                        <div class="text-white">
                            <?= $сhoose_us_block["why-choose-us-block-desc"] ?>

                        </div>
                    </div>
                </div>
                <?php 
                    };
                ?>
            </div>

            <h6 class="text-center font-normal mt-10"><?= CFS()->get('why-choose-us-text-before-table'); ?></h6>
            <table class="same-day-appliance-table">
                <?php 
                  $сhoose_us_table_rows = CFS()->get('why-choose-us-table');
                  foreach($сhoose_us_table_rows as $сhoose_us_table_row){
                ?>
                <tr class="border-dark-blue">
                    <td class="border-dark-blue"><?= $сhoose_us_table_row["why-choose-us-table-left"] ?></td>
                    <td class="border-dark-blue"><?= $сhoose_us_table_row["why-choose-us-table-right"] ?></td>
                </tr>
                <?php 
                    };
                ?>
            </table>
            <a href="/request-service/" class="button-primary flex items-center mt-10"><div><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/icon Work.png" alt="" class="w-[25px] h-[25px] me-3"></div>Request Service</a>

        </div>
    </section>