@extends('layouts.app')

@section('title', 'Harga - Akunta')
@section('meta', 'Pilih paket Akunta yang sesuai dengan kebutuhan bisnis Anda dengan pilihan harga yang fleksibel dan transparan.')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/harga.css') }}">
@endpush

@section('content')

@php
    $whatsappNumber = '6281234567890';

    $packages = [
        [
            'name' => 'Paket UMKM',
            'short_name' => 'UMKM',
            'icon' => 'bi-shop',
            'desc' => 'Cocok untuk memulai bisnis Anda',
            'monthly' => 'Rp 99.000',
            'yearly' => 'Rp 950.400',
            'features' => [
                'Dashboard',
                'Kas & Bank',
                'Penjualan',
                'Pembelian',
                'Persediaan',
                'Laporan Keuangan Dasar',
                '1 Pengguna',
            ],
        ],

        [
            'name' => 'Paket Bisnis',
            'short_name' => 'Bisnis',
            'icon' => 'bi-briefcase-fill',
            'desc' => 'Pilihan terbaik untuk bisnis berkembang',
            'monthly' => 'Rp 299.000',
            'yearly' => 'Rp 2.880.000',
            'popular' => true,
            'features' => [
                'Semua fitur UMKM',
                'Laporan Keuangan Lengkap',
                'Manajemen Pengguna',
                'Manajemen Produk & Pelanggan',
                'Integrasi Rekening Bank',
                'Transaksi Berulang',
                'Maksimal 5 Pengguna',
            ],
        ],

        [
            'name' => 'Paket Pro Bisnis',
            'short_name' => 'Pro Bisnis',
            'icon' => 'bi-buildings-fill',
            'desc' => 'Untuk kebutuhan bisnis yang lebih kompleks',
            'price' => 'Hubungi Kami',
            'features' => [
                'Semua fitur Bisnis',
                'Pengguna tanpa batas',
                'Multi-cabang',
                'Integrasi sistem tambahan',
                'Custom laporan',
                'Prioritas dukungan',
                'Solusi sesuai kebutuhan bisnis',
            ],
        ],
    ];

    $comparison = [
        ['feature' => 'Dashboard', 'umkm' => true, 'bisnis' => true, 'pro' => true],
        ['feature' => 'Kas & Bank', 'umkm' => true, 'bisnis' => true, 'pro' => true],
        ['feature' => 'Penjualan', 'umkm' => true, 'bisnis' => true, 'pro' => true],
        ['feature' => 'Pembelian', 'umkm' => true, 'bisnis' => true, 'pro' => true],
        ['feature' => 'Persediaan', 'umkm' => true, 'bisnis' => true, 'pro' => true],
        ['feature' => 'Buku Besar', 'umkm' => false, 'bisnis' => true, 'pro' => true],
        ['feature' => 'Laporan Keuangan', 'umkm' => false, 'bisnis' => true, 'pro' => true],
        ['feature' => 'Manajemen Pengguna', 'umkm' => '1 pengguna', 'bisnis' => 'Maks. 5 pengguna', 'pro' => 'Tanpa batas'],
        ['feature' => 'Integrasi Rekening Bank', 'umkm' => false, 'bisnis' => true, 'pro' => true],
        ['feature' => 'Multi-cabang', 'umkm' => false, 'bisnis' => false, 'pro' => true],
        ['feature' => 'Custom Laporan', 'umkm' => false, 'bisnis' => false, 'pro' => true],
        ['feature' => 'Dedicated Account Manager', 'umkm' => false, 'bisnis' => false, 'pro' => true],
    ];

    $priceFaqs = [
        'Apakah ada biaya tambahan selain biaya langganan?',
        'Apakah bisa upgrade atau downgrade paket?',
        'Metode pembayaran apa saja yang tersedia?',
        'Apakah semua paket sudah termasuk dukungan teknis?',
    ];
@endphp


