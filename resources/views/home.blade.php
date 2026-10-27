@extends('layouts.app')

@section('title', 'Car Suvidha - Premier Chauffeur-Driven Car & Cab Booking Across India')
@section('meta_description', 'Book verified, comfortable, and affordable cabs with Car Suvidha. Daily city rides, intercity outstation cabs, hourly rentals, and airport transfers with guaranteed zero cancellation fees and 24/7 support.')

@section('content')

<div x-data="{ activeFleetTab: 'all', activeFaq: null }">

    <!-- AESTHETIC LIGHT HERO SECTION WITH SCENIC ROAD BACKGROUND -->
    <section class="relative min-h-[580px] lg:min-h-[640px] pt-32 sm:pt-36 lg:pt-40 pb-16 sm:pb-20 flex items-center border-b border-slate-200 overflow-hidden bg-slate-50">
        
        <!-- Scenic Aesthetic Background Image -->
        <div class="absolute inset-0 z-0">
            <img src="/images/aesthetic-hero-bg.jpg" alt="Aesthetic Car Journey" class="w-full h-full object-cover object-[78%_center] lg:object-[70%_center] transition-transform duration-1000">
            <!-- Gentle Feathering Gradient: Soft on the left for text readability, clear in center and right for image vibrancy -->
            <div class="absolute inset-0 bg-gradient-to-r from-white/90 via-white/55 sm:via-white/40 to-transparent"></div>
            <!-- Soft Bottom Transition to Next Section -->
            <div class="absolute inset-x-0 bottom-0 h-20 bg-gradient-to-t from-slate-50 to-transparent"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
                
                <!-- Hero Left Content (Clean, Minimal, Aesthetic) -->
                <div class="lg:col-span-7 space-y-4 sm:space-y-5">
                    
                    <!-- Top Pill Badge -->
                    <div class="hero-badge inline-flex items-center space-x-2.5 px-3.5 py-1.5 rounded-full bg-white/95 backdrop-blur-md border border-brand-200 text-xs font-bold text-brand-700 shadow-sm">
                        <img src="/images/logo.png" alt="Car Suvidha Emblem" class="w-4 h-4 object-contain rounded-full">
                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse"></span>
                        <span>OFFICIAL CHAUFFEUR & CAB MOBILITY</span>
                    </div>

                    <!-- Main Headline -->
                    <h1 class="hero-title text-3xl sm:text-4xl lg:text-5xl xl:text-[54px] font-black tracking-tight text-slate-950 leading-[1.14] font-sans">
                        Elevate Every Journey, <br class="hidden sm:inline">
                        <span class="bg-gradient-to-r from-brand-500 via-brand-600 to-amber-500 bg-clip-text text-transparent">
                            Ride in Pure Comfort.
                        </span>
                    </h1>

                    <!-- Concise Description (Ultra-dark, crisp, and high-contrast) -->
                    <p class="hero-desc text-base sm:text-lg text-slate-950 font-semibold sm:font-bold max-w-xl leading-relaxed drop-shadow-[0_1px_1px_rgba(255,255,255,0.95)]">
                        India's premier chauffeur-driven car service. Discover verified courteous chauffeurs, sanitized luxury cabs, and transparent upfront tariffs for city commutes, outstation travel, and airport transfers across 45+ cities.
                    </p>

                    <!-- Elegant Call-To-Action Buttons -->
                    <div class="hero-pills pt-1 flex flex-wrap items-center gap-3 sm:gap-3.5">
                        <a href="#services" 
                           class="px-6 sm:px-7 py-3 sm:py-3.5 rounded-xl bg-gradient-to-r from-brand-500 via-brand-600 to-amber-500 hover:from-brand-600 hover:to-amber-600 text-white font-extrabold text-sm sm:text-base shadow-lg shadow-brand-500/25 hover:shadow-xl hover:shadow-brand-500/35 hover:-translate-y-0.5 active:translate-y-0 transition duration-200 flex items-center space-x-2">
                            <span>Explore Our Services</span>
                            <svg class="w-4 h-4 sm:w-4.5 sm:h-4.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 14l-7 7m0 0l-7-7m7 7V3"/></svg>
                        </a>

                        <a href="tel:18002007884" 
                           class="px-5 sm:px-6 py-3 sm:py-3.5 rounded-xl bg-white/95 hover:bg-white text-slate-950 hover:text-brand-600 font-bold text-sm sm:text-base border border-slate-300 shadow-sm hover:shadow-md hover:-translate-y-0.5 active:translate-y-0 transition duration-200 flex items-center space-x-2">
                            <svg class="w-4 h-4 text-brand-500" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 4V3z"/></svg>
                            <span>Call 1800-200-SUVIDHA</span>
                        </a>
                    </div>

                    <!-- Clean Trust Metrics -->
                    <div class="pt-1.5 flex flex-wrap items-center gap-2.5 sm:gap-3.5 text-xs text-slate-950 font-semibold">
                        <div class="flex items-center space-x-1.5 bg-white/95 backdrop-blur-sm px-3 py-1.5 rounded-xl border border-slate-300 shadow-xs">
                            <span class="text-amber-500 font-bold">★ 4.95</span>
                            <span class="text-slate-950 font-bold">(50k+ Happy Commuters)</span>
                        </div>
                        <div class="flex items-center space-x-1.5 bg-white/95 backdrop-blur-sm px-3 py-1.5 rounded-xl border border-slate-300 shadow-xs">
                            <span class="text-emerald-600 font-bold">✓</span>
                            <span class="text-slate-950 font-bold">100% Upfront Transparent Fares</span>
                        </div>
                        <div class="flex items-center space-x-1.5 bg-white/95 backdrop-blur-sm px-3 py-1.5 rounded-xl border border-slate-300 shadow-xs">
                            <span class="text-brand-600 font-bold">⏱</span>
                            <span class="text-slate-950 font-bold">Guaranteed On-Time Chauffeur</span>
                        </div>
                    </div>

                </div>

                <!-- Hero Right Live Dispatch & Quality Card -->
                <div class="lg:col-span-5 hidden lg:flex flex-col items-end">
                    <div class="hero-dispatch-card bg-white/90 backdrop-blur-xl p-5 rounded-3xl shadow-xl shadow-slate-300/50 border border-white/90 max-w-sm w-full ring-1 ring-slate-900/5 animate-float">
                        
                        <!-- Top Active Status Bar -->
                        <div class="flex items-center justify-between pb-3.5 mb-3.5 border-b border-slate-150">
                            <div class="flex items-center space-x-2">
                                <span class="relative flex h-2.5 w-2.5">
                                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                                    <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-emerald-500"></span>
                                </span>
                                <span class="text-xs font-bold text-slate-800 tracking-wide uppercase">Active In 45+ Cities</span>
                            </div>
                            <span class="text-[11px] font-extrabold text-brand-700 bg-brand-50 px-2.5 py-0.5 rounded-full border border-brand-200">⚡ 3-Min Dispatch</span>
                        </div>

                        <!-- Fleet & Chauffeur Showcase -->
                        <div class="flex items-center space-x-3.5 mb-4">
                            <div class="w-12 h-12 rounded-2xl bg-gradient-to-tr from-brand-500 via-brand-600 to-amber-500 flex items-center justify-center text-white text-2xl shadow-md shadow-brand-500/25 shrink-0">
                                🚖
                            </div>
                            <div class="flex-1 min-w-0">
                                <div class="flex items-center space-x-1.5">
                                    <h4 class="text-sm font-black text-slate-900 truncate font-sans">Verified Executive Fleet</h4>
                                    <span class="text-emerald-500 text-xs" title="Verified Chauffeurs">✓</span>
                                </div>
                                <p class="text-xs text-slate-500 truncate">Sedans, SUVs & Luxury Saloons</p>
                            </div>
                        </div>

                        <!-- 4 Value Pillar Grid -->
                        <div class="grid grid-cols-2 gap-2 text-xs font-semibold text-slate-700 mb-4">
                            <div class="bg-slate-50/90 p-2.5 rounded-xl border border-slate-150 flex items-center space-x-2">
                                <span class="text-brand-500 font-black text-sm">₹</span>
                                <div class="text-[11px]">
                                    <div class="text-slate-400 font-normal">Tariffs From</div>
                                    <div class="font-bold text-slate-800">₹11 / km</div>
                                </div>
                            </div>
                            <div class="bg-slate-50/90 p-2.5 rounded-xl border border-slate-150 flex items-center space-x-2">
                                <span class="text-emerald-500 text-sm">🛡️</span>
                                <div class="text-[11px]">
                                    <div class="text-slate-400 font-normal">Policy</div>
                                    <div class="font-bold text-slate-800">Zero Cancel Fees</div>
                                </div>
                            </div>
                            <div class="bg-slate-50/90 p-2.5 rounded-xl border border-slate-150 flex items-center space-x-2">
                                <span class="text-amber-500 text-sm">⭐</span>
                                <div class="text-[11px]">
                                    <div class="text-slate-400 font-normal">Trip Rating</div>
                                    <div class="font-bold text-slate-800">4.95 / 5.0</div>
                                </div>
                            </div>
                            <div class="bg-slate-50/90 p-2.5 rounded-xl border border-slate-150 flex items-center space-x-2">
                                <span class="text-blue-500 text-sm">📡</span>
                                <div class="text-[11px]">
                                    <div class="text-slate-400 font-normal">Safety</div>
                                    <div class="font-bold text-slate-800">GPS Radar</div>
                                </div>
                            </div>
                        </div>

                        <!-- Direct Information Action Button -->
                        <a href="#services" class="w-full py-2.5 px-3 rounded-xl bg-slate-900 hover:bg-brand-600 text-white font-bold text-xs flex items-center justify-center space-x-1.5 transition duration-200 shadow-sm group">
                            <span>Explore Services & Tariffs</span>
                            <svg class="w-3.5 h-3.5 group-hover:translate-y-0.5 transition duration-150" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/></svg>
                        </a>

                    </div>
                </div>

            </div>
        </div>

    </section>


    <!-- OUR CORE MOBILITY SOLUTIONS SECTION (INFORMATIVE SHOWCASE) -->
    <section id="services" class="py-16 sm:py-20 bg-slate-50 border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Section Header -->
            <div class="gsap-fade-up text-center max-w-3xl mx-auto mb-14">
                <span class="text-xs font-bold uppercase tracking-wider text-brand-600 bg-brand-50 px-3.5 py-1 rounded-full border border-brand-200">Our Comprehensive Mobility Services</span>
                <h2 class="text-3xl sm:text-4xl font-black text-slate-900 tracking-tight mt-2 font-sans">Tailored Chauffeur-Driven Travel Across India</h2>
                <p class="text-slate-600 text-sm sm:text-base mt-2">Whether you require an everyday city commute, a highway road trip, a time-critical airport transfer, or a full-day corporate rental, Car Suvidha provides reliable, sanitized vehicles with 100% transparent pricing.</p>
            </div>

            <!-- 4 Comprehensive Service Cards -->
            <div class="gsap-stagger-cards grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                
                <!-- Service 1: City Daily Commutes -->
                <div class="bg-white rounded-3xl p-6 sm:p-7 border border-slate-200 shadow-sm hover:shadow-xl hover:border-brand-300 hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between group">
                    <div>
                        <div class="w-14 h-14 rounded-2xl bg-amber-100 text-amber-600 flex items-center justify-center text-3xl mb-5 shadow-xs group-hover:scale-105 transition">
                            🚖
                        </div>
                        <div class="flex items-center space-x-2 mb-2">
                            <span class="text-[10px] font-extrabold uppercase px-2.5 py-0.5 rounded-full bg-amber-50 text-amber-800 border border-amber-200">Daily Urban Rides</span>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 font-sans mb-2">City Daily Cabs</h3>
                        <p class="text-xs text-slate-600 leading-relaxed mb-5">
                            Seamless door-to-door city mobility for office commutes, client meetings, shopping, and family outings. Guaranteed zero surge pricing during peak rush hours.
                        </p>

                        <div class="space-y-2 mb-6 border-t border-slate-100 pt-4 text-xs text-slate-600">
                            <div class="flex items-center space-x-2">
                                <span class="text-emerald-500 font-bold">✓</span>
                                <span>Instant & advance schedule pickups</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <span class="text-emerald-500 font-bold">✓</span>
                                <span>Dual-zone climate control AC</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <span class="text-emerald-500 font-bold">✓</span>
                                <span>Polite, police-verified drivers</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <span class="text-emerald-500 font-bold">✓</span>
                                <span>Digital GST invoices provided</span>
                            </div>
                        </div>
                    </div>

                    <div class="pt-4 border-t border-slate-100 bg-slate-50/70 -mx-6 -mb-6 p-6 rounded-b-3xl">
                        <div class="flex items-baseline justify-between mb-3">
                            <span class="text-xs text-slate-500 font-medium">Estimated Tariff:</span>
                            <span class="text-sm font-extrabold text-slate-900">From ₹11<span class="text-xs font-normal text-slate-500">/km</span></span>
                        </div>
                        <a href="{{ route('fleet') }}" class="w-full py-2.5 px-4 rounded-xl bg-slate-900 hover:bg-brand-500 text-white font-bold text-xs flex items-center justify-center space-x-1 transition shadow-sm">
                            <span>View City Fleet</span>
                            <span>→</span>
                        </a>
                    </div>
                </div>

                <!-- Service 2: Outstation Highway Cabs -->
                <div class="bg-white rounded-3xl p-6 sm:p-7 border border-brand-200 ring-2 ring-brand-500/10 shadow-sm hover:shadow-xl hover:border-brand-400 hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between group relative">
                    <span class="absolute top-4 right-4 text-[10px] font-extrabold uppercase px-2.5 py-0.5 rounded-full bg-brand-500 text-white shadow-sm">Most Popular</span>
                    
                    <div>
                        <div class="w-14 h-14 rounded-2xl bg-brand-100 text-brand-600 flex items-center justify-center text-3xl mb-5 shadow-xs group-hover:scale-105 transition">
                            🛣️
                        </div>
                        <div class="flex items-center space-x-2 mb-2">
                            <span class="text-[10px] font-extrabold uppercase px-2.5 py-0.5 rounded-full bg-brand-50 text-brand-700 border border-brand-200">Intercity Highway</span>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 font-sans mb-2">Outstation Trips</h3>
                        <p class="text-xs text-slate-600 leading-relaxed mb-5">
                            Comfortable intercity journeys across 1,000+ national routes. Enjoy dedicated one-way drops saving up to 45% or flexible multi-day round-trip tour packages.
                        </p>

                        <div class="space-y-2 mb-6 border-t border-slate-100 pt-4 text-xs text-slate-600">
                            <div class="flex items-center space-x-2">
                                <span class="text-emerald-500 font-bold">✓</span>
                                <span>No return fare penalty on one-way</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <span class="text-emerald-500 font-bold">✓</span>
                                <span>Highway-certified seasoned drivers</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <span class="text-emerald-500 font-bold">✓</span>
                                <span>Fastag enabled with zero toll hassle</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <span class="text-emerald-500 font-bold">✓</span>
                                <span>Complimentary mineral water bottle</span>
                            </div>
                        </div>
                    </div>

                    <div class="pt-4 border-t border-slate-100 bg-brand-50/40 -mx-6 -mb-6 p-6 rounded-b-3xl">
                        <div class="flex items-baseline justify-between mb-3">
                            <span class="text-xs text-slate-500 font-medium">Estimated Tariff:</span>
                            <span class="text-sm font-extrabold text-brand-600">From ₹13<span class="text-xs font-normal text-slate-500">/km</span></span>
                        </div>
                        <a href="{{ route('outstation') }}" class="w-full py-2.5 px-4 rounded-xl bg-brand-500 hover:bg-brand-600 text-white font-bold text-xs flex items-center justify-center space-x-1 transition shadow-md shadow-brand-500/25">
                            <span>Explore Highway Routes</span>
                            <span>→</span>
                        </a>
                    </div>
                </div>

                <!-- Service 3: Airport Transfers -->
                <div class="bg-white rounded-3xl p-6 sm:p-7 border border-slate-200 shadow-sm hover:shadow-xl hover:border-brand-300 hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between group">
                    <div>
                        <div class="w-14 h-14 rounded-2xl bg-blue-100 text-blue-600 flex items-center justify-center text-3xl mb-5 shadow-xs group-hover:scale-105 transition">
                            ✈️
                        </div>
                        <div class="flex items-center space-x-2 mb-2">
                            <span class="text-[10px] font-extrabold uppercase px-2.5 py-0.5 rounded-full bg-blue-50 text-blue-700 border border-blue-200">Terminal Punctuality</span>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 font-sans mb-2">Airport Transfers</h3>
                        <p class="text-xs text-slate-600 leading-relaxed mb-5">
                            Flight-synchronized terminal pickups and drops. We track your flight status live so your chauffeur is ready when you touch down, with zero delay.
                        </p>

                        <div class="space-y-2 mb-6 border-t border-slate-100 pt-4 text-xs text-slate-600">
                            <div class="flex items-center space-x-2">
                                <span class="text-emerald-500 font-bold">✓</span>
                                <span>Real-time flight delay tracking</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <span class="text-emerald-500 font-bold">✓</span>
                                <span>60 mins free waiting after landing</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <span class="text-emerald-500 font-bold">✓</span>
                                <span>Meet & Greet paging board option</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <span class="text-emerald-500 font-bold">✓</span>
                                <span>Luggage assist right to the curb</span>
                            </div>
                        </div>
                    </div>

                    <div class="pt-4 border-t border-slate-100 bg-slate-50/70 -mx-6 -mb-6 p-6 rounded-b-3xl">
                        <div class="flex items-baseline justify-between mb-3">
                            <span class="text-xs text-slate-500 font-medium">Fixed Tariff:</span>
                            <span class="text-sm font-extrabold text-slate-900">Flat from ₹599</span>
                        </div>
                        <a href="{{ route('contact') }}" class="w-full py-2.5 px-4 rounded-xl bg-slate-900 hover:bg-brand-500 text-white font-bold text-xs flex items-center justify-center space-x-1 transition shadow-sm">
                            <span>Inquire Airport Ride</span>
                            <span>→</span>
                        </a>
                    </div>
                </div>

                <!-- Service 4: Hourly Rentals -->
                <div class="bg-white rounded-3xl p-6 sm:p-7 border border-slate-200 shadow-sm hover:shadow-xl hover:border-brand-300 hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between group">
                    <div>
                        <div class="w-14 h-14 rounded-2xl bg-purple-100 text-purple-600 flex items-center justify-center text-3xl mb-5 shadow-xs group-hover:scale-105 transition">
                            ⏱️
                        </div>
                        <div class="flex items-center space-x-2 mb-2">
                            <span class="text-[10px] font-extrabold uppercase px-2.5 py-0.5 rounded-full bg-purple-50 text-purple-700 border border-purple-200">Chauffeur on Standby</span>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 font-sans mb-2">Hourly Car Rentals</h3>
                        <p class="text-xs text-slate-600 leading-relaxed mb-5">
                            Keep a car and professional chauffeur at your personal disposal. Ideal for wedding events, shopping marathons, multi-stop business meetings, and VIP escort.
                        </p>

                        <div class="space-y-2 mb-6 border-t border-slate-100 pt-4 text-xs text-slate-600">
                            <div class="flex items-center space-x-2">
                                <span class="text-emerald-500 font-bold">✓</span>
                                <span>Flexible packages (2h, 4h, 8h, 12h)</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <span class="text-emerald-500 font-bold">✓</span>
                                <span>Unlimited multiple stopovers</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <span class="text-emerald-500 font-bold">✓</span>
                                <span>Executive sedans & 7-seater SUVs</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <span class="text-emerald-500 font-bold">✓</span>
                                <span>Corporate monthly billing ready</span>
                            </div>
                        </div>
                    </div>

                    <div class="pt-4 border-t border-slate-100 bg-slate-50/70 -mx-6 -mb-6 p-6 rounded-b-3xl">
                        <div class="flex items-baseline justify-between mb-3">
                            <span class="text-xs text-slate-500 font-medium">Half-Day Packages:</span>
                            <span class="text-sm font-extrabold text-slate-900">From ₹699</span>
                        </div>
                        <a href="{{ route('fleet') }}" class="w-full py-2.5 px-4 rounded-xl bg-slate-900 hover:bg-brand-500 text-white font-bold text-xs flex items-center justify-center space-x-1 transition shadow-sm">
                            <span>View Rental Fleet</span>
                            <span>→</span>
                        </a>
                    </div>
                </div>

            </div>

            <!-- Informative Transport Consultation Banner (Aesthetic Light Card) -->
            <div class="mt-12 p-6 sm:p-8 rounded-3xl bg-gradient-to-br from-amber-500/10 via-brand-50/40 to-orange-50/60 border border-brand-200/90 text-slate-900 flex flex-col md:flex-row items-center justify-between gap-6 shadow-sm">
                <div class="space-y-1.5 text-center md:text-left">
                    <span class="text-xs font-bold uppercase tracking-wider text-brand-700 bg-white/90 px-3 py-0.5 rounded-full border border-brand-200 shadow-xs">Custom Travel Planning</span>
                    <h3 class="text-2xl font-black text-slate-900 font-sans">Need a Customized Road Itinerary or Corporate Fleet?</h3>
                    <p class="text-xs sm:text-sm text-slate-600 max-w-xl">
                        Speak directly with our dedicated travel coordinators for customized outstation tour itineraries, bulk wedding cabs, or corporate accounts.
                    </p>
                </div>
                <div class="flex flex-wrap items-center justify-center gap-3 shrink-0">
                    <a href="tel:18002007884" class="px-6 py-3.5 rounded-full bg-gradient-to-r from-brand-500 to-amber-500 hover:from-brand-600 hover:to-amber-600 text-white font-extrabold text-xs sm:text-sm shadow-md shadow-brand-500/25 hover:shadow-lg transition flex items-center space-x-2">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 4V3z"/></svg>
                        <span>Call: 1800-200-SUVIDHA</span>
                    </a>
                    <a href="{{ route('contact') }}" class="px-6 py-3.5 rounded-full bg-white hover:bg-slate-50 text-slate-800 font-bold text-xs sm:text-sm border border-slate-200 shadow-sm transition flex items-center space-x-1.5">
                        <span>Send Written Inquiry</span>
                        <span>→</span>
                    </a>
                </div>
            </div>

        </div>
    </section>


