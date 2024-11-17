@extends('layouts.app')

@section('title', 'About Us - AndinTransport')

@section('content')
    <!-- Hero Start -->
    <section class="hero text-center" aria-label="home" id="home">
        <ul class="hero-slider" data-hero-slider>
            <!-- Hero Slider 1 -->
            <li class="slider-item active" data-hero-slider-item>
                <div class="slider-bg">
                    <img src="{{ asset('images/hero/hero1-modified.JPEG') }}" width="1880" height="950" alt="" class="img-cover">
                </div>
                <p class="label-2 section-subtitle slider-reveal">Your Trust, Our Journey</p>
                <h1 class="display-1 hero-title slider-reveal">
                    PILIHAN REVOLUSIONER UNTUK SEWA MOBIL YANG  <br>
                    BERKUALITAS
                </h1>
                <p class="body-2 hero-text slider-reveal"></p>
                <a href="#menu" class="btn btn-primary slider-reveal">
                    <span class="text text-1">Unit</span>
                    <span class="text text-2" aria-hidden="true">View Our Unit</span>
                </a>
            </li>

            <!-- Hero Slider 2 -->
            <li class="slider-item" data-hero-slider-item>
                <div class="slider-bg">
                    <img src="{{ asset('images/hero/hero2-modified.jpeg') }}" width="1880" height="950" alt="" class="img-cover">
                </div>
                <p class="label-2 section-subtitle slider-reveal">Cruising with Elegance</p>
                <h1 class="display-1 hero-title slider-reveal">
                    Kendaraan Berkualitas, Layanan Terpercaya <br>
                </h1>
                <p class="body-2 hero-text slider-reveal"></p>
                <a href="#menu" class="btn btn-primary slider-reveal">
                    <span class="text text-1">Unit</span>
                    <span class="text text-2" aria-hidden="true">View Our Unit</span>
                </a>
            </li>

            <!-- Hero Slider 3 -->
            <li class="slider-item" data-hero-slider-item>
                <div class="slider-bg">
                    <img src="{{ asset('images/hero/hero3-modified.jpeg') }}" width="1880" height="950" alt="" class="img-cover">
                </div>
                <p class="label-2 section-subtitle slider-reveal">Safe, Comfortable, and Reliable.</p>
                <h1 class="display-1 hero-title slider-reveal">
                    Percayakan Perjalanan Anda pada Kami: Aman, Nyaman, dan <br>
                    Terpercaya
                </h1>
                <p class="body-2 hero-text slider-reveal"></p>
                <a href="#menu" class="btn btn-primary slider-reveal">
                    <span class="text text-1">Unit</span>
                    <span class="text text-2" aria-hidden="true">View Our Unit</span>
                </a>
            </li>
        </ul>

        <button class="slider-btn prev" aria-label="slide to previous" data-prev-btn>
            <ion-icon name="chevron-back"></ion-icon>
        </button>

        <button class="slider-btn next" aria-label="slide to next" data-next-btn>
            <ion-icon name="chevron-forward"></ion-icon>
        </button>
    </section>
    <!-- Hero Close -->

    <!-- #ABOUT -->
    <section class="section about text-center" aria-labelledby="about-label" id="about">
        <div class="container">
            <div class="about-content">
                <p class="label-2 section-subtitle" id="about-label">Our Story</p>
                <h2 class="headline-1 section-title"></h2>
                <p class="section-text">
                    AndinTransport dimulai dengan satu mobil dan semangat pantang menyerah. Dari melayani kebutuhan antar jemput hingga menjadi escort duties dan keperluan bisnis pribadi, 
                    Dan AndinTransport akan terus mengembangkan usahanya menjadi perusahaan transportasi yang besar dan akan cukup dikenal masyarakat, dengan armada yang terjaga dan tim profesional, 
                    AndinTransport berkomitmen memberikan pelayanan terbaik untuk setiap pelanggan.
                </p>

                <div class="contact-label">Pesan Melalui Panggilan Sekarang</div>
                <a href="tel:+6281911966906" class="body-1 contact-number hover-underline">+62 (819) 119 66906</a>

                <a href="#" class="btn btn-primary">
                    <span class="text text-1">More Info</span>
                    <span class="text text-2" aria-hidden="true">Read More</span>
                </a>
            </div>

            <figure class="about-banner">
                <img src="{{ asset('images/about/about1.jpeg') }}" width="570" height="570" loading="lazy" alt="about banner"
                    class="w-100" data-parallax-item data-parallax-speed="1">

                <div class="abs-img abs-img-1 has-before" data-parallax-item data-parallax-speed="1.75">
                    <img src="{{ asset('images/logo/AndinTransportLogo.png') }}" width="285" height="285" loading="lazy" alt=""
                        class="w-100">
                </div>
            </figure>

            <img src="{{ asset('images/shape-3.png') }}" width="197" height="194" loading="lazy" alt="" class="shape">
        </div>
    </section>
@endsection
