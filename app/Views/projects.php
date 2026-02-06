<?php
$db = \Config\Database::connect();
$queryHero   = $db->query('SELECT * FROM hero_tbl');
$queryProject   = $db->query('SELECT * FROM project_tbl');
$queryProjectCate   = $db->query('SELECT * FROM project_cate');
$queryProjectNewest   = $db->query('SELECT * FROM project_tbl ORDER BY created_at DESC LIMIT 3');
$resultHero = $queryHero->getResult();
$resultProject = $queryProject->getResult();
$resultProjectNewest = $queryProjectNewest->getResult();
$resultProjectCate = $queryProjectCate->getResult();

?>
<div class="min-h-screen bg-background text-foreground">
    <section class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16">
        <div class="mb-12">
            <p class="text-accent text-sm font-semibold uppercase tracking-wider mb-3">Portfolio</p>
            <h1 class="text-4xl md:text-5xl font-bold text-foreground  mb-6">My Projects</h1>
            <p class="text-lg text-muted-foreground max-w-3xl leading-relaxed">A collection of my work showcasing various technologies and approaches. Each project represents a unique challenge and solution.</p>
        </div>
    </section>
    <section class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 mb-12">
        <div class="flex flex-wrap gap-3">
            <a
            style="background-color: <?= isset($cate_num) ? "black" : "white" ?>; color: <?= isset($cate_num) ? "white" : "black" ?>;"
            href="<?= route_to("projects") ?>" data-slot="button" class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*=&#x27;size-&#x27;])]:size-4 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive bg-primary text-primary-foreground hover:bg-primary/90 h-8 gap-1.5 px-3 has-[&gt;svg]:px-2.5 rounded-full">All</a>

        <?php 
        foreach($resultProjectCate as $pro_cate){
            
        ?>
        <a 
        href="<?= "http://localhost:8080/project-category/".$pro_cate->id ?>"
        style="background-color: <?= isset($cate_num) ? ($pro_cate->id == $cate_num ? "white" : "") : "" ?>; color: <?= isset($cate_num) ? ($pro_cate->id == $cate_num ? "black" : "") : "white" ?>;"
        data-slot="button" class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*=&#x27;size-&#x27;])]:size-4 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive border bg-background shadow-xs hover:bg-accent hover:text-purple-400 dark:bg-input/30 dark:border-input dark:hover:bg-input/50 h-8 gap-1.5 px-3 has-[&gt;svg]:px-2.5 rounded-full"><?= $pro_cate -> cate_name ?></a>
        <?php
        }
        ?>

            
        </div>
    </section>
    <section class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 pb-20">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php
            foreach ($project as $p) {
            ?>
                <div class="group rounded-lg border border-border bg-card overflow-hidden hover:border-accent/50 transition-all hover:shadow-lg hover:-translate-y-1">
                    <div class="aspect-video bg-gradient-to-br from-accent/20 to-secondary/20 overflow-hidden flex items-center justify-center">
                       <img src="<?=  $p['image'] ?>" alt="" srcset="">
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-foreground mb-2 group-hover:text-accent transition-colors"><?= $p['name'] ?></h3>
                        <p class="text-sm text-muted-foreground mb-4 line-clamp-2"><?= $p['description'] ?></p>
                        <div class="flex flex-wrap gap-2 mb-4">


                            <?php
                            $stack = $p['stack'];
                            $stacks = explode(", ", $stack);
                            // print_r($stacks);
                            foreach ($stacks as $s) {

                            ?>
                                <span class="inline-block px-2.5 py-1 text-xs font-medium text-accent bg-accent/10 rounded-full"><?= $s ?></span>
                            <?php
                            }


                            ?>
                        </div>
                        <div class="flex gap-3">
                            <a href="<?= $p["demo_link"] ?>" target="_blank" rel="noopener noreferrer" class="flex items-center gap-1.5 text-xs font-medium text-accent hover:text-accent/80 transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-external-link h-3.5 w-3.5">
                                    <path d="M15 3h6v6"></path>
                                    <path d="M10 14 21 3"></path>
                                    <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                                </svg>
                                Demo
                            </a>
                            <a href="<?= $p['github'] ?>" target="_blank" rel="noopener noreferrer" class="flex items-center gap-1.5 text-xs font-medium text-accent hover:text-accent/80 transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-github h-3.5 w-3.5">
                                    <path d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4"></path>
                                    <path d="M9 18c-4.51 2-5-2-7-2"></path>
                                </svg>
                                Code
                            </a>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>


        </div>
    </section>