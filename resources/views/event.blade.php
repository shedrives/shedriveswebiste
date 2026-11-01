@extends('layout.master')
@section('title', 'Events & Activities — SheDrives')
@section('description', 'Events, workshops and community activities from SheDrives — celebrating innovation, collaboration and women-led mobility across Pakistan.')
@section('content')
<link rel="stylesheet" href="{{ asset('css/Event.css') }}?v={{ is_file(public_path('css/Event.css')) ? filemtime(public_path('css/Event.css')) : '1' }}">

<section class="tf-events-hero text-center d-flex align-items-center">
    <div class="container py-5">
        <h1 class="display-4 fw-bold hero-heading" data-aos="fade-right">Our events & activities</h1>
        <p class="lead" data-aos="fade-up">Celebrating innovation, collaboration, and women-led mobility with SheDrives</p>
        <a href="#upcoming" class="btn tf-btn mt-3" data-aos="fade-right">Explore Events</a>
    </div>
</section>

<section id="upcoming" class="py-5 bg-white">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title hero-heading" data-aos="fade-left">Upcoming events</h2>
            <p class="section-description" data-aos="fade-up">Stay tuned for our latest activities and opportunities to connect.</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4 col-sm-6">
                <div class="event-card-flip" data-aos="flip-left" data-aos-duration="2000">
                    <div class="event-card-inner">
                        <div class="event-card-front p-4 d-flex flex-column justify-content-center text-center">
                            <span class="event-date badge mb-3 px-3 py-2">Sep 15, 2025</span>
                            <h5 class="fw-bold text-dark mb-2">SheDrives × Jolta Electric MOU</h5>
                            <hr class="w-25 mx-auto border-2 border-pink mb-3">
                            <p class="text-muted small mb-0">
                                Honoured to sign an MOU between <strong>SheDrives</strong> and <strong>Jolta Electric</strong> — a powerful step towards sustainable, women-led mobility in Pakistan.
                            </p>
                        </div>
                        <div class="event-card-back shadow-sm">
                            <img src="{{ asset('Images/event.jpeg') }}" class="event-image" alt="SheDrives and Jolta Electric MOU signing" loading="lazy" decoding="async">
                            <div class="overlay"></div>
                            <div class="event-back-content text-center">
                                <h5 class="fw-bold">SheDrives × Jolta Electric</h5>
                                <p class="small mb-0">Empowering women with electric, eco-friendly rides.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="event-card p-4 rounded-4 shadow-sm h-100 text-center" data-aos="flip-left" data-aos-duration="2000">
                    <span class="event-date badge mb-3 px-3 py-2">Oct 02, 2025</span>
                    <h5 class="fw-bold text-dark mb-2">Captain Training Drive</h5>
                    <hr class="w-25 mx-auto border-2 border-pink mb-3">
                    <p class="text-muted small mb-0">
                        A hands-on training session for aspiring female captains — covering safety protocols, app usage, and professional driving standards.
                    </p>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="event-card p-4 rounded-4 shadow-sm h-100 text-center" data-aos="flip-left" data-aos-duration="2000">
                    <span class="event-date badge mb-3 px-3 py-2">Nov 10, 2025</span>
                    <h5 class="fw-bold text-dark mb-2">Women in Mobility Meetup</h5>
                    <hr class="w-25 mx-auto border-2 border-pink mb-3">
                    <p class="text-muted small mb-0">
                        A community event bringing together female captains, passengers, and partners to share stories and drive change together.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title hero-heading" data-aos="fade-down-right">Past events</h2>
            <p class="section-description" data-aos="fade-down-left">Highlights from our recent activities and community gatherings.</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="past-event-card rounded-4 overflow-hidden shadow-sm h-100" data-aos="flip-left">
                    <img src="./Images/event.jpeg" class="img-fluid" alt="SheDrives MOU signing event" loading="lazy" decoding="async">
                    <div class="p-3">
                        <h6>SheDrives × Jolta Electric Partnership</h6>
                        <p class="mb-0">Signing an MOU to promote sustainable, women-led mobility across Pakistan.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="past-event-card rounded-4 overflow-hidden shadow-sm h-100" data-aos="flip-left">
                    <img src="./Images/CEO.jpg" class="img-fluid" alt="SheDrives founder at community event" loading="lazy" decoding="async">
                    <div class="p-3">
                        <h6>Community Launch Event</h6>
                        <p class="mb-0">Introducing SheDrives to the community and celebrating Pakistan's first female ride-hailing platform.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="past-event-card rounded-4 overflow-hidden shadow-sm h-100" data-aos="flip-left">
                    <img src="./Images/sos.jpg" class="img-fluid" alt="SheDrives safety feature showcase" loading="lazy" decoding="async">
                    <div class="p-3">
                        <h6>Safety Features Showcase</h6>
                        <p class="mb-0">Demonstrating in-app SOS, live tracking, and emergency contact alerts to our community.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="tf-events-cta text-center py-5">
    <div class="container">
        <h2 data-aos="flip-right">Want to be part of our next event?</h2>
        <p data-aos="flip-up">Subscribe to get updates and never miss an opportunity.</p>
        <form class="d-flex justify-content-center mt-3" data-aos="flip-down">
            <label for="newsletter_email" class="visually-hidden">Email address</label>
            <input id="newsletter_email" name="email" type="email" class="form-control w-50 me-2"
                   placeholder="Enter your email" autocomplete="email" inputmode="email">
            <button type="button" class="btn tf-btn">Subscribe</button>
        </form>
    </div>
</section>

@endsection
