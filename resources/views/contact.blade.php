@extends('layouts.app')

@section('title', 'Contact Us & 24/7 Concierge Support | Car Suvidha')
@section('meta_description', 'Get in touch with Car Suvidha. 24/7 customer concierge helpline, corporate fleet partnerships, chauffeur onboarding inquiries, and regional office locations.')

@section('content')

<!-- Header Banner (Aesthetic Light Luxury Theme) -->
<div class="relative bg-gradient-to-b from-amber-50/70 via-slate-50 to-white pt-32 sm:pt-36 pb-16 sm:pb-20 border-b border-slate-200/80 overflow-hidden">
    <!-- Subtle Background Ambient Glows -->
    <div class="absolute top-10 left-1/4 w-72 h-72 rounded-full bg-brand-400/10 blur-[80px] pointer-events-none"></div>
    <div class="absolute bottom-4 right-1/4 w-80 h-80 rounded-full bg-amber-300/15 blur-[90px] pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
        <div class="inline-flex items-center space-x-2 text-xs font-bold uppercase tracking-wider text-brand-700 bg-white/90 border border-brand-200/80 px-3.5 py-1.5 rounded-full shadow-xs mb-3">
            <img src="/images/logo.png" alt="Car Suvidha" class="w-4 h-4 object-contain rounded-full">
            <span>24/7 Dedicated Concierge</span>
        </div>
        <h1 class="text-3xl sm:text-5xl lg:text-6xl font-black tracking-tight text-slate-900 font-sans leading-tight">
            Contact & <span class="bg-gradient-to-r from-brand-500 via-brand-600 to-amber-500 bg-clip-text text-transparent">Customer Support</span>
        </h1>
        <p class="text-slate-600 text-sm sm:text-base max-w-2xl mx-auto mt-3 leading-relaxed font-normal">
            Reach out for ride assistance, corporate transportation contracts, wedding fleet requirements, or chauffeur partnerships.
        </p>
    </div>
</div>

