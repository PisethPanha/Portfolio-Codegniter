</div>
</div>
<!--$-->
<!--/$-->
<!--$-->
<!--/$-->
<!-- <script id="_R_">
    self.__next_r = "HHFb8nj7g9mOuo46uTTUs"
</script> -->

<script>
    let colorInput = document.querySelector("#lg_color")
    let colorBox = document.querySelector("#lg_color_code")
    let shortName = document.querySelector("#shortName")
    let shortNamePreview = document.querySelector("#shortNamePreview")
    let shortNameBgPreview = document.querySelector("#shortNameBgPreview")
    let longName = document.querySelector("#longName")
    let longNamePreview = document.querySelector("#longNamePreview")
    let lg_color_code_preview = document.querySelector("#lg_color_code_preview")
    let ftBtns = document.querySelectorAll("#fw_btn")
    let shortNameBgPreviewBttom = document.querySelector("#shortNameBgPreviewBttom")
    let fontWeight = document.querySelector("#fontWeight")
    let fontSelect = document.querySelector("#fontStyle")
    let fullName = document.querySelector("#fullName")
    let fullNamePre = document.querySelector("#fullNamePre")
    let jobTitlePre = document.querySelector("#jobTitlePre")
    let jobTitle = document.querySelector("#jobTitle")
    let shortBio = document.querySelector("#shortBio")
    let shortBioPre = document.querySelector("#shortBioPre")
    let imageInput = document.querySelector("#imageInput")
    let imagePreview = document.querySelector("#imagePreview")
    let selectedFont = document.querySelector("#selectedFont")
    let fontWeightInput = document.querySelector("#fontWeightInput")



    try {

        colorInput.addEventListener("input", () => {
            colorBox.value = colorInput.value
            lg_color_code_preview.innerHTML = colorInput.value
            shortNameBgPreview.style.backgroundColor = colorInput.value
            shortNameBgPreviewBttom.style.backgroundColor = colorInput.value
            // console.log(colorInput.value)
        })

        fontSelect.addEventListener("change", () => {
            let font = fontSelect.value

            // Map select values to actual CSS font-family strings
            const fontMap = {
                inter: "'Inter', sans-serif",
                poppins: "'Poppins', sans-serif",
                playfair: "'Playfair Display', serif",
                roboto: "'Roboto', sans-serif",
                montserrat: "'Montserrat', sans-serif",
                lato: "'Lato', sans-serif",
                open_sans: "'Open Sans', sans-serif",
                oswald: "'Oswald', sans-serif",
                raleway: "'Raleway', sans-serif"
            }

            longNamePreview.style.fontFamily = fontMap[font] || "sans-serif"

            selectedFont.innerHTML = fontMap[font]
        })

        ftBtns.forEach((ele) => {
            try {
                ele.addEventListener("click", () => {
                    // Reset all buttons (optional)
                    ftBtns.forEach(btn => {
                        btn.style.backgroundColor = "";
                        btn.style.color = "#0b0b0b"
                    })

                    // Set clicked button color
                    ele.style.backgroundColor = "#1c69e3"
                    ele.style.color = "#f8f8f8"
                    fontWeight.innerHTML = ele.value
                    fontWeightInput.value = ele.value
                    longNamePreview.style.fontWeight = ele.value == "Regular" ? "400" : ele.value == "Medium" ? "600" : ele.value == "Semibold" ? "700" : ele.value == "Bold" ? "900" : "400"
                })
            } catch (error) {
                console.log(error);

            }
        })

        longName.addEventListener("input", () => {
            longNamePreview.innerHTML = longName.value


        })

        shortName.addEventListener("input", () => {
            shortNameBgPreview.innerHTML = shortName.value
        })

        shortBio.addEventListener("input", () => {
            shortBioPre.innerHTML = shortBio.value
        })
    } catch (error) {
        console.log(error);

    }
</script>
<script>
    jobTitle.addEventListener("input", () => {
        jobTitlePre.innerHTML = jobTitle.value
    })

    fullName.addEventListener("input", () => {
        fullNamePre.innerHTML = fullName.value
    })
    imageInput.addEventListener("change", () => {
        const file = imageInput.files[0]

        if (file) {
            imagePreview.src = URL.createObjectURL(file)
        }
    })
