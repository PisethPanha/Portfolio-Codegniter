(globalThis.TURBOPACK || (globalThis.TURBOPACK = [])).push([typeof document === "object" ? document.currentScript : undefined,
    "[project]/Desktop/portfolio-V0/porfolio-V0/lib/utils.ts [app-client] (ecmascript)", ((__turbopack_context__) => {
        "use strict";

        __turbopack_context__.s([
            "cn",
            () => cn
        ]);
        var __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$portfolio$2d$V0$2f$porfolio$2d$V0$2f$node_modules$2f$clsx$2f$dist$2f$clsx$2e$mjs__$5b$app$2d$client$5d$__$28$ecmascript$29$__ = __turbopack_context__.i("[project]/Desktop/portfolio-V0/porfolio-V0/node_modules/clsx/dist/clsx.mjs [app-client] (ecmascript)");
        var __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$portfolio$2d$V0$2f$porfolio$2d$V0$2f$node_modules$2f$tailwind$2d$merge$2f$dist$2f$bundle$2d$mjs$2e$mjs__$5b$app$2d$client$5d$__$28$ecmascript$29$__ = __turbopack_context__.i("[project]/Desktop/portfolio-V0/porfolio-V0/node_modules/tailwind-merge/dist/bundle-mjs.mjs [app-client] (ecmascript)");;;

        function cn(...inputs) {
            return (0, __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$portfolio$2d$V0$2f$porfolio$2d$V0$2f$node_modules$2f$tailwind$2d$merge$2f$dist$2f$bundle$2d$mjs$2e$mjs__$5b$app$2d$client$5d$__$28$ecmascript$29$__["twMerge"])((0, __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$portfolio$2d$V0$2f$porfolio$2d$V0$2f$node_modules$2f$clsx$2f$dist$2f$clsx$2e$mjs__$5b$app$2d$client$5d$__$28$ecmascript$29$__["clsx"])(inputs));
        }
        if (typeof globalThis.$RefreshHelpers$ === 'object' && globalThis.$RefreshHelpers !== null) {
            __turbopack_context__.k.registerExports(__turbopack_context__.m, globalThis.$RefreshHelpers$);
        }
    }),
    "[project]/Desktop/portfolio-V0/porfolio-V0/components/ui/button.tsx [app-client] (ecmascript)", ((__turbopack_context__) => {
        "use strict";

        __turbopack_context__.s([
            "Button",
            () => Button,
            "buttonVariants",
            () => buttonVariants
        ]);
        var __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$portfolio$2d$V0$2f$porfolio$2d$V0$2f$node_modules$2f$next$2f$dist$2f$compiled$2f$react$2f$jsx$2d$dev$2d$runtime$2e$js__$5b$app$2d$client$5d$__$28$ecmascript$29$__ = __turbopack_context__.i("[project]/Desktop/portfolio-V0/porfolio-V0/node_modules/next/dist/compiled/react/jsx-dev-runtime.js [app-client] (ecmascript)");
        var __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$portfolio$2d$V0$2f$porfolio$2d$V0$2f$node_modules$2f40$radix$2d$ui$2f$react$2d$slot$2f$dist$2f$index$2e$mjs__$5b$app$2d$client$5d$__$28$ecmascript$29$__ = __turbopack_context__.i("[project]/Desktop/portfolio-V0/porfolio-V0/node_modules/@radix-ui/react-slot/dist/index.mjs [app-client] (ecmascript)");
        var __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$portfolio$2d$V0$2f$porfolio$2d$V0$2f$node_modules$2f$class$2d$variance$2d$authority$2f$dist$2f$index$2e$mjs__$5b$app$2d$client$5d$__$28$ecmascript$29$__ = __turbopack_context__.i("[project]/Desktop/portfolio-V0/porfolio-V0/node_modules/class-variance-authority/dist/index.mjs [app-client] (ecmascript)");
        var __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$portfolio$2d$V0$2f$porfolio$2d$V0$2f$lib$2f$utils$2e$ts__$5b$app$2d$client$5d$__$28$ecmascript$29$__ = __turbopack_context__.i("[project]/Desktop/portfolio-V0/porfolio-V0/lib/utils.ts [app-client] (ecmascript)");;;;;
        const buttonVariants = (0, __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$portfolio$2d$V0$2f$porfolio$2d$V0$2f$node_modules$2f$class$2d$variance$2d$authority$2f$dist$2f$index$2e$mjs__$5b$app$2d$client$5d$__$28$ecmascript$29$__["cva"])("inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg:not([class*='size-'])]:size-4 shrink-0 [&_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive", {
            variants: {
                variant: {
                    default: 'bg-primary text-primary-foreground hover:bg-primary/90',
                    destructive: 'bg-destructive text-white hover:bg-destructive/90 focus-visible:ring-destructive/20 dark:focus-visible:ring-destructive/40 dark:bg-destructive/60',
                    outline: 'border bg-background shadow-xs hover:bg-accent hover:text-purple-400 dark:bg-input/30 dark:border-input dark:hover:bg-input/50',
                    secondary: 'bg-secondary text-secondary-foreground hover:bg-secondary/80',
                    ghost: 'hover:bg-accent hover:text-purple-700 dark:hover:bg-accent/50',
                    link: 'text-primary underline-offset-4 hover:underline'
                },
                size: {
                    default: 'h-9 px-4 py-2 has-[>svg]:px-3',
                    sm: 'h-8 rounded-md gap-1.5 px-3 has-[>svg]:px-2.5',
                    lg: 'h-10 rounded-md px-6 has-[>svg]:px-4',
                    icon: 'size-9',
                    'icon-sm': 'size-8',
                    'icon-lg': 'size-10'
                }
            },
            defaultVariants: {
                variant: 'default',
                size: 'default'
            }
        });

        function Button({
            className,
            variant,
            size,
            asChild = false,
            ...props
        }) {
            const Comp = asChild ? __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$portfolio$2d$V0$2f$porfolio$2d$V0$2f$node_modules$2f40$radix$2d$ui$2f$react$2d$slot$2f$dist$2f$index$2e$mjs__$5b$app$2d$client$5d$__$28$ecmascript$29$__["Slot"] : 'button';
            return /*#__PURE__*/ (0, __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$portfolio$2d$V0$2f$porfolio$2d$V0$2f$node_modules$2f$next$2f$dist$2f$compiled$2f$react$2f$jsx$2d$dev$2d$runtime$2e$js__$5b$app$2d$client$5d$__$28$ecmascript$29$__["jsxDEV"])(Comp, {
                "data-slot": "button",
                className: (0, __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$portfolio$2d$V0$2f$porfolio$2d$V0$2f$lib$2f$utils$2e$ts__$5b$app$2d$client$5d$__$28$ecmascript$29$__["cn"])(buttonVariants({
                    variant,
                    size,
                    className
                })),
                ...props
            }, void 0, false, {
                fileName: "[project]/Desktop/portfolio-V0/porfolio-V0/components/ui/button.tsx",
                lineNumber: 52,
                columnNumber: 5
            }, this);
        }
        _c = Button;;
        var _c;
        __turbopack_context__.k.register(_c, "Button");
        if (typeof globalThis.$RefreshHelpers$ === 'object' && globalThis.$RefreshHelpers !== null) {
            __turbopack_context__.k.registerExports(__turbopack_context__.m, globalThis.$RefreshHelpers$);
        }
    }),
    "[project]/Desktop/portfolio-V0/porfolio-V0/components/navigation.tsx [app-client] (ecmascript)", ((__turbopack_context__) => {
        "use strict";

        __turbopack_context__.s([
            "Navigation",
            () => Navigation
        ]);
        var __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$portfolio$2d$V0$2f$porfolio$2d$V0$2f$node_modules$2f$next$2f$dist$2f$compiled$2f$react$2f$jsx$2d$dev$2d$runtime$2e$js__$5b$app$2d$client$5d$__$28$ecmascript$29$__ = __turbopack_context__.i("[project]/Desktop/portfolio-V0/porfolio-V0/node_modules/next/dist/compiled/react/jsx-dev-runtime.js [app-client] (ecmascript)");
        var __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$portfolio$2d$V0$2f$porfolio$2d$V0$2f$node_modules$2f$next$2f$dist$2f$client$2f$app$2d$dir$2f$link$2e$js__$5b$app$2d$client$5d$__$28$ecmascript$29$__ = __turbopack_context__.i("[project]/Desktop/portfolio-V0/porfolio-V0/node_modules/next/dist/client/app-dir/link.js [app-client] (ecmascript)");
        var __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$portfolio$2d$V0$2f$porfolio$2d$V0$2f$node_modules$2f$next$2d$themes$2f$dist$2f$index$2e$mjs__$5b$app$2d$client$5d$__$28$ecmascript$29$__ = __turbopack_context__.i("[project]/Desktop/portfolio-V0/porfolio-V0/node_modules/next-themes/dist/index.mjs [app-client] (ecmascript)");
        var __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$portfolio$2d$V0$2f$porfolio$2d$V0$2f$node_modules$2f$next$2f$dist$2f$compiled$2f$react$2f$index$2e$js__$5b$app$2d$client$5d$__$28$ecmascript$29$__ = __turbopack_context__.i("[project]/Desktop/portfolio-V0/porfolio-V0/node_modules/next/dist/compiled/react/index.js [app-client] (ecmascript)");
        var __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$portfolio$2d$V0$2f$porfolio$2d$V0$2f$node_modules$2f$lucide$2d$react$2f$dist$2f$esm$2f$icons$2f$moon$2e$js__$5b$app$2d$client$5d$__$28$ecmascript$29$__$3c$export__default__as__Moon$3e$__ = __turbopack_context__.i("[project]/Desktop/portfolio-V0/porfolio-V0/node_modules/lucide-react/dist/esm/icons/moon.js [app-client] (ecmascript) <export default as Moon>");
        var __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$portfolio$2d$V0$2f$porfolio$2d$V0$2f$node_modules$2f$lucide$2d$react$2f$dist$2f$esm$2f$icons$2f$sun$2e$js__$5b$app$2d$client$5d$__$28$ecmascript$29$__$3c$export__default__as__Sun$3e$__ = __turbopack_context__.i("[project]/Desktop/portfolio-V0/porfolio-V0/node_modules/lucide-react/dist/esm/icons/sun.js [app-client] (ecmascript) <export default as Sun>");
        var __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$portfolio$2d$V0$2f$porfolio$2d$V0$2f$components$2f$ui$2f$button$2e$tsx__$5b$app$2d$client$5d$__$28$ecmascript$29$__ = __turbopack_context__.i("[project]/Desktop/portfolio-V0/porfolio-V0/components/ui/button.tsx [app-client] (ecmascript)");;
        var _s = __turbopack_context__.k.signature();
        "use client";;;;;;

        function Navigation() {
            _s();
            const {
                theme,
                setTheme
            } = (0, __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$portfolio$2d$V0$2f$porfolio$2d$V0$2f$node_modules$2f$next$2d$themes$2f$dist$2f$index$2e$mjs__$5b$app$2d$client$5d$__$28$ecmascript$29$__["useTheme"])();
            const [mounted, setMounted] = (0, __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$portfolio$2d$V0$2f$porfolio$2d$V0$2f$node_modules$2f$next$2f$dist$2f$compiled$2f$react$2f$index$2e$js__$5b$app$2d$client$5d$__$28$ecmascript$29$__["useState"])(false);
            (0, __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$portfolio$2d$V0$2f$porfolio$2d$V0$2f$node_modules$2f$next$2f$dist$2f$compiled$2f$react$2f$index$2e$js__$5b$app$2d$client$5d$__$28$ecmascript$29$__["useEffect"])({
                "Navigation.useEffect": () => {
                    setMounted(true);
                }
            }["Navigation.useEffect"], []);
            if (!mounted) {
                return null;
            }
            const links = [{
                    href: "/",
                    label: "Home"
                },
                {
                    href: "/about",
                    label: "About"
                },
                {
                    href: "/skills",
                    label: "Skills"
                },
                {
                    href: "/projects",
                    label: "Projects"
                },
                {
                    href: "/contact",
                    label: "Contact"
                }
            ];
            return /*#__PURE__*/ (0, __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$portfolio$2d$V0$2f$porfolio$2d$V0$2f$node_modules$2f$next$2f$dist$2f$compiled$2f$react$2f$jsx$2d$dev$2d$runtime$2e$js__$5b$app$2d$client$5d$__$28$ecmascript$29$__["jsxDEV"])("nav", {
                className: "sticky top-0 z-50 w-full border-b border-border/40 bg-background/95 backdrop-blur supports-[backdrop-filter]:bg-background/60",
                children: /*#__PURE__*/ (0, __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$portfolio$2d$V0$2f$porfolio$2d$V0$2f$node_modules$2f$next$2f$dist$2f$compiled$2f$react$2f$jsx$2d$dev$2d$runtime$2e$js__$5b$app$2d$client$5d$__$28$ecmascript$29$__["jsxDEV"])("div", {
                    className: "mx-auto max-w-7xl px-4 sm:px-6 lg:px-8",
                    children: /*#__PURE__*/ (0, __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$portfolio$2d$V0$2f$porfolio$2d$V0$2f$node_modules$2f$next$2f$dist$2f$compiled$2f$react$2f$jsx$2d$dev$2d$runtime$2e$js__$5b$app$2d$client$5d$__$28$ecmascript$29$__["jsxDEV"])("div", {
                        className: "flex h-16 items-center justify-between",
                        children: [
                            /*#__PURE__*/
                            (0, __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$portfolio$2d$V0$2f$porfolio$2d$V0$2f$node_modules$2f$next$2f$dist$2f$compiled$2f$react$2f$jsx$2d$dev$2d$runtime$2e$js__$5b$app$2d$client$5d$__$28$ecmascript$29$__["jsxDEV"])(__TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$portfolio$2d$V0$2f$porfolio$2d$V0$2f$node_modules$2f$next$2f$dist$2f$client$2f$app$2d$dir$2f$link$2e$js__$5b$app$2d$client$5d$__$28$ecmascript$29$__["default"], {
                                href: "/",
                                className: "flex items-center gap-2 font-bold text-xl text-foreground",
                                children: [
                                    /*#__PURE__*/
                                    (0, __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$portfolio$2d$V0$2f$porfolio$2d$V0$2f$node_modules$2f$next$2f$dist$2f$compiled$2f$react$2f$jsx$2d$dev$2d$runtime$2e$js__$5b$app$2d$client$5d$__$28$ecmascript$29$__["jsxDEV"])("span", {
                                        className: "h-8 w-8 rounded-lg bg-accent text-accent-foreground flex items-center justify-center font-bold",
                                        children: "AJ"
                                    }, void 0, false, {
                                        fileName: "[project]/Desktop/portfolio-V0/porfolio-V0/components/navigation.tsx",
                                        lineNumber: 35,
                                        columnNumber: 13
                                    }, this),
                                    "Alex"
                                ]
                            }, void 0, true, {
                                fileName: "[project]/Desktop/portfolio-V0/porfolio-V0/components/navigation.tsx",
                                lineNumber: 34,
                                columnNumber: 11
                            }, this),
                            /*#__PURE__*/
                            (0, __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$portfolio$2d$V0$2f$porfolio$2d$V0$2f$node_modules$2f$next$2f$dist$2f$compiled$2f$react$2f$jsx$2d$dev$2d$runtime$2e$js__$5b$app$2d$client$5d$__$28$ecmascript$29$__["jsxDEV"])("div", {
                                className: "hidden md:flex items-center gap-8",
                                children: links.map((link) => /*#__PURE__*/ (0, __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$portfolio$2d$V0$2f$porfolio$2d$V0$2f$node_modules$2f$next$2f$dist$2f$compiled$2f$react$2f$jsx$2d$dev$2d$runtime$2e$js__$5b$app$2d$client$5d$__$28$ecmascript$29$__["jsxDEV"])(__TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$portfolio$2d$V0$2f$porfolio$2d$V0$2f$node_modules$2f$next$2f$dist$2f$client$2f$app$2d$dir$2f$link$2e$js__$5b$app$2d$client$5d$__$28$ecmascript$29$__["default"], {
                                    href: link.href,
                                    className: "text-sm font-medium text-muted-foreground transition-colors hover:text-foreground",
                                    children: link.label
                                }, link.href, false, {
                                    fileName: "[project]/Desktop/portfolio-V0/porfolio-V0/components/navigation.tsx",
                                    lineNumber: 44,
                                    columnNumber: 15
                                }, this))
                            }, void 0, false, {
                                fileName: "[project]/Desktop/portfolio-V0/porfolio-V0/components/navigation.tsx",
                                lineNumber: 42,
                                columnNumber: 11
                            }, this),
                            /*#__PURE__*/
                            (0, __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$portfolio$2d$V0$2f$porfolio$2d$V0$2f$node_modules$2f$next$2f$dist$2f$compiled$2f$react$2f$jsx$2d$dev$2d$runtime$2e$js__$5b$app$2d$client$5d$__$28$ecmascript$29$__["jsxDEV"])("div", {
                                className: "flex items-center gap-4",
                                children: /*#__PURE__*/ (0, __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$portfolio$2d$V0$2f$porfolio$2d$V0$2f$node_modules$2f$next$2f$dist$2f$compiled$2f$react$2f$jsx$2d$dev$2d$runtime$2e$js__$5b$app$2d$client$5d$__$28$ecmascript$29$__["jsxDEV"])(__TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$portfolio$2d$V0$2f$porfolio$2d$V0$2f$components$2f$ui$2f$button$2e$tsx__$5b$app$2d$client$5d$__$28$ecmascript$29$__["Button"], {
                                    variant: "ghost",
                                    size: "icon",
                                    onClick: () => {
                                        console.log("[v0] Current theme before toggle:", theme);
                                        const newTheme = theme === "dark" ? "light" : "dark";
                                        console.log("[v0] Setting theme to:", newTheme);
                                        setTheme(newTheme);
                                    },
                                    className: "h-9 w-9 rounded-lg hover:bg-accent/10",
                                    "aria-label": "Toggle theme",
                                    children: [
                                        theme === "dark" ? /*#__PURE__*/ (0, __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$portfolio$2d$V0$2f$porfolio$2d$V0$2f$node_modules$2f$next$2f$dist$2f$compiled$2f$react$2f$jsx$2d$dev$2d$runtime$2e$js__$5b$app$2d$client$5d$__$28$ecmascript$29$__["jsxDEV"])(__TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$portfolio$2d$V0$2f$porfolio$2d$V0$2f$node_modules$2f$lucide$2d$react$2f$dist$2f$esm$2f$icons$2f$sun$2e$js__$5b$app$2d$client$5d$__$28$ecmascript$29$__$3c$export__default__as__Sun$3e$__["Sun"], {
                                            className: "h-5 w-5 text-accent transition-transform"
                                        }, void 0, false, {
                                            fileName: "[project]/Desktop/portfolio-V0/porfolio-V0/components/navigation.tsx",
                                            lineNumber: 69,
                                            columnNumber: 17
                                        }, this) : /*#__PURE__*/ (0, __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$portfolio$2d$V0$2f$porfolio$2d$V0$2f$node_modules$2f$next$2f$dist$2f$compiled$2f$react$2f$jsx$2d$dev$2d$runtime$2e$js__$5b$app$2d$client$5d$__$28$ecmascript$29$__["jsxDEV"])(__TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$portfolio$2d$V0$2f$porfolio$2d$V0$2f$node_modules$2f$lucide$2d$react$2f$dist$2f$esm$2f$icons$2f$moon$2e$js__$5b$app$2d$client$5d$__$28$ecmascript$29$__$3c$export__default__as__Moon$3e$__["Moon"], {
                                            className: "h-5 w-5 text-accent transition-transform"
                                        }, void 0, false, {
                                            fileName: "[project]/Desktop/portfolio-V0/porfolio-V0/components/navigation.tsx",
                                            lineNumber: 71,
                                            columnNumber: 17
                                        }, this),
                                        /*#__PURE__*/
                                        (0, __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$portfolio$2d$V0$2f$porfolio$2d$V0$2f$node_modules$2f$next$2f$dist$2f$compiled$2f$react$2f$jsx$2d$dev$2d$runtime$2e$js__$5b$app$2d$client$5d$__$28$ecmascript$29$__["jsxDEV"])("span", {
                                            className: "sr-only",
                                            children: "Toggle theme"
                                        }, void 0, false, {
                                            fileName: "[project]/Desktop/portfolio-V0/porfolio-V0/components/navigation.tsx",
                                            lineNumber: 73,
                                            columnNumber: 15
                                        }, this)
                                    ]
                                }, void 0, true, {
                                    fileName: "[project]/Desktop/portfolio-V0/porfolio-V0/components/navigation.tsx",
                                    lineNumber: 56,
                                    columnNumber: 13
                                }, this)
                            }, void 0, false, {
                                fileName: "[project]/Desktop/portfolio-V0/porfolio-V0/components/navigation.tsx",
                                lineNumber: 55,
                                columnNumber: 11
                            }, this)
                        ]
                    }, void 0, true, {
                        fileName: "[project]/Desktop/portfolio-V0/porfolio-V0/components/navigation.tsx",
                        lineNumber: 32,
                        columnNumber: 9
                    }, this)
                }, void 0, false, {
                    fileName: "[project]/Desktop/portfolio-V0/porfolio-V0/components/navigation.tsx",
                    lineNumber: 31,
                    columnNumber: 7
                }, this)
            }, void 0, false, {
                fileName: "[project]/Desktop/portfolio-V0/porfolio-V0/components/navigation.tsx",
                lineNumber: 30,
                columnNumber: 5
            }, this);
        }
        _s(Navigation, "uGU5l7ciDSfqFDe6wS7vfMb29jQ=", false, function() {
            return [
                __TURBOPACK__imported__module__$5b$project$5d2f$Desktop$2f$portfolio$2d$V0$2f$porfolio$2d$V0$2f$node_modules$2f$next$2d$themes$2f$dist$2f$index$2e$mjs__$5b$app$2d$client$5d$__$28$ecmascript$29$__["useTheme"]
            ];
        });
        _c = Navigation;
        var _c;
        __turbopack_context__.k.register(_c, "Navigation");
        if (typeof globalThis.$RefreshHelpers$ === 'object' && globalThis.$RefreshHelpers !== null) {
            __turbopack_context__.k.registerExports(__turbopack_context__.m, globalThis.$RefreshHelpers$);
        }
    }),
]);

//# sourceMappingURL=Desktop_portfolio-V0_porfolio-V0_4275e766._.js.map