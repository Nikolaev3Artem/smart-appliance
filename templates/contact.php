<?php 
/*
Template Name: Contact-Us
*/
?>
<?php get_header(); ?>

    <section class="w-full mt-0 bg-light-gray" style="box-shadow: 4px 4px 24px 0px #0055A173;">
        <div class="container">
            <div class="grid grid-cols-2 lg:grid-cols-1 py-20 lg:pt-0 w-full gap-28 lg:gap-0" >
                <div class="py-20 lg:py-10">
                    <h2 class="title-primary text-start">Contact Us</h2>
                    <h5 class="mt-8">Schedule an appointment or request an estimate:</h5>
                    <div class="mt-8 flex flex-row gap-1">
                        <div><img src="../assets/img/icons/email-icon.png" alt=""></div>
                        <div>
                            <h4 class="text-dark-blue">Mailing Address:</h4>
                            <h5>ceo@smart-appliance.tech</h5>    
                        </div>
                    </div>
                    <div class="mt-4 flex flex-row gap-1">
                        <div><img src="../assets/img/icons/phone-red.png" alt=""></div>
                        <div>
                            <h4 class="text-dark-blue">Toll-free Number</h4>
                            <h5>1-888-242-0777</h5>    
                        </div>
                    </div>
                    <h5 class="mt-8">Please provide us with your make, and model number, a brief description of the problem and any other details available.</h5>
                    <h5 class="mt-8">We accept online service requests sent through the quick order form around the clock. If you send your request outside of our normal business hours, our representative will contact you first thing in the morning.</h5>
                    <div class="flex flex-row gap-1 mt-8">
                        <div><img src="../assets/img/icons/MasterCard.png" alt=""></div>
                        <div><img src="../assets/img/icons/Visa.png" alt=""></div>
                        <div><img src="../assets/img/icons/Discover.png" alt=""></div>
                        <div><img src="../assets/img/icons/Amex.png" alt=""></div>
                        <div><img src="../assets/img/icons/Paypal.png" alt=""></div>
                    </div>
                </div>
                <div>
                    <form class="flex flex-col w-full bg-white p-8 gap-8" action="#" method="post" style="box-shadow: 4px 4px 24px 0px #0055A173;">
                        <div class="relative">
                            <label for="name">your name</label>
                            <input required type="text" class="w-full" placeholder="Input text">
                        </div>
                        <div class="relative">
                            <label for="name">phone</label>
                            <input required type="phone" class="w-full" placeholder="Input text">
                        </div>
                        <div class="relative">
                            <label for="name">Your message</label>
                            <textarea required type="phone" class="w-full h-[150px]" placeholder="Input text"></textarea>
                            <p class="mt-1" style="color: #8C8C8C;">0 of 300 max characters</p>
                        </div>
                        <a href="#" class="button-primary flex items-center justify-center w-[300px]">SEND</a>
                        <p class="mt-6 font-normal" style="color: #333333;">We typically reply within a few minutes during regular business hours.</p>

                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="location-hours">
        <div class="container">
            <div class="grid grid-cols-2 md:grid-cols-1 md:gap-8 w-full">
                <div>
                    <h2>Business Hours</h2>
                    <div class="mt-8 grid grid-cols-1 gap-6">
                        <div class="flex flex-row gap-1">
                            <div><img src="../assets/img/icons/Time_duotone_line.png" alt=""></div>
                            <div class="w-[80%]">
                                <h4 class="text-dark-blue">Mon - Fri: 08.00 AM - 10.00 PM</h4>
                                <h5 class="font-normal mt-2" style="color: #333333;">Our customer service representatives operate from 7:30 am to 9:00 pm, 7 days a week, 365 days a year, including weekends & holidays.</h5>    
                            </div>
                        </div>    
                    </div>
                </div>
                <div>
                    <h2>Office Locations</h2>
                    <div class="mt-8 grid grid-cols-1 gap-6">
                        <div class="flex flex-row gap-1">
                            <div><img src="../assets/img/icons/Location.png" alt=""></div>
                            <div class="w-[80%]">
                                <h4 class="text-dark-blue">Vancouver</h4>
                                <h5 class="font-normal mt-2" style="color: #333333;">1441 NE 112th Ave unit D38, WA 98684</h5>    
                            </div>
                        </div>   
                        <div class="flex flex-row gap-1">
                            <div><img src="../assets/img/icons/Location.png" alt=""></div>
                            <div class="w-[80%]">
                                <h4 class="text-dark-blue">Vancouver</h4>
                                <h5 class="font-normal mt-2" style="color: #333333;">1441 NE 112th Ave unit D38, WA 98684</h5>    
                            </div>
                        </div> 
                        <div class="flex flex-row gap-1">
                            <div><img src="../assets/img/icons/Location.png" alt=""></div>
                            <div class="w-[80%]">
                                <h4 class="text-dark-blue">Vancouver</h4>
                                <h5 class="font-normal mt-2" style="color: #333333;">1441 NE 112th Ave unit D38, WA 98684</h5>    
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>