</script>
<script>
    let percent = document.querySelector("#percent")
    let range = document.querySelector("#range")
    percent.innerHTML = range.value + "%"

    range.addEventListener("input", () => {
        percent.innerHTML = range.value + "%"
    })
</script>

<script>
    const skillTags = document.querySelectorAll(".skillTag");
    const techStackInput = document.getElementById("techStackInput");

    // 1️⃣ Initialize stack from PHP value
    let stacks = techStackInput.value ?
        techStackInput.value.split(",").map(s => s.trim()) :
        [];

    // 2️⃣ Sync UI on load
    skillTags.forEach(tag => {
        if (stacks.includes(tag.value)) {
            tag.classList.add("bg-blue-400", "text-white");
        }
    });

    // 3️⃣ Toggle logic
    skillTags.forEach(tag => {
        tag.addEventListener("click", () => {

            if (stacks.includes(tag.value)) {
                // remove
                stacks = stacks.filter(item => item !== tag.value);
                tag.classList.remove("bg-blue-400", "text-white");
            } else {
                // add
                stacks.push(tag.value);
                tag.classList.add("bg-blue-400", "text-white");
            }

            techStackInput.value = stacks.join(", ");
        });
    });
</script>


<script>
    let emailPre = document.querySelector("#emailPre")
    let phonePre = document.querySelector("#phonePre")
    let addressPre = document.querySelector("#addressPre")
    let linkedInPre = document.querySelector("#linkedInPre")
    let githubPre = document.querySelector("#githubPre")
    let twitterPre = document.querySelector("#twitterPre")

    let emailInput = document.querySelector("#emailInput")
    let phoneInput = document.querySelector("#phoneInput")
    let addressInput = document.querySelector("#addressInput")
    let linkedInInput = document.querySelector("#linkedInInput")
    let githubInput = document.querySelector("#githubInput")
    let twitterInput = document.querySelector("#twitterInput")

     

    emailInput.addEventListener("input", () => {
        emailPre.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail w-4 h-4 text-primary">
                                        <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                                        <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                                    </svg>` + emailInput.value
    })
    phoneInput.addEventListener("input", () => {
        phonePre.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-phone w-4 h-4 text-primary">
                                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                    </svg>` + phoneInput.value
    })
    addressInput.addEventListener("input", () => {
        addressPre.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin w-4 h-4 text-primary">
                                        <path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path>
                                        <circle cx="12" cy="10" r="3"></circle>
                                    </svg>` + addressInput.value
    })
    linkedInInput.addEventListener("input", () => {
        linkedInPre.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-linkedin w-4 h-4">
                                        <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
                                        <rect width="4" height="12" x="2" y="9"></rect>
                                        <circle cx="4" cy="4" r="2"></circle>
                                    </svg>` + linkedInInput.value
    })
    githubInput.addEventListener("input", () => {
        githubPre.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-github w-4 h-4">
                                        <path d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4"></path>
                                        <path d="M9 18c-4.51 2-5-2-7-2"></path>
                                    </svg>` + githubInput.value
    })
    twitterInput.addEventListener("input", () => {
        twitterPre.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-twitter w-4 h-4">
                                        <path d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z"></path>
                                    </svg>` + twitterInput.value
    })
</script>

<script>
    let client = document.querySelectorAll("#client")
    let noClientSelected = document.querySelector("#noClientSelected")
    let clientSelected = document.querySelector("#clientSelected")
    let closeClient = document.querySelector("#closeClient")
    let clientName = document.querySelector("#clientName")

    if(clientName.innerHTML != ""){
        clientSelected.style.display = "flex"
        noClientSelected.style.display = "none"
    }else{
    clientSelected.style.display = "none"
    }

    

    closeClient.addEventListener("click", () => {
        clientSelected.style.display = "none"
        noClientSelected.style.display = "flex"
    })

    // client.forEach((ele) => {
    //     ele.addEventListener("click", () => {
    //     noClientSelected.style.display = "none"
    //     clientSelected.style.display = "flex"
    // })
    // })

</script>

<!-- <script src="./localhost3001/_next/static/chunks/%5Bturbopack%5D_browser_dev_hmr-client_hmr-client_ts_2894d2b7._.js" async=""></script>
<script>
    (self.__next_f = self.__next_f || []).push([0])
