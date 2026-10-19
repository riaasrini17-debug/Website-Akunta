    @extends('layouts.app')

    @section('title', 'Portofolio - Akunta')
    @section('meta', 'Lihat berbagai bisnis dan industri yang telah menggunakan Akunta untuk membantu pengelolaan keuangan dan operasional bisnis.')

    @push('styles')
        <link rel="stylesheet" href="{{ asset('css/portofolio.css') }}">
    @endpush

    @section('content')

    @php

        $clients = [
            [
                'logo' => 'luxe.png',
                'name' => 'Luxe Fashion',
            ],
            [
                'logo' => 'karya-indah.png',
                'name' => 'Karya Indah',
            ],
            [
                'logo' => 'solusi-kreatif.png',
                'name' => 'Solusi Kreatif',
            ],
            [
                'logo' => 'maju-bersama.png',
                'name' => 'Maju Bersama',
            ],
            [
                'logo' => 'kopi-senja.png',
                'name' => 'Kopi Senja',
            ],
            [
                'logo' => 'chuyu.png',
                'name' => 'Chuyu',
            ],
            [
                'logo' => 'bali.png',
                'name' => 'Bali District',
            ],
            [
                'logo' => 'oris.png',
                'name' => 'Oris Cake',
            ],
            [
                'logo' => 'getup.jpg',
                'name' => 'Get Up',
            ],
            [
                'logo' => 'roti.png',
                'name' => 'Roti Manis',
            ],
        ];


        $industries = [

            [
                'icon' => 'bi-shop-window',
                'title' => 'Retail',
                'text' => 'Toko retail & fashion dengan pengelolaan stok yang mudah.',
                'image' => 'retail.png',
                'color' => 'orange',
            ],

            [
                'icon' => 'bi-cup-hot-fill',
                'title' => 'F&B',
                'text' => 'Restoran, cafe & catering dengan pencatatan keuangan yang praktis.',
                'image' => 'fnb.png',
                'color' => 'blue',
            ],

            [
                'icon' => 'bi-hospital-fill',
                'title' => 'Kesehatan',
                'text' => 'Klinik, apotek & layanan kesehatan dengan manajemen yang efisien.',
                'image' => 'kesehatan.png',
                'color' => 'orange',
            ],

            [
                'icon' => 'bi-buildings-fill',
                'title' => 'Manufaktur',
                'text' => 'Produksi & distribusi dengan kontrol keuangan yang lebih terstruktur.',
                'image' => 'manufaktur.png',
                'color' => 'blue',
            ],

            [
                'icon' => 'bi-briefcase-fill',
                'title' => 'Jasa',
                'text' => 'Konsultan, agensi & layanan profesional dengan laporan yang transparan.',
                'image' => 'jasa.png',
                'color' => 'orange',
            ],

            [
                'icon' => 'bi-mortarboard-fill',
                'title' => 'Pendidikan',
                'text' => 'Sekolah, kursus & lembaga pendidikan dengan pengelolaan yang mudah.',
                'image' => 'pendidikan.png',
                'color' => 'blue',
            ],

            [
                'icon' => 'bi-three-dots',
                'title' => 'Lainnya',
                'text' => 'Berbagai industri lainnya dengan solusi yang dapat disesuaikan.',
                'image' => 'lainnya.png',
                'color' => 'orange',
            ],

        ];


        $stats = [

            [
                'icon' => 'bi-people-fill',
                'number' => '10.000+',
                'text' => 'Bisnis telah menggunakan Akunta',
            ],

            [
                'icon' => 'bi-shield-check',
                'number' => '4+',
                'text' => 'Tahun pengalaman melayani bisnis',
            ],

            [
                'icon' => 'bi-star-fill',
                'number' => '98%',
                'text' => 'Tingkat kepuasan pelanggan',
            ],

            [
                'icon' => 'bi-headset',
                'number' => '24/7',
                'text' => 'Dukungan untuk kebutuhan bisnis',
            ],

        ];


        $testimonials = [
            [
                'name' => 'Andi Pratama',
                'role' => 'CEO, Kopi Senja',
                'image' => 'testi-andi.png',
                'text' => 'Akunta sangat membantu kami dalam mengelola keuangan. Laporannya lengkap dan mudah dipahami.',
            ],
            [
                'name' => 'Sari Melati',
                'role' => 'Founder, Bloom Studio',
                'image' => 'testi-sari.png',
                'text' => 'Tampilannya simpel dan fiturnya lengkap. Proses pencatatan keuangan menjadi jauh lebih mudah dan efisien.',
            ],
            [
                'name' => 'Budi Santoso',
                'role' => 'Owner, Santoso Teknik',
                'image' => 'testi-budi.png',
                'text' => 'Tim support-nya responsif dan sangat membantu. Bisnis kami sekarang jauh lebih teratur dan efisien.',
            ],
            [
                'name' => 'Dewi Ayu',
                'role' => 'Owner, Bali District',
                'image' => 'testi-ratna.png',
                'text' => 'Pengelolaan bisnis menjadi lebih mudah dan informasi keuangan kami sekarang lebih gampang dipahami.',
            ],
        ];

    @endphp


    {{-- =====================================================
        HERO PORTFOLIO
    ===================================================== --}}

    <section class="ak-portfolio-hero">

        <div class="container">

            <div class="row align-items-center g-4 g-lg-5">


                {{-- LEFT --}}
                <div class="col-lg-5">

                    <div class="ak-portfolio-hero-copy">

                        <span class="ak-portfolio-eyebrow">
                            PORTOFOLIO
                        </span>


                        <h1>
                            Solusi Akunta Dipercaya
                            <span>
                                Berbagai Bisnis Indonesia
                            </span>
                        </h1>


                        <p>
                            Berbagai bisnis dari beragam industri telah mempercayai
                            Akunta untuk membantu pengelolaan keuangan mereka dengan
                            lebih mudah, efisien, dan terstruktur.
                        </p>


                        <div class="ak-portfolio-actions">

                            <a
                                href="{{ url('/register') }}"
                                class="ak-btn-primary">

                                Coba Gratis Sekarang
                                <span>→</span>

                            </a>


                            <a
                                href="{{ url('/kontak') }}"
                                class="ak-btn-outline">

                                Hubungi Kami

                            </a>

                        </div>


                        <div class="ak-portfolio-points">

                            <span>
                                <b>✓</b>
                                Berbagai Industri
                            </span>

                            <span>
                                <b>✓</b>
                                Solusi Fleksibel
                            </span>

                            <span>
                                <b>✓</b>
                                Mudah Digunakan
                            </span>

                        </div>

                    </div>

                </div>



                {{-- RIGHT --}}
                <div class="col-lg-7">

                    <div class="ak-portfolio-hero-visual">

                        <span class="hero-blob hero-blob-main"></span>
                        <span class="hero-blob hero-blob-small"></span>

                        <span
                            class="hero-dots"
                            aria-hidden="true">
                        </span>


                        <img
                            src="{{ asset('assets/portofolio-hero.png') }}"
                            alt="Bisnis yang menggunakan Akunta"
                            class="ak-portfolio-hero-image">


                        
                        

                    </div>

                </div>

            </div>

        </div>

    </section>



    {{-- =====================================================
    CLIENT LOGO - STATIC GRID
===================================================== --}}

