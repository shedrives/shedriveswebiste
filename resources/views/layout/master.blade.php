<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- Cache-busting: the URL of a stylesheet changes whenever the file does,
         so a deploy can never leave a visitor on the previous CSS. --}}
    @php
        $v = function ($path) {
            $full = public_path($path);
            return asset($path) . '?v=' . (is_file($full) ? filemtime($full) : '1');
        };
    @endphp

    {{-- each page sets its own title/description; these are the fallbacks --}}
    @php
        $pageTitle = trim($__env->yieldContent('title', e('SheDrives — Safe Rides for Women in Pakistan')));
        $pageDesc  = trim($__env->yieldContent('description', e("SheDrives is Pakistan's first female ride-hailing platform. Safe rides, verified women captains, live tracking, and SOS support.")));
    @endphp

    <title>{!! $pageTitle !!}</title>
    <meta name="description" content="{!! $pageDesc !!}">
    <link rel="canonical" href="{{ url()->current() }}">

    {{-- how the page looks when shared on WhatsApp, Facebook, LinkedIn --}}
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="SheDrives">
    <meta property="og:title" content="{!! $pageTitle !!}">
    <meta property="og:description" content="{!! $pageDesc !!}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('Images/female-ride.jpg') }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{!! $pageTitle !!}">
    <meta name="twitter:description" content="{!! $pageDesc !!}">
    <meta name="twitter:image" content="{{ asset('Images/female-ride.jpg') }}">
    <meta name="theme-color" content="#ea048b">

    <link rel="shortcut icon" href="{{ asset('Images/IMG-20250802-WA0024.jpg') }}" />
    @include('layout.header')
</head>

<body>

    @include('layout.nav')

    <main>
        @yield('content')
    </main>

    @include('layout.footer')

    @include('layout.script')

</body>

</html>
