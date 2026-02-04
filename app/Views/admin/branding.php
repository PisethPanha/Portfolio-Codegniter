<?php

$db = \Config\Database::connect();
$query = $db->query('SELECT * FROM logo_tbl');
$logo = $query->getResult()[0];
?>

<main class="flex-1 overflow-auto">
    <div class="p-8 space-y-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <div data-slot="card"
                class="text-card-foreground flex flex-col gap-6 rounded-xl border shadow-sm p-8 bg-card border-border">
                <h2 class="text-2xl font-bold text-foreground mb-6">Logo &amp;Branding</h2>
                <form method="post" action="<?= base_url("admin/save_logo") ?>" class="space-y-6">
                    <div>
                        <label class="block text-sm font-medium text-foreground mb-2">Short Logo</label>
                        <input name="shortName" type="text" maxlength="2" id="shortName" value="<?= $logo -> short_name ?>"
                            class="w-full px-4 py-3 bg-input border border-border rounded-lg text-foreground placeholder-muted-foreground focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent"
                            placeholder="Enter your brand name" />
                        <p class="text-xs text-muted-foreground mt-2">This text appears in your portfolio header</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-foreground mb-2">Long Logo</label>
                        <input type="text" name="longName" id="longName" value="<?= $logo -> long_name ?>"
                            class="w-full px-4 py-3 bg-input border border-border rounded-lg text-foreground placeholder-muted-foreground focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent"
                            placeholder="Enter your brand name" />
                        <p class="text-xs text-muted-foreground mt-2">This text appears in your portfolio header</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-foreground mb-2">Font Style</label>
                        <select id="fontStyle" name="fontStyle"
                            class="w-full px-4 py-3 bg-input border border-border rounded-lg text-foreground focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">


                            <?php

                            foreach (['inter', 'poppins', 'playfair', 'roboto', 'montserrat', 'lato', 'open_sans', 'oswald', 'raleway'] as $font) {
                                echo "<option value='$font'";

                                if ($font == $logo -> font_style) {
                                    echo 'selected';
                                }

                                echo ">$font</option>";
                            }

                            ?>

                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-foreground mb-3">Font Weight</label>
                        <input class="" id="fontWeightInput" name="fontWeight" value="<?= $logo -> font_weight ?>">
                        <div class="grid grid-cols-2 gap-3">
                            <input type="button" id="fw_btn"

                                style="
                                <?php 
                                    if($logo -> font_weight == 'Regular'){
                                        echo ' background-color: #4255ff; color: white;';
                                    }
                                ?>
                                "
                                class="px-4 py-2 rounded-lg border transition-colors duration-200 text-sm font-medium bg-muted text-foreground border-border hover:border-primary"
                                value="Regular">
                                
                            <input type="button" id="fw_btn"
                                
                                style="
                                <?php 
                                    if($logo -> font_weight == 'Medium'){
                                        echo ' background-color: #4255ff; color: white;';
                                    }
                                ?>
                                "
                                class="px-4 py-2 rounded-lg border transition-colors duration-200 text-sm font-medium bg-[#e4e4e4] text-foreground border-border hover:border-primary"
                                value="Medium">
                            <input type="button" id="fw_btn"

                                
                                style="
                                <?php 
                                    if($logo -> font_weight == 'Semibold'){
                                        echo ' background-color: #4255ff; color: white;';
                                    }
                                ?>
                                "
                                class="px-4 py-2 rounded-lg border transition-colors duration-200 text-sm font-medium bg-[#e4e4e4] text-foreground border-border hover:border-primary "
                                value="Semibold">
                            <input type="button" id="fw_btn"
                                
                                style="<?php 
                                    if($logo -> font_weight == 'Bold'){
                                        echo ' background-color: #4255ff; color: white;';
                                    }
                                ?>"
                                class="px-4 py-2 rounded-lg border transition-colors duration-200 text-sm font-medium bg-muted text-foreground border-border hover:border-primary"
                                value="Bold">


                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-foreground mb-2">Primary Color</label>
                        <div class="flex items-center gap-4">
                            <input type="color" id="lg_color" name="color" 
                                class="w-16 h-12 rounded-lg cursor-pointer border border-border" value="<?= $logo -> color ?>" />
                            <div class="flex-1">
                                <input type="text" id="lg_color_code"
                                    class="w-full px-4 py-2 bg-input border border-border rounded-lg text-foreground text-sm focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent font-mono"
                                    value="<?= $logo -> color ?>" />
                            </div>
                        </div>
                    </div>
                    <div class="flex gap-3 pt-4">
                        <button data-slot="button" type="submit"
                            class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*=&#x27;size-&#x27;])]:size-4 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive h-9 px-4 py-2 has-[&gt;svg]:px-3 flex-1 bg-primary text-primary-foreground hover:bg-primary/90">Save
                            Changes</button>
                        <button data-slot="button"
                            class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*=&#x27;size-&#x27;])]:size-4 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive border shadow-xs hover:text-accent-foreground dark:bg-input/30 dark:border-input dark:hover:bg-input/50 h-9 px-4 py-2 has-[&gt;svg]:px-3 flex-1 border-border text-foreground hover:bg-muted bg-transparent">Reset</button>
                    </div>
                </form>
            </div>
            <div data-slot="card"
                class="text-card-foreground gap-6 rounded-xl border shadow-sm p-8 bg-card border-border flex flex-col">
                <h2 class="text-2xl font-bold text-foreground mb-6">Live Preview</h2>
                <div class="flex-1 bg-black rounded-lg border-2 border-border flex items-center justify-center p-8">
                    <div class="text-center">
                        <a class="flex items-center gap-2 font-bold text-xl text-white" href="/">
                            <span id="shortNameBgPreview"
                            
                                class="h-8 w-8 rounded-lg bg-[<?= $logo -> color ?>] text-black flex items-center justify-center font-bold"><?= $logo -> short_name ?></span>
                            <h1 style="font-family: <?= $logo -> font_style ?>" id="longNamePreview"><?= $logo -> long_name ?></h1>
                        </a>
                    </div>
                </div>
                <div class="mt-6 space-y-3 text-sm">
                    <div class="flex justify-between">
                        <span class="text-muted-foreground">Selected Font:</span>
                        <span id="selectedFont" class="font-semibold text-foreground"><?= $logo -> font_style ?></span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-muted-foreground">Font Weight:</span>
                        <span id="fontWeight" class="font-semibold text-foreground"><?= $logo -> font_weight ?></span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-muted-foreground">Primary Color:</span>
                        <div class="flex items-center gap-2">
                            <div id="shortNameBgPreviewBttom" class="w-4 h-4 rounded border border-border"></div>
                            <span id="lg_color_code_preview"
                                class="font-semibold text-foreground font-mono"><?= $logo -> color ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--$-->
    <!--/$-->
</main>