<section
    class="ak-client-section"
    id="client">

    <div class="container">

        <div class="ak-section-heading text-center">

            <span class="ak-portfolio-eyebrow">
                DIPERCAYA BERBAGAI BISNIS
            </span>

            <h2>
                Client yang Telah Menggunakan Akunta
            </h2>

            <p>
                Dari UMKM hingga perusahaan berkembang, berbagai bisnis
                telah memilih Akunta sebagai partner dalam mengelola
                bisnis mereka.
            </p>

        </div>


        <div class="ak-client-grid">

            @foreach ($clients as $client)

                <article class="ak-client-card">

                    <img
                        src="{{ asset('assets/logo/' . $client['logo']) }}"
                        alt="{{ $client['name'] }}"
                        loading="lazy">

                    <h3>
                        {{ $client['name'] }}
                    </h3>

                </article>

            @endforeach

        </div>

    </div>

</section>



{{-- =====================================================
    INDUSTRIES
===================================================== --}}

<section class="ak-industries-section">

    <span class="ak-industry-decoration ak-industry-decoration-left"></span>
    <span class="ak-industry-decoration ak-industry-decoration-right"></span>

    <span class="ak-industry-dots ak-industry-dots-left"></span>
    <span class="ak-industry-dots ak-industry-dots-right"></span>


    <div class="container">

        {{-- HEADER --}}
        <div class="ak-section-heading text-center">

            <span class="ak-portfolio-eyebrow">
                FLEKSIBEL UNTUK BERBAGAI KEBUTUHAN
            </span>

            <h2>
                Berbagai Industri,
                <span class="ak-industry-title-highlight">
                    Satu Solusi Terpercaya
                </span>
            </h2>

            <p>
                Akunta dapat digunakan oleh beragam jenis bisnis dengan
                kebutuhan pengelolaan yang berbeda.
                Dari usaha kecil hingga perusahaan besar, kami siap
                mendukung pertumbuhan bisnis Anda.
            </p>

        </div>


        {{-- INDUSTRY GRID --}}
        <div class="ak-industry-grid">

            @foreach ($industries as $industry)

                <article
                    class="ak-industry-card ak-industry-{{ $industry['color'] }}">

                    {{-- CONTENT --}}
                    <div class="ak-industry-content">

                        <div class="ak-industry-icon">

                            <i class="bi {{ $industry['icon'] }}"></i>

                        </div>


                        <div class="ak-industry-copy">

                            <h3>
                                {{ $industry['title'] }}
                            </h3>

                            <p>
                                {{ $industry['text'] }}
                            </p>

                        </div>


                       

                    </div>


                    {{-- IMAGE --}}
                    <div class="ak-industry-image">

                        <img
                            src="{{ asset('assets/industry/' . $industry['image']) }}"
                            alt="{{ $industry['title'] }}"
                            loading="lazy">

                    </div>

                </article>

            @endforeach

        </div>

    </div>

