@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endpush

@section('title', 'Akunta - Solusi Pembukuan Bisnis Tanpa Ribet')
@section('meta', 'Akunta membantu bisnis mengelola pembukuan, laporan keuangan, penjualan, pembelian, dan operasional dalam satu platform.')

@section('content')

{{-- =====================================================
    HERO
===================================================== --}}
<section class="ak-home-hero">
    <div class="container">
        <div class="row align-items-center g-4 g-lg-5">
            <div class="col-lg-5">
                <div class="hero-copy">
                    <span class="ak-eyebrow">SOLUSI PEMBUKUAN UNTUK BISNIS ANDA</span>

                    <h1>
                        Kelola Keuangan<br>
                        Bisnis dengan<br>
                        <span>Lebih Mudah</span>
                    </h1>

                    <p>
                        Akunta membantu Anda mengatur pembukuan bisnis secara praktis,
                        cepat, dan akurat dalam satu platform.
                    </p>

                    <div class="hero-actions">
                        <button
                            type="button"
                            class="btn btn-akunta"
                            data-bs-toggle="modal"
                            data-bs-target="#demoModal">
                            Coba Gratis <span>→</span>
                        </button>

                        <a href="{{ route('contact') }}" class="btn btn-outline-akunta">
                            Hubungi Kami
                        </a>
                    </div>

                    <div class="hero-benefits">
                        <span><b>✓</b> Mudah digunakan</span>
                        <span><b>✓</b> Aman & terpercaya</span>
                        <span><b>✓</b> Didukung tim profesional</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="hero-visual">
                    <span class="hero-shape hero-shape-one"></span>
                    <span class="hero-shape hero-shape-two"></span>

                    <img
                        src="{{ asset('assets/home-dasboard.png') }}"
                        alt="Dashboard Akunta pada laptop dan mobile"
                        class="hero-dashboard-img">
                </div>
            </div>
            
        </div>
    </div>
</section>


{{-- =====================================================
    FITUR UTAMA
===================================================== --}}
<section class="ak-features-section">
    <div class="container">
        <div class="ak-section-heading text-center">
            <span class="ak-eyebrow">FITUR UTAMA</span>
            <h2>Satu Platform Lengkap<br>untuk Operasional Bisnis Anda</h2>
            <p>
                Berbagai fitur penting untuk membantu pengelolaan keuangan
                dan operasional bisnis menjadi lebih efisien.
            </p>
        </div>

        <div class="ak-feature-grid">
            <article class="ak-feature-card">
                <span class="ak-feature-icon">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M7 3h10a2 2 0 0 1 2 2v16l-3-2-4 2-4-2-3 2V5a2 2 0 0 1 2-2Z"/>
                        <path d="M9 8h6M9 12h6M9 16h4"/>
                    </svg>
                </span>
                <div>
                    <h3>Pembukuan Otomatis</h3>
                    <p>Catat transaksi secara otomatis dan rapi tanpa ribet.</p>
                </div>
            </article>

            <article class="ak-feature-card">
                <span class="ak-feature-icon">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M4 20V10M10 20V4M16 20v-7M22 20H2"/>
                        <path d="m4 8 5-4 5 5 6-5"/>
                    </svg>
                </span>
                <div>
                    <h3>Laporan Keuangan</h3>
                    <p>Dapatkan laporan keuangan instan dan mudah dipahami.</p>
                </div>
            </article>

            <article class="ak-feature-card">
                <span class="ak-feature-icon">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                        <path d="m3 7 9-4 9 4-9 4-9-4Z"/>
                        <path d="M3 7v10l9 4 9-4V7M12 11v10"/>
                    </svg>
                </span>
                <div>
                    <h3>Manajemen Inventori</h3>
                    <p>Pantau stok barang secara real-time dan lebih teratur.</p>
                </div>
            </article>

            <article class="ak-feature-card">
                <span class="ak-feature-icon">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M3 4h2l2.3 10.1a2 2 0 0 0 2 1.6h7.8a2 2 0 0 0 2-1.6L21 7H6"/>
                        <circle cx="10" cy="20" r="1"/>
                        <circle cx="18" cy="20" r="1"/>
                    </svg>
                </span>
                <div>
                    <h3>Manajemen Penjualan</h3>
                    <p>Kelola penjualan dan pelanggan dengan lebih terstruktur.</p>
                </div>
            </article>

            <article class="ak-feature-card">
                <span class="ak-feature-icon">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                        <rect x="3" y="5" width="18" height="14" rx="3"/>
                        <path d="M3 9h18M8 15h3"/>
                    </svg>
                </span>
                <div>
                    <h3>Manajemen Pembelian</h3>
                    <p>Catat pembelian dan pengeluaran dengan lebih akurat.</p>
                </div>
            </article>

            <article class="ak-feature-card">
                <span class="ak-feature-icon">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                        <circle cx="9" cy="8" r="3"/>
                        <circle cx="17" cy="9" r="2.5"/>
                        <path d="M3 20c0-4 2.5-6 6-6s6 2 6 6M14 15c3.7 0 6 1.8 6 5"/>
                    </svg>
                </span>
                <div>
                    <h3>Multi Pengguna</h3>
                    <p>Atur akses tim sesuai kebutuhan dan peran di bisnis Anda.</p>
                </div>
            </article>
        </div>

        <div class="text-center">
            <a href="{{ url('/fitur') }}" class="ak-text-button">
                Lihat Semua Fitur <span>→</span>
            </a>
        </div>
    </div>
