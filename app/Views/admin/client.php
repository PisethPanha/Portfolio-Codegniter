 <main class="flex-1 overflow-auto">
                    <div class="p-8 space-y-8">
                        <div class="relative">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-search absolute left-4 top-1/2 transform -translate-y-1/2 w-5 h-5 text-muted-foreground">
                                <circle cx="11" cy="11" r="8"></circle>
                                <path d="m21 21-4.3-4.3"></path>
                            </svg>
                            <input type="text" placeholder="Search by name, email, or subject..." class="w-full pl-12 pr-4 py-3 bg-input border border-border rounded-lg text-foreground placeholder-muted-foreground focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" value=""/>
                        </div>
                        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                            <div class="lg:col-span-2">
                                <div class="space-y-3 max-h-[calc(100vh-200px)] overflow-y-auto">
                                    <div data-slot="card" class="text-card-foreground flex flex-col gap-6 rounded-xl border shadow-sm p-4 bg-card border-border hover:border-primary/50 transition-colors duration-200 cursor-pointer">
                                        <div class="flex items-start justify-between">
                                            <div class="flex-1 min-w-0">
                                                <h3 class="font-semibold text-foreground text-base">Sarah Johnson</h3>
                                                <p class="text-sm text-muted-foreground truncate">sarah.johnson@company.com</p>
                                                <p class="text-sm font-medium text-primary mt-2 line-clamp-1">Web Design Project</p>
                                                <p class="text-xs text-muted-foreground mt-2">2024-01-22</p>
                                            </div>
                                            <div class="flex items-center gap-2 ml-4">
                                                <button class="p-2 text-muted-foreground hover:text-foreground hover:bg-muted rounded-lg transition-colors duration-200" title="View">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye w-4 h-4">
                                                        <path d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0"></path>
                                                        <circle cx="12" cy="12" r="3"></circle>
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
                                    <div data-slot="card" class="text-card-foreground flex flex-col gap-6 rounded-xl border shadow-sm p-4 bg-card border-border hover:border-primary/50 transition-colors duration-200 cursor-pointer">
                                        <div class="flex items-start justify-between">
                                            <div class="flex-1 min-w-0">
                                                <h3 class="font-semibold text-foreground text-base">Michael Chen</h3>
                                                <p class="text-sm text-muted-foreground truncate">mchen@startupxyz.io</p>
                                                <p class="text-sm font-medium text-primary mt-2 line-clamp-1">Full-Stack Development</p>
                                                <p class="text-xs text-muted-foreground mt-2">2024-01-20</p>
                                            </div>
                                            <div class="flex items-center gap-2 ml-4">
                                                <button class="p-2 text-muted-foreground hover:text-foreground hover:bg-muted rounded-lg transition-colors duration-200" title="View">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye w-4 h-4">
                                                        <path d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0"></path>
                                                        <circle cx="12" cy="12" r="3"></circle>
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
                                    <div data-slot="card" class="text-card-foreground flex flex-col gap-6 rounded-xl border shadow-sm p-4 bg-card border-border hover:border-primary/50 transition-colors duration-200 cursor-pointer">
                                        <div class="flex items-start justify-between">
                                            <div class="flex-1 min-w-0">
                                                <h3 class="font-semibold text-foreground text-base">Emily Rodriguez</h3>
                                                <p class="text-sm text-muted-foreground truncate">emily@designstudio.com</p>
                                                <p class="text-sm font-medium text-primary mt-2 line-clamp-1">Collaboration Opportunity</p>
                                                <p class="text-xs text-muted-foreground mt-2">2024-01-18</p>
                                            </div>
                                            <div class="flex items-center gap-2 ml-4">
                                                <button class="p-2 text-muted-foreground hover:text-foreground hover:bg-muted rounded-lg transition-colors duration-200" title="View">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye w-4 h-4">
                                                        <path d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0"></path>
                                                        <circle cx="12" cy="12" r="3"></circle>
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
                                    <div data-slot="card" class="text-card-foreground flex flex-col gap-6 rounded-xl border shadow-sm p-4 bg-card border-border hover:border-primary/50 transition-colors duration-200 cursor-pointer">
                                        <div class="flex items-start justify-between">
                                            <div class="flex-1 min-w-0">
                                                <h3 class="font-semibold text-foreground text-base">David Williams</h3>
                                                <p class="text-sm text-muted-foreground truncate">david.w@techcorp.com</p>
                                                <p class="text-sm font-medium text-primary mt-2 line-clamp-1">Job Opportunity</p>
                                                <p class="text-xs text-muted-foreground mt-2">2024-01-16</p>
                                            </div>
                                            <div class="flex items-center gap-2 ml-4">
                                                <button class="p-2 text-muted-foreground hover:text-foreground hover:bg-muted rounded-lg transition-colors duration-200" title="View">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye w-4 h-4">
                                                        <path d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0"></path>
                                                        <circle cx="12" cy="12" r="3"></circle>
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
                            <div class="lg:col-span-1">
                                <div data-slot="card" class="text-card-foreground flex-col gap-6 rounded-xl border shadow-sm p-6 bg-card border-border h-full flex items-center justify-center">
                                    <div class="text-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye w-12 h-12 text-muted-foreground mx-auto mb-4 opacity-50">
                                            <path d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0"></path>
                                            <circle cx="12" cy="12" r="3"></circle>
                                        </svg>
                                        <p class="text-muted-foreground">Select a contact to view details</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--$-->
                    <!--/$-->
                </main>