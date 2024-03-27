    <section class="common-replacement py-20">
        <div class="container">
            <h2 class="title-primary">Common Refrigerator Replacement Parts</h2>
            <h4 class="text-red">We stock parts for all the top brands, including:</h4>
            <div class="grid grid-cols-2 md:grid-cols-1 items-center w-full">
                <div>
                    <ul class="gap-2 list-disc grid grid-cols-2 w-full mt-20">
                    <?php 
                        $common_replacements = CFS()->get('repair-common-replacement');
                        foreach($common_replacements as $common_replacement){
                    ?>
                        <li class="text-dark-blue"><?= $common_replacement["repair-common-replacement-title"] ?></li>
                    <?php 
                        };
                    ?>
                    </ul>
                </div>
                <div><img src="<?= CFS()->get("repair-common-replacement-img") ?>"></div>
            </div>
        </div>
    </section>