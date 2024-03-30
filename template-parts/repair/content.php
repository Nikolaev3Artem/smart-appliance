<section>
        <div class="container text-blog flex flex-row lg:flex-col-reverse justify-start items-start gap-6">
            <div class="main-text py-20 px-6 bg-light-gray">
                <?= CFS()->get('repair-text-before-loop'); ?>

                <ul>
                    <?php 
                        $repair_types = CFS()->get('repair-type-loop');
                        foreach($repair_types as $repair_type){
                    ?>
                    <li>
                        <div><img src="<?= $repair_type["repair-type-img"] ?>" alt=""></div>
                        <div class="flex flex-col">
                            <h3><?= $repair_type["repair-type-title"] ?></h3>
                            <?= $repair_type["repair-type-desc"] ?>
                 
                        </div>
                    </li>
                    <?php 
                        };
                    ?>
                </ul>

                <?= CFS()->get('repair-text-after-loop-grey'); ?>
            </div>
            <div class="coupon">
                <h2 class="title-primary">Discount Coupon</h2>
                <p class="text-center mt-4">Enjoy this special offer for your
                    Fridge Repair Service</p>
                <div class="coupon-main rounded-t-md">
                    <h1 class="text-red">$30 OFF</h1>
                    <h4 class="title-primary mt-3">ON REPAIR SERVICE </h4>
                    <h5 class="text-dark-blue mt-3 text-center">Code TAKE30 Redeem online on
                        repairs only.</h5>
                </div>
                <div class="bg-dark-blue w-full h-full flex flex-col items-center justify-center py-10 px-6 rounded-b-md">
                    <a href="tel://<?= CFS()->get('contacts-work-hours', 99) ?>"><h4 class="text-white ">Call : <?= CFS()->get('contacts-phone-number', 99) ?></h4></a>
                    <a href="#" class="button-primary flex items-center justify-center w-full mt-10 uppercase">use coupon</a>
                </div>                
            </div>
        </div>
        <div class="container mt-20">
            <div class="text-blog w-full">
                <div class="main-text-2">
                <?= CFS()->get('repair-text-after-loop'); ?>
                </div>
            </div>
        </div>
    </section>