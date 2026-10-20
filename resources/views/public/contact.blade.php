@extends('layouts.app')

@section('title', 'Kontak - Akunta')

@section('meta', 'Hubungi tim Akunta untuk mendapatkan informasi, konsultasi, dan bantuan terkait solusi Akunta.')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endpush


@section('content')


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
    CTA GLOBAL
===================================================== --}}
@include('public.partials.cta')

@endsection