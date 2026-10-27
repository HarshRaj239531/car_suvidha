@extends('layouts.app')

@section('title', 'Our Vehicle Fleet - Suvidha Mini, Prime Sedan, 7-Seater SUV & Luxury | Car Suvidha')
@section('meta_description', 'Explore our certified, sanitized, and contemporary car fleet. Choose from compact hatchbacks, spacious Prime Sedans, Innova Crysta SUVs, and executive luxury saloons at transparent per-kilometer rates.')

@section('content')

<!-- Header Banner (Aesthetic Light Luxury Theme) -->
<div class="relative bg-gradient-to-b from-amber-50/70 via-slate-50 to-white pt-32 sm:pt-36 pb-16 sm:pb-20 border-b border-slate-200/80 overflow-hidden">
    <!-- Subtle Background Ambient Glows -->
    <div class="absolute top-10 left-1/4 w-72 h-72 rounded-full bg-brand-400/10 blur-[80px] pointer-events-none"></div>
    <div class="absolute bottom-4 right-1/4 w-80 h-80 rounded-full bg-amber-300/15 blur-[90px] pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
        <div class="inline-flex items-center space-x-2 text-xs font-bold uppercase tracking-wider text-brand-700 bg-white/90 border border-brand-200/80 px-3.5 py-1.5 rounded-full shadow-xs mb-3">
            <img src="/images/logo.png" alt="Car Suvidha" class="w-4 h-4 object-contain rounded-full">
            <span>Certified Executive Fleet</span>
        </div>
        <h1 class="text-3xl sm:text-5xl lg:text-6xl font-black tracking-tight text-slate-900 font-sans leading-tight">
            Our Fleet & <span class="bg-gradient-to-r from-brand-500 via-brand-600 to-amber-500 bg-clip-text text-transparent">Transparent Pricing</span>
        </h1>
        <p class="text-slate-600 text-sm sm:text-base max-w-2xl mx-auto mt-3 leading-relaxed font-normal">
            Engineered for every travel need. Every vehicle in our fleet is sanitized, equipped with dual-zone climate control, and piloted by certified professional chauffeurs.
        </p>
    </div>
</div>

