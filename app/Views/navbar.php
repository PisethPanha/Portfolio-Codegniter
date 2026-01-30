<nav class="sticky top-0 z-50 w-full border-b border-border/40 bg-background/95 backdrop-blur supports-[backdrop-filter]:bg-background/60">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <!-- Logo -->
            <a class="flex items-center gap-2 font-bold text-xl text-foreground" href="/">
                <span id="shortNameBgPreview" class="h-8 w-8 rounded-lg text-accent-foreground flex items-center justify-center font-bold">Y</span>
                Panha
            </a>




            <!-- Menu -->
            <div class="hidden md:flex items-center gap-8">
                <a class="text-sm font-medium text-muted-foreground transition-colors hover:text-foreground" href="<?= route_to('/') ?>">Home</a>
                <a class="text-sm font-medium text-muted-foreground transition-colors hover:text-foreground" href="<?= route_to('about') ?>">About</a>
                <a class="text-sm font-medium text-muted-foreground transition-colors hover:text-foreground" href="<?= route_to('skills') ?>">Skills</a>

                <!-- Projects with Dropdown -->
                <div class="relative">
                    <a href="<?= route_to('projects') ?>" onclick="toggleProjects()"
                        id="projectsBtn"
                        class="text-sm font-medium text-muted-foreground hover:text-foreground">
                        Projects
                    </a>

                    <div id="projectsDropdown"
                        class="absolute left-0 mt-2 w-40 bg-background border border-border rounded-md shadow-lg hidden z-50">
                        <a href="project1.html" class="block px-4 py-2 text-sm hover:bg-accent/10">Project 1</a>
                        <a href="project2.html" class="block px-4 py-2 text-sm hover:bg-accent/10">Project 2</a>
                        <a href="project3.html" class="block px-4 py-2 text-sm hover:bg-accent/10">Project 3</a>
                    </div>
                </div>
                <a class="text-sm font-medium text-muted-foreground transition-colors hover:text-foreground" href="<?= route_to('contact') ?>">Contact</a>
            </div>

            <!-- Theme Toggle -->
            <!-- <div id="toggleMode" class="flex items-center gap-4">
                <button data-slot="button" class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-4 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] hover:text-purple-700 dark:hover:bg-accent/50 size-9 h-9 w-9 rounded-lg hover:bg-accent/10" aria-label="Toggle theme">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sun h-5 w-5 text-accent transition-transform">
                        <circle cx="12" cy="12" r="4"></circle>
                        <path d="M12 2v2"></path>
                        <path d="M12 20v2"></path>
                        <path d="m4.93 4.93 1.41 1.41"></path>
                        <path d="m17.66 17.66 1.41 1.41"></path>
                        <path d="M2 12h2"></path>
                        <path d="M20 12h2"></path>
                        <path d="m6.34 17.66-1.41 1.41"></path>
                        <path d="m19.07 4.93-1.41 1.41"></path>
                    </svg>
                    <span class="sr-only">Toggle theme</span>
                </button>
            </div> -->
        </div>
    </div>
    <script>
        // let isLight = false
        // let toggleMode = document.querySelector("#toggleMode");
        // console.log(toggleMode);
        // // localStorage.setItem("color" , true)
        // let isDark = localStorage.getItem("color")
        // localStorage.setItem("color", isDark)
        // toggleMode.addEventListener("click", () => {

        //     setToggleMode(localStorage.getItem("color"))
        //     localStorage.setItem("color", !isDark)
        //     isDark = !isDark


        // })

        function setToggleMode(isDL) {
            let color = "dark"
            if (isDL == 'true'){
                color = "light"
            }else if (isDL == 'false'){
                color = "dark"
            }
            
            
            
            ((e, i, s, u, m, a, l, h) => {
                let d = document.documentElement,
                    w = [
                        "light",
                        "dark"
                    ];

                function p(n) {
                    (Array.isArray(e) ? e : [
                        e
                    ]).forEach((y) => {
                        let k = y === "class",
                            S = k && a ? m.map((f) => a[f] || f) : m;
                        k ? (d.classList.remove(...S), d.classList.add(a && a[n] ? a[n] : n)) : d.setAttribute(y, n);
                    }), R(n);
                }

                function R(n) {
                    h && w.includes(n) && (d.style.colorScheme = n);
                }

                function c() {
                    return window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
                }
                if (u) p(u);
                else try {
                    let n = localStorage.getItem(i) || s,
                        y = l && n === "system" ? c() : n;
                    p(y);
                } catch (n) {}
            })("class", "portfolio-theme", color, null, ["light", "dark"], null, true, true)
        }
        

        setToggleMode(true)
    </script>
</nav>