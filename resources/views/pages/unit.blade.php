@extends('layouts.app') {{-- Menghubungkan halaman ini ke layout utama app.blade.php --}}

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

    <!-- Menu Section Start -->
    <section class="section menu" aria-label="menu-label" id="menu">
        <div class="container">
            <p class="section-subtitle text-center label-2">Our Unit <br>by</p>
            <h2 class="headline-1 section-title text-center">Andin Transport</h2>
            <ul class="grid-list">
                <!-- Unit 1 -->
                <li>
                    <div class="menu-card hover:card">
                        <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                            <img src="{{ asset('images/product/png/innova-diesel.png') }}" width="100" height="100" loading="lazy" alt="Innova Diesel" class="img-cover">
                        </figure>
                        <div>
                            <div class="title-wrapper">
                                <h3 class="title-3">
                                    <a href="https://wa.me/6281911966906?text=Halo%20kak,%20apakah%20%22Toyota%20Innova%20Diesel%22%20nya%20tersedia?" class="card-title">Toyota<br>Innova Diesel</a>
                                </h3>
                                <span class="span title-2"></span>
                            </div>
                            <p class="card-text label-1">
                                Tomatoes, green bell pepper, sliced cucumber onion, olives, and feta cheese.
                            </p>
                        </div>
                    </div>
                </li>
                <!-- Unit 2 -->
                <li>
                    <div class="menu-card hover:card">
                        <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                            <img src="{{ asset('images/product/png/innova-g.png') }}" width="100" height="100" loading="lazy" alt="Innova G" class="img-cover">
                        </figure>
                        <div>
                            <div class="title-wrapper">
                                <h3 class="title-3">
                                    <a href="https://wa.me/6281911966906?text=Halo%20kak,%20apakah%20%22Toyota%20Innova%20Type%20G%22%20nya%20tersedia?" class="card-title">Toyota<br>Innova Type G</a>
                                </h3>
                                <span class="span title-2"></span>
                            </div>
                            <p class="card-text label-1">
                                Vegetables, cheeses, ground meats, tomato sauce, seasonings and spices
                            </p>
                        </div>
                    </div>
                </li>
                <!-- Unit 3 -->
                <li>
                    <div class="menu-card hover:card">
                        <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                            <img src="{{ asset('images/product/png/innova-trd-diesel.png') }}" width="100" height="100" loading="lazy" alt="Innova Trd Diesel" class="img-cover">
                        </figure>
                        <div>
                            <div class="title-wrapper">
                                <h3 class="title-3">
                                    <a href="https://wa.me/6281911966906?text=Halo%20kak,%20apakah%20%22Toyota%20Innova%20TRD%20Diesel%22%20nya%20tersedia?" class="card-title">Toyota<br>Innova TRD Diesel</a>
                                </h3>
                                <span class="span title-2"></span>
                            </div>
                            <p class="card-text label-1">
                                Typesetting industry lorem Lorem Ipsum is simply dummy text of the priand.
                            </p>
                        </div>
                    </div>
                </li>
                <!-- Unit 4 -->
                <li>
                    <div class="menu-card hover:card">
                        <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                            <img src="{{ asset('images/product/png/innova-venturer.png') }}" width="100" height="100" loading="lazy" alt="Innova Venturer" class="img-cover">
                        </figure>
                        <div>
                            <div class="title-wrapper">
                                <h3 class="title-3">
                                    <a href="https://wa.me/6281911966906?text=Halo%20kak,%20apakah%20%22Toyota%20Innova%20Venturer%22%20nya%20tersedia?" class="card-title">Toyota<br>Innova Venturer</a>
                                </h3>
                                <span class="span title-2"></span>
                            </div>
                            <p class="card-text label-1">
                                Vegetables, cheeses, ground meats, tomato sauce, seasonings and spices.
                            </p>
                        </div>
                    </div>
                </li>
                <!-- Unit 5 -->
                <li>
                    <div class="menu-card hover:card">
                        <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                            <img src="{{ asset('images/product/png/toyota-fortuner-gr.png') }}" width="100" height="100" loading="lazy" alt="Fortuner GR" class="img-cover">
                        </figure>
                        <div>
                            <div class="title-wrapper">
                                <h3 class="title-3">
                                    <a href="https://wa.me/6281911966906?text=Halo%20kak,%20apakah%20%22Toyota%20Fortuner%20GR%22%20nya%20tersedia?" class="card-title">Toyota<br>Fortuner GR</a>
                                </h3>
                                <span class="span title-2"></span>
                            </div>
                            <p class="card-text label-1">
                                Avocados with crab meat, red onion, crab salad stuffed red bell pepper and green bell pepper.
                            </p>
                        </div>
                    </div>
                </li>
                <!-- Unit 6 -->
                <li>
                    <div class="menu-card hover:card">
                        <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                            <img src="{{ asset('images/product/png/toyota-hiace-luxury.png') }}" width="100" height="100" loading="lazy" alt="Toyota Hiace" class="img-cover">
                        </figure>
                        <div>
                            <div class="title-wrapper">
                                <h3 class="title-3">
                                    <a href="https://wa.me/6281911966906?text=Halo%20kak,%20apakah%20%22Toyota%20Hiace%20Luxury%22%20nya%20tersedia?" class="card-title">Toyota<br>Hiace Luxury</a>
                                </h3>
                                <span class="span title-2"></span>
                            </div>
                            <p class="card-text label-1">
                                Vegetables, cheeses, ground meats, tomato sauce, seasonings and spices
                            </p>
                        </div>
                    </div>
                </li>
            </ul>

            <p class="menu-text text-center">
                Open Monday - Friday <span class="span">7:00 am</span> to <span class="span">5:00 pm</span>
            </p>
            <a href="#reservation" class="btn btn-primary">
                <span class="text text-1">Order</span>
                <span class="text text-2" aria-hidden="true">Now</span>
            </a>
            <img src="{{ asset('images/shape-5.png') }}" width="921" height="1036" loading="lazy" alt="shape" class="shape shape-2 move-anim">
            <img src="{{ asset('images/shape-6.png') }}" width="343" height="345" loading="lazy" alt="shape" class="shape shape-3 move-anim">
        </div>
    </section>
    <!-- Menu Section End -->
@endsection
