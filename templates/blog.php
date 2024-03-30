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
            <div class="flex flex-row flex-wrap w-full gap-2 mt-4 faq-tabs">
                <button class="button-secondary faq-tab" id="faq-tab-0">All</button>
                <?php 
                    $args = array(
                        'post_type' => 'blog',
                        'taxonomy'  => 'blog'
                    );
                    $categories = get_terms( $args );
                    $i=1;
                    foreach($categories as $category){
                ?>
                <button id="<?= 'faq-tab-' . $i ?>" class="button-secondary faq-tab"><?= $category->name ?></button>
                <?php 
                    $i++;
                    };
                ?>
            </div>
            <div class="grid gap-6 grid-cols-2 md:grid-cols-1 mt-4 animation-row faq-info faq-info-hidden" data-name="faq-tab-0">
                <?php
                    query_posts(array (
                    'post_type' => 'blog',
                    ));
                    while (have_posts()) : the_post();
                ?>
                <div class="flex flex-col items-end articles-block show-animation">
                    <img src="<?= CFS()->get('blog-cards-img') ?>" alt="" class="object-cover w-full h-full">
                    <div class="p-6">
                        <h6><?= CFS()->get('blog-cards-title') ?></h6>
                        <p class="mt-4 text-dark-blue">WASHING MASHINE > TIPS > DIYREPAIR</p>
                        <p class="mt-4 font-normal"><?= CFS()->get('blog-cards-short-desc') ?></p>    
                    </div>
                    <a href="<?php the_permalink() ?>" class="underline me-6 mb-6"><p class="text-red">Read more</p></a>
                </div>
                <?php
                    endwhile;
                    wp_reset_query();
                ?>    
                </div>
            <?php 
                $args = array(
                    'post_type' => 'blog',
                    'taxonomy'  => 'blog'
                );
                $i=1;
                $categories = get_terms( $args );
                foreach($categories as $category){
            ?>
            <div class="grid gap-6 grid-cols-2 md:grid-cols-1 mt-4 animation-row faq-info faq-info-hidden" data-name=<?= 'faq-tab-' . $i ?>>

                <?php
                    query_posts(array (  
                    'post_type' => 'blog',
                    'tax_query' => array(
                        array (
                            'taxonomy' => 'blog',
                            'field' => 'name',
                            'terms' => $category->name,
                        )
                    ),
                    ));
                    while (have_posts()) : the_post();
                ?>
                <div class="flex flex-col items-end articles-block show-animation">
                    <img src="<?= CFS()->get('blog-cards-img') ?>" alt="" class="object-cover w-full h-full">
                    <div class="p-6">
                        <h6><?= CFS()->get('blog-cards-title') ?></h6>
                        <p class="mt-4 text-dark-blue">WASHING MASHINE > TIPS > DIYREPAIR</p>
                        <p class="mt-4 font-normal"><?= CFS()->get('blog-cards-short-desc') ?></p>    
                    </div>
                    <a href="<?php the_permalink() ?>" class="underline me-6 mb-6"><p class="text-red">Read more</p></a>
                </div>
                <?php
                    endwhile;
                    wp_reset_query();
                ?>    
            </div>
            <?php 
                $i++;
                };
            ?>
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