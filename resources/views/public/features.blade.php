@extends('layouts.app')

@section('title', 'Produk & Fitur - Akunta')

@section('meta',
    'Temukan fitur Akunta untuk membantu pengelolaan keuangan, penjualan,
    pembelian, persediaan, aset, laporan, dan operasional bisnis dalam satu platform.'
)

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/fitur.css') }}">
@endpush


@section('content')

@php

    $categories = [
        [
            'title' => 'Semua Fitur',
            'icon' => 'bi-grid-fill',
            'category' => 'semua',
        ],
        [
            'title' => 'Keuangan',
            'icon' => 'bi-wallet2',
            'category' => 'keuangan',
        ],
        [
            'title' => 'Kas & Bank',
            'icon' => 'bi-bank',
            'category' => 'kas-bank',
        ],
        [
            'title' => 'Persediaan',
            'icon' => 'bi-box-seam',
            'category' => 'persediaan',
        ],
        [
            'title' => 'Pembelian',
            'icon' => 'bi-cart3',
            'category' => 'pembelian',
        ],
        [
            'title' => 'Penjualan',
            'icon' => 'bi-tag',
            'category' => 'penjualan',
        ],
        [
            'title' => 'Aset Tetap',
            'icon' => 'bi-building',
            'category' => 'aset-tetap',
        ],
        [
            'title' => 'Laporan',
            'icon' => 'bi-bar-chart-fill',
            'category' => 'laporan',
        ],
    ];


    $features = [

        [
            'id' => 'dashboard',
            'slug' => 'dashboard',
            'title' => 'Dashboard',
            'icon' => 'bi-house-door-fill',
            'class' => 'orange',
            'category' => 'keuangan',
            'image' => 'ft-1.webp',
            'description' =>
                'Pantau ringkasan informasi penting bisnis dalam satu tampilan yang mudah dipahami.',
        ],

        [
            'id' => 'buku-besar',
            'slug' => 'buku-besar',
            'title' => 'Buku Besar',
            'icon' => 'bi-journal-bookmark-fill',
            'class' => 'blue',
            'category' => 'keuangan',
            'image' => 'ft-2.webp',
            'description' =>
                'Kelola akun perkiraan, jurnal umum, saldo akun, dan histori transaksi secara lebih lengkap.',
        ],

        [
            'id' => 'kas-bank',
            'slug' => 'kas-bank',
            'title' => 'Kas & Bank',
            'icon' => 'bi-wallet-fill',
            'class' => 'green',
            'category' => 'kas-bank',
            'image' => 'ft-3.webp',
            'description' =>
                'Kelola kas, rekening bank, penerimaan, pembayaran, transfer, dan rekonsiliasi bank.',
        ],

        [
            'id' => 'persediaan',
            'slug' => 'persediaan',
            'title' => 'Persediaan',
            'icon' => 'bi-box-seam-fill',
            'class' => 'yellow',
            'category' => 'persediaan',
            'image' => 'ft-4.webp',
            'description' =>
                'Pantau barang, gudang, mutasi stok, stok minimum, dan penyesuaian persediaan secara real-time.',
        ],

        [
            'id' => 'pembelian',
            'slug' => 'pembelian',
            'title' => 'Pembelian',
            'icon' => 'bi-cart-fill',
            'class' => 'purple',
            'category' => 'pembelian',
            'image' => 'ft-5.webp',
            'description' =>
                'Kelola pemasok, pesanan pembelian, penerimaan barang, faktur, pembayaran, dan retur.',
        ],

        [
            'id' => 'penjualan',
            'slug' => 'penjualan',
            'title' => 'Penjualan',
            'icon' => 'bi-tag-fill',
            'class' => 'red',
            'category' => 'penjualan',
            'image' => 'ft-6.webp',
            'description' =>
                'Kelola pelanggan, pesanan, pengiriman, faktur penjualan, penerimaan, dan retur penjualan.',
        ],

        [
            'id' => 'aset-tetap',
            'slug' => 'aset-tetap',
            'title' => 'Aset Tetap',
            'icon' => 'bi-building-fill',
            'class' => 'cyan',
            'category' => 'aset-tetap',
            'image' => 'ft-7.webp',
            'description' =>
                'Kelola data aset, kategori aset, nilai perolehan, penyusutan, dan perubahan aset.',
        ],

        [
            'id' => 'manajemen',
            'slug' => 'manajemen-perusahaan',
            'title' => 'Manajemen Perusahaan',
            'icon' => 'bi-people-fill',
            'class' => 'violet',
            'category' => 'lainnya',
            'image' => 'ft-8.webp',
            'description' =>
                'Kelola profil perusahaan, cabang, pengguna, tim, hak akses, dan pengaturan perusahaan.',
        ],

        [
            'id' => 'laporan',
            'slug' => 'laporan',
            'title' => 'Laporan',
            'icon' => 'bi-bar-chart-fill',
            'class' => 'green',
            'category' => 'laporan',
            'image' => 'ft-9.webp',
            'description' =>
                'Akses laporan keuangan, persediaan, utang, piutang, penjualan, aset, dan buku besar.',
        ],

    ];


    $settings = [

        [
            'icon' => 'bi-building',
            'class' => 'blue',
            'title' => 'Profil Perusahaan',
            'text' => 'Kelola informasi dan identitas perusahaan Anda.',
            'slug' => 'profil-perusahaan',
        ],

        [
            'icon' => 'bi-gear-fill',
            'class' => 'blue',
            'title' => 'Preferensi',
            'text' => 'Atur preferensi sistem sesuai kebutuhan bisnis.',
            'slug' => 'preferensi',
        ],

        [
            'icon' => 'bi-file-earmark-text-fill',
            'class' => 'blue',
            'title' => 'Penomoran',
            'text' => 'Atur format penomoran dokumen secara otomatis.',
            'slug' => 'penomoran',
        ],

        [
            'icon' => 'bi-shield-check',
            'class' => 'green',
            'title' => 'Role & Permission',
            'text' => 'Kelola peran dan hak akses pengguna.',
            'slug' => 'role-permission',
        ],

        [
            'icon' => 'bi-file-bar-graph-fill',
            'class' => 'blue',
            'title' => 'Format Laporan',
            'text' => 'Sesuaikan format laporan dengan kebutuhan.',
            'slug' => 'format-laporan',
        ],

        [
            'icon' => 'bi-people-fill',
            'class' => 'blue',
            'title' => 'Pengguna',
            'text' => 'Kelola data pengguna dan akses sistem.',
            'slug' => 'pengguna',
        ],

    ];


    $advantages = [

        [
            'icon' => 'bi-database-fill',
            'class' => 'orange',
            'title' => 'Data Terintegrasi',
            'text' => 'Semua informasi bisnis tersimpan dalam satu sistem yang saling terhubung.',
        ],

        [
            'icon' => 'bi-lightning-charge-fill',
            'class' => 'blue',
            'title' => 'Laporan Lebih Cepat',
            'text' => 'Hasilkan laporan bisnis secara praktis tanpa proses manual yang panjang.',
        ],

        [
            'icon' => 'bi-shield-check',
            'class' => 'green',
            'title' => 'Aman & Terpercaya',
            'text' => 'Data bisnis Anda terlindungi dengan sistem keamanan yang lebih baik.',
        ],

        [
            'icon' => 'bi-headset',
            'class' => 'purple',
            'title' => 'Dukungan Tim Profesional',
            'text' => 'Tim Akunta siap membantu Anda ketika membutuhkan dukungan.',
        ],

    ];

