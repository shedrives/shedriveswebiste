<footer class="sd-footer">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-4">
                <a href="{{ route('home') }}" class="sd-footer-brand">SheDrives</a>
                <p>Pakistan's first ride-hailing platform exclusively for women — safe rides, trusted captains, and mobility with dignity.</p>
                <p class="mb-0">A-2 Block near Hardees, Gulberg 3<br>Lahore, Pakistan</p>
            </div>
            <div class="col-6 col-lg-2">
                <h5>Company</h5>
                <a href="{{ route('about') }}">About</a>
                <a href="{{ route('meetfounder') }}">Founder</a>
                <a href="{{ route('mission') }}">Mission</a>
                <a href="{{ route('services') }}">Services</a>
            </div>
            <div class="col-6 col-lg-2">
                <h5>Support</h5>
                <a href="{{ route('safety') }}">Safety</a>
                <a href="{{ route('contact') }}">Contact</a>
                <a href="{{ route('policy') }}">Policy</a>
                <a href="{{ route('collabrate') }}">Partner</a>
            </div>
            <div class="col-lg-4">
                <h5>Get the app</h5>
                <div class="sd-store-row mb-3">
                    <a href="https://apps.apple.com/pk/app/shedrives/id6670424505" target="_blank" rel="noopener">
                        <img src="{{ asset('Images/app-1.png') }}" alt="Download on the App Store" loading="lazy" decoding="async">
                    </a>
                    <a href="https://play.google.com/store/apps/details?id=com.mtech.sdrives" target="_blank" rel="noopener">
                        <img src="{{ asset('Images/google-1.png') }}" alt="Get it on Google Play" loading="lazy" decoding="async">
                    </a>
                </div>
                <p class="mb-1">info@shedrivesapp.com</p>
                <p class="mb-1">support@shedrivesapp.com</p>
                <p class="mb-0">+92 341 7025881</p>
            </div>
        </div>

        <div class="sd-footer-bottom">
            <div>
                <a href="{{ route('privacy') }}" class="d-inline me-3">Privacy</a>
                <a href="{{ route('terms') }}" class="d-inline">Terms</a>
            </div>
            <div class="sd-social">
                <a href="https://www.instagram.com/shedrives_pakistan/" target="_blank" rel="noopener" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                <a href="https://www.tiktok.com/@shedrives_pakista" target="_blank" rel="noopener" aria-label="TikTok"><i class="bi bi-tiktok"></i></a>
                <a href="https://youtube.com/@shedrives_pakistan" target="_blank" rel="noopener" aria-label="YouTube"><i class="bi bi-youtube"></i></a>
            </div>
        </div>
    </div>
</footer>
