<main class="flex-1 overflow-auto">
                    <div class="p-8 space-y-8">
                        <div>
                            <h2 class="text-3xl font-bold text-foreground">Contact Information</h2>
                            <p class="text-muted-foreground mt-2">Manage your contact details and social media links</p>
                        </div>
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                            <div data-slot="card" class="text-card-foreground flex flex-col gap-6 rounded-xl border shadow-sm p-8 bg-card border-border">
                                <div class="flex justify-between items-center mb-6">
                                    <h3 class="text-xl font-bold text-foreground">Contact Details</h3>
                                    <button data-slot="button" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*=&#x27;size-&#x27;])]:size-4 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive h-9 px-4 py-2 has-[&gt;svg]:px-3 bg-primary text-primary-foreground hover:bg-primary/90">Edit</button>
                                </div>
                                <div class="space-y-5">
                                    <div>
                                        <label class="block text-sm font-medium text-foreground mb-2">Email Address</label>
                                        <p class="text-foreground flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail w-4 h-4 text-primary">
                                                <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                                                <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                                            </svg>
                                            john.doe@example.com
                                        </p>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-foreground mb-2">Phone Number</label>
                                        <p class="text-foreground flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-phone w-4 h-4 text-primary">
                                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                            </svg>
                                            +1 (555) 123-4567
                                        </p>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-foreground mb-2">Location</label>
                                        <p class="text-foreground flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin w-4 h-4 text-primary">
                                                <path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path>
                                                <circle cx="12" cy="10" r="3"></circle>
                                            </svg>
                                            San Francisco, CA, USA
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div data-slot="card" class="text-card-foreground flex flex-col gap-6 rounded-xl border shadow-sm p-8 bg-card border-border">
                                <div class="flex justify-between items-center mb-6">
                                    <h3 class="text-xl font-bold text-foreground">Social Links</h3>
                                    <button data-slot="button" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*=&#x27;size-&#x27;])]:size-4 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive h-9 px-4 py-2 has-[&gt;svg]:px-3 bg-primary text-primary-foreground hover:bg-primary/90">Edit</button>
                                </div>
                                <div class="space-y-4">
                                    <div>
                                        <label class="block text-sm font-medium text-foreground mb-2">LinkedIn Profile</label>
                                        <a href="https://linkedin.com/in/johndoe" target="_blank" rel="noopener noreferrer" class="text-primary hover:underline flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-linkedin w-4 h-4">
                                                <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
                                                <rect width="4" height="12" x="2" y="9"></rect>
                                                <circle cx="4" cy="4" r="2"></circle>
                                            </svg>
                                            https://linkedin.com/in/johndoe
                                        </a>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-foreground mb-2">GitHub Profile</label>
                                        <a href="https://github.com/johndoe" target="_blank" rel="noopener noreferrer" class="text-primary hover:underline flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-github w-4 h-4">
                                                <path d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4"></path>
                                                <path d="M9 18c-4.51 2-5-2-7-2"></path>
                                            </svg>
                                            https://github.com/johndoe
                                        </a>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-foreground mb-2">Twitter Profile</label>
                                        <a href="https://twitter.com/johndoe" target="_blank" rel="noopener noreferrer" class="text-primary hover:underline flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-twitter w-4 h-4">
                                                <path d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z"></path>
                                            </svg>
                                            https://twitter.com/johndoe
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--$-->
                    <!--/$-->
                </main>