</section>


{{-- =====================================================
    TRUSTED COMPANY - AUTO SLIDER
===================================================== --}}
<section class="ak-trusted">
    <div class="container">
        <div class="trusted-intro">
            <div>
                <span class="ak-eyebrow">TELAH DIPERCAYA</span>
                <h2>Dipercaya oleh <span>10.000+ bisnis</span><br>di Indonesia</h2>
            </div>

            <p>
                Dari UMKM hingga perusahaan yang berkembang, berbagai bisnis
                menggunakan Akunta untuk membantu pengelolaan keuangan menjadi
                lebih mudah dan efisien.
            </p>
        </div>

        @php
            $trustedLogos = [
                ['logo' => 'kopi-senja.png', 'name' => 'Kopi Senja'],
                ['logo' => 'luxe.png', 'name' => 'Luxe Fashion'],
                ['logo' => 'karya-indah.png', 'name' => 'Karya Indah'],
                ['logo' => 'solusi-kreatif.png', 'name' => 'Solusi Kreatif'],
                ['logo' => 'maju-bersama.png', 'name' => 'Maju Bersama'],
                ['logo' => 'chuyu.png', 'name' => 'Chuyu'],
                ['logo' => 'bali.png', 'name' => 'Bali District'],
                ['logo' => 'oris.png', 'name' => 'Oris Cake'],
                ['logo' => 'getup.jpg', 'name' => 'Get Up'],
                ['logo' => 'roti.png', 'name' => 'Roti Manis'],
            ];
        @endphp

        <div class="trusted-slider" aria-label="Logo perusahaan yang menggunakan Akunta">
            <div class="trusted-track">
                <div class="trusted-group">
                    @foreach($trustedLogos as $logo)
                        <div class="trusted-logo-card">
                            <img
                                src="{{ asset('assets/logo/' . $logo['logo']) }}"
                                alt="{{ $logo['name'] }}">
                        </div>
                    @endforeach
                </div>

                <div class="trusted-group" aria-hidden="true">
                    @foreach($trustedLogos as $logo)
                        <div class="trusted-logo-card">
                            <img
                                src="{{ asset('assets/logo/' . $logo['logo']) }}"
                                alt="">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>


{{-- =====================================================
    TENTANG AKUNTA
===================================================== --}}
<section class="ak-about-home">
    <div class="container">
        <div class="row align-items-center g-4 g-lg-5">
            <div class="col-lg-6">
                <div class="about-home-image">
                    <img
                        src="{{ asset('assets/tentangkami.png') }}"
                        alt="Tim Akunta sedang berdiskusi"
                        class="img-fluid">

                    <div class="about-floating-card">
                        <span class="about-floating-icon">↗</span>
                        <span>Membantu bisnis<br><strong>tumbuh lebih cepat</strong></span>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="about-home-copy">
                    <span class="ak-eyebrow">TENTANG AKUNTA</span>

                    <h2>
                        Bersama, Membangun Masa Depan Bisnis yang
                        <span>Lebih Baik</span>
                    </h2>

                    <p>
                        Akunta adalah platform akuntansi berbasis cloud yang dirancang
                        untuk membantu bisnis di Indonesia mengelola keuangan dengan
                        lebih mudah, efisien, dan akurat.
                    </p>

                    <ul class="about-points">
                        <li>Solusi lengkap untuk berbagai skala bisnis</li>
                        <li>Mudah digunakan tanpa perlu latar belakang akuntansi</li>
                        <li>Didukung oleh tim yang berpengalaman</li>
                    </ul>

                    <a href="{{ route('about') }}" class="btn btn-akunta">
                        Lihat Tentang Kami <span>→</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- =====================================================
    CARA KERJA
