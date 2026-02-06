 <?php
    $db = \Config\Database::connect();
    $query = $db->query("select * from aboutinfo");
    $result = $query->getResult();
    ?>

 <main class="flex-1 overflow-auto">
     <div class="p-8 space-y-8">
         <div class="grid grid-cols-1 gap-8">
             <form enctype="multipart/form-data" method="post" action="<?= route_to('admin/update_about') ?>" data-slot="card" class="text-card-foreground flex flex-col gap-6 rounded-xl border shadow-sm p-8 bg-card border-border">
                 <h2 class="text-2xl font-bold text-foreground mb-6">About Me Settings</h2>
                 <div class="space-y-6">

                     <div>
                         <label class="block text-sm font-medium text-foreground mb-2">Job Title</label>
                         <input id="jobTitle" value="<?= $result[0] -> job_title ?>" name="jobTitle" type="text" class="w-full px-4 py-3 bg-input border border-border rounded-lg text-foreground placeholder-muted-foreground focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="Your name" value="John Doe" />
                     </div>
                     <div>
                         <label class="block text-sm font-medium text-foreground mb-2">Bio</label>
                         <textarea name="bio" id="shortBio" class="w-full px-4 py-3 bg-input border border-border rounded-lg text-foreground placeholder-muted-foreground focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent resize-none" rows="5" placeholder="Tell something about yourself"><?= $result[0] -> bio ?></textarea>
                         <p class="text-xs text-muted-foreground mt-2">116
                             <!-- -->
                             /500 characters
                         </p>
                     </div>
                     <div>
                         <label class="block text-sm font-medium text-foreground mb-2">Story</label>
                         <textarea name="story" id="shortBio" class="w-full px-4 py-3 bg-input border border-border rounded-lg text-foreground placeholder-muted-foreground focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent resize-none" rows="5" placeholder="Tell something about yourself"><?= $result[0] -> story ?></textarea>
                         <p class="text-xs text-muted-foreground mt-2">116
                             <!-- -->
                             /500 characters
                         </p>
                     </div>
                     <div>
                         <label class="block text-sm font-medium text-foreground mb-2">CV</label>
                         <div class="space-y-3">
                             <input id="cv" name="cv" accept=".pdf,.doc,.docx" class="w-full px-4 py-2 bg-input border border-border rounded-lg text-foreground file:mr-4 file:py-2 file:px-3 file:bg-primary file:text-primary-foreground file:border-0 file:rounded-md file:cursor-pointer hover:file:bg-primary/90" type="file">
                         </div>
                     </div>
                     <div class="flex gap-3 pt-4">
                         <button data-slot="button" type="submit" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*=&#x27;size-&#x27;])]:size-4 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive h-9 px-4 py-2 has-[&gt;svg]:px-3 flex-1 bg-primary text-primary-foreground hover:bg-primary/90">Save Changes</button>
                         <button data-slot="button" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*=&#x27;size-&#x27;])]:size-4 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive border shadow-xs hover:text-accent-foreground dark:bg-input/30 dark:border-input dark:hover:bg-input/50 h-9 px-4 py-2 has-[&gt;svg]:px-3 flex-1 border-border text-foreground hover:bg-muted bg-transparent">Preview</button>
                     </div>
                 </div>
             </form>

         </div>

     </div>
     <!--$-->
     <!--/$-->
 </main>