</script>
<script>
    self.__next_f.push([1, "7:I[\"[project]/Desktop/v0-admin-dashboard-ui/node_modules/next/dist/next-devtools/userspace/app/segment-explorer-node.js [app-client] (ecmascript)\",[\"/_next/static/chunks/e324f_next_dist_151d9fde._.js\",\"/_next/static/chunks/e324f_next_dist_client_components_builtin_global-error_97f39df8.js\"],\"SegmentViewNode\"]\n9:\"$Sreact.fragment\"\n1a:I[\"[project]/Desktop/v0-admin-dashboard-ui/node_modules/next/dist/client/components/layout-router.js [app-client] (ecmascript)\",[\"/_next/static/chunks/e324f_next_dist_151d9fde._.js\",\"/_next/static/chunks/e324f_next_dist_client_components_builtin_global-error_97f39df8.js\"],\"default\"]\n1c:I[\"[project]/Desktop/v0-admin-dashboard-ui/node_modules/next/dist/client/components/render-from-template-context.js [app-client] (ecmascript)\",[\"/_next/static/chunks/e324f_next_dist_151d9fde._.js\",\"/_next/static/chunks/e324f_next_dist_client_components_builtin_global-error_97f39df8.js\"],\"default\"]\n2b:I[\"[project]/Desktop/v0-admin-dashboard-ui/node_modules/@vercel/analytics/dist/next/index.mjs [app-client] (ecmascript)\",[\"/_next/static/chunks/e324f_63f0f6bc._.js\",\"/_next/static/chunks/Desktop_v0-admin-dashboard-ui_app_layout_tsx_97f39df8._.js\"],\"Analytics\"]\n2f:I[\"[project]/Desktop/v0-admin-dashboard-ui/node_modules/next/dist/client/components/client-page.js [app-client] (ecmascript)\",[\"/_next/static/chunks/e324f_next_dist_151d9fde._.js\",\"/_next/static/chunks/e324f_next_dist_client_components_builtin_global-error_97f39df8.js\"],\"ClientPageRoot\"]\n30:I[\"[project]/Desktop/v0-admin-dashboard-ui/app/page.tsx [app-client] (ecmascript)\",[\"/_next/static/chunks/e324f_63f0f6bc._.js\",\"/_next/static/chunks/Desktop_v0-admin-dashboard-ui_app_layout_tsx_97f39df8._.js\",\"/_next/static/chunks/Desktop_v0-admin-dashboard-ui_f16bc5ac._.js\",\"/_next/static/chunks/e324f_a2bad33e._.js\",\"/_next/static/chunks/Desktop_v0-admin-dashboard-ui_app_page_tsx_e46d9b3e._.js\"],\"default\"]\n37:I[\"[project]/Desktop/v0-admin-dashboard-ui/node_modules/next/dist/lib/framework/boundary-components.js [app-client] (ecmascript)\",[\"/_next/static/chunks/e324f_next_dist_151d9fde._.js\",\"/_next/static/chunks/e324f_next_dist_client_components_builtin_global-error_97f39df8.js\"],\"OutletBoundary\"]\n39:\"$Sreact.suspense\"\n42:I[\"[project]/Desktop/v0-admin-dashboard-ui/node_modules/next/dist/lib/framework/boundary-components.js [app-client] (ecmascript)\",[\"/_next/static/chunks/e324f_next_dist_151d9fde._.js\",\"/_next/static/chunks/e324f_next_dist_client_components_builtin_global-error_97f39df8.js\"],\"ViewportBoundary\"]\n48:I[\"[project]/Desktop/v0-admin-dashboard-ui/node_modules/next/dist/lib/framework/boundary-components.js [app-client] (ecmascript)\",[\"/_next/static/chunks/e324f_next_dist_151d9fde._.js\",\"/_next/static/chunks/e324f_next_dist_client_components_builtin_global-error_97f39df8.js\"],\"MetadataBoundary\"]\n4d:I[\"[project]/Desktop/v0-admin-dashboard-ui/node_modules/next/dist/client/components/builtin/global-error.js [app-client] (ecmascript)\",[\"/_next/static/chunks/e324f_next_dist_151d9fde._.js\",\"/_next/static/chunks/e324f_next_dist_client_components_builtin_global-error_97f39df8.js\"],\"default\"]\n5a:I[\"[project]/Desktop/v0-admin-dashboard-ui/node_modules/next/dist/lib/metadata/generate/icon-mark.js [app-client] (ecmascript)\",[\"/_next/static/chunks/e324f_next_dist_151d9fde._.js\",\"/_next/static/chunks/e324f_next_dist_client_components_builtin_global-error_97f39df8.js\"],\"IconMark\"]\n:HL[\"/_next/static/chunks/%5Broot-of-the-server%5D__c6ce154e._.css\",\"style\"]\n:HL[\"/_next/static/media/797e433ab948586e-s.p.dbea232f.woff2\",\"font\",{\"crossOrigin\":\"\",\"type\":\"font/woff2\"}]\n:HL[\"/_next/static/media/caa3a2e1cccd8315-s.p.853070df.woff2\",\"font\",{\"crossOrigin\":\"\",\"type\":\"font/woff2\"}]\n:N1769520263819.9705\n3:\"$EObject.defineProperty(()=\u003e{ctx.componentMod.preloadStyle(fullHref,ctx.renderOpts.crossOrigin,ctx.nonce)},\\\"name\\\",{value:\\\"\\\"})\"\n4:\"$EObject.defineProperty(()=\u003e{ctx.componentMod.preloadFont(href,type,ctx.renderOpts.crossOrigin,ctx.nonce)},\\\"name\\\",{value:\\\"\\\"})\"\n5:\"$EObject.defineProperty(()=\u003e{ctx.componentMod.preloadFont(href,type,ctx.renderOpts.crossOrigin,ctx.nonce)},\\\"name\\\",{valu"])
