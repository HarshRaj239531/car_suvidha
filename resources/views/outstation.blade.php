@extends('layouts.app')

@section('title', 'Intercity Outstation Cabs & One-Way Drops | Car Suvidha')
@section('meta_description', 'Book intercity outstation cabs with Car Suvidha. Pay only for one-way drops or enjoy discounted round trips across 45+ cities with certified highway chauffeurs.')

@section('content')

<!-- Header Banner (Aesthetic Light Luxury Theme) -->
<div class="relative bg-gradient-to-b from-emerald-50/60 via-slate-50 to-white pt-32 sm:pt-36 pb-16 sm:pb-20 border-b border-slate-200/80 overflow-hidden">
    <!-- Subtle Background Ambient Glows -->
    <div class="absolute top-10 left-1/4 w-72 h-72 rounded-full bg-emerald-400/10 blur-[80px] pointer-events-none"></div>
    <div class="absolute bottom-4 right-1/4 w-80 h-80 rounded-full bg-amber-300/15 blur-[90px] pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
        <div class="inline-flex items-center space-x-2 text-xs font-bold uppercase tracking-wider text-emerald-800 bg-white/90 border border-emerald-200/80 px-3.5 py-1.5 rounded-full shadow-xs mb-3">
            <img src="/images/logo.png" alt="Car Suvidha" class="w-4 h-4 object-contain rounded-full">
            <span>One-Way Drops & Round Trips</span>
        </div>
        <h1 class="text-3xl sm:text-5xl lg:text-6xl font-black tracking-tight text-slate-900 font-sans leading-tight">
            Intercity <span class="bg-gradient-to-r from-emerald-600 via-teal-600 to-emerald-700 bg-clip-text text-transparent">Outstation Cabs</span>
        </h1>
        <p class="text-slate-600 text-sm sm:text-base max-w-2xl mx-auto mt-3 leading-relaxed font-normal">
            Highway travel redefined. Pay exclusively for your one-way journey without unfair return fare charges, or book flexible round-trips.
        </p>
    </div>
</div>

<!-- Comparison: One-Way vs Round Trip -->
<section class="py-16 bg-white border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            
            <div class="p-8 rounded-3xl bg-slate-50 border border-slate-200 relative">
                <span class="text-xs font-bold uppercase tracking-wider text-brand-600 bg-brand-100 px-3 py-1 rounded-full font-bold">Save up to 45%</span>
                <h2 class="text-2xl font-black text-slate-900 mt-3 mb-2 font-sans">One-Way Intercity Drop</h2>
                <p class="text-xs text-slate-600 mb-6 leading-relaxed">
                    Why pay for a round trip when you only need to travel in one direction? With Car Suvidha, you pay solely for the distance between your pickup and drop location.
                </p>

                <ul class="space-y-3 text-xs text-slate-700 mb-8">
                    <li class="flex items-center"><span class="text-emerald-500 font-bold mr-2">✓</span> Zero return toll or empty-return penalties</li>
                    <li class="flex items-center"><span class="text-emerald-500 font-bold mr-2">✓</span> Doorstep pickup and exact address drop-off</li>
                    <li class="flex items-center"><span class="text-emerald-500 font-bold mr-2">✓</span> Certified highway chauffeurs with route expertise</li>
                    <li class="flex items-center"><span class="text-emerald-500 font-bold mr-2">✓</span> 24/7 central command telemetry & SOS tracking</li>
                </ul>

                <a href="{{ route('contact') }}" class="inline-block w-full text-center py-3.5 rounded-xl bg-brand-500 hover:bg-brand-600 text-white font-extrabold text-sm shadow-md transition">
                    Inquire One-Way Cab
                </a>
            </div>

            <div class="p-8 rounded-3xl bg-slate-50 border border-slate-200 relative">
                <span class="text-xs font-bold uppercase tracking-wider text-emerald-600 bg-emerald-100 px-3 py-1 rounded-full font-bold">Vacations & Extended Tours</span>
                <h2 class="text-2xl font-black text-slate-900 mt-3 mb-2 font-sans">Round-Trip & Multi-City Tour</h2>
                <p class="text-xs text-slate-600 mb-6 leading-relaxed">
                    Ideal for family holidays, weekend road trips, or multi-city corporate meetings. Your assigned chauffeur and vehicle remain with you throughout your stay.
                </p>

                <ul class="space-y-3 text-xs text-slate-700 mb-8">
                    <li class="flex items-center"><span class="text-emerald-500 font-bold mr-2">✓</span> Unlimited en-route stops and spontaneous sightseeing</li>
                    <li class="flex items-center"><span class="text-emerald-500 font-bold mr-2">✓</span> Chauffeur stays dedicated at your service throughout</li>
                    <li class="flex items-center"><span class="text-emerald-500 font-bold mr-2">✓</span> Flexible day extensions with transparent per-day pricing</li>
                    <li class="flex items-center"><span class="text-emerald-500 font-bold mr-2">✓</span> Flat ₹300 nightly driver allowance included</li>
                </ul>

                <a href="{{ route('contact') }}" class="inline-block w-full text-center py-3.5 rounded-xl bg-slate-900 hover:bg-brand-600 text-white font-extrabold text-sm shadow-md transition">
                    Inquire Round-Trip
                </a>
            </div>

        </div>

    </div>
</section>

