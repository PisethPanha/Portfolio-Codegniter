<div class="flex h-screen bg-background">
    <aside class="w-64 bg-sidebar text-sidebar-foreground border-r border-sidebar-border flex flex-col">
        <div class="p-6 border-b border-sidebar-border">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-lg bg-sidebar-primary flex items-center justify-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-code-xml w-6 h-6 text-sidebar-primary-foreground">
                        <path d="m18 16 4-4-4-4"></path>
                        <path d="m6 8-4 4 4 4"></path>
                        <path d="m14.5 4-5 16"></path>
                    </svg></div>
                <div>
                    <h1 class="text-lg font-bold text-sidebar-foreground">DevPortal</h1>
                    <p class="text-xs text-sidebar-accent-foreground">Admin Dashboard</p>
                </div>
            </div>
        </div>
        <nav class="flex-1 overflow-y-auto px-4 py-6 space-y-2">
            <a href="<?=  route_to("admin") ?>"
                class=" <?= service('uri')->getSegment(2) == '' ? "bg-sidebar-primary text-sidebar-primary-foreground" : 'text-sidebar-foreground hover:bg-sidebar-accent' ?>  w-full flex items-center gap-3 px-4 py-3 rounded-lg transition-colors duration-200 text-left  "><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-layout-dashboard w-5 h-5 flex-shrink-0">
                    <rect width="7" height="9" x="3" y="3" rx="1"></rect>
                    <rect width="7" height="5" x="14" y="3" rx="1"></rect>
                    <rect width="7" height="9" x="14" y="12" rx="1"></rect>
                    <rect width="7" height="5" x="3" y="16" rx="1"></rect>
                </svg><span class="text-sm font-medium">Dashboard</span></a>
            <a href="<?=  route_to("admin/branding") ?>"
                class=" <?= service('uri')->getSegment(2) == 'branding' ? "bg-sidebar-primary text-sidebar-primary-foreground" : 'text-sidebar-foreground hover:bg-sidebar-accent' ?> w-full flex items-center gap-3 px-4 py-3 rounded-lg transition-colors duration-200 text-left "><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-palette w-5 h-5 flex-shrink-0">
                    <circle cx="13.5" cy="6.5" r=".5" fill="currentColor"></circle>
                    <circle cx="17.5" cy="10.5" r=".5" fill="currentColor"></circle>
                    <circle cx="8.5" cy="7.5" r=".5" fill="currentColor"></circle>
                    <circle cx="6.5" cy="12.5" r=".5" fill="currentColor"></circle>
                    <path d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10c.926 0 1.648-.746 1.648-1.688 0-.437-.18-.835-.437-1.125-.29-.289-.438-.652-.438-1.125a1.64 1.64 0 0 1 1.668-1.668h1.996c3.051 0 5.555-2.503 5.555-5.554C21.965 6.012 17.461 2 12 2z"></path>
                </svg>
                <span
                    class="text-sm font-medium">Branding</span>
            </a>
            <a href="<?=  route_to("admin/hero") ?>" class="<?= service('uri')->getSegment(2) == 'hero' ? "bg-sidebar-primary text-sidebar-primary-foreground" : 'text-sidebar-foreground hover:bg-sidebar-accent' ?> w-full flex items-center gap-3 px-4 py-3 rounded-lg transition-colors duration-200 text-left "><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-zap w-5 h-5 flex-shrink-0">
                    <path d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z"></path>
                </svg><span class="text-sm font-medium">Hero Section</span>
            </a>
            <a href="<?=  route_to("admin/experience") ?>"
                class="<?= service('uri')->getSegment(2) == 'experience' ? "bg-sidebar-primary text-sidebar-primary-foreground" : 'text-sidebar-foreground hover:bg-sidebar-accent' ?> w-full flex items-center gap-3 px-4 py-3 rounded-lg transition-colors duration-200 text-left "><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-briefcase w-5 h-5 flex-shrink-0">
                    <path d="M16 20V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                    <rect width="20" height="14" x="2" y="6" rx="2"></rect>
                </svg>
                <span
                    class="text-sm font-medium">Experience</span>
            </a>
            <a href="<?=  route_to("admin/about") ?>"
                class="<?= service('uri')->getSegment(2) == 'about' ? "bg-sidebar-primary text-sidebar-primary-foreground" : 'text-sidebar-foreground hover:bg-sidebar-accent' ?> w-full flex items-center gap-3 px-4 py-3 rounded-lg transition-colors duration-200 text-left ">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill=" <?= service('uri')->getSegment(2) == 'about' ? "#FFFFFF" : "#1f1f1f" ?>"><path d="M440-280h80v-240h-80v240Zm68.5-331.5Q520-623 520-640t-11.5-28.5Q497-680 480-680t-28.5 11.5Q440-657 440-640t11.5 28.5Q463-600 480-600t28.5-11.5ZM480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z"/></svg>
                <span
                    class="text-sm font-medium">About Info</span>
            </a>
            <a href="<?=  route_to("admin/skill") ?>" class="<?= service('uri')->getSegment(2) == 'skill' ? "bg-sidebar-primary text-sidebar-primary-foreground" : 'text-sidebar-foreground hover:bg-sidebar-accent' ?> w-full flex items-center gap-3 px-4 py-3 rounded-lg transition-colors duration-200 text-left "><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-code-xml w-5 h-5 flex-shrink-0">
                    <path d="m18 16 4-4-4-4"></path>
                    <path d="m6 8-4 4 4 4"></path>
                    <path d="m14.5 4-5 16"></path>
                </svg><span class="text-sm font-medium">Skills</span></a>
            <a href="<?=  route_to("admin/project") ?>"
                class="<?= service('uri')->getSegment(2) == 'project' ? "bg-sidebar-primary text-sidebar-primary-foreground" : 'text-sidebar-foreground hover:bg-sidebar-accent' ?> w-full flex items-center gap-3 px-4 py-3 rounded-lg transition-colors duration-200 text-left ">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-layers w-5 h-5 flex-shrink-0">
                    <path d="m12.83 2.18a2 2 0 0 0-1.66 0L2.6 6.08a1 1 0 0 0 0 1.83l8.58 3.91a2 2 0 0 0 1.66 0l8.58-3.9a1 1 0 0 0 0-1.83Z"></path>
                    <path d="m22 17.65-9.17 4.16a2 2 0 0 1-1.66 0L2 17.65"></path>
                    <path d="m22 12.65-9.17 4.16a2 2 0 0 1-1.66 0L2 12.65"></path>
                </svg>
                <span
                    class="text-sm font-medium">Projects</span>
            </a><a href="<?=  route_to("admin/contact") ?>" class="<?= service('uri')->getSegment(2) == 'contact' ? "bg-sidebar-primary text-sidebar-primary-foreground" : 'text-sidebar-foreground hover:bg-sidebar-accent' ?> w-full flex items-center gap-3 px-4 py-3 rounded-lg transition-colors duration-200 text-left "><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail w-5 h-5 flex-shrink-0">
                    <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                    <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                </svg><span class="text-sm font-medium">Contact Info</span></a>
            <a href="<?=  route_to("admin/client") ?>"
                class="<?= service('uri')->getSegment(2) == 'client' ? "bg-sidebar-primary text-sidebar-primary-foreground" : 'text-sidebar-foreground hover:bg-sidebar-accent' ?> w-full flex items-center gap-3 px-4 py-3 rounded-lg transition-colors duration-200 text-left "><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-message-square w-5 h-5 flex-shrink-0">
                    <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                </svg>
                <span
                    class="text-sm font-medium">Client Contacts</span>
            </a><a href="http://localhost:8080/" class="<?= service('uri')->getSegment(2) == 'preview' ? "bg-sidebar-primary text-sidebar-primary-foreground" : 'text-sidebar-foreground hover:bg-sidebar-accent' ?> w-full flex items-center gap-3 px-4 py-3 rounded-lg transition-colors duration-200 text-left "><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye w-5 h-5 flex-shrink-0">
                    <path d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0"></path>
                    <circle cx="12" cy="12" r="3"></circle>
                </svg><span class="text-sm font-medium">Preview</span></a>
        </nav>
        <div
            class="p-4 border-t border-sidebar-border">
            <div class="text-xs text-sidebar-accent-foreground">
                <p>© 2024 DevPortal</p>
                <p class="mt-1">v1.0.0</p>
            </div>
        </div>
    </aside>
    <div class="flex-1 flex flex-col overflow-hidden">
        <header class="border-b border-border bg-card h-16 flex items-center justify-between px-8">
            <h1 class="text-2xl font-bold text-foreground">Administrator</h1>
            <div class="flex items-center gap-4">
                <div class="w-10 h-10 rounded-full bg-primary flex items-center justify-center"><span class="text-primary-foreground font-semibold text-sm">JD</span></div>
            </div>
        </header>