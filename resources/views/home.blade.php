@extends('layout.master')
@section('title', 'SheDrives — Safe Rides for Women in Pakistan')
@section('description', 'Pakistan\'s first female ride-hailing platform. Book verified women captains, track every trip live, and travel with dignity — in Lahore and beyond.')
@section('content')

{{-- inDrive-style full-bleed hero --}}
<section class="sd-hero">
    <div class="container sd-hero-inner">
        <div class="sd-brand-mark">She<span>Drives</span></div>
        <h1>Safe rides for women — for the journey you both trust</h1>
        <p>Pakistan's first female ride-hailing platform. Book verified women captains, track every trip live, and travel with dignity.</p>
        <div class="sd-hero-actions">
            <a class="sd-btn sd-btn-primary" href="https://play.google.com/store/apps/details?id=com.mtech.sdrives" target="_blank" rel="noopener">Download for Android</a>
            <a class="sd-btn sd-btn-outline-light" href="https://apps.apple.com/pk/app/shedrives/id6670424505" target="_blank" rel="noopener">Download for iOS</a>
        </div>
    </div>
    <div class="sd-hero-visual d-none d-lg-block">
        <img src="{{ asset('Images/ride-app.jpg') }}" alt="SheDrives app home screen">
    </div>
</section>

{{-- Safety bar — the three features sit directly under the hero so they are
     visible without scrolling, instead of only in the section further down --}}
<section class="sd-safety-bar">
    <div class="container">
        <div class="sd-safety-bar-inner">
            <a class="sd-safety-chip" href="{{ route('safety') }}">
                <span class="sd-safety-chip-icon"><i class="fas fa-bell"></i></span>
                <span>
                    <strong>One-tap SOS</strong>
                    Alert support and your emergency contacts instantly
                </span>
            </a>
            <a class="sd-safety-chip" href="{{ route('safety') }}">
                <span class="sd-safety-chip-icon"><i class="fas fa-map-marker-alt"></i></span>
                <span>
                    <strong>Live ride tracking</strong>
                    Share your route from pickup to drop-off
                </span>
            </a>
            <a class="sd-safety-chip" href="{{ route('safety') }}">
                <span class="sd-safety-chip-icon"><i class="fas fa-user-shield"></i></span>
                <span>
                    <strong>Verified captains</strong>
                    Background checks and safety training for every captain
                </span>
            </a>
        </div>
    </div>
</section>

{{-- One app, many services --}}
<section class="sd-section">
    <div class="container">
        <div class="mb-5" data-aos="fade-up">
            <div class="sd-kicker">One app, many services</div>
            <h2 class="sd-section-title">Everything you need to <span>move safely</span></h2>
            <p class="sd-section-lead">From daily city rides to courier deliveries — SheDrives is built exclusively for women passengers and women captains.</p>
        </div>

        <div class="sd-service-row" data-aos="fade-up">
            <div class="sd-service-copy">
                <h3>City rides</h3>
                <p>Forever safe rides for a fair price — book verified female captains for work, school, shopping, and everyday travel.</p>
                <div class="sd-service-links">
                    <a class="sd-chip" href="{{ route('services') }}">For Passengers</a>
                    <a class="sd-chip" href="{{ route('mission') }}">Become a Captain</a>
                </div>
            </div>
            <div class="sd-service-media">
                <img src="{{ asset('Images/choose-ride.jpg') }}" alt="Choosing a ride in the SheDrives app" loading="lazy">
            </div>
        </div>

        <div class="sd-service-row reverse" data-aos="fade-up">
            <div class="sd-service-copy">
                <h3>City to city</h3>
                <p>Choose comfort at a fair price all the way — intercity travel with women-only safety standards and live tracking.</p>
                <div class="sd-service-links">
                    <a class="sd-chip" href="{{ route('services') }}">For Passengers</a>
                </div>
            </div>
            <div class="sd-service-media">
                <img src="{{ asset('Images/track.jpg') }}" alt="Live trip tracking in the SheDrives app" loading="lazy">
            </div>
        </div>

        <div class="sd-service-row" data-aos="fade-up">
            <div class="sd-service-copy">
                <h3>Delivery</h3>
                <p>Express delivery for people and small businesses — send parcels with verified SheDrives couriers you can trust.</p>
                <div class="sd-service-links">
                    <a class="sd-chip" href="{{ route('services') }}">Send a Parcel</a>
                </div>
            </div>
            <div class="sd-service-media">
                <img src="{{ asset('Images/confrim-ride.jpg') }}" alt="Confirming a ride in the SheDrives app" loading="lazy">
            </div>
        </div>
    </div>