@endphp


<div class="ak-feature-page">


{{-- =====================================================
    HERO
===================================================== --}}

<section class="ak-feature-hero">

    <div class="container">

        <div class="ak-feature-breadcrumb">
            <a href="{{ route('home') }}">Home</a>
            <span>›</span>
            <strong>Produk & Fitur</strong>
        </div>


        <div class="row align-items-center gy-4 gx-lg-5">

            <div class="col-lg-5">

                <div class="ak-feature-hero-copy">

                    <span class="ak-feature-eyebrow">
                        PRODUK & FITUR
                    </span>

                    <h1>
                        Solusi Lengkap untuk
                        Mengelola Keuangan dan
                        <span>Operasional Bisnis</span>
                    </h1>

                    <p>
                        Dari pencatatan transaksi hingga laporan keuangan,
                        semua fitur Akunta dirancang untuk membantu bisnis Anda
                        bekerja lebih efisien, terintegrasi, dan berkembang
                        lebih cepat.
                    </p>


                    <div class="ak-feature-actions">

                        <button
                            type="button"
                            class="ak-feature-primary"
                            data-bs-toggle="modal"
                            data-bs-target="#demoModal">

                            Coba Gratis Sekarang
                            <span>→</span>

                        </button>


                        <a
                            href="#semua-fitur"
                            class="ak-feature-secondary">

                            Lihat Semua Fitur

                        </a>

                    </div>

                </div>

            </div>


            <div class="col-lg-7">

                <div class="ak-feature-hero-media">

                    <span class="ak-feature-hero-blob blob-one"></span>
                    <span class="ak-feature-hero-blob blob-two"></span>
                    <span class="ak-feature-dots dots-one"></span>
                    <span class="ak-feature-dots dots-two"></span>


                    <img
                        src="{{ asset('assets/fitur-baru/hero-2.webp') }}"
                        alt="Dashboard Akunta"
                        class="ak-feature-hero-image"
                        loading="eager"
                        fetchpriority="high"
                        decoding="async">

                    <div class="ak-feature-float-card float-one">

                        <span class="green">
                            <i class="bi bi-wallet-fill"></i>
                        </span>

                        <p>
                            Kas & Bank
                            <small>Pantau arus kas real-time</small>
                        </p>

                    </div>


                    <div class="ak-feature-float-card float-two">

                        <span class="orange">
                            <i class="bi bi-box-seam-fill"></i>
                        </span>

                        <p>
                            Persediaan
                            <small>Kelola stok dengan mudah</small>
                        </p>

                    </div>


                    <div class="ak-feature-float-card float-three">

                        <span class="blue">
                            <i class="bi bi-bar-chart-fill"></i>
                        </span>

                        <p>
                            Laporan
                            <small>Hasilkan laporan otomatis</small>
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>




