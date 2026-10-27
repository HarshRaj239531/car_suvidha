@extends('layouts.app')

@section('title', 'About Us - The Car Suvidha Philosophy & Mission')
@section('meta_description', 'Discover the story behind Car Suvidha. Founded to establish safety, transparency, and dignity in chauffeur-driven mobility across India.')

@section('content')

<!-- Header Banner (Aesthetic Light Luxury Theme) -->
<div class="relative bg-gradient-to-b from-amber-50/70 via-slate-50 to-white pt-32 sm:pt-36 pb-16 sm:pb-20 border-b border-slate-200/80 overflow-hidden">
    <!-- Subtle Background Ambient Glows -->
    <div class="absolute top-10 left-1/4 w-72 h-72 rounded-full bg-brand-400/10 blur-[80px] pointer-events-none"></div>
    <div class="absolute bottom-4 right-1/4 w-80 h-80 rounded-full bg-amber-300/15 blur-[90px] pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
        <div class="inline-flex items-center space-x-2 text-xs font-bold uppercase tracking-wider text-brand-700 bg-white/90 border border-brand-200/80 px-3.5 py-1.5 rounded-full shadow-xs mb-3">
            <img src="/images/logo.png" alt="Car Suvidha" class="w-4 h-4 object-contain rounded-full">
            <span>Our Heritage & Purpose</span>
        </div>
        <h1 class="text-3xl sm:text-5xl lg:text-6xl font-black tracking-tight text-slate-900 font-sans leading-tight">
            The Car <span class="bg-gradient-to-r from-brand-500 via-brand-600 to-amber-500 bg-clip-text text-transparent">Suvidha Story</span>
        </h1>
        <p class="text-slate-600 text-sm sm:text-base max-w-2xl mx-auto mt-3 leading-relaxed font-normal">
            Pioneering a higher standard of Indian ground mobility with certified chauffeurs, guaranteed on-time arrivals, and total billing transparency.
        </p>
    </div>
</div>

<!-- Stats Counter Grid with GSAP Counters -->
<section class="py-12 bg-white border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="gsap-stagger-cards grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
            <div class="p-4 rounded-2xl bg-slate-50 border border-slate-100">
                <div class="gsap-counter text-3xl sm:text-4xl font-black text-brand-500 font-sans" data-target="50000" data-suffix="+">50,000+</div>
                <div class="text-xs font-bold text-slate-700 mt-1 uppercase tracking-wider">Completed Journeys</div>
            </div>
            <div class="p-4 rounded-2xl bg-slate-50 border border-slate-100">
                <div class="gsap-counter text-3xl sm:text-4xl font-black text-slate-900 font-sans" data-target="1200" data-suffix="+">1,200+</div>
                <div class="text-xs font-bold text-slate-700 mt-1 uppercase tracking-wider">Verified Chauffeurs</div>
            </div>
            <div class="p-4 rounded-2xl bg-slate-50 border border-slate-100">
                <div class="gsap-counter text-3xl sm:text-4xl font-black text-emerald-500 font-sans" data-target="45" data-suffix="+">45+</div>
                <div class="text-xs font-bold text-slate-700 mt-1 uppercase tracking-wider">Cities Network</div>
            </div>
            <div class="p-4 rounded-2xl bg-slate-50 border border-slate-100">
                <div class="gsap-counter text-3xl sm:text-4xl font-black text-amber-500 font-sans" data-target="4.9" data-suffix=" ★">4.9 ★</div>
                <div class="text-xs font-bold text-slate-700 mt-1 uppercase tracking-wider">Average User Rating</div>
            </div>
        </div>
    </div>
</section>