</script>
<script>
    self.__next_f.push([1, "e:\\\"\\\"})\"\n2:{\"name\":\"Preloads\",\"key\":null,\"env\":\"Server\",\"stack\":[],\"props\":{\"preloadCallbacks\":[\"$3\",\"$4\",\"$5\"]}}\n6:[]\n8:[]\na:[[\"Array.map\",\"\",0,0,0,0,false]]\nb:[[\"Array.map\",\"\",0,0,0,0,false]]\nc:[[\"Array.map\",\"\",0,0,0,0,false]]\nf:I[\"[project]/Desktop/v0-admin-dashboard-ui/node_modules/next/dist/client/components/layout-router.js [app-client] (ecmascript)\",[\"/_next/static/chunks/e324f_next_dist_151d9fde._.js\",\"/_next/static/chunks/e324f_next_dist_client_components_builtin_global-error_97f39df8.js\"],\"default\"]\n12:I[\"[project]/Desktop/v0-admin-dashboard-ui/node_modules/next/dist/client/components/render-from-template-context.js [app-client] (ecmascript)\",[\"/_next/static/chunks/e324f_next_dist_151d9fde._.js\",\"/_next/static/chunks/e324f_next_dist_client_components_builtin_global-error_97f39df8.js\"],\"default\"]\n13:{}\n14:[[\"Promise.all\",\"\",0,0,0,0,true]]\n11:{\"children\":[\"$\",\"$L12\",null,\"$13\",null,\"$14\",1]}\n15:[[\"Promise.all\",\"\",0,0,0,0,true]]\n10:{\"parallelRouterKey\":\"children\",\"error\":\"$undefined\",\"errorStyles\":\"$undefined\",\"errorScripts\":\"$undefined\",\"template\":[\"$\",\"$9\",null,\"$11\",null,\"$15\",0],\"templateStyles\":\"$undefined\",\"templateScripts\":\"$undefined\",\"notFound\":\"$Y\",\"forbidden\":\"$undefined\",\"unauthorized\":\"$undefined\",\"segmentViewBoundaries\":\"$Y\"}\n16:[[\"Promise.all\",\"\",0,0,0,0,true]]\ne:{\"name\":\"RootLayout\",\"key\":null,\"env\":\"Server\",\"stack\":[],\"props\":{\"children\":[\"$\",\"$Lf\",null,\"$10\",null,\"$16\",1],\"params\":\"$Y\"}}\n17:[[\"RootLayout\",\"C:\\\\Users\\\\ICT\\\\Desktop\\\\v0-admin-dashboard-ui\\\\.next\\\\dev\\\\server\\\\chunks\\\\ssr\\\\[root-of-the-server]__78ca4ab8._.js\",102,308,101,1,false]]\n18:[[\"RootLayout\",\"C:\\\\Users\\\\ICT\\\\Desktop\\\\v0-admin-dashboard-ui\\\\.next\\\\dev\\\\server\\\\chunks\\\\ssr\\\\[root-of-the-server]__78ca4ab8._.js\",105,315,101,1,false]]\n19:[[\"Promise.all\",\"\",0,0,0,0,true]]\n1b:[[\"Promise.all\",\"\",0,0,0,0,true]]\n1d:[]\n1f:{\"name\":\"NotFound\",\"key\":null,\"env\":\"Server\",\"stack\":[],\"props\":{}}\n20:{\"name\":\"HTTPAccessErrorFallback\",\"key\":null,\"env\":\"Server\",\"owner\":\"$1f\",\"stack\":[],\"props\":{\"status\":404,\"message\":\"This page could not be found.\"}}\n21:[]\n22:[]\n23:[]\n24:[]\n25:[]\n26:[]\n27:[]\n28:[[\"Promise.all\",\"\",0,0,0,0,true]]\n29:[[\"Promise.all\",\"\",0,0,0,0,true]]\n2a:[[\"RootLayout\",\"C:\\\\Users\\\\ICT\\\\Desktop\\\\v0-admin-dashboard-ui\\\\.next\\\\dev\\\\server\\\\chunks\\\\ssr\\\\[root-of-the-server]__78ca4ab8._.js\",109,313,101,1,false]]\n2c:[[\"Promise.all\",\"\",0,0,0,0,true]]\n2d:[[\"Promise.all\",\"\",0,0,0,0,true]]\n2e:[[\"Promise.all\",\"\",0,0,0,0,true]]\n31:[[\"Array.map\",\"\",0,0,0,0,false],[\"Array.map\",\"\",0,0,0,0,false]]\n32:[[\"Array.map\",\"\",0,0,0,0,false],[\"Array.map\",\"\",0,0,0,0,false]]\n33:[[\"Array.map\",\"\",0,0,0,0,false],[\"Array.map\",\"\",0,0,0,0,false]]\n35:{\"name\":\"Next.MetadataOutlet\",\"key\":null,\"env\":\"Server\",\"stack\":[[\"Promise.all\",\"\",0,0,0,0,true]],\"props\":{}}\n36:[]\n38:[]\n3b:[]\n"])
