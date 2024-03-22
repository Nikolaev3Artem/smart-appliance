<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oxanium:wght@200..800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
    integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
    crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
    integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
    crossorigin=""></script>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/style.css">
    <?php wp_head(); ?>

    <title>Smart-Appliance</title>
</head>
<body>
    <header>
        <div class="container">
            <div class="flex flex-row justify-around items-center w-full h-[68px] sm:my-4">
                <a href="index.html" class="z-10"><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/logo.png" alt="" class="w-[150px] h-[145px] mt-[70px] z-10"></a>
                <div class="flex flex-row md:flex-col justify-around items-center w-full h-full">
                    <h5 class="text-dark-blue font-bold lg:hidden">Mon - Fri: <br>
                        08.00 AM 10.00 PM</h5>
                    <p class="text-dark-blue font-bold sm:w-full">Technicians Available Now: February 26</p>
                    <a href="tel://+12538933671" class="flex items-center text-dark-blue font-bold text-[18px] lg:hidden">
                        <div><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/icon Phone blue.png" alt="" class="img-fluid me-3"></div>
                        +12538933671
                    </a>
                    <a href="request-service.html" class="button-primary flex items-center"><div><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/icon Work.png" alt="" class="w-[25px] h-[25px] me-3"></div>Request Service</a>
                </div>
            </div>
        </div>
        <div class="bg-dark-blue w-full h-[38px] flex flex-row items-center justify-center md:justify-end relative py-2">
            <div class="container flex flex-row justify-end gap-[10px] pe-14 lg:hidden">
                <div class="relative nav_link_wrapper">
                    <h6 class="nav_link">Appliance Repair</h6>
                    <div class="nav_link_submenu">
                        <div class="nav_link_submenu_menu-blocks gap-y-[8px] gap-x-[36px]">
                            <a href="#">
                                <div class="flex flex-row w-[210px] h-[56px] gap-[13px] items-center justify-start">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/Oven.png" alt="" class="img-fluid">
                                    <h5>Oven & Stove</h5>
                                </div>
                            </a>
                            <a href="#">
                                <div class="flex flex-row w-[210px] h-[56px] gap-[13px] items-center justify-start">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/dishwasher.png" alt="" class="img-fluid">
                                    <h5>Dishwasher Rapair</h5>
                                </div>
                            </a>
                            <a href="#">
                                <div class="flex flex-row w-[210px] h-[56px] gap-[13px] items-center justify-start">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/Washing Machine.png" alt="" class="img-fluid"> 
                                    <h5>Washing Machine</h5>
                                </div>
                            </a>
                            <a href="#">
                                <div class="flex flex-row w-[210px] h-[56px] gap-[13px] items-center justify-start">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/Range.png" alt="" class="img-fluid">
                                    <h5>Range Hood</h5>
                                </div>
                            </a>
                            <a href="#">
                                <div class="flex flex-row w-[210px] h-[56px] gap-[13px] items-center justify-start">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/Dryer.png" alt="" class="img-fluid">
                                    <h5>Dryer Rapair</h5>
                                </div>
                            </a>
                            <a href="#">
                                <div class="flex flex-row w-[210px] h-[56px] gap-[13px] items-center justify-start">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/Refrigerator.png" alt="" class="img-fluid">
                                    <h5>Refrigerator Rapair</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="relative nav_link_wrapper">
                    <h6 class="nav_link text-white">Brands</h6>
                    <div class="nav_link_submenu">
                        <div class="nav_link_submenu_menu-blocks gap-y-[8px] gap-x-[36px]">
                            <a href="brand.html">
                                <div class="flex flex-row items-center justify-start">
                                    <h5>5 Star</h5>
                                </div>
                            </a>
                            <a href="brand.html">
                                <div class="flex flex-row items-center justify-start">
                                    <h5>5 Star</h5>
                                </div>
                            </a>
                            <a href="brand.html">
                                <div class="flex flex-row items-center justify-start">
                                    <h5>5 Star</h5>
                                </div>
                            </a>
                            <a href="brand.html">
                                <div class="flex flex-row items-center justify-start">
                                    <h5>5 Star</h5>
                                </div>
                            </a>
                            <a href="brand.html">
                                <div class="flex flex-row items-center justify-start">
                                    <h5>5 Star</h5>
                                </div>
                            </a>
                            <a href="brand.html">
                                <div class="flex flex-row items-center justify-start">
                                    <h5>5 Star</h5>
                                </div>
                            </a>
                            <a href="brand.html">
                                <div class="flex flex-row items-center justify-start">
                                    <h5>5 Star</h5>
                                </div>
                            </a>
                            

                        </div>
                    </div>
                </div>
                <a href="city.html"><h6 class="nav_link relative text-white uppercase hover:bg-white hover:text-red duration-200 rounded-[4px] px-4">Service Areas</h6></a>
                <a href="about-us.html"><h6 class="nav_link relative text-white uppercase hover:bg-white hover:text-red duration-200 rounded-[4px] px-4">About</h6></a>
                <a href="blog.html"><h6 class="nav_link relative text-white uppercase hover:bg-white hover:text-red duration-200 rounded-[4px] px-4">Blog</h6></a>
                <a href="#reviews"><h6 class="nav_link relative text-white uppercase hover:bg-white hover:text-red duration-200 rounded-[4px] px-4">Reviews</h6></a>
                <a href="contact.html"><h6 class="nav_link relative text-white uppercase hover:bg-white hover:text-red duration-200 rounded-[4px] px-4">Contact</h6></a>
            </div>
            <div class="container hidden lg:flex flex-row justify-end gap-10 relative">
                <div><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/icon Phone white.png" alt="" class="img-fluid"></div>
                <div id="burger_btn">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/burger.png" alt="" class="img-fluid">
                </div>
 
            </div>
            <div id="mobile_menu" class="bg-dark-blue z-10 flex flex-col items-end justify-end absolute top-[38px] right-0 w-[335px] sm:w-full p-10 gap-4">
                <a href="fridge-repair.html"><h4 class="font-light text-white">Appliance Repair</h4></a>
                <a href="brand.html"><h4 class="font-light text-white">Brands</h4></a>
                <a href="city.html"><h4 class="font-light text-white">Service Areas</h4></a>
                <a href="about-us.html"><h4 class="font-light text-white">About</h4></a>
                <a href="blog.html"><h4 class="font-light text-white">Blog</h4></a>
                <a href="#"><h4 class="font-light text-white">Reviews</h4></a>
                <a href="contact.html"><h4 class="font-light text-white">Contact</h4></a>
                <div class="mt-10 flex justify-center items-end flex-col">
                    <h6 class="text-white">Mon - Fri: 08.00 AM 10.00 PM</h6>
                    <a href="tel://+12538933671" class="flex text-white items-center font-bold text-[18px] mt-[27px]">
                        <div><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/icon Phone white.png" alt="" class="img-fluid me-3"></div>
                        +12538933671
                    </a>
                </div>
            </div>
        </div>
    </header>