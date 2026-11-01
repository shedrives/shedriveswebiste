  @extends('layout.master')
  @section('title', 'Contact SheDrives — Gulberg 3, Lahore')
  @section('description', 'Get in touch with the SheDrives team in Gulberg 3, Lahore for ride support, captain onboarding or partnership enquiries.')
  @section('content')

  <section class="sd-page-hero">
      <div class="container">
          <div class="sd-kicker">Contact</div>
          <h1>We're here to help</h1>
          <p>Visit us in Gulberg 3, Lahore, or send a message — our team is ready to assist with rides, captain support, and partnerships.</p>
      </div>
  </section>

  <section class="contact-info-section py-5">
      <div class="container">
          <div class="row align-items-start">
              <!-- Left Column (Contact Info) -->
              <div class="col-lg-6 mb-4">
                  <h2 class="heading"
                      data-aos="fade-right"
                      data-aos-duration="1200"
                      data-aos-delay="100">Contact <span>Information</span>
                  </h2>

                  <p class="desc"
                      data-aos="fade-left"
                      data-aos-duration="1000"
                      data-aos-delay="200">
                      Thank you for visiting our website. We are here to assist you with any inquiries you may have.
                  </p>

                  <div class="info-box d-flex"
                      data-aos="fade-down-right"
                      data-aos-duration="1000"
                      data-aos-delay="300"
                      data-aos-easing="ease-in-out">
                      <div class="icon-box me-3">
                          <div class="icon-circle">
                              <img src="./Images/time-management.png" alt="" loading="lazy" decoding="async">
                          </div>
                      </div>
                      <div class="text-white info-text">
                          <strong>Working Hours:</strong><br />Mon – Sat, 9:00am – 6:00pm
                      </div>
                  </div>

                  <div class="info-box d-flex mt-3"
                      data-aos="fade-down-left"
                      data-aos-duration="1000"
                      data-aos-delay="400"
                      data-aos-easing="ease-in-out">
                      <div class="icon-box me-3">
                          <div class="icon-circle">
                              <img src="./Images/gps.png" alt="" loading="lazy" decoding="async">
                          </div>
                      </div>
                      <div class="text-white info-text">
                          <strong>Office Address:</strong><br />A-2 Block near Hardees, Gulberg 3, Lahore, Pakistan
                      </div>
                  </div>
              </div>

              <!-- Right Column (Form) -->
              <div class="col-lg-6"
                  data-aos="flip-right"
                  data-aos-easing="ease-in-out"
                  data-aos-duration="1200"
                  data-aos-delay="500">
                  <div class="form-box p-4">
                      <h5 class="form-title">Ask a Question</h5>
                      <p class="form-sub">If you have any questions, you can contact us. Please fill out the form below.</p>

                      <form action="{{ route('contact.store') }}" method="POST" novalidate>
                          @csrf

                          @if ($errors->any())
                              <div class="form-alert form-alert-error" role="alert">
                                  Please check the highlighted fields below and try again.
                              </div>
                          @endif

                          <div class="row">
                              <div class="col-md-12 mb-4" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
                                  <label for="first_name" class="visually-hidden">First name</label>
                                  <input id="first_name" name="first_name" type="text" placeholder="First Name"
                                         value="{{ old('first_name') }}" autocomplete="given-name" required
                                         class="form-control @error('first_name') is-invalid @enderror">
                                  @error('first_name') <span class="field-error">{{ $message }}</span> @enderror
                              </div>
                              <div class="col-md-12 mb-4" data-aos="fade-up" data-aos-delay="700" data-aos-duration="1000">
                                  <label for="last_name" class="visually-hidden">Last name</label>
                                  <input id="last_name" name="last_name" type="text" placeholder="Last Name"
                                         value="{{ old('last_name') }}" autocomplete="family-name"
                                         class="form-control @error('last_name') is-invalid @enderror">
                                  @error('last_name') <span class="field-error">{{ $message }}</span> @enderror
                              </div>
                              <div class="col-md-12 mb-4" data-aos="fade-up" data-aos-delay="800" data-aos-duration="1000">
                                  <label for="phone" class="visually-hidden">Phone number</label>
                                  <input id="phone" name="phone" type="tel" placeholder="Phone Number"
                                         value="{{ old('phone') }}" autocomplete="tel" inputmode="tel" required
                                         class="form-control @error('phone') is-invalid @enderror">
                                  @error('phone') <span class="field-error">{{ $message }}</span> @enderror
                              </div>
                              <div class="col-md-12 mb-4" data-aos="fade-up" data-aos-delay="900" data-aos-duration="1000">
                                  <label for="email" class="visually-hidden">Email address</label>
                                  <input id="email" name="email" type="email" placeholder="Your Email"
                                         value="{{ old('email') }}" autocomplete="email" inputmode="email" required
                                         class="form-control @error('email') is-invalid @enderror">
                                  @error('email') <span class="field-error">{{ $message }}</span> @enderror
                              </div>
                              <div class="col-12 mb-3" data-aos="fade-up" data-aos-delay="900" data-aos-duration="1000">
                                  <label for="message" class="visually-hidden">Your message</label>
                                  <textarea id="message" name="message" rows="3" placeholder="Message" required
                                            class="form-control @error('message') is-invalid @enderror">{{ old('message') }}</textarea>
                                  @error('message') <span class="field-error">{{ $message }}</span> @enderror
                              </div>
        <!--                      <div class="col-12 mb-3">-->
        <!--    <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}"></div>-->

        <!--    @if ($errors->has('captcha'))-->
        <!--        <small class="text-danger">{{ $errors->first('captcha') }}</small>-->
        <!--    @endif-->
        <!--</div>-->
                              <div class="col-12" data-aos="zoom-in" data-aos-delay="1100" data-aos-duration="1000">
                                  <button type="submit" class="submit-btn">Submit Now</button>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>

          <!-- Map and Locations -->
          <div class="row mt-5">
              <div class="col-lg-6 mb-4"
                  data-aos="zoom-in-up"
                  data-aos-offset="200"
                  data-aos-duration="1200"
                  data-aos-delay="200"
                  data-aos-anchor-placement="top-bottom">
                  <div class="map-box">
                      <iframe src="https://maps.google.com/maps?q=A-2+Block,+Gulberg+III,+Lahore,+Punjab,+Pakistan&t=&z=15&hl=en&region=PK&ie=UTF8&iwloc=&output=embed"
                          width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" title="SheDrives office location in Lahore, Pakistan"></iframe>
                  </div>
              </div>

              <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300" data-aos-duration="1000">
                  <h4 class="locations-title">Our location</h4>
                  <p>Our office is conveniently located in Gulberg 3, Lahore. Use the map to find us easily.</p>

                  <div class="location-box mb-3" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                      <h6>Lahore, Pakistan</h6>
                      <p>A-2 Block near Hardees, Gulberg 3, Lahore, Pakistan</p>
                      <p>+92 341 7025881</p>
                      <a href="https://maps.google.com/?q=A-2+Block,+Gulberg+III,+Lahore,+Punjab,+Pakistan&hl=en&region=PK" target="_blank" rel="noopener noreferrer">Get Directions →</a>
                  </div>
              </div>
          </div>
      </div>

      <!-- Custom SVG Wave -->
      <div class="custom-wave" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
          <svg viewBox="0 0 1440 320">
              <path
                  d="M0,192L80,165.3C160,139,320,85,480,90.7C640,96,800,160,960,197.3C1120,235,1280,245,1360,250.7L1440,256L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z">
              </path>
          </svg>
      </div>
  </section>
  @endsection