</script>
<script>
    self.__next_f.push([1, "3e:\"$EObject.defineProperty(function(type,config,children){for(var propName,i=2;i\u003carguments.length;i++)validateChildKeys(arguments[i]);i={};var key=null;if(null!=config)for(propName in didWarnAboutOldJSXRuntime||!(\\\"__self\\\"in config)||\\\"key\\\"in config||(didWarnAboutOldJSXRuntime=!0,console.warn(\\\"Your app (or one of its dependencies) is using an outdated JSX transform. Update to the modern JSX transform for faster performance: https://react.dev/link/new-jsx-transform\\\")),hasValidKey(config)\u0026\u0026(checkKeyStringCoercion(config.key),key=\\\"\\\"+config.key),config)hasOwnProperty.call(config,propName)\u0026\u0026\\\"key\\\"!==propName\u0026\u0026\\\"__self\\\"!==propName\u0026\u0026\\\"__source\\\"!==propName\u0026\u0026(i[propName]=config[propName]);var childrenLength=arguments.length-2;if(1===childrenLength)i.children=children;else if(1\u003cchildrenLength){for(var childArray=Array(childrenLength),_i=0;_i\u003cchildrenLength;_i++)childArray[_i]=arguments[_i+2];Object.freeze\u0026\u0026Object.freeze(childArray),i.children=childArray}if(type\u0026\u0026type.defaultProps)for(propName in childrenLength=type.defaultProps)void 0===i[propName]\u0026\u0026(i[propName]=childrenLength[propName]);return key\u0026\u0026function(props,displayName){function warnAboutAccessingKey(){specialPropKeyWarningShown||(specialPropKeyWarningShown=!0,console.error(\\\"%s: `key` is not a prop. Trying to access it will result in `undefined` being returned. If you need to access the same value within the child component, you should pass it as a different prop. (https://react.dev/link/special-props)\\\",displayName))}warnAboutAccessingKey.isReactWarning=!0,Object.defineProperty(props,\\\"key\\\",{get:warnAboutAccessingKey,configurable:!0})}(i,\\\"function\\\"==typeof type?type.displayName||type.name||\\\"Unknown\\\":type),(propName=1e4\u003eReactSharedInternals.recentlyCreatedOwnerStacks++)?(childArray=Error.stackTraceLimit,Error.stackTraceLimit=10,childrenLength=Error(\\\"react-stack-top-frame\\\"),Error.stackTraceLimit=childArray):childrenLength=unknownOwnerDebugStack,ReactElement(type,key,i,getOwner(),childrenLength,propName?createTask(getTaskName(type)):unknownOwnerDebugTask)},\\\"name\\\",{value:\\\"\\\"})\"\n"])
