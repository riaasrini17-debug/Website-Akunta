@extends('layouts.app')

@section('title', $article['title'] . ' - Akunta')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/blog-detail.css') }}">
@endpush

@section('content')


{{-- =====================================================
    BLOG DETAIL
===================================================== --}}

<section class="ak-detail-page">


    {{-- =====================================================
        HERO
    ===================================================== --}}

    <section class="ak-detail-hero">

        <span class="ak-detail-shape ak-detail-shape-left"></span>
        <span class="ak-detail-shape ak-detail-shape-right"></span>

        <div class="container">

            <div class="row align-items-center g-5">


                {{-- LEFT --}}
                <div class="col-lg-5">

                    <div class="ak-detail-hero-copy">


                        <a href="{{ route('blog') }}"
                           class="ak-detail-back">

                            <span>←</span>
                            Kembali ke Blog

                        </a>


                        <span class="ak-detail-category">
                            {{ $article['category'] }}
                        </span>


                        <h1>
                            {{ $article['title'] }}
                        </h1>


                        <p class="ak-detail-lead">
                            {{ $article['excerpt'] }}
                        </p>


                        <div class="ak-detail-meta">

                            <span>
                                {{ $article['date'] }}
                            </span>


                            <span>
                                <i>◷</i>
                                5 menit baca
                            </span>

                        </div>


                        <div class="ak-detail-author">

                            <div class="ak-detail-author-avatar">
                                AT
                            </div>

                            <div class="ak-detail-author-copy">

                                <small>
                                    Ditulis oleh
                                </small>

                                <strong>
                                    Akunta Team
                                </strong>

                                <span>
                                    Tim konten dan edukasi Akunta
                                </span>

                            </div>

                        </div>


                    </div>

                </div>



                {{-- RIGHT --}}
                <div class="col-lg-7">

                    <div class="ak-detail-hero-visual">


                        <span class="ak-detail-orange-circle"></span>

                        <span class="ak-detail-dots"></span>


                        <div class="ak-detail-hero-image">

                            <img
                                src="{{ asset('assets/blog/' . $article['image']) }}"
                                alt="{{ $article['title'] }}">
                        </div>


                    </div>

                </div>


            </div>

        </div>

    </section>



    {{-- =====================================================
        ARTICLE AREA
    ===================================================== --}}

    <section class="ak-detail-main">

        <div class="container">

            <div class="row g-5">


                {{-- =================================================
                    ARTICLE CONTENT
                ================================================= --}}

                <div class="col-lg-8">

                    <article class="ak-detail-article">


                        @foreach($article['content'] as $index => $content)

                            <section
                                class="ak-detail-tip"
                                id="artikel-{{ $index + 1 }}">

                                <div class="ak-detail-number">
                                    {{ $index + 1 }}
                                </div>


                                <div class="ak-detail-tip-content">

                                    <h2>
                                        {{ $content['heading'] }}
                                    </h2>

                                    <p>
                                        {{ $content['text'] }}
                                    </p>

                                </div>

                            </section>

                        @endforeach



                        {{-- QUOTE --}}
                        <div class="ak-detail-quote">

                            <div class="ak-detail-quote-icon">
                                “
                            </div>

                            <p>
                                Dengan pengelolaan keuangan yang baik, bisnis Anda akan lebih
                                siap menghadapi tantangan dan meraih peluang di masa depan.
                            </p>

                        </div>



                        {{-- TAG + SHARE --}}
                        <div class="ak-detail-footer">


                            <div class="ak-detail-tags">

                                <strong>
                                    Tag:
                                </strong>

                                <span>Keuangan Bisnis</span>
                                <span>Akuntansi</span>
                                <span>Tips Bisnis</span>
                                <span>Digital</span>
                                <span>UMKM</span>

                            </div>



                            <div class="ak-detail-share">

                                <strong>
                                    Bagikan:
                                </strong>

                                <a href="#"
                                   aria-label="Facebook">
                                    f
                                </a>

                                <a href="#"
                                   aria-label="LinkedIn">
                                    in
                                </a>

                                <a href="#"
                                   aria-label="X">
                                    X
                                </a>

                                <a href="#" class="ak-detail-copy-link" aria-label="Salin Link">

                                    <svg
                                        width="16"
                                        height="16"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg">

                                        <path
                                            d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"/>

                                        <path
                                            d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"/>

                                    </svg>

                                </a>

                            </div>


                        </div>


                    </article>

                </div>



                {{-- =================================================
                    SIDEBAR
                ================================================= --}}

                <div class="col-lg-4">

                    <aside class="ak-detail-sidebar">


                        



                        {{-- HELP CARD --}}
                        <div class="ak-detail-help-card">


                            <h3>
                                Butuh Bantuan
                                Kelola Keuangan Bisnis?
                            </h3>


                            <p>
                                Tim Akunta siap membantu dengan solusi akuntansi digital
                                yang mudah, profesional, dan sesuai kebutuhan bisnis Anda.
                            </p>


                            <button
                                type="button"
                                class="ak-detail-help-button"
                                data-bs-toggle="modal"
                                data-bs-target="#demoModal">

                                Coba Gratis Sekarang
                                <span>→</span>

                            </button>

                        </div>


                    </aside>

                </div>


            </div>

        </div>

    </section>



    {{-- =====================================================
        RELATED ARTICLES
    ===================================================== --}}

    <section class="ak-detail-related">

        <div class="container">


            <div class="ak-detail-related-header">

                <div>

                    <span class="ak-detail-related-eyebrow">
                        ARTIKEL TERKAIT
                    </span>

                    <h2>
                        Artikel Lainnya untuk Anda
                    </h2>

                </div>


                <a href="{{ route('blog') }}"
                   class="ak-detail-see-all">

                    Lihat Semua Artikel
                    <span>→</span>

                </a>

            </div>



            <div class="row g-4">


                @foreach([

                    [
                        'title' => 'Cara Meningkatkan Cash Flow untuk Pertumbuhan Bisnis',
                        'slug' => 'cara-meningkatkan-cash-flow-untuk-pertumbuhan-bisnis',
                        'image' => 'artikel 2.png',
                        'category' => 'Keuangan',
                        'date' => '5 Apr 2024',
                        'read' => '6 menit baca'
                    ],

                    [
                        'title' => '7 Strategi Mengembangkan Bisnis di Tengah Persaingan',
                        'slug' => 'strategi-mengembangkan-bisnis-di-tengah-persaingan',
                        'image' => 'artikel 4.png',
                        'category' => 'Tips Bisnis',
                        'date' => '18 Mar 2024',
                        'read' => '5 menit baca'
                    ],

                    [
                        'title' => 'Panduan Lengkap Lapor Pajak untuk UMKM di 2024',
                        'slug' => 'panduan-lengkap-lapor-pajak-untuk-umkm-2024',
                        'image' => 'artikel 3.png',
                        'category' => 'Pajak',
                        'date' => '12 Mar 2024',
                        'read' => '7 menit baca'
                    ]

                ] as $item)


                    <div class="col-lg-4 col-md-6">

                        <article class="ak-detail-related-card">


                            <a
                                href="{{ route('blog.detail', ['slug' => $item['slug']]) }}"
                                class="ak-detail-related-full-link"
                                aria-label="{{ $item['title'] }}">
                            </a>


                            <div class="ak-detail-related-image">

                                <img
                                    src="{{ asset('assets/blog/'.$item['image']) }}"
                                    alt="{{ $item['title'] }}">

                                <span>
                                    {{ $item['category'] }}
                                </span>

                            </div>


                            <div class="ak-detail-related-body">

                                <h3>
                                    {{ $item['title'] }}
                                </h3>


                                <div class="ak-detail-related-meta">

                                    <span>
                                        {{ $item['date'] }}
                                    </span>

                                    <span>
                                        ◷ {{ $item['read'] }}
                                    </span>

                                </div>


                                <span class="ak-detail-related-arrow">
                                    →
                                </span>

                            </div>


                        </article>

                    </div>


                @endforeach


            </div>


        </div>

    </section>


</section>


@include('public.partials.cta')



<script>
document.addEventListener('DOMContentLoaded', function () {

    const copyLink =
        document.querySelector('.ak-detail-copy-link');

    if (copyLink) {

        copyLink.addEventListener('click', function (e) {

            e.preventDefault();

            navigator.clipboard.writeText(
                window.location.href
            );

        });

    }

});
</script>
@endsection