<nav class="navbar navbar-expand-lg sd-nav">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">SheDrives</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu" aria-controls="navMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navMenu">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="aboutDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">About</a>
                    <ul class="dropdown-menu" aria-labelledby="aboutDropdown">
                        <li><a class="dropdown-item" href="{{ route('about') }}">About Us</a></li>
                        <li><a class="dropdown-item" href="{{ route('meetfounder') }}">Meet Our Founder</a></li>
                        <li><a class="dropdown-item" href="{{ route('mission') }}">Mission & Vision</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('services') }}">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('safety') }}">Safety</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="contactDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Contact</a>
                    <ul class="dropdown-menu" aria-labelledby="contactDropdown">
                        <li><a class="dropdown-item" href="{{ route('contact') }}">Contact</a></li>
                        <li><a class="dropdown-item" href="{{ route('privacy') }}">Privacy</a></li>
                        <li><a class="dropdown-item" href="{{ route('policy') }}">Policy & Rules</a></li>
                        <li><a class="dropdown-item" href="{{ route('terms') }}">Terms & Conditions</a></li>
                        <li><a class="dropdown-item" href="{{ route('collabrate') }}">Collaboration</a></li>
                    </ul>
                </li>
            </ul>

            <div class="dropdown">
                <button class="btn sd-btn sd-btn-primary dropdown-toggle" type="button" id="downloadDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    Download App
                </button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="downloadDropdown">
                    <li><a class="dropdown-item" href="https://apps.apple.com/pk/app/shedrives/id6670424505" target="_blank" rel="noopener">Download for iOS</a></li>
                    <li><a class="dropdown-item" href="https://play.google.com/store/apps/details?id=com.mtech.sdrives" target="_blank" rel="noopener">Download for Android</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>
