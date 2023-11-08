<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/icon/soft-star-red.svg" type="image/x-icon">
    <title>2205551015 - Gede Reva Prasetya Paramarta</title>

    <link rel="stylesheet" href="{{asset('styles/main.css')}}">
    <link rel="stylesheet" href="{{asset('styles/landingpage.css')}}">
    <link rel="stylesheet" href="{{asset('lib/aos/aos.css')}}">
</head>
<body>

    <div class="loader active" style="background-image: url({{asset('assets/img/cloud-bg.png')}});">
        <div class="loader-wrap">
            <img src="{{asset('assets/icon/soft-star-red.svg')}}" alt="" class="star" data-aos="fade-up">
            <img src="{{asset('assets/icon/reva-prasetya.svg')}}" alt="" class="star" data-aos="fade-up" data-aos-delay="200">
        </div>
    </div>

    <!-- Header Section -->
    <header>
        <a href="/" class="logo">
            <img src="{{asset('assets/icon/reva-prasetya.svg')}}" alt="">
        </a>
        <div class="line"></div>
        <img src="{{asset('assets/icon/soft-star.svg')}}" alt="" class="star" data-aos="fade-down" data-aos-delay="1400">
        <div class="line"></div>
        <nav>
            <ul>
                <li>
                    <a class="spaced" href="#hero">About me</a>
                </li>
                <li>
                    <a class="spaced" href="#tugas">Tugas</a>
                </li>
            </ul>
        </nav>
    </header>

    <!-- Hero Section -->
    <section id="hero" class="bg-img" style="background-image: url({{asset('assets/img/cloud-bg.png')}});" >
        <div class="container">
            <div  data-aos="fade-up" data-aos-delay="1000">
                <h1 class="hero-title">
                    Gede Reva
                    <!-- Reva  -->
                    <br>Prasetya Paramarta
                </h1>
            </div>
            <img src="{{asset('assets/img/reva.png')}}" class="hero-img" alt="">
            <div class="hero-detail">
                <h4 class="moto spaced" name="Motto"data-aos="fade-up" data-aos-delay="800">디자인하고 개발하다</h4>
                <h4 class="nim spaced" name="NIM" data-aos="fade-up" data-aos-delay="1000">2205551015</h4>
            </div>
        </div>
    </section>

    <!-- Rolling text Section -->
    <section id="skill" style="background-image: url({{asset('assets/img/cloud-bg.png')}});" >
        <div class="s-content">
            <div class="marqueeStyle">
                <div class="skill-wrap">
                    <div class="line"></div>
                    <h3>Mahasiswa</h3>
                    <div class="line"></div>
                    <h3>Teknologi Informasi</h3>
                    <div class="line"></div>
                    <h3>Universitas Udayana</h3>
                </div>
            </div>
            
            <div class="marqueeStyle2">
                <div class="skill-wrap">
                    <div class="line"></div>
                    <h3>Mahasiswa</h3>
                    <div class="line"></div>
                    <h3>Teknologi Informasi</h3>
                    <div class="line"></div>
                    <h3>Universitas Udayana</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- Tugas Section -->
    <section id="tugas" style="background-image: url({{asset('assets/img/cloud-bg.png')}});">
        <div class="container">
            <h1 data-aos="fade" data-duration="5000">Assignments</h1>
            <div class="row"> 
                {{-- <div class="col t-left-card" data-aos="fade-up">
                    <a href="/tugas/tugas-javascript/" class="tugas-card" target="_blank">
                        <figure class="img-fit">
                            <img src="/tugas/tugas-javascript/thumbnail.jpg" alt="">
                        </figure>
                        <h3>Tugas Javascript</h3>
                    </a>
                </div>
                <div class="col t-right-card" data-aos="fade-up">
                    <a href="/tugas/tugas-form-php/"  class="tugas-card" target="_blank">
                        <figure class="img-fit">
                            <img src="/tugas/tugas-form-php/thumbnail.jpg" alt="">
                        </figure>
                        <h3>Tugas Form PHP - No Database</h3>
                    </a>
                </div>
                <div class="col t-left-card" data-aos="fade-up">
                    <a href="/tugas/tugas-form-with-db/"  class="tugas-card" target="_blank">
                        <figure class="img-fit">
                            <img src="/tugas/tugas-form-with-db/thumbnail.jpg" alt="">
                        </figure>
                        <h3>Tugas Form PHP - With Database</h3>
                    </a>
                </div> --}}
                <div class="col t-left-card" data-aos="fade-up">
                    <a href="/mahasiswa"  class="tugas-card" target="_blank">
                        <figure class="img-fit">
                            <img src="{{asset('assets/img/thumbnail/laravel.jpg')}}" alt="">
                        </figure>
                        <h3>Tugas Aplikasi Laravel - Data Mahasiswa</h3>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <footer style="background-image: url({{asset('assets/img/cloud-bg.png')}});">
        <a href="https://instagram.com/reva.tha">
            <h4 class="username-ig" style="background-image: url({{asset('assets/img/cloud-bg.png')}});">reva.tha</h4>
        </a>
    </footer>


    <script src="{{asset('lib/aos/aos.js')}}"></script>
    <script src="{{asset('scripts/main.js')}}"></script>
</body>
</html>