<!-- Route Tariff Table -->
<section class="py-16 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-2xl mx-auto mb-12">
            <span class="text-xs font-bold uppercase tracking-wider text-brand-600 bg-brand-50 px-3.5 py-1 rounded-full border border-brand-200">Guaranteed Pricing</span>
            <h2 class="text-3xl font-black text-slate-900 tracking-tight mt-2 font-sans">Popular Route Tariff Matrix</h2>
            <p class="text-slate-600 text-sm mt-2">All rates include state permits, Fastag highway tolls, and driver charges.</p>
        </div>

        <div class="bg-white rounded-3xl border border-slate-200 shadow-sm overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-left text-xs sm:text-sm">
                    <thead class="bg-slate-100 text-slate-700 font-bold text-xs uppercase tracking-wider border-b border-slate-200">
                        <tr>
                            <th class="py-4 px-6">Route (City to Destination)</th>
                            <th class="py-4 px-6">Est. Distance & Duration</th>
                            <th class="py-4 px-6">Prime Sedan (Dzire / Amaze)</th>
                            <th class="py-4 px-6">7-Seater SUV (Ertiga / Innova)</th>
                            <th class="py-4 px-6 text-right">Action</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100 font-medium text-slate-800">
                        <tr class="hover:bg-slate-50/80 transition">
                            <td class="py-4 px-6 font-bold flex items-center space-x-2">
                                <span>Delhi NCR</span> <span class="text-brand-500">➔</span> <span>Agra (Taj Expressway)</span>
                            </td>
                            <td class="py-4 px-6 text-slate-500">210 km (3.5 hrs)</td>
                            <td class="py-4 px-6 font-extrabold text-slate-900">₹2,499</td>
                            <td class="py-4 px-6 font-extrabold text-slate-900">₹3,499</td>
                            <td class="py-4 px-6 text-right">
                                <a href="{{ route('contact') }}" class="px-4 py-1.5 rounded-lg bg-brand-500 hover:bg-brand-600 text-white font-bold text-xs shadow-sm">Inquire</a>
                            </td>
                        </tr>
                        <tr class="hover:bg-slate-50/80 transition">
                            <td class="py-4 px-6 font-bold flex items-center space-x-2">
                                <span>Delhi NCR</span> <span class="text-brand-500">➔</span> <span>Jaipur (Pink City)</span>
                            </td>
                            <td class="py-4 px-6 text-slate-500">270 km (4.5 hrs)</td>
                            <td class="py-4 px-6 font-extrabold text-slate-900">₹2,899</td>
                            <td class="py-4 px-6 font-extrabold text-slate-900">₹3,899</td>
                            <td class="py-4 px-6 text-right">
                                <a href="{{ route('contact') }}" class="px-4 py-1.5 rounded-lg bg-brand-500 hover:bg-brand-600 text-white font-bold text-xs shadow-sm">Inquire</a>
                            </td>
                        </tr>
                        <tr class="hover:bg-slate-50/80 transition">
                            <td class="py-4 px-6 font-bold flex items-center space-x-2">
                                <span>Mumbai</span> <span class="text-brand-500">➔</span> <span>Pune Expressway</span>
                            </td>
                            <td class="py-4 px-6 text-slate-500">150 km (2.8 hrs)</td>
                            <td class="py-4 px-6 font-extrabold text-slate-900">₹2,199</td>
                            <td class="py-4 px-6 font-extrabold text-slate-900">₹2,999</td>
                            <td class="py-4 px-6 text-right">
                                <a href="{{ route('contact') }}" class="px-4 py-1.5 rounded-lg bg-brand-500 hover:bg-brand-600 text-white font-bold text-xs shadow-sm">Inquire</a>
                            </td>
                        </tr>
                        <tr class="hover:bg-slate-50/80 transition">
                            <td class="py-4 px-6 font-bold flex items-center space-x-2">
                                <span>Bengaluru</span> <span class="text-brand-500">➔</span> <span>Mysuru Palace</span>
                            </td>
                            <td class="py-4 px-6 text-slate-500">145 km (2.5 hrs)</td>
                            <td class="py-4 px-6 font-extrabold text-slate-900">₹2,299</td>
                            <td class="py-4 px-6 font-extrabold text-slate-900">₹3,199</td>
                            <td class="py-4 px-6 text-right">
                                <a href="{{ route('contact') }}" class="px-4 py-1.5 rounded-lg bg-brand-500 hover:bg-brand-600 text-white font-bold text-xs shadow-sm">Inquire</a>
                            </td>
                        </tr>
                        <tr class="hover:bg-slate-50/80 transition">
                            <td class="py-4 px-6 font-bold flex items-center space-x-2">
                                <span>Chandigarh</span> <span class="text-brand-500">➔</span> <span>Shimla Mall Road</span>
                            </td>
                            <td class="py-4 px-6 text-slate-500">115 km (3.5 hrs)</td>
                            <td class="py-4 px-6 font-extrabold text-slate-900">₹2,499</td>
                            <td class="py-4 px-6 font-extrabold text-slate-900">₹3,599</td>
                            <td class="py-4 px-6 text-right">
                                <a href="{{ route('contact') }}" class="px-4 py-1.5 rounded-lg bg-brand-500 hover:bg-brand-600 text-white font-bold text-xs shadow-sm">Inquire</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</section>

@endsection
