<section class="same-day-appliance">
        <div class="container">
            <h2 class="title-primary">Same Day Appliance Repair</h2>
            <?= CFS()->get('same-day-appliance-block-desc') ?>
            <table class="same-day-appliance-table">
                <?php 
                  $first_table = CFS()->get('same-day-appliance-first_table');
                  foreach($first_table as $first_table_row){
                ?>
                <tr class="border-dark-blue">
                    <td class="border-dark-blue"><?= $first_table_row["same-day-appliance-left_side_first_table"] ?></td>
                    <td class="border-dark-blue"><?= $first_table_row["same-day-appliance-right_side_first_table"] ?></td>
                </tr>

                <?php 
                    };
                ?>
            </table>
            <table class="same-day-appliance-table">
                <tr class="bg-dark-blue">
                    <td><h4 class="text-white text-center">Appliance type</h4></td>
                    <td><h4 class="text-white text-center">Average Repair Cost*</h4></td>
                </tr>
                <?php 
                  $second_table = CFS()->get('same-day-appliance-second_table');
                  foreach($second_table as $second_table_row){
                ?>
                <tr class="border-dark-blue">
                    <td class="border-dark-blue"><?= $second_table_row["same-day-appliance-left_side_second_table"] ?></td>
                    <td class="border-dark-blue"><?= $second_table_row["same-day-appliance-right_side_second_table"] ?></td>
                </tr>
                <?php 
                    };
                ?>
                
            </table>
            <p class="my-8 text-red">*– Please note that the prices mentioned above are approximate and are subject to variation based on the complexity of the services required and the specific brand and model of the appliance.</p>
            <a href="#" class="button-primary flex items-center"><div><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/icon Work.png" alt="" class="w-[25px] h-[25px] me-3"></div>Request Service</a>
        </div>
    </section>