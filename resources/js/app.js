import Alpine from 'alpinejs';
import gsap from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

gsap.registerPlugin(ScrollTrigger);

window.gsap = gsap;
window.ScrollTrigger = ScrollTrigger;
window.Alpine = Alpine;

// Global Car Suvidha Booking Data & Interactive Engine (English)
window.carSuvidhaData = {
    fleet: [
        {
            id: 'mini',
            category: 'hatchback',
            name: 'Suvidha Mini (Hatchback)',
            tagline: 'Ideal for city commutes & agile urban travel',
            image: '/images/compact.jpg',
            cars: 'WagonR, Tata Tiago, Celerio',
            seats: '4 Passengers',
            luggage: '2 Medium Bags',
            ac: 'Dual Zone AC',
            fuel: 'Petrol / CNG',
            rating: 4.85,
            rides: '18k+ completed',
            baseFare: 149,
            perKmRate: 11,
            hourlyBase: 499,
            freeKm: 20,
            features: ['Sanitized Cabin', 'Top-Rated Chauffeur', 'Digital GST Invoice', 'Fast 3-Min Pickup']
        },
        {
            id: 'sedan',
            category: 'sedan',
            name: 'Suvidha Prime (Sedan)',
            tagline: 'Refined sedans with generous legroom & trunk space',
            image: '/images/sedan.jpg',
            cars: 'Dzire, Honda Amaze, Hyundai Aura',
            seats: '4 Passengers',
            luggage: '3 Large Bags',
            ac: 'Climate Control AC',
            fuel: 'Petrol / Hybrid',
            rating: 4.92,
            rides: '32k+ completed',
            badge: 'Most Popular',
            baseFare: 249,
            perKmRate: 14,
            hourlyBase: 699,
            freeKm: 25,
            features: ['Complimentary High-Speed WiFi', 'Packaged Mineral Water', 'Highway Fastag Ready', 'Ergonomic Recliners']
        },
        {
            id: 'suv',
            category: 'suv',
            name: 'Suvidha XL (7-Seater SUV)',
            tagline: 'Spacious multi-utility vehicle for family & outstation tours',
            image: '/images/suv.jpg',
            cars: 'Innova Crysta, Maruti Ertiga, Kia Carens',
            seats: '6 - 7 Passengers',
            luggage: '5 Large Bags',
            ac: 'Tri-Zone Rear AC Vents',
            fuel: 'Diesel / Hybrid',
            rating: 4.96,
            rides: '24k+ completed',
            badge: 'Best for Family',
            baseFare: 399,
            perKmRate: 18,
            hourlyBase: 999,
            freeKm: 30,
            features: ['Captain Recliner Seats', 'Massive Boot Capacity', 'Certified Highway Specialist', '6 Airbags & ABS Safety']
        },
        {
            id: 'luxury',
            category: 'luxury',
            name: 'Suvidha Executive (Luxury)',
            tagline: 'First-class chauffeured experience for VIPs & corporate travel',
            image: '/images/luxury.jpg',
            cars: 'Mercedes-Benz E-Class, BMW 5-Series, Audi A6',
            seats: '4 Passengers',
            luggage: '3 Suitcases',
            ac: 'Quad-Zone Climate Control',
            fuel: 'Premium Petrol',
            rating: 5.0,
            rides: '6k+ completed',
            badge: 'VIP Chauffeur',
            baseFare: 999,
            perKmRate: 35,
            hourlyBase: 2499,
            freeKm: 40,
            features: ['Uniformed English-Speaking Chauffeur', 'Nappa Leather Interior', 'Burmester Surround Audio', 'Premium Refreshments']
        }
    ],

    popularRoutes: [
        { from: 'Delhi NCR', to: 'Agra (Taj Express)', distance: '210 km', time: '3 hrs 15 min', sedanPrice: 2499, suvPrice: 3499, tag: 'Bestseller' },
        { from: 'Mumbai', to: 'Pune Express', distance: '150 km', time: '2 hrs 45 min', sedanPrice: 2199, suvPrice: 2999, tag: 'Fast Highway' },
        { from: 'Bengaluru', to: 'Mysuru Heritage', distance: '145 km', time: '2 hrs 30 min', sedanPrice: 2299, suvPrice: 3199, tag: 'Expressway' },
        { from: 'Jaipur', to: 'Delhi IGI Airport', distance: '270 km', time: '4 hrs 20 min', sedanPrice: 2899, suvPrice: 3899, tag: 'Door-to-Airport' },
        { from: 'Chandigarh', to: 'Shimla Hills', distance: '115 km', time: '3 hrs 30 min', sedanPrice: 2499, suvPrice: 3599, tag: 'Mountain Special' },
        { from: 'Ahmedabad', to: 'Statue of Unity', distance: '198 km', time: '3 hrs 40 min', sedanPrice: 2699, suvPrice: 3699, tag: 'Weekend Getaway' }
    ]
};