</script>
<script>
    self.__next_f.push([1, "3d:{\"name\":\"NonIndex\",\"key\":null,\"env\":\"Server\",\"stack\":[],\"props\":{\"createElement\":\"$3e\",\"pagePath\":\"/\",\"statusCode\":200,\"isPossibleServerAction\":false}}\n40:{\"name\":\"Next.Viewport\",\"key\":null,\"env\":\"Server\",\"stack\":[],\"props\":{}}\n41:[]\n45:{\"name\":\"Next.Metadata\",\"key\":null,\"env\":\"Server\",\"stack\":[],\"props\":{}}\n46:[]\n47:[]\n49:[]\n4b:[]\n4e:[]\n4f:[]\n50:[]\n51:[]\n:W[\"warn\",\"$51\",\"$35\",\"Server\",\" \\u001b[33m\\u001b[1m⚠\\u001b[22m\\u001b[39m Unsupported metadata viewport is configured in metadata export in /. Please move it to viewport export instead.\\nRead more: https://nextjs.org/docs/app/api-reference/functions/generate-viewport\"]\n52:[]\n53:[]\n54:[]\n55:[[\"Array.map\",\"\",0,0,0,0,false]]\n56:[[\"Array.map\",\"\",0,0,0,0,false]]\n57:[[\"Array.map\",\"\",0,0,0,0,false]]\n58:[[\"Array.map\",\"\",0,0,0,0,false]]\n59:[]\n1:D{\"time\":0.2793850000016391}\n1:D\"$2\"\n1:D{\"time\":0.3651280000049155}\n1:null\nd:D{\"time\":0.9973319999990053}\nd:D\"$e\"\nd:D{\"time\":1.2032810000018799}\n1e:D{\"time\":1.4322040000042762}\n1e:D\"$1f\"\n1e:D{\"time\":1.5097420000020065}\n1e:D\"$20\"\n1e:D{\"time\":1.6266650000034133}\n1e:[[\"$\",\"title\",null,{\"children\":\"404: This page could not be found.\"},\"$20\",\"$21\",1],[\"$\",\"div\",null,{\"style\":{\"fontFamily\":\"system-ui,\\\"Segoe UI\\\",Roboto,Helvetica,Arial,sans-serif,\\\"Apple Color Emoji\\\",\\\"Segoe UI Emoji\\\"\",\"height\":\"100vh\",\"textAlign\":\"center\",\"display\":\"flex\",\"flexDirection\":\"column\",\"alignItems\":\"center\",\"justifyContent\":\"center\"},\"children\":[\"$\",\"div\",null,{\"children\":[[\"$\",\"style\",null,{\"dangerouslySetInnerHTML\":{\"__html\":\"body{color:#000;background:#fff;margin:0}.next-error-h1{border-right:1px solid rgba(0,0,0,.3)}@media (prefers-color-scheme:dark){body{color:#fff;background:#000}.next-error-h1{border-right:1px solid rgba(255,255,255,.3)}}\"}},\"$20\",\"$24\",1],[\"$\",\"h1\",null,{\"className\":\"next-error-h1\",\"style\":{\"display\":\"inline-block\",\"margin\":\"0 20px 0 0\",\"padding\":\"0 23px 0 0\",\"fontSize\":24,\"fontWeight\":500,\"verticalAlign\":\"top\",\"lineHeight\":\"49px\"},\"children\":404},\"$20\",\"$25\",1],[\"$\",\"div\",null,{\"style\":{\"display\":\"inline-block\"},\"children\":[\"$\",\"h2\",null,{\"style\":{\"fontSize\":14,\"fontWeight\":400,\"lineHeight\":\"49px\",\"margin\":0},\"children\":\"This page could not be found.\"},\"$20\",\"$27\",1]},\"$20\",\"$26\",1]]},\"$20\",\"$23\",1]},\"$20\",\"$22\",1]]\nd:[\"$\",\"html\",null,{\"lang\":\"en\",\"suppressHydrationWarning\":true,\"children\":[\"$\",\"body\",null,{\"className\":\"font-sans antialiased bg-background text-foreground\",\"children\":[[\"$\",\"$L1a\",null,{\"parallelRouterKey\":\"children\",\"error\":\"$undefined\",\"errorStyles\":\"$undefined\",\"errorScripts\":\"$undefined\",\"template\":[\"$\",\"$L1c\",null,{},null,\"$1b\",1],\"templateStyles\":\"$undefined\",\"templateScripts\":\"$undefined\",\"notFound\":[\"$\",\"$L7\",\"c-not-found\",{\"type\":\"not-found\",\"pagePath\":\"__next_builtin__not-found.js\",\"children\":[\"$1e\",[]]},null,\"$1d\",0],\"forbidden\":\"$undefined\",\"unauthorized\":\"$undefined\",\"segmentViewBoundaries\":[[\"$\",\"$L7\",null,{\"type\":\"boundary:not-found\",\"pagePath\":\"__next_builtin__not-found.js@boundary\"},null,\"$28\",1],\"$undefined\",\"$undefined\",[\"$\",\"$L7\",null,{\"type\":\"boundary:global-error\",\"pagePath\":\"__next_builtin__global-error.js\"},null,\"$29\",1]]},null,\"$19\",1],[\"$\",\"$L2b\",null,{},\"$e\",\"$2a\",1]]},\"$e\",\"$18\",1]},\"$e\",\"$17\",1]\n34:D{\"time\":3.3304580000040005}\n34:D\"$35\"\n34:D{\"time\":4.760200000004261}\n34:[\"$\",\"$L37\",null,{\"children\":[\"$\",\"$39\",null,{\"name\":\"Next.MetadataOutlet\",\"children\":\"$@3a\"},\"$35\",\"$38\",1]},\"$35\",\"$36\",1]\n3c:D{\"time\":5.116712000002735}\n3c:D\"$3d\"\n3c:D{\"time\":5.12902000000031}\n3c:null\n3f:D{\"time\":5.193839999999909}\n3f:D\"$40\"\n3f:D{\"time\":5.288199000002351}\n3f:[\"$\",\"$L42\",null,{\"children\":\"$@43\"},\"$40\",\"$41\",1]\n44:D{\"time\":5.459686000001966}\n44:D\"$45\"\n44:D{\"time\":5.567173000003095}\n44:[\"$\",\"div\",null,{\"hidden\":true,\"children\":[\"$\",\"$L48\",null,{\"children\":[\"$\",\"$39\",null,{\"name\":\"Next.Metadata\",\"children\":\"$@4a\"},\"$45\",\"$49\",1]},\"$45\",\"$47\",1]},\"$45\",\"$46\",1]\n4c:[]\n"])
