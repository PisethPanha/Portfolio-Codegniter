<main class="flex-1 overflow-auto">
    <div class="p-8 space-y-8">
        <div class="flex justify-between items-center">
            <div>
                <h2 class="text-3xl font-bold text-foreground">Projects</h2>
                <p class="text-muted-foreground mt-2">Showcase your best work and demonstrate your skills</p>
            </div>
            <button data-slot="button" class="justify-center whitespace-nowrap rounded-md text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*=&#x27;size-&#x27;])]:size-4 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive h-9 px-4 py-2 has-[&gt;svg]:px-3 bg-primary text-primary-foreground hover:bg-primary/90 flex items-center gap-2">
                <a
                    class="justify-center flex items-center"
                    href="<?= route_to("admin/add_project") ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-plus w-4 h-4">
                        <path d="M5 12h14"></path>
                        <path d="M12 5v14"></path>
                    </svg>
                    Projects
                </a>
            </button>

        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

            <?php
            foreach ($project as $p) {
            ?>
            <div data-slot="card" class="text-card-foreground gap-6 rounded-xl border  shadow-sm overflow-hidden bg-card border-border hover:border-primary/50 transition-colors duration-200 flex flex-col">
                <div class="relative w-full h-[200px] bg-muted">
                    <img src="<?= $p['image'] ?>" alt="Advanced React Dashboard" class="w-full h-[300px] hover:scale-105 transition-transform duration-300" />
                </div>
                <br><br>
                <div class="p-6 flex flex-col flex-1">

                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-lg font-bold text-foreground flex-1"><?= $p['name'] ?></h3>
                        <div class="flex gap-2 ml-4">
                            <a
                            href="<?= "http://localhost:8080/edit_project/".$p['id'] ?>"
                            class="p-2 text-muted-foreground hover:text-foreground hover:bg-muted rounded-lg transition-colors duration-200" title="Edit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-pen w-4 h-4">
                                    <path d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z"></path>
                                </svg>
                            </a>
                            <a 
                            href="<?= "http://localhost:8080/delete_project/".$p['id'] ?>"
                            class="p-2 text-muted-foreground hover:text-destructive hover:bg-destructive/10 rounded-lg transition-colors duration-200" title="Delete">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trash2 w-4 h-4">
                                    <path d="M3 6h18"></path>
                                    <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                                    <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                                    <line x1="10" x2="10" y1="11" y2="17"></line>
                                    <line x1="14" x2="14" y1="11" y2="17"></line>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <p class="text-foreground text-sm leading-relaxed mb-4 flex-1"><?= $p['description'] ?></p>
                    <div id="stackView" class="flex flex-wrap gap-2">

                        <?php 
                        $stack = $p['stack'];
                        $stacks = explode(", ", $stack );
                        // print_r($stacks);
                        foreach($stacks as $s){
                        
                        ?>
                            <span class="px-3 py-1 bg-primary/10 text-primary rounded-full text-xs font-medium border border-primary/20"><?= $s ?></span> <br>
                        <?php
                            }


                        ?>

                     
                        <!-- <span class="px-3 py-1 bg-primary/10 text-primary rounded-full text-xs font-medium border border-primary/20">React</span>
                        <span class="px-3 py-1 bg-primary/10 text-primary rounded-full text-xs font-medium border border-primary/20">TypeScript</span>
                        <span class="px-3 py-1 bg-primary/10 text-primary rounded-full text-xs font-medium border border-primary/20">Chart.js</span>
                        <span class="px-3 py-1 bg-primary/10 text-primary rounded-full text-xs font-medium border border-primary/20">Tailwind CSS</span> -->
                    </div>
                </div>
            </div>
            <?php
            }

            ?>

            

        </div>
    </div>
    <!--$-->
    <!--/$-->
</main>