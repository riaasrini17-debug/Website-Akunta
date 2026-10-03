<footer class="footer-akunta">
    <div class="container footer-inner">

        <div class="row">

            {{-- BRAND --}}
            <div class="col-lg-2 col-md-4 col-12">
                <a href="{{ route('home') }}" class="text-decoration-none">
                    <div class="fw-bold fs-3">
                        <span class="brand-a">A</span><span class="brand-kunta">kunta</span>
                    </div>
                </a>

                <p>
                    Solusi keuangan untuk bisnis yang lebih maju.
                </p>
            </div>


            {{-- PRODUK --}}
            <div class="col-lg-2 col-md-4 col-6">
                <h6>Produk</h6>

                <a href="{{ route('features') }}">Dashboard</a>
                <a href="{{ route('features') }}">Digital Invoicing</a>
                <a href="{{ route('features') }}">Finance Report</a>
                <a href="{{ route('features') }}">Kelola Proyek</a>
                <a href="{{ route('features') }}">Penjualan</a>
            </div>


            {{-- SOLUSI --}}
            <div class="col-lg-2 col-md-4 col-6">
                <h6>Solusi</h6>

                <a href="{{ route('features') }}">UMKM</a>
                <a href="{{ route('features') }}">Untuk Perusahaan</a>
                <a href="{{ route('features') }}">Industri</a>
                <a href="{{ route('features') }}">Jasa & Freelancer</a>
            </div>


            {{-- RESOURCES --}}
            <div class="col-lg-2 col-md-4 col-6">
                <h6>Resources</h6>

                <a href="{{ route('blog') }}">Blog</a>
                <a href="{{ route('faq') }}">Panduan</a>
                <a href="{{ route('faq') }}">Pusat Bantuan</a>
                <a href="{{ route('blog') }}">Video Tutorial</a>
            </div>


            {{-- PERUSAHAAN --}}
            <div class="col-lg-2 col-md-4 col-6">
                <h6>Perusahaan</h6>

                <a href="{{ route('about') }}">Tentang Kami</a>
                <a href="{{ route('portfolio') }}">Portofolio</a>
                <a href="{{ route('pricing') }}">Harga</a>
                <a href="{{ route('contact') }}">Kontak</a>
            </div>


            {{-- KONTAK --}}
            <div class="col-lg-2 col-md-4 col-12">
                <h6>Hubungi Kami</h6>

                <a href="tel:+6281234567890">
                    +62 812-3456-7890
                </a>

                <a href="mailto:halo@akunta.id">
                    halo@akunta.id
                </a>

                <p>Jakarta, Indonesia</p>
                <p>09.00 - 18.00 WIB</p>
            </div>

        </div>

        <hr>

        <div class="footer-bottom d-flex justify-content-between flex-wrap gap-2">
            <span>
                © {{ date('Y') }} Akunta. Semua hak dilindungi.
            </span>

            <span>
                Bersama Akunta, Bisnis Lebih Mudah.
            </span>
        </div>

    </div>
</footer>