<!-- WHY CHOOSE CAR SUVIDHA - 4 PILLARS -->
<section class="py-16 sm:py-20 bg-white border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="gsap-fade-up text-center max-w-2xl mx-auto mb-12">
            <span class="text-xs font-bold uppercase tracking-wider text-brand-600 bg-brand-50 px-3.5 py-1 rounded-full border border-brand-200">The Car Suvidha Advantage</span>
            <h2 class="text-3xl font-black text-slate-900 tracking-tight mt-2 font-sans">Why Discerning Travelers Choose Us</h2>
            <p class="text-slate-600 text-sm mt-2">Engineered for comfort, punctuality, and complete peace of mind.</p>
        </div>

        <div class="gsap-stagger-cards grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            
            <div class="p-6 rounded-3xl bg-slate-50 border border-slate-100 hover:border-brand-300 hover:bg-brand-50/20 hover:shadow-lg transition-all duration-300 group">
                <div class="w-12 h-12 rounded-2xl bg-amber-100 text-amber-600 flex items-center justify-center text-2xl mb-4 group-hover:scale-110 transition">
                    ⏱️
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-1 font-sans">100% On-Time Guarantee</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Punctuality is our prime promise. If your assigned chauffeur is late, receive an instant ₹100 credit on your trip.
                </p>
            </div>

            <div class="p-6 rounded-3xl bg-slate-50 border border-slate-100 hover:border-brand-300 hover:bg-brand-50/20 hover:shadow-lg transition-all duration-300 group">
                <div class="w-12 h-12 rounded-2xl bg-emerald-100 text-emerald-600 flex items-center justify-center text-2xl mb-4 group-hover:scale-110 transition">
                    💰
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-1 font-sans">Zero Hidden Surcharges</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    The quote on your screen is your final bill. All state permits, Fastag tolls, and driver allowances are transparently accounted for.
                </p>
            </div>

            <div class="p-6 rounded-3xl bg-slate-50 border border-slate-100 hover:border-brand-300 hover:bg-brand-50/20 hover:shadow-lg transition-all duration-300 group">
                <div class="w-12 h-12 rounded-2xl bg-blue-100 text-blue-600 flex items-center justify-center text-2xl mb-4 group-hover:scale-110 transition">
                    🛡️
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-1 font-sans">Police-Verified Chauffeurs</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Strict background vetting, valid commercial credentials, and courtesy hospitality training ensure a safe, dignified ride.
                </p>
            </div>

            <div class="p-6 rounded-3xl bg-slate-50 border border-slate-100 hover:border-brand-300 hover:bg-brand-50/20 hover:shadow-lg transition-all duration-300 group">
                <div class="w-12 h-12 rounded-2xl bg-purple-100 text-purple-600 flex items-center justify-center text-2xl mb-4 group-hover:scale-110 transition">
                    ✨
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-1 font-sans">Sanitized Fleet & Amenities</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Every car undergoes a thorough 25-point hygiene inspection, dual-zone AC check, and is equipped with bottled water.
                </p>
            </div>

        </div>

    </div>
