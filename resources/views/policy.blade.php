@extends('layout.master')
@section('title', 'Policy & Rules — SheDrives')
@section('description', 'The rules passengers and captains agree to when riding with SheDrives, covering conduct, cancellations, payments and safety obligations.')
@section('content')
<div class="polcy-wrapper">
    <section class="hero-section text-white d-flex align-items-center" data-aos="fade-right">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h1 class="display-4" data-aos="zoom-in">Policy & Rules</h1>
                    <p class="lead" data-aos="fade-right">At SheDrives, safety, respect, and professionalism are at the heart of every ride. To ensure a comfortable experience for everyone, all Captains and Passengers must follow these guidelines.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="policy-intro py-5">
        <div class="container">
            <h2 class="mb-3" data-aos="fade-up" data-aos-delay="100">Our Commitment</h2>
            <p data-aos="fade-left" data-aos-delay="200">At SheDrives, we strive to create a respectful, safe, and professional environment for all. These rules help us ensure the best experience for captains and passengers alike.</p>
        </div>
    </section>

    <section class="rules-section py-5">
        <div class="container">
            <h2 class="section-heading text-center mb-5" data-aos="zoom-in">SheDrives Policy & Rules</h2>
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <ul class="rules-list">
                        <li data-aos="fade-up" data-aos-delay="100">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <strong>Female-Only Platform</strong>
                                SheDrives is exclusively for women — both captains and passengers. No male passengers, captains, or companions are allowed during any ride.
                            </div>
                        </li>
                        <li data-aos="fade-up" data-aos-delay="200">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <strong>Respect & Behavior</strong>
                                Treat each other with respect, dignity, and kindness. No harassment, abuse, or inappropriate language will be tolerated. Maintain personal boundaries and professional conduct throughout the ride.
                            </div>
                        </li>
                        <li data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <strong>Time & Punctuality</strong>
                                Captains should reach the pickup location on time. Passengers should be ready when the captain arrives to avoid delays.
                            </div>
                        </li>
                        <li data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <strong>Vehicle & Personal Cleanliness</strong>
                                Captains must keep their vehicle clean, well-maintained, and safe. Passengers are expected to respect the vehicle — no damage, littering, or smoking.
                            </div>
                        </li>
                        <li data-aos="fade-up" data-aos-delay="500">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <strong>App Usage & Safety</strong>
                                All rides must be booked and completed through the SheDrives app only. No off-app requests are allowed for the safety of both parties. Use the SOS button in the app or contact support if any issue arises during the ride.
                            </div>
                        </li>
                        <li data-aos="fade-up" data-aos-delay="600">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <strong>Required Documents (For Captains)</strong>
                                A valid driving license, CNIC, and vehicle documents are mandatory. SheDrives may conduct background checks and training sessions to ensure high service standards.
                            </div>
                        </li>
                        <li data-aos="fade-up" data-aos-delay="700">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <strong>Ratings & Feedback</strong>
                                After each ride, both Captain and Passenger should leave a rating and review to help improve the experience for others.
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
