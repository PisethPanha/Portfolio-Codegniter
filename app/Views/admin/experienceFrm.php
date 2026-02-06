<div data-slot="card" class="text-card-foreground flex flex-col gap-6 h-full border shadow-sm p-8 bg-card border-border mb-8">
    <h3 class="text-xl font-bold text-foreground mb-6"><?= isset($experience) ? "Update Experience" : "New Experience" ?></h3>
    <form method="post" action="<?= isset($experience['company_name']) ?  route_to('admin/update_experience') :  route_to('admin/save_experience') ?>" class="space-y-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="hidden">
                <label class="block text-sm font-medium text-foreground mb-2">Company Name</label>
                <input name="id" accept=""
                    value="<?= isset($experience) ? $experience['id'] : "" ?>"
                    class="w-full px-4 py-2 bg-input border border-border rounded-lg text-foreground focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="Company name" type="text" value="">
            </div>
            <div>
                <label class="block text-sm font-medium text-foreground mb-2">Company Name</label>
                <input name="company_name" accept=""
                    value="<?=
                            isset($experience) ? $experience['company_name'] : ""
                            ?>"
                    class="w-full px-4 py-2 bg-input border border-border rounded-lg text-foreground focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="Company name" type="text" value="">
            </div>
            <div>
                <label class="block text-sm font-medium text-foreground mb-2">Job Title</label>
                <input
                    value="<?=
                            isset($experience) ? $experience['job_title'] : ""
                            ?>"
                    name="job_title" class="w-full px-4 py-2 bg-input border border-border rounded-lg text-foreground focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="Job title" type="text" value="">
            </div>
        </div>
        <div>
            <label class="block text-sm font-medium text-foreground mb-2">Duration</label>
            <input
                value="<?=
                        isset($experience) ? $experience['duration'] : ""
                        ?>"
                name="duration" class="w-full px-4 py-2 bg-input border border-border rounded-lg text-foreground focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="e.g., Jan 2020 - Present" type="text" value="">
        </div>
        <div>
            <label class="block text-sm font-medium text-foreground mb-2">Description</label>
            <textarea name="description" id="shortBio" class="w-full px-4 py-3 bg-input border border-border rounded-lg text-foreground placeholder-muted-foreground focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent resize-none" rows="5" placeholder="Tell something about yourself"><?= isset($experience['description']) ? $experience['description'] : "" ?></textarea>
            <p class="text-xs text-muted-foreground mt-2">116
                <!-- -->
                /500 characters
            </p>
        </div>
        <div class="flex gap-3 pt-4">

            <button type="submit" data-slot="button" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-4 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive h-9 px-4 py-2 has-[&gt;svg]:px-3 flex-1 bg-primary text-primary-foreground hover:bg-primary/90">Save</button>
            <a href="<?= route_to('admin/experience') ?>" data-slot="button" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-4 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive border shadow-xs hover:text-accent-foreground dark:bg-input/30 dark:border-input dark:hover:bg-input/50 h-9 px-4 py-2 has-[&gt;svg]:px-3 flex-1 border-border text-foreground hover:bg-muted bg-transparent">Cancel</a>
        </div>
    </form>
</div>