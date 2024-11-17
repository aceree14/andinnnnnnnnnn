<!-- 
    - #PRELOADER
-->
<div class="preload" data-preaload>
    <div class="circle"></div>
    <p class="text">Andin</p>
</div>

<!-- 
    - #TOP BAR
-->
<div class="topbar">
    <div class="container">
        <address class="topbar-item">
            <div class="icon">
                <ion-icon name="location-outline" aria-hidden="true"></ion-icon>
            </div>
            <span class="span">Tenggilis Mejoyo V / 19, Kota Surabaya, JawaTimur, ID</span>
        </address>

        <div class="separator"></div>

        <div class="topbar-item item-2">
            <div class="icon">
                <ion-icon name="time-outline" aria-hidden="true"></ion-icon>
            </div>
            <span class="span">Daily : 7.00 am to 17.00 pm</span>
        </div>

        <a href="tel:+6281911966906" class="topbar-item link">
            <div class="icon">
                <ion-icon name="call-outline" aria-hidden="true"></ion-icon>
            </div>
            <span class="span">+62 819 119 66906</span>
        </a>

        <div class="separator"></div>

        <a href="mailto:andintransport@gmail.com" class="topbar-item link">
            <div class="icon">
                <ion-icon name="mail-outline" aria-hidden="true"></ion-icon>
            </div>
            <span class="span">andintransport@gmail.com</span>
        </a>
    </div>
</div>

<!-- 
    - #HEADER
-->
<header class="header" data-header>
    <div class="container">
        <!-- Logo -->
        <a href="{{ url('/') }}" class="logo">
            <img src="{{ asset('images/logo/AndinTransport_linear.png') }}" width="160" height="50" alt="Home">
        </a>

        <nav class="navbar" data-navbar>
            <!-- Close Button -->
            <button class="close-btn" aria-label="close menu" data-nav-toggler>
                <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
            </button>

            <!-- Logo (for mobile) -->
            <a href="{{ url('/') }}" class="logo">
                <img src="{{ asset('images/logo/AndinTransport_linear.png') }}" width="160" height="50" alt="AndinTransport - Home">
            </a>

            <!-- Navbar List -->
            <ul class="navbar-list">
                <!-- Home -->
                <li class="navbar-item">
                    <a href="{{ url('/') }}" class="navbar-link hover-underline {{ Request::is('/') ? 'active' : '' }}">
                        <div class="separator"></div>
                        <span class="span">Home</span>
                    </a>
                </li>
            
                <!-- Unit -->
                <li class="navbar-item">
                    <a href="{{ url('/unit') }}" class="navbar-link hover-underline {{ Request::is('unit') ? 'active' : '' }}">
                        <div class="separator"></div>
                        <span class="span">Unit</span>
                    </a>
                </li>
            
                <!-- News -->
                <li class="navbar-item">
                    <a href="{{ url('/news') }}" class="navbar-link hover-underline {{ Request::is('news') ? 'active' : '' }}">
                        <div class="separator"></div>
                        <span class="span">News</span>
                    </a>
                </li>
            
                <!-- About Us -->
                <li class="navbar-item">
                    <a href="{{ url('/about') }}" class="navbar-link hover-underline {{ Request::is('about') ? 'active' : '' }}">
                        <div class="separator"></div>
                        <span class="span">About Us</span>
                    </a>
                </li>
            
                <!-- Contact Us -->
                <li class="navbar-item">
                    <a href="{{ url('/contact') }}" class="navbar-link hover-underline {{ Request::is('contact') ? 'active' : '' }}">
                        <div class="separator"></div>
                        <span class="span">Contact Us</span>
                    </a>
                </li>
            </ul>
            

            <!-- Additional Info (for mobile) -->
            <div class="text-center">
                <p class="headline-1 navbar-title">Visit Us</p>
                <address class="body-4">Restaurant St, Delicious City, <br>London 9578, UK</address>
                <p class="body-4 navbar-text">Open: 9.30 am - 2.30pm</p>
                <a href="mailto:booking@grilli.com" class="body-4 sidebar-link">booking@grilli.com</a>
                <div class="separator"></div>
                <p class="contact-label">Booking Request</p>
                <a href="tel:+88123123456" class="body-1 contact-number hover-underline">+88-123-123456</a>
            </div>
        </nav>

        <!-- WhatsApp Button -->
        <a href="https://wa.me/6281911966906?text=Halo%20Permisi%20Saya%20ingin%20bertanya%20mengenai%20Sewa%20Mobil" class="btn btn-secondary">
            <span class="text text-1">Book now</span>
            <span class="text text-2" aria-hidden="true">by whatsapp</span>
        </a>

        <!-- Mobile Menu Toggle Button -->
        <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
            <span class="line line-1"></span>
            <span class="line line-2"></span>
            <span class="line line-3"></span>
        </button>

        <!-- Mobile Menu Overlay -->
        <div class="overlay" data-nav-toggler data-overlay></div>
    </div>
</header>
