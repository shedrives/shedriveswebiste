@extends('layout.master')
@section('title', 'Terms & Conditions — SheDrives')
@section('description', 'The terms governing your use of the SheDrives app and website, including accounts, bookings, payments and liability.')
@section('content')

<section class="terms-section py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="terms-content" data-aos="fade-up">

                    <div class="text-center mb-4">
                        <h1 class="main-heading">Terms & Conditions</h1>
                        <div class="heading-underline mx-auto"></div>
                    </div>

                    <p class="description mb-4">
                        These Terms of Use govern your access to and use of the SheDrives mobile app, websites, services, content, tools, and overall platform. By agreeing to these Terms or using the Platform, you establish a contractual relationship with SheDrives. Additional terms may apply to specific services, such as Courier or intercity transportation. For details about how we handle your data, please refer to our <a href="{{ route('privacy') }}">Privacy Policy</a>.
                    </p>

                    <h3 class="sub-heading mt-4">1. Freedom for Captains & Options for Passengers</h3>
                    <p class="description">
                        The Platform connects independent providers of transport and courier services (Captains) with users seeking those services (Passengers). Passengers propose a price for a ride or service, which Captains can accept or counter with a different offer. Passengers can choose from Captains interested in their request. Once a Passenger confirms a ride, a separate agreement is established between the Passenger and the Captain. Passengers pay Captains the mutually agreed price directly, covering all costs (e.g., tolls, taxes, and fees).
                    </p>
                    <p class="description">SheDrives does not intervene or influence this financial arrangement. SheDrives serves as a technology company facilitating connections between Captains and Passengers. Users independently decide to offer or use services at their own risk. SheDrives does not control Captains or their service provision. Any tools or processes provided aim to enhance user experience and do not imply an employment or agency relationship.</p>

                    <h3 class="sub-heading mt-4">2. Your SheDrives Account</h3>
                    <p class="description">
                        To use the Platform, you must create an account and be at least 18 years old (or the legal age in your jurisdiction). You agree to provide accurate, up-to-date information and may need to verify your identity. You are responsible for keeping your account secure and current. Report any unauthorized activity immediately. Accounts inactive for over three years may be deleted. SheDrives may retain some information for legal or security purposes.
                    </p>

                    <h3 class="sub-heading mt-4">3. Your Safety</h3>
                    <p class="description">
                        SheDrives prioritizes user safety by verifying Captain credentials and conducting background checks. Use the in-app SOS button, share trip details with a trusted contact, or contact local police during emergencies.
                    </p>

                    <h3 class="sub-heading mt-4">4. Communication</h3>
                    <p class="description">
                        Passengers and Captains must maintain respectful, professional communication. Misuse of contact information or failure to honor agreed terms is prohibited. SheDrives may investigate and take action in cases of harassment or non-compliance.
                    </p>

                    <h3 class="sub-heading mt-4">5. Indemnity</h3>
                    <p class="description">
                        You agree to indemnify and hold SheDrives, its affiliates, and representatives harmless from any claims, liabilities, or expenses arising from your use of the Platform or Services, your violation of these Terms or applicable laws, and disputes between Captains and Passengers.
                    </p>

                    <h3 class="sub-heading mt-4">6. Liability</h3>
                    <p class="description">
                        SheDrives acts as a technology platform and is not responsible for the actions of Captains or Passengers. To the fullest extent permitted by law, SheDrives shall not be liable for indirect, incidental, or consequential damages arising from your use of the Platform.
                    </p>

                    <h3 class="sub-heading mt-4">7. Resolving Disputes</h3>
                    <p class="description">
                        Disputes will first be resolved amicably. If unresolved, arbitration under Pakistan law will apply.
                    </p>

                    <h3 class="sub-heading mt-4">8. Updates to Terms or Platform</h3>
                    <p class="description">
                        SheDrives may update these Terms or Platform features periodically. Changes will be communicated through app notifications or emails. Continued usage indicates agreement to updated Terms.
                    </p>

                    <h3 class="sub-heading mt-4">9. General Terms</h3>
                    <p class="description">
                        Ensure your app is updated for compatibility. Links to third-party websites or services are not affiliated with SheDrives. These Terms do not affect your statutory rights.
                    </p>

                    <div class="text-center mb-4 mt-5">
                        <h2 class="main-heading">SheDrives Courier Terms of Use</h2>
                        <div class="heading-underline mx-auto"></div>
                    </div>

                    <p class="description mb-4">
                        These terms are part of our overall Terms of Use. By using SheDrives' Courier service, you agree to follow both these terms and the general rules we have set out. If there is any conflict between the two, these specific terms will take priority.
                    </p>

                    <h3 class="sub-heading mt-4">SheDrives Courier</h3>
                    <p class="description">
                        SheDrives is the platform that connects Couriers with Users (Senders). When a Sender wants to make a delivery, they propose a price for the Courier's service. The Courier has the choice to accept that price or suggest something different. The Sender pays the agreed-upon amount through the platform, which covers all costs involved in the delivery.
                    </p>

                    <h3 class="sub-heading mt-4">Sender Responsibilities</h3>
                    <p class="description">
                        Ensure the courier can easily access the delivery address, and either you or someone you trust should be available to accept the parcel. Pack the parcel securely to prevent damage during transit. You are responsible for any issues arising from poor packing, incorrect delivery details, or sending unauthorized items.
                    </p>

                    <h3 class="sub-heading mt-4">Courier Responsibilities</h3>
                    <p class="description">
                        As a Courier, you are responsible for ensuring the parcel is safely and promptly transported from collection to delivery. Take necessary precautions to avoid any loss or damage during transit.
                    </p>

                    <h3 class="sub-heading mt-4">Restricted Goods</h3>
                    <p class="description">You are responsible for ensuring that parcels do not contain restricted items, including but not limited to:</p>
                    <ul class="description">
                        <li>Parcels valued over PKR 10,000</li>
                        <li>Narcotics, prescription drugs, explosives, or hazardous chemicals</li>
                        <li>Firearms, ammunition, or fireworks</li>
                        <li>Foreign currency or high-value items without proper authorization</li>
                        <li>Animals, perishable materials, or prohibited goods</li>
                    </ul>

                    <h3 class="sub-heading mt-4">SheDrives Inter City</h3>
                    <p class="description">
                        These terms govern the use of SheDrives Inter City services. The Platform connects Captains with Passengers for trips between cities. When a Passenger requests a ride, they suggest a price. Captains can accept or counter. Once confirmed, the agreement is made directly between both parties. Payment is handled between the Passenger and Captain through the platform.
                    </p>

                    <h3 class="sub-heading mt-4">Passenger Responsibilities</h3>
                    <p class="description">
                        Provide accurate ride details including the correct address, street name, or house number. You are responsible for fixing any issues caused by incorrect information.
                    </p>

                    <h3 class="sub-heading mt-4">Captain Responsibilities</h3>
                    <p class="description">
                        Accept rides within your registered area. If you operate outside it, you assume the risk of not following local rules.
                    </p>

                    <p class="description mt-4">
                        For questions or support, visit our <a href="https://web.shedrivesapp.com/support" target="_blank" rel="noopener noreferrer">Support Contact Page</a> or email support@shedrivesapp.com.
                    </p>

                </div>
            </div>
        </div>
    </div>
</section>

@endsection