@php
    $highlightSlides = [

        [
            'name' => 'Dashboard',
            'title' => 'Dashboard Bisnis<br>dalam Satu Tampilan',
            'description' => 'Pantau seluruh aktivitas bisnis Anda secara real-time dengan dashboard yang informatif, ringkas, dan mudah dipahami.',
            'image' => asset('assets/fitur-baru/ft-1.webp'),
            'slug' => 'dashboard',
            'bullets' => [
                'Ringkasan keuangan real-time',
                'Grafik dan laporan interaktif',
                'Akses cepat ke fitur utama',
                'Notifikasi aktivitas penting',
            ],
        ],

        [
            'name' => 'Buku Besar',
            'title' => 'Pencatatan Keuangan<br>Lebih Terstruktur',
            'description' => 'Kelola akun perkiraan, jurnal umum, saldo akun, dan histori transaksi secara lebih lengkap.',
            'image' => asset('assets/fitur-baru/ft-2.webp'),
            'slug' => 'buku-besar',
            'bullets' => [
                'Kelola akun perkiraan',
                'Pencatatan jurnal umum',
                'Pantau histori transaksi',
                'Informasi saldo lebih terstruktur',
            ],
        ],

        [
            'name' => 'Kas & Bank',
            'title' => 'Kelola Arus Kas<br>dengan Lebih Mudah',
            'description' => 'Kelola kas, rekening bank, penerimaan, pembayaran, transfer, dan rekonsiliasi bank dalam satu sistem.',
            'image' => asset('assets/fitur-baru/ft-3.webp'),
            'slug' => 'kas-bank',
            'bullets' => [
                'Pantau kas dan rekening bank',
                'Penerimaan dan pembayaran',
                'Transfer antar rekening',
                'Rekonsiliasi transaksi bank',
            ],
        ],

        [
            'name' => 'Persediaan',
            'title' => 'Pantau Persediaan<br>Secara Real-time',
            'description' => 'Pantau barang, gudang, pergerakan stok, dan kebutuhan persediaan bisnis secara lebih mudah.',
            'image' => asset('assets/fitur-baru/ft-4.webp'),
            'slug' => 'persediaan',
            'bullets' => [
                'Pantau stok barang',
                'Kelola beberapa gudang',
                'Pemindahan dan penyesuaian stok',
                'Pantau stok minimum',
            ],
        ],

        [
            'name' => 'Pembelian',
            'title' => 'Kelola Pembelian<br>Lebih Terstruktur',
            'description' => 'Kelola pemasok, pesanan pembelian, penerimaan barang, faktur, pembayaran, dan retur.',
            'image' => asset('assets/fitur-baru/ft-5.webp'),
            'slug' => 'pembelian',
            'bullets' => [
                'Kelola informasi pemasok',
                'Pantau pesanan pembelian',
                'Penerimaan barang',
                'Faktur dan pembayaran',
            ],
        ],

        [
            'name' => 'Penjualan',
            'title' => 'Kelola Penjualan<br>dalam Satu Sistem',
            'description' => 'Kelola pelanggan, pesanan, pengiriman, faktur, dan penerimaan pembayaran dengan lebih terstruktur.',
            'image' => asset('assets/fitur-baru/ft-6.webp'),
            'slug' => 'penjualan',
            'bullets' => [
                'Kelola data pelanggan',
                'Pantau pesanan penjualan',
                'Pengiriman dan faktur',
                'Pantau penerimaan pembayaran',
            ],
        ],

        [
            'name' => 'Aset Tetap',
            'title' => 'Kelola Aset Perusahaan<br>dengan Lebih Rapi',
            'description' => 'Pantau aset tetap perusahaan mulai dari informasi aset, penyusutan, perubahan hingga lokasi aset.',
            'image' => asset('assets/fitur-baru/ft-7.webp'),
            'slug' => 'aset-tetap',
            'bullets' => [
                'Kelola informasi aset',
                'Pantau nilai dan penyusutan',
                'Kelola lokasi aset',
                'Catat perubahan aset',
            ],
        ],

        [
            'name' => 'Laporan',
            'title' => 'Laporan Bisnis<br>Lebih Lengkap',
            'description' => 'Akses berbagai laporan bisnis untuk membantu proses evaluasi dan pengambilan keputusan.',
            'image' => asset('assets/fitur-baru/ft-9.webp'),
            'slug' => 'laporan',
            'bullets' => [
                'Laporan keuangan',
                'Laporan penjualan',
                'Informasi utang dan piutang',
                'Laporan persediaan',
            ],
        ],

    ];
