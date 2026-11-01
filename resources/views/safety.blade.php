@extends('layout.master')
@section('title', 'Safety Features — SOS, Live Tracking & Verified Captains | SheDrives')
@section('description', 'One-tap SOS, live ride tracking, emergency contact alerts and background-verified captains. See how SheDrives keeps every journey secure.')
@section('content')

<section class="sd-page-hero">
    <div class="container">
        <div class="sd-kicker">Safety</div>
        <h1>Your safety, our priority</h1>
        <p>Whether you're a passenger or a captain, SheDrives ensures every journey is secure, comfortable, and reliable — with SOS, live tracking, and emergency alerts built in.</p>
    </div>
</section>

 <!-- Prominent Safety Tools -->
 <section class="sd-section sd-section-dark">
     <div class="container text-center">
         <h2 class="sd-section-title" data-aos="fade-up">Built-in <span>safety tools</span></h2>
         <p class="sd-section-lead mx-auto" data-aos="fade-up" data-aos-delay="100">Access these features directly from the SheDrives app — before, during, and after every ride.</p>
         <div class="sd-safety-grid text-start">
             <div class="sd-safety-item" data-aos="fade-up" data-aos-delay="200">
                 <div class="sd-safety-icon"><i class="fas fa-bell"></i></div>
                 <h4>One-Tap SOS</h4>
                 <p>Trigger an instant alert to SheDrives support and your emergency contacts with a single tap.</p>
             </div>
             <div class="sd-safety-item" data-aos="fade-up" data-aos-delay="300">
                 <div class="sd-safety-icon"><i class="fas fa-map-marker-alt"></i></div>
                 <h4>Live ride tracking</h4>
                 <p>Share your real-time location with trusted contacts and monitor your route throughout the journey.</p>
             </div>
             <div class="sd-safety-item" data-aos="fade-up" data-aos-delay="400">
                 <div class="sd-safety-icon"><i class="fas fa-phone-alt"></i></div>
                 <h4>Emergency contact alerts</h4>
                 <p>Automatically notify your saved emergency contacts when you start a ride or activate SOS.</p>
             </div>
         </div>
     </div>
 </section>

 <!-- Safety Section -->

 <section class="safety-section py-5">
     <div class="container" data-aos="fade-up" data-aos-duration="800">
         <!-- Main Tabs -->
         <ul class="nav nav-pills justify-content-center mb-5 main-tabs" id="mainTabs" data-aos="zoom-in" data-aos-duration="800">
             <li class="nav-item">
                 <button class="nav-link active" data-bs-toggle="pill" data-bs-target="#passenger">Passenger Safety</button>
             </li>
             <li class="nav-item">
                 <button class="nav-link" data-bs-toggle="pill" data-bs-target="#captain">Captain Safety</button>
             </li>
             <li class="nav-item">
                 <button class="nav-link" data-bs-toggle="pill" data-bs-target="#courier-guideline">Courier guidelines</button>
             </li>
         </ul>

         <div class="tab-content">
             <!-- Passenger Safety -->
             <div class="tab-pane fade show active" id="passenger">
                 <div class="row">
                     <!-- Vertical Sub Tabs -->
                     <div class="col-md-3" data-aos="fade-right" data-aos-duration="900">
                         <div class="nav flex-column nav-pills sub-tabs" id="passengerTabs">
                             <button class="nav-link active" data-bs-toggle="pill" data-bs-target="#passenger-before">Before the ride</button>
                             <button class="nav-link" data-bs-toggle="pill" data-bs-target="#passenger-during">During the ride</button>
                             <button class="nav-link" data-bs-toggle="pill" data-bs-target="#passenger-after">After the ride</button>
                         </div>
                     </div>

                     <!-- Content Area -->
                     <div class="col-md-9">
                         <div class="tab-content">
                             <!-- Before Ride -->
                             <div class="tab-pane fade show active" id="passenger-before" data-aos="fade-left" data-aos-duration="900">
                                 <div class="safety-card">
                                     <h3>Before the ride</h3>
                                     <ul>
                                         <li>Book only through the SheDrives app.</li>
                                         <li>Check captain's name, photo, and vehicle plate before boarding.</li>
                                         <li>Wait in a safe, public area.</li>
                                         <li>Share your ride details with family or friends.</li>
                                     </ul>
                                 </div>
                             </div>

                             <!-- During Ride -->
                             <div class="tab-pane fade" id="passenger-during" data-aos="fade-left" data-aos-duration="900">
                                 <div class="safety-card">
                                     <h3>During the ride</h3>
                                     <ul>
                                         <li>Wear a seatbelt or helmet at all times.</li>
                                         <li>Keep valuables secure and out of sight.</li>
                                         <li>Monitor your route in the app.</li>
                                         <li>Stay alert and use the in-app safety button if needed.</li>
                                     </ul>
                                 </div>
                             </div>

                             <!-- After Ride -->
                             <div class="tab-pane fade" id="passenger-after" data-aos="fade-left" data-aos-duration="900">
                                 <div class="safety-card">
                                     <h3>After the ride</h3>
                                     <ul>
                                         <li>Take all belongings before exiting.</li>
                                         <li>Confirm trip end in the app and leave a review.</li>
                                         <li>Report any concerns to SheDrives Support.</li>
                                     </ul>
                                     <p class="promise"><strong>SheDrives Promise:</strong> Together, we make every journey safe, respectful, and comfortable.</p>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>

             <!-- Captain Safety -->
             <div class="tab-pane fade" id="captain">
                 <div class="row">
                     <div class="col-md-3" data-aos="fade-right" data-aos-duration="900">
                         <div class="nav flex-column nav-pills sub-tabs" id="captainTabs">
                             <button class="nav-link active" data-bs-toggle="pill" data-bs-target="#captain-before">Before the ride</button>
                             <button class="nav-link" data-bs-toggle="pill" data-bs-target="#captain-during">During the ride</button>
                             <button class="nav-link" data-bs-toggle="pill" data-bs-target="#captain-after">After the ride</button>
                         </div>
                     </div>

                     <div class="col-md-9">
                         <div class="tab-content">
                             <div class="tab-pane fade show active" id="captain-before" data-aos="fade-left" data-aos-duration="900">
                                 <div class="safety-card">
                                     <h3>Before the ride</h3>
                                     <ul>
                                         <li>Keep your vehicle clean, fueled, and in good condition.</li>
                                         <li>Carry valid CNIC, license, and vehicle documents.</li>
                                         <li>Verify passenger name and pickup details in the app.</li>
                                         <li>Stay in safe, visible pickup spots.</li>
                                     </ul>
                                 </div>
                             </div>

                             <div class="tab-pane fade" id="captain-during" data-aos="fade-left" data-aos-duration="900">
                                 <div class="safety-card">
                                     <h3>During the ride</h3>
                                     <ul>
                                         <li>Greet politely and confirm passenger's name.</li>
                                         <li>Follow traffic laws and speed limits.</li>
                                         <li>Keep route visible in navigation for transparency.</li>
                                         <li>Avoid unnecessary personal questions.</li>
                                     </ul>
                                 </div>
                             </div>

                             <div class="tab-pane fade" id="captain-after" data-aos="fade-left" data-aos-duration="900">
                                 <div class="safety-card">
                                     <h3>After the ride</h3>
                                     <ul>
                                         <li>Drop off only at safe, well-lit locations.</li>
                                         <li>End trip in the app and thank the passenger.</li>
                                         <li>Check for forgotten items.</li>
                                         <li>Report incidents or lost items to SheDrives Support.</li>
                                     </ul>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>

             <!-- Courier Guidelines -->
             <div class="tab-pane fade" id="courier-guideline">
                 <div class="row">
                     <div class="col-md-3" data-aos="fade-right" data-aos-duration="900">
                         <div class="nav flex-column nav-pills sub-tabs" id="courierTabs">
                             <button class="nav-link active" data-bs-toggle="pill" data-bs-target="#courier-main">Courier guidelines</button>
                             <button class="nav-link" data-bs-toggle="pill" data-bs-target="#courier-sender">Sender</button>
                             <button class="nav-link" data-bs-toggle="pill" data-bs-target="#courier-receiver">Receiver</button>
                         </div>
                     </div>

                     <div class="col-md-9">
                         <div class="tab-content">
                             <div class="tab-pane fade show active" id="courier-main" data-aos="fade-left" data-aos-duration="900">
                                 <div class="safety-card">
                                     <h3>Courier guidelines</h3>
                                     <ul>
                                         <li>Ensure parcels are securely packed and labeled.</li>
                                         <li>Verify delivery address before starting the trip.</li>
                                         <li>Follow traffic and safety regulations at all times.</li>
                                         <li>Keep the parcel safe from damage or theft.</li>
                                     </ul>
                                 </div>
                             </div>

                             <div class="tab-pane fade" id="courier-sender" data-aos="fade-left" data-aos-duration="900">
                                 <div class="safety-card">
                                     <h3>Sender guidelines</h3>
                                     <ul>
                                         <li>Use proper packaging to prevent damage.</li>
                                         <li>Include recipient details clearly on the parcel.</li>
                                         <li>Hand over the parcel only to verified couriers from SheDrives.</li>
                                         <li>Avoid sending prohibited or hazardous items.</li>
                                     </ul>
                                 </div>
                             </div>

                             <div class="tab-pane fade" id="courier-receiver" data-aos="fade-left" data-aos-duration="900">
                                 <div class="safety-card">
                                     <h3>Receiver guidelines</h3>
                                     <ul>
                                         <li>Receive parcels at a safe, visible location.</li>
                                         <li>Inspect the package before accepting it.</li>
                                         <li>Report any tampering or damage immediately.</li>
                                         <li>Confirm receipt in the SheDrives app.</li>
                                     </ul>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>

 @endsection