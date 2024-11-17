@extends('layouts.app')

@section('title', 'News - AndinTransport')

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

    <!-- #EVENT / News -->
    <section class="section event bg-black-10" aria-label="event">
        <div class="container">

            <p class="section-subtitle label-2 text-center">Recent Updates</p>
            <h2 class="section-title headline-1 text-center">Upcoming Event</h2>

            <ul class="grid-list">
                <li>
                    <div class="event-card has-before hover:shine">
                        <div class="card-banner img-holder" style="--width: 350; --height: 450;">
                            <img src="{{ asset('images/blog/dpr.jpeg') }}" width="350" height="450" loading="lazy"
                                alt="Flavour so good you’ll try to eat with your eyes." class="img-cover">
                            <time class="publish-date label-2" datetime="2024-06-15">15/06/2024</time>
                        </div>

                        <div class="card-content">
                            <p class="card-subtitle label-2 text-center">DPR RI</p>
                            <h3 class="card-title title-2 text-center">
                                Penggunaan Jasa AndinTransport untuk Patwal
                            </h3>
                        </div>

                    </div>
                </li>

                <li>
                    <div class="event-card has-before hover:shine">
                        <div class="card-banner img-holder" style="--width: 350; --height: 450;">
                            <img src="{{ asset('images/blog/smelter.jpeg') }}" width="350" height="450" loading="lazy"
                                alt="Flavour so good you’ll try to eat with your eyes." class="img-cover">
                            <time class="publish-date label-2" datetime="2024-06-15">15/06/2024</time>
                        </div>

                        <div class="card-content">
                            <p class="card-subtitle label-2 text-center">PT. Smelter Indonesia</p>
                            <h3 class="card-title title-2 text-center">
                                Penjemputan Staff Freeport Indonesia
                            </h3>
                        </div>

                    </div>
                </li>

                <li>
                    <div class="event-card has-before hover:shine">
                        <div class="card-banner img-holder" style="--width: 350; --height: 450;">
                            <img src="{{ asset('images/blog/Document-3.JPG') }}" width="350" height="450" loading="lazy"
                                alt="Flavour so good you’ll try to eat with your eyes." class="img-cover">
                            <time class="publish-date label-2" datetime="2024-07-03">03/07/2024</time>
                        </div>

                        <div class="card-content">
                            <p class="card-subtitle label-2 text-center">Preparing for customer Order</p>
                            <h3 class="card-title title-2 text-center">
                                Menyiapkan sejumlah mobil untuk customer
                            </h3>
                        </div>

                    </div>
                </li>

            </ul>

        </div>
    </section>
@endsection