{{-- =====================================================
    HERO
===================================================== --}}
<section class="ak-pricing-hero">

    <div class="container">

        <div class="row align-items-center g-4 g-lg-5">

            <div class="col-lg-5">

                <div class="ak-pricing-hero-copy">

                    <span class="ak-pricing-eyebrow">
                        PAKET & HARGA
                    </span>

                    <h1>
                        Solusi Keuangan yang
                        Fleksibel untuk
                        <span>Setiap Tahap Bisnis Anda</span>
                    </h1>

                    <p>
                        Pilih paket yang sesuai dengan kebutuhan bisnis Anda.
                        Semua paket dirancang dengan harga yang transparan dan
                        fitur lengkap agar bisnis Anda dapat berkembang dengan
                        lebih mudah.
                    </p>

                    <div class="ak-pricing-benefits">

                        <span>
                            <b>✓</b>
                            Tanpa biaya tersembunyi
                        </span>

                        <span>
                            <b>✓</b>
                            Mulai kapan saja
                        </span>

                        <span>
                            <b>✓</b>
                            Dukungan tim profesional
                        </span>

                    </div>

                </div>

            </div>


            <div class="col-lg-7">

                <div class="ak-pricing-hero-visual">

                    <span class="ak-pricing-blob blob-one"></span>
                    <span class="ak-pricing-blob blob-two"></span>
                    <span class="ak-pricing-dots"></span>

                    <img
                        src="{{ asset('assets/fitur/fitur-statistik.png') }}"
                        alt="Dashboard Akunta"
                        class="ak-pricing-hero-image">

                    <div class="ak-pricing-float-card">

                        <span class="float-icon">
                            ▥
                        </span>

                        <div>
                            <strong>10.000+</strong>
                            <small>Bisnis sudah berkembang bersama Akunta</small>
                        </div>

                    </div>

                    <div class="ak-pricing-note">
                        Kelola bisnis<br>
                        lebih mudah<br>
                        dengan Akunta
                        <span>↘</span>
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>



{{-- =====================================================
    PACKAGE SECTION
===================================================== --}}
<section class="ak-pricing-section">

    <div class="container">

        <div class="ak-pricing-heading text-center">

            <span class="ak-pricing-eyebrow">
                PAKET & HARGA
            </span>

            <h2>
                Pilih Paket yang Sesuai untuk Bisnis Anda
            </h2>

            <p>
                Semua paket dirancang fleksibel dengan harga transparan
                dan fitur yang dapat mendukung pertumbuhan bisnis Anda.
            </p>

        </div>


        {{-- TOGGLE --}}
        <div class="ak-pricing-toggle">

            <button
                type="button"
                class="price-toggle active"
                data-type="monthly">

                Bulanan

            </button>

            <button
                type="button"
                class="price-toggle"
                data-type="yearly">

                Tahunan

            </button>

            <span class="discount-pill">
                Hemat 20%
            </span>

        </div>


        {{-- PACKAGE CARDS --}}
        <div class="row g-4 ak-pricing-cards">

            @foreach ($packages as $package)

                <div class="col-lg-4">

                    <article
                        class="ak-price-card
                        {{ isset($package['popular']) ? 'is-popular' : '' }}">

                        @if(isset($package['popular']))

                            <div class="ak-popular-badge">
                                ★ Paling Populer
                            </div>

                        @endif


                        <div class="ak-package-head">

                            <div class="ak-package-icon">
                                <i class="bi {{ $package['icon'] }}"></i>
                            </div>

                            <div>

                                <h3>
                                    {{ $package['name'] }}
                                </h3>

                                <p>
                                    {{ $package['desc'] }}
                                </p>

                            </div>

                        </div>


                        <div class="ak-package-price">

                            @if($package['short_name'] === 'Pro Bisnis')

                                <strong>
                                    Hubungi Kami
                                </strong>

                            @else

                                <strong class="monthly-price">
                                    {{ $package['monthly'] }}
                                </strong>

                                <strong class="yearly-price d-none">
                                    {{ $package['yearly'] }}
                                </strong>

                                <span>
                                    /
                                    <small class="period">
                                        bulan
                                    </small>
                                </span>

                            @endif

                        </div>


                        <ul class="ak-package-list">

                            @foreach($package['features'] as $feature)

                                <li>
                                    {{ $feature }}
                                </li>

                            @endforeach

                        </ul>


                        @php
                            $waMessage = urlencode(
                                'Halo Akunta, saya tertarik dengan ' .
                                $package['name'] .
                                '. Saya ingin mendapatkan informasi lebih lanjut mengenai paket ini.'
                            );
                        @endphp

                        <a
                            href="https://wa.me/{{ $whatsappNumber }}?text={{ $waMessage }}"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="ak-package-button
                            {{ isset($package['popular']) ? 'button-filled' : '' }}">

                            <i class="bi bi-whatsapp"></i>

                            {{ $package['short_name'] === 'Pro Bisnis'
                                ? 'Hubungi Kami'
                                : 'Pilih Paket' }}

                        </a>

                    </article>

                </div>

            @endforeach

        </div>

    </div>

