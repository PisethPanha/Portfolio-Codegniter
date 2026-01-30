(globalThis.TURBOPACK || (globalThis.TURBOPACK = [])).push([typeof document === "object" ? document.currentScript : undefined,
    "[project]/Desktop/v0-admin-dashboard-ui/components/theme-toggle.tsx [app-client] (ecmascript)", ((__turbopack_context__) => {
        "use strict";

        __turbopack_context__.s([
            "ThemeToggle",
            () => ThemeToggle
        ]);
        var __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$v0$2d$admin$2d$dashboard$2d$ui$2f$node_modules$2f$next$2f$dist$2f$compiled$2f$react$2f$jsx$2d$dev$2d$runtime$2e$js__$5b$app$2d$client$5d$__$28$ecmascript$29$__ = __turbopack_context__.i("[project]/Desktop/v0-admin-dashboard-ui/node_modules/next/dist/compiled/react/jsx-dev-runtime.js [app-client] (ecmascript)");
        var __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$v0$2d$admin$2d$dashboard$2d$ui$2f$node_modules$2f$next$2f$dist$2f$compiled$2f$react$2f$index$2e$js__$5b$app$2d$client$5d$__$28$ecmascript$29$__ = __turbopack_context__.i("[project]/Desktop/v0-admin-dashboard-ui/node_modules/next/dist/compiled/react/index.js [app-client] (ecmascript)");
        var __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$v0$2d$admin$2d$dashboard$2d$ui$2f$node_modules$2f$lucide$2d$react$2f$dist$2f$esm$2f$icons$2f$moon$2e$js__$5b$app$2d$client$5d$__$28$ecmascript$29$__$3c$export__default__as__Moon$3e$__ = __turbopack_context__.i("[project]/Desktop/v0-admin-dashboard-ui/node_modules/lucide-react/dist/esm/icons/moon.js [app-client] (ecmascript) <export default as Moon>");
        var __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$v0$2d$admin$2d$dashboard$2d$ui$2f$node_modules$2f$lucide$2d$react$2f$dist$2f$esm$2f$icons$2f$sun$2e$js__$5b$app$2d$client$5d$__$28$ecmascript$29$__$3c$export__default__as__Sun$3e$__ = __turbopack_context__.i("[project]/Desktop/v0-admin-dashboard-ui/node_modules/lucide-react/dist/esm/icons/sun.js [app-client] (ecmascript) <export default as Sun>");;
        var _s = __turbopack_context__.k.signature();
        'use client';;;

        function ThemeToggle() {
            _s();
            const [isDark, setIsDark] = (0, __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$v0$2d$admin$2d$dashboard$2d$ui$2f$node_modules$2f$next$2f$dist$2f$compiled$2f$react$2f$index$2e$js__$5b$app$2d$client$5d$__$28$ecmascript$29$__["useState"])(false);
            const [mounted, setMounted] = (0, __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$v0$2d$admin$2d$dashboard$2d$ui$2f$node_modules$2f$next$2f$dist$2f$compiled$2f$react$2f$index$2e$js__$5b$app$2d$client$5d$__$28$ecmascript$29$__["useState"])(false);
            (0, __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$v0$2d$admin$2d$dashboard$2d$ui$2f$node_modules$2f$next$2f$dist$2f$compiled$2f$react$2f$index$2e$js__$5b$app$2d$client$5d$__$28$ecmascript$29$__["useEffect"])({
                "ThemeToggle.useEffect": () => {
                    setMounted(true);
                    const isDarkMode = document.documentElement.classList.contains('dark');
                    setIsDark(isDarkMode);
                }
            }["ThemeToggle.useEffect"], []);
            const toggleTheme = () => {
                const html = document.documentElement;
                html.classList.toggle('dark');
                setIsDark(!isDark);
            };
            if (!mounted) return null;
            return /*#__PURE__*/ (0, __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$v0$2d$admin$2d$dashboard$2d$ui$2f$node_modules$2f$next$2f$dist$2f$compiled$2f$react$2f$jsx$2d$dev$2d$runtime$2e$js__$5b$app$2d$client$5d$__$28$ecmascript$29$__["jsxDEV"])("button", {
                onClick: toggleTheme,
                className: "p-2 rounded-lg bg-card hover:bg-muted transition-colors duration-200",
                "aria-label": "Toggle theme",
                children: isDark ? /*#__PURE__*/ (0, __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$v0$2d$admin$2d$dashboard$2d$ui$2f$node_modules$2f$next$2f$dist$2f$compiled$2f$react$2f$jsx$2d$dev$2d$runtime$2e$js__$5b$app$2d$client$5d$__$28$ecmascript$29$__["jsxDEV"])(__TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$v0$2d$admin$2d$dashboard$2d$ui$2f$node_modules$2f$lucide$2d$react$2f$dist$2f$esm$2f$icons$2f$sun$2e$js__$5b$app$2d$client$5d$__$28$ecmascript$29$__$3c$export__default__as__Sun$3e$__["Sun"], {
                    className: "w-5 h-5 text-foreground"
                }, void 0, false, {
                    fileName: "[project]/Desktop/v0-admin-dashboard-ui/components/theme-toggle.tsx",
                    lineNumber: 31,
                    columnNumber: 9
                }, this) : /*#__PURE__*/ (0, __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$v0$2d$admin$2d$dashboard$2d$ui$2f$node_modules$2f$next$2f$dist$2f$compiled$2f$react$2f$jsx$2d$dev$2d$runtime$2e$js__$5b$app$2d$client$5d$__$28$ecmascript$29$__["jsxDEV"])(__TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$v0$2d$admin$2d$dashboard$2d$ui$2f$node_modules$2f$lucide$2d$react$2f$dist$2f$esm$2f$icons$2f$moon$2e$js__$5b$app$2d$client$5d$__$28$ecmascript$29$__$3c$export__default__as__Moon$3e$__["Moon"], {
                    className: "w-5 h-5 text-foreground"
                }, void 0, false, {
                    fileName: "[project]/Desktop/v0-admin-dashboard-ui/components/theme-toggle.tsx",
                    lineNumber: 33,
                    columnNumber: 9
                }, this)
            }, void 0, false, {
                fileName: "[project]/Desktop/v0-admin-dashboard-ui/components/theme-toggle.tsx",
                lineNumber: 25,
                columnNumber: 5
            }, this);
        }
        _s(ThemeToggle, "4PPoEPuUE5ZM05wB23N+LA9kxlg=");
        _c = ThemeToggle;
        var _c;
        __turbopack_context__.k.register(_c, "ThemeToggle");
        if (typeof globalThis.$RefreshHelpers$ === 'object' && globalThis.$RefreshHelpers !== null) {
            __turbopack_context__.k.registerExports(__turbopack_context__.m, globalThis.$RefreshHelpers$);
        }
    }),
    "[project]/Desktop/v0-admin-dashboard-ui/lib/utils.ts [app-client] (ecmascript)", ((__turbopack_context__) => {
        "use strict";

        __turbopack_context__.s([
            "cn",
            () => cn
        ]);
        var __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$v0$2d$admin$2d$dashboard$2d$ui$2f$node_modules$2f$clsx$2f$dist$2f$clsx$2e$mjs__$5b$app$2d$client$5d$__$28$ecmascript$29$__ = __turbopack_context__.i("[project]/Desktop/v0-admin-dashboard-ui/node_modules/clsx/dist/clsx.mjs [app-client] (ecmascript)");
        var __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$v0$2d$admin$2d$dashboard$2d$ui$2f$node_modules$2f$tailwind$2d$merge$2f$dist$2f$bundle$2d$mjs$2e$mjs__$5b$app$2d$client$5d$__$28$ecmascript$29$__ = __turbopack_context__.i("[project]/Desktop/v0-admin-dashboard-ui/node_modules/tailwind-merge/dist/bundle-mjs.mjs [app-client] (ecmascript)");;;

        function cn(...inputs) {
            return (0, __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$v0$2d$admin$2d$dashboard$2d$ui$2f$node_modules$2f$tailwind$2d$merge$2f$dist$2f$bundle$2d$mjs$2e$mjs__$5b$app$2d$client$5d$__$28$ecmascript$29$__["twMerge"])((0, __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$v0$2d$admin$2d$dashboard$2d$ui$2f$node_modules$2f$clsx$2f$dist$2f$clsx$2e$mjs__$5b$app$2d$client$5d$__$28$ecmascript$29$__["clsx"])(inputs));
        }
        if (typeof globalThis.$RefreshHelpers$ === 'object' && globalThis.$RefreshHelpers !== null) {
            __turbopack_context__.k.registerExports(__turbopack_context__.m, globalThis.$RefreshHelpers$);
        }
    }),
    "[project]/Desktop/v0-admin-dashboard-ui/components/sidebar.tsx [app-client] (ecmascript)", ((__turbopack_context__) => {
        "use strict";

        __turbopack_context__.s([
            "Sidebar",
            () => Sidebar
        ]);
        var __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$v0$2d$admin$2d$dashboard$2d$ui$2f$node_modules$2f$next$2f$dist$2f$compiled$2f$react$2f$jsx$2d$dev$2d$runtime$2e$js__$5b$app$2d$client$5d$__$28$ecmascript$29$__ = __turbopack_context__.i("[project]/Desktop/v0-admin-dashboard-ui/node_modules/next/dist/compiled/react/jsx-dev-runtime.js [app-client] (ecmascript)");
        var __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$v0$2d$admin$2d$dashboard$2d$ui$2f$node_modules$2f$next$2f$navigation$2e$js__$5b$app$2d$client$5d$__$28$ecmascript$29$__ = __turbopack_context__.i("[project]/Desktop/v0-admin-dashboard-ui/node_modules/next/navigation.js [app-client] (ecmascript)");
        var __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$v0$2d$admin$2d$dashboard$2d$ui$2f$node_modules$2f$next$2f$dist$2f$client$2f$app$2d$dir$2f$link$2e$js__$5b$app$2d$client$5d$__$28$ecmascript$29$__ = __turbopack_context__.i("[project]/Desktop/v0-admin-dashboard-ui/node_modules/next/dist/client/app-dir/link.js [app-client] (ecmascript)");
        var __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$v0$2d$admin$2d$dashboard$2d$ui$2f$node_modules$2f$lucide$2d$react$2f$dist$2f$esm$2f$icons$2f$layout$2d$dashboard$2e$js__$5b$app$2d$client$5d$__$28$ecmascript$29$__$3c$export__default__as__LayoutDashboard$3e$__ = __turbopack_context__.i("[project]/Desktop/v0-admin-dashboard-ui/node_modules/lucide-react/dist/esm/icons/layout-dashboard.js [app-client] (ecmascript) <export default as LayoutDashboard>");
        var __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$v0$2d$admin$2d$dashboard$2d$ui$2f$node_modules$2f$lucide$2d$react$2f$dist$2f$esm$2f$icons$2f$palette$2e$js__$5b$app$2d$client$5d$__$28$ecmascript$29$__$3c$export__default__as__Palette$3e$__ = __turbopack_context__.i("[project]/Desktop/v0-admin-dashboard-ui/node_modules/lucide-react/dist/esm/icons/palette.js [app-client] (ecmascript) <export default as Palette>");
        var __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$v0$2d$admin$2d$dashboard$2d$ui$2f$node_modules$2f$lucide$2d$react$2f$dist$2f$esm$2f$icons$2f$zap$2e$js__$5b$app$2d$client$5d$__$28$ecmascript$29$__$3c$export__default__as__Zap$3e$__ = __turbopack_context__.i("[project]/Desktop/v0-admin-dashboard-ui/node_modules/lucide-react/dist/esm/icons/zap.js [app-client] (ecmascript) <export default as Zap>");
        var __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$v0$2d$admin$2d$dashboard$2d$ui$2f$node_modules$2f$lucide$2d$react$2f$dist$2f$esm$2f$icons$2f$briefcase$2e$js__$5b$app$2d$client$5d$__$28$ecmascript$29$__$3c$export__default__as__Briefcase$3e$__ = __turbopack_context__.i("[project]/Desktop/v0-admin-dashboard-ui/node_modules/lucide-react/dist/esm/icons/briefcase.js [app-client] (ecmascript) <export default as Briefcase>");
        var __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$v0$2d$admin$2d$dashboard$2d$ui$2f$node_modules$2f$lucide$2d$react$2f$dist$2f$esm$2f$icons$2f$code$2d$xml$2e$js__$5b$app$2d$client$5d$__$28$ecmascript$29$__$3c$export__default__as__Code2$3e$__ = __turbopack_context__.i("[project]/Desktop/v0-admin-dashboard-ui/node_modules/lucide-react/dist/esm/icons/code-xml.js [app-client] (ecmascript) <export default as Code2>");
        var __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$v0$2d$admin$2d$dashboard$2d$ui$2f$node_modules$2f$lucide$2d$react$2f$dist$2f$esm$2f$icons$2f$layers$2e$js__$5b$app$2d$client$5d$__$28$ecmascript$29$__$3c$export__default__as__Layers$3e$__ = __turbopack_context__.i("[project]/Desktop/v0-admin-dashboard-ui/node_modules/lucide-react/dist/esm/icons/layers.js [app-client] (ecmascript) <export default as Layers>");
        var __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$v0$2d$admin$2d$dashboard$2d$ui$2f$node_modules$2f$lucide$2d$react$2f$dist$2f$esm$2f$icons$2f$mail$2e$js__$5b$app$2d$client$5d$__$28$ecmascript$29$__$3c$export__default__as__Mail$3e$__ = __turbopack_context__.i("[project]/Desktop/v0-admin-dashboard-ui/node_modules/lucide-react/dist/esm/icons/mail.js [app-client] (ecmascript) <export default as Mail>");
        var __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$v0$2d$admin$2d$dashboard$2d$ui$2f$node_modules$2f$lucide$2d$react$2f$dist$2f$esm$2f$icons$2f$eye$2e$js__$5b$app$2d$client$5d$__$28$ecmascript$29$__$3c$export__default__as__Eye$3e$__ = __turbopack_context__.i("[project]/Desktop/v0-admin-dashboard-ui/node_modules/lucide-react/dist/esm/icons/eye.js [app-client] (ecmascript) <export default as Eye>");
        var __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$v0$2d$admin$2d$dashboard$2d$ui$2f$node_modules$2f$lucide$2d$react$2f$dist$2f$esm$2f$icons$2f$message$2d$square$2e$js__$5b$app$2d$client$5d$__$28$ecmascript$29$__$3c$export__default__as__MessageSquare$3e$__ = __turbopack_context__.i("[project]/Desktop/v0-admin-dashboard-ui/node_modules/lucide-react/dist/esm/icons/message-square.js [app-client] (ecmascript) <export default as MessageSquare>");
        var __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$v0$2d$admin$2d$dashboard$2d$ui$2f$lib$2f$utils$2e$ts__$5b$app$2d$client$5d$__$28$ecmascript$29$__ = __turbopack_context__.i("[project]/Desktop/v0-admin-dashboard-ui/lib/utils.ts [app-client] (ecmascript)");;
        var _s = __turbopack_context__.k.signature();
        'use client';;;;;
        const menuItems = [{
                icon: __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$v0$2d$admin$2d$dashboard$2d$ui$2f$node_modules$2f$lucide$2d$react$2f$dist$2f$esm$2f$icons$2f$layout$2d$dashboard$2e$js__$5b$app$2d$client$5d$__$28$ecmascript$29$__$3c$export__default__as__LayoutDashboard$3e$__["LayoutDashboard"],
                label: 'Dashboard',
                href: '/'
            },
            {
                icon: __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$v0$2d$admin$2d$dashboard$2d$ui$2f$node_modules$2f$lucide$2d$react$2f$dist$2f$esm$2f$icons$2f$palette$2e$js__$5b$app$2d$client$5d$__$28$ecmascript$29$__$3c$export__default__as__Palette$3e$__["Palette"],
                label: 'Branding',
                href: '/branding'
            },
            {
                icon: __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$v0$2d$admin$2d$dashboard$2d$ui$2f$node_modules$2f$lucide$2d$react$2f$dist$2f$esm$2f$icons$2f$zap$2e$js__$5b$app$2d$client$5d$__$28$ecmascript$29$__$3c$export__default__as__Zap$3e$__["Zap"],
                label: 'Hero Section',
                href: '/hero'
            },
            {
                icon: __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$v0$2d$admin$2d$dashboard$2d$ui$2f$node_modules$2f$lucide$2d$react$2f$dist$2f$esm$2f$icons$2f$briefcase$2e$js__$5b$app$2d$client$5d$__$28$ecmascript$29$__$3c$export__default__as__Briefcase$3e$__["Briefcase"],
                label: 'Experience',
                href: '/experience'
            },
            {
                icon: __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$v0$2d$admin$2d$dashboard$2d$ui$2f$node_modules$2f$lucide$2d$react$2f$dist$2f$esm$2f$icons$2f$code$2d$xml$2e$js__$5b$app$2d$client$5d$__$28$ecmascript$29$__$3c$export__default__as__Code2$3e$__["Code2"],
                label: 'Skills',
                href: '/skills'
            },
            {
                icon: __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$v0$2d$admin$2d$dashboard$2d$ui$2f$node_modules$2f$lucide$2d$react$2f$dist$2f$esm$2f$icons$2f$layers$2e$js__$5b$app$2d$client$5d$__$28$ecmascript$29$__$3c$export__default__as__Layers$3e$__["Layers"],
                label: 'Projects',
                href: '/projects'
            },
            {
                icon: __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$v0$2d$admin$2d$dashboard$2d$ui$2f$node_modules$2f$lucide$2d$react$2f$dist$2f$esm$2f$icons$2f$mail$2e$js__$5b$app$2d$client$5d$__$28$ecmascript$29$__$3c$export__default__as__Mail$3e$__["Mail"],
                label: 'Contact Info',
                href: '/contact'
            },
            {
                icon: __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$v0$2d$admin$2d$dashboard$2d$ui$2f$node_modules$2f$lucide$2d$react$2f$dist$2f$esm$2f$icons$2f$message$2d$square$2e$js__$5b$app$2d$client$5d$__$28$ecmascript$29$__$3c$export__default__as__MessageSquare$3e$__["MessageSquare"],
                label: 'Client Contacts',
                href: '/client-contacts'
            },
            {
                icon: __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$v0$2d$admin$2d$dashboard$2d$ui$2f$node_modules$2f$lucide$2d$react$2f$dist$2f$esm$2f$icons$2f$eye$2e$js__$5b$app$2d$client$5d$__$28$ecmascript$29$__$3c$export__default__as__Eye$3e$__["Eye"],
                label: 'Preview',
                href: '/preview'
            }
        ];

        function Sidebar() {
            _s();
            const pathname = (0, __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$v0$2d$admin$2d$dashboard$2d$ui$2f$node_modules$2f$next$2f$navigation$2e$js__$5b$app$2d$client$5d$__$28$ecmascript$29$__["usePathname"])();
            const isActive = (href) => {
                if (href === '/') {
                    return pathname === '/';
                }
                return pathname.includes(href);
            };
            return /*#__PURE__*/ (0, __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$v0$2d$admin$2d$dashboard$2d$ui$2f$node_modules$2f$next$2f$dist$2f$compiled$2f$react$2f$jsx$2d$dev$2d$runtime$2e$js__$5b$app$2d$client$5d$__$28$ecmascript$29$__["jsxDEV"])("aside", {
                className: "w-64 bg-sidebar text-sidebar-foreground border-r border-sidebar-border flex flex-col",
                children: [
                    /*#__PURE__*/
                    (0, __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$v0$2d$admin$2d$dashboard$2d$ui$2f$node_modules$2f$next$2f$dist$2f$compiled$2f$react$2f$jsx$2d$dev$2d$runtime$2e$js__$5b$app$2d$client$5d$__$28$ecmascript$29$__["jsxDEV"])("div", {
                        className: "p-6 border-b border-sidebar-border",
                        children: /*#__PURE__*/ (0, __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$v0$2d$admin$2d$dashboard$2d$ui$2f$node_modules$2f$next$2f$dist$2f$compiled$2f$react$2f$jsx$2d$dev$2d$runtime$2e$js__$5b$app$2d$client$5d$__$28$ecmascript$29$__["jsxDEV"])("div", {
                            className: "flex items-center gap-3",
                            children: [
                                /*#__PURE__*/
                                (0, __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$v0$2d$admin$2d$dashboard$2d$ui$2f$node_modules$2f$next$2f$dist$2f$compiled$2f$react$2f$jsx$2d$dev$2d$runtime$2e$js__$5b$app$2d$client$5d$__$28$ecmascript$29$__["jsxDEV"])("div", {
                                    className: "w-10 h-10 rounded-lg bg-sidebar-primary flex items-center justify-center",
                                    children: /*#__PURE__*/ (0, __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$v0$2d$admin$2d$dashboard$2d$ui$2f$node_modules$2f$next$2f$dist$2f$compiled$2f$react$2f$jsx$2d$dev$2d$runtime$2e$js__$5b$app$2d$client$5d$__$28$ecmascript$29$__["jsxDEV"])(__TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$v0$2d$admin$2d$dashboard$2d$ui$2f$node_modules$2f$lucide$2d$react$2f$dist$2f$esm$2f$icons$2f$code$2d$xml$2e$js__$5b$app$2d$client$5d$__$28$ecmascript$29$__$3c$export__default__as__Code2$3e$__["Code2"], {
                                        className: "w-6 h-6 text-sidebar-primary-foreground"
                                    }, void 0, false, {
                                        fileName: "[project]/Desktop/v0-admin-dashboard-ui/components/sidebar.tsx",
                                        lineNumber: 81,
                                        columnNumber: 13
                                    }, this)
                                }, void 0, false, {
                                    fileName: "[project]/Desktop/v0-admin-dashboard-ui/components/sidebar.tsx",
                                    lineNumber: 80,
                                    columnNumber: 11
                                }, this),
                                /*#__PURE__*/
                                (0, __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$v0$2d$admin$2d$dashboard$2d$ui$2f$node_modules$2f$next$2f$dist$2f$compiled$2f$react$2f$jsx$2d$dev$2d$runtime$2e$js__$5b$app$2d$client$5d$__$28$ecmascript$29$__["jsxDEV"])("div", {
                                    children: [
                                        /*#__PURE__*/
                                        (0, __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$v0$2d$admin$2d$dashboard$2d$ui$2f$node_modules$2f$next$2f$dist$2f$compiled$2f$react$2f$jsx$2d$dev$2d$runtime$2e$js__$5b$app$2d$client$5d$__$28$ecmascript$29$__["jsxDEV"])("h1", {
                                            className: "text-lg font-bold text-sidebar-foreground",
                                            children: "DevPortal"
                                        }, void 0, false, {
                                            fileName: "[project]/Desktop/v0-admin-dashboard-ui/components/sidebar.tsx",
                                            lineNumber: 84,
                                            columnNumber: 13
                                        }, this),
                                        /*#__PURE__*/
                                        (0, __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$v0$2d$admin$2d$dashboard$2d$ui$2f$node_modules$2f$next$2f$dist$2f$compiled$2f$react$2f$jsx$2d$dev$2d$runtime$2e$js__$5b$app$2d$client$5d$__$28$ecmascript$29$__["jsxDEV"])("p", {
                                            className: "text-xs text-sidebar-accent-foreground",
                                            children: "Admin Dashboard"
                                        }, void 0, false, {
                                            fileName: "[project]/Desktop/v0-admin-dashboard-ui/components/sidebar.tsx",
                                            lineNumber: 85,
                                            columnNumber: 13
                                        }, this)
                                    ]
                                }, void 0, true, {
                                    fileName: "[project]/Desktop/v0-admin-dashboard-ui/components/sidebar.tsx",
                                    lineNumber: 83,
                                    columnNumber: 11
                                }, this)
                            ]
                        }, void 0, true, {
                            fileName: "[project]/Desktop/v0-admin-dashboard-ui/components/sidebar.tsx",
                            lineNumber: 79,
                            columnNumber: 9
                        }, this)
                    }, void 0, false, {
                        fileName: "[project]/Desktop/v0-admin-dashboard-ui/components/sidebar.tsx",
                        lineNumber: 78,
                        columnNumber: 7
                    }, this),
                    /*#__PURE__*/
                    (0, __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$v0$2d$admin$2d$dashboard$2d$ui$2f$node_modules$2f$next$2f$dist$2f$compiled$2f$react$2f$jsx$2d$dev$2d$runtime$2e$js__$5b$app$2d$client$5d$__$28$ecmascript$29$__["jsxDEV"])("nav", {
                        className: "flex-1 overflow-y-auto px-4 py-6 space-y-2",
                        children: menuItems.map((item) => {
                            const Icon = item.icon;
                            const active = isActive(item.href);
                            return /*#__PURE__*/ (0, __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$v0$2d$admin$2d$dashboard$2d$ui$2f$node_modules$2f$next$2f$dist$2f$compiled$2f$react$2f$jsx$2d$dev$2d$runtime$2e$js__$5b$app$2d$client$5d$__$28$ecmascript$29$__["jsxDEV"])(__TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$v0$2d$admin$2d$dashboard$2d$ui$2f$node_modules$2f$next$2f$dist$2f$client$2f$app$2d$dir$2f$link$2e$js__$5b$app$2d$client$5d$__$28$ecmascript$29$__["default"], {
                                href: item.href,
                                className: (0, __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$v0$2d$admin$2d$dashboard$2d$ui$2f$lib$2f$utils$2e$ts__$5b$app$2d$client$5d$__$28$ecmascript$29$__["cn"])('w-full flex items-center gap-3 px-4 py-3 rounded-lg transition-colors duration-200 text-left', active ? 'bg-sidebar-primary text-sidebar-primary-foreground' : 'text-sidebar-foreground hover:bg-sidebar-accent'),
                                children: [
                                    /*#__PURE__*/
                                    (0, __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$v0$2d$admin$2d$dashboard$2d$ui$2f$node_modules$2f$next$2f$dist$2f$compiled$2f$react$2f$jsx$2d$dev$2d$runtime$2e$js__$5b$app$2d$client$5d$__$28$ecmascript$29$__["jsxDEV"])(Icon, {
                                        className: "w-5 h-5 flex-shrink-0"
                                    }, void 0, false, {
                                        fileName: "[project]/Desktop/v0-admin-dashboard-ui/components/sidebar.tsx",
                                        lineNumber: 106,
                                        columnNumber: 15
                                    }, this),
                                    /*#__PURE__*/
                                    (0, __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$v0$2d$admin$2d$dashboard$2d$ui$2f$node_modules$2f$next$2f$dist$2f$compiled$2f$react$2f$jsx$2d$dev$2d$runtime$2e$js__$5b$app$2d$client$5d$__$28$ecmascript$29$__["jsxDEV"])("span", {
                                        className: "text-sm font-medium",
                                        children: item.label
                                    }, void 0, false, {
                                        fileName: "[project]/Desktop/v0-admin-dashboard-ui/components/sidebar.tsx",
                                        lineNumber: 107,
                                        columnNumber: 15
                                    }, this)
                                ]
                            }, item.href, true, {
                                fileName: "[project]/Desktop/v0-admin-dashboard-ui/components/sidebar.tsx",
                                lineNumber: 96,
                                columnNumber: 13
                            }, this);
                        })
                    }, void 0, false, {
                        fileName: "[project]/Desktop/v0-admin-dashboard-ui/components/sidebar.tsx",
                        lineNumber: 90,
                        columnNumber: 7
                    }, this),
                    /*#__PURE__*/
                    (0, __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$v0$2d$admin$2d$dashboard$2d$ui$2f$node_modules$2f$next$2f$dist$2f$compiled$2f$react$2f$jsx$2d$dev$2d$runtime$2e$js__$5b$app$2d$client$5d$__$28$ecmascript$29$__["jsxDEV"])("div", {
                        className: "p-4 border-t border-sidebar-border",
                        children: /*#__PURE__*/ (0, __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$v0$2d$admin$2d$dashboard$2d$ui$2f$node_modules$2f$next$2f$dist$2f$compiled$2f$react$2f$jsx$2d$dev$2d$runtime$2e$js__$5b$app$2d$client$5d$__$28$ecmascript$29$__["jsxDEV"])("div", {
                            className: "text-xs text-sidebar-accent-foreground",
                            children: [
                                /*#__PURE__*/
                                (0, __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$v0$2d$admin$2d$dashboard$2d$ui$2f$node_modules$2f$next$2f$dist$2f$compiled$2f$react$2f$jsx$2d$dev$2d$runtime$2e$js__$5b$app$2d$client$5d$__$28$ecmascript$29$__["jsxDEV"])("p", {
                                    children: "© 2024 DevPortal"
                                }, void 0, false, {
                                    fileName: "[project]/Desktop/v0-admin-dashboard-ui/components/sidebar.tsx",
                                    lineNumber: 115,
                                    columnNumber: 11
                                }, this),
                                /*#__PURE__*/
                                (0, __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$v0$2d$admin$2d$dashboard$2d$ui$2f$node_modules$2f$next$2f$dist$2f$compiled$2f$react$2f$jsx$2d$dev$2d$runtime$2e$js__$5b$app$2d$client$5d$__$28$ecmascript$29$__["jsxDEV"])("p", {
                                    className: "mt-1",
                                    children: "v1.0.0"
                                }, void 0, false, {
                                    fileName: "[project]/Desktop/v0-admin-dashboard-ui/components/sidebar.tsx",
                                    lineNumber: 116,
                                    columnNumber: 11
                                }, this)
                            ]
                        }, void 0, true, {
                            fileName: "[project]/Desktop/v0-admin-dashboard-ui/components/sidebar.tsx",
                            lineNumber: 114,
                            columnNumber: 9
                        }, this)
                    }, void 0, false, {
                        fileName: "[project]/Desktop/v0-admin-dashboard-ui/components/sidebar.tsx",
                        lineNumber: 113,
                        columnNumber: 7
                    }, this)
                ]
            }, void 0, true, {
                fileName: "[project]/Desktop/v0-admin-dashboard-ui/components/sidebar.tsx",
                lineNumber: 77,
                columnNumber: 5
            }, this);
        }
        _s(Sidebar, "xbyQPtUVMO7MNj7WjJlpdWqRcTo=", false, function() {
            return [
                __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$v0$2d$admin$2d$dashboard$2d$ui$2f$node_modules$2f$next$2f$navigation$2e$js__$5b$app$2d$client$5d$__$28$ecmascript$29$__["usePathname"]
            ];
        });
        _c = Sidebar;
        var _c;
        __turbopack_context__.k.register(_c, "Sidebar");
        if (typeof globalThis.$RefreshHelpers$ === 'object' && globalThis.$RefreshHelpers !== null) {
            __turbopack_context__.k.registerExports(__turbopack_context__.m, globalThis.$RefreshHelpers$);
        }
    }),
    "[project]/Desktop/v0-admin-dashboard-ui/app/(dashboard)/layout.tsx [app-client] (ecmascript)", ((__turbopack_context__) => {
        "use strict";

        __turbopack_context__.s([
            "default",
            () => DashboardLayout
        ]);
        var __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$v0$2d$admin$2d$dashboard$2d$ui$2f$node_modules$2f$next$2f$dist$2f$compiled$2f$react$2f$jsx$2d$dev$2d$runtime$2e$js__$5b$app$2d$client$5d$__$28$ecmascript$29$__ = __turbopack_context__.i("[project]/Desktop/v0-admin-dashboard-ui/node_modules/next/dist/compiled/react/jsx-dev-runtime.js [app-client] (ecmascript)");
        var __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$v0$2d$admin$2d$dashboard$2d$ui$2f$node_modules$2f$next$2f$navigation$2e$js__$5b$app$2d$client$5d$__$28$ecmascript$29$__ = __turbopack_context__.i("[project]/Desktop/v0-admin-dashboard-ui/node_modules/next/navigation.js [app-client] (ecmascript)");
        var __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$v0$2d$admin$2d$dashboard$2d$ui$2f$components$2f$theme$2d$toggle$2e$tsx__$5b$app$2d$client$5d$__$28$ecmascript$29$__ = __turbopack_context__.i("[project]/Desktop/v0-admin-dashboard-ui/components/theme-toggle.tsx [app-client] (ecmascript)");
        var __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$v0$2d$admin$2d$dashboard$2d$ui$2f$components$2f$sidebar$2e$tsx__$5b$app$2d$client$5d$__$28$ecmascript$29$__ = __turbopack_context__.i("[project]/Desktop/v0-admin-dashboard-ui/components/sidebar.tsx [app-client] (ecmascript)");;
        var _s = __turbopack_context__.k.signature();
        'use client';;;;

        function DashboardLayout({
            children
        }) {
            _s();
            const pathname = (0, __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$v0$2d$admin$2d$dashboard$2d$ui$2f$node_modules$2f$next$2f$navigation$2e$js__$5b$app$2d$client$5d$__$28$ecmascript$29$__["usePathname"])();
            // Extract page title from pathname
            const getPageTitle = () => {
                const segments = pathname.split('/').filter(Boolean);
                if (segments.length === 0) return 'Dashboard';
                const lastSegment = segments[segments.length - 1];
                return lastSegment.split('-').map((word) => word.charAt(0).toUpperCase() + word.slice(1)).join(' ');
            };
            return /*#__PURE__*/ (0, __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$v0$2d$admin$2d$dashboard$2d$ui$2f$node_modules$2f$next$2f$dist$2f$compiled$2f$react$2f$jsx$2d$dev$2d$runtime$2e$js__$5b$app$2d$client$5d$__$28$ecmascript$29$__["jsxDEV"])("div", {
                className: "flex h-screen bg-background",
                children: [
                    /*#__PURE__*/
                    (0, __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$v0$2d$admin$2d$dashboard$2d$ui$2f$node_modules$2f$next$2f$dist$2f$compiled$2f$react$2f$jsx$2d$dev$2d$runtime$2e$js__$5b$app$2d$client$5d$__$28$ecmascript$29$__["jsxDEV"])(__TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$v0$2d$admin$2d$dashboard$2d$ui$2f$components$2f$sidebar$2e$tsx__$5b$app$2d$client$5d$__$28$ecmascript$29$__["Sidebar"], {}, void 0, false, {
                        fileName: "[project]/Desktop/v0-admin-dashboard-ui/app/(dashboard)/layout.tsx",
                        lineNumber: 30,
                        columnNumber: 7
                    }, this),
                    /*#__PURE__*/
                    (0, __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$v0$2d$admin$2d$dashboard$2d$ui$2f$node_modules$2f$next$2f$dist$2f$compiled$2f$react$2f$jsx$2d$dev$2d$runtime$2e$js__$5b$app$2d$client$5d$__$28$ecmascript$29$__["jsxDEV"])("div", {
                        className: "flex-1 flex flex-col overflow-hidden",
                        children: [
                            /*#__PURE__*/
                            (0, __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$v0$2d$admin$2d$dashboard$2d$ui$2f$node_modules$2f$next$2f$dist$2f$compiled$2f$react$2f$jsx$2d$dev$2d$runtime$2e$js__$5b$app$2d$client$5d$__$28$ecmascript$29$__["jsxDEV"])("header", {
                                className: "border-b border-border bg-card h-16 flex items-center justify-between px-8",
                                children: [
                                    /*#__PURE__*/
                                    (0, __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$v0$2d$admin$2d$dashboard$2d$ui$2f$node_modules$2f$next$2f$dist$2f$compiled$2f$react$2f$jsx$2d$dev$2d$runtime$2e$js__$5b$app$2d$client$5d$__$28$ecmascript$29$__["jsxDEV"])("h1", {
                                        className: "text-2xl font-bold text-foreground",
                                        children: getPageTitle()
                                    }, void 0, false, {
                                        fileName: "[project]/Desktop/v0-admin-dashboard-ui/app/(dashboard)/layout.tsx",
                                        lineNumber: 33,
                                        columnNumber: 11
                                    }, this),
                                    /*#__PURE__*/
                                    (0, __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$v0$2d$admin$2d$dashboard$2d$ui$2f$node_modules$2f$next$2f$dist$2f$compiled$2f$react$2f$jsx$2d$dev$2d$runtime$2e$js__$5b$app$2d$client$5d$__$28$ecmascript$29$__["jsxDEV"])("div", {
                                        className: "flex items-center gap-4",
                                        children: [
                                            /*#__PURE__*/
                                            (0, __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$v0$2d$admin$2d$dashboard$2d$ui$2f$node_modules$2f$next$2f$dist$2f$compiled$2f$react$2f$jsx$2d$dev$2d$runtime$2e$js__$5b$app$2d$client$5d$__$28$ecmascript$29$__["jsxDEV"])(__TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$v0$2d$admin$2d$dashboard$2d$ui$2f$components$2f$theme$2d$toggle$2e$tsx__$5b$app$2d$client$5d$__$28$ecmascript$29$__["ThemeToggle"], {}, void 0, false, {
                                                fileName: "[project]/Desktop/v0-admin-dashboard-ui/app/(dashboard)/layout.tsx",
                                                lineNumber: 37,
                                                columnNumber: 13
                                            }, this),
                                            /*#__PURE__*/
                                            (0, __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$v0$2d$admin$2d$dashboard$2d$ui$2f$node_modules$2f$next$2f$dist$2f$compiled$2f$react$2f$jsx$2d$dev$2d$runtime$2e$js__$5b$app$2d$client$5d$__$28$ecmascript$29$__["jsxDEV"])("div", {
                                                className: "w-10 h-10 rounded-full bg-primary flex items-center justify-center",
                                                children: /*#__PURE__*/ (0, __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$v0$2d$admin$2d$dashboard$2d$ui$2f$node_modules$2f$next$2f$dist$2f$compiled$2f$react$2f$jsx$2d$dev$2d$runtime$2e$js__$5b$app$2d$client$5d$__$28$ecmascript$29$__["jsxDEV"])("span", {
                                                    className: "text-primary-foreground font-semibold text-sm",
                                                    children: "JD"
                                                }, void 0, false, {
                                                    fileName: "[project]/Desktop/v0-admin-dashboard-ui/app/(dashboard)/layout.tsx",
                                                    lineNumber: 39,
                                                    columnNumber: 15
                                                }, this)
                                            }, void 0, false, {
                                                fileName: "[project]/Desktop/v0-admin-dashboard-ui/app/(dashboard)/layout.tsx",
                                                lineNumber: 38,
                                                columnNumber: 13
                                            }, this)
                                        ]
                                    }, void 0, true, {
                                        fileName: "[project]/Desktop/v0-admin-dashboard-ui/app/(dashboard)/layout.tsx",
                                        lineNumber: 36,
                                        columnNumber: 11
                                    }, this)
                                ]
                            }, void 0, true, {
                                fileName: "[project]/Desktop/v0-admin-dashboard-ui/app/(dashboard)/layout.tsx",
                                lineNumber: 32,
                                columnNumber: 9
                            }, this),
                            /*#__PURE__*/
                            (0, __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$v0$2d$admin$2d$dashboard$2d$ui$2f$node_modules$2f$next$2f$dist$2f$compiled$2f$react$2f$jsx$2d$dev$2d$runtime$2e$js__$5b$app$2d$client$5d$__$28$ecmascript$29$__["jsxDEV"])("main", {
                                className: "flex-1 overflow-auto",
                                children: children
                            }, void 0, false, {
                                fileName: "[project]/Desktop/v0-admin-dashboard-ui/app/(dashboard)/layout.tsx",
                                lineNumber: 43,
                                columnNumber: 9
                            }, this)
                        ]
                    }, void 0, true, {
                        fileName: "[project]/Desktop/v0-admin-dashboard-ui/app/(dashboard)/layout.tsx",
                        lineNumber: 31,
                        columnNumber: 7
                    }, this)
                ]
            }, void 0, true, {
                fileName: "[project]/Desktop/v0-admin-dashboard-ui/app/(dashboard)/layout.tsx",
                lineNumber: 29,
                columnNumber: 5
            }, this);
        }
        _s(DashboardLayout, "xbyQPtUVMO7MNj7WjJlpdWqRcTo=", false, function() {
            return [
                __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$v0$2d$admin$2d$dashboard$2d$ui$2f$node_modules$2f$next$2f$navigation$2e$js__$5b$app$2d$client$5d$__$28$ecmascript$29$__["usePathname"]
            ];
        });
        _c = DashboardLayout;
        var _c;
        __turbopack_context__.k.register(_c, "DashboardLayout");
        if (typeof globalThis.$RefreshHelpers$ === 'object' && globalThis.$RefreshHelpers !== null) {
            __turbopack_context__.k.registerExports(__turbopack_context__.m, globalThis.$RefreshHelpers$);
        }
    }),
]);

//# sourceMappingURL=Desktop_v0-admin-dashboard-ui_9745f2ed._.js.map