</section>


<!-- OUR FLEET SHOWCASE -->
<section class="py-16 sm:py-20 bg-slate-50 border-b border-slate-200" x-data="{ activeFleetTab: 'all' }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="gsap-fade-up flex flex-col md:flex-row md:items-end justify-between mb-10 gap-4">
            <div>
                <span class="text-xs font-bold uppercase tracking-wider text-brand-600 bg-brand-50 px-3.5 py-1 rounded-full border border-brand-200">The Modern Fleet</span>
                <h2 class="text-3xl font-black text-slate-900 tracking-tight mt-2 font-sans">Crafted for Every Travel Requirement</h2>
                <p class="text-slate-600 text-sm mt-1">From nimble city hatchbacks to 7-seater family SUVs and executive luxury sedans.</p>
            </div>

            <!-- Filter Tabs -->
            <div class="flex items-center space-x-2 bg-white p-1.5 rounded-2xl border border-slate-200 shadow-sm overflow-x-auto">
                <button type="button" @click="activeFleetTab = 'all'" :class="activeFleetTab === 'all' ? 'bg-brand-500 text-white font-bold' : 'text-slate-600 hover:text-slate-900'" class="px-3.5 py-1.5 rounded-xl text-xs transition">All Vehicles</button>
                <button type="button" @click="activeFleetTab = 'hatchback'" :class="activeFleetTab === 'hatchback' ? 'bg-brand-500 text-white font-bold' : 'text-slate-600 hover:text-slate-900'" class="px-3.5 py-1.5 rounded-xl text-xs transition">Hatchback (Mini)</button>
                <button type="button" @click="activeFleetTab = 'sedan'" :class="activeFleetTab === 'sedan' ? 'bg-brand-500 text-white font-bold' : 'text-slate-600 hover:text-slate-900'" class="px-3.5 py-1.5 rounded-xl text-xs transition">Prime Sedan</button>
                <button type="button" @click="activeFleetTab = 'suv'" :class="activeFleetTab === 'suv' ? 'bg-brand-500 text-white font-bold' : 'text-slate-600 hover:text-slate-900'" class="px-3.5 py-1.5 rounded-xl text-xs transition">7-Seater SUV</button>
                <button type="button" @click="activeFleetTab = 'luxury'" :class="activeFleetTab === 'luxury' ? 'bg-brand-500 text-white font-bold' : 'text-slate-600 hover:text-slate-900'" class="px-3.5 py-1.5 rounded-xl text-xs transition">VIP Luxury</button>
            </div>
        </div>

        <!-- Fleet Grid -->
        <div class="gsap-stagger-cards grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <template x-for="car in window.carSuvidhaData.fleet" :key="car.id">
                <div x-show="activeFleetTab === 'all' || activeFleetTab === car.category" 
                     class="bg-white rounded-3xl border border-slate-200 overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
                    
                    <div>
                        <div class="relative h-48 bg-slate-100 overflow-hidden">
                            <img :src="car.image" :alt="car.name" class="w-full h-full object-cover object-center group-hover:scale-105 transition duration-500">
                            <span class="absolute top-3 left-3 bg-black/70 backdrop-blur-md text-white text-[11px] font-bold px-2.5 py-1 rounded-full" x-text="car.cars.split(',')[0]"></span>
                            <span class="absolute top-3 right-3 bg-amber-400 text-slate-950 text-[11px] font-extrabold px-2 py-0.5 rounded-md flex items-center">
                                ★ <span class="ml-1" x-text="car.rating"></span>
                            </span>
                        </div>

                        <div class="p-5">
                            <h3 class="font-bold text-base text-slate-900 font-sans" x-text="car.name"></h3>
                            <p class="text-xs text-slate-500 mt-1" x-text="car.tagline"></p>

                            <div class="mt-4 grid grid-cols-2 gap-2 text-[11px] text-slate-600">
                                <div class="bg-slate-50 p-2.5 rounded-xl border border-slate-100 flex items-center space-x-1.5">
                                    <span>👥</span>
                                    <span x-text="car.seats"></span>
                                </div>
                                <div class="bg-slate-50 p-2.5 rounded-xl border border-slate-100 flex items-center space-x-1.5">
                                    <span>🧳</span>
                                    <span x-text="car.luggage"></span>
                                </div>
                                <div class="bg-slate-50 p-2.5 rounded-xl border border-slate-100 flex items-center space-x-1.5">
                                    <span>❄️</span>
                                    <span x-text="car.ac"></span>
                                </div>
                                <div class="bg-slate-50 p-2.5 rounded-xl border border-slate-100 flex items-center space-x-1.5">
                                    <span>⛽</span>
                                    <span x-text="car.fuel"></span>
                                </div>
                            </div>

                            <div class="mt-4 space-y-1">
                                <template x-for="feat in car.features" :key="feat">
                                    <div class="flex items-center text-[11px] text-slate-600">
                                        <span class="text-emerald-500 font-bold mr-1.5">✓</span>
                                        <span x-text="feat"></span>
                                    </div>
                                </template>
                            </div>
                        </div>
                    </div>

                    <div class="p-5 pt-3 border-t border-slate-100 bg-slate-50/50 flex items-center justify-between">
                        <div>
                            <span class="text-[10px] text-slate-500 uppercase font-semibold">Starting from</span>
                            <div class="text-lg font-black text-slate-900 font-sans">
                                ₹<span x-text="car.perKmRate"></span><span class="text-xs font-normal text-slate-500">/km</span>
                            </div>
                        </div>

                        <a href="{{ route('contact') }}" class="px-4 py-2 rounded-xl bg-slate-900 hover:bg-brand-500 text-white font-bold text-xs transition shadow-sm">
                            Inquire Now
                        </a>
                    </div>

                </div>
            </template>
        </div>

    </div>
