@extends('layouts.app')

@section('title', 'Kontak & FAQ - Akunta')

@section('meta', 'Hubungi tim Akunta dan temukan jawaban atas pertanyaan umum seputar akun, fitur, pembayaran, keamanan, dan penggunaan Akunta.')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/faq.css') }}">
@endpush


@section('content')


@php

    $faqs = [

        [
            'question' => 'Apa itu Akunta?',
            'answer' => 'Akunta adalah solusi digital yang membantu bisnis mengelola kebutuhan administrasi dan keuangan secara lebih terstruktur, praktis, dan efisien.',
            'category' => 'lainnya',
        ],

        [
            'question' => 'Bagaimana cara membuat akun di Akunta?',
            'answer' => 'Anda dapat membuat akun melalui fitur pendaftaran yang tersedia. Lengkapi informasi yang diminta, kemudian ikuti proses pendaftaran sampai akun berhasil dibuat.',
            'category' => 'akun',
        ],

        [
            'question' => 'Apakah Akunta bisa digunakan secara gratis?',
            'answer' => 'Akunta menyediakan pilihan layanan yang dapat disesuaikan dengan kebutuhan bisnis. Informasi mengenai paket dan masa percobaan dapat dilihat pada halaman Harga atau melalui tim Akunta.',
            'category' => 'akun',
        ],

        [
            'question' => 'Fitur apa saja yang tersedia di Akunta?',
            'answer' => 'Akunta menyediakan berbagai fitur untuk membantu pengelolaan bisnis, seperti pencatatan keuangan, invoicing, laporan bisnis, dan fitur pendukung lainnya.',
            'category' => 'fitur',
        ],

        [
            'question' => 'Bagaimana cara membuat invoice di Akunta?',
            'answer' => 'Invoice dapat dibuat melalui fitur invoicing Akunta dengan memasukkan informasi pelanggan, transaksi, nominal pembayaran, dan detail lain yang diperlukan.',
            'category' => 'fitur',
        ],

        [
            'question' => 'Apakah Akunta bisa digunakan oleh lebih dari satu pengguna?',
            'answer' => 'Ketersediaan akses beberapa pengguna dapat disesuaikan dengan paket dan kebutuhan bisnis Anda. Tim Akunta dapat membantu memberikan informasi lebih lanjut mengenai fitur ini.',
            'category' => 'keamanan',
        ],

        [
            'question' => 'Bagaimana cara melakukan pembayaran langganan?',
            'answer' => 'Pembayaran langganan dilakukan berdasarkan paket layanan yang dipilih. Informasi pembayaran akan tersedia selama proses aktivasi atau perpanjangan layanan.',
            'category' => 'pembayaran',
        ],

        [
            'question' => 'Metode pembayaran apa saja yang diterima?',
            'answer' => 'Metode pembayaran mengikuti pilihan yang tersedia pada layanan Akunta. Untuk informasi terbaru mengenai metode pembayaran, Anda dapat menghubungi tim kami.',
            'category' => 'pembayaran',
        ],

    ];

@endphp



{{-- =====================================================
    CONTACT HERO
===================================================== --}}

<section
    class="ak-contact-hero"
    id="contact">

    <span class="ak-contact-shape ak-contact-shape-left"></span>
    <span class="ak-contact-shape ak-contact-shape-right"></span>


    <div class="container">


        <div class="row align-items-center g-4 g-lg-5">


            {{-- LEFT --}}
            <div class="col-lg-6">

                <div class="ak-contact-hero-copy">


                    <div class="ak-contact-breadcrumb">

                        <a href="{{ route('home') }}">
                            Home
                        </a>

                        <span>›</span>

                        <strong>
                            Kontak
                        </strong>

                    </div>


                    <h1>
                        Diskusi
                        <span>bersama kami</span>
                    </h1>


                    <p>
                        Punya pertanyaan, butuh informasi lebih lanjut,
                        atau ingin konsultasi mengenai solusi Akunta untuk
                        bisnis Anda? Tim kami siap membantu.
                    </p>


                </div>

            </div>



            {{-- RIGHT --}}
            <div class="col-lg-5">

                <div class="ak-contact-hero-visual">


                    <span class="ak-contact-hero-circle"></span>


                    <img
                        src="{{ asset('assets/contak-hero.png') }}"
                        alt="Tim Akunta siap membantu Anda"
                        class="ak-contact-hero-image">


                    <div class="ak-contact-chat-bubble">

                        <span></span>
                        <span></span>
                        <span></span>

                    </div>


                </div>

            </div>


        </div>


    </div>

</section>



{{-- =====================================================
    CONTACT CONTENT
===================================================== --}}

