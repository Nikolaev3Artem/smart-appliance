<?php 
/*
Template Name: Blog-single
*/
?>
<?php get_header(); ?>

    <section class=" py-20">
        <div class="container text-blog flex flex-row lg:flex-col-reverse justify-start items-start gap-6 ">
            <div class="main-text  px-6 py-20 bg-white" style="box-shadow: 4px 4px 24px 0px #0055A173;">
                <?= CFS()->get('blog-page-text') ?>
                
                <h4 class="text-dark text-center  w-fit">Share</h4>
                <div class="flex flex-row flex-wrap items-center gap-2 mt-6">
                    <div><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/Vector.png" alt=""></div>
                    <div><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/twitter.png" alt=""></div>
                    <div><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/pinterest.png" alt=""></div>
                    <div><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/Vector (2).png" alt=""></div>
                    <div><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/social icon.png" alt=""></div>
                </div>
                <div class="contact-form">
                    <h2 class="text-dark ms-0 mt-8">Ask a Question</h2>
                    <h4>Leave a Reply</h4>
                    <p>Your email address will not be published. Required fields are marked *</p>
                    <div>
                        <div class="relative mt-8">
                            <label for="comment">Comment *</label>
                            <textarea class="w-full" name="comment" id="" cols="30" rows="10"></textarea>    
                        </div>
                        <div class="grid grid-cols-2 mt-6 gap-6">
                            <div class="relative">
                                <label for="name">name *</label>
                                <input class="w-full" name="name" id="" cols="30" rows="10"></input>    
                            </div>
                            <div class="relative">
                                <label for="name">email *</label>
                                <input class="w-full" name="name" id="" cols="30" rows="10"></input>    
                            </div>
                        </div>
                        <a href="#" class="button-primary flex items-center w-fit mt-6">Post comment</a>
                    </div>
                </div>
                <section class="faq bg-dark-blue py-20 w-full">
                    <div class="container">
                        <h2 class="title-secondary">Top Frequent Asked Questions</h2>
                        <div class="faq-wrapper flex flex-col gap-2">
                            <div class="w-full flex flex-col">
                                <div class="faq-block flex justify-between w-full items-center">
                                    <div class="flex flex-row items-center gap-4">
                                        <div><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/FAQ Circle.png" alt=""></div>
                                        <h3>What Brands You Do Service?</h3>
                                    </div>
                                    <div id="btn-open-service"><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/arrow.png" alt=""></div>
                                </div>
                                <div class="faq-dropdown-block" id="drop-down-block" style="display: none;">
                                    <div class="flex flex-row items-end gap-2 h-fit">
                                        <h5 class="font-normal mt-3">We proudly service over 90 leading brands, eliminating the need for multiple service providers if you own appliances from different manufacturers.</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full flex flex-col">
                                <div class="faq-block flex justify-between w-full items-center">
                                    <div class="flex flex-row items-center gap-4">
                                        <div><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/FAQ Circle.png" alt=""></div>
                                        <h3>What Brands You Do Service?</h3>
                                    </div>
                                    <div id="btn-open-service"><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/arrow.png" alt=""></div>
                                </div>
                                <div class="faq-dropdown-block" id="drop-down-block" style="display: none;">
                                    <div class="flex flex-row items-end gap-2 h-fit">
                                        <h5 class="font-normal mt-3">We proudly service over 90 leading brands, eliminating the need for multiple service providers if you own appliances from different manufacturers.</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full flex flex-col">
                                <div class="faq-block flex justify-between w-full items-center">
                                    <div class="flex flex-row items-center gap-4">
                                        <div><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/FAQ Circle.png" alt=""></div>
                                        <h3>What Brands You Do Service?</h3>
                                    </div>
                                    <div id="btn-open-service"><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/arrow.png" alt=""></div>
                                </div>
                                <div class="faq-dropdown-block" id="drop-down-block" style="display: none;">
                                    <div class="flex flex-row items-end gap-2 h-fit">
                                        <h5 class="font-normal mt-3">We proudly service over 90 leading brands, eliminating the need for multiple service providers if you own appliances from different manufacturers.</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full flex flex-col">
                                <div class="faq-block flex justify-between w-full items-center">
                                    <div class="flex flex-row items-center gap-4">
                                        <div><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/FAQ Circle.png" alt=""></div>
                                        <h3>What Brands You Do Service?</h3>
                                    </div>
                                    <div id="btn-open-service"><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/arrow.png" alt=""></div>
                                </div>
                                <div class="faq-dropdown-block" id="drop-down-block" style="display: none;">
                                    <div class="flex flex-row items-end gap-2 h-fit">
                                        <h5 class="font-normal mt-3">We proudly service over 90 leading brands, eliminating the need for multiple service providers if you own appliances from different manufacturers.</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full flex flex-col">
                                <div class="faq-block flex justify-between w-full items-center">
                                    <div class="flex flex-row items-center gap-4">
                                        <div><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/FAQ Circle.png" alt=""></div>
                                        <h3>What Brands You Do Service?</h3>
                                    </div>
                                    <div id="btn-open-service"><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/arrow.png" alt=""></div>
                                </div>
                                <div class="faq-dropdown-block" id="drop-down-block" style="display: none;">
                                    <div class="flex flex-row items-end gap-2 h-fit">
                                        <h5 class="font-normal mt-3">We proudly service over 90 leading brands, eliminating the need for multiple service providers if you own appliances from different manufacturers.</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full flex flex-col">
                                <div class="faq-block flex justify-between w-full items-center">
                                    <div class="flex flex-row items-center gap-4">
                                        <div><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/FAQ Circle.png" alt=""></div>
                                        <h3>What Brands You Do Service?</h3>
                                    </div>
                                    <div id="btn-open-service"><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/arrow.png" alt=""></div>
                                </div>
                                <div class="faq-dropdown-block" id="drop-down-block" style="display: none;">
                                    <div class="flex flex-row items-end gap-2 h-fit">
                                        <h5 class="font-normal mt-3">We proudly service over 90 leading brands, eliminating the need for multiple service providers if you own appliances from different manufacturers.</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
            <div class="">
                <h4 class="text-dark text-center ">Follow us</h4>
                <div class="grid grid-cols-5 gap-4 mt-6 my-8">
                    <div><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/Vector.png" alt=""></div>
                    <div><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/twitter.png" alt=""></div>
                    <div><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/pinterest.png" alt=""></div>
                    <div><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/Vector (2).png" alt=""></div>
                    <div><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/social icon.png" alt=""></div>
                </div>
                <div class="grid grid-cols-2 gap-6 my-8 items-center py-10">
                    <div class="flex flex-col justify-center items-center">                   
                        <div>
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/icon cert.png" alt="">
                        </div>         
                        <h6 class="text-center mt-2" style="color: #333333;">Authorized Repair</h6>
                        <p class="text-center font-normal" style="color: #333333;">Authorized Repair</p>
                    </div>
                    <div class="flex flex-col justify-center items-center">
                        <div>
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/icon advantage.png" alt="">
                        </div>
                        <h6 class="text-center mt-2" style="color: #333333;">Authorized Repair</h6>
                        <p class="text-center font-normal" style="color: #333333;">Authorized Repair</p>

                    </div>
                    <div class="flex flex-col justify-center items-center">
                        <div>
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/Group (1).png" alt="">
                        </div>
                        <h6 class="text-center mt-2" style="color: #333333;">Authorized Repair</h6>
                        <p class="text-center font-normal" style="color: #333333;">Authorized Repair</p>

                    </div>
                    <div class="flex flex-col justify-center items-center">
                        <div>
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/icon advantage (1).png" alt="">
                        </div>
                        <h6 class="text-center mt-2" style="color: #333333;">Authorized Repair</h6>
                        <p class="text-center font-normal" style="color: #333333;">Authorized Repair</p>

                    </div>
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
            
        </div> 
    </section>

<?php
    get_template_part('template-parts/recent-articles');
?>

<?php get_footer(); ?>