</section>


<!-- POPULAR OUTSTATION ROUTES -->
<section class="py-16 sm:py-20 bg-white border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="gsap-fade-up text-center max-w-2xl mx-auto mb-12">
            <span class="text-xs font-bold uppercase tracking-wider text-brand-600 bg-brand-50 px-3.5 py-1 rounded-full border border-brand-200">Guaranteed Fares</span>
            <h2 class="text-3xl font-black text-slate-900 tracking-tight mt-2 font-sans">Popular Intercity Highway Routes</h2>
            <p class="text-slate-600 text-sm mt-2">All-inclusive fixed fares with zero return fare surcharges on one-way journeys.</p>
        </div>

        <div class="gsap-stagger-cards grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <template x-for="route in window.carSuvidhaData.popularRoutes" :key="route.from + route.to">
                <div class="p-5 rounded-3xl bg-slate-50 border border-slate-200 hover:border-brand-400 hover:shadow-lg transition-all duration-300 relative group flex flex-col justify-between">
                    
                    <span class="absolute top-4 right-4 text-[10px] font-bold bg-brand-100 text-brand-700 px-2.5 py-0.5 rounded-full" x-text="route.tag"></span>

                    <div>
                        <div class="flex items-center space-x-2 text-sm font-extrabold text-slate-900 mb-1 font-sans">
                            <span x-text="route.from"></span>
                            <span class="text-brand-500">➔</span>
                            <span x-text="route.to"></span>
                        </div>
                        <div class="text-xs text-slate-500 flex items-center space-x-3 mb-4">
                            <span>🛣️ <span x-text="route.distance"></span></span>
                            <span>•</span>
                            <span>⏱️ Est. <span x-text="route.time"></span></span>
                        </div>

                        <div class="grid grid-cols-2 gap-2 bg-white p-3 rounded-2xl border border-slate-100 mb-4 text-xs">
                            <div>
                                <span class="text-slate-500 text-[11px] block">Prime Sedan All-Inc:</span>
                                <span class="font-extrabold text-slate-900 text-sm font-sans">₹<span x-text="route.sedanPrice"></span></span>
                            </div>
                            <div>
                                <span class="text-slate-500 text-[11px] block">7-Seater SUV:</span>
                                <span class="font-extrabold text-slate-900 text-sm font-sans">₹<span x-text="route.suvPrice"></span></span>
                            </div>
                        </div>
                    </div>

                    <a href="{{ route('contact') }}" class="w-full py-2.5 rounded-xl bg-slate-900 hover:bg-brand-500 text-white font-bold text-xs text-center transition">
                        Inquire Route Tariff
                    </a>

                </div>
            </template>
        </div>

    </div>