// Booking Engine Alpine Component
Alpine.data('bookingEngine', () => ({
    tripType: 'city', // 'city', 'outstation', 'rental', 'airport'
    outstationType: 'oneway', // 'oneway', 'roundtrip'
    airportType: 'drop', // 'drop', 'pickup'
    
    // Inputs
    pickup: 'Indira Gandhi International Airport, Terminal 3',
    drop: 'Connaught Place, Central Delhi',
    pickupDate: new Date().toISOString().split('T')[0],
    pickupTime: '10:30',
    returnDate: '',
    rentalPackage: '4hrs_40km',
    flightNumber: '',
    customerName: '',
    customerPhone: '',
    
    // Selected Car
    selectedCarId: 'sedan',
    
    // Autocomplete list
    popularLocations: [
        'Indira Gandhi International Airport (DEL), Terminal 3',
        'New Delhi Railway Station (NDLS), Central Delhi',
        'Connaught Place, Inner Circle, New Delhi',
        'Cyber Hub, DLF Phase 2, Gurugram',
        'Noida Electronic City, Sector 62',
        'Chhatrapati Shivaji Maharaj Airport (BOM), Mumbai',
        'Bandra Kurla Complex (BKC), Mumbai',
        'Kempegowda International Airport (BLR), Bengaluru',
        'Whitefield Tech Hub, Bengaluru',
        'Hinjawadi IT Park, Phase 1, Pune',
        'Jaipur International Airport (JAI), Sanganer',
        'MI Road, Heritage Pink City, Jaipur'
    ],
    showPickupSuggestions: false,
    showDropSuggestions: false,

    // Booking Modal States
    isSubmitting: false,
    showBookingConfirmationModal: false,
    showLiveTrackerModal: false,
    bookingSuccessData: null,
    trackerStep: 1,

    init() {
        const tomorrow = new Date();
        tomorrow.setDate(tomorrow.getDate() + 1);
        this.returnDate = tomorrow.toISOString().split('T')[0];
    },

    get selectedCar() {
        return window.carSuvidhaData.fleet.find(c => c.id === this.selectedCarId) || window.carSuvidhaData.fleet[1];
    },

    get estimatedDistance() {
        if (this.tripType === 'city') return 24;
        if (this.tripType === 'airport') return 28;
        if (this.tripType === 'rental') {
            if (this.rentalPackage === '2hrs_20km') return 20;
            if (this.rentalPackage === '4hrs_40km') return 40;
            if (this.rentalPackage === '8hrs_80km') return 80;
            return 120;
        }
        // outstation
        const baseKm = 180;
        return this.outstationType === 'roundtrip' ? baseKm * 2 : baseKm;
    },

    get calculatedFare() {
        const car = this.selectedCar;
        let fare = 0;

        if (this.tripType === 'rental') {
            const multipliers = {
                '2hrs_20km': 1,
                '4hrs_40km': 1.8,
                '8hrs_80km': 3.2,
                '12hrs_120km': 4.5
            };
            const mult = multipliers[this.rentalPackage] || 1.8;
            fare = Math.round(car.hourlyBase * mult);
        } else if (this.tripType === 'city') {
            fare = car.baseFare + (this.estimatedDistance * car.perKmRate);
        } else if (this.tripType === 'airport') {
            fare = car.baseFare + 100 + (this.estimatedDistance * car.perKmRate);
        } else {
            // Outstation
            const dist = this.estimatedDistance;
            fare = Math.round(dist * car.perKmRate + 300);
        }

        return Math.max(fare, car.baseFare);
    },

    get gstAmount() {
        return Math.round(this.calculatedFare * 0.05); // 5% GST
    },

    get totalAmount() {
        return this.calculatedFare + this.gstAmount;
    },

    selectPickup(loc) {
        this.pickup = loc;
        this.showPickupSuggestions = false;
        this.animateFormFields();
    },

    selectDrop(loc) {
        this.drop = loc;
        this.showDropSuggestions = false;
        this.animateFormFields();
    },

    swapLocations() {
        const temp = this.pickup;
        this.pickup = this.drop;
        this.drop = temp;

        gsap.fromTo('.swap-btn', 
            { rotation: 0 }, 
            { rotation: 180, duration: 0.4, ease: 'back.out(2)' }
        );
        this.animateFormFields();
    },

    chooseCar(id) {
        this.selectedCarId = id;
        
        // GSAP pulse on selected card
        const cardEl = document.querySelector(`[data-car-id="${id}"]`);
        if (cardEl) {
            gsap.fromTo(cardEl, 
                { scale: 0.96 }, 
                { scale: 1, duration: 0.35, ease: 'back.out(2)' }
            );
        }

        // Pulse the fare ticker
        gsap.fromTo('.fare-display-amount', 
            { scale: 1.1, color: '#f97316' }, 
            { scale: 1, color: '#ffffff', duration: 0.45, ease: 'power2.out' }
        );
    },

    setTripType(type) {
        this.tripType = type;
        if (type === 'airport') {
            this.drop = 'Indira Gandhi International Airport, Terminal 3';
        }
        this.animateFormFields();
    },

    animateFormFields() {
        gsap.fromTo('.booking-form-area', 
            { opacity: 0.7, y: 8 }, 
            { opacity: 1, y: 0, duration: 0.3, ease: 'power2.out' }
        );
    },

    submitBooking() {
        if (!this.pickup || !this.drop) {
            alert('Please specify both Pickup and Drop locations to proceed.');
            return;
        }

        this.isSubmitting = true;
        setTimeout(() => {
            this.isSubmitting = false;
            const bookingId = 'CS-' + Math.floor(100000 + Math.random() * 900000);
            const otp = Math.floor(1000 + Math.random() * 9000);
            
            this.bookingSuccessData = {
                bookingId: bookingId,
                otp: otp,
                carName: this.selectedCar.name,
                carModel: this.selectedCar.cars.split(',')[0],
                carNumber: 'DL ' + (Math.floor(10 + Math.random() * 89)) + ' AB ' + Math.floor(1000 + Math.random() * 9000),
                driverName: 'Vikram Singh (Verified Chauffeur)',
                driverPhone: '+91 98712 ' + Math.floor(10000 + Math.random() * 90000),
                driverRating: '4.95 ★ (1,420+ verified rides)',
                pickup: this.pickup,
                drop: this.drop,
                pickupDate: this.pickupDate,
                pickupTime: this.pickupTime,
                tripType: this.tripType.toUpperCase(),
                totalAmount: this.totalAmount,
                estimatedArrival: '3 mins away'
            };

            this.showBookingConfirmationModal = true;

            // Animate confirmation modal with GSAP
            setTimeout(() => {
                const modal = document.querySelector('.confirmation-modal-box');
                if (modal) {
                    gsap.fromTo(modal, 
                        { scale: 0.85, opacity: 0, y: 25 }, 
                        { scale: 1, opacity: 1, y: 0, duration: 0.45, ease: 'back.out(1.7)' }
                    );
                }
            }, 50);
        }, 800);
    },

    openLiveTracker() {
        this.showBookingConfirmationModal = false;
        this.showLiveTrackerModal = true;
        this.trackerStep = 1;

        setTimeout(() => {
            const trackerModal = document.querySelector('.tracker-modal-box');
            if (trackerModal) {
                gsap.fromTo(trackerModal, 
                    { scale: 0.88, opacity: 0, y: 30 }, 
                    { scale: 1, opacity: 1, y: 0, duration: 0.45, ease: 'back.out(1.5)' }
                );
            }
        }, 50);

        setTimeout(() => {
            if (this.showLiveTrackerModal) {
                this.trackerStep = 2;
                gsap.fromTo('.tracker-step-2', { scale: 0.95 }, { scale: 1, duration: 0.3 });
            }
        }, 3000);

        setTimeout(() => {
            if (this.showLiveTrackerModal) {
                this.trackerStep = 3;
                gsap.fromTo('.tracker-step-3', { scale: 0.95 }, { scale: 1, duration: 0.3 });
            }
        }, 6000);
    }
}));

