<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Car Suvidha - Premier Chauffeur Driven Car & Cab Booking')</title>
    <meta name="description" content="@yield('meta_description', 'Experience seamless car booking with Car Suvidha. Daily city rides, intercity outstation cabs, hourly rentals, and airport transfers with guaranteed zero cancellation fees and 24/7 support.')">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="apple-touch-icon" sizes="192x192" href="/favicon.png">
    
    <!-- Vite Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#f8fafc] text-slate-800 antialiased font-sans selection:bg-brand-500 selection:text-white" x-data="{ mobileMenuOpen: false, quickHelpModal: false }">

    <!-- FLOATING ISLAND NAVBAR (Inspired by Yoga Project) -->
    <div class="fixed top-0 inset-x-0 z-[100] flex justify-center px-4 pt-4 pointer-events-none"
         x-data="{ isScrolled: false, mobileMenuOpen: false, quickHelpModal: false, servicesHovered: false }"
         @scroll.window="isScrolled = (window.pageYOffset > 40)">
        
        <nav class="pointer-events-auto flex items-center justify-between transition-all duration-700 ease-in-out"
             :class="isScrolled
               ? 'w-[95%] md:w-[85%] max-w-5xl bg-white/95 backdrop-blur-2xl border border-slate-200/90 rounded-full py-2.5 px-6 shadow-2xl shadow-slate-900/10'
               : 'w-full max-w-7xl bg-white/85 backdrop-blur-xl border border-slate-200/60 rounded-full py-3.5 px-6 sm:px-8 shadow-lg shadow-slate-900/5'">
            
            <!-- Official Brand Logo (Left) -->
            <a href="{{ route('home') }}" class="flex-none flex items-center gap-3 cursor-pointer group z-10">
                <div class="relative flex items-center justify-center transition-all duration-500 rounded-full bg-white p-0.5 shadow-md shadow-slate-900/10 border border-slate-200/80 group-hover:scale-105 group-hover:border-brand-400 group-hover:shadow-brand-500/20"
                     :class="isScrolled ? 'w-10 h-10' : 'w-11 h-11 sm:w-12 sm:h-12'">
                    <img src="/images/logo.png" alt="Car Suvidha Official Logo" class="w-full h-full object-contain rounded-full">
                </div>
                <div class="flex flex-col">
                    <span class="font-['Outfit'] font-black tracking-tight text-slate-950 group-hover:text-brand-600 transition-all duration-300"
                          :class="isScrolled ? 'text-lg sm:text-xl' : 'text-xl sm:text-2xl'">
                        Car<span class="bg-gradient-to-r from-brand-500 via-brand-600 to-amber-500 bg-clip-text text-transparent">Suvidha</span>
                    </span>
                    <span class="text-[9px] font-bold uppercase tracking-[0.22em] text-slate-400 -mt-0.5 hidden sm:inline-block">
                        Chauffeur Cabs
                    </span>
                </div>
            </a>

            <!-- Navigation Items (Center) -->
            <div class="hidden md:flex flex-1 justify-center items-center transition-all duration-500"
                 :class="isScrolled ? 'gap-6 lg:gap-8' : 'gap-8 lg:gap-10'">
                
                <!-- Services Dropdown (like Yoga Dropdown) -->
                <div class="relative py-2" @mouseenter="servicesHovered = true" @mouseleave="servicesHovered = false">
                    <button class="nav-link-underline flex items-center gap-1.5 text-[11px] sm:text-xs font-bold tracking-[0.2em] uppercase transition-colors text-slate-700 hover:text-brand-600 {{ request()->routeIs('home') ? 'active text-brand-600' : '' }}">
                        <span>Services</span>
                        <svg class="w-3 h-3 transition-transform duration-300" :class="servicesHovered && 'rotate-180'" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/></svg>
                    </button>

                    <!-- Animated Dropdown Card -->
                    <div x-show="servicesHovered"
                         x-transition:enter="transition ease-out duration-200"
                         x-transition:enter-start="opacity-0 translate-y-3 scale-95"
                         x-transition:enter-end="opacity-100 translate-y-0 scale-100"
                         x-transition:leave="transition ease-in duration-150"
                         x-transition:leave-start="opacity-100 translate-y-0 scale-100"
                         x-transition:leave-end="opacity-0 translate-y-3 scale-95"
                         class="absolute top-full left-1/2 -translate-x-1/2 pt-4 w-[480px] pointer-events-auto"
                         style="display: none;">
                        <div class="bg-white rounded-[2rem] border border-brand-100 shadow-2xl overflow-hidden p-6">
                            <div class="grid grid-cols-2 gap-4">
                                <a href="{{ route('home') }}#services" class="flex items-start gap-4 p-4 rounded-2xl hover:bg-brand-50 transition-colors group">
                                    <div class="w-10 h-10 rounded-xl bg-brand-100 flex items-center justify-center text-brand-600 group-hover:bg-brand-600 group-hover:text-white transition-colors">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                    </div>
                                    <div>
                                        <div class="text-sm font-bold text-slate-900">City Daily Cabs</div>
                                        <div class="text-[10px] text-slate-500 font-light leading-tight mt-0.5">Punctual point-to-point urban rides</div>
                                    </div>
                                </a>

                                <a href="{{ route('outstation') }}" class="flex items-start gap-4 p-4 rounded-2xl hover:bg-brand-50 transition-colors group">
                                    <div class="w-10 h-10 rounded-xl bg-emerald-100 flex items-center justify-center text-emerald-600 group-hover:bg-emerald-600 group-hover:text-white transition-colors">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"/></svg>
                                    </div>
                                    <div>
                                        <div class="text-sm font-bold text-slate-900">Outstation Cabs</div>
                                        <div class="text-[10px] text-slate-500 font-light leading-tight mt-0.5">Fixed rates one-way & round trip</div>
                                    </div>
                                </a>

                                <a href="{{ route('home') }}#services" class="flex items-start gap-4 p-4 rounded-2xl hover:bg-brand-50 transition-colors group">
                                    <div class="w-10 h-10 rounded-xl bg-blue-100 flex items-center justify-center text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-colors">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/></svg>
                                    </div>
                                    <div>
                                        <div class="text-sm font-bold text-slate-900">Airport Transfer</div>
                                        <div class="text-[10px] text-slate-500 font-light leading-tight mt-0.5">Flight tracking & guaranteed pickup</div>
                                    </div>
                                </a>

                                <a href="{{ route('fleet') }}" class="flex items-start gap-4 p-4 rounded-2xl hover:bg-brand-50 transition-colors group">
                                    <div class="w-10 h-10 rounded-xl bg-amber-100 flex items-center justify-center text-amber-600 group-hover:bg-amber-600 group-hover:text-white transition-colors">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                    </div>
                                    <div>
                                        <div class="text-sm font-bold text-slate-900">Hourly Rentals</div>
                                        <div class="text-[10px] text-slate-500 font-light leading-tight mt-0.5">Flexible 4h, 8h & 12h car packages</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <a href="{{ route('fleet') }}" class="nav-link-underline text-[11px] sm:text-xs font-bold tracking-[0.2em] uppercase transition-colors text-slate-700 hover:text-brand-600 {{ request()->routeIs('fleet') ? 'active text-brand-600' : '' }}">
                    Fleet
                </a>

                <a href="{{ route('outstation') }}" class="nav-link-underline text-[11px] sm:text-xs font-bold tracking-[0.2em] uppercase transition-colors text-slate-700 hover:text-brand-600 {{ request()->routeIs('outstation') ? 'active text-brand-600' : '' }}">
                    Outstation
                </a>

                <a href="{{ route('about') }}" class="nav-link-underline text-[11px] sm:text-xs font-bold tracking-[0.2em] uppercase transition-colors text-slate-700 hover:text-brand-600 {{ request()->routeIs('about') ? 'active text-brand-600' : '' }}">
                    About
                </a>

                <a href="{{ route('contact') }}" class="nav-link-underline text-[11px] sm:text-xs font-bold tracking-[0.2em] uppercase transition-colors text-slate-700 hover:text-brand-600 {{ request()->routeIs('contact') ? 'active text-brand-600' : '' }}">
                    Contact
                </a>
            </div>

            <!-- Action Buttons (Right) -->
            <div class="flex-none flex items-center gap-3 z-10">
                <a href="tel:18002007884" class="hidden xl:inline-flex items-center gap-1.5 text-xs font-bold text-slate-600 hover:text-brand-600 transition px-3 py-1.5 rounded-full hover:bg-slate-100/80">
                    <svg class="w-3.5 h-3.5 text-brand-500" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 4V3z"/></svg>
                    <span class="tracking-wide text-[11px]">1800-200-SUVIDHA</span>
                </a>

                <a href="{{ route('contact') }}" 
                   class="!hidden sm:!inline-flex items-center justify-center whitespace-nowrap rounded-full font-bold uppercase tracking-wider text-xs transition-all shadow-xl shadow-brand-500/20 hover:shadow-brand-500/40 hover:bg-brand-600 active:scale-95 bg-brand-500 text-white"
                   :class="isScrolled ? 'h-9 px-4 text-[11px]' : 'h-10 px-5 text-xs'">
                    Inquire Now
                </a>

                <button @click="mobileMenuOpen = true" class="lg:hidden transition-all p-2 rounded-full border border-slate-200 bg-white/50 backdrop-blur-sm text-slate-700 hover:text-brand-600 shadow-sm active:scale-95">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                </button>
            </div>
        </nav>
    </div>

    <!-- Mobile Fullscreen Menu Overlay (like Yoga project) -->
    <div x-show="mobileMenuOpen" 
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 translate-x-full"
         x-transition:enter-end="opacity-100 translate-x-0"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100 translate-x-0"
         x-transition:leave-end="opacity-0 translate-x-full"
         class="fixed inset-0 z-[200] bg-white flex flex-col p-8 overflow-y-auto"
         style="display: none;">
        <div class="flex justify-between items-center mb-8 pb-4 border-b border-slate-100">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-full bg-white p-0.5 border border-slate-200 shadow-sm flex items-center justify-center shrink-0">
                    <img src="/images/logo.png" alt="Car Suvidha Logo" class="w-full h-full object-contain rounded-full">
                </div>
                <span class="font-['Outfit'] font-black text-2xl text-slate-900">Car<span class="text-brand-500">Suvidha</span></span>
            </div>
            <button @click="mobileMenuOpen = false" class="p-2.5 bg-slate-100 rounded-full text-slate-700 hover:bg-brand-50 hover:text-brand-600 transition">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
            </button>
        </div>

        <div class="flex flex-col gap-6">
            <div class="space-y-4">
                <span class="text-[10px] font-bold uppercase tracking-[0.3em] text-brand-600">Mobility Services</span>
                <div class="flex flex-col gap-3">
                    <a href="{{ route('home') }}#services" @click="mobileMenuOpen = false" class="flex items-center gap-4 group">
                        <div class="w-10 h-10 rounded-xl bg-brand-50 flex items-center justify-center text-brand-600 group-active:bg-brand-600 group-active:text-white transition-colors">
                            🚕
                        </div>
                        <span class="font-['Outfit'] text-xl font-bold text-slate-900">City Daily Cabs</span>
                    </a>
                    <a href="{{ route('outstation') }}" @click="mobileMenuOpen = false" class="flex items-center gap-4 group">
                        <div class="w-10 h-10 rounded-xl bg-emerald-50 flex items-center justify-center text-emerald-600 group-active:bg-emerald-600 group-active:text-white transition-colors">
                            🛣️
                        </div>
                        <span class="font-['Outfit'] text-xl font-bold text-slate-900">Outstation Cabs</span>
                    </a>
                    <a href="{{ route('fleet') }}" @click="mobileMenuOpen = false" class="flex items-center gap-4 group">
                        <div class="w-10 h-10 rounded-xl bg-amber-50 flex items-center justify-center text-amber-600 group-active:bg-amber-600 group-active:text-white transition-colors">
                            ⏱️
                        </div>
                        <span class="font-['Outfit'] text-xl font-bold text-slate-900">Hourly Rentals</span>
                    </a>
                </div>
            </div>

            <div class="h-[1px] bg-slate-100 w-full"></div>

            <a href="{{ route('fleet') }}" @click="mobileMenuOpen = false" class="font-['Outfit'] text-2xl font-bold text-slate-900">Our Fleet</a>
            <a href="{{ route('outstation') }}" @click="mobileMenuOpen = false" class="font-['Outfit'] text-2xl font-bold text-slate-900">Outstation</a>
            <a href="{{ route('about') }}" @click="mobileMenuOpen = false" class="font-['Outfit'] text-2xl font-bold text-slate-900">About</a>
            <a href="{{ route('contact') }}" @click="mobileMenuOpen = false" class="font-['Outfit'] text-2xl font-bold text-slate-900">Contact</a>

            <div class="pt-6 border-t border-slate-100 flex flex-col gap-3">
                <a href="tel:18002007884" class="flex items-center justify-center py-3.5 rounded-full bg-slate-950 text-white font-bold text-sm shadow-md">
                    📞 1800-200-SUVIDHA
                </a>
                <a href="{{ route('contact') }}" @click="mobileMenuOpen = false" class="flex items-center justify-center py-3.5 rounded-full bg-brand-500 text-white font-bold text-sm shadow-lg shadow-brand-500/25">
                    Send Service Inquiry →
                </a>
            </div>
        </div>
    </div>

    <!-- Page Content -->
    <main>
        @yield('content')
    </main>

    <!-- Professional Footer -->
    <footer class="bg-navy-950 text-slate-300 pt-16 pb-12 border-t border-slate-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-10 pb-12 border-b border-slate-800/80">
                
                <!-- Col 1: Brand & Bio -->
                <div class="lg:col-span-2 space-y-4">
                    <div class="flex items-center space-x-3.5">
                        <div class="w-12 h-12 rounded-full bg-white p-1 border border-white/20 flex items-center justify-center shadow-lg shadow-black/20 shrink-0">
                            <img src="/images/logo.png" alt="Car Suvidha Logo" class="w-full h-full object-contain rounded-full">
                        </div>
                        <span class="text-2xl font-black tracking-tight text-white font-sans">Car<span class="text-brand-500">Suvidha</span></span>
                    </div>
                    <p class="text-sm text-slate-400 leading-relaxed pr-6">
                        India’s most trusted chauffeur-driven car booking platform. From daily city commutes and airport transfers to intercity outstation drops, Car Suvidha guarantees punctuality, safety, and transparent pricing on every mile.
                    </p>
                    <div class="pt-2 flex flex-wrap items-center gap-3 text-xs text-slate-400">
                        <div class="flex items-center space-x-1.5 bg-slate-900 px-3 py-1.5 rounded-lg border border-slate-800">
                            <span class="w-2 h-2 rounded-full bg-emerald-400"></span>
                            <span>50,000+ Completed Trips</span>
                        </div>
                        <div class="flex items-center space-x-1.5 bg-slate-900 px-3 py-1.5 rounded-lg border border-slate-800">
                            <span class="text-amber-400 font-bold">★ 4.95/5</span>
                            <span>Customer Satisfaction</span>
                        </div>
                    </div>
                </div>

                <!-- Col 2: Services -->
                <div>
                    <h3 class="text-white font-bold text-sm tracking-wider uppercase mb-4">Our Services</h3>
                    <ul class="space-y-2.5 text-sm text-slate-400">
                        <li><a href="{{ route('home') }}" class="hover:text-brand-400 transition">City Daily Cabs</a></li>
                        <li><a href="{{ route('outstation') }}" class="hover:text-brand-400 transition">Outstation One-Way Drop</a></li>
                        <li><a href="{{ route('outstation') }}" class="hover:text-brand-400 transition">Outstation Round-Trip</a></li>
                        <li><a href="{{ route('home') }}" class="hover:text-brand-400 transition">Airport Pickup & Drop</a></li>
                        <li><a href="{{ route('fleet') }}" class="hover:text-brand-400 transition">Hourly Rentals (4h/8h/12h)</a></li>
                        <li><a href="{{ route('fleet') }}" class="hover:text-brand-400 transition">Corporate & VIP Fleet</a></li>
                    </ul>
                </div>

                <!-- Col 3: Popular Routes -->
                <div>
                    <h3 class="text-white font-bold text-sm tracking-wider uppercase mb-4">Popular Routes</h3>
                    <ul class="space-y-2.5 text-sm text-slate-400">
                        <li><a href="{{ route('outstation') }}" class="hover:text-brand-400 transition">Delhi to Agra Cab</a></li>
                        <li><a href="{{ route('outstation') }}" class="hover:text-brand-400 transition">Delhi to Jaipur Cab</a></li>
                        <li><a href="{{ route('outstation') }}" class="hover:text-brand-400 transition">Mumbai to Pune Express</a></li>
                        <li><a href="{{ route('outstation') }}" class="hover:text-brand-400 transition">Bengaluru to Mysuru</a></li>
                        <li><a href="{{ route('outstation') }}" class="hover:text-brand-400 transition">Chandigarh to Shimla</a></li>
                        <li><a href="{{ route('outstation') }}" class="hover:text-brand-400 transition">Ahmedabad to Vadodara</a></li>
                    </ul>
                </div>

                <!-- Col 4: Support & Safety -->
                <div>
                    <h3 class="text-white font-bold text-sm tracking-wider uppercase mb-4">24/7 Assistance</h3>
                    <div class="space-y-3 text-sm text-slate-400">
                        <p class="text-xs text-slate-400">Toll-Free Helpline:</p>
                        <a href="tel:18002007884" class="block text-base font-bold text-brand-400 hover:text-brand-300">
                            1800-200-SUVIDHA
                        </a>
                        <p class="text-xs text-slate-400">Email Inquiries:</p>
                        <a href="mailto:support@carsuvidha.in" class="block text-slate-300 hover:text-white">
                            support@carsuvidha.in
                        </a>
                        <div class="pt-2">
                            <span class="inline-block text-[11px] font-semibold text-emerald-400 bg-emerald-950/60 border border-emerald-800/60 px-2.5 py-1 rounded-md">
                                ✓ 100% On-Time Guarantee
                            </span>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Bottom Row: Payment Badges & Copyright -->
            <div class="pt-8 flex flex-col md:flex-row items-center justify-between text-xs text-slate-500 gap-4">
                <p>© {{ date('Y') }} Car Suvidha Technologies Pvt. Ltd. All rights reserved.</p>
                <div class="flex items-center space-x-3 flex-wrap">
                    <span class="text-slate-400">Secure Payments:</span>
                    <span class="px-2 py-0.5 rounded bg-slate-900 border border-slate-800 text-slate-300 font-semibold">UPI / GPay</span>
                    <span class="px-2 py-0.5 rounded bg-slate-900 border border-slate-800 text-slate-300 font-semibold">Credit/Debit Cards</span>
                    <span class="px-2 py-0.5 rounded bg-slate-900 border border-slate-800 text-slate-300 font-semibold">Fastag Ready</span>
                    <span class="px-2 py-0.5 rounded bg-slate-900 border border-slate-800 text-slate-300 font-semibold">Cash to Driver</span>
                </div>
            </div>
        </div>
    </footer>

    <!-- Emergency SOS & Help Modal -->
    <div x-show="quickHelpModal" 
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         class="fixed inset-0 z-50 overflow-y-auto bg-slate-950/70 backdrop-blur-sm flex items-center justify-center p-4">
        
        <div @click.away="quickHelpModal = false" class="bg-white rounded-3xl max-w-md w-full p-6 shadow-2xl border border-slate-100 relative">
            <button @click="quickHelpModal = false" class="absolute top-4 right-4 text-slate-400 hover:text-slate-600 p-2">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
            </button>

            <div class="w-12 h-12 rounded-2xl bg-rose-100 text-rose-600 flex items-center justify-center mb-4">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/></svg>
            </div>

            <h3 class="text-xl font-bold text-slate-900 mb-2">24/7 Safety & SOS Helpline</h3>
            <p class="text-sm text-slate-600 mb-4 leading-relaxed">
                Every Car Suvidha trip is monitored via real-time satellite GPS. For emergency response or priority passenger assistance, connect immediately:
            </p>

            <div class="space-y-3 mb-6">
                <a href="tel:18002007884" class="flex items-center justify-between p-3.5 rounded-2xl bg-rose-50 border border-rose-200 text-rose-900 font-bold hover:bg-rose-100 transition">
                    <div class="flex items-center space-x-3">
                        <span class="text-2xl">🚨</span>
                        <div>
                            <div class="text-sm font-extrabold text-rose-700">Emergency SOS Response</div>
                            <div class="text-xs text-rose-600 font-normal">Immediate law enforcement & control room alert</div>
                        </div>
                    </div>
                    <span class="text-sm bg-rose-600 text-white px-3 py-1.5 rounded-xl">Call SOS</span>
                </a>

                <a href="tel:18002007884" class="flex items-center justify-between p-3.5 rounded-2xl bg-amber-50 border border-amber-200 text-amber-900 font-bold hover:bg-amber-100 transition">
                    <div class="flex items-center space-x-3">
                        <span class="text-2xl">🎧</span>
                        <div>
                            <div class="text-sm font-extrabold text-amber-800">Ride Assistance Team</div>
                            <div class="text-xs text-amber-700 font-normal">Trip updates, lost items & driver coordination</div>
                        </div>
                    </div>
                    <span class="text-sm bg-amber-600 text-white px-3 py-1.5 rounded-xl">Call Support</span>
                </a>
            </div>

            <button @click="quickHelpModal = false" class="w-full py-3 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-700 font-bold text-sm transition">
                Close
            </button>
        </div>
    </div>

</body>
</html>