<section class="ak-contact-main">

    <div class="container">


        <div class="row g-4 align-items-stretch">


            {{-- =================================================
                FORM
            ================================================= --}}

            <div class="col-lg-6">


                <div class="ak-contact-card ak-contact-form-card">


                    <div class="ak-contact-card-heading">


                        <div class="ak-contact-heading-icon">
                            ✉
                        </div>


                        <div>

                            <h2>
                                Kirim Pesan ke Kami
                            </h2>

                            <p>
                                Isi form berikut dan tim kami akan segera
                                menghubungi Anda.
                            </p>

                        </div>


                    </div>



                    {{-- SUCCESS MESSAGE --}}
                    @if(session('success'))

                        <div class="alert alert-success mb-3">

                            {{ session('success') }}

                        </div>

                    @endif



                    {{-- VALIDATION ERROR --}}
                    @if($errors->any())

                        <div class="alert alert-danger mb-3">

                            <ul class="mb-0">

                                @foreach($errors->all() as $error)

                                    <li>
                                        {{ $error }}
                                    </li>

                                @endforeach

                            </ul>

                        </div>

                    @endif



                    <form
                        action="{{ route('contact.submit') }}"
                        method="POST"
                        class="ak-contact-form">

                        @csrf


                        <div class="row g-3">


                            {{-- NAME --}}
                            <div class="col-md-6">

                                <label for="contactName">

                                    Nama Lengkap

                                    <span>*</span>

                                </label>


                                <input
                                    id="contactName"
                                    type="text"
                                    name="name"
                                    value="{{ old('name') }}"
                                    placeholder="Masukkan nama lengkap"
                                    required>

                            </div>



                            {{-- EMAIL --}}
                            <div class="col-md-6">

                                <label for="contactEmail">

                                    Email

                                    <span>*</span>

                                </label>


                                <input
                                    id="contactEmail"
                                    type="email"
                                    name="email"
                                    value="{{ old('email') }}"
                                    placeholder="Masukkan email Anda"
                                    required>

                            </div>



                            {{-- BUSINESS --}}
                            <div class="col-md-6">

                                <label for="contactBusiness">

                                    Bidang Perusahaan

                                </label>


                                <select
                                    id="contactBusiness"
                                    name="business_type">


                                    <option value="">
                                        Pilih bidang perusahaan
                                    </option>


                                    <option
                                        value="umkm"
                                        {{ old('business_type') === 'umkm' ? 'selected' : '' }}>

                                        UMKM

                                    </option>


                                    <option
                                        value="retail"
                                        {{ old('business_type') === 'retail' ? 'selected' : '' }}>

                                        Retail

                                    </option>


                                    <option
                                        value="jasa"
                                        {{ old('business_type') === 'jasa' ? 'selected' : '' }}>

                                        Jasa & Profesional

                                    </option>


                                    <option
                                        value="lainnya"
                                        {{ old('business_type') === 'lainnya' ? 'selected' : '' }}>

                                        Lainnya

                                    </option>


                                </select>

                            </div>



                            {{-- PHONE --}}
                            <div class="col-md-6">

                                <label for="contactPhone">

                                    No. Telepon

                                    <span>*</span>

                                </label>


                                <input
                                    id="contactPhone"
                                    type="tel"
                                    name="phone"
                                    value="{{ old('phone') }}"
                                    placeholder="Masukkan nomor telepon"
                                    required>

                            </div>



                            {{-- MESSAGE --}}
                            <div class="col-12">

                                <label for="contactMessage">

                                    Pesan

                                    <span>*</span>

                                </label>


                                <textarea
                                    id="contactMessage"
                                    name="message"
                                    rows="5"
                                    placeholder="Tulis pesan atau pertanyaan Anda..."
                                    required>{{ old('message') }}</textarea>

                            </div>


                        </div>



                        <div class="ak-contact-form-footer">

                            <button type="submit">

                                Kirim Pesan

                                <span>→</span>

                            </button>

                        </div>


                    </form>


                </div>


            </div>



            {{-- =================================================
                RIGHT AREA
            ================================================= --}}

            <div class="col-lg-6">


                <div class="ak-contact-right">


                    {{-- =========================================
                        CONTACT INFORMATION
                    ========================================= --}}

                    <div class="ak-contact-card ak-contact-info-card">


                        <div class="ak-contact-card-heading">


                            <div class="ak-contact-heading-icon ak-blue">
                                <i class="bi bi-info-circle"></i>
                            </div>


                            <div>

                                <h2>
                                    Informasi Kontak
                                </h2>

                            </div>


                        </div>



                        <div class="ak-contact-info-grid">


                            {{-- PHONE --}}
                            <div class="ak-contact-info-item">


                                <div class="ak-contact-info-icon">
                                    <i class="bi bi-telephone-fill"></i>
                                </div>


                                <div>

                                    <strong>
                                        Telepon
                                    </strong>

                                    <span>
                                        +62 812-3456-7890
                                    </span>

                                    <small>
                                        Senin – Jumat
                                        <br>
                                        08.00 – 17.00 WIB
                                    </small>

                                </div>


                            </div>



                            {{-- EMAIL --}}
                            <div class="ak-contact-info-item">


                                <div class="ak-contact-info-icon">
                                    <i class="bi bi-envelope-fill"></i>
                                </div>


                                <div>

                                    <strong>
                                        Email
                                    </strong>

                                    <span>
                                        halo@akunta.id
                                    </span>

                                    <small>
                                        Kami membalas maksimal
                                        1×24 jam
                                    </small>

                                </div>


                            </div>



                            {{-- WHATSAPP --}}
                            <div class="ak-contact-info-item">


                                <div class="ak-contact-info-icon ak-green">
                                    <i class="bi bi-whatsapp"></i>
                                </div>


                                <div>

                                    <strong>
                                        WhatsApp
                                    </strong>

                                    <span>
                                        +62 812-3456-7890
                                    </span>

                                    <small>
                                        Chat langsung dengan
                                        tim kami
                                    </small>

                                </div>


                            </div>


                        </div>


                    </div>



                    {{-- =========================================
                        LOCATION
                    ========================================= --}}

                    <div class="ak-contact-card ak-contact-office-card">


                        <div class="row align-items-center g-0">


                            {{-- COPY --}}
                            <div class="col-md-5">


                                <div class="ak-contact-office-copy">


                                    <div class="ak-contact-office-title">


                                        <div class="ak-contact-location-icon">
                                            <i class="bi bi-geo-alt-fill"></i>
                                        </div>


                                        <h2>
                                            Kunjungi Kantor Kami
                                        </h2>


                                    </div>



                                    <p>
                                        Bali, Indonesia
                                        <br>
                                        Lokasi kantor Akunta
                                    </p>



                                    <a
                                        href="https://maps.google.com"
                                        target="_blank"
                                        rel="noopener"
                                        class="ak-contact-map-button">

                                        Buka di Google Maps

                                        <span>→</span>

                                    </a>


                                </div>


                            </div>



                            {{-- MAP --}}
                            <div class="col-md-7">


                                <div class="ak-contact-map">


                                    <iframe
                                        src="https://www.google.com/maps?q=Bali,Indonesia&output=embed"
                                        width="100%"
                                        height="180"
                                        style="border:0;"
                                        allowfullscreen
                                        loading="lazy"
                                        referrerpolicy="no-referrer-when-downgrade"
                                        title="Lokasi Akunta">
                                    </iframe>


                                </div>


                            </div>


                        </div>


                    </div>


                </div>


            </div>


        </div>


    </div>

