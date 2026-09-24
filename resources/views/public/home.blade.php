@extends('layouts.app')

@section('title', 'Akunta - Solusi Pembukuan Bisnis Tanpa Ribet')

@section('content')


<section class="ak-home-hero">
    <div class="container">
        <div class="row align-items-center g-5">

            <div class="col-lg-5">
                <div class="hero-copy">
                    <h1>
                        AKUNTA: SOLUSI<br>
                        PEMBUKUAN BISNIS<br>
                        <span>TANPA RIBET</span>
                    </h1>

                    <p>
                        Kelola keuangan bisnis Anda dengan lebih mudah,
                        cepat, dan akurat. Fokus pada pengembangan bisnis,
                        biarkan pembukuan jadi lebih sederhana bersama Akunta.
                    </p>

                    <div class="d-flex flex-wrap gap-3 mt-4">
                        <a href="{{ route('contact') }}"
                           class="btn btn-outline-akunta px-4 py-3">
                            Kontak Kami
                        </a>

                        <button
                            type="button"
                            class="btn btn-akunta px-4 py-3"
                            data-bs-toggle="modal"
                            data-bs-target="#demoModal">
                            Coba Gratis
                        </button>
                    </div>

                    <div class="hero-benefits">
                        <span>
                            <b>✓</b> Mudah digunakan
                        </span>

                        <span>
                            <b>✓</b> Aman & terpercaya
                        </span>

                        <span>
                            <b>✓</b> Didukung tim profesional
                        </span>
                    </div>
                </div>
            </div>

            <div class="col-lg-7">
                
            </div>

        </div>
    </div>
</section>



<section class="ak-dashboard-section">
    <div class="container">

        <div class="section-heading text-center">
            <h2>Satu Dashboard, Semua yang Anda Butuhkan</h2>
            <p>
                Akunta menyediakan semua fitur penting dalam satu platform,
                untuk membantu Anda mengelola keuangan bisnis dengan lebih efektif.
            </p>
        </div>

        <div class="dashboard-feature-layout">

            
            <div class="dashboard-side">

                <div class="ak-feature-box">
                    <div class="ak-feature-icon">▥</div>

                    <div>
                        <h5>Pantau Cashflow<br>Real-time</h5>
                        <p>
                            Lihat arus kas masuk dan keluar bisnis Anda kapan saja.
                        </p>
                    </div>
                </div>

                <div class="ak-feature-box">
                    <div class="ak-feature-icon">▤</div>

                    <div>
                        <h5>Laporan Keuangan<br>Otomatis</h5>
                        <p>
                            Neraca, laba rugi, dan laporan lainnya langsung tersedia.
                        </p>
                    </div>
                </div>

            </div>

            <div class="dashboard-center">
                <img
                    src="{{ asset('assets/feature-dashboard.png') }}"
                    alt="Fitur Dashboard Akunta"
                    class="img-fluid">
            </div>
            

            <div class="dashboard-side">

                <div class="ak-feature-box">
                    <div class="ak-feature-icon">⚙</div>

                    <div>
                        <h5>Kelola Bisnis<br>Lebih Efisien</h5>
                        <p>
                            Kelola pelanggan, pemasok, produk dan transaksi
                            dalam satu sistem.
                        </p>
                    </div>
                </div>

                <div class="ak-feature-box">
                    <div class="ak-feature-icon">▯</div>

                    <div>
                        <h5>Akses Mudah<br>di Mana Saja</h5>
                        <p>
                            Gunakan Akunta di desktop maupun mobile,
                            kapan saja dan di mana saja.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>



<section class="ak-work-section">
    <div class="container">

        <div class="section-heading text-center">
            <h2>Cara Kerja Akunta</h2>
            <p>
                Mulai kelola keuangan bisnis Anda dalam 3 langkah mudah.
            </p>
        </div>

        <div class="ak-workflow">

            <div class="workflow-item">
                <div class="workflow-number">1</div>

                <div class="workflow-icon">
                    👤
                </div>

                <div>
                    <h5>Daftar Akun</h5>
                    <p>
                        Buat akun dengan mudah dalam hitungan menit.
                    </p>
                </div>
            </div>


            <div class="workflow-arrow">→</div>


            <div class="workflow-item">
                <div class="workflow-number">2</div>

                <div class="workflow-icon">
                    ⚙
                </div>

                <div>
                    <h5>Atur Data Bisnis</h5>
                    <p>
                        Lengkapi informasi bisnis Anda,
                        seperti profil, produk dan pelanggan.
                    </p>
                </div>
            </div>


            <div class="workflow-arrow">→</div>


            <div class="workflow-item">
                <div class="workflow-number">3</div>

                <div class="workflow-icon">
                    ▥
                </div>

                <div>
                    <h5>Mulai Pembukuan</h5>
                    <p>
                        Catat transaksi dan pantau laporan keuangan
                        secara real-time.
                    </p>
                </div>
            </div>

        </div>

    </div>
