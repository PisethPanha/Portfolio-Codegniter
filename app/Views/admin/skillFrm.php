<div data-slot="card" class="text-card-foreground flex flex-col gap-6 rounded-xl border shadow-sm p-8 bg-card border-border mb-8">
    <h3 class="text-xl font-bold text-foreground mb-6"><?= isset($skill) ? "Update Skill" : "New Skill" ?></h3>
    <form method="post" action="<?= isset($skill) ?  route_to("update_skill") : route_to("admin/save_skill") ?>" class="space-y-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-medium text-foreground mb-2">Skill Name</label>
                <input type="text" name="id" class="hidden" value="<?= isset($skill) && $skill['id'] ?>">
                <input
                
                    name="skillName"
                    class="w-full px-4 py-2 bg-input border border-border rounded-lg text-foreground focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="e.g., React" type="text" value="<?= isset($skill) ? $skill['skill_name'] : "" ?>">
            </div>
            <div>
                <label class="block text-sm font-medium text-foreground mb-2">Category</label>
                <select
                
                    name="category"
                    class="w-full px-4 py-2 bg-input border border-border rounded-lg text-foreground focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">

                    <?php 
                    foreach($cate as $c){

                    ?>
                    <option
                    
                    value="<?= $c['id'] ?>"
                    <?php 
                    if (isset($skill)) {
                      echo  $skill['category'] == $c['id'] ? "selected" : "";
                    }
                    ?>
                    ><?=  $c['name'] ?></option>
                    <?php
                    }
                    ?>

                </select>
            </div>
        </div>
        <div>
            <div class="flex justify-between items-center mb-3">
                <label class="block text-sm font-medium text-foreground">Proficiency Level</label>
                <span
                    id="percent"
                    class="text-lg font-semibold text-primary">0%</span>
            </div>
            <input name="level" id="range" min="0" max="100" class="w-full" type="range" value="<?= isset($skill) ? $skill['level'] : 0 ?>">
        </div>
        <div class="flex gap-3 pt-4">
            <button type="submit" data-slot="button" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-4 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive h-9 px-4 py-2 has-[&gt;svg]:px-3 flex-1 bg-primary text-primary-foreground hover:bg-primary/90">Save</button><button data-slot="button" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-4 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive border bg-background shadow-xs hover:text-accent-foreground dark:bg-input/30 dark:border-input dark:hover:bg-input/50 h-9 px-4 py-2 has-[&gt;svg]:px-3 flex-1 border-border text-foreground hover:bg-muted">Cancel</button>
        </div>
    </form>
</div>