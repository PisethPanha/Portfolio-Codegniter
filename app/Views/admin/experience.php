<main class="flex-1 overflow-auto">
    <div class="p-8 space-y-8">
        <div class="flex justify-between items-center">
            <div>
                <h2 class="text-3xl font-bold text-foreground">Work Experience</h2>
                <p class="text-muted-foreground mt-2">Manage and organize your professional experience</p>
            </div>
            <button data-slot="button" class="justify-center whitespace-nowrap rounded-md text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*=&#x27;size-&#x27;])]:size-4 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive h-9 px-4 py-2 has-[&gt;svg]:px-3 bg-primary text-primary-foreground hover:bg-primary/90 flex items-center gap-2">

                <a href="<?= route_to("admin/add_Experience") ?>" class="h-full flex justify-center items-center w-full">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-plus w-4 h-4">
                        <path d="M5 12h14"></path>
                        <path d="M12 5v14"></path>
                    </svg>
                    Add Experience
                </a>
            </button>


        </div>
        <div class="space-y-4">
            <div data-slot="card" class="text-card-foreground flex flex-col gap-6 rounded-xl border shadow-sm p-6 bg-card border-border hover:border-primary/50 transition-colors duration-200">
                <div class="flex items-start justify-between">
                    <div class="flex-1">
                        <div class="flex items-baseline gap-3 mb-2">
                            <h3 class="text-xl font-bold text-foreground">Senior Frontend Developer</h3>
                            <p class="text-sm text-muted-foreground">Tech Innovations Inc.</p>
                        </div>
                        <p class="text-sm text-primary font-medium mb-3">2022 - Present</p>
                        <p class="text-foreground text-sm leading-relaxed">Lead frontend development team, architect scalable UI systems, and mentor junior developers.</p>
                    </div>
                    <div class="flex gap-2 ml-4">
                        <button class="p-2 text-muted-foreground hover:text-foreground hover:bg-muted rounded-lg transition-colors duration-200" title="Edit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-pen w-4 h-4">
                                <path d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z"></path>
                            </svg>
                        </button>
                        <button class="p-2 text-muted-foreground hover:text-destructive hover:bg-destructive/10 rounded-lg transition-colors duration-200" title="Delete">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trash2 w-4 h-4">
                                <path d="M3 6h18"></path>
                                <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                                <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                                <line x1="10" x2="10" y1="11" y2="17"></line>
                                <line x1="14" x2="14" y1="11" y2="17"></line>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div data-slot="card" class="text-card-foreground flex flex-col gap-6 rounded-xl border shadow-sm p-6 bg-card border-border hover:border-primary/50 transition-colors duration-200">
                <div class="flex items-start justify-between">
                    <div class="flex-1">
                        <div class="flex items-baseline gap-3 mb-2">
                            <h3 class="text-xl font-bold text-foreground">Full-Stack Developer</h3>
                            <p class="text-sm text-muted-foreground">Digital Solutions Ltd.</p>
                        </div>
                        <p class="text-sm text-primary font-medium mb-3">2020 - 2022</p>
                        <p class="text-foreground text-sm leading-relaxed">Developed full-stack web applications using React, Node.js, and PostgreSQL.</p>
                    </div>
                    <div class="flex gap-2 ml-4">
                        <button class="p-2 text-muted-foreground hover:text-foreground hover:bg-muted rounded-lg transition-colors duration-200" title="Edit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-pen w-4 h-4">
                                <path d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z"></path>
                            </svg>
                        </button>
                        <button class="p-2 text-muted-foreground hover:text-destructive hover:bg-destructive/10 rounded-lg transition-colors duration-200" title="Delete">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trash2 w-4 h-4">
                                <path d="M3 6h18"></path>
                                <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                                <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                                <line x1="10" x2="10" y1="11" y2="17"></line>
                                <line x1="14" x2="14" y1="11" y2="17"></line>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div data-slot="card" class="text-card-foreground flex flex-col gap-6 rounded-xl border shadow-sm p-6 bg-card border-border hover:border-primary/50 transition-colors duration-200">
                <div class="flex items-start justify-between">
                    <div class="flex-1">
                        <div class="flex items-baseline gap-3 mb-2">
                            <h3 class="text-xl font-bold text-foreground">Junior Developer</h3>
                            <p class="text-sm text-muted-foreground">StartUp Hub</p>
                        </div>
                        <p class="text-sm text-primary font-medium mb-3">2019 - 2020</p>
                        <p class="text-foreground text-sm leading-relaxed">Built responsive UI components and collaborated with design team.</p>
                    </div>
                    <div class="flex gap-2 ml-4">
                        <button class="p-2 text-muted-foreground hover:text-foreground hover:bg-muted rounded-lg transition-colors duration-200" title="Edit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-pen w-4 h-4">
                                <path d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z"></path>
                            </svg>
                        </button>
                        <button class="p-2 text-muted-foreground hover:text-destructive hover:bg-destructive/10 rounded-lg transition-colors duration-200" title="Delete">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trash2 w-4 h-4">
                                <path d="M3 6h18"></path>
                                <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                                <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                                <line x1="10" x2="10" y1="11" y2="17"></line>
                                <line x1="14" x2="14" y1="11" y2="17"></line>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--$-->
    <!--/$-->
</main>