</section>


<!-- HOW IT WORKS (3 SIMPLE STEPS - Light Aesthetic Theme) -->
<section class="py-16 sm:py-20 bg-slate-50 border-b border-slate-200/80 text-slate-900 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <div class="gsap-fade-up text-center max-w-2xl mx-auto mb-14">
            <span class="text-xs font-bold uppercase tracking-wider text-brand-700 bg-white border border-brand-200 px-3.5 py-1 rounded-full shadow-xs">Frictionless Experience</span>
            <h2 class="text-3xl font-black text-slate-900 tracking-tight mt-3 font-sans">Experience Car Suvidha in 3 Seamless Steps</h2>
            <p class="text-slate-600 text-sm mt-2">Transparent, dependable, and dignified chauffeur services without complex processes.</p>
        </div>

        <div class="gsap-stagger-cards grid grid-cols-1 md:grid-cols-3 gap-8">
            
            <div class="p-7 rounded-3xl bg-white border border-slate-200/80 shadow-sm hover:shadow-xl text-center relative hover:border-brand-400 transition-all duration-300">
                <div class="w-14 h-14 rounded-2xl bg-brand-500 text-white font-black text-xl flex items-center justify-center mx-auto mb-5 shadow-lg shadow-brand-500/30 font-sans">
                    1
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-2 font-sans">Browse Services & Select Vehicle</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Explore our City, Outstation, Airport, and Rental categories with upfront transparent per-km tariffs and luggage metrics.
                </p>
            </div>

            <div class="p-7 rounded-3xl bg-white border border-slate-200/80 shadow-sm hover:shadow-xl text-center relative hover:border-amber-400 transition-all duration-300">
                <div class="w-14 h-14 rounded-2xl bg-amber-500 text-white font-black text-xl flex items-center justify-center mx-auto mb-5 shadow-lg shadow-amber-500/30 font-sans">
                    2
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-2 font-sans">Request an Instant Direct Quote</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Connect directly via our 24/7 toll-free helpline, WhatsApp, or contact form for confirmed driver availability with zero upfront charges.
                </p>
            </div>

            <div class="p-7 rounded-3xl bg-white border border-slate-200/80 shadow-sm hover:shadow-xl text-center relative hover:border-emerald-400 transition-all duration-300">
                <div class="w-14 h-14 rounded-2xl bg-emerald-500 text-white font-black text-xl flex items-center justify-center mx-auto mb-5 shadow-lg shadow-emerald-500/30 font-sans">
                    3
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-2 font-sans">Relax in Sanitized Comfort</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Your police-verified commercial chauffeur arrives punctually with an immaculate, air-conditioned cab ready to embark.
                </p>
            </div>

        </div>

    </div>
</section>


<!-- TESTIMONIALS & PASSENGER REVIEWS -->
<section class="py-16 sm:py-20 bg-white border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="gsap-fade-up text-center max-w-2xl mx-auto mb-12">
            <span class="text-xs font-bold uppercase tracking-wider text-brand-600 bg-brand-50 px-3.5 py-1 rounded-full border border-brand-200">Verified Passengers</span>
            <h2 class="text-3xl font-black text-slate-900 tracking-tight mt-2 font-sans">Trusted by Executives, Families & Tourists</h2>
        </div>

        <div class="gsap-stagger-cards grid grid-cols-1 md:grid-cols-3 gap-6">
            
            <div class="p-6 rounded-3xl bg-slate-50 border border-slate-200 flex flex-col justify-between hover:shadow-lg transition">
                <div>
                    <div class="flex text-amber-400 text-sm mb-3">★★★★★</div>
                    <p class="text-xs text-slate-700 leading-relaxed mb-4">
                        "Booked an Innova Crysta for a family trip from Delhi to Jaipur. The chauffeur arrived 10 minutes prior to pickup time, the car was spotless, and the driving was exceptionally smooth. Car Suvidha is our family’s go-to cab service!"
                    </p>
                </div>
                <div class="flex items-center space-x-3 pt-3 border-t border-slate-200">
                    <div class="w-9 h-9 rounded-full bg-brand-200 text-brand-800 font-bold flex items-center justify-center text-xs">
                        AK
                    </div>
                    <div>
                        <div class="text-xs font-bold text-slate-900 font-sans">Amit Khandelwal</div>
                        <div class="text-[10px] text-slate-500">Corporate Director, Gurugram</div>
                    </div>
                </div>
            </div>

            <div class="p-6 rounded-3xl bg-slate-50 border border-slate-200 flex flex-col justify-between hover:shadow-lg transition">
                <div>
                    <div class="flex text-amber-400 text-sm mb-3">★★★★★</div>
                    <p class="text-xs text-slate-700 leading-relaxed mb-4">
                        "I frequently commute between Mumbai and Pune for business. Car Suvidha’s one-way drop saved me nearly 45% compared to local taxis. The transparent pricing and courteous drivers are remarkable."
                    </p>
                </div>
                <div class="flex items-center space-x-3 pt-3 border-t border-slate-200">
                    <div class="w-9 h-9 rounded-full bg-emerald-200 text-emerald-800 font-bold flex items-center justify-center text-xs">
                        PS
                    </div>
                    <div>
                        <div class="text-xs font-bold text-slate-900 font-sans">Pooja Sharma</div>
                        <div class="text-[10px] text-slate-500">Senior Product Manager, Mumbai</div>
                    </div>
                </div>
            </div>

            <div class="p-6 rounded-3xl bg-slate-50 border border-slate-200 flex flex-col justify-between hover:shadow-lg transition">
                <div>
                    <div class="flex text-amber-400 text-sm mb-3">★★★★★</div>
                    <p class="text-xs text-slate-700 leading-relaxed mb-4">
                        "Hired an 8 Hours / 80 Kms hourly rental for local meetings and shopping across South Delhi. The driver was patient, knowledgeable, and assisted with luggage. Seamless booking experience!"
                    </p>
                </div>
                <div class="flex items-center space-x-3 pt-3 border-t border-slate-200">
                    <div class="w-9 h-9 rounded-full bg-blue-200 text-blue-800 font-bold flex items-center justify-center text-xs">
                        RV
                    </div>
                    <div>
                        <div class="text-xs font-bold text-slate-900 font-sans">Ramesh Verma</div>
                        <div class="text-[10px] text-slate-500">Business Consultant, New Delhi</div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>


