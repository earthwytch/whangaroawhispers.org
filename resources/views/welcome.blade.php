<x-layouts.app>



    <!-- 3. Main Body Content (On Slate Canvas, split into News & Sidebar) -->
    <x-row outerBg="bg-page-canvas" innerClass="py-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
            
            <!-- Left 8 Columns: Articles -->
            <div class="lg:col-span-8 space-y-8">
                <!-- Lead Story -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-start">
                    <img src="/wharf.jpg" alt="Wharf" class="rounded object-cover w-full h-64" />
                    <div>
                        <h2 class="text-3xl font-extrabold text-brand-navy leading-tight">
                            Historic Whangaroa Wharf Restored!
                        </h2>
                        <div class="text-xs text-copy-meta my-2">15 May 2024 &middot; Author Names</div>
                        <p class="text-copy-body line-clamp-4">
                            Historic Whangaroa Wharf Restored's lead story in the district, has a community restored wharf...
                        </p>
                        <button class="mt-4 bg-brand-subbar text-pure-white px-4 py-1.5 rounded text-xs font-semibold hover:bg-brand-navy transition">
                            Read More &gt;
                        </button>
                    </div>
                </div>

                <!-- 4-Column Secondary Articles -->
                <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 pt-4 border-t border-brand-navy/10">
                    <div>
                        <div class="h-28 bg-brand-navy/20 rounded mb-2"></div>
                        <h4 class="font-bold text-xs text-brand-navy">Māori Heritage Sites Recognized</h4>
                        <span class="text-[10px] text-copy-meta">22 Jun 2024</span>
                    </div>
                    <div>
                        <div class="h-28 bg-brand-navy/20 rounded mb-2"></div>
                        <h4 class="font-bold text-xs text-brand-navy">Local Farm Innovations</h4>
                        <span class="text-[10px] text-copy-meta">21 Jun 2024</span>
                    </div>
                    <div>
                        <div class="h-28 bg-brand-navy/20 rounded mb-2"></div>
                        <h4 class="font-bold text-xs text-brand-navy">Kawakawa School Gala</h4>
                        <span class="text-[10px] text-copy-meta">21 Jun 2024</span>
                    </div>
                    <div>
                        <div class="h-28 bg-brand-navy/20 rounded mb-2"></div>
                        <h4 class="font-bold text-xs text-brand-navy">Volunteer Profile</h4>
                        <span class="text-[10px] text-copy-meta">22 Jun 2024</span>
                    </div>
                </div>
            </div>

            <!-- Right 4 Columns: Accents & Sidebar -->
            <div class="lg:col-span-4 space-y-4">
                
                <!-- Brown Accent Card -->
                <div class="bg-accent-brown text-pure-white p-4 rounded flex items-center gap-4 shadow-sm">
                    <div class="w-12 h-12 bg-pure-white/10 rounded-full shrink-0"></div>
                    <div>
                        <h5 class="font-bold">Whangaroa Quality Meats</h5>
                        <p class="text-xs text-pure-white/80">Local butchery - butchery.co.nz</p>
                    </div>
                </div>

                <!-- Green Accent Card -->
                <div class="bg-accent-green text-pure-white p-4 rounded flex items-center gap-4 shadow-sm">
                    <div class="w-12 h-12 bg-pure-white/10 rounded-full shrink-0"></div>
                    <div>
                        <h5 class="font-bold">Totara North Supplies</h5>
                        <p class="text-xs text-pure-white/80">Hardware store - load supplies</p>
                    </div>
                </div>

                <!-- Brown Accent Card -->
                <div class="bg-accent-brown text-pure-white p-4 rounded flex items-center gap-4 shadow-sm">
                    <div class="w-12 h-12 bg-pure-white/10 rounded-full shrink-0"></div>
                    <div>
                        <h5 class="font-bold">The Harbour Café</h5>
                        <p class="text-xs text-pure-white/80">Local cafe - coffee & food</p>
                    </div>
                </div>

                <!-- Calendar Section using Tint #D5DDEA -->
                <div class="pt-4">
                    <h4 class="font-bold text-brand-navy mb-2">Community calendar</h4>
                    <div class="bg-page-canvas-alt px-3 py-2 rounded flex justify-between items-center text-xs font-semibold text-brand-navy">
                        <button>&lt;</button>
                        <span>Today {{ date('Y') }}</span>
                        <button>&gt;</button>
                    </div>
                </div>

            </div>
        </div>
    </x-row>

</x-layouts.app>