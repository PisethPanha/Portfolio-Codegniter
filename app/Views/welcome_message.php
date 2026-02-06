<?php
$db = \Config\Database::connect();
$queryHero   = $db->query('SELECT * FROM hero_tbl');
$queryProject   = $db->query('SELECT * FROM project_tbl');
$queryProjectNewest   = $db->query('SELECT * FROM project_tbl ORDER BY created_at DESC LIMIT 3');
$resultHero = $queryHero->getResult();
$resultProject = $queryProject->getResult();
$resultProjectNewest = $queryProjectNewest->getResult();

?>
<div class="min-h-screen bg-background text-foreground">
    <section class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-20 md:py-32">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div class="space-y-6">
                <div class="space-y-3">
                    <p class="text-sm font-semibold  uppercase tracking-wider te">Welcome to my portfolio</p>
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-foreground"><?= $resultHero[0]->name ?></h1>
                    <h2 class="text-xl md:text-2xl text-accent font-semibold"><?= $resultHero[0]->job_title ?></h2>
                </div>
                <p class="text-lg text-muted-foreground max-w-md leading-relaxed"><?= $resultHero[0]->short_bio ?></p>
                <div class="flex flex-col sm:flex-row gap-4 pt-4"><a href="/projects"><button data-slot="button" class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*=&#x27;size-&#x27;])]:size-4 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive bg-primary text-primary-foreground hover:bg-primary/90 h-10 rounded-md px-6 has-[&gt;svg]:px-4 w-full sm:w-auto gap-2">View My Work<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right h-4 w-4">
                                <path d="M5 12h14"></path>
                                <path d="m12 5 7 7-7 7"></path>
                            </svg></button></a>
                    <a
                        href="/contact"><button data-slot="button" class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*=&#x27;size-&#x27;])]:size-4 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive border shadow-xs hover:bg-accent hover:text-purple-400 dark:bg-input/30 dark:border-input dark:hover:bg-input/50 h-10 rounded-md px-6 has-[&gt;svg]:px-4 w-full sm:w-auto bg-transparent">Get In Touch</button></a>
                </div>
            </div>
            <div class="hidden md:flex items-center justify-center">
                <div class="relative w-full aspect-square max-w-sm">
                    <div class="absolute inset-0 bg-gradient-to-br from-accent/20 to-secondary/20 rounded-3xl"></div>
                    <div class="absolute inset-6 bg-gradient-to-tr from-accent/30 to-secondary/10 rounded-2xl flex items-center justify-center"><img src="<?= $resultHero[0]->image ?>" class="rounded-2xl hover:scale-[1.1] duration-300" alt="" /></div>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-3 gap-6 mt-20 pt-12 border-t border-border">
            <div class="text-center">
                <p class="text-3xl font-bold text-accent"><?= count($resultProject) ?>+</p>
                <p class="text-sm text-muted-foreground mt-1">Projects Completed</p>
            </div>
            <div class="text-center">
                <p class="text-3xl font-bold text-accent"><?= $resultHero[0]->experience ?>+</p>
                <p class="text-sm text-muted-foreground mt-1">Years Experience</p>
            </div>
            <div class="text-center">
                <p class="text-3xl font-bold text-accent"><?= $resultHero[0]->satisfaction ?>%</p>
                <p class="text-sm text-muted-foreground mt-1">Client Satisfaction</p>
            </div>
        </div>
    </section>
    <section class="bg-card py-20">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-foreground mb-4">Featured Work</h2>
                <p class="text-lg text-muted-foreground max-w-2xl mx-auto">A selection of my recent projects showcasing modern technologies and best practices.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                <?php 
                foreach($resultProjectNewest as $p){

                ?>
                <div class="group rounded-lg border border-border bg-background p-6 hover:border-accent/50 transition-all hover:shadow-lg">
                    <div class="aspect-video rounded-md bg-gradient-to-br from-accent/20 to-secondary/20 mb-4 flex items-center justify-center">
                        <img src="<?=  $p->image ?>" alt="" srcset="">
                    </div>
                    <h3
                        class="font-semibold text-foreground mb-2"><?=  $p->name ?></h3>
                    <p class="text-sm text-muted-foreground mb-4"><?=  $p->description ?></p><a class="text-accent text-sm font-medium hover:underline" href="/projects">Learn more →</a>
                </div>
                <?php
                }
                ?>
                

            </div>
            <div class="text-center mt-12"><a href="/projects"><button data-slot="button" class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*=&#x27;size-&#x27;])]:size-4 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive border bg-background shadow-xs hover:bg-accent hover:text-purple-400 dark:bg-input/30 dark:border-input dark:hover:bg-input/50 h-10 rounded-md px-6 has-[&gt;svg]:px-4">View All Projects</button></a></div>
        </div>
    </section>