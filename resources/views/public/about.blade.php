@extends('layouts.app')

@section('title', 'Tentang Kami - Akunta')

@section('meta', 'Kenali Akunta lebih dekat, visi, misi, nilai perusahaan, serta perjalanan kami dalam membantu pertumbuhan bisnis di Indonesia.')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endpush


@section('content')


{{-- =====================================================
    HERO
===================================================== --}}
<section class="ak-about-hero">

    <div class="container">

        <div class="row align-items-center g-4 g-lg-5">

            {{-- LEFT --}}
            <div class="col-lg-6">

                <div class="ak-about-hero-copy">

                    <span class="ak-about-eyebrow">
                        TENTANG AKUNTA
                    </span>

                    <h1>
                        Bersama, Membangun
                        Masa Depan Bisnis yang
                        <span>Lebih Baik</span>
                    </h1>

                    <p>
                        Akunta hadir untuk membantu setiap bisnis di Indonesia
                        mengelola keuangan dengan lebih mudah, cepat, dan akurat.
                        Kami percaya teknologi yang tepat dapat membuka lebih banyak
                        peluang bagi pelaku bisnis untuk tumbuh dan mencapai potensi terbaiknya.
                    </p>

                    <a href="#siapa-kami" class="ak-about-main-btn">

                        Kenal Akunta Lebih Dekat

                        <span>→</span>

                    </a>

                </div>

            </div>


            {{-- RIGHT --}}
            <div class="col-lg-6">

                <div class="ak-about-hero-visual">

                    <span class="ak-about-hero-blob"></span>

                    <img
                        src="{{ asset('assets/tentangkami.png') }}"
                        alt="Tim Akunta"
                        class="ak-about-hero-image">

                    <div class="ak-about-hero-message">

                        Lebih dari sekadar software,
                        kami adalah partner pertumbuhan
                        bisnis Anda.

                    </div>

                    <span class="ak-about-hero-dots"></span>

                </div>

            </div>

        </div>

    </div>

</section>



{{-- =====================================================
    STATISTIC
===================================================== --}}
<section class="ak-about-stats">

    <div class="container">

        <div class="row g-3">


            {{-- ITEM 1 --}}
            <div class="col-xl-3 col-md-6">

                <div class="ak-stat-card">

                    <div class="ak-stat-icon">

                        <svg viewBox="0 0 24 24" aria-hidden="true">
                            <circle cx="8" cy="8" r="3"></circle>
                            <circle cx="17" cy="9" r="2.2"></circle>
                            <path d="M2.5 20c0-4.2 2.3-7 5.5-7s5.5 2.8 5.5 7"></path>
                            <path d="M14.5 14c3.5 0 5.5 2.2 5.5 5.5"></path>
                        </svg>

                    </div>

                    <div class="ak-stat-copy">

                        <h3>10.000+</h3>

                        <p>
                            Bisnis di Indonesia<br>
                            mempercayai Akunta
                        </p>

                    </div>

                </div>

            </div>



            {{-- ITEM 2 --}}
            <div class="col-xl-3 col-md-6">

                <div class="ak-stat-card">

                    <div class="ak-stat-icon">

                        <svg viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M5 21V4h11v17"></path>
                            <path d="M16 9h3v12"></path>
                            <path d="M8 8h2"></path>
                            <path d="M8 12h2"></path>
                            <path d="M8 16h2"></path>
                        </svg>

                    </div>

                    <div class="ak-stat-copy">

                        <h3>4+</h3>

                        <p>
                            Tahun pengalaman<br>
                            di industri
                        </p>

                    </div>

                </div>

            </div>



            {{-- ITEM 3 --}}
            <div class="col-xl-3 col-md-6">

                <div class="ak-stat-card">

                    <div class="ak-stat-icon">

                        <svg viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M12 3l7 3v5c0 5-3 8-7 10-4-2-7-5-7-10V6l7-3z"></path>
                            <path d="M9 12l2 2 4-4"></path>
                        </svg>

                    </div>

                    <div class="ak-stat-copy">

                        <h3>98%</h3>

                        <p>
                            Tingkat kepuasan<br>
                            pelanggan
                        </p>

                    </div>

                </div>

            </div>



            {{-- ITEM 4 --}}
            <div class="col-xl-3 col-md-6">

                <div class="ak-stat-card">

                    <div class="ak-stat-icon">

                        <svg viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M5 20v-5"></path>
                            <path d="M10 20V10"></path>
                            <path d="M15 20V6"></path>
                            <path d="M20 20V3"></path>
                        </svg>

                    </div>

                    <div class="ak-stat-copy">

                        <h3>50+</h3>

                        <p>
                            Tim profesional dan<br>
                            berdedikasi
                        </p>

                    </div>

                </div>

            </div>


        </div>

    </div>

</section>