// Initialize GSAP Animations on DOM Load
document.addEventListener('DOMContentLoaded', () => {
    
    // 1. Hero Entrance Timeline
    const heroTl = gsap.timeline({ defaults: { ease: 'power3.out' } });

    if (document.querySelector('.hero-badge')) {
        heroTl
            .fromTo('.hero-badge', 
                { y: -30, opacity: 0, scale: 0.9 }, 
                { y: 0, opacity: 1, scale: 1, duration: 0.8, ease: 'back.out(1.8)' }
            )
            .fromTo('.hero-title', 
                { y: 40, opacity: 0 }, 
                { y: 0, opacity: 1, duration: 1 }, 
                '-=0.5'
            )
            .fromTo('.hero-desc', 
                { y: 25, opacity: 0 }, 
                { y: 0, opacity: 1, duration: 0.8 }, 
                '-=0.6'
            )
            .fromTo('.hero-pills > *', 
                { y: 20, opacity: 0, scale: 0.85 }, 
                { y: 0, opacity: 1, scale: 1, stagger: 0.1, duration: 0.6, ease: 'back.out(1.5)' }, 
                '-=0.5'
            );

        if (document.querySelector('.hero-dispatch-card')) {
            heroTl.fromTo('.hero-dispatch-card', 
                { y: 35, opacity: 0, scale: 0.95 }, 
                { y: 0, opacity: 1, scale: 1, duration: 0.9, ease: 'power3.out' }, 
                '-=0.5'
            );
        }
    }

    // 2. Ambient Floating Background Lights
    if (document.querySelector('.ambient-orb-1')) {
        gsap.to('.ambient-orb-1', {
            x: 40,
            y: 30,
            duration: 8,
            repeat: -1,
            yoyo: true,
            ease: 'sine.inOut'
        });
    }
    if (document.querySelector('.ambient-orb-2')) {
        gsap.to('.ambient-orb-2', {
            x: -35,
            y: -25,
            duration: 9,
            repeat: -1,
            yoyo: true,
            ease: 'sine.inOut'
        });
    }

    // 3. ScrollTrigger Stagger for Features & Cards
    const triggerCards = document.querySelectorAll('.gsap-stagger-cards');
    triggerCards.forEach(container => {
        gsap.fromTo(container.children, 
            { y: 40, opacity: 0, scale: 0.95 },
            {
                y: 0,
                opacity: 1,
                scale: 1,
                duration: 0.8,
                stagger: 0.12,
                ease: 'power3.out',
                scrollTrigger: {
                    trigger: container,
                    start: 'top 85%',
                    toggleActions: 'play none none none'
                }
            }
        );
    });

    // 4. ScrollTrigger Fade-Up Headers
    const fadeUps = document.querySelectorAll('.gsap-fade-up');
    fadeUps.forEach(el => {
        gsap.fromTo(el, 
            { y: 35, opacity: 0 },
            {
                y: 0,
                opacity: 1,
                duration: 0.8,
                ease: 'power2.out',
                scrollTrigger: {
                    trigger: el,
                    start: 'top 88%',
                    toggleActions: 'play none none none'
                }
            }
        );
    });

    // 5. Animated Number Counters
    const statCounters = document.querySelectorAll('.gsap-counter');
    statCounters.forEach(counter => {
        const target = parseFloat(counter.getAttribute('data-target')) || 0;
        const suffix = counter.getAttribute('data-suffix') || '';
        const prefix = counter.getAttribute('data-prefix') || '';
        
        ScrollTrigger.create({
            trigger: counter,
            start: 'top 85%',
            once: true,
            onEnter: () => {
                const obj = { val: 0 };
                gsap.to(obj, {
                    val: target,
                    duration: 2,
                    ease: 'power3.out',
                    onUpdate: () => {
                        if (target % 1 === 0) {
                            counter.innerText = prefix + Math.floor(obj.val).toLocaleString() + suffix;
                        } else {
                            counter.innerText = prefix + obj.val.toFixed(1) + suffix;
                        }
                    }
                });
            }
        });
    });

});

Alpine.start();
