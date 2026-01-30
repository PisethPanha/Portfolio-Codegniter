<main class="flex-1 overflow-auto">
                    <div class="p-8 space-y-8">
                        <div class="flex justify-between items-center">
                            <div>
                                <h2 class="text-3xl font-bold text-foreground">Skills &amp;Proficiency</h2>
                                <p class="text-muted-foreground mt-2">Organize and manage your technical skills with proficiency levels</p>
                            </div>
                            <button data-slot="button" class="justify-center whitespace-nowrap rounded-md text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*=&#x27;size-&#x27;])]:size-4 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive h-9 px-4 py-2 has-[&gt;svg]:px-3 bg-primary text-primary-foreground hover:bg-primary/90 flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-plus w-4 h-4">
                                    <path d="M5 12h14"></path>
                                    <path d="M12 5v14"></path>
                                </svg>
                                Add Skill
                            </button>
                        </div>
                        <div class="space-y-8">
                            <div>
                                <h3 class="text-xl font-bold text-foreground mb-4">Frontend Development</h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                                    <div data-slot="card" class="text-card-foreground flex flex-col gap-6 rounded-xl border shadow-sm p-4 bg-card border-border">
                                        <div class="flex justify-between items-start mb-3">
                                            <h4 class="font-semibold text-foreground">React</h4>
                                            <div class="flex gap-2">
                                                <button class="p-1.5 text-muted-foreground hover:text-foreground hover:bg-muted rounded-lg transition-colors duration-200">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-pen w-3.5 h-3.5">
                                                        <path d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z"></path>
                                                    </svg>
                                                </button>
                                                <button class="p-1.5 text-muted-foreground hover:text-destructive hover:bg-destructive/10 rounded-lg transition-colors duration-200">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trash2 w-3.5 h-3.5">
                                                        <path d="M3 6h18"></path>
                                                        <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                                                        <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                                                        <line x1="10" x2="10" y1="11" y2="17"></line>
                                                        <line x1="14" x2="14" y1="11" y2="17"></line>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="space-y-2">
                                            <div class="flex justify-between text-xs">
                                                <span class="text-muted-foreground">Proficiency</span>
                                                <span class="font-semibold text-foreground">95
                                                <!-- -->
                                                %</span>
                                            </div>
                                            <div class="w-full bg-muted rounded-full h-2">
                                                <div class="bg-primary h-2 rounded-full transition-all duration-300" style="width:95%"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-slot="card" class="text-card-foreground flex flex-col gap-6 rounded-xl border shadow-sm p-4 bg-card border-border">
                                        <div class="flex justify-between items-start mb-3">
                                            <h4 class="font-semibold text-foreground">Next.js</h4>
                                            <div class="flex gap-2">
                                                <button class="p-1.5 text-muted-foreground hover:text-foreground hover:bg-muted rounded-lg transition-colors duration-200">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-pen w-3.5 h-3.5">
                                                        <path d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z"></path>
                                                    </svg>
                                                </button>
                                                <button class="p-1.5 text-muted-foreground hover:text-destructive hover:bg-destructive/10 rounded-lg transition-colors duration-200">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trash2 w-3.5 h-3.5">
                                                        <path d="M3 6h18"></path>
                                                        <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                                                        <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                                                        <line x1="10" x2="10" y1="11" y2="17"></line>
                                                        <line x1="14" x2="14" y1="11" y2="17"></line>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="space-y-2">
                                            <div class="flex justify-between text-xs">
                                                <span class="text-muted-foreground">Proficiency</span>
                                                <span class="font-semibold text-foreground">90
                                                <!-- -->
                                                %</span>
                                            </div>
                                            <div class="w-full bg-muted rounded-full h-2">
                                                <div class="bg-primary h-2 rounded-full transition-all duration-300" style="width:90%"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-slot="card" class="text-card-foreground flex flex-col gap-6 rounded-xl border shadow-sm p-4 bg-card border-border">
                                        <div class="flex justify-between items-start mb-3">
                                            <h4 class="font-semibold text-foreground">TypeScript</h4>
                                            <div class="flex gap-2">
                                                <button class="p-1.5 text-muted-foreground hover:text-foreground hover:bg-muted rounded-lg transition-colors duration-200">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-pen w-3.5 h-3.5">
                                                        <path d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z"></path>
                                                    </svg>
                                                </button>
                                                <button class="p-1.5 text-muted-foreground hover:text-destructive hover:bg-destructive/10 rounded-lg transition-colors duration-200">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trash2 w-3.5 h-3.5">
                                                        <path d="M3 6h18"></path>
                                                        <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                                                        <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                                                        <line x1="10" x2="10" y1="11" y2="17"></line>
                                                        <line x1="14" x2="14" y1="11" y2="17"></line>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="space-y-2">
                                            <div class="flex justify-between text-xs">
                                                <span class="text-muted-foreground">Proficiency</span>
                                                <span class="font-semibold text-foreground">90
                                                <!-- -->
                                                %</span>
                                            </div>
                                            <div class="w-full bg-muted rounded-full h-2">
                                                <div class="bg-primary h-2 rounded-full transition-all duration-300" style="width:90%"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-slot="card" class="text-card-foreground flex flex-col gap-6 rounded-xl border shadow-sm p-4 bg-card border-border">
                                        <div class="flex justify-between items-start mb-3">
                                            <h4 class="font-semibold text-foreground">Tailwind CSS</h4>
                                            <div class="flex gap-2">
                                                <button class="p-1.5 text-muted-foreground hover:text-foreground hover:bg-muted rounded-lg transition-colors duration-200">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-pen w-3.5 h-3.5">
                                                        <path d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z"></path>
                                                    </svg>
                                                </button>
                                                <button class="p-1.5 text-muted-foreground hover:text-destructive hover:bg-destructive/10 rounded-lg transition-colors duration-200">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trash2 w-3.5 h-3.5">
                                                        <path d="M3 6h18"></path>
                                                        <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                                                        <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                                                        <line x1="10" x2="10" y1="11" y2="17"></line>
                                                        <line x1="14" x2="14" y1="11" y2="17"></line>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="space-y-2">
                                            <div class="flex justify-between text-xs">
                                                <span class="text-muted-foreground">Proficiency</span>
                                                <span class="font-semibold text-foreground">95
                                                <!-- -->
                                                %</span>
                                            </div>
                                            <div class="w-full bg-muted rounded-full h-2">
                                                <div class="bg-primary h-2 rounded-full transition-all duration-300" style="width:95%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-foreground mb-4">Backend Development</h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                                    <div data-slot="card" class="text-card-foreground flex flex-col gap-6 rounded-xl border shadow-sm p-4 bg-card border-border">
                                        <div class="flex justify-between items-start mb-3">
                                            <h4 class="font-semibold text-foreground">Node.js</h4>
                                            <div class="flex gap-2">
                                                <button class="p-1.5 text-muted-foreground hover:text-foreground hover:bg-muted rounded-lg transition-colors duration-200">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-pen w-3.5 h-3.5">
                                                        <path d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z"></path>
                                                    </svg>
                                                </button>
                                                <button class="p-1.5 text-muted-foreground hover:text-destructive hover:bg-destructive/10 rounded-lg transition-colors duration-200">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trash2 w-3.5 h-3.5">
                                                        <path d="M3 6h18"></path>
                                                        <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                                                        <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                                                        <line x1="10" x2="10" y1="11" y2="17"></line>
                                                        <line x1="14" x2="14" y1="11" y2="17"></line>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="space-y-2">
                                            <div class="flex justify-between text-xs">
                                                <span class="text-muted-foreground">Proficiency</span>
                                                <span class="font-semibold text-foreground">88
                                                <!-- -->
                                                %</span>
                                            </div>
                                            <div class="w-full bg-muted rounded-full h-2">
                                                <div class="bg-primary h-2 rounded-full transition-all duration-300" style="width:88%"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-slot="card" class="text-card-foreground flex flex-col gap-6 rounded-xl border shadow-sm p-4 bg-card border-border">
                                        <div class="flex justify-between items-start mb-3">
                                            <h4 class="font-semibold text-foreground">PostgreSQL</h4>
                                            <div class="flex gap-2">
                                                <button class="p-1.5 text-muted-foreground hover:text-foreground hover:bg-muted rounded-lg transition-colors duration-200">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-pen w-3.5 h-3.5">
                                                        <path d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z"></path>
                                                    </svg>
                                                </button>
                                                <button class="p-1.5 text-muted-foreground hover:text-destructive hover:bg-destructive/10 rounded-lg transition-colors duration-200">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trash2 w-3.5 h-3.5">
                                                        <path d="M3 6h18"></path>
                                                        <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                                                        <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                                                        <line x1="10" x2="10" y1="11" y2="17"></line>
                                                        <line x1="14" x2="14" y1="11" y2="17"></line>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="space-y-2">
                                            <div class="flex justify-between text-xs">
                                                <span class="text-muted-foreground">Proficiency</span>
                                                <span class="font-semibold text-foreground">85
                                                <!-- -->
                                                %</span>
                                            </div>
                                            <div class="w-full bg-muted rounded-full h-2">
                                                <div class="bg-primary h-2 rounded-full transition-all duration-300" style="width:85%"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-slot="card" class="text-card-foreground flex flex-col gap-6 rounded-xl border shadow-sm p-4 bg-card border-border">
                                        <div class="flex justify-between items-start mb-3">
                                            <h4 class="font-semibold text-foreground">MongoDB</h4>
                                            <div class="flex gap-2">
                                                <button class="p-1.5 text-muted-foreground hover:text-foreground hover:bg-muted rounded-lg transition-colors duration-200">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-pen w-3.5 h-3.5">
                                                        <path d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z"></path>
                                                    </svg>
                                                </button>
                                                <button class="p-1.5 text-muted-foreground hover:text-destructive hover:bg-destructive/10 rounded-lg transition-colors duration-200">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trash2 w-3.5 h-3.5">
                                                        <path d="M3 6h18"></path>
                                                        <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                                                        <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                                                        <line x1="10" x2="10" y1="11" y2="17"></line>
                                                        <line x1="14" x2="14" y1="11" y2="17"></line>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="space-y-2">
                                            <div class="flex justify-between text-xs">
                                                <span class="text-muted-foreground">Proficiency</span>
                                                <span class="font-semibold text-foreground">80
                                                <!-- -->
                                                %</span>
                                            </div>
                                            <div class="w-full bg-muted rounded-full h-2">
                                                <div class="bg-primary h-2 rounded-full transition-all duration-300" style="width:80%"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-slot="card" class="text-card-foreground flex flex-col gap-6 rounded-xl border shadow-sm p-4 bg-card border-border">
                                        <div class="flex justify-between items-start mb-3">
                                            <h4 class="font-semibold text-foreground">REST APIs</h4>
                                            <div class="flex gap-2">
                                                <button class="p-1.5 text-muted-foreground hover:text-foreground hover:bg-muted rounded-lg transition-colors duration-200">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-pen w-3.5 h-3.5">
                                                        <path d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z"></path>
                                                    </svg>
                                                </button>
                                                <button class="p-1.5 text-muted-foreground hover:text-destructive hover:bg-destructive/10 rounded-lg transition-colors duration-200">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trash2 w-3.5 h-3.5">
                                                        <path d="M3 6h18"></path>
                                                        <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                                                        <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                                                        <line x1="10" x2="10" y1="11" y2="17"></line>
                                                        <line x1="14" x2="14" y1="11" y2="17"></line>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="space-y-2">
                                            <div class="flex justify-between text-xs">
                                                <span class="text-muted-foreground">Proficiency</span>
                                                <span class="font-semibold text-foreground">92
                                                <!-- -->
                                                %</span>
                                            </div>
                                            <div class="w-full bg-muted rounded-full h-2">
                                                <div class="bg-primary h-2 rounded-full transition-all duration-300" style="width:92%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-foreground mb-4">Tools &amp;DevOps</h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                                    <div data-slot="card" class="text-card-foreground flex flex-col gap-6 rounded-xl border shadow-sm p-4 bg-card border-border">
                                        <div class="flex justify-between items-start mb-3">
                                            <h4 class="font-semibold text-foreground">Git</h4>
                                            <div class="flex gap-2">
                                                <button class="p-1.5 text-muted-foreground hover:text-foreground hover:bg-muted rounded-lg transition-colors duration-200">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-pen w-3.5 h-3.5">
                                                        <path d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z"></path>
                                                    </svg>
                                                </button>
                                                <button class="p-1.5 text-muted-foreground hover:text-destructive hover:bg-destructive/10 rounded-lg transition-colors duration-200">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trash2 w-3.5 h-3.5">
                                                        <path d="M3 6h18"></path>
                                                        <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                                                        <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                                                        <line x1="10" x2="10" y1="11" y2="17"></line>
                                                        <line x1="14" x2="14" y1="11" y2="17"></line>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="space-y-2">
                                            <div class="flex justify-between text-xs">
                                                <span class="text-muted-foreground">Proficiency</span>
                                                <span class="font-semibold text-foreground">95
                                                <!-- -->
                                                %</span>
                                            </div>
                                            <div class="w-full bg-muted rounded-full h-2">
                                                <div class="bg-primary h-2 rounded-full transition-all duration-300" style="width:95%"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-slot="card" class="text-card-foreground flex flex-col gap-6 rounded-xl border shadow-sm p-4 bg-card border-border">
                                        <div class="flex justify-between items-start mb-3">
                                            <h4 class="font-semibold text-foreground">Docker</h4>
                                            <div class="flex gap-2">
                                                <button class="p-1.5 text-muted-foreground hover:text-foreground hover:bg-muted rounded-lg transition-colors duration-200">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-pen w-3.5 h-3.5">
                                                        <path d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z"></path>
                                                    </svg>
                                                </button>
                                                <button class="p-1.5 text-muted-foreground hover:text-destructive hover:bg-destructive/10 rounded-lg transition-colors duration-200">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trash2 w-3.5 h-3.5">
                                                        <path d="M3 6h18"></path>
                                                        <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                                                        <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                                                        <line x1="10" x2="10" y1="11" y2="17"></line>
                                                        <line x1="14" x2="14" y1="11" y2="17"></line>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="space-y-2">
                                            <div class="flex justify-between text-xs">
                                                <span class="text-muted-foreground">Proficiency</span>
                                                <span class="font-semibold text-foreground">80
                                                <!-- -->
                                                %</span>
                                            </div>
                                            <div class="w-full bg-muted rounded-full h-2">
                                                <div class="bg-primary h-2 rounded-full transition-all duration-300" style="width:80%"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-slot="card" class="text-card-foreground flex flex-col gap-6 rounded-xl border shadow-sm p-4 bg-card border-border">
                                        <div class="flex justify-between items-start mb-3">
                                            <h4 class="font-semibold text-foreground">AWS</h4>
                                            <div class="flex gap-2">
                                                <button class="p-1.5 text-muted-foreground hover:text-foreground hover:bg-muted rounded-lg transition-colors duration-200">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-pen w-3.5 h-3.5">
                                                        <path d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z"></path>
                                                    </svg>
                                                </button>
                                                <button class="p-1.5 text-muted-foreground hover:text-destructive hover:bg-destructive/10 rounded-lg transition-colors duration-200">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trash2 w-3.5 h-3.5">
                                                        <path d="M3 6h18"></path>
                                                        <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                                                        <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                                                        <line x1="10" x2="10" y1="11" y2="17"></line>
                                                        <line x1="14" x2="14" y1="11" y2="17"></line>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="space-y-2">
                                            <div class="flex justify-between text-xs">
                                                <span class="text-muted-foreground">Proficiency</span>
                                                <span class="font-semibold text-foreground">75
                                                <!-- -->
                                                %</span>
                                            </div>
                                            <div class="w-full bg-muted rounded-full h-2">
                                                <div class="bg-primary h-2 rounded-full transition-all duration-300" style="width:75%"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-slot="card" class="text-card-foreground flex flex-col gap-6 rounded-xl border shadow-sm p-4 bg-card border-border">
                                        <div class="flex justify-between items-start mb-3">
                                            <h4 class="font-semibold text-foreground">CI/CD</h4>
                                            <div class="flex gap-2">
                                                <button class="p-1.5 text-muted-foreground hover:text-foreground hover:bg-muted rounded-lg transition-colors duration-200">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-pen w-3.5 h-3.5">
                                                        <path d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z"></path>
                                                    </svg>
                                                </button>
                                                <button class="p-1.5 text-muted-foreground hover:text-destructive hover:bg-destructive/10 rounded-lg transition-colors duration-200">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trash2 w-3.5 h-3.5">
                                                        <path d="M3 6h18"></path>
                                                        <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                                                        <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                                                        <line x1="10" x2="10" y1="11" y2="17"></line>
                                                        <line x1="14" x2="14" y1="11" y2="17"></line>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="space-y-2">
                                            <div class="flex justify-between text-xs">
                                                <span class="text-muted-foreground">Proficiency</span>
                                                <span class="font-semibold text-foreground">85
                                                <!-- -->
                                                %</span>
                                            </div>
                                            <div class="w-full bg-muted rounded-full h-2">
                                                <div class="bg-primary h-2 rounded-full transition-all duration-300" style="width:85%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-foreground mb-4">Other Skills</h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                                    <div data-slot="card" class="text-card-foreground flex flex-col gap-6 rounded-xl border shadow-sm p-4 bg-card border-border">
                                        <div class="flex justify-between items-start mb-3">
                                            <h4 class="font-semibold text-foreground">UI/UX Design</h4>
                                            <div class="flex gap-2">
                                                <button class="p-1.5 text-muted-foreground hover:text-foreground hover:bg-muted rounded-lg transition-colors duration-200">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-pen w-3.5 h-3.5">
                                                        <path d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z"></path>
                                                    </svg>
                                                </button>
                                                <button class="p-1.5 text-muted-foreground hover:text-destructive hover:bg-destructive/10 rounded-lg transition-colors duration-200">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trash2 w-3.5 h-3.5">
                                                        <path d="M3 6h18"></path>
                                                        <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                                                        <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                                                        <line x1="10" x2="10" y1="11" y2="17"></line>
                                                        <line x1="14" x2="14" y1="11" y2="17"></line>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="space-y-2">
                                            <div class="flex justify-between text-xs">
                                                <span class="text-muted-foreground">Proficiency</span>
                                                <span class="font-semibold text-foreground">80
                                                <!-- -->
                                                %</span>
                                            </div>
                                            <div class="w-full bg-muted rounded-full h-2">
                                                <div class="bg-primary h-2 rounded-full transition-all duration-300" style="width:80%"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-slot="card" class="text-card-foreground flex flex-col gap-6 rounded-xl border shadow-sm p-4 bg-card border-border">
                                        <div class="flex justify-between items-start mb-3">
                                            <h4 class="font-semibold text-foreground">Problem Solving</h4>
                                            <div class="flex gap-2">
                                                <button class="p-1.5 text-muted-foreground hover:text-foreground hover:bg-muted rounded-lg transition-colors duration-200">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-pen w-3.5 h-3.5">
                                                        <path d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z"></path>
                                                    </svg>
                                                </button>
                                                <button class="p-1.5 text-muted-foreground hover:text-destructive hover:bg-destructive/10 rounded-lg transition-colors duration-200">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trash2 w-3.5 h-3.5">
                                                        <path d="M3 6h18"></path>
                                                        <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                                                        <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                                                        <line x1="10" x2="10" y1="11" y2="17"></line>
                                                        <line x1="14" x2="14" y1="11" y2="17"></line>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="space-y-2">
                                            <div class="flex justify-between text-xs">
                                                <span class="text-muted-foreground">Proficiency</span>
                                                <span class="font-semibold text-foreground">95
                                                <!-- -->
                                                %</span>
                                            </div>
                                            <div class="w-full bg-muted rounded-full h-2">
                                                <div class="bg-primary h-2 rounded-full transition-all duration-300" style="width:95%"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-slot="card" class="text-card-foreground flex flex-col gap-6 rounded-xl border shadow-sm p-4 bg-card border-border">
                                        <div class="flex justify-between items-start mb-3">
                                            <h4 class="font-semibold text-foreground">Team Leadership</h4>
                                            <div class="flex gap-2">
                                                <button class="p-1.5 text-muted-foreground hover:text-foreground hover:bg-muted rounded-lg transition-colors duration-200">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-pen w-3.5 h-3.5">
                                                        <path d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z"></path>
                                                    </svg>
                                                </button>
                                                <button class="p-1.5 text-muted-foreground hover:text-destructive hover:bg-destructive/10 rounded-lg transition-colors duration-200">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trash2 w-3.5 h-3.5">
                                                        <path d="M3 6h18"></path>
                                                        <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                                                        <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                                                        <line x1="10" x2="10" y1="11" y2="17"></line>
                                                        <line x1="14" x2="14" y1="11" y2="17"></line>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="space-y-2">
                                            <div class="flex justify-between text-xs">
                                                <span class="text-muted-foreground">Proficiency</span>
                                                <span class="font-semibold text-foreground">88
                                                <!-- -->
                                                %</span>
                                            </div>
                                            <div class="w-full bg-muted rounded-full h-2">
                                                <div class="bg-primary h-2 rounded-full transition-all duration-300" style="width:88%"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-slot="card" class="text-card-foreground flex flex-col gap-6 rounded-xl border shadow-sm p-4 bg-card border-border">
                                        <div class="flex justify-between items-start mb-3">
                                            <h4 class="font-semibold text-foreground">Agile Methodologies</h4>
                                            <div class="flex gap-2">
                                                <button class="p-1.5 text-muted-foreground hover:text-foreground hover:bg-muted rounded-lg transition-colors duration-200">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-pen w-3.5 h-3.5">
                                                        <path d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z"></path>
                                                    </svg>
                                                </button>
                                                <button class="p-1.5 text-muted-foreground hover:text-destructive hover:bg-destructive/10 rounded-lg transition-colors duration-200">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trash2 w-3.5 h-3.5">
                                                        <path d="M3 6h18"></path>
                                                        <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                                                        <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                                                        <line x1="10" x2="10" y1="11" y2="17"></line>
                                                        <line x1="14" x2="14" y1="11" y2="17"></line>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="space-y-2">
                                            <div class="flex justify-between text-xs">
                                                <span class="text-muted-foreground">Proficiency</span>
                                                <span class="font-semibold text-foreground">90
                                                <!-- -->
                                                %</span>
                                            </div>
                                            <div class="w-full bg-muted rounded-full h-2">
                                                <div class="bg-primary h-2 rounded-full transition-all duration-300" style="width:90%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--$-->
                    <!--/$-->
                </main>