</section>



{{-- =====================================================
    FAQ SECTION
===================================================== --}}

<section
    class="ak-contact-faq"
    id="faq">


    <span class="ak-faq-shape ak-faq-shape-left"></span>
    <span class="ak-faq-shape ak-faq-shape-right"></span>


    <div class="container">


        {{-- FAQ HEADER --}}
        <div class="ak-contact-faq-heading">


            <span class="ak-contact-faq-eyebrow">
                FAQ
            </span>


            <h2>
                Pertanyaan yang
                <span>Sering Diajukan</span>
            </h2>


            <p>
                Temukan jawaban untuk pertanyaan umum seputar Akunta.
                Jika Anda tidak menemukan jawaban yang dicari,
                silakan hubungi kami.
            </p>


        </div>



        {{-- =================================================
            SEARCH
        ================================================= --}}

        <div class="ak-contact-faq-search">


            <span class="ak-faq-search-icon">
                ⌕
            </span>


            <input
                type="search"
                id="faqSearch"
                placeholder="Cari pertanyaan di sini..."
                autocomplete="off"
                aria-label="Cari pertanyaan">


            <button
                type="button"
                id="faqSearchButton">

                Cari

            </button>


        </div>



        {{-- =================================================
            CATEGORY
        ================================================= --}}

        <div class="ak-contact-faq-category">


            <button
                type="button"
                class="active"
                data-category="semua">

                Semua

            </button>


            <button
                type="button"
                data-category="akun">

                Akun & Langganan

            </button>


            <button
                type="button"
                data-category="fitur">

                Fitur & Penggunaan

            </button>


            <button
                type="button"
                data-category="pembayaran">

                Pembayaran

            </button>


            <button
                type="button"
                data-category="keamanan">

                Keamanan

            </button>


            <button
                type="button"
                data-category="lainnya">

                Lainnya

            </button>


        </div>



        {{-- =================================================
            FAQ GRID
        ================================================= --}}

        <div
            class="row g-3 ak-contact-faq-grid"
            id="contactFaqAccordion">


            @foreach($faqs as $index => $faq)


                <div
                    class="col-lg-6 ak-contact-faq-column"
                    data-category="{{ $faq['category'] }}"
                    data-question="{{ strtolower($faq['question']) }}">


                    <div class="ak-contact-faq-item">


                        {{-- QUESTION --}}
                        <button
                            type="button"
                            class="ak-contact-faq-question"
                            aria-expanded="false">


                            <span class="ak-contact-faq-number">

                                {{ $index + 1 }}

                            </span>



                            <span class="ak-contact-faq-question-text">

                                {{ $faq['question'] }}

                            </span>



                            <span class="ak-contact-faq-plus">

                                +

                            </span>


                        </button>



                        {{-- ANSWER --}}
                        <div class="ak-contact-faq-answer">


                            <p>

                                {{ $faq['answer'] }}

                            </p>


                        </div>


                    </div>


                </div>


            @endforeach


        </div>



        {{-- SEARCH EMPTY --}}
        <div
            class="ak-contact-faq-empty"
            id="faqEmpty"
            hidden>


            <strong>
                Pertanyaan tidak ditemukan.
            </strong>


            <p>
                Coba gunakan kata kunci lain atau hubungi tim Akunta.
            </p>


        </div>


    </div>

