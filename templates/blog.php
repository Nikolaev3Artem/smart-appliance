<?php 
/*
Template Name: Blog
*/
?>
<?php get_header(); ?>


    <section class="recent-articles">
        <div class="container">
            <h2 class="title-primary">Blog</h2>
            <h4>Read latest updates and articles from Smart Appliances CA.</h4>
            <div class="flex flex-row flex-wrap w-full gap-2 mt-4">
                <button class="button-secondary">All</button>
                <button class="button-secondary">REQUEST SERVICE</button>
                <button class="button-secondary">MAINTENANCE</button>
                <button class="button-secondary">DISHWASHER</button>
                <button class="button-secondary">TIPS</button>
                <button class="button-secondary">INSTALLATION</button>
                <button class="button-secondary">DRYER</button>
                <button class="button-secondary">REFRIGERATOR</button>
                <button class="button-secondary">WASHING MASHINE</button>
                <button class="button-secondary">RANGE HOOD</button>
                <button class="button-secondary">OVEN & STOVE</button>
                <button class="button-secondary">DIYREPAIR</button>
            </div>
            <div class="grid gap-6 grid-cols-2 md:grid-cols-1 mt-4 animation-row">
                <div class="flex flex-col items-end articles-block show-animation">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/content/washing-mashine.png" alt="" class="object-cover w-full h-full">
                    <div class="p-6">
                        <h6>Diagnosing and Solving the LG Washing
                            Machine Error: Buttons Do Not Respond</h6>
                        <p class="mt-4 text-dark-blue">WASHING MASHINE > TIPS > DIYREPAIR</p>
                        <p class="mt-4 font-normal">LG washing machines are designed to make laundry chores convenient, but encountering issues like unresponsive buttons...</p>    
                    </div>
                    <a href="blog-single.html" class="underline me-6 mb-6"><p class="text-red">Read more</p></a>
                </div>
                <div class="flex flex-col items-end articles-block show-animation">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/content/washing-mashine.png" alt="" class="object-cover w-full h-full">
                    <div class="p-6">
                        <h6>Diagnosing and Solving the LG Washing
                            Machine Error: Buttons Do Not Respond</h6>
                        <p class="mt-4 text-dark-blue">WASHING MASHINE > TIPS > DIYREPAIR</p>
                        <p class="mt-4 font-normal">LG washing machines are designed to make laundry chores convenient, but encountering issues like unresponsive buttons...</p>    
                    </div>
                    <a href="blog-single.html" class=" text-red underline me-6 mb-6"><p class="text-red">Read more</p></a>
                </div>
                <div class="flex flex-col items-end articles-block show-animation">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/content/washing-mashine.png" alt="" class="object-cover w-full h-full">
                    <div class="p-6">
                        <h6>Diagnosing and Solving the LG Washing
                            Machine Error: Buttons Do Not Respond</h6>
                        <p class="mt-4 text-dark-blue">WASHING MASHINE > TIPS > DIYREPAIR</p>
                        <p class="mt-4 font-normal">LG washing machines are designed to make laundry chores convenient, but encountering issues like unresponsive buttons...</p>    
                    </div>
                    <a href="blog-single.html" class=" text-red underline me-6 mb-6"><p class="text-red">Read more</p></a>
                </div>
            </div>
            <div class="flex flex-row gap-4">
                <a href="#" class="border-light-gray border py-2 px-3 hover:bg-dark-blue hover:text-white rounded-md font-bold mt-8">1</a>
                <a href="#" class="border-light-gray border py-2 px-3 hover:bg-dark-blue hover:text-white rounded-md font-bold mt-8">2</a>
                <a href="#" class="border-light-gray border py-2 px-3 hover:bg-dark-blue hover:text-white rounded-md font-bold mt-8">3</a>
                <a href="#" class="border-light-gray border py-2 px-3 hover:bg-dark-blue hover:text-white rounded-md font-bold mt-8">4</a>
                <a href="#" class="border-light-gray border py-2 px-3 hover:bg-dark-blue hover:text-white rounded-md font-bold mt-8">5</a>    
            </div>
        </div>
    </section>

<?php get_footer(); ?>