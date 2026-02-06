<?php
$db = \Config\Database::connect();
$querySkillCate = $db->query("select * from skill_cate_tbl");
$resultSkillCate = $querySkillCate->getResult();
?>

<div class="min-h-screen bg-background text-foreground">
    <section class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16">
        <div class="mb-12">
            <p class="text-accent text-sm font-semibold uppercase tracking-wider mb-3">Skills &amp;Expertise</p>
            <h1 class="text-4xl md:text-5xl font-bold text-foreground mb-6">Technical Skills</h1>
            <p class="text-lg text-muted-foreground max-w-3xl leading-relaxed">A comprehensive overview of my
                technical expertise and proficiency levels in various technologies and tools.</p>
        </div>
    </section>
    <section class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-12">
        <div class="space-y-16">
            <?php
            foreach ($resultSkillCate as $c) {
            ?>
            <div>
                    <h2 class="text-2xl font-semibold text-foreground mb-8"><?= $c->name ?></h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <?php 
                        $querySkill = $db->query("select * from skill_tbl where category =". $c->id);
                        $resultSkill = $querySkill->getResult();

                        foreach ($resultSkill as $s) {
                       
                        ?>
                        <div class="space-y-2">
                            <div class="flex justify-between items-center mb-2">
                                <h3 class="font-semibold text-foreground"><?= $s->skill_name ?></h3>
                                <span class="text-sm text-muted-foreground"><?= $s->level ?>
                                    <!-- -->
                                    %</span>
                            </div>
                            <div class="w-full bg-card rounded-full h-2.5 overflow-hidden border border-border">
                                <div class="bg-gradient-to-r from-accent to-secondary h-full rounded-full transition-all duration-500"
                                    style="width:<?= $s->level ?>%"></div>
                            </div>
                        </div>
                        <?php 
                        }
                        ?>
                        
                        
                    </div>
                </div>
            <?php
            }
            ?>


        </div>
    </section>
    <section class="bg-card py-16 mt-12">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-background rounded-lg border border-border p-8">
                    <h3 class="text-lg font-semibold text-foreground mb-3">Full Stack Development</h3>
                    <p class="text-muted-foreground text-sm leading-relaxed">Expertise in both frontend and backend
                        technologies, allowing me to build complete solutions from database to user interface.</p>
                </div>
                <div class="bg-background rounded-lg border border-border p-8">
                    <h3 class="text-lg font-semibold text-foreground mb-3">Modern Frameworks</h3>
                    <p class="text-muted-foreground text-sm leading-relaxed">Proficient with React, Next.js, and
                        other modern JavaScript frameworks for building performant and scalable web applications.
                    </p>
                </div>
                <div class="bg-background rounded-lg border border-border p-8">
                    <h3 class="text-lg font-semibold text-foreground mb-3">Best Practices</h3>
                    <p class="text-muted-foreground text-sm leading-relaxed">Strong commitment to code quality,
                        testing, accessibility, and performance optimization in all projects.</p>
                </div>
            </div>
        </div>
    </section>