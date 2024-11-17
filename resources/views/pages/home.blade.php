@extends('layouts.app')

@section('title', 'Home - AndinTransport')

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

    <!-- #SERVICE -->
    <section class="section service bg-black-10 text-center" aria-label="service">
        <div class="container">
            <p class="section-subtitle label-2">Our Best Seller Unit</p>
            <h2 class="headline-1 section-title"></h2>
            <p class="section-text">
                Untuk perjalanan yang sempurna, Toyota Innova dan Mercedes Benz Sprinter - kombinasi kenyamanan, ruang, dan kemewahan yang tak tertandingi.
            </p>

            <ul class="grid-list">
                <li>
                    <div class="service-card">
                        <a href="#" class="has-before hover:shine">
                            <figure class="card-banner img-holder" style="--width: 285; --height: 336;">
                                <img src="{{ asset('images/product/innova-diesel.jpg') }}" width="285" height="336" loading="lazy" alt="Innova Diesel" class="img-cover">
                            </figure>
                        </a>
                        <div class="card-content">
                            <h3 class="title-4 card-title">
                                <a href="#">Toyota <br> Innova Diesel</a>
                            </h3>
                            <a href="https://wa.me/6281911966906?text=Halo,%20apakah%20%22Toyota%20Innova%20Diesel%22%20nya%20tersedia%20?" class="btn-text hover-underline label-2">Book now</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="service-card">
                        <a href="#" class="has-before hover:shine">
                            <figure class="card-banner img-holder" style="--width: 285; --height: 336;">
                                <img src="{{ asset('images/product/mercedesBenz-sprinter.jpeg') }}" width="285" height="336" loading="lazy" alt="Sprinter" class="img-cover">
                            </figure>
                        </a>
                        <div class="card-content">
                            <h3 class="title-4 card-title">
                                <a href="#">Mercedes Benz Sprinter</a>
                            </h3>
                            <a href="https://wa.me/6281911966906?text=Halo,%20apakah%20%22Mercedez%20benz%20Sprinter%22%20nya%20tersedia%20?" class="btn-text hover-underline label-2">Book now</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="service-card">
                        <a href="#" class="has-before hover:shine">
                            <figure class="card-banner img-holder" style="--width: 285; --height: 336;">
                                <img src="{{ asset('images/product/innova-g.jpeg') }}" width="285" height="336" loading="lazy" alt="Innova-g" class="img-cover">
                            </figure>
                        </a>
                        <div class="card-content">
                            <h3 class="title-4 card-title">
                                <a href="#">Toyota <br> Innova G</a>
                            </h3>
                            <a href="https://wa.me/6281911966906?text=Halo,%20apakah%20%22Toyota%20Innova%20Type%20G%22%20nya%20tersedia%20?" class="btn-text hover-underline label-2">Book Now</a>
                        </div>
                    </div>
                </li>
            </ul>
            <img src="{{ asset('images/shape-1.png') }}" width="246" height="412" loading="lazy" alt="shape" class="shape shape-1 move-anim">
            <img src="{{ asset('images/shape-2.png') }}" width="343" height="345" loading="lazy" alt="shape" class="shape shape-2 move-anim">
        </div>
    </section>

    <!-- #GOOGLE MAPS API -->
    <section class="special-dish text-center" aria-labelledby="dish-label">
        <div class="special-dish-banner">
            <div id="map" class="google-api-cover" style="width: 100%; height: 0;"></div>
            <script>
                function myMap() {
                    var mapCanvas = document.getElementById("map");
                    var myCenter = new google.maps.LatLng(-7.3224196475778545, 112.75967579772895);
                    var mapOptions = { center: myCenter, zoom: 18 };
                    var map = new google.maps.Map(mapCanvas, mapOptions);
                    var marker = new google.maps.Marker({
                        position: myCenter,
                        animation: google.maps.Animation.BOUNCE
                    });
                    marker.setMap(map);
                }
            </script>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD-3hNtLbvi65P2wqyhB7D44UJa8uZYG-M&callback=myMap"></script>
        </div>

        <div class="special-dish-content bg-black-10">
            <div class="container">
                <img src="{{ asset('images/icon/location.png') }}" width="50" height="50" loading="lazy" alt="badge" class="abs-img">
                <p class="section-subtitle label-2">Our Location</p>
                <p class="section-text">
                    Tenggilis Mejoyo V / 19, Kota Surabaya, JawaTimur, Indonesia
                </p>
                <div class="wrapper">
                    <del class="del body-3"></del>
                    <span class="span body-1"></span>
                </div>
                <a href="https://maps.app.goo.gl/qdiEUwcPhoGgRHabA" class="btn btn-primary">
                    <span class="text text-1">Visit</span>
                    <span class="text text-2" aria-hidden="true">Google Maps</span>
                </a>
            </div>
        </div>
    </section>
@endsection