===================================================== --}}
<section class="ak-work-section">
    <div class="container">
        <div class="ak-section-heading text-center">
            <span class="ak-eyebrow">CARA KERJA</span>
            <h2>Mulai Kelola Keuangan Bisnis Anda dalam 3 Langkah Mudah</h2>
        </div>

        <div class="ak-workflow">
            <div class="workflow-item">
                <div class="workflow-visual">
                    <span class="workflow-number">1</span>
                    <span class="workflow-icon">
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                            <circle cx="12" cy="8" r="4"/>
                            <path d="M4 21c0-5 3-8 8-8s8 3 8 8"/>
                        </svg>
                    </span>
                </div>
                <div>
                    <h3>Daftar Akun</h3>
                    <p>Buat akun dengan mudah dalam hitungan menit.</p>
                </div>
            </div>

            <span class="workflow-arrow" aria-hidden="true">→</span>

            <div class="workflow-item">
                <div class="workflow-visual">
                    <span class="workflow-number">2</span>
                    <span class="workflow-icon">
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                            <circle cx="12" cy="12" r="3"/>
                            <path d="M19 13.5v-3l-2-.5a7 7 0 0 0-.8-1.8l1.1-1.8-2.1-2.1-1.8 1.1A7 7 0 0 0 11.5 5L11 3H8l-.5 2a7 7 0 0 0-1.8.8L3.9 4.7 1.8 6.8l1.1 1.8A7 7 0 0 0 2.1 10L0 10.5v3l2 .5c.2.7.5 1.3.8 1.8l-1.1 1.8 2.1 2.1 1.8-1.1c.6.4 1.2.6 1.8.8l.5 2h3l.5-2c.7-.2 1.3-.5 1.8-.8l1.8 1.1 2.1-2.1-1.1-1.8c.4-.6.6-1.2.8-1.8l2.2-.5Z" transform="translate(2) scale(.9)"/>
                        </svg>
                    </span>
                </div>
                <div>
                    <h3>Atur Data Bisnis</h3>
                    <p>Lengkapi profil, produk, pelanggan, dan data penting lainnya.</p>
                </div>
            </div>

            <span class="workflow-arrow" aria-hidden="true">→</span>

            <div class="workflow-item">
                <div class="workflow-visual">
                    <span class="workflow-number">3</span>
                    <span class="workflow-icon">
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M4 20V12M10 20V8M16 20V4M22 20H2"/>
                        </svg>
                    </span>
                </div>
                <div>
                    <h3>Mulai Pembukuan</h3>
                    <p>Catat transaksi dan pantau laporan keuangan secara real-time.</p>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- =====================================================
    TESTIMONIAL - AUTO SLIDER
===================================================== --}}
<section class="ak-testimonial-section">
    <div class="container">
        <div class="ak-section-heading text-center">
            <span class="ak-eyebrow">APA KATA MEREKA?</span>
            <h2>Dipercaya oleh Banyak Pengguna</h2>
            <p>Simak pengalaman mereka yang telah menggunakan Akunta.</p>
        </div>

        @php
            $testimonials = [
                [
                    'name' => 'Andi Pratama',
                    'role' => 'CEO, Kopi Senja',
                    'photo' => 'assets/testi/testi-andi.png',
                    'quote' => 'Akunta sangat membantu tim kami dalam mengelola keuangan. Laporannya jelas dan mudah dipahami.',
                ],
                [
                    'name' => 'Sari Melati',
                    'role' => 'Founder, Bloom Studio',
                    'photo' => 'assets/testi/testi-sari.png',
                    'quote' => 'Tampilannya simpel dan fiturnya lengkap. Sekarang urusan pembukuan jadi jauh lebih mudah.',
                ],
                [
                    'name' => 'Budi Santoso',
                    'role' => 'Owner, Santoso Teknik',
                    'photo' => 'assets/testi/testi-budi.png',
                    'quote' => 'Tim support responsif dan sangat membantu. Bisnis kami sekarang lebih teratur dan efisien.',
                ],
            ];
        @endphp

        <div class="ak-testimonial-slider">
            <div class="ak-testimonial-track">
                <div class="ak-testimonial-group">
                    @foreach ($testimonials as $item)
                        <article class="ak-testimonial-card">
                            <div class="ak-testimonial-top">
                                <img src="{{ asset($item['photo']) }}" alt="{{ $item['name'] }}">
                                <div>
                                    <h3>{{ $item['name'] }}</h3>
                                    <span>{{ $item['role'] }}</span>
                                </div>
                            </div>

                            <p class="ak-testimonial-quote">“{{ $item['quote'] }}”</p>
                            <div class="ak-testimonial-stars" aria-label="5 dari 5 bintang">★★★★★</div>
                        </article>
                    @endforeach
                </div>

                <div class="ak-testimonial-group" aria-hidden="true">
                    @foreach ($testimonials as $item)
                        <article class="ak-testimonial-card">
                            <div class="ak-testimonial-top">
                                <img src="{{ asset($item['photo']) }}" alt="">
                                <div>
                                    <h3>{{ $item['name'] }}</h3>
                                    <span>{{ $item['role'] }}</span>
                                </div>
                            </div>

                            <p class="ak-testimonial-quote">“{{ $item['quote'] }}”</p>
                            <div class="ak-testimonial-stars">★★★★★</div>
                        </article>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>


