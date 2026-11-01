@extends('layout.master')
@section('title', 'Mission & Vision — SheDrives')
@section('description', 'Our mission is safe, dignified mobility for every woman in Pakistan — and a future where roads are inclusive and led by female captains.')
@section('content')

<section class="mission-section py-5">
    <div class="container position-relative">
        <div class="animated-bg-shape"></div>
        <h1 class="mission-title mb-4 animate-on-scroll fade-in-up delay-2">We are driving change in <br> communities by <span>Empowering Women</span></h1>
        <p class="mission-desc animate-on-scroll fade-in delay-3">
            Our mission is to empower women through safe mobility, driving education, and community outreach across Pakistan.
        </p>
    </div>
</section>

<section class="mission-section-wrapper py-5">
    <div class="container">
        <div class="row align-items-center g-4 mb-5">
            <div class="col-lg-6" data-aos="fade-right">
                <h2 class="section-title" data-aos="fade-up">Our <span>Mission</span></h2>
                <p class="section-description" data-aos="fade-up" data-aos-delay="100">
                    Through innovation and inclusion, SheDrives is reshaping mobility in Pakistan by:
                </p>
                <ul class="mission-points">
                    <li data-aos="fade-up" data-aos-delay="200">Providing safe, female-only transport for women and girls</li>
                    <li data-aos="fade-up" data-aos-delay="300">Creating income opportunities for women through driving</li>
                    <li data-aos="fade-up" data-aos-delay="400">Offering free training, licensing, and vehicle support</li>
                    <li data-aos="fade-up" data-aos-delay="500">Building a supportive community for female captains</li>
                    <li data-aos="fade-up" data-aos-delay="600">Promoting gender equality through inclusive mobility</li>
                    <li data-aos="fade-up" data-aos-delay="700">Expanding access to secure and respectful public spaces</li>
                    <li data-aos="fade-up" data-aos-delay="800">Partnering with brands and institutions to scale impact</li>
                </ul>
            </div>
            <div class="col-lg-6 position-relative" data-aos="zoom-in">
                <img src="./Images/ride-app.jpg" alt="SheDrives app interface" class="img-fluid rounded shadow" loading="lazy" decoding="async">
                <div class="quote-bubble" data-aos="zoom-in" data-aos-delay="200">
                    <div class="quote-icon">"</div>
                    <p>SheDrives is not just transport — it's a movement for change, giving women the freedom to travel safely and earn with dignity.</p>
                    <h6 class="author">— SheDrives Team</h6>
                </div>
            </div>
        </div>

        <div class="row align-items-center g-4">
            <div class="col-lg-6 order-lg-2" data-aos="fade-left">
                <h2 class="section-title" data-aos="fade-up">Our <span>Vision</span></h2>
                <ul class="vision-points">
                    <li data-aos="fade-up" data-aos-delay="100">Women feel safe and confident to travel independently</li>
                    <li data-aos="fade-up" data-aos-delay="200">Every woman has the freedom to earn with dignity</li>
                    <li data-aos="fade-up" data-aos-delay="300">Roads are inclusive and led by female mobility</li>
                    <li data-aos="fade-up" data-aos-delay="400">Communities are uplifted through equal opportunities</li>
                    <li data-aos="fade-up" data-aos-delay="500">Empowerment starts with access, safety, and respect</li>
                </ul>
            </div>
            <div class="col-lg-6 order-lg-1 position-relative text-center" data-aos="zoom-in">
                <div class="vision-circle" data-aos="zoom-in" data-aos-delay="150">
                    <div class="quote-icon">"</div>
                    <p>SheDrives envisions a society where women's mobility means freedom, safety, and empowerment.</p>
                    <h6 class="author">— SheDrives Team</h6>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="faq-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2 class="mission-title mb-5 text-center animate-on-scroll fade-in-up delay-1">Frequently asked <span>questions</span></h2>
                <div class="accordion" id="faqAccordion">
                    <div class="accordion-item animate-on-scroll fade-in-up delay-2">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                Who can use SheDrives?
                                <span class="icon"></span>
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Only females can book or drive with SheDrives. No male passengers or captains are allowed — your safety is our top priority.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item animate-on-scroll fade-in-up delay-3">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                Where is SheDrives available?
                                <span class="icon"></span>
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                SheDrives is currently available in major cities of Pakistan. We're growing fast — keep an eye out as we expand to your area.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item animate-on-scroll fade-in-up delay-4">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                How do I book a ride?
                                <span class="icon"></span>
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <ol class="mb-0">
                                    <li>Open the SheDrives app</li>
                                    <li>Set your pickup and drop-off locations</li>
                                    <li>Choose your ride type (bike or car)</li>
                                    <li>Tap "Book Ride" and you're all set</li>
                                </ol>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item animate-on-scroll fade-in-up delay-5">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour">
                                Can I schedule a ride in advance?
                                <span class="icon"></span>
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Yes. You can book your ride when you need it — perfect for airport pickups, office commutes, or appointments.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item animate-on-scroll fade-in-up delay-6">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive">
                                Are the Captains trained?
                                <span class="icon"></span>
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <p>Absolutely. All our captains are:</p>
                                <ul class="mb-0">
                                    <li>Background checked</li>
                                    <li>License verified</li>
                                    <li>Safety trained</li>
                                </ul>
                                <p class="mb-0 mt-2">Only the best are selected to drive with SheDrives.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item animate-on-scroll fade-in-up delay-7">
                        <h2 class="accordion-header" id="headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix">
                                What safety features are available?
                                <span class="icon"></span>
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <p>SheDrives keeps you protected with:</p>
                                <ul class="mb-0">
                                    <li>In-app Emergency SOS button</li>
                                    <li>Live GPS tracking during every ride</li>
                                    <li>Ride sharing with friends or family</li>
                                    <li>Female-only platform</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item animate-on-scroll fade-in-up delay-8">
                        <h2 class="accordion-header" id="headingSeven">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven">
                                What if I feel unsafe during a ride?
                                <span class="icon"></span>
                            </button>
                        </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Tap the SOS button in the app — our safety team is instantly notified. We're here for you, 24/7.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item animate-on-scroll fade-in-up delay-9">
                        <h2 class="accordion-header" id="headingEight">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight">
                                How can I become a SheDrives Captain?
                                <span class="icon"></span>
                            </button>
                        </h2>
                        <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <p>You'll need:</p>
                                <ul class="mb-0">
                                    <li>A valid CNIC</li>
                                    <li>A driving license</li>
                                    <li>A bike or car (or apply to get one from us)</li>
                                    <li>Attendance at a quick training session</li>
                                </ul>
                                <p class="mb-0 mt-2">Apply easily through the app or website.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item animate-on-scroll fade-in-up delay-10">
                        <h2 class="accordion-header" id="headingNine">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine">
                                Can I bring children on a ride?
                                <span class="icon"></span>
                            </button>
                        </h2>
                        <div id="collapseNine" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Yes. You can bring your child or infant with you. Just leave a note while booking if you need extra space or time.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item animate-on-scroll fade-in-up delay-11">
                        <h2 class="accordion-header" id="headingTen">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen">
                                How can I report an issue or give feedback?
                                <span class="icon"></span>
                            </button>
                        </h2>
                        <div id="collapseTen" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Use the Help & Support section in the app or email us at <a href="mailto:support@shedrivesapp.com">support@shedrivesapp.com</a>.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
