<main class="flex-1 overflow-auto">
    <div data-slot="card" class="text-card-foreground flex flex-col gap-6 h-full border shadow-sm p-8 bg-card border-border mb-8">
        <h3 class="text-xl font-bold text-foreground mb-6">New Project</h3>
        <div class="space-y-4">
            <div>
                <label class="block text-sm font-medium text-foreground mb-2">Project Name</label>
                <input class="w-full px-4 py-2 bg-input border border-border rounded-lg text-foreground focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="Project name" type="text" value="">
            </div>
            <div>
                <label class="block text-sm font-medium text-foreground mb-2">Description</label>
                <textarea class="w-full px-4 py-2 bg-input border border-border rounded-lg text-foreground focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent resize-none" rows="4" placeholder="Describe your project"></textarea>
            </div>
            <div>
                <label class="block text-sm font-medium text-foreground mb-2">Tech Stack (comma-separated)</label>
                <input class="w-full px-4 py-2 bg-input border border-border rounded-lg text-foreground focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="React, Node.js, PostgreSQL, Tailwind CSS" type="text" value="">
            </div>
            <div>
                <label class="block text-sm font-medium text-foreground mb-2">Project Image</label>
                <div class="space-y-3">
                    <input accept="image/*" class="w-full px-4 py-2 bg-input border border-border rounded-lg text-foreground file:mr-4 file:py-2 file:px-3 file:bg-primary file:text-primary-foreground file:border-0 file:rounded-md file:cursor-pointer hover:file:bg-primary/90" type="file">
                </div>
            </div>
            <div class="flex gap-3 pt-4">
                <button data-slot="button" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-4 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive h-9 px-4 py-2 has-[&gt;svg]:px-3 flex-1 bg-primary text-primary-foreground hover:bg-primary/90">
                    <a 
                    class="w-full h-full"
                    href="<?= route_to("admin/project") ?>">
                        Save Project
                    </a>
                </button>
                <button data-slot="button" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-4 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive border shadow-xs hover:text-accent-foreground dark:bg-input/30 dark:border-input dark:hover:bg-input/50 h-9 px-4 py-2 has-[&gt;svg]:px-3 flex-1 border-border text-foreground hover:bg-muted bg-transparent">
                    <a 
                    class="w-full h-full"
                    href="<?= route_to("admin/project") ?>">
                        Cancel
                    </a>
                </button>
            </div>
        </div>
    </div>
</main>