<section class="why-choose-fix-appliance">
        <div class="container">
            <h2 class="title-primary">Why people choose Fix Appliances CA™</h2>
            <div class="grid grid-cols-2 md:grid-cols-1 mt-4 gap-12 animation-row">
                <?php 
                  $fix_appliance_blocks = CFS()->get('why-fix-appliances-block');
                  foreach($fix_appliance_blocks as $fix_appliance_block){
                ?>
                    <div class="show-animation">
                        <div class="flex items-center gap-4">
                            <div><img src="<?= $fix_appliance_block["why-fix-appliances-img"] ?>" alt=""></div>
                            <h3><?= $fix_appliance_block["why-fix-appliances-title"] ?></h3>
                        </div>
                        <?= $fix_appliance_block["why-fix-appliances-desc"] ?>
                    </div>
                <?php 
                    };
                ?>
            </div>
        </div>
    </section>