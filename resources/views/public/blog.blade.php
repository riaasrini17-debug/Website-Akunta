@extends('layouts.app')

@section('title', 'Blog & Insight - Akunta')
@section('meta', 'Temukan artikel, insight, tips keuangan, akuntansi, pajak, dan pengembangan bisnis bersama Akunta.')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/blog.css') }}">
@endpush

@section('content')

@php

    $featuredPosts = [

        [
            'title' => '5 Tips Mengelola Keuangan Bisnis di Era Digital',
            'slug' => '5-tips-mengelola-keuangan-bisnis-di-era-digital',
            'category' => 'Akuntansi',
            'image' => 'artikel 1.png',
            'date' => '12 Apr 2024',
            'views' => '1.2K',
            'excerpt' => 'Pelajari insight praktis untuk membantu bisnis berkembang lebih terstruktur dan efisien di era digital.',
        ],

        [
            'title' => 'Cara Meningkatkan Cash Flow untuk Pertumbuhan Bisnis',
            'slug' => 'cara-meningkatkan-cash-flow-untuk-pertumbuhan-bisnis',
            'category' => 'Keuangan',
            'image' => 'artikel 2.png',
            'date' => '12 Apr 2024',
            'views' => '1.2K',
            'excerpt' => 'Pelajari strategi efektif dalam mengelola arus kas agar bisnis tetap sehat dan siap berkembang.',
        ],

        [
            'title' => 'Panduan Lengkap Lapor Pajak untuk UMKM di 2024',
            'slug' => 'panduan-lengkap-lapor-pajak-untuk-umkm-2024',
            'category' => 'Pajak',
            'image' => 'artikel 3.png',
            'date' => '10 Apr 2024',
            'views' => '950',
            'excerpt' => 'Pelajari langkah-langkah praktis dalam melaporkan pajak usaha dengan benar dan lebih mudah.',
        ],

    ];

    $featured = $featuredPosts[0];


    $blogs = [

        [
            'title' => 'Cara Meningkatkan Cash Flow untuk Pertumbuhan Bisnis',
            'slug' => 'cara-meningkatkan-cash-flow-untuk-pertumbuhan-bisnis',
            'category' => 'Keuangan',
            'image' => 'artikel 2.png',
            'date' => '12 Apr 2024',
            'views' => '1.2K',
            'excerpt' => 'Pelajari strategi efektif dalam mengelola arus kas agar bisnis tetap sehat dan siap berkembang.',
        ],

        [
            'title' => 'Panduan Lengkap Lapor Pajak untuk UMKM di 2024',
            'slug' => 'panduan-lengkap-lapor-pajak-untuk-umkm-2024',
            'category' => 'Pajak',
            'image' => 'artikel 3.png',
            'date' => '10 Apr 2024',
            'views' => '950',
            'excerpt' => 'Pelajari langkah-langkah praktis dalam melaporkan pajak usaha dengan benar dan lebih mudah.',
        ],

        [
            'title' => '7 Strategi Mengembangkan Bisnis di Tengah Persaingan',
            'slug' => 'strategi-mengembangkan-bisnis-di-tengah-persaingan',
            'category' => 'Tips Bisnis',
            'image' => 'artikel 4.png',
            'date' => '08 Apr 2024',
            'views' => '870',
            'excerpt' => 'Temukan strategi efektif untuk mempertahankan dan mengembangkan bisnis di tengah persaingan.',
        ],

        [
            'title' => 'Mengenal Fitur Akunta yang Memudahkan Bisnis Anda',
            'slug' => 'mengenal-fitur-akunta-yang-memudahkan-bisnis',
            'category' => 'Produk',
            'image' => 'artikel 5.png',
            'date' => '06 Apr 2024',
            'views' => '825',
            'excerpt' => 'Kenali berbagai fitur Akunta yang dirancang untuk membuat pengelolaan bisnis menjadi lebih praktis.',
        ],

        [
            'title' => 'Cara Membuat Rencana Bisnis yang Efektif',
            'slug' => 'cara-membuat-rencana-bisnis-yang-efektif',
            'category' => 'Panduan',
            'image' => 'artikel 6.png',
            'date' => '04 Apr 2024',
            'views' => '790',
            'excerpt' => 'Panduan menyusun rencana bisnis yang realistis dan terukur untuk mendukung pertumbuhan usaha.',
        ],

        [
            'title' => 'Kesalahan Umum dalam Pembukuan dan Cara Menghindarinya',
            'slug' => 'kesalahan-umum-dalam-pembukuan',
            'category' => 'Akuntansi',
            'image' => 'artikel 1.png',
            'date' => '02 Apr 2024',
            'views' => '760',
            'excerpt' => 'Kenali kesalahan umum dalam pembukuan dan langkah sederhana untuk menghindarinya.',
        ],

    ];


    $categories = [

        [
            'name' => 'Semua',
            'icon' => 'bi-grid-fill',
        ],

        [
            'name' => 'Akuntansi',
            'icon' => 'bi-calculator-fill',
        ],

        [
            'name' => 'Keuangan',
            'icon' => 'bi-wallet2',
        ],

        [
            'name' => 'Pajak',
            'icon' => 'bi-receipt-cutoff',
        ],

        [
            'name' => 'Tips Bisnis',
            'icon' => 'bi-star-fill',
        ],

        [
            'name' => 'Produk',
            'icon' => 'bi-box-seam-fill',
        ],

        [
            'name' => 'Panduan',
            'icon' => 'bi-book-fill',
        ],

    ];

