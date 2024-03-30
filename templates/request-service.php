<?php 
/*
Template Name: Request service
*/
?>

<?php get_header(); ?>

    <section class="w-full my-0 bg-light-gray" style="box-shadow: 4px 4px 24px 0px #0055A173;">
        <div class="container">
            <h2 class="title-primary mt-20">Request Service</h2>
            <h4 class="text-center">We are open 7 days a week for your convenience! To book an appointment or get an estimate, please complete the form below, or call us.
                We will contact you to confirm. Usual reply time: 3 minutes.</h4>
            <div class="grid grid-cols-2 lg:grid-cols-1 py-20 lg:pt-0 w-full gap-10 lg:gap-8">
                <div>
                    <form class="flex flex-col w-full bg-white p-8 gap-8" action="#" method="post" style="box-shadow: 4px 4px 24px 0px #0055A173;">
                        <?php echo do_shortcode('[contact-form-7 id="878e53d" title="Request a service"]') ?>
                        <p class="mt-6 font-normal" style="color: #333333;">We typically reply within a few minutes during regular business hours.</p>

                    </form>
                </div>
                <div>
                    <!-- <div class="coupon">
                        <div class="flex bg-white flex-col items-center justify-center rounded-t-md p-10" style="box-shadow: 4px 4px 24px 0px #0055A173;">
                            <h1 class="text-red ">$30 OFF</h1>
                            <h4 class="title-primary mt-3 text-red">Coupon applied</h4>
                        </div>
                    </div> -->
                    <h2 class="title-primary text-start mt-8">Contact Us</h2>
                    <h5 class="mt-8">Schedule an appointment or request an estimate:</h5>
                    <div class="mt-8 flex flex-row gap-1">
                        <div><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/email-icon.png" alt=""></div>
                        <div>
                            <h4 class="text-dark-blue">Mailing Address:</h4>
                            <h5><?= CFS()->get('contacts-email', 99) ?></h5>    
                        </div>
                    </div>
                    <div class="mt-4 flex flex-row gap-1">
                        <div><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/phone-red.png" alt=""></div>
                        <div>
                            <h4 class="text-dark-blue">Toll-free Number</h4>
                            <h5><?= CFS()->get('contacts-phone-number', 99) ?></h5>    
                        </div>
                    </div>
                    <h5 class="mt-8">Please provide us with your make, and model number, a brief description of the problem and any other details available.</h5>
                    <h5 class="mt-8">We accept online service requests sent through the quick order form around the clock. If you send your request outside of our normal business hours, our representative will contact you first thing in the morning.</h5>
                    <div class="flex flex-row gap-1 mt-8">
                        <div><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/MasterCard.png" alt=""></div>
                        <div><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/Visa.png" alt=""></div>
                        <div><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/Discover.png" alt=""></div>
                        <div><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/Amex.png" alt=""></div>
                        <div><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/Paypal.png" alt=""></div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

<?php get_footer(); ?>