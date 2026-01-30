 <main class="flex-1 overflow-auto">
     <div class="p-8 space-y-8">
         <div class="grid grid-cols-1 gap-8">
             <div data-slot="card" class="text-card-foreground flex flex-col gap-6 rounded-xl border shadow-sm p-8 bg-card border-border">
                 <h2 class="text-2xl font-bold text-foreground mb-6">Hero Section Settings</h2>
                 <div class="space-y-6">
                     <div>
                         <label class="block text-sm font-medium text-foreground mb-2">Full Name</label>
                         <input id="fullName" type="text" class="w-full px-4 py-3 bg-input border border-border rounded-lg text-foreground placeholder-muted-foreground focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="Your name" value="John Doe" />
                     </div>
                     <div>
                         <label class="block text-sm font-medium text-foreground mb-2">Job Title</label>
                         <input id="jobTitle" type="text" class="w-full px-4 py-3 bg-input border border-border rounded-lg text-foreground placeholder-muted-foreground focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="Your job title" value="Full-Stack Developer" />
                     </div>
                     <div>
                         <label class="block text-sm font-medium text-foreground mb-2">Short Bio</label>
                         <textarea id="shortBio" class="w-full px-4 py-3 bg-input border border-border rounded-lg text-foreground placeholder-muted-foreground focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent resize-none" rows="5" placeholder="Tell something about yourself">Building beautiful, scalable digital experiences</textarea>
                         <p class="text-xs text-muted-foreground mt-2">116
                             <!-- -->
                             /500 characters
                         </p>
                     </div>
                     <div>
                         <label class="block text-sm font-medium text-foreground mb-2">Project Image</label>
                         <div class="space-y-3">
                             <input id="imageInput" accept="image/*" class="w-full px-4 py-2 bg-input border border-border rounded-lg text-foreground file:mr-4 file:py-2 file:px-3 file:bg-primary file:text-primary-foreground file:border-0 file:rounded-md file:cursor-pointer hover:file:bg-primary/90" type="file">
                         </div>
                     </div>
                     <div class="flex gap-3 pt-4">
                         <button data-slot="button" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*=&#x27;size-&#x27;])]:size-4 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive h-9 px-4 py-2 has-[&gt;svg]:px-3 flex-1 bg-primary text-primary-foreground hover:bg-primary/90">Save Changes</button>
                         <button data-slot="button" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*=&#x27;size-&#x27;])]:size-4 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive border shadow-xs hover:text-accent-foreground dark:bg-input/30 dark:border-input dark:hover:bg-input/50 h-9 px-4 py-2 has-[&gt;svg]:px-3 flex-1 border-border text-foreground hover:bg-muted bg-transparent">Preview</button>
                     </div>
                 </div>
             </div>

         </div>
         <div data-slot="card" class="text-card-foreground gap-6 rounded-xl border shadow-sm p-8 bg-card border-border flex flex-col">
             <h2 class="text-2xl font-bold text-foreground mb-6">Preview</h2>
             <div class="  bg-black from-primary/10 to-accent/10 rounded-lg border-2 border-border flex items-center justify-center p-8">
                 <div class="grid max-lg:grid-cols-1 lg:grid-cols-2 gap-12 justify-center items-center">
                     <div class="space-y-6">
                         <div class="space-y-3 max-lg:text-center">
                             <p class="text-sm font-semibold text-blue-400 uppercase tracking-wider">Welcome to my portfolio</p>
                             <!-- <p class="text-sm font-semibold text-accent uppercase tracking-wider">Welcome to my portfolio</p> -->
                             <h1 id="fullNamePre" class="text-4xl md:text-5xl text-white lg:text-6xl font-bold text-foreground">YORN PISETHPANHA</h1>
                             <h2 id="jobTitlePre" class="text-xl md:text-2xl text-blue-400 font-semibold">Full Stack Developer</h2>
                         </div>
                         <p id="shortBioPre" class="text-lg max-lg:text-center text-muted-foreground max-w-md leading-relaxed">Building beautiful, scalable digital experiences</p>
                         <div class="flex flex-col max-lg:items-center max-lg:justify-center sm:flex-row gap-4 pt-4"><a href="#"><button data-slot="button" class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-4 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive bg-primary text-primary-foreground hover:bg-primary/90 h-10 rounded-md px-6 has-[&gt;svg]:px-4 w-full sm:w-auto gap-2">View My Work<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right h-4 w-4">
                                         <path d="M5 12h14"></path>
                                         <path d="m12 5 7 7-7 7"></path>
                                     </svg>
                                 </button>
                             </a>
                             <a href="#"><button data-slot="button" class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-4 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive bg-primary text-primary-foreground hover:bg-primary/90 h-10 rounded-md px-6 has-[&gt;svg]:px-4 w-full sm:w-auto gap-2">
                                     Get In Touch</button>
                             </a>
                         </div>
                     </div>
                     <div class=" md:flex items-center justify-center">
                         <div class="relative w-full aspect-square max-w-sm">
                             <div class="absolute inset-0 bg-gradient-to-br from-accent/20 to-secondary/20 rounded-3xl"></div>
                             <div class="absolute inset-6 bg-gradient-to-tr from-accent/30 to-secondary/10 rounded-2xl flex items-center justify-center"><img id="imagePreview" class="rounded-2xl hover:scale-[1.1] duration-300" alt="" src="https://res.cloudinary.com/dbylpzlji/image/upload/v1769053807/photo_2024-06-21_14-10-39_dblujm.jpg"></div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="mt-6 space-y-2 text-xs text-muted-foreground">
                 <p>Preview updates in real-time as you edit the fields.</p>
             </div>
         </div>
     </div>
     <!--$-->
     <!--/$-->
 </main>