</section>



<section class="ak-trusted">
    <div class="container">

        <div class="trusted-box">
            <h5>
                Dipercaya oleh 10.000+ bisnis di Indonesia
            </h5>
        </div>

    </div>
</section>



<section class="ak-about-home">
    <div class="container">

        <div class="row align-items-center g-5">

            <div class="col-lg-5">

                <p class="ak-eyebrow">
                    Tentang Akunta
                </p>

                <h2>
                    Bersama, Membangun Masa Depan Bisnis
                    yang Lebih Baik
                </h2>

                <p>
                    Akunta adalah platform akuntansi berbasis cloud
                    yang dirancang untuk membantu bisnis di Indonesia
                    mengelola keuangan dengan lebih mudah, efisien,
                    dan akurat.
                </p>

                <p>
                    Kami percaya setiap bisnis, besar maupun kecil,
                    berhak memiliki akses ke solusi keuangan
                    yang sederhana dan profesional.
                </p>

                <a href="{{ route('about') }}"
                   class="btn btn-akunta px-4 py-3 mt-2">
                    Lihat Tentang Kami →
                </a>

            </div>


            <div class="col-lg-7">


            </div>

        </div>

    </div>
</section>



<section class="ak-testimonial-section">
    <div class="container">

        <div class="section-heading text-center">
            <h2>Apa Kata Mereka?</h2>
            <p>
                Ribuan bisnis di Indonesia telah merasakan
                kemudahan bersama Akunta.
            </p>
        </div>

        <div class="row g-4 mt-2">

            <div class="col-lg-4">
                <div class="testimonial-card">

                    <div class="testimonial-head">
                        <div>
                            <h6>Andi Pratama</h6>
                            <small>CEO, Kopi Senja</small>
                        </div>
                    </div>

                    <p>
                        “Akunta sangat membantu kami dalam mengelola
                        keuangan. Laporannya lengkap dan mudah dipahami.”
                    </p>

                    <div class="stars">
                        ★★★★★
                    </div>

                </div>
            </div>


            <div class="col-lg-4">
                <div class="testimonial-card">

                    <div class="testimonial-head">
                        <div>
                            <h6>Sari Melati</h6>
                            <small>Founder, Bloom Studio</small>
                        </div>
                    </div>

                    <p>
                        “Tampilannya simpel dan fiturnya lengkap.
                        Akunta benar-benar menjadi solusi pembukuan
                        yang kami butuhkan.”
                    </p>

                    <div class="stars">
                        ★★★★★
                    </div>

                </div>
            </div>


            <div class="col-lg-4">
                <div class="testimonial-card">

                    <div class="testimonial-head">
                        <div>
                            <h6>Budi Santoso</h6>
                            <small>Owner, Santoso Teknik</small>
                        </div>
                    </div>

                    <p>
                        “Tim support-nya responsif dan sangat membantu.
                        Bisnis kami sekarang jauh lebih teratur
                        dan efisien.”
                    </p>

                    <div class="stars">
                        ★★★★★
                    </div>

                </div>
            </div>

        </div>

    </div>
</section>



<section class="ak-home-cta">
    <div class="container">

        <div class="home-cta-box">

            <div>
                <h2>
                    Siap Mengelola Keuangan Bisnis Anda<br>
                    dengan Lebih Mudah?
                </h2>
            </div>

            <p>
                Bergabunglah dengan ribuan bisnis
                yang telah mempercayai Akunta.
            </p>

            <button
                type="button"
                class="btn cta-white-btn"
                data-bs-toggle="modal"
                data-bs-target="#demoModal">
                Coba Gratis Sekarang →
            </button>

        </div>

    </div>
</section>

@endsection