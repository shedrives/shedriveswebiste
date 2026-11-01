@extends('layout.master')
@section('title', 'Our Services — City Rides, Intercity Travel & Delivery | SheDrives')
@section('description', 'City rides, city-to-city travel and parcel delivery — all with verified women captains, transparent fares and women-only safety standards.')
@section('content')

<section class="sd-page-hero">
  <div class="container">
    <div class="sd-kicker">Services</div>
    <h1>Empowering women through safe & reliable rides</h1>
    <p>Verified female captains, live tracking, and SOS support — whether it's your daily commute, school run, or a shopping trip.</p>
  </div>
</section>

  <section class="service-hero py-5">
    <div class="container">
      <div class="row">
        <!-- LEFT IMAGES -->
        <div class="col-lg-6 position-relative">
          <div class="image-grid">
            <img src="./Images/ride-app.jpg" alt="SheDrives app home screen" class="main-img animate-on-scroll fade-in-left delay-1"  loading="lazy" decoding="async" />
            <img src="./Images/login.png" alt="SheDrives login screen" class="circle-img animate-on-scroll zoom-in delay-2"  loading="lazy" decoding="async" />
            <img src="./Images/track.jpg" alt="SheDrives live tracking screen" class="bottom-img animate-on-scroll fade-in-up delay-3"  loading="lazy" decoding="async" />
          </div>
        </div>

        <!-- RIGHT CONTENT -->
        <div class="col-lg-6 mt-4 mt-lg-0">
          <p class="text-uppercase text-muted fw-semibold mb-2 animate-on-scroll fade-in-right delay-4">Our Services</p>
          <h2 class="mb-3 animate-on-scroll fade-in-right delay-5">City rides, intercity & delivery</h2>
          <p class="mb-4 animate-on-scroll fade-in-up delay-6">
           SheDrives is redefining travel for women, offering secure, comfortable, and timely rides driven by verified female professionals. Whether it's your daily commute, school run, or a shopping trip, we've got your journey covered.
          </p>
          <div class="row mb-4">
            <div class="col-6" data-aos="zoom-in" data-aos-delay="500">
              <p class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Verified Female Captains</p>
              <p class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Live Ride Tracking</p>
            </div>
            <div class="col-6" data-aos="zoom-in" data-aos-delay="600">
              <p class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>In-App SOS Support</p>
              <p class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Reliable Service</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
<!-- cards -->
  <section class="recent-projects text-center">
  <div class="container">
    <h2 class="section-title mb-3" data-aos="fade-up" data-aos-delay="100">Explore the services <span>we proudly deliver</span></h2>
    <p class="section-description mb-5" data-aos="fade-up" data-aos-delay="200">
      At SheDrives, we're committed to safe, reliable, and women-led driving services across various sectors. Here's a glimpse of what we offer.
    </p>

    <div class="row g-4 justify-content-center">
      <!-- Service 1 -->
      <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="300">
        <div class="project-card">
          <img src="./Images/choose-ride.jpg" alt="SheDrives ride selection screen" class="img-fluid rounded-top"  loading="lazy" decoding="async" />
          <div class="card-content">
            <div>
              <h5>Corporate Driving Solutions</h5>
              <p>Safe, timely & professional transport for working women.</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Service 2 -->
      <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="400">
        <div class="project-card">
          <img src="./Images/confrim-ride.jpg" alt="SheDrives ride confirmation screen" class="img-fluid rounded-top"  loading="lazy" decoding="async" />
          <div class="card-content">
            <div>
              <h5>Home-to-Work Pickup</h5>
              <p>Daily pick and drop service with verified female captains.</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Service 3 -->
      <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="500">
        <div class="project-card">
          <img src="./Images/tracking.jpg" alt="SheDrives live tracking screen" class="img-fluid rounded-top"  loading="lazy" decoding="async" />
          <div class="card-content">
            <div>
              <h5>Event Chauffeur Services</h5>
              <p>Reliable female captains for special events & functions.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection