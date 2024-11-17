<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Primary Meta Tags -->
    <title>@yield('title', 'AndinTransport')</title>
    <meta name="title" content="AndinTransport">
    <meta name="description" content=" - ">

    <!-- Logo Title -->
    <link rel="shortcut icon" href="{{ asset('images/logo/AndinTransportLogo_Resize.png') }}" type="image/svg+xml">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&family=Forum&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Preload Images -->
    <link rel="preload" as="image" href="{{ asset('images/hero/hero1-modified.JPEG') }}">
    <link rel="preload" as="image" href="{{ asset('images/hero/hero2-modified.jpeg') }}">
    <link rel="preload" as="image" href="{{ asset('images/hero/hero3-modified.jpeg') }}">

    @yield('styles') <!-- Tempat untuk menyisipkan CSS tambahan dari halaman -->
</head>
<body>
    @include('partials.header') <!-- Header -->

    <main>
        @yield('content') <!-- Konten halaman -->
    </main>

    @include('partials.footer') <!-- Footer -->

    <script src="{{ asset('js/script.js') }}"></script>
      <!-- 
    - ionicon link
     -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
     <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    @yield('scripts') <!-- Tempat untuk menyisipkan script tambahan dari halaman -->
</body>
</html>