</section>

{{-- Safety is non-negotiable --}}
<section class="sd-section sd-section-dark">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-lg-7" data-aos="fade-right">
                <div class="sd-kicker">Safety first</div>
                <h2 class="sd-section-title">Safety is <span>non-negotiable</span></h2>
                <p class="sd-section-lead">We put our full effort into making every SheDrives ride safe — for passengers and captains, every time — because your safety is our top priority.</p>
            </div>
            <div class="col-lg-5 text-lg-end mt-4 mt-lg-0" data-aos="fade-left">
                <a class="sd-btn sd-btn-primary" href="{{ route('safety') }}">Explore safety features</a>
            </div>
        </div>

        <div class="sd-safety-grid">
            <div class="sd-safety-item" data-aos="fade-up" data-aos-delay="100">
                <div class="sd-safety-icon"><i class="fas fa-bell"></i></div>
                <h4>One-tap SOS</h4>
                <p>Instantly alert SheDrives support and your emergency contacts during any ride.</p>
            </div>
            <div class="sd-safety-item" data-aos="fade-up" data-aos-delay="200">
                <div class="sd-safety-icon"><i class="fas fa-map-marker-alt"></i></div>
                <h4>Live tracking</h4>
                <p>Share your real-time location and monitor your route from pickup to drop-off.</p>
            </div>
            <div class="sd-safety-item" data-aos="fade-up" data-aos-delay="300">
                <div class="sd-safety-icon"><i class="fas fa-user-shield"></i></div>
                <h4>Verified captains</h4>
                <p>Background checks, license verification, and safety training for every captain.</p>
            </div>
        </div>
    </div>
</section>

{{-- How it works --}}
<section class="sd-section sd-section-soft">
    <div class="container">
        <div class="mb-2" data-aos="fade-up">
            <div class="sd-kicker">Simple booking</div>
            <h2 class="sd-section-title">How to book a <span>SheDrives</span> ride</h2>
            <p class="sd-section-lead">Three clear steps from open app to arrive safely — designed for confidence on every journey.</p>
        </div>

        <div class="sd-steps">
            <div class="sd-step" data-aos="fade-up" data-aos-delay="100">
                <div class="sd-step-num">01</div>
                <h4>Set your route</h4>
                <p>Open the app, enter pickup and drop-off, and choose bike or car.</p>
                <div class="sd-step-img">
                    <img src="{{ asset('Images/destination.jpg') }}" alt="Set pickup and destination in SheDrives" loading="lazy" decoding="async">
                </div>
            </div>
            <div class="sd-step" data-aos="fade-up" data-aos-delay="200">
                <div class="sd-step-num">02</div>
                <h4>Confirm your captain</h4>
                <p>Review fare, captain details, and confirm — then track arrival live.</p>
                <div class="sd-step-img">
                    <img src="{{ asset('Images/confrim-ride.jpg') }}" alt="Confirm ride in SheDrives" loading="lazy" decoding="async">
                </div>
            </div>
            <div class="sd-step" data-aos="fade-up" data-aos-delay="300">
                <div class="sd-step-num">03</div>
                <h4>Ride with confidence</h4>
                <p>Use SOS anytime, share your trip, and rate your experience after arrival.</p>
                <div class="sd-step-img">
                    <img src="{{ asset('Images/sos.jpg') }}" alt="SheDrives SOS safety feature" loading="lazy" decoding="async">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Social impact --}}
<section class="sd-section">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="sd-kicker">Social impact</div>
                <h2 class="sd-section-title">We don't just drive — <span>we empower</span></h2>
                <p class="sd-section-lead mb-4">SheDrives supports women with safe mobility, flexible income, training, and a community that puts dignity first on every road.</p>
                <a class="sd-btn sd-btn-dark" href="{{ route('about') }}">Learn about our mission</a>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <div class="sd-cta-band">
                    <h2>Ready to move with SheDrives?</h2>
                    <p>Download the app and join Pakistan's women-first mobility movement — as a passenger or a captain.</p>
                    <div class="sd-store-row">
                        <a href="https://apps.apple.com/pk/app/shedrives/id6670424505" target="_blank" rel="noopener">
                            <img src="{{ asset('Images/app-1.png') }}" alt="App Store" loading="lazy" decoding="async">
                        </a>
                        <a href="https://play.google.com/store/apps/details?id=com.mtech.sdrives" target="_blank" rel="noopener">
                            <img src="{{ asset('Images/google-1.png') }}" alt="Google Play" loading="lazy" decoding="async">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
