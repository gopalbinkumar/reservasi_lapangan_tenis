<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TennisCourt - Tempat Bermain Tenis Terbaik</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Font Awesome 6.5.1 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('css/welcome.css')}}">
    <link rel="stylesheet" href="{{asset('css/components/navtop.css')}}">
    <link rel="stylesheet" href="{{asset('css/components/footers.css')}}">
</head>

<body>
    @include('components.navtop')

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="hero-decoration" data-aos="fade-down" data-aos-duration="1000"></div>
        <div class="hero-content">
            <h1 data-aos="fade-up" data-aos-duration="1000">Selamat Datang di TennisCourt</h1>
            <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">Nikmati pengalaman bermain tenis terbaik
                dengan fasilitas modern dan lapangan berkualitas</p>
            <button class="btn btn-primary" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                <i class="bi bi-calendar-check"></i>
                Pesan Sekarang
            </button>
        </div>
    </section>

   <!-- About Section -->
<section class="about" id="about">
    <div class="container">
        <div class="section-header">
            <h2 data-aos="fade-down" data-aos-duration="1000">Tentang Kami</h2>
            <p data-aos="fade-up" data-aos-duration="1000">Pengalaman bermain tenis terbaik untuk semua kalangan</p>
        </div>
        <div class="about-content">
            <div class="about-image" data-aos="fade-right" data-aos-duration="1000">
                <img src="https://images.unsplash.com/photo-1554068865-24cecd4e34b8?auto=format&q=80&w=1200"
                    alt="Tennis Court Facility">
            </div>
            <div class="about-text" data-aos="fade-left" data-aos-duration="1000">
                <h3>Fasilitas Terbaik untuk Anda</h3>
                <p>TennisCourt hadir dengan standar internasional dan fasilitas modern...</p>
                <div class="features">
                    <!-- Feature Item 1 -->
                    <div class="feature-item" 
                         data-aos="fade-up" 
                         data-aos-duration="800" 
                         data-aos-delay="100"
                         data-aos-offset="0">
                        <i class="bi bi-shield-check" 
                           data-aos="zoom-in" 
                           data-aos-delay="400"
                           data-aos-duration="600"></i>
                        <span data-aos="fade-left" 
                              data-aos-delay="500"
                              data-aos-duration="600">Standar Internasional</span>
                    </div>

                    <!-- Feature Item 2 -->
                    <div class="feature-item" 
                         data-aos="fade-up" 
                         data-aos-duration="800" 
                         data-aos-delay="300"
                         data-aos-offset="0">
                        <i class="bi bi-brightness-high" 
                           data-aos="zoom-in" 
                           data-aos-delay="600"
                           data-aos-duration="600"></i>
                        <span data-aos="fade-left" 
                              data-aos-delay="700"
                              data-aos-duration="600">Indoor & Outdoor Courts</span>
                    </div>

                    <!-- Feature Item 3 -->
                    <div class="feature-item" 
                         data-aos="fade-up" 
                         data-aos-duration="800" 
                         data-aos-delay="500"
                         data-aos-offset="0">
                        <i class="bi bi-lightning-charge" 
                           data-aos="zoom-in" 
                           data-aos-delay="800"
                           data-aos-duration="600"></i>
                        <span data-aos="fade-left" 
                              data-aos-delay="900"
                              data-aos-duration="600">Pencahayaan Modern</span>
                    </div>

                    <!-- Feature Item 4 -->
                    <div class="feature-item" 
                         data-aos="fade-up" 
                         data-aos-duration="800" 
                         data-aos-delay="700"
                         data-aos-offset="0">
                        <i class="bi bi-water" 
                           data-aos="zoom-in" 
                           data-aos-delay="1000"
                           data-aos-duration="600"></i>
                        <span data-aos="fade-left" 
                              data-aos-delay="1100"
                              data-aos-duration="600">Sistem Drainase Baik</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- Courts Section -->
    <section class="courts" id="courts">
        <div class="container">

            <div class="section-header">
                <h2 data-aos="fade-down" data-aos-duration="1000">Lapangan Kami</h2>
                <p data-aos="fade-up" data-aos-duration="1000">Pilih lapangan sesuai kebutuhan Anda</p>
            </div>

            <div class="courts-grid">
                <!-- Premium Indoor Court -->
                <div class="court-card" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                    <div class="court-image" data-aos="zoom-in" data-aos-delay="150">
                        <img src="https://images.unsplash.com/photo-1622163642998-1ea32b0bbc67?auto=format&q=80&w=800"
                            alt="Premium Indoor Court" loading="lazy">
                    </div>
                    <div class="court-content">
                        <h3 data-aos="fade-up" data-aos-delay="200">Court A1</h3>
                        <div class="court-features" data-aos="fade-up" data-aos-delay="250">
                            <i class="fa-solid fa-building-shield" title="Premium Indoor Facility"></i>
                            <i class="fa-solid fa-snowflake fa-beat-fade" title="Full AC System"></i>
                            <i class="fa-solid fa-camera-security" title="HD Replay Camera"></i>
                            <i class="fa-solid fa-lightbulb-exclamation" title="Smart LED Lighting"></i>
                        </div>
                        <div class="court-price" data-aos="fade-up" data-aos-delay="300">
                            <span class="amount">Rp 150,000</span>
                            <span class="period">/jam</span>
                        </div>
                        <button class="book-btn" data-aos="fade-up" data-aos-delay="350">
                            <i class="fa-solid fa-calendar-check fa-shake"></i>
                            Reservasi Sekarang
                        </button>
                    </div>
                </div>

                <!-- Standard Indoor Court -->
                <div class="court-card" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <div class="court-image" data-aos="zoom-in" data-aos-delay="250">
                        <img src="https://images.unsplash.com/photo-1554068865-24cecd4e34b8?auto=format&q=80&w=800"
                            alt="Standard Indoor Court" loading="lazy">
                    </div>
                    <div class="court-content">
                        <h3 data-aos="fade-up" data-aos-delay="300">Court A2</h3>
                        <div class="court-features" data-aos="fade-up" data-aos-delay="350">
                            <i class="fa-solid fa-building" title="Indoor Facility"></i>
                            <i class="fa-solid fa-temperature-half" title="AC Available"></i>
                            <i class="fa-solid fa-lights" title="Standard Lighting"></i>
                        </div>
                        <div class="court-price" data-aos="fade-up" data-aos-delay="400">
                            <span class="amount">Rp 120,000</span>
                            <span class="period">/jam</span>
                        </div>
                        <button class="book-btn" data-aos="fade-up" data-aos-delay="450">
                            <i class="fa-solid fa-calendar-plus fa-bounce"></i>
                            Reservasi Sekarang
                        </button>
                    </div>
                </div>

                <!-- Premium Outdoor Court -->
                <div class="court-card" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                    <div class="court-image" data-aos="zoom-in" data-aos-delay="350">
                        <img src="https://images.unsplash.com/photo-1595435934249-5df7ed86e1c0?auto=format&q=80&w=800"
                            alt="Premium Outdoor Court" loading="lazy">
                    </div>
                    <div class="court-content">
                        <h3 data-aos="fade-up" data-aos-delay="400">Court B1</h3>
                        <div class="court-features" data-aos="fade-up" data-aos-delay="450">
                            <i class="fa-solid fa-sun-bright fa-spin" title="Premium Outdoor"></i>
                            <i class="fa-solid fa-umbrella-beach" title="Premium Rain Protection"></i>
                            <i class="fa-solid fa-wind-turbine" title="Wind Shield System"></i>
                            <i class="fa-solid fa-bolt-lightning" title="Premium Night Lighting"></i>
                        </div>
                        <div class="court-price" data-aos="fade-up" data-aos-delay="500">
                            <span class="amount">Rp 130,000</span>
                            <span class="period">/jam</span>
                        </div>
                        <button class="book-btn" data-aos="fade-up" data-aos-delay="550">
                            <i class="fa-solid fa-calendar-plus fa-bounce"></i>
                            Reservasi Sekarang
                        </button>
                    </div>
                </div>

                <!-- Standard Outdoor Court -->
                <div class="court-card" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                    <div class="court-image" data-aos="zoom-in" data-aos-delay="450">
                        <img src="https://images.unsplash.com/photo-1614743758466-e569f4791116?auto=format&q=80&w=800"
                            alt="Standard Outdoor Court" loading="lazy">
                    </div>
                    <div class="court-content">
                        <h3 data-aos="fade-up" data-aos-delay="500">Court B2</h3>
                        <div class="court-features" data-aos="fade-up" data-aos-delay="550">
                            <i class="fa-solid fa-sun" title="Outdoor Standard"></i>
                            <i class="fa-solid fa-umbrella" title="Basic Rain Cover"></i>
                            <i class="fa-solid fa-lightbulb" title="Basic Lighting"></i>
                        </div>
                        <div class="court-price" data-aos="fade-up" data-aos-delay="600">
                            <span class="amount">Rp 100,000</span>
                            <span class="period">/jam</span>
                        </div>
                        <button class="book-btn" data-aos="fade-up" data-aos-delay="650">
                            <i class="fa-solid fa-calendar-plus fa-bounce"></i>
                            Reservasi Sekarang
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('components.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>