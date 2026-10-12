@extends('layouts.app')

@section('title', $feature['name'] . ' - Akunta')

@section('meta', $feature['description'])

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/fitur-detail.css') }}">
@endpush

@section('content')

<div class="ak-fd-page">


    {{-- =====================================================
        HERO
    ====================================================== --}}

    <section class="ak-fd-hero">

        <div class="container">

            <div class="ak-fd-breadcrumb">

                <a href="{{ route('home') }}">
                    Home
                </a>

                <span>›</span>

                <a href="{{ route('features') }}">
                    Produk & Fitur
                </a>

                <span>›</span>

                <strong>
                    {{ $feature['name'] }}
                </strong>

            </div>


            <div class="row align-items-center gy-4 gx-lg-5">

                {{-- LEFT --}}
                <div class="col-lg-5">

                    <div class="ak-fd-hero-copy">

                        <div class="ak-fd-label">

                            <span class="ak-fd-label-icon {{ $feature['color'] }}">

                                <i class="bi {{ $feature['icon'] }}"></i>

                            </span>

                            <span>
                                {{ strtoupper($feature['name']) }}
                            </span>

                        </div>


                        <h1>
                            {{ $feature['title'] }}
                        </h1>


                        <p class="ak-fd-description">
                            {{ $feature['description'] }}
                        </p>


                        <ul class="ak-fd-check-list">

                            @foreach($feature['bullets'] as $bullet)

                                <li>

                                    <span>
                                        <i class="bi bi-check-lg"></i>
                                    </span>

                                    {{ $bullet }}

                                </li>

                            @endforeach

                        </ul>


                        <div class="ak-fd-actions">

                            <button
                                type="button"
                                class="ak-fd-btn-primary"
                                data-bs-toggle="modal"
                                data-bs-target="#demoModal">

                                Coba Gratis Sekarang

                                <span>→</span>

                            </button>


                            <a
                                href="{{ route('features') }}#semua-fitur"
                                class="ak-fd-btn-outline">

                                Lihat Fitur Lain

                            </a>

                        </div>

                    </div>

                </div>



                {{-- RIGHT --}}
                <div class="col-lg-7">

                    <div class="ak-fd-hero-visual">

                        <span class="ak-fd-blob blob-one"></span>
                        <span class="ak-fd-blob blob-two"></span>
                        <span class="ak-fd-dots"></span>


                        <div class="ak-fd-dashboard">

                            <img
                                src="{{ asset('assets/fitur-baru/' . $feature['image']) }}"
                                alt="{{ $feature['name'] }} Akunta">

                        </div>


                        <div class="ak-fd-float-icon {{ $feature['color'] }}">

                            <i class="bi {{ $feature['icon'] }}"></i>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>



    {{-- =====================================================
        BENEFIT STRIP
    ====================================================== --}}

    <section class="ak-fd-benefit-section">

        <div class="container">

            <div class="ak-fd-benefit-strip">


                <article class="ak-fd-benefit">

                    <span class="orange">
                        <i class="bi bi-lightning-charge-fill"></i>
                    </span>

                    <div>
                        <h3>Lebih Efisien</h3>
                        <p>Proses transaksi jadi lebih cepat dan teratur.</p>
                    </div>

                </article>


                <article class="ak-fd-benefit">

                    <span class="blue">
                        <i class="bi bi-database-fill"></i>
                    </span>

                    <div>
                        <h3>Data Terintegrasi</h3>
                        <p>Semua informasi tersimpan dalam satu sistem.</p>
                    </div>

                </article>


                <article class="ak-fd-benefit">

                    <span class="green">
                        <i class="bi bi-bar-chart-fill"></i>
                    </span>

                    <div>
                        <h3>Mudah Dipantau</h3>
                        <p>Informasi bisnis disajikan lebih ringkas.</p>
                    </div>

                </article>


                <article class="ak-fd-benefit">

                    <span class="purple">
                        <i class="bi bi-shield-check"></i>
                    </span>

                    <div>
                        <h3>Aman Digunakan</h3>
                        <p>Data bisnis dikelola dalam sistem yang teratur.</p>
                    </div>

                </article>


            </div>

        </div>

    </section>



    {{-- =====================================================
        FITUR UTAMA
    ====================================================== --}}

    <section class="ak-fd-main-features">

        <div class="container">

            <div class="ak-fd-section-heading left">

                <span>
                    FITUR DI DALAMNYA
                </span>

                <h2>
                    Fitur Utama {{ $feature['name'] }}
                </h2>

                <p>
                    Berbagai fungsi utama yang membantu Anda
                    mengelola aktivitas bisnis dengan lebih mudah.
                </p>

            </div>


            <div class="row g-3">

                @foreach($feature['modules'] as $index => $module)

                    <div class="col-md-6 col-lg-4">

                        <article class="ak-fd-module-card">

                            <span
                                class="ak-fd-module-icon
                                {{ ['orange','green','blue','purple'][$index % 4] }}">

                                <i class="bi {{ $module['icon'] }}"></i>

                            </span>


                            <div>

                                <h3>
                                    {{ $module['title'] }}
                                </h3>

                                <p>
                                    {{ $module['text'] }}
                                </p>

                            </div>

                        </article>

                    </div>

                @endforeach

            </div>

        </div>

    </section>



    {{-- =====================================================
        PRACTICAL SECTION
    ====================================================== --}}

    <section class="ak-fd-practical">

        <div class="container">

            <div class="row align-items-center gy-4 gx-lg-5">

                {{-- LEFT IMAGE --}}
                <div class="col-lg-6">

                    <div class="ak-fd-practical-visual">

                        <span class="ak-fd-practical-blob"></span>


                        <div class="ak-fd-practical-screen">

                            <img
                                src="{{ asset('assets/fitur-baru/' . $feature['image']) }}"
                                alt="{{ $feature['name'] }} Akunta">

                        </div>


                        <div class="ak-fd-mini-card card-one">

                            <span>
                                <i class="bi bi-graph-up-arrow"></i>
                            </span>

                            <div>
                                <small>Informasi Bisnis</small>
                                <strong>Real-time</strong>
                            </div>

                        </div>


                        <div class="ak-fd-mini-card card-two">

                            <span>
                                <i class="bi bi-check-circle-fill"></i>
                            </span>

                            <div>
                                <small>Data</small>
                                <strong>Terintegrasi</strong>
                            </div>

                        </div>

                    </div>

                </div>



                {{-- RIGHT TEXT --}}
                <div class="col-lg-6">

                    <div class="ak-fd-practical-copy">

                        <span class="ak-fd-eyebrow">
                            LEBIH PRAKTIS
                        </span>

                        <h2>
                            Informasi Penting
                            Lebih Mudah dalam
                            Satu Tampilan
                        </h2>

                        <p>
                            {{ $feature['name'] }} Akunta dirancang untuk
                            membantu aktivitas bisnis menjadi lebih terstruktur,
                            mudah dipantau, dan terintegrasi dengan berbagai
                            modul Akunta lainnya.
                        </p>


                        <ul>

                            <li>
                                <span>✓</span>
                                Pantau aktivitas bisnis secara real-time
                            </li>

                            <li>
                                <span>✓</span>
                                Informasi lebih mudah ditemukan
                            </li>

                            <li>
                                <span>✓</span>
                                Mengurangi pencatatan manual
                            </li>

                            <li>
                                <span>✓</span>
                                Membantu proses pengambilan keputusan
                            </li>

                            <li>
                                <span>✓</span>
                                Terhubung dengan fitur Akunta lainnya
                            </li>

                        </ul>

                    </div>

                </div>

            </div>

        </div>

    </section>



    {{-- =====================================================
        WORKFLOW
    ====================================================== --}}

    <section class="ak-fd-workflow">

        <div class="container">

            <div class="ak-fd-section-heading">

                <span>
                    CARA KERJA {{ strtoupper($feature['name']) }}
                </span>

                <h2>
                    Dari Data ke Informasi yang Lebih Bermakna
                </h2>

                <p>
                    Proses yang saling terhubung membantu bisnis
                    bekerja lebih terstruktur.
                </p>

            </div>


            <div class="ak-fd-workflow-grid">


                <article>

                    <span class="ak-fd-number">
                        01
                    </span>

                    <span class="ak-fd-workflow-icon blue">
                        <i class="bi bi-database-fill"></i>
                    </span>

                    <div>

                        <h3>Data Transaksi</h3>

                        <p>
                            Aktivitas bisnis dicatat dalam sistem Akunta.
                        </p>

                    </div>

                    <span class="ak-fd-flow-arrow">
                        →
                    </span>

                </article>



                <article>

                    <span class="ak-fd-number">
                        02
                    </span>

                    <span class="ak-fd-workflow-icon blue">
                        <i class="bi bi-gear-fill"></i>
                    </span>

                    <div>

                        <h3>Proses Otomatis</h3>

                        <p>
                            Data diproses dan saling terhubung antar modul.
                        </p>

                    </div>

                    <span class="ak-fd-flow-arrow">
                        →
                    </span>

                </article>



                <article>

                    <span class="ak-fd-number">
                        03
                    </span>

                    <span class="ak-fd-workflow-icon blue">
                        <i class="bi bi-bar-chart-fill"></i>
                    </span>

                    <div>

                        <h3>Informasi Visual</h3>

                        <p>
                            Hasil ditampilkan dalam informasi yang mudah dibaca.
                        </p>

                    </div>

                    <span class="ak-fd-flow-arrow">
                        →
                    </span>

                </article>



                <article>

                    <span class="ak-fd-number">
                        04
                    </span>

                    <span class="ak-fd-workflow-icon green">
                        <i class="bi bi-check-lg"></i>
                    </span>

                    <div>

                        <h3>Keputusan Lebih Cepat</h3>

                        <p>
                            Informasi membantu proses pengambilan keputusan.
                        </p>

                    </div>

                </article>


            </div>

        </div>

    </section>



    {{-- =====================================================
        RELATED
    ====================================================== --}}

    <section class="ak-fd-related">

        <div class="container">

            <div class="ak-fd-related-header">

                <div>

                    <span class="ak-fd-eyebrow">
                        FITUR TERKAIT
                    </span>

                    <h2>
                        Jelajahi Fitur Akunta Lainnya
                    </h2>

                    <p>
                        Temukan fitur lain yang saling terintegrasi
                        untuk mendukung kebutuhan bisnis Anda.
                    </p>

                </div>


                <a href="{{ route('features') }}#semua-fitur">
                    Lihat Semua Fitur
                    <span>→</span>
                </a>

            </div>


            <div class="row g-3">

                @foreach($relatedFeatures as $relatedSlug => $related)

                    <div class="col-md-6 col-lg-3">

                        <a
                            href="{{ route('feature.detail', $relatedSlug) }}"
                            class="ak-fd-related-card">

                            <span class="ak-fd-related-icon {{ $related['color'] }}">

                                <i class="bi {{ $related['icon'] }}"></i>

                            </span>


                            <div>

                                <h3>
                                    {{ $related['name'] }}
                                </h3>

                                <p>
                                    {{ Str::limit($related['description'], 70) }}
                                </p>

                            </div>


                            <span class="ak-fd-related-arrow">
                                →
                            </span>

                        </a>

                    </div>

                @endforeach

            </div>

        </div>

    </section>



    {{-- =====================================================
        CTA
    ====================================================== --}}

    @include('public.partials.cta')


</div>

@endsection