@endphp

{{-- =====================================================
    FEATURED DASHBOARD
===================================================== --}}

{{-- =====================================================
    FEATURE HIGHLIGHT SLIDER
===================================================== --}}

<section class="ak-feature-highlight" id="feature-highlight">

    <div class="container">

        <div
            class="row align-items-center gy-4 gx-lg-5 ak-highlight-transition"
            id="highlightSlideContent">

            {{-- IMAGE --}}
            <div class="col-lg-6">

                <div class="ak-highlight-media">

                    <span class="ak-highlight-blob"></span>

                    <img
                        id="highlightImage"
                        src="{{ $highlightSlides[0]['image'] }}"
                        alt="{{ $highlightSlides[0]['name'] }} Akunta"
                        loading="lazy"
                        decoding="async">

                </div>

            </div>


            {{-- CONTENT --}}
            <div class="col-lg-6">

                <div class="ak-highlight-copy">

                    <span class="ak-feature-eyebrow">
                        FITUR UNGGULAN
                    </span>


                    <h2 id="highlightTitle">
                        {!! $highlightSlides[0]['title'] !!}
                    </h2>


                    <p id="highlightDescription">
                        {{ $highlightSlides[0]['description'] }}
                    </p>


                    <ul id="highlightBullets">

                        @foreach($highlightSlides[0]['bullets'] as $bullet)

                            <li>
                                {{ $bullet }}
                            </li>

                        @endforeach

                    </ul>


                    <a
                        id="highlightLink"
                        href="{{ route('feature.detail', [
                            'slug' => $highlightSlides[0]['slug']
                        ]) }}"
                        class="ak-highlight-button">

                        Pelajari Lebih Lanjut
                        <span>→</span>

                    </a>


                    {{-- SLIDER CONTROL --}}
                    <div class="ak-highlight-controls">

                        <button
                            type="button"
                            class="ak-highlight-arrow"
                            id="highlightPrev"
                            aria-label="Fitur sebelumnya">

                            <i class="bi bi-chevron-left"></i>

                        </button>


                        <div
                            class="ak-highlight-dots"
                            id="highlightDots">
                        </div>


                        <button
                            type="button"
                            class="ak-highlight-arrow"
                            id="highlightNext"
                            aria-label="Fitur berikutnya">

                            <i class="bi bi-chevron-right"></i>

                        </button>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>





{{-- =====================================================
    ALL FEATURES
===================================================== --}}

