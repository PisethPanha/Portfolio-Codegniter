 <main class="flex-1 overflow-auto">
     <div class="p-8 space-y-8">
         
         <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
             <div class="lg:col-span-2 gap-4">
                 <div class="grid gap-4">
                     <?php
                        foreach ($client as $c) {
                        ?>
                         <a
                         href="<?= "http://localhost:8080/get_client/" . $c['id'] ?>"
                         class="space-y-3 max-h-[calc(100vh-200px)] overflow-y-auto">
                             <div id="client" data-slot="card" class="text-card-foreground flex flex-col gap-6 rounded-xl border shadow-sm p-4 bg-card border-border hover:border-primary/50 transition-colors duration-200 cursor-pointer">
                                 <div class="flex items-start justify-between">
                                     <div class="flex-1 min-w-0">
                                         <h3 class="font-semibold text-foreground text-base"><?= $c['name'] ?></h3>
                                         <p class="text-sm text-muted-foreground truncate"><?= $c['email'] ?></p>
                                         <p class="text-sm font-medium text-primary mt-2 line-clamp-1"><?= $c['subject'] ?></p>
                                         <p class="text-xs text-muted-foreground mt-2"><?= $c['contact_date'] ?></p>
                                     </div>
                                     <div class="flex items-center gap-2 ml-4">
                                         <a
                                             href="<?= "http://localhost:8080/get_client/" . $c['id'] ?>"
                                             class="p-2 text-muted-foreground hover:text-foreground hover:bg-muted rounded-lg transition-colors duration-200" title="View">
                                             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye w-4 h-4">
                                                 <path d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0"></path>
                                                 <circle cx="12" cy="12" r="3"></circle>
                                             </svg>
                                         </a>
                                         <a
                                         href="<?= base_url("delete_client/".$c['id']) ?>"
                                         class="p-2 text-muted-foreground hover:text-destructive hover:bg-destructive/10 rounded-lg transition-colors duration-200" title="Delete">
                                             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trash2 w-4 h-4">
                                                 <path d="M3 6h18"></path>
                                                 <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                                                 <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                                                 <line x1="10" x2="10" y1="11" y2="17"></line>
                                                 <line x1="14" x2="14" y1="11" y2="17"></line>
                                             </svg>
</a>
                                     </div>
                                 </div>
                             </div>
                         </a>
                     <?php
                        }
                        ?>


                 </div>
             </div>
             <div class="lg:col-span-1">
                 <div id="noClientSelected" data-slot="card" class="text-card-foreground flex-col gap-6 rounded-xl border shadow-sm p-6 bg-card border-border h-full flex items-center justify-center">
                     <div class="text-center">
                         <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye w-12 h-12 text-muted-foreground mx-auto mb-4 opacity-50">
                             <path d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0"></path>
                             <circle cx="12" cy="12" r="3"></circle>
                         </svg>
                         <p class="text-muted-foreground">Select a contact to view details</p>
                     </div>
                 </div>
                 <div id="clientSelected" data-slot="card" class="text-card-foreground flex flex-col gap-6 rounded-xl border shadow-sm p-6 bg-card border-border sticky top-0">
                     <div class="flex items-center justify-between mb-6">
                         <h2 class="text-lg font-bold text-foreground">Contact Details</h2>
                         <button id="closeClient" class="text-muted-foreground hover:text-foreground transition-colors">×</button>
                     </div>
                     <div class="space-y-4">
                         <?php
                            $client2 = session()->getFlashdata('client2');
                            ?>
                         <div>
                             <label class="block text-xs font-semibold text-muted-foreground uppercase mb-2">name</label>
                             <p id="clientName" class="text-foreground font-medium"><?= (isset($client2) ? $client2['name'] : "") ?></p>
                         </div>
                         <div>
                             <label class="block text-xs font-semibold text-muted-foreground uppercase mb-2">Email</label>
                             <a href="mailto:sarah.johnson@company.com" class="text-primary hover:underline break-all"><?= (isset($client2) ? $client2['email'] : "") ?></a>
                         </div>
                         <div>
                             <label class="block text-xs font-semibold text-muted-foreground uppercase mb-2">Subject</label>
                             <p class="text-foreground"><?= (isset($client2) ? $client2['subject'] : "") ?></p>
                         </div>
                         <div>
                             <label class="block text-xs font-semibold text-muted-foreground uppercase mb-2">Date</label>
                             <p class="text-foreground text-sm"><?= (isset($client2) ? $client2['contact_date'] : "") ?></p>
                         </div>
                         <div>
                             <label class="block text-xs font-semibold text-muted-foreground uppercase mb-2">Message</label>
                             <div class="bg-muted p-4 rounded-lg border border-border max-h-48 overflow-y-auto">
                                 <p class="text-foreground text-sm leading-relaxed whitespace-pre-wrap"><?= (isset($client2) ? $client2['description'] : "") ?></p>
                             </div>
                         </div>
                         <div class="flex gap-3 pt-4 border-t border-border">
                             <a href="mailto:sarah.johnson@company.com?subject=Re: Web Design Project" class="flex-1 px-4 py-2 bg-primary text-primary-foreground rounded-lg hover:bg-primary/90 transition-colors duration-200 text-center text-sm font-medium">Reply</a>
                             <button class="px-4 py-2 bg-destructive/10 text-destructive rounded-lg hover:bg-destructive/20 transition-colors duration-200 text-sm font-medium">Delete</button>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!--$-->
     <!--/$-->
 </main>