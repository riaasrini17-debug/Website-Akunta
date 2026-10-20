@extends('layouts.app')

@section('title', ' FAQ - Akunta')

@section('meta', 'Hubungi tim Akunta dan temukan jawaban atas pertanyaan umum seputar akun, fitur, pembayaran, keamanan, dan penggunaan Akunta.')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/faq.css') }}">
@endpush


@section('content')


@php

    $faqs = [

        /* =========================
        AKUN & LANGGANAN
        ========================== */

        [
            'question' => 'Bagaimana cara membuat akun di Akunta?',
            'answer' => 'Anda dapat membuat akun melalui proses pendaftaran Akunta dengan melengkapi informasi yang diperlukan, kemudian mengikuti langkah aktivasi akun.',
            'category' => 'akun',
        ],

        [
            'question' => 'Apakah Akunta bisa digunakan secara gratis?',
            'answer' => 'Akunta menyediakan pilihan layanan yang dapat disesuaikan dengan kebutuhan bisnis. Informasi mengenai paket dan masa percobaan dapat dilihat pada halaman Harga.',
            'category' => 'akun',
        ],

        [
            'question' => 'Bagaimana cara memilih paket Akunta?',
            'answer' => 'Anda dapat membandingkan fitur dan layanan pada setiap paket melalui halaman Harga, kemudian memilih paket yang paling sesuai dengan kebutuhan bisnis Anda.',
            'category' => 'akun',
        ],

        [
            'question' => 'Apakah paket Akunta bisa diubah?',
            'answer' => 'Perubahan paket dapat dilakukan sesuai dengan ketentuan layanan yang berlaku. Hubungi tim Akunta apabila Anda membutuhkan bantuan untuk menyesuaikan paket.',
            'category' => 'akun',
        ],

        [
            'question' => 'Apakah satu akun dapat digunakan untuk beberapa perusahaan?',
            'answer' => 'Penggunaan akun untuk beberapa perusahaan bergantung pada paket dan konfigurasi layanan yang digunakan.',
            'category' => 'akun',
        ],


        /* =========================
        FITUR & PENGGUNAAN
        ========================== */

        [
            'question' => 'Fitur apa saja yang tersedia di Akunta?',
            'answer' => 'Akunta menyediakan berbagai fitur seperti dashboard, buku besar, kas dan bank, persediaan, pembelian, penjualan, aset tetap, serta laporan bisnis.',
            'category' => 'fitur',
        ],

        [
            'question' => 'Bagaimana cara membuat invoice di Akunta?',
            'answer' => 'Invoice dapat dibuat melalui fitur penjualan dengan memasukkan informasi pelanggan, transaksi, nominal pembayaran, dan detail lain yang diperlukan.',
            'category' => 'fitur',
        ],

        [
            'question' => 'Apakah Akunta dapat digunakan untuk mengelola stok?',
            'answer' => 'Ya. Fitur persediaan membantu pengguna memantau stok barang, gudang, pemindahan barang, dan aktivitas persediaan lainnya.',
            'category' => 'fitur',
        ],

        [
            'question' => 'Apakah Akunta memiliki laporan keuangan?',
            'answer' => 'Ya. Akunta menyediakan berbagai laporan bisnis dan keuangan yang membantu pengguna memantau kondisi dan aktivitas perusahaan.',
            'category' => 'fitur',
        ],

        [
            'question' => 'Apakah data transaksi dapat dilihat kembali?',
            'answer' => 'Data transaksi yang telah dicatat dapat ditelusuri kembali melalui fitur dan laporan terkait sesuai dengan hak akses pengguna.',
            'category' => 'fitur',
        ],


        /* =========================
        PEMBAYARAN
        ========================== */

        [
            'question' => 'Bagaimana cara melakukan pembayaran langganan?',
            'answer' => 'Pembayaran dilakukan berdasarkan paket layanan yang dipilih. Informasi pembayaran akan diberikan selama proses aktivasi atau perpanjangan layanan.',
            'category' => 'pembayaran',
        ],

        [
            'question' => 'Metode pembayaran apa saja yang diterima?',
            'answer' => 'Metode pembayaran mengikuti pilihan yang tersedia pada layanan Akunta. Untuk informasi terbaru, Anda dapat menghubungi tim kami.',
            'category' => 'pembayaran',
        ],

        [
            'question' => 'Apakah tersedia pembayaran bulanan dan tahunan?',
            'answer' => 'Pilihan periode pembayaran mengikuti paket yang tersedia. Informasi lengkap mengenai periode langganan dapat dilihat melalui halaman Harga.',
            'category' => 'pembayaran',
        ],

        [
            'question' => 'Bagaimana jika pembayaran saya belum terkonfirmasi?',
            'answer' => 'Pastikan informasi pembayaran telah sesuai. Jika pembayaran belum terkonfirmasi, hubungi tim Akunta dengan menyertakan informasi transaksi.',
            'category' => 'pembayaran',
        ],

        [
            'question' => 'Apakah saya mendapatkan bukti pembayaran?',
            'answer' => 'Informasi dan bukti pembayaran dapat diberikan sesuai dengan proses transaksi dan layanan yang digunakan.',
            'category' => 'pembayaran',
        ],


        /* =========================
        KEAMANAN
        ========================== */

        [
            'question' => 'Apakah data bisnis saya aman di Akunta?',
            'answer' => 'Akunta dirancang dengan memperhatikan keamanan dan pengelolaan akses pengguna untuk membantu menjaga informasi bisnis.',
            'category' => 'keamanan',
        ],

        [
            'question' => 'Apakah Akunta bisa digunakan oleh lebih dari satu pengguna?',
            'answer' => 'Ya, akses beberapa pengguna dapat disesuaikan dengan paket dan kebutuhan bisnis Anda.',
            'category' => 'keamanan',
        ],

        [
            'question' => 'Apakah setiap pengguna dapat memiliki hak akses berbeda?',
            'answer' => 'Hak akses pengguna dapat disesuaikan agar setiap pengguna hanya dapat mengakses fitur dan informasi yang sesuai dengan perannya.',
            'category' => 'keamanan',
        ],

        [
            'question' => 'Bagaimana jika saya lupa password?',
            'answer' => 'Gunakan proses pemulihan akun yang tersedia atau hubungi tim Akunta apabila Anda membutuhkan bantuan lebih lanjut.',
            'category' => 'keamanan',
        ],

        [
            'question' => 'Apakah aktivitas pengguna dapat dipantau?',
            'answer' => 'Beberapa aktivitas dalam sistem dapat tercatat sehingga pengelolaan pengguna dan penggunaan sistem menjadi lebih terstruktur.',
            'category' => 'keamanan',
        ],


        /* =========================
        LAINNYA
        ========================== */

        [
            'question' => 'Apa itu Akunta?',
            'answer' => 'Akunta adalah solusi digital yang membantu bisnis mengelola kebutuhan administrasi dan keuangan secara lebih terstruktur, praktis, dan efisien.',
            'category' => 'lainnya',
        ],

        [
            'question' => 'Bisnis seperti apa yang cocok menggunakan Akunta?',
            'answer' => 'Akunta dapat digunakan oleh berbagai jenis bisnis yang membutuhkan pengelolaan transaksi, keuangan, persediaan, dan laporan secara lebih terstruktur.',
            'category' => 'lainnya',
        ],

        [
            'question' => 'Apakah Akunta cocok untuk UMKM?',
            'answer' => 'Ya. Akunta dapat membantu UMKM mengelola aktivitas bisnis dan pencatatan secara lebih terorganisir.',
            'category' => 'lainnya',
        ],

        [
            'question' => 'Apakah tersedia bantuan untuk pengguna baru?',
            'answer' => 'Tim Akunta dapat membantu memberikan informasi dan arahan awal mengenai penggunaan layanan.',
            'category' => 'lainnya',
        ],

        [
            'question' => 'Bagaimana cara menghubungi tim Akunta?',
            'answer' => 'Anda dapat menghubungi tim Akunta melalui halaman Kontak, WhatsApp, telepon, atau email yang tersedia.',
            'category' => 'lainnya',
        ],

    ];


@endphp




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



           <a href="{{ route('contact') }}">

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