{{-- =====================================================
    SIAPA KAMI
===================================================== --}}
<section class="ak-about-intro" id="siapa-kami">

    <div class="container">

        <div class="row align-items-center g-5">


            {{-- LEFT --}}
            <div class="col-lg-6">

                <div class="ak-about-intro-copy">

                    <span class="ak-about-eyebrow">
                        SIAPA KAMI?
                    </span>

                    <h2>
                        Partner Keuangan untuk
                        Pertumbuhan Bisnis Anda
                    </h2>

                    <p>
                        Akunta adalah platform manajemen keuangan berbasis cloud
                        yang dirancang khusus untuk membantu bisnis di Indonesia
                        mengelola keuangan dengan lebih mudah, efisien, dan akurat.
                    </p>

                    <p>
                        Dengan teknologi terkini dan pemahaman yang mendalam terhadap
                        kebutuhan pasar Indonesia, kami menghadirkan solusi yang relevan,
                        praktis, dan berdampak nyata bagi pertumbuhan bisnis Anda.
                    </p>

                </div>

            </div>


            {{-- RIGHT --}}
            <div class="col-lg-6">

                <div class="ak-about-intro-visual">

                    <span class="ak-about-intro-bg"></span>

                    <img
                        src="{{ asset('assets/tentangkami.png') }}"
                        alt="Tim Akunta">

                    <span class="ak-about-intro-dots"></span>


                    <div class="ak-about-intro-card">

                        <div class="ak-about-intro-icon">

                            <svg viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M4 20v-5"></path>
                                <path d="M10 20V10"></path>
                                <path d="M16 20V6"></path>
                                <path d="M22 20V2"></path>
                            </svg>

                        </div>

                        <p>
                            Solusi keuangan<br>
                            untuk bisnis yang<br>
                            lebih maju
                        </p>

                        <span></span>

                    </div>

                </div>

            </div>


        </div>

    </div>

</section>



{{-- =====================================================
    VISI & MISI
===================================================== --}}
<section class="ak-about-vision">

    <div class="container">

        <div class="row g-4">


            {{-- VISI --}}
            <div class="col-lg-6">

                <article class="ak-about-vision-card">

                    <div class="ak-about-vision-icon">

                        <svg viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M2 12s4-6 10-6 10 6 10 6-4 6-10 6S2 12 2 12z"></path>
                            <circle cx="12" cy="12" r="3"></circle>
                        </svg>

                    </div>

                    <div>

                        <h3>Visi Kami</h3>

                        <p>
                            Menjadi platform manajemen keuangan terdepan di Indonesia
                            yang membantu setiap bisnis untuk berkembang lebih cepat
                            dan berkelanjutan.
                        </p>

                    </div>

                </article>

            </div>



            {{-- MISI --}}
            <div class="col-lg-6">

                <article class="ak-about-vision-card">

                    <div class="ak-about-vision-icon">

                        <svg viewBox="0 0 24 24" aria-hidden="true">
                            <circle cx="12" cy="12" r="8"></circle>
                            <circle cx="12" cy="12" r="4"></circle>
                            <path d="M12 12l7-7"></path>
                            <path d="M16 5h4v4"></path>
                        </svg>

                    </div>

                    <div>

                        <h3>Misi Kami</h3>

                        <p>
                            Menghadirkan solusi pengelolaan keuangan yang mudah,
                            terjangkau, inovatif, dan memberikan dampak nyata bagi
                            pertumbuhan bisnis di Indonesia.
                        </p>

                    </div>

                </article>

            </div>


        </div>

    </div>

</section>