<!-- FREQUENTLY ASKED QUESTIONS (FAQS) -->
<section class="py-16 sm:py-20 bg-slate-50" x-data="{ activeFaq: null }">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="gsap-fade-up text-center mb-10">
            <span class="text-xs font-bold uppercase tracking-wider text-brand-600 bg-brand-50 px-3.5 py-1 rounded-full border border-brand-200">Clear Answers</span>
            <h2 class="text-3xl font-black text-slate-900 tracking-tight mt-2 font-sans">Frequently Asked Questions</h2>
        </div>

        <div class="space-y-3">
            
            <div class="bg-white rounded-2xl border border-slate-200 overflow-hidden shadow-sm">
                <button type="button" @click="activeFaq = activeFaq === 1 ? null : 1" class="w-full text-left p-4 sm:p-5 flex items-center justify-between font-bold text-sm text-slate-900">
                    <span>Are Fastag tolls and state taxes included in the estimated fare?</span>
                    <span class="text-brand-500 font-bold text-lg" x-text="activeFaq === 1 ? '−' : '+'"></span>
                </button>
                <div x-show="activeFaq === 1" class="px-5 pb-5 text-xs text-slate-600 leading-relaxed border-t border-slate-100 pt-3">
                    Yes. All outstation one-way drops and pre-booked packages clearly state all-inclusive charges covering GST, driver allowances, and highway tolls, ensuring zero hidden surcharges upon arrival.
                </div>
            </div>

            <div class="bg-white rounded-2xl border border-slate-200 overflow-hidden shadow-sm">
                <button type="button" @click="activeFaq = activeFaq === 2 ? null : 2" class="w-full text-left p-4 sm:p-5 flex items-center justify-between font-bold text-sm text-slate-900">
                    <span>What is the cancellation policy if my travel plans change?</span>
                    <span class="text-brand-500 font-bold text-lg" x-text="activeFaq === 2 ? '−' : '+'"></span>
                </button>
                <div x-show="activeFaq === 2" class="px-5 pb-5 text-xs text-slate-600 leading-relaxed border-t border-slate-100 pt-3">
                    Cancellations made up to 2 hours prior to the scheduled pickup time incur zero cancellation penalties. You receive a 100% refund or free rescheduling.
                </div>
            </div>

            <div class="bg-white rounded-2xl border border-slate-200 overflow-hidden shadow-sm">
                <button type="button" @click="activeFaq = activeFaq === 3 ? null : 3" class="w-full text-left p-4 sm:p-5 flex items-center justify-between font-bold text-sm text-slate-900">
                    <span>Which payment options are supported?</span>
                    <span class="text-brand-500 font-bold text-lg" x-text="activeFaq === 3 ? '−' : '+'"></span>
                </button>
                <div x-show="activeFaq === 3" class="px-5 pb-5 text-xs text-slate-600 leading-relaxed border-t border-slate-100 pt-3">
                    We accept UPI (Google Pay, PhonePe, Paytm), Net Banking, Credit/Debit cards, corporate billing, and direct cash to the chauffeur upon ride completion. Instant digital GST receipts are delivered to your email.
                </div>
            </div>

            <div class="bg-white rounded-2xl border border-slate-200 overflow-hidden shadow-sm">
                <button type="button" @click="activeFaq = activeFaq === 4 ? null : 4" class="w-full text-left p-4 sm:p-5 flex items-center justify-between font-bold text-sm text-slate-900">
                    <span>Is nighttime outstation travel secure with Car Suvidha?</span>
                    <span class="text-brand-500 font-bold text-lg" x-text="activeFaq === 4 ? '−' : '+'"></span>
                </button>
                <div x-show="activeFaq === 4" class="px-5 pb-5 text-xs text-slate-600 leading-relaxed border-t border-slate-100 pt-3">
                    Completely secure. Every vehicle is GPS monitored 24/7 by our central command center. Passengers can share real-time tracking links with family and access an instant SOS emergency button at any point.
                </div>
            </div>

        </div>

    </div>
</section>


<!-- DRIVER PARTNER CTA BANNER -->
<section class="py-12 bg-gradient-to-r from-amber-500 via-brand-500 to-brand-600 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row items-center justify-between gap-6">
        <div>
            <span class="bg-black/20 text-white text-[11px] font-bold px-3 py-1 rounded-full uppercase tracking-wider">Chauffeur Partner Program</span>
            <h2 class="text-2xl sm:text-3xl font-black mt-2 font-sans">Attach Your Commercial Vehicle With Car Suvidha</h2>
            <p class="text-amber-100 text-sm mt-1">Join India’s premier driver network and earn up to ₹75,000 per month with daily payouts.</p>
        </div>
        <div class="flex items-center space-x-3">
            <a href="tel:18002007884" class="px-6 py-3.5 rounded-2xl bg-slate-950 text-white hover:bg-black font-extrabold text-sm shadow-xl transition">
                📞 Partner Hotline
            </a>
            <a href="{{ route('contact') }}" class="px-6 py-3.5 rounded-2xl bg-white text-slate-900 hover:bg-slate-100 font-extrabold text-sm shadow-xl transition">
                Register as Driver
            </a>
        </div>
    </div>
</section>

@endsection