<section class="py-16 bg-slate-50" x-data="{ 
    name: '', 
    phone: '', 
    email: '', 
    subject: 'general', 
    message: '', 
    submitted: false,
    sendMessage() {
        if(!this.name || !this.phone) {
            alert('Please provide both your name and contact number.');
            return;
        }
        this.submitted = true;
    }
}">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10">
            
            <!-- Left Column: Helpline & Regional Hubs -->
            <div class="lg:col-span-5 space-y-6">
                
                <!-- Direct Support Card -->
                <div class="p-6 sm:p-8 rounded-3xl bg-white border border-slate-200 shadow-sm space-y-5">
                    <div class="flex items-center space-x-3.5 pb-4 border-b border-slate-100">
                        <div class="w-12 h-12 rounded-full bg-white p-1 border border-slate-200 shadow-sm flex items-center justify-center shrink-0">
                            <img src="/images/logo.png" alt="Car Suvidha Logo" class="w-full h-full object-contain rounded-full">
                        </div>
                        <div>
                            <h2 class="text-xl font-black text-slate-900 font-sans leading-tight">Car Suvidha Concierge</h2>
                            <span class="text-xs text-slate-500 font-medium">Dedicated Corporate & Passenger Support</span>
                        </div>
                    </div>

                    <div class="flex items-start space-x-3.5">
                        <div class="w-10 h-10 rounded-xl bg-brand-100 text-brand-600 flex items-center justify-center text-lg mt-0.5">
                            📞
                        </div>
                        <div>
                            <span class="text-xs font-bold text-slate-500 uppercase">Toll-Free Phone (24/7)</span>
                            <a href="tel:18002007884" class="block text-lg font-black text-slate-900 hover:text-brand-600 transition">
                                1800-200-SUVIDHA
                            </a>
                            <span class="text-xs text-emerald-600 font-semibold">Toll-free across all Indian operators</span>
                        </div>
                    </div>

                    <div class="flex items-start space-x-3.5">
                        <div class="w-10 h-10 rounded-xl bg-emerald-100 text-emerald-600 flex items-center justify-center text-lg mt-0.5">
                            💬
                        </div>
                        <div>
                            <span class="text-xs font-bold text-slate-500 uppercase">WhatsApp Concierge</span>
                            <a href="https://wa.me/919876543210" target="_blank" class="block text-base font-black text-slate-900 hover:text-emerald-600 transition">
                                +91 98765 43210
                            </a>
                            <span class="text-xs text-slate-500">Instant ride tracking assistance & updates</span>
                        </div>
                    </div>

                    <div class="flex items-start space-x-3.5">
                        <div class="w-10 h-10 rounded-xl bg-blue-100 text-blue-600 flex items-center justify-center text-lg mt-0.5">
                            ✉️
                        </div>
                        <div>
                            <span class="text-xs font-bold text-slate-500 uppercase">Email Inquiries</span>
                            <a href="mailto:support@carsuvidha.in" class="block text-base font-black text-slate-900 hover:text-blue-600 transition">
                                support@carsuvidha.in
                            </a>
                            <span class="text-xs text-slate-500">Guaranteed response within 2 hours</span>
                        </div>
                    </div>
                </div>

                <!-- Regional Operations Hubs -->
                <div class="p-6 sm:p-8 rounded-3xl bg-white border border-slate-200 shadow-sm">
                    <h3 class="text-base font-bold text-slate-900 mb-4 font-sans">Regional Operations Hubs</h3>
                    
                    <div class="space-y-4 text-xs text-slate-600">
                        <div class="border-b border-slate-100 pb-3">
                            <strong class="text-slate-900 block text-sm">Delhi NCR Corporate Headquarters</strong>
                            <p class="mt-0.5">Level 4, Cyber City Tower B, DLF Phase 2, Gurugram, Haryana - 122002</p>
                        </div>
                        <div class="border-b border-slate-100 pb-3">
                            <strong class="text-slate-900 block text-sm">Mumbai Regional Operations</strong>
                            <p class="mt-0.5">Platina, Bandra Kurla Complex (BKC), Bandra East, Mumbai - 400051</p>
                        </div>
                        <div>
                            <strong class="text-slate-900 block text-sm">Bengaluru Technology Center</strong>
                            <p class="mt-0.5">100 Feet Road, Indiranagar, Bengaluru, Karnataka - 560038</p>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Right Column: Interactive Inquiry Form -->
            <div class="lg:col-span-7">
                <div class="bg-white rounded-3xl border border-slate-200 p-6 sm:p-10 shadow-sm">
                    
                    <div class="mb-6">
                        <h2 class="text-2xl font-black text-slate-900 font-sans">Send Us a Message</h2>
                        <p class="text-xs text-slate-500 mt-1">Please fill out the form below and our team will get back to you promptly.</p>
                    </div>

                    <!-- Success State Feedback -->
                    <div x-show="submitted" class="p-6 rounded-2xl bg-emerald-50 border border-emerald-200 text-center mb-6">
                        <div class="w-12 h-12 rounded-full bg-emerald-500 text-white flex items-center justify-center mx-auto mb-3 text-xl font-bold">
                            ✓
                        </div>
                        <h3 class="text-lg font-bold text-emerald-900">Message Received Successfully!</h3>
                        <p class="text-xs text-emerald-700 mt-1 max-w-sm mx-auto">
                            A dedicated customer relationship representative will connect with you on <strong x-text="phone"></strong> within minutes.
                        </p>
                        <button type="button" @click="submitted = false; name=''; phone=''; email=''; message=''" class="mt-4 px-4 py-2 rounded-xl bg-emerald-600 text-white font-bold text-xs">
                            Submit Another Inquiry
                        </button>
                    </div>

                    <!-- Contact Form -->
                    <form x-show="!submitted" @submit.prevent="sendMessage()" class="space-y-4">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">Your Full Name *</label>
                                <input type="text" x-model="name" required placeholder="e.g. David Richardson" class="w-full px-4 py-3 rounded-2xl border border-slate-200 bg-slate-50/60 focus:bg-white text-sm font-semibold text-slate-900 focus:outline-none focus:ring-2 focus:ring-brand-500 transition">
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">Mobile Phone Number *</label>
                                <input type="tel" x-model="phone" required maxlength="10" placeholder="e.g. 9876543210" class="w-full px-4 py-3 rounded-2xl border border-slate-200 bg-slate-50/60 focus:bg-white text-sm font-semibold text-slate-900 focus:outline-none focus:ring-2 focus:ring-brand-500 transition">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">Email Address</label>
                                <input type="email" x-model="email" placeholder="david@example.com" class="w-full px-4 py-3 rounded-2xl border border-slate-200 bg-slate-50/60 focus:bg-white text-sm font-semibold text-slate-900 focus:outline-none focus:ring-2 focus:ring-brand-500 transition">
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">Subject of Inquiry</label>
                                <select x-model="subject" class="w-full px-4 py-3 rounded-2xl border border-slate-200 bg-slate-50/60 focus:bg-white text-sm font-semibold text-slate-900 focus:outline-none focus:ring-2 focus:ring-brand-500 transition">
                                    <option value="general">Cab Booking Inquiry</option>
                                    <option value="outstation">Bulk Intercity Outstation Package</option>
                                    <option value="corporate">Corporate Monthly Fleet Contract</option>
                                    <option value="wedding">Wedding / VIP Chauffeur Fleet</option>
                                    <option value="driver">Attach Vehicle as Chauffeur Partner</option>
                                </select>
                            </div>
                        </div>

                        <div>
                            <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">Trip Details or Inquiry</label>
                            <textarea x-model="message" rows="4" placeholder="Specify your pickup destination, passenger count, dates, or specific requirements..." class="w-full px-4 py-3 rounded-2xl border border-slate-200 bg-slate-50/60 focus:bg-white text-sm font-semibold text-slate-900 focus:outline-none focus:ring-2 focus:ring-brand-500 transition"></textarea>
                        </div>

                        <button type="submit" class="w-full py-4 rounded-xl text-base font-extrabold text-white bg-gradient-to-r from-brand-500 to-amber-500 hover:from-brand-600 hover:to-amber-600 shadow-md transition">
                            Send Inquiry
                        </button>
                    </form>

                </div>
            </div>

        </div>

    </div>
</section>

@endsection