</section>



{{-- =====================================================
    BOTTOM HELP CTA
===================================================== --}}

<section class="ak-contact-bottom-cta">


    <div class="container">


        <div class="ak-contact-bottom-box">


            <div>


                <h2>
                    Masih punya pertanyaan?
                </h2>


                <p>
                    Tim kami siap membantu Anda menemukan
                    solusi terbaik untuk bisnis Anda.
                </p>


            </div>



            <a href="{{ route('faq') }}#contact">

                Hubungi Kami

                <span>→</span>

            </a>


        </div>


    </div>


</section>



{{-- =====================================================
    SCRIPT
===================================================== --}}

<script>
document.addEventListener('DOMContentLoaded', function () {


    /* =====================================================
       FAQ ELEMENT
    ===================================================== */

    const faqItems =
        document.querySelectorAll('.ak-contact-faq-item');

    const faqColumns =
        document.querySelectorAll('.ak-contact-faq-column');

    const categoryButtons =
        document.querySelectorAll('.ak-contact-faq-category button');

    const searchInput =
        document.getElementById('faqSearch');

    const searchButton =
        document.getElementById('faqSearchButton');

    const emptyState =
        document.getElementById('faqEmpty');


    let activeCategory = 'semua';



    /* =====================================================
       ACCORDION
    ===================================================== */

    faqItems.forEach(function (item) {

        const button =
            item.querySelector('.ak-contact-faq-question');


        button.addEventListener('click', function () {

            const isActive =
                item.classList.contains('active');


            /* Tutup FAQ lain */

            faqItems.forEach(function (faq) {

                faq.classList.remove('active');

                const faqButton =
                    faq.querySelector('.ak-contact-faq-question');

                faqButton.setAttribute(
                    'aria-expanded',
                    'false'
                );

            });



            /* Buka FAQ yang dipilih */

            if (!isActive) {

                item.classList.add('active');

                button.setAttribute(
                    'aria-expanded',
                    'true'
                );

            }

        });

    });



    /* =====================================================
       FILTER FAQ
    ===================================================== */

    function filterFaq() {

        const keyword =
            searchInput.value
                .toLowerCase()
                .trim();


        let visibleCount = 0;


        faqColumns.forEach(function (column) {

            const question =
                column.dataset.question;

            const category =
                column.dataset.category;


            const categoryMatch =
                activeCategory === 'semua' ||
                category === activeCategory;


            const searchMatch =
                question.includes(keyword);


            if (categoryMatch && searchMatch) {

                column.style.display = '';

                visibleCount++;

            } else {

                column.style.display = 'none';

            }

        });


        emptyState.hidden =
            visibleCount !== 0;

    }



    /* =====================================================
       CATEGORY BUTTON
    ===================================================== */

    categoryButtons.forEach(function (button) {

        button.addEventListener('click', function () {


            activeCategory =
                button.dataset.category;


            categoryButtons.forEach(function (btn) {

                btn.classList.remove('active');

            });


            button.classList.add('active');


            filterFaq();

        });

    });



    /* =====================================================
       SEARCH INPUT
    ===================================================== */

    searchInput.addEventListener(
        'input',
        filterFaq
    );


    searchButton.addEventListener(
        'click',
        filterFaq
    );



    /* ENTER SEARCH */

    searchInput.addEventListener(
        'keydown',
        function (event) {

            if (event.key === 'Enter') {

                event.preventDefault();

                filterFaq();

            }

        }
    );


});
</script>


@endsection