</script>
<script>
    self.__next_f.push([1, "0:{\"P\":\"$1\",\"b\":\"development\",\"c\":[\"\",\"\"],\"q\":\"\",\"i\":false,\"f\":[[[\"\",{\"children\":[\"__PAGE__\",{}]},\"$undefined\",\"$undefined\",true],[[\"$\",\"$L7\",\"layout\",{\"type\":\"layout\",\"pagePath\":\"/Desktop/v0-admin-dashboard-ui/app/layout.tsx\",\"children\":[\"$\",\"$9\",\"c\",{\"children\":[[[\"$\",\"link\",\"0\",{\"rel\":\"stylesheet\",\"href\":\"/_next/static/chunks/%5Broot-of-the-server%5D__c6ce154e._.css\",\"precedence\":\"next_static/chunks/[root-of-the-server]__c6ce154e._.css\",\"crossOrigin\":\"$undefined\",\"nonce\":\"$undefined\"},null,\"$a\",0],[\"$\",\"script\",\"script-0\",{\"src\":\"/_next/static/chunks/e324f_63f0f6bc._.js\",\"async\":true,\"nonce\":\"$undefined\"},null,\"$b\",0],[\"$\",\"script\",\"script-1\",{\"src\":\"/_next/static/chunks/Desktop_v0-admin-dashboard-ui_app_layout_tsx_97f39df8._.js\",\"async\":true,\"nonce\":\"$undefined\"},null,\"$c\",0]],\"$d\"]},null,\"$8\",1]},null,\"$6\",0],{\"children\":[[\"$\",\"$9\",\"c\",{\"children\":[[\"$\",\"$L7\",\"c-page\",{\"type\":\"page\",\"pagePath\":\"/Desktop/v0-admin-dashboard-ui/app/page.tsx\",\"children\":[\"$\",\"$L2f\",null,{\"Component\":\"$30\",\"serverProvidedParams\":{\"searchParams\":{},\"params\":{},\"promises\":null}},null,\"$2e\",1]},null,\"$2d\",1],[[\"$\",\"script\",\"script-0\",{\"src\":\"/_next/static/chunks/Desktop_v0-admin-dashboard-ui_f16bc5ac._.js\",\"async\":true,\"nonce\":\"$undefined\"},null,\"$31\",0],[\"$\",\"script\",\"script-1\",{\"src\":\"/_next/static/chunks/e324f_a2bad33e._.js\",\"async\":true,\"nonce\":\"$undefined\"},null,\"$32\",0],[\"$\",\"script\",\"script-2\",{\"src\":\"/_next/static/chunks/Desktop_v0-admin-dashboard-ui_app_page_tsx_e46d9b3e._.js\",\"async\":true,\"nonce\":\"$undefined\"},null,\"$33\",0]],\"$34\"]},null,\"$2c\",0],{},null,false,false]},null,false,false],[\"$\",\"$9\",\"h\",{\"children\":[\"$3c\",\"$3f\",\"$44\",[\"$\",\"meta\",null,{\"name\":\"next-size-adjust\",\"content\":\"\"},null,\"$4b\",1]]},null,\"$3b\",0],false]],\"m\":\"$W4c\",\"G\":[\"$4d\",[\"$\",\"$L7\",\"ge-svn\",{\"type\":\"global-error\",\"pagePath\":\"__next_builtin__global-error.js\",\"children\":[]},null,\"$4e\",0]],\"S\":false}\n"])