{{-- =====================================================
    BLOG & INSIGHT
    Ganti artikel-1.png s.d artikel-3.png jika nama asset Anda berbeda.
===================================================== --}}
<section class="ak-blog-section">
    <div class="container">
        <div class="blog-heading">
            <div>
                <span class="ak-eyebrow">BLOG & INSIGHT</span>
                <h2>Artikel Terbaru untuk Perkembangan Bisnis Anda</h2>
            </div>

            <a href="{{ url('/blog') }}" class="blog-all-link">
                Lihat Semua Artikel <span>→</span>
            </a>
        </div>

        @php
            $articles = [
                [
                    'image' => 'artikel 1.png',
                    'category' => 'Akuntansi',
                    'title' => '5 Tips Mengelola Cash Flow untuk UMKM',
                    'date' => '12 Apr 2024',
                    'views' => '1.2K views',
                ],
                [
                    'image' => 'artikel 2.png',
                    'category' => 'Keuangan',
                    'title' => 'Pentingnya Laporan Keuangan untuk Pertumbuhan Bisnis',
                    'date' => '10 Apr 2024',
                    'views' => '950 views',
                ],
                [
                    'image' => 'artikel 3.png',
                    'category' => 'Tips Bisnis',
                    'title' => 'Cara Efektif Mengatur Pengeluaran Bisnis',
                    'date' => '08 Apr 2024',
                    'views' => '870 views',
                ],
            ];
        @endphp

        <div class="row g-3 g-lg-4">
            @foreach ($articles as $article)
                <div class="col-md-4">
                    <article class="blog-card">
                        <a href="{{ url('/blog') }}" class="blog-card-image">
                            <img
                                src="{{ asset('assets/blog/' . $article['image']) }}"
                                alt="{{ $article['title'] }}">
                        </a>

                        <div class="blog-card-body">
                            <span class="blog-category">{{ $article['category'] }}</span>
                            <h3>
                                <a href="{{ url('/blog') }}">{{ $article['title'] }}</a>
                            </h3>

                            <div class="blog-meta">
                                <span>◷ {{ $article['date'] }}</span>
                                <span>•</span>
                                <span>◉ {{ $article['views'] }}</span>
                            </div>
                        </div>
                    </article>
                </div>
            @endforeach
        </div>
    </div>
</section>


{{-- =====================================================
    FAQ TEASER
===================================================== --}}
<section class="ak-faq-teaser">
    <div class="container">
        <div class="faq-teaser-card">
            <div class="faq-teaser-icon" aria-hidden="true">?</div>

            <div class="faq-teaser-copy">
                <h2>Masih punya pertanyaan <span>tentang Akunta?</span></h2>
                <p>
                    Temukan jawaban seputar fitur, keamanan, paket, dan penggunaan Akunta.
                </p>
            </div>

            <a href="{{ url('/faq') }}" class="btn faq-teaser-btn">
                Lihat FAQ <span>→</span>
            </a>
        </div>
    </div>
</section>


{{-- =====================================================
    CTA GLOBAL
===================================================== --}}
@include('public.partials.cta')

@endsection