<!-- Fleet Detailed Cards -->
<section class="py-16 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
        
        <!-- Car 1: Mini Hatchback -->
        <div class="bg-white rounded-3xl border border-slate-200 overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 grid grid-cols-1 lg:grid-cols-12">
            <div class="lg:col-span-5 relative bg-slate-100 min-h-[260px]">
                <img src="/images/compact.jpg" alt="Suvidha Mini Hatchback" class="w-full h-full object-cover">
                <span class="absolute top-4 left-4 bg-black/70 backdrop-blur text-white text-xs font-bold px-3 py-1 rounded-full">Mini City Ride</span>
            </div>
            <div class="lg:col-span-7 p-6 sm:p-8 flex flex-col justify-between">
                <div>
                    <div class="flex items-center justify-between mb-2">
                        <h2 class="text-2xl font-black text-slate-900">Suvidha Mini (Hatchback)</h2>
                        <span class="text-amber-500 font-extrabold text-sm">★ 4.85 Rating</span>
                    </div>
                    <p class="text-xs text-slate-500 mb-4">Maruti WagonR, Tata Tiago, Maruti Celerio or equivalent</p>
                    
                    <p class="text-sm text-slate-600 leading-relaxed mb-6">
                        The ultimate choice for everyday urban commuting, metro station transfers, and quick point-to-point city trips. Compact exterior enables effortless maneuvering through busy traffic.
                    </p>

                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 text-xs text-slate-700 mb-6">
                        <div class="bg-slate-50 p-3 rounded-2xl border border-slate-100">
                            <span class="text-slate-400 block text-[10px] uppercase">Capacity</span>
                            <span class="font-extrabold text-slate-900">4 Passengers</span>
                        </div>
                        <div class="bg-slate-50 p-3 rounded-2xl border border-slate-100">
                            <span class="text-slate-400 block text-[10px] uppercase">Luggage</span>
                            <span class="font-extrabold text-slate-900">2 Medium Bags</span>
                        </div>
                        <div class="bg-slate-50 p-3 rounded-2xl border border-slate-100">
                            <span class="text-slate-400 block text-[10px] uppercase">Air Conditioning</span>
                            <span class="font-extrabold text-slate-900">Dual-Zone AC</span>
                        </div>
                        <div class="bg-slate-50 p-3 rounded-2xl border border-slate-100">
                            <span class="text-slate-400 block text-[10px] uppercase">Powertrain</span>
                            <span class="font-extrabold text-slate-900">Petrol / CNG</span>
                        </div>
                    </div>
                </div>

                <div class="pt-5 border-t border-slate-100 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
                    <div>
                        <span class="text-xs text-slate-500">Standard Tariff:</span>
                        <div class="text-2xl font-black text-slate-900">₹11 <span class="text-xs font-normal text-slate-500">/ km (Base ₹149)</span></div>
                    </div>
                    <a href="{{ route('contact') }}" class="px-6 py-3 rounded-xl bg-brand-500 hover:bg-brand-600 text-white font-bold text-sm shadow-md transition">
                        Inquire About Mini
                    </a>
                </div>
            </div>
        </div>

        <!-- Car 2: Prime Sedan -->
        <div class="bg-white rounded-3xl border border-brand-200 ring-2 ring-brand-500/10 overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 grid grid-cols-1 lg:grid-cols-12 relative">
            <span class="absolute top-4 right-4 z-10 bg-brand-500 text-white text-[11px] font-extrabold px-3 py-1 rounded-full uppercase tracking-wider shadow">Most Popular</span>
            
            <div class="lg:col-span-5 relative bg-slate-100 min-h-[260px]">
                <img src="/images/sedan.jpg" alt="Suvidha Prime Sedan" class="w-full h-full object-cover">
                <span class="absolute top-4 left-4 bg-black/70 backdrop-blur text-white text-xs font-bold px-3 py-1 rounded-full">Executive Comfort</span>
            </div>
            <div class="lg:col-span-7 p-6 sm:p-8 flex flex-col justify-between">
                <div>
                    <div class="flex items-center justify-between mb-2">
                        <h2 class="text-2xl font-black text-slate-900">Suvidha Prime (Sedan)</h2>
                        <span class="text-amber-500 font-extrabold text-sm">★ 4.92 Rating</span>
                    </div>
                    <p class="text-xs text-slate-500 mb-4">Maruti Dzire, Honda Amaze, Hyundai Aura or equivalent</p>
                    
                    <p class="text-sm text-slate-600 leading-relaxed mb-6">
                        Our highest-rated category for corporate transfers, airport shuttles, and intercity travel. Offers superior rear legroom, generous boot space, and whisper-quiet cabin insulation.
                    </p>

                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 text-xs text-slate-700 mb-6">
                        <div class="bg-slate-50 p-3 rounded-2xl border border-slate-100">
                            <span class="text-slate-400 block text-[10px] uppercase">Capacity</span>
                            <span class="font-extrabold text-slate-900">4 Passengers</span>
                        </div>
                        <div class="bg-slate-50 p-3 rounded-2xl border border-slate-100">
                            <span class="text-slate-400 block text-[10px] uppercase">Luggage</span>
                            <span class="font-extrabold text-slate-900">3 Large Suitcases</span>
                        </div>
                        <div class="bg-slate-50 p-3 rounded-2xl border border-slate-100">
                            <span class="text-slate-400 block text-[10px] uppercase">Air Conditioning</span>
                            <span class="font-extrabold text-slate-900">Automatic Climate Control</span>
                        </div>
                        <div class="bg-slate-50 p-3 rounded-2xl border border-slate-100">
                            <span class="text-slate-400 block text-[10px] uppercase">Complimentary</span>
                            <span class="font-extrabold text-emerald-600">High-Speed WiFi & Water</span>
                        </div>
                    </div>
                </div>

                <div class="pt-5 border-t border-slate-100 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
                    <div>
                        <span class="text-xs text-slate-500">Standard Tariff:</span>
                        <div class="text-2xl font-black text-slate-900">₹14 <span class="text-xs font-normal text-slate-500">/ km (Base ₹249)</span></div>
                    </div>
                    <a href="{{ route('contact') }}" class="px-6 py-3 rounded-xl bg-brand-500 hover:bg-brand-600 text-white font-bold text-sm shadow-md transition">
                        Inquire About Prime
                    </a>
                </div>
            </div>
        </div>

        <!-- Car 3: 7-Seater SUV -->
        <div class="bg-white rounded-3xl border border-slate-200 overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 grid grid-cols-1 lg:grid-cols-12">
            <div class="lg:col-span-5 relative bg-slate-100 min-h-[260px]">
                <img src="/images/suv.jpg" alt="Suvidha XL 7-Seater SUV" class="w-full h-full object-cover">
                <span class="absolute top-4 left-4 bg-black/70 backdrop-blur text-white text-xs font-bold px-3 py-1 rounded-full">Spacious 7-Seater</span>
            </div>
            <div class="lg:col-span-7 p-6 sm:p-8 flex flex-col justify-between">
                <div>
                    <div class="flex items-center justify-between mb-2">
                        <h2 class="text-2xl font-black text-slate-900">Suvidha XL (7-Seater SUV)</h2>
                        <span class="text-amber-500 font-extrabold text-sm">★ 4.96 Rating</span>
                    </div>
                    <p class="text-xs text-slate-500 mb-4">Toyota Innova Crysta, Maruti Ertiga, Kia Carens</p>
                    
                    <p class="text-sm text-slate-600 leading-relaxed mb-6">
                        Designed for extended family vacations, group weekend tours, and highway outstation road trips. Features dedicated roof AC vents, push-back reclining captain seats, and exceptional suspension.
                    </p>

                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 text-xs text-slate-700 mb-6">
                        <div class="bg-slate-50 p-3 rounded-2xl border border-slate-100">
                            <span class="text-slate-400 block text-[10px] uppercase">Capacity</span>
                            <span class="font-extrabold text-slate-900">6 - 7 Adults</span>
                        </div>
                        <div class="bg-slate-50 p-3 rounded-2xl border border-slate-100">
                            <span class="text-slate-400 block text-[10px] uppercase">Luggage</span>
                            <span class="font-extrabold text-slate-900">5+ Large Bags</span>
                        </div>
                        <div class="bg-slate-50 p-3 rounded-2xl border border-slate-100">
                            <span class="text-slate-400 block text-[10px] uppercase">Air Conditioning</span>
                            <span class="font-extrabold text-slate-900">Tri-Zone Rear AC</span>
                        </div>
                        <div class="bg-slate-50 p-3 rounded-2xl border border-slate-100">
                            <span class="text-slate-400 block text-[10px] uppercase">Highway Safety</span>
                            <span class="font-extrabold text-emerald-600">6 Airbags & ABS</span>
                        </div>
                    </div>
                </div>

                <div class="pt-5 border-t border-slate-100 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
                    <div>
                        <span class="text-xs text-slate-500">Standard Tariff:</span>
                        <div class="text-2xl font-black text-slate-900">₹18 <span class="text-xs font-normal text-slate-500">/ km (Base ₹399)</span></div>
                    </div>
                    <a href="{{ route('contact') }}" class="px-6 py-3 rounded-xl bg-brand-500 hover:bg-brand-600 text-white font-bold text-sm shadow-md transition">
                        Inquire About XL SUV
                    </a>
                </div>
            </div>
        </div>

        <!-- Car 4: Luxury Executive -->
        <div class="bg-white rounded-3xl border border-slate-200 overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 grid grid-cols-1 lg:grid-cols-12">
            <div class="lg:col-span-5 relative bg-slate-100 min-h-[260px]">
                <img src="/images/luxury.jpg" alt="Suvidha Executive Luxury" class="w-full h-full object-cover">
                <span class="absolute top-4 left-4 bg-brand-500 text-white text-xs font-bold px-3 py-1 rounded-full">VIP Chauffeur</span>
            </div>
            <div class="lg:col-span-7 p-6 sm:p-8 flex flex-col justify-between">
                <div>
                    <div class="flex items-center justify-between mb-2">
                        <h2 class="text-2xl font-black text-slate-900">Suvidha Executive (Luxury)</h2>
                        <span class="text-amber-500 font-extrabold text-sm">★ 5.0 Rating</span>
                    </div>
                    <p class="text-xs text-slate-500 mb-4">Mercedes-Benz E-Class, BMW 5-Series, Audi A6</p>
                    
                    <p class="text-sm text-slate-600 leading-relaxed mb-6">
                        Exclusive chauffeured luxury for diplomatic visits, corporate summits, high-profile weddings, and VIP arrivals. Accompanied by suited, English-speaking executive chauffeurs.
                    </p>

                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 text-xs text-slate-700 mb-6">
                        <div class="bg-slate-50 p-3 rounded-2xl border border-slate-100">
                            <span class="text-slate-400 block text-[10px] uppercase">Capacity</span>
                            <span class="font-extrabold text-slate-900">4 Passengers</span>
                        </div>
                        <div class="bg-slate-50 p-3 rounded-2xl border border-slate-100">
                            <span class="text-slate-400 block text-[10px] uppercase">Interior</span>
                            <span class="font-extrabold text-slate-900">Nappa Leather Recliners</span>
                        </div>
                        <div class="bg-slate-50 p-3 rounded-2xl border border-slate-100">
                            <span class="text-slate-400 block text-[10px] uppercase">Acoustics</span>
                            <span class="font-extrabold text-slate-900">Burmester Premium Audio</span>
                        </div>
                        <div class="bg-slate-50 p-3 rounded-2xl border border-slate-100">
                            <span class="text-slate-400 block text-[10px] uppercase">Chauffeur</span>
                            <span class="font-extrabold text-brand-600">Suited & Vetted</span>
                        </div>
                    </div>
                </div>

                <div class="pt-5 border-t border-slate-100 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
                    <div>
                        <span class="text-xs text-slate-500">Standard Tariff:</span>
                        <div class="text-2xl font-black text-slate-900">₹35 <span class="text-xs font-normal text-slate-500">/ km (Base ₹999)</span></div>
                    </div>
                    <a href="{{ route('contact') }}" class="px-6 py-3 rounded-xl bg-slate-950 hover:bg-brand-600 text-white font-bold text-sm shadow-md transition">
                        Inquire VIP Luxury
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>

@endsection