<!-- Mission & Vision -->
<section class="py-16 sm:py-20 bg-slate-50 border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="flex items-center space-x-3 mb-4">
                    <div class="w-12 h-12 rounded-full bg-white p-1 border border-slate-200 shadow-sm flex items-center justify-center shrink-0">
                        <img src="/images/logo.png" alt="Car Suvidha Logo" class="w-full h-full object-contain rounded-full">
                    </div>
                    <span class="text-xs font-bold uppercase tracking-wider text-brand-600 bg-brand-50 px-3.5 py-1.5 rounded-full border border-brand-200">Our Vision & Identity</span>
                </div>
                <h2 class="text-3xl font-black text-slate-900 tracking-tight mb-5 font-sans">Redefining 'Convenience' in Ground Travel</h2>
                <p class="text-slate-600 text-sm leading-relaxed mb-4">
                    For years, booking a cab meant wrestling with unpredictable cancellations, sudden 2x surge pricing when you needed a car most, or receiving unkempt vehicles with unfamiliar drivers.
                </p>
                <p class="text-slate-600 text-sm leading-relaxed mb-6">
                    <strong>Car Suvidha</strong> was built to eliminate this friction entirely. We introduce strict <strong>zero-surge pricing</strong> on pre-booked rides, comprehensive 25-point vehicle hygiene protocols, and courteous background-verified chauffeurs to ensure every ride is peaceful and dignified.
                </p>

                <div class="space-y-3">
                    <div class="flex items-start space-x-3">
                        <div class="w-6 h-6 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center text-xs font-bold mt-0.5">✓</div>
                        <div class="text-xs text-slate-700">
                            <strong>Transparent Billing:</strong> Your booking quote is always the exact invoice amount. No surprise toll or night fee surcharges.
                        </div>
                    </div>
                    <div class="flex items-start space-x-3">
                        <div class="w-6 h-6 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center text-xs font-bold mt-0.5">✓</div>
                        <div class="text-xs text-slate-700">
                            <strong>Chauffeur Integrity:</strong> Criminal record screening, professional etiquette certification, and commercial licensing tests.
                        </div>
                    </div>
                    <div class="flex items-start space-x-3">
                        <div class="w-6 h-6 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center text-xs font-bold mt-0.5">✓</div>
                        <div class="text-xs text-slate-700">
                            <strong>24/7 Human Support:</strong> Immediate access to our dedicated live dispatch and support staff on every journey.
                        </div>
                    </div>
                </div>
            </div>

            <div class="gsap-fade-up rounded-3xl overflow-hidden shadow-2xl border border-slate-200 bg-slate-100">
                <img src="/images/hero-car.jpg" alt="Car Suvidha Fleet Fleet" class="w-full h-full object-cover">
            </div>
        </div>
    </div>
</section>

<!-- Safety Pledge Checklist -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center max-w-3xl">
        <div class="gsap-fade-up">
            <span class="text-xs font-bold uppercase tracking-wider text-emerald-600 bg-emerald-50 px-3.5 py-1 rounded-full border border-emerald-200">Safety First</span>
            <h2 class="text-3xl font-black text-slate-900 tracking-tight mt-2 mb-4 font-sans">Our 4-Point Safety & Hygiene Pledge</h2>
            <p class="text-slate-600 text-sm mb-10">Your security, comfort, and wellbeing are embedded into every operational process.</p>
        </div>

        <div class="gsap-stagger-cards grid grid-cols-1 sm:grid-cols-2 gap-4 text-left">
            <div class="p-5 rounded-2xl bg-slate-50 border border-slate-200 hover:border-brand-300 transition">
                <div class="text-xl mb-2">📡</div>
                <h3 class="font-bold text-slate-900 text-sm font-sans">Real-time Satellite Telemetry</h3>
                <p class="text-xs text-slate-600 mt-1">Every vehicle is monitored by central telemetry for automated route deviation and SOS alerts.</p>
            </div>
            <div class="p-5 rounded-2xl bg-slate-50 border border-slate-200 hover:border-brand-300 transition">
                <div class="text-xl mb-2">🔐</div>
                <h3 class="font-bold text-slate-900 text-sm font-sans">Ride-Start OTP Verification</h3>
                <p class="text-xs text-slate-600 mt-1">A journey cannot commence until your secure 4-digit OTP is validated by the driver in-app.</p>
            </div>
            <div class="p-5 rounded-2xl bg-slate-50 border border-slate-200 hover:border-brand-300 transition">
                <div class="text-xl mb-2">🧼</div>
                <h3 class="font-bold text-slate-900 text-sm font-sans">Clinical Sanitization</h3>
                <p class="text-xs text-slate-600 mt-1">High-touch contact areas, door levers, upholstery, and climate filters are sanitized prior to every pickup.</p>
            </div>
            <div class="p-5 rounded-2xl bg-slate-50 border border-slate-200 hover:border-brand-300 transition">
                <div class="text-xl mb-2">🚨</div>
                <h3 class="font-bold text-slate-900 text-sm font-sans">Dedicated Emergency SOS</h3>
                <p class="text-xs text-slate-600 mt-1">Instant 1-touch connection to police emergency services and our 24/7 command center.</p>
            </div>
        </div>
    </div>
</section>

@endsection
