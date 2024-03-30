    <section class="bg-light-gray py-20">
        <div class="container text-blog flex flex-row lg:flex-col-reverse justify-start items-start gap-6">
            <div class="main-text  px-6 ">
                <?= CFS()->get('city-content') ?>
            </div>
            <div class="coupon">
                <h2 class="title-primary">Discount Coupon</h2>
                <p class="text-center mt-4">Enjoy this special offer for your
                    Repair Service</p>
                <div class="coupon-main rounded-t-md">
                    <h1 class="text-red">$30 OFF</h1>
                    <h4 class="title-primary mt-3">ON REPAIR SERVICE </h4>
                    <h5 class="text-dark-blue mt-3 text-center">Code TAKE30 Redeem online on
                        repairs only.</h5>
                </div>
                <div class="bg-dark-blue w-full h-full flex flex-col items-center justify-center py-10 px-6 rounded-b-md">
                    <h4 class="text-white ">Call : <?= CFS()->get('contacts-phone-number', 99) ?></h4>
                    <a href="#" class="button-primary flex items-center justify-center w-full mt-10 uppercase">use coupon</a>
                </div>                
            </div>
        </div>
    </section>