@endphp


{{-- =====================================================
    HERO
===================================================== --}}

<section class="ak-blog-hero">

    <span class="ak-blog-hero-shape shape-left"></span>
    <span class="ak-blog-hero-shape shape-right"></span>

    <div class="container">

        <div class="row align-items-center g-4 g-lg-5">

            <div class="col-lg-6">

                <div class="ak-blog-hero-copy">

                    <span class="ak-blog-eyebrow">
                        BLOG & INSIGHT
                    </span>


                    <h1>
                        Insight dan Informasi
                        untuk
                        <span>Bisnis Anda</span>
                    </h1>


                    <p>
                        Temukan berbagai <strong>artikel, tips,</strong> dan panduan
                        seputar keuangan, akuntansi, pajak, dan pengembangan bisnis
                        untuk membantu Anda melangkah lebih jauh bersama Akunta.
                    </p>

                </div>

            </div>


            <div class="col-lg-6">

                <div class="ak-blog-hero-visual">

                    <span class="ak-blog-dots"></span>
                    <span class="ak-blog-orange-mark">‹</span>

                    <img
                        src="{{ asset('assets/blog-hero.png') }}"
                        alt="Blog dan Insight Akunta"
                        class="ak-blog-hero-image">


                    <div class="ak-blog-float-card">

                        <div class="ak-blog-float-icon">
                            <i class="bi bi-journal-text"></i>
                        </div>

                        <div>
                            <strong>Pengetahuan</strong>
                            <span>untuk bisnis yang lebih maju</span>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>



{{-- =====================================================
    SEARCH + CATEGORY
===================================================== --}}

<section class="ak-blog-filter">

    <div class="container">


        <form class="ak-blog-search" action="#" method="GET">

            <span class="ak-search-icon">
                ⌕
            </span>

            <input
                type="search"
                name="search"
                placeholder="Cari artikel, topik, atau kata kunci..."
                aria-label="Cari artikel">

            <button type="submit">
                Cari
            </button>

        </form>



        <div class="ak-blog-category">

            @foreach($categories as $index => $category)

                <button
                    type="button"
                    class="ak-category-button {{ $index === 0 ? 'active' : '' }}">

                    <span class="ak-category-icon">
                        <i class="bi {{ $category['icon'] }}"></i>
                    </span>

                    {{ $category['name'] }}

                </button>

            @endforeach

        </div>

    </div>

</section>



{{-- =====================================================
    FEATURED ARTICLE
===================================================== --}}