</section>



{{-- =====================================================
    COMPARISON
===================================================== --}}
<section class="ak-comparison-section">

    <div class="container">

        <div class="ak-comparison-header">

            <h2>
                Perbandingan Fitur Paket
            </h2>

            <a href="{{ url('/produk-fitur') }}">
                Lihat Detail Fitur →
            </a>

        </div>


        <div class="ak-comparison-table-wrap">

            <table class="ak-comparison-table">

                <thead>
                    <tr>
                        <th>Fitur</th>
                        <th>UMKM</th>
                        <th class="highlight-column">Bisnis</th>
                        <th>Pro Bisnis</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach($comparison as $row)

                        <tr>

                            <td>
                                {{ $row['feature'] }}
                            </td>


                            @foreach(['umkm', 'bisnis', 'pro'] as $plan)

                                <td class="{{ $plan === 'bisnis' ? 'highlight-column' : '' }}">

                                    @if($row[$plan] === true)

                                        <span class="compare-check">
                                            ✓
                                        </span>

                                    @elseif($row[$plan] === false)

                                        <span class="compare-empty">
                                            –
                                        </span>

                                    @else

                                        {{ $row[$plan] }}

                                    @endif

                                </td>

                            @endforeach

                        </tr>

                    @endforeach

                </tbody>

            </table>

        </div>

    </div>

</section>



{{-- =====================================================
    PRICING FAQ
===================================================== --}}
<section class="ak-pricing-faq">

    <div class="container">

        <div class="row align-items-center g-4 g-lg-5">

            <div class="col-lg-5">

                <div class="ak-pricing-faq-copy">

                    <span class="ak-pricing-eyebrow">
                        PERTANYAAN SEPUTAR HARGA
                    </span>

                    <div class="ak-faq-copy-inner">

                        <div class="ak-faq-icon-box">
                            <span>?</span>
                        </div>

                        <h2>
                            Masih Punya Pertanyaan?
                        </h2>

                        <p>
                            Temukan jawaban seputar paket, harga, pembayaran,
                            dan penggunaan Akunta yang paling sering ditanyakan.
                        </p>

                    </div>

                </div>

            </div>


            <div class="col-lg-7">

                <div class="ak-price-faq-side">

                    <div class="ak-price-faq-top">
                        <a href="{{ url('/faq') }}">
                            Lihat Semua FAQ →
                        </a>
                    </div>

                    <div class="ak-price-faq-list">

                        @foreach($priceFaqs as $faq)

                            <a
                                href="{{ url('/faq') }}"
                                class="ak-price-faq-item">

                                <span>{{ $faq }}</span>
                                <b>+</b>

                            </a>

                        @endforeach

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>



@include('public.partials.cta')



<script>
document.addEventListener('DOMContentLoaded', function () {

    const buttons = document.querySelectorAll('.price-toggle');
    const monthlyPrices = document.querySelectorAll('.monthly-price');
    const yearlyPrices = document.querySelectorAll('.yearly-price');
    const periods = document.querySelectorAll('.period');

    buttons.forEach(function (button) {

        button.addEventListener('click', function () {

            buttons.forEach(function (btn) {
                btn.classList.remove('active');
            });

            button.classList.add('active');

            const yearly = button.dataset.type === 'yearly';

            monthlyPrices.forEach(function (price) {
                price.classList.toggle('d-none', yearly);
            });

            yearlyPrices.forEach(function (price) {
                price.classList.toggle('d-none', !yearly);
            });

            periods.forEach(function (period) {
                period.textContent = yearly ? 'tahun' : 'bulan';
            });

        });

    });

});
</script>

@endsection