</section>



    {{-- =====================================================
        EXPERIENCE / TRUST
    ===================================================== --}}

    <section class="ak-experience-section">

        <div class="container">

            <div class="ak-experience-grid">


                @foreach ($stats as $stat)

                    <article class="ak-experience-card">


                        <div class="ak-experience-icon">
                            <i class="bi {{ $stat['icon'] }}"></i>
                        </div>


                        <div>

                            <h3>
                                {{ $stat['number'] }}
                            </h3>


                            <p>
                                {{ $stat['text'] }}
                            </p>

                        </div>

                    </article>

                @endforeach


            </div>

        </div>

    </section>



    {{-- =====================================================
        TESTIMONIAL SLIDER
    ===================================================== --}}

    <section class="ak-testimonial-section">


        <div class="container">

            <div class="ak-testimonial-header">

                <span class="ak-portfolio-eyebrow">
                    APA KATA MEREKA?
                </span>


                <h2>
                    Dipercaya dan Memberikan Dampak Nyata
                </h2>


                <p>
                    Pengalaman pengguna yang telah merasakan kemudahan
                    mengelola bisnis bersama Akunta.
                </p>

            </div>

        </div>



        <div class="ak-testimonial-slider">


            <div class="ak-testimonial-track">


                @for ($copy = 0; $copy < 2; $copy++)


                    <div
                        class="ak-testimonial-group"
                        @if($copy === 1) aria-hidden="true" @endif>


                        @foreach ($testimonials as $testi)


                            <article class="ak-testimonial-card">


                                <div class="testimonial-top">


                                    <img
                                        src="{{ asset('assets/testi/' . $testi['image']) }}"
                                        alt="{{ $testi['name'] }}"
                                        loading="lazy">


                                    <div>

                                        <h3>
                                            {{ $testi['name'] }}
                                        </h3>


                                        <span>
                                            {{ $testi['role'] }}
                                        </span>

                                    </div>


                                    <div class="testimonial-quote">
                                        ”
                                    </div>


                                </div>



                                <div class="testimonial-stars">
                                    ★★★★★
                                </div>



                                <p>
                                    “{{ $testi['text'] }}”
                                </p>


                            </article>


                        @endforeach


                    </div>


                @endfor


            </div>
        
            <a
                href="https://share.google/lebTiWo6BehcvA4Oa"
                target="_blank"
                rel="noopener noreferrer"
                class="ak-google-review-btn">

                <i class="bi bi-google"></i>

                Lihat Review di Google

                <span>→</span>
            </a>


        </div>


    </section>



    @include('public.partials.cta')

    @endsection