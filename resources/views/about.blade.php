@extends('layout.master')
@section('title', 'About SheDrives — Women-First Ride-Hailing in Pakistan')
@section('description', 'Learn how SheDrives is making travel safer for women in Pakistan through verified female captains, live tracking and a community built on dignity.')
@section('content')

<section class="sd-page-hero">
    <div class="container">
        <div class="sd-kicker">About SheDrives</div>
        <h1>Driving change, one woman at a time</h1>
        <p>Pakistan's first ride-hailing service exclusively for women, by women — built for safety, dignity, and independence on every road.</p>
    </div>
</section>

<section class="about-hero-section py-5">
    <div class="container">
        <div class="row align-items-center position-relative g-4">
            <div class="col-md-6">
                <div class="about-text sticky-text">
                    <h2 class="sd-section-title">Who we are</h2>
                    <p>
                        SheDrives is Pakistan's first ride-hailing service exclusively for women, by women. Our mission is simple yet powerful: to create a safe, reliable, and empowering transport solution where women can ride and drive with confidence. We are not just a mobility platform — we are a movement that enables women to reclaim public spaces, earn with dignity, and feel secure on every road they take.
                    </p>
                </div>
            </div>
            <div class="col-md-6 d-flex justify-content-center">
                <img src="./Images/ride-app.jpg" alt="SheDrives app interface" class="about-img left-img animated-image"  loading="lazy" decoding="async" />
            </div>
        </div>
    </div>
</section>

<section class="flip-section py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">How protective is SheDrives?</h2>
            <p class="section-description">SheDrives is built with security and comfort at its core — exclusively for women in Pakistan. Here's how it ensures a safe and trusted experience:</p>
        </div>
        <div class="row g-4">
            <div class="col-md-3 col-sm-6">
                <div class="custom-shape-img">
                    <img src="./Images/circle-line.png" alt="Decorative element"  loading="lazy" decoding="async" />
                </div>
            </div>

            <div class="col-md-3">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front" style="background-image: url('./Images/sos.jpg')">
                            <h3>Safety first</h3>
                        </div>
                        <div class="flip-card-back">
                            <p>One-tap SOS, live tracking, and emergency contact alerts keep you protected on every ride.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front" style="background-image: url('./Images/track.jpg')">
                            <h3>Live tracking</h3>
                        </div>
                        <div class="flip-card-back">
                            <p>Share your real-time location with family and monitor your route throughout the journey.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front" style="background-image: url('./Images/login.png')">
                            <h3>Empowerment</h3>
                        </div>
                        <div class="flip-card-back">
                            <p>We empower women by providing flexible earning opportunities and safe mobility across Pakistan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="how-it-works py-5">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-md-6" data-aos="fade-right">
                <h2 class="section-title">
                    <span class="pink-line"></span>
                    <strong>How It Works</strong>
                </h2>
                <p class="section-desc">SheDrives ensures your safety with just one tap.</p>
                <ul class="feature-list">
                    <li data-aos="fade-up" data-aos-delay="100">Instantly share your live location</li>
                    <li data-aos="fade-up" data-aos-delay="200">Notify emergency contacts</li>
                    <li data-aos="fade-up" data-aos-delay="300">Alert the SheDrives support team for immediate help</li>
                </ul>
                <p class="final-note" data-aos="fade-up" data-aos-delay="400">Your ride, your safety — always in control with SheDrives!</p>
            </div>
            <div class="col-md-6 text-center" data-aos="zoom-in">
                <div class="arch-img-wrapper">
                    <img src="./Images/sos.jpg" alt="SheDrives SOS safety feature" class="arch-img"  loading="lazy" decoding="async" />
                </div>
            </div>
        </div>
    </div>
</section>

<section class="moving-cities-section py-5">
    <div class="container">
        <h2 class="section-title mb-5" data-aos="fade-right">We're not just moving through cities — <span>we're moving lives forward, together</span></h2>
        <div class="row g-4">
            <div class="col-md-6" data-aos="fade-left">
                <div class="city-card text-center p-3 h-100">
                    <img src="./Images/tracking.jpg" alt="SheDrives live tracking feature" class="img-fluid rounded-3 mb-3"  loading="lazy" decoding="async" />
                    <h4 class="card-heading mb-2">Driving positive change in public transport</h4>
                    <p class="card-text">SheDrives is helping reshape public mobility by promoting safe, inclusive, and reliable transport options in every city we serve.</p>
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-right">
                <div class="city-card text-center p-3 h-100">
                    <img src="./Images/confrim-ride.jpg" alt="SheDrives ride confirmation screen" class="img-fluid rounded-3 mb-3"  loading="lazy" decoding="async" />
                    <h4 class="card-heading mb-2">Making transport accessible to those who need it most</h4>
                    <p class="card-text">SheDrives is committed to ensuring safe, reliable mobility for women, caregivers, and underserved communities.</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