</script>
<script>
    self.__next_f.push([1, "43:D{\"time\":8.029939000000013}\n43:[[\"$\",\"meta\",\"0\",{\"charSet\":\"utf-8\"},\"$35\",\"$4f\",0],[\"$\",\"meta\",\"1\",{\"name\":\"viewport\",\"content\":\"width=device-width, initial-scale=1\"},\"$35\",\"$50\",0]]\n4a:D{\"time\":8.84881000000314}\n4a:[[\"$\",\"title\",\"0\",{\"children\":\"Portfolio Admin\"},\"$35\",\"$52\",0],[\"$\",\"meta\",\"1\",{\"name\":\"description\",\"content\":\"Modern admin dashboard for managing your developer portfolio\"},\"$35\",\"$53\",0],[\"$\",\"meta\",\"2\",{\"name\":\"generator\",\"content\":\"v0.app\"},\"$35\",\"$54\",0],[\"$\",\"link\",\"3\",{\"rel\":\"icon\",\"href\":\"/icon-light-32x32.png\",\"media\":\"(prefers-color-scheme: light)\"},\"$35\",\"$55\",0],[\"$\",\"link\",\"4\",{\"rel\":\"icon\",\"href\":\"/icon-dark-32x32.png\",\"media\":\"(prefers-color-scheme: dark)\"},\"$35\",\"$56\",0],[\"$\",\"link\",\"5\",{\"rel\":\"icon\",\"href\":\"/icon.svg\",\"type\":\"image/svg+xml\"},\"$35\",\"$57\",0],[\"$\",\"link\",\"6\",{\"rel\":\"apple-touch-icon\",\"href\":\"/apple-icon.png\"},\"$35\",\"$58\",0],[\"$\",\"$L5a\",\"7\",{},\"$35\",\"$59\",0]]\n3a:D{\"time\":9.356706999999005}\n3a:null\n"])
</script> -->
</body>

</html>