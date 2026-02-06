<?php
$db = \Config\Database::connect();
$query = $db->query("select * from experience_tbl");
$queryAbout = $db->query("select * from aboutinfo");
$queryHero   = $db->query('SELECT * FROM hero_tbl');
$queryContact  = $db->query('SELECT * FROM contactInfo');
$resultHero = $queryHero->getResult();
$resultContact = $queryContact->getResult();
$resultAbout = $queryAbout->getResult();
$result = $query->getResult();
?>

<div class="min-h-screen bg-background text-foreground">
    <section class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16">
        <div class="mb-12">
            <p class="text-accent text-sm font-semibold uppercase tracking-wider mb-3">About Me</p>
            <h1 class="text-4xl md:text-5xl font-bold text-foreground mb-6"><?= $resultHero[0]->job_title ?></h1>
            <p class="text-lg text-muted-foreground max-w-3xl leading-relaxed"><?= $resultAbout[0]->bio ?></p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mb-16">
            <div class="md:col-span-2">
                <div class="space-y-6">
                    <div class="bg-card rounded-lg border border-border p-8">
                        <h2 class="text-2xl font-semibold text-foreground mb-4">My Story</h2>
                        <p class="text-muted-foreground leading-relaxed mb-4"><?= $resultAbout[0]->story ?></p>
                    </div>
                    <div>
                        <h2 class="text-2xl font-semibold text-foreground mb-6">Experience</h2>
                        <div class="space-y-6">

                            <?php
                            foreach ($result as $e) {
                            ?>
                                <div class="border-l-2 border-accent pl-6 pb-6 relative">
                                    <div class="absolute -left-3 top-0 w-4 h-4 rounded-full bg-accent border-4 border-background"></div>
                                    <div>
                                        <h3 class="text-lg font-semibold text-foreground"><?= $e->job_title ?></h3>
                                        <p class="text-accent text-sm font-medium mt-1"><?= $e->company_name ?></p>
                                        <p class="text-xs text-muted-foreground mt-1"><?= $e->duration ?></p>
                                        <p class="text-muted-foreground mt-3"><?= $e->description ?></p>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>




                        </div>
                    </div>
                </div>
            </div>
            <div class="space-y-6">
                <div class="rounded-lg border border-border bg-card p-8 flex items-center justify-center aspect-square">
                    <div class="text-center">
                        <div class="w-32 h-32 rounded-full bg-gradient-to-br from-accent/20 to-secondary/20 mx-auto flex items-center justify-center mb-4">
                            <span class="text-4xl">👨‍💻</span>
                        </div>
                        <h3 class="font-semibold text-foreground"><?= $resultHero[0]->name ?></h3>
                        <p class="text-sm text-muted-foreground mt-1"><?= $resultHero[0]->job_title ?></p>
                    </div>
                </div>
                <a href="<?= base_url($resultAbout[0]->cv) ?>" data-slot="button" class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*=&#x27;size-&#x27;])]:size-4 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive bg-primary text-primary-foreground hover:bg-primary/90 h-10 rounded-md px-6 has-[&gt;svg]:px-4 w-full gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-download h-4 w-4">
                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                        <polyline points="7 10 12 15 17 10"></polyline>
                        <line x1="12" x2="12" y1="15" y2="3"></line>
                    </svg>
                    Download CV
                </a>
                <div class="bg-card rounded-lg border border-border p-6 space-y-4">
                    <h3 class="font-semibold text-foreground">Contact Info</h3>
                    <div class="space-y-3 text-sm">
                        <div>
                            <p class="text-muted-foreground">Email</p>
                            <a href="mailto:alex@example.com" class="text-accent hover:underline"><?= $resultContact[0]->email ?></a>
                        </div>
                        <div>
                            <p class="text-muted-foreground">Location</p>
                            <p class="text-foreground"><?= $resultContact[0]->address ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--$-->
    <!--/$-->
    <!--$-->
    <!--/$-->