<main class="flex-1 overflow-auto">
            <div class="p-8 space-y-8">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div data-slot="card" class="text-card-foreground flex flex-col gap-6 rounded-xl border shadow-sm p-6 bg-card border-border">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-muted-foreground mb-1">Total Projects</p>
                                <p class="text-3xl font-bold text-foreground">12</p>
                            </div>
                            <div class="p-3 rounded-lg bg-blue-50 dark:bg-blue-950 text-blue-600 dark:text-blue-400"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-code-xml w-6 h-6"><path d="m18 16 4-4-4-4"></path><path d="m6 8-4 4 4 4"></path><path d="m14.5 4-5 16"></path></svg></div>
                        </div>
                    </div>
                    <div data-slot="card" class="text-card-foreground flex flex-col gap-6 rounded-xl border shadow-sm p-6 bg-card border-border">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-muted-foreground mb-1">Total Skills</p>
                                <p class="text-3xl font-bold text-foreground">24</p>
                            </div>
                            <div class="p-3 rounded-lg bg-purple-50 dark:bg-purple-950 text-purple-600 dark:text-purple-400"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-layers w-6 h-6"><path d="m12.83 2.18a2 2 0 0 0-1.66 0L2.6 6.08a1 1 0 0 0 0 1.83l8.58 3.91a2 2 0 0 0 1.66 0l8.58-3.9a1 1 0 0 0 0-1.83Z"></path><path d="m22 17.65-9.17 4.16a2 2 0 0 1-1.66 0L2 17.65"></path><path d="m22 12.65-9.17 4.16a2 2 0 0 1-1.66 0L2 12.65"></path></svg></div>
                        </div>
                    </div>
                    <div data-slot="card" class="text-card-foreground flex flex-col gap-6 rounded-xl border shadow-sm p-6 bg-card border-border">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-muted-foreground mb-1">Last Updated</p>
                                <p class="text-3xl font-bold text-foreground">Today</p>
                            </div>
                            <div class="p-3 rounded-lg bg-green-50 dark:bg-green-950 text-green-600 dark:text-green-400"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock w-6 h-6"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg></div>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    <div class="lg:col-span-2">
                        <div data-slot="card" class="text-card-foreground flex flex-col gap-6 rounded-xl border shadow-sm p-6 bg-card border-border">
                            <h2 class="text-xl font-bold text-foreground mb-6">Recent Activity</h2>
                            <div class="space-y-4">
                                <div class="flex items-start justify-between p-4 rounded-lg hover:bg-muted transition-colors duration-200 border border-transparent hover:border-border">
                                    <div class="flex-1">
                                        <p class="font-medium text-foreground">Updated project</p>
                                        <p class="text-sm text-muted-foreground mt-1">Advanced React Dashboard</p>
                                    </div>
                                    <p class="text-xs text-muted-foreground whitespace-nowrap ml-4">2 hours ago</p>
                                </div>
                                <div class="flex items-start justify-between p-4 rounded-lg hover:bg-muted transition-colors duration-200 border border-transparent hover:border-border">
                                    <div class="flex-1">
                                        <p class="font-medium text-foreground">Added skill</p>
                                        <p class="text-sm text-muted-foreground mt-1">TypeScript - 95%</p>
                                    </div>
                                    <p class="text-xs text-muted-foreground whitespace-nowrap ml-4">5 hours ago</p>
                                </div>
                                <div class="flex items-start justify-between p-4 rounded-lg hover:bg-muted transition-colors duration-200 border border-transparent hover:border-border">
                                    <div class="flex-1">
                                        <p class="font-medium text-foreground">Updated experience</p>
                                        <p class="text-sm text-muted-foreground mt-1">Senior Frontend Developer</p>
                                    </div>
                                    <p class="text-xs text-muted-foreground whitespace-nowrap ml-4">1 day ago</p>
                                </div>
                                <div class="flex items-start justify-between p-4 rounded-lg hover:bg-muted transition-colors duration-200 border border-transparent hover:border-border">
                                    <div class="flex-1">
                                        <p class="font-medium text-foreground">Modified branding</p>
                                        <p class="text-sm text-muted-foreground mt-1">Logo and primary colors</p>
                                    </div>
                                    <p class="text-xs text-muted-foreground whitespace-nowrap ml-4">2 days ago</p>
                                </div>
                                <div class="flex items-start justify-between p-4 rounded-lg hover:bg-muted transition-colors duration-200 border border-transparent hover:border-border">
                                    <div class="flex-1">
                                        <p class="font-medium text-foreground">Added project</p>
                                        <p class="text-sm text-muted-foreground mt-1">Full-stack E-commerce Platform</p>
                                    </div>
                                    <p class="text-xs text-muted-foreground whitespace-nowrap ml-4">3 days ago</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div data-slot="card" class="text-card-foreground flex flex-col gap-6 rounded-xl border shadow-sm p-6 bg-card border-border">
                            <h2 class="text-xl font-bold text-foreground mb-6">Portfolio Status</h2>
                            <div class="space-y-4">
                                <div>
                                    <div class="flex justify-between mb-2"><span class="text-sm text-muted-foreground">Profile Completion</span><span class="text-sm font-semibold text-foreground">85%</span></div>
                                    <div class="w-full bg-muted rounded-full h-2">
                                        <div class="bg-primary h-2 rounded-full" style="width:85%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-2"><span class="text-sm text-muted-foreground">Content Status</span><span class="text-sm font-semibold text-foreground">100%</span></div>
                                    <div class="w-full bg-muted rounded-full h-2">
                                        <div class="bg-accent h-2 rounded-full" style="width:100%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-2"><span class="text-sm text-muted-foreground">SEO Optimization</span><span class="text-sm font-semibold text-foreground">72%</span></div>
                                    <div class="w-full bg-muted rounded-full h-2">
                                        <div class="bg-chart-2 h-2 rounded-full" style="width:72%"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-6 p-4 bg-muted rounded-lg border border-border">
                                <p class="text-xs text-muted-foreground">Last sync</p>
                                <p class="text-sm font-semibold text-foreground mt-1">5 minutes ago</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>