<main class="flex-1 overflow-auto">
    <div data-slot="card" class="text-card-foreground flex flex-col gap-6 h-[130vh] border shadow-sm p-8 bg-card border-border mb-8">
        <h3 class="text-xl font-bold text-foreground mb-6"><?= isset($project) ? "Update Project" : "Add Project" ?></h3>
        <form action="<?= isset($project) ?  route_to("admin/update_project") : route_to("admin/save_project") ?>" method="post" class="space-y-4" enctype="multipart/form-data">
            <div>
                <label class="block text-sm font-medium text-foreground mb-2">Project Name</label>
                <input name="name" class="w-full px-4 py-2 bg-input border border-border rounded-lg text-foreground focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="Project name" type="text" value="<?= isset($project) ? $project['name'] : "" ?>">
                <input name="id" class="w-full px-4 py-2 bg-input border border-border rounded-lg text-foreground focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent hidden" placeholder="Project name" type="text" value="<?= isset($project) ? $project['id'] : "" ?>">
            </div>
            <div>
                <label class="block text-sm font-medium text-foreground mb-2">Description</label>
                <textarea name="description" class="w-full px-4 py-2 bg-input border border-border rounded-lg text-foreground focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent resize-none" rows="4" placeholder="Describe your project"><?= isset($project) ? $project['description'] : "" ?></textarea>
            </div>
            <div>
                <label class="block text-sm font-medium text-foreground mb-2">Tech Stack (comma-separated)</label>
                <input
                    name="stack"
                    readonly
                    class="w-full px-4 py-2 bg-input border border-border rounded-lg text-foreground focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent"
                    id="techStackInput"
                    type="text"
                    value="<?= isset($project) ? $project['stack'] : '' ?>">
                <br>
                <br>
                <div class="grid w-1/2 text-center grid-cols-5 gap-2">

                    <?php

                    foreach ($skill as $s) {

                    ?>
                        <input
                            type="button"
                            value="<?= $s['skill_name'] ?>"
                            class="skillTag cursor-pointer rounded-2xl px-3 py-1 text-center bg-[#d4d4d4] hover:border-2 border-2 hover:border-blue-500 border-transparent duration-75">

                    <?php
                    }

                    ?>


                </div>
                <br>
                <label class="block text-sm font-medium text-foreground mb-2">Category</label>
                <select name="category" class="w-full border rounded-lg px-4 py-2">

                    <?php
                    $db = \Config\Database::connect();
                    $query = $db->query("select * from project_cate");
                    $result = $query->getResult();
                    foreach ($result as $c) {
                    ?>
                        <option value="<?= $c->id ?>"><?= $c->cate_name ?></option>

                    <?php
                    }
                    ?>
                </select>
                <br>
                <br>
                <div>
                    <label class="block text-sm font-medium text-foreground mb-2">Demo Link</label>
                    <input name="demoLink" class="w-full px-4 py-2 bg-input border border-border rounded-lg text-foreground focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="Project name" type="text" value="<?= isset($project) ? $project['demo_link'] : "" ?>">
                </div>
                <br>
                  <div>
                    <label class="block text-sm font-medium text-foreground mb-2">Github Repository</label>
                    <input name="github" class="w-full px-4 py-2 bg-input border border-border rounded-lg text-foreground focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="Project name" type="text" value="<?= isset($project) ? $project['github'] : "" ?>">
                </div>
                <br>
                <div>
                    <label class="block text-sm font-medium text-foreground mb-2">Project Image</label>
                    <div class="space-y-3">
                        <input name="image" accept="image/*" class="w-full px-4 py-2 bg-input border border-border rounded-lg text-foreground file:mr-4 file:py-2 file:px-3 file:bg-primary file:text-primary-foreground file:border-0 file:rounded-md file:cursor-pointer hover:file:bg-primary/90" type="file">
                    </div>
                </div>
                <div class="flex gap-3 pt-4">
                    <button type="submit" data-slot="button" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-4 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive h-9 px-4 py-2 has-[&gt;svg]:px-3 flex-1 bg-primary text-primary-foreground hover:bg-primary/90">

                        Save Project

                    </button>
                    <button data-slot="button" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-4 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive border shadow-xs hover:text-accent-foreground dark:bg-input/30 dark:border-input dark:hover:bg-input/50 h-9 px-4 py-2 has-[&gt;svg]:px-3 flex-1 border-border text-foreground hover:bg-muted bg-transparent">
                        <a
                            class="w-full h-full"
                            href="<?= route_to("admin/project") ?>">
                            Cancel
                        </a>
                    </button>
                </div>
        </form>
    </div>
</main>