<section class="ak-featured-blog">

    <div class="container">

        <article class="ak-featured-card" id="featuredCard">

            {{-- seluruh card clickable --}}


            <div class="row align-items-stretch g-0">

                {{-- IMAGE --}}
                <div class="col-lg-5">

                    <div class="ak-featured-image-wrap">

                        <img
                            id="featuredImage"
                            src="{{ asset('assets/blog/' . $featured['image']) }}"
                            alt="{{ $featured['title'] }}">

                        <span class="ak-featured-image-label">
                            Pilihan Editor
                        </span>

                    </div>

                </div>


                {{-- CONTENT --}}
                <div class="col-lg-7">

                    <div class="ak-featured-content">

                        <div class="ak-featured-top">

                            <span class="ak-featured-badge">
                                Artikel Utama
                            </span>

                            <span class="ak-featured-category" id="featuredCategory">
                                {{ $featured['category'] }}
                            </span>

                        </div>


                        <h2 id="featuredTitle">
                            {{ $featured['title'] }}
                        </h2>


                        <p id="featuredExcerpt">
                            {{ $featured['excerpt'] }}
                        </p>


                        <div class="ak-featured-meta">

                            <span id="featuredDate">
                                ◫ {{ $featured['date'] }}
                            </span>

                            <span id="featuredViews">
                                ◉ {{ $featured['views'] }} views
                            </span>

                            <span>
                                ◷ 5 menit baca
                            </span>

                        </div>


                        <div class="ak-featured-footer">

                            <a
                                id="featuredReadMore"
                                href="{{ route('blog.detail', ['slug' => $featured['slug']]) }}"
                                class="ak-featured-read">

                                Baca Selengkapnya
                                <span>→</span>

                            </a>

                        </div>


                        <div class="ak-featured-dots" id="featuredDots">

                            @foreach($featuredPosts as $index => $post)

                                <button
                                    type="button"
                                    class="{{ $index === 0 ? 'active' : '' }}"
                                    data-index="{{ $index }}"
                                    aria-label="Artikel {{ $index + 1 }}">
                                </button>

                            @endforeach

                        </div>

                    </div>

                </div>

            </div>

        </article>

    </div>

</section>



{{-- =====================================================
    ARTICLE SECTION
===================================================== --}}

<section class="ak-blog-content">

    <div class="container">


        <div class="ak-blog-heading text-center">

            <span class="ak-blog-eyebrow">
                ARTIKEL TERBARU
            </span>

            <h2>
                Artikel dan Insight
                <span>Terbaru</span>
            </h2>

            <p>
                Dapatkan informasi terbaru seputar akuntansi, keuangan,
                pajak, dan tips bisnis langsung dari tim ahli Akunta.
            </p>

        </div>



        <div class="row g-4">

            @foreach($blogs as $blog)

                <div class="col-lg-4 col-md-6">

                    <article class="ak-article-card">

                        {{-- FULL CARD LINK --}}
                        <a
                            href="{{ route('blog.detail', ['slug' => $blog['slug']]) }}"
                            class="ak-article-full-link"
                            aria-label="Baca artikel {{ $blog['title'] }}">
                        </a>


                        <div class="ak-article-image">

                            <img
                                src="{{ asset('assets/blog/' . $blog['image']) }}"
                                alt="{{ $blog['title'] }}"
                                loading="lazy">

                            <span class="ak-article-category">
                                {{ $blog['category'] }}
                            </span>

                        </div>


                        <div class="ak-article-body">

                            <h3>
                                {{ $blog['title'] }}
                            </h3>


                            <p>
                                {{ $blog['excerpt'] }}
                            </p>


                            <div class="ak-article-footer">

                                <div class="ak-article-meta">

                                    <span>
                                        ▣ {{ $blog['date'] }}
                                    </span>

                                    <span>
                                        ◉ {{ $blog['views'] }}
                                    </span>

                                </div>


                                {{-- cuma visual, seluruh card sudah jadi link --}}
                                <span class="ak-article-arrow">
                                    →
                                </span>

                            </div>

                        </div>

                    </article>

                </div>

            @endforeach
        </div>



        {{-- PAGINATION --}}

        <nav class="ak-blog-pagination" aria-label="Pagination Blog">

            <a href="#" class="ak-page-button">
                ←
            </a>

            <a href="#" class="ak-page-button active">
                1
            </a>

            <a href="#" class="ak-page-button">
                2
            </a>

            <a href="#" class="ak-page-button">
                3
            </a>

            <a href="#" class="ak-page-button">
                4
            </a>

            <a href="#" class="ak-page-button">
                →
            </a>

        </nav>

    </div>

</section>



