@extends('layouts.app')

@section('title', 'Contact Us - AndinTransport')

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

    <!-- #TESTIMONIALS -->
    <section class="section testi text-center has-bg-image" style="background-image: url('{{ asset('images/hero/hero2-modified.jpeg') }}')" aria-label="testimonials">
    </section>

    <!-- #RESERVATION / contact us -->
    <section class="reservation" id="reservation">
        <div class="container">
            <div class="form reservation-form bg-black-10">
                <form id="reservation-form" class="form-left">
                    <h2 class="headline-1 text-center">Online Reservation</h2>
                    <p class="form-text text-center">
                        Booking request <a href="tel:+6281911966906" class="link">+62-819-11966906</a>
                        or fill out the order form
                    </p>

                    <!-- Function Reservation -->
                    <div class="input-wrapper">
                        <input type="text" id="name" name="name" placeholder="Your Name" autocomplete="off" class="input-field" required>
                        <input type="tel" id="phone" name="phone" placeholder="Phone Number" autocomplete="off" class="input-field" required>
                    </div>

                    <div class="input-wrapper">
                        <div class="icon-wrapper">
                            <ion-icon name="car-outline" aria-hidden="true"></ion-icon>
                            <select id="car" name="car" class="input-field" required>
                                <option value="Toyota Innova Diesel">Toyota Innova Diesel</option>
                                <option value="Toyota Innova TRD Diesel">Toyota Innova TRD Diesel</option>
                                <option value="Toyota Fortuner GR">Toyota Fortuner GR</option>
                                <option value="Toyota Innova Type G">Toyota Innova Type G</option>
                                <option value="Toyota Innova Venturer">Toyota Innova Venturer</option>
                                <option value="Toyota Hiace Luxury">Toyota Hiace Luxury</option>
                                <option value="Mercedes Benz Sprinter">Mercedes Benz Sprinter</option>
                            </select>
                            <ion-icon name="chevron-down" aria-hidden="true"></ion-icon>
                        </div>

                        <div class="icon-wrapper">
                            <ion-icon name="calendar-clear-outline" aria-hidden="true"></ion-icon>
                            <input type="date" id="reservation-date" name="reservation-date" class="input-field" required>
                            <ion-icon name="chevron-down" aria-hidden="true"></ion-icon>
                        </div>

                        <div class="icon-wrapper">
                            <ion-icon name="time-outline" aria-hidden="true"></ion-icon>
                            <select id="time" name="time" class="input-field" required>
                                <option value="08:00am">08 : 00 am</option>
                                <option value="09:00am">09 : 00 am</option>
                                <option value="10:00am">10 : 00 am</option>
                                <option value="11:00am">11 : 00 am</option>
                                <option value="12:00pm">12 : 00 pm</option>
                                <option value="01:00pm">01 : 00 pm</option>
                                <option value="02:00pm">02 : 00 pm</option>
                                <option value="03:00pm">03 : 00 pm</option>
                                <option value="04:00pm">04 : 00 pm</option>
                                <option value="05:00pm">05 : 00 pm</option>
                                <option value="06:00pm">06 : 00 pm</option>
                                <option value="07:00pm">07 : 00 pm</option>
                                <option value="08:00pm">08 : 00 pm</option>
                                <option value="09:00pm">09 : 00 pm</option>
                                <option value="10:00pm">10 : 00 pm</option>
                            </select>
                            <ion-icon name="chevron-down" aria-hidden="true"></ion-icon>
                        </div>
                    </div>

                    <textarea id="message" name="message" placeholder="Message" autocomplete="off" class="input-field"></textarea>

                    <button type="button" class="btn btn-secondary" onclick="sendToWhatsApp()">
                        <span class="text text-1">Order</span>
                        <span class="text text-2" aria-hidden="true">By Whatsapp</span>
                    </button>
                </form>

                <!-- Function Reservation End / contact us-->
                <div class="form-right text-center" style="background-image: url('{{ asset('images/form-pattern.png') }}')">
                    <h2 class="headline-1 text-center">Contact Us</h2>
                    <p class="contact-label">Booking Request</p>
                    <a href="tel:+88123123456" class="body-1 contact-number hover-underline">+62-819-11966906</a>
                    <div class="separator"></div>
                    <p class="contact-label">Location</p>
                    <address class="body-4">
                        Tenggilis Mejoyo V / 19, Surabaya, JawaTimur, ID <br>
                    </address>
                    <p class="contact-label">Open Hours</p>
                    <p class="body-4">
                        Monday to Friday <br>
                        07.00 am - 5.30pm
                    </p>
                </div>
            </div>
        </div>
    </section>

    <script>
        function sendToWhatsApp() {
            // Ambil nilai dari form
            const name = document.getElementById("name").value;
            const phone = document.getElementById("phone").value;
            const car = document.getElementById("car").value;
            const date = document.getElementById("reservation-date").value;
            const time = document.getElementById("time").value;
            const message = document.getElementById("message").value;

            // Buat teks pesan untuk WhatsApp
            const textMessage = `Halo, saya ingin melakukan reservasi mobil:\n\n` +
                                `Nama: ${name}\n` +
                                `Telepon: ${phone}\n` +
                                `Mobil: ${car}\n` +
                                `Tanggal: ${date}\n` +
                                `Waktu: ${time}\n` +
                                `Pesan: ${message}`;

            // Buat URL wa.me untuk mengirim pesan
            const whatsappUrl = `https://wa.me/6285336565485?text=${encodeURIComponent(textMessage)}`;

            // Redirect user ke WhatsApp
            window.open(whatsappUrl, '_blank');
        }
    </script>
@endsection