{{-- =====================================================
    NILAI KAMI
===================================================== --}}
<section class="ak-about-values">

    <span class="ak-values-decoration ak-values-left"></span>
    <span class="ak-values-decoration ak-values-right"></span>


    <div class="container">

        <div class="ak-about-section-heading">

            <span class="ak-about-eyebrow">
                NILAI-NILAI KAMI
            </span>

            <h2>
                Prinsip yang Membimbing Setiap Langkah Kami
            </h2>

            <p>
                Nilai-nilai ini menjadi fondasi dalam setiap keputusan,
                inovasi, dan layanan yang kami berikan untuk pelanggan,
                tim, dan masyarakat.
            </p>

        </div>


        <div class="row g-4">


            {{-- CUSTOMER FIRST --}}
            <div class="col-xl-3 col-md-6">

                <article class="ak-about-value-card">

                    <div class="ak-about-value-icon">

                        <svg viewBox="0 0 24 24" aria-hidden="true">
                            <circle cx="8" cy="8" r="3"></circle>
                            <circle cx="17" cy="9" r="2"></circle>
                            <path d="M3 20c0-4 2.3-7 5-7s5 3 5 7"></path>
                            <path d="M14 14c3.5 0 6 2.2 6 5.5"></path>
                        </svg>

                    </div>

                    <h3>Customer First</h3>

                    <p>
                        Kami selalu menempatkan kebutuhan pelanggan
                        sebagai prioritas utama.
                    </p>

                </article>

            </div>



            {{-- INNOVATION --}}
            <div class="col-xl-3 col-md-6">

                <article class="ak-about-value-card">

                    <div class="ak-about-value-icon">

                        <svg viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M9 18h6"></path>
                            <path d="M10 22h4"></path>
                            <path d="M8 15c-2-1.3-3-3.3-3-5.5A7 7 0 0112 2a7 7 0 017 7.5c0 2.2-1 4.2-3 5.5-1 .7-1 1.6-1 3H9c0-1.4 0-2.3-1-3z"></path>
                        </svg>

                    </div>

                    <h3>Innovation</h3>

                    <p>
                        Kami terus berinovasi menghadirkan solusi
                        yang lebih baik.
                    </p>

                </article>

            </div>



            {{-- INTEGRITY --}}
            <div class="col-xl-3 col-md-6">

                <article class="ak-about-value-card">

                    <div class="ak-about-value-icon">

                        <svg viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M12 3l7 3v5c0 5-3 8-7 10-4-2-7-5-7-10V6l7-3z"></path>
                            <path d="M9 12l2 2 4-4"></path>
                        </svg>

                    </div>

                    <h3>Integrity</h3>

                    <p>
                        Kami menjunjung tinggi kejujuran dan tanggung
                        jawab dalam setiap tindakan.
                    </p>

                </article>

            </div>



            {{-- IMPACT --}}
            <div class="col-xl-3 col-md-6">

                <article class="ak-about-value-card">

                    <div class="ak-about-value-icon">

                        <svg viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M5 20v-5"></path>
                            <path d="M10 20V10"></path>
                            <path d="M15 20V6"></path>
                            <path d="M20 20V3"></path>
                        </svg>

                    </div>

                    <h3>Impact</h3>

                    <p>
                        Kami berkomitmen memberikan dampak positif bagi bisnis,
                        masyarakat, dan ekosistem di Indonesia.
                    </p>

                </article>

            </div>


        </div>

    </div>

</section>



{{-- =====================================================
    TIMELINE
===================================================== --}}
<section class="ak-about-timeline">

    <div class="container">

        <div class="row align-items-start g-5">


            {{-- LEFT --}}
            <div class="col-lg-4">

                <div class="ak-about-timeline-copy">

                    <span class="ak-about-eyebrow">
                        PERJALANAN KAMI
                    </span>

                    <h2>
                        Langkah Demi Langkah
                        untuk Dampak yang
                        Lebih Besar
                    </h2>

                    <p>
                        Perjalanan Akunta adalah cerita tentang inovasi,
                        kepercayaan, dan komitmen untuk selalu memberikan
                        solusi terbaik bagi pelanggan kami.
                    </p>

                </div>

            </div>



            {{-- RIGHT --}}
            <div class="col-lg-8">

                <div class="ak-timeline">

                    <span class="ak-timeline-line"></span>


                    <div class="ak-timeline-grid">


                        {{-- 2020 --}}
                        <article class="ak-timeline-item">

                            <span class="ak-timeline-dot"></span>

                            <h3>2020</h3>

                            <h4>Awal Mula</h4>

                            <p>
                                Akunta didirikan dengan visi membantu bisnis
                                Indonesia mengelola keuangan dengan lebih mudah.
                            </p>

                        </article>



                        {{-- 2021 --}}
                        <article class="ak-timeline-item">

                            <span class="ak-timeline-dot"></span>

                            <h3>2021</h3>

                            <h4>Meluncurkan Produk</h4>

                            <p>
                                Versi pertama Akunta resmi diluncurkan dan
                                mulai digunakan oleh ratusan bisnis UMKM.
                            </p>

                        </article>



                        {{-- 2023 --}}
                        <article class="ak-timeline-item">

                            <span class="ak-timeline-dot"></span>

                            <h3>2023</h3>

                            <h4>Tumbuh Lebih Besar</h4>

                            <p>
                                Dipercaya oleh lebih dari 10.000 bisnis
                                di seluruh Indonesia.
                            </p>

                        </article>



                        {{-- 2024 --}}
                        <article class="ak-timeline-item">

                            <span class="ak-timeline-dot"></span>

                            <h3>2024</h3>

                            <h4>Terus Melangkah</h4>

                            <p>
                                Terus mengembangkan inovasi baru untuk memberikan
                                dampak lebih besar bagi ekosistem bisnis.
                            </p>

                        </article>


                    </div>

                </div>

            </div>


        </div>

    </div>

</section>



{{-- =====================================================
    CTA GLOBAL
===================================================== --}}
@include('public.partials.cta')


@endsection