<section
    class="ak-all-features"
    id="semua-fitur">

    <div class="container">

        <div class="ak-all-feature-heading">

            <span class="ak-feature-eyebrow">
                SEMUA FITUR AKUNTA
            </span>

            <h2>
                Solusi Lengkap untuk Setiap Kebutuhan Bisnis
            </h2>

            <p>
                Pilih fitur yang sesuai dengan kebutuhan bisnis Anda.
                Semua fitur terintegrasi dalam satu platform.
            </p>

        </div>

        {{-- =====================================================
            CATEGORY
        ===================================================== --}}

        <section class="ak-feature-category">

            <div class="container">

                <div class="ak-feature-category-box">

                    @foreach($categories as $index => $category)

                        <a
                                href="#"
                                class="ak-feature-category-item {{ $index === 0 ? 'active' : '' }}"
                                data-category="{{ $category['category'] }}">

                            <i class="bi {{ $category['icon'] }}"></i>

                            <span>
                                {{ $category['title'] }}
                            </span>

                        </a>

                    @endforeach

                </div>

            </div>

        </section>

        <div class="row g-3">

            @foreach($features as $feature)

                <div class="col-md-6 col-lg-4 ak-feature-filter-item"
                     data-category="{{ $feature['category'] }}">

                    <a
                        href="{{ route('feature.detail', ['slug' => $feature['slug']]) }}"
                        class="ak-feature-card-link-wrapper">

                        <article
                            class="ak-feature-card"
                            id="{{ $feature['id'] }}">

                            <div class="ak-feature-card-top">

                                <span class="ak-feature-card-icon {{ $feature['class'] }}">
                                    <i class="bi {{ $feature['icon'] }}"></i>
                                </span>

                                <div class="ak-feature-card-copy">

                                    <h3>
                                        {{ $feature['title'] }}
                                    </h3>

                                    <p>
                                        {{ $feature['description'] }}
                                    </p>

                                </div>

                            </div>


                            <div class="ak-feature-card-preview">

                                <img
                                    src="{{ asset('assets/fitur-baru/' . $feature['image']) }}"
                                    alt="{{ $feature['title'] }} Akunta"
                                    loading="lazy"
                                    decoding="async">

                            </div>


                            <span class="ak-feature-card-link">

                                Pelajari Lebih Lanjut
                                <span>→</span>

                            </span>

                        </article>

                    </a>

                </div>

            @endforeach

        </div>

    </div>

</section>



{{-- =====================================================
    SETTINGS
===================================================== --}}

<section class="ak-feature-settings">

    <div class="container">

        <div class="ak-settings-wrap">

            <div class="ak-settings-heading">

                <span class="ak-feature-eyebrow">
                    PENGATURAN & AKSES
                </span>

                <h2>
                    Kelola Detail Bisnis dengan Lebih Fleksibel
                </h2>

                <p>
                    Atur preferensi, penomoran, hak akses, dan kebutuhan
                    administrasi lainnya sesuai kebutuhan perusahaan Anda.
                </p>

            </div>


            <div class="ak-settings-grid">

                @foreach($settings as $item)

                    <a
                        href="{{ url('/produk-fitur/' . $item['slug']) }}"
                        class="ak-setting-card">

                        <span class="ak-setting-icon {{ $item['class'] }}">
                            <i class="bi {{ $item['icon'] }}"></i>
                        </span>

                        <h3>
                            {{ $item['title'] }}
                        </h3>

                        <p>
                            {{ $item['text'] }}
                        </p>

                        

                    </a>

                @endforeach

            </div>

        </div>

    </div>

</section>



{{-- =====================================================
    WHY AKUNTA
===================================================== --}}

<section class="ak-feature-advantages">

    <div class="container">

        <div class="ak-advantages-heading">

            <span class="ak-feature-eyebrow">
                MENGAPA MEMILIH AKUNTA
            </span>

            <h2>
                Lebih dari Sekadar Software Akuntansi
            </h2>

            <p>
                Kami berkomitmen untuk memberikan solusi terbaik
                bagi pengelolaan bisnis Anda.
            </p>

        </div>


        <div class="ak-advantages-grid">

            @foreach($advantages as $item)

                <article class="ak-advantage-card">

                    <span class="ak-advantage-icon {{ $item['class'] }}">
                        <i class="bi {{ $item['icon'] }}"></i>
                    </span>

                    <div>

                        <h3>
                            {{ $item['title'] }}
                        </h3>

                        <p>
                            {{ $item['text'] }}
                        </p>

                    </div>

                </article>

            @endforeach

        </div>

    </div>

</section>