{{-- =====================================================
    NEWSLETTER
===================================================== --}}

<section class="ak-blog-newsletter">

    <div class="container">

        <div class="ak-newsletter-box">

            <span class="ak-newsletter-shape"></span>

            <div class="row align-items-center g-4">

                <div class="col-lg-7">

                    <div class="ak-newsletter-copy">

                        <span class="ak-blog-eyebrow">
                            BERLANGGANAN NEWSLETTER
                        </span>

                        <h2>
                            Dapatkan Insight Terbaru Langsung di Email Anda
                        </h2>

                        <p>
                            Jadilah yang pertama mendapatkan artikel,
                            tips, dan informasi terbaru seputar bisnis dan keuangan.
                        </p>

                    </div>

                </div>


                <div class="col-lg-5">

                    <form class="ak-newsletter-form" action="#" method="POST">

                        <span>
                            ✉
                        </span>

                        <input
                            type="email"
                            placeholder="Masukkan email Anda"
                            required>

                        <button type="submit">
                            Berlangganan
                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

</section>



@include('public.partials.cta')


<script>
(function () {

    function initFeaturedSlider() {

        const posts = @json($featuredPosts);

        const card = document.getElementById('featuredCard');
        const image = document.getElementById('featuredImage');
        const title = document.getElementById('featuredTitle');
        const excerpt = document.getElementById('featuredExcerpt');
        const category = document.getElementById('featuredCategory');
        const date = document.getElementById('featuredDate');
        const views = document.getElementById('featuredViews');
        const readMore = document.getElementById('featuredReadMore');
        const dots = document.querySelectorAll('#featuredDots button');

        if (
            !card ||
            !image ||
            !title ||
            !excerpt ||
            !category ||
            !date ||
            !views ||
            !readMore ||
            posts.length === 0
        ) {
            return;
        }

        let currentIndex = 0;
        let sliderTimer = null;


        function showSlide(index) {

            currentIndex = index;

            if (currentIndex >= posts.length) {
                currentIndex = 0;
            }

            if (currentIndex < 0) {
                currentIndex = posts.length - 1;
            }

            const post = posts[currentIndex];

            /* animasi keluar */
            card.classList.add('is-changing');


            setTimeout(function () {

                image.src =
                    "{{ asset('assets/blog') }}/" + post.image;

                image.alt = post.title;

                title.textContent = post.title;
                excerpt.textContent = post.excerpt;
                category.textContent = post.category;

                date.textContent =
                    '▣ ' + post.date;

                views.textContent =
                    '◉ ' + post.views + ' views';

                const articleUrl =
                    "{{ url('/blog') }}/" + post.slug;

                readMore.href = articleUrl;

                /* simpan URL supaya seluruh card bisa diklik */
                card.dataset.url = articleUrl;


                dots.forEach(function (dot, dotIndex) {

                    dot.classList.toggle(
                        'active',
                        dotIndex === currentIndex
                    );

                });


                /* animasi masuk */
                card.classList.remove('is-changing');

            }, 200);

        }


        function nextSlide() {

            showSlide(currentIndex + 1);

        }


        function startSlider() {

            clearInterval(sliderTimer);

            sliderTimer = setInterval(function () {

                nextSlide();

            }, 7000);

        }


        /* DOTS */
        dots.forEach(function (dot, index) {

            dot.addEventListener('click', function (event) {

                event.preventDefault();
                event.stopPropagation();

                showSlide(index);

                startSlider();

            });

        });


        /* SELURUH CARD BISA DIKLIK */
        card.addEventListener('click', function (event) {

            /*
             jangan buka detail kalau user
             sedang klik dot / link
            */
            if (event.target.closest('button, a')) {
                return;
            }

            if (card.dataset.url) {
                window.location.href = card.dataset.url;
            }

        });


        /* URL artikel pertama */
        card.dataset.url =
            "{{ url('/blog') }}/" + posts[0].slug;


        startSlider();

    }


    /* tetap jalan walaupun DOMContentLoaded sudah terlewat */
    if (document.readyState === 'loading') {

        document.addEventListener(
            'DOMContentLoaded',
            initFeaturedSlider
        );

    } else {

        initFeaturedSlider();

    }

})();
</script>



@endsection