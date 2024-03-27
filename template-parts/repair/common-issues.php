    <section class="common-issues">
        <div class="container">
            <h2 class="title-primary">Common Refrigerator Issues</h2>
            <div class="grid grid-cols-3 lg:grid-cols-2 md:grid-cols-1 w-full items-center gap-2">
                <?php 
                  $common_issues = CFS()->get('repair-common-issues-loop');
                  foreach($common_issues as $common_issue){
                ?>
                <a href="#" class="hover:text-[16px] hover:font-bold text-normal hover:text-dark-blue"><?= $common_issue["repair-common-issues-title"] ?></a>
                <?php 
                    };
                ?>
            </div>
        </div>
    </section>