<script>
document.addEventListener('DOMContentLoaded', function () {

    const slides = @json($highlightSlides);

/* PRELOAD SEMUA GAMBAR */
slides.forEach(function (slide) {

    const preloadImage = new Image();

    preloadImage.src = slide.image;


});


let currentSlide = 0;
let autoSlide;
let isAnimating = false;


    const slideContent =
        document.getElementById('highlightSlideContent');

    const image =
        document.getElementById('highlightImage');

    const title =
        document.getElementById('highlightTitle');

    const description =
        document.getElementById('highlightDescription');

    const bullets =
        document.getElementById('highlightBullets');

    const link =
        document.getElementById('highlightLink');

    const dotsContainer =
        document.getElementById('highlightDots');

    const prevButton =
        document.getElementById('highlightPrev');

    const nextButton =
        document.getElementById('highlightNext');


    /* =========================================
       CREATE DOTS
    ========================================= */

    slides.forEach((slide, index) => {

        const dot = document.createElement('button');

        dot.type = 'button';

        dot.className =
            'ak-highlight-dot' +
            (index === 0 ? ' active' : '');

        dot.setAttribute(
            'aria-label',
            'Tampilkan ' + slide.name
        );


        dot.addEventListener('click', function () {

            changeSlide(index);

            restartAutoSlide();

        });


        dotsContainer.appendChild(dot);

    });


    /* =========================================
       CHANGE SLIDE
    ========================================= */

    function changeSlide(index) {

        if (isAnimating) return;

        isAnimating = true;


        currentSlide = index;


        if (currentSlide < 0) {
            currentSlide = slides.length - 1;
        }


        if (currentSlide >= slides.length) {
            currentSlide = 0;
        }


        const slide = slides[currentSlide];


        /* FADE OUT */
        slideContent.classList.add('is-changing');


        setTimeout(function () {

            /* GANTI KONTEN */
            image.src = slide.image;
            image.alt = slide.name + ' Akunta';

            title.innerHTML = slide.title;

            description.textContent =
                slide.description;


            bullets.innerHTML = '';


            slide.bullets.forEach(function (bullet) {

                const li =
                    document.createElement('li');

                li.textContent = bullet;

                bullets.appendChild(li);

            });


            link.href =
                "{{ url('/produk-fitur') }}/" +
                slide.slug;


            /* UPDATE DOT */
            document
                .querySelectorAll('.ak-highlight-dot')
                .forEach(function (dot, dotIndex) {

                    dot.classList.toggle(
                        'active',
                        dotIndex === currentSlide
                    );

                });


            /* FADE IN */
            requestAnimationFrame(function () {

                requestAnimationFrame(function () {

                    slideContent.classList.remove(
                        'is-changing'
                    );

                });

            });


            setTimeout(function () {

                isAnimating = false;

            }, 420);


        }, 300);

    }

    /* =========================================
       BUTTON
    ========================================= */

    prevButton.addEventListener('click', function () {

        changeSlide(currentSlide - 1);

        restartAutoSlide();

    });


    nextButton.addEventListener('click', function () {

        changeSlide(currentSlide + 1);

        restartAutoSlide();

    });


    /* =========================================
       AUTO SLIDE
    ========================================= */

    function startAutoSlide() {

        autoSlide = setInterval(function () {

            changeSlide(currentSlide + 1);

        }, 3500);

    }


    function restartAutoSlide() {

        clearInterval(autoSlide);

        startAutoSlide();

    }


    startAutoSlide();


    /* PAUSE SAAT CURSOR DI SECTION */

    const highlightSection =
        document.getElementById('feature-highlight');


    highlightSection.addEventListener(
        'mouseenter',
        function () {

            clearInterval(autoSlide);

        }
    );


    highlightSection.addEventListener(
        'mouseleave',
        function () {

            restartAutoSlide();

        }
    );
    /* =========================================
    FILTER FEATURE CATEGORY
    ========================================= */

    const featureCategoryButtons =
        document.querySelectorAll('.ak-feature-category-item');

    const featureItems =
        document.querySelectorAll('.ak-feature-filter-item');


    featureCategoryButtons.forEach(function (button) {

        button.addEventListener('click', function (event) {

            event.preventDefault();

            const selectedCategory =
                button.dataset.category;


            /* ACTIVE BUTTON */
            featureCategoryButtons.forEach(function (item) {
                item.classList.remove('active');
            });

            button.classList.add('active');


            /* FILTER CARD */
            featureItems.forEach(function (item) {

                const featureCategory =
                    item.dataset.category;

                if (
                    selectedCategory === 'semua' ||
                    featureCategory === selectedCategory
                ) {
                    item.style.display = '';
                } else {
                    item.style.display = 'none';
                }

            });

        });
});

});
</script>

@include('public.partials.cta')


</div>

@endsection