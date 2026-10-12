{{-- =====================================================
    COBA GRATIS MODAL
===================================================== --}}

<div
    class="modal fade"
    id="demoModal"
    tabindex="-1"
    aria-labelledby="demoModalLabel"
    aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content ak-demo-modal">

            {{-- CLOSE --}}
            <button
                type="button"
                class="ak-demo-close"
                data-bs-dismiss="modal"
                aria-label="Tutup">

                <svg viewBox="0 0 24 24">
                    <path d="M6 6L18 18"></path>
                    <path d="M18 6L6 18"></path>
                </svg>

            </button>


            <div class="row g-0">


                {{-- =================================================
                    LEFT PROMO
                ================================================== --}}
                <div class="col-md-5 ak-demo-left">

                    <div class="ak-demo-left-content">

                        {{-- BRAND --}}
                        <div class="ak-demo-brand">
                            <span class="brand-a">A</span><span class="brand-kunta">kunta</span>
                        </div>


                        <h2>
                            Coba Gratis
                            <span>Akunta</span>
                        </h2>


                        <p class="ak-demo-left-desc">
                            Rasakan kemudahan mengelola keuangan bisnis
                            Anda dengan fitur lengkap Akunta selama 14 hari.
                        </p>


                        {{-- BENEFITS --}}
                        <div class="ak-demo-benefits">

                            <div class="ak-demo-benefit">

                                <span class="ak-demo-check">
                                    ✓
                                </span>

                                <span>
                                    Akses semua fitur premium
                                </span>

                            </div>


                            <div class="ak-demo-benefit">

                                <span class="ak-demo-check">
                                    ✓
                                </span>

                                <span>
                                    Tanpa kartu kredit
                                </span>

                            </div>


                            <div class="ak-demo-benefit">

                                <span class="ak-demo-check">
                                    ✓
                                </span>

                                <span>
                                    Gratis selama 14 hari
                                </span>

                            </div>

                        </div>


                        {{-- DECORATION --}}
                        <span class="ak-demo-shape ak-demo-shape-one"></span>
                        <span class="ak-demo-shape ak-demo-shape-two"></span>


                        {{-- DASHBOARD --}}
                        <div class="ak-demo-dashboard">

                            <img
                                src="{{ asset('assets/home-dasboard.png') }}"
                                alt="Dashboard Akunta">

                            <div class="ak-demo-growth-card">

                                <small>
                                    Pertumbuhan Bisnis
                                </small>

                                <strong>
                                    +32%
                                </strong>

                                <div class="ak-demo-bars">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>



                {{-- =================================================
                    RIGHT FORM
                ================================================== --}}
                <div class="col-md-7 ak-demo-right">

                    <form
                        method="POST"
                        action="{{ route('demo.submit') }}">

                        @csrf


                        <div class="ak-demo-form">


                            {{-- HEADING --}}
                            <div class="ak-demo-heading">

                                <h2 id="demoModalLabel">
                                    Mulai Coba Gratis Sekarang
                                </h2>

                                <p>
                                    Isi data berikut untuk mendapatkan akses gratis
                                    Akunta selama 14 hari.
                                </p>

                            </div>



                            {{-- NAME --}}
                            <div class="ak-demo-field">

                                <label for="demoName">
                                    Nama Lengkap <span>*</span>
                                </label>

                                <div class="ak-demo-input-wrap">

                                    <span class="ak-demo-input-icon">

                                        <svg viewBox="0 0 24 24">
                                            <circle cx="12" cy="8" r="4"></circle>
                                            <path d="M4 21c0-4 3-7 8-7s8 3 8 7"></path>
                                        </svg>

                                    </span>


                                    <input
                                        type="text"
                                        id="demoName"
                                        name="name"
                                        value="{{ old('name') }}"
                                        class="form-control"
                                        placeholder="Masukkan nama lengkap Anda"
                                        required>

                                </div>

                            </div>



                            {{-- EMAIL --}}
                            <div class="ak-demo-field">

                                <label for="demoEmail">
                                    Email <span>*</span>
                                </label>

                                <div class="ak-demo-input-wrap">

                                    <span class="ak-demo-input-icon">

                                        <svg viewBox="0 0 24 24">
                                            <rect
                                                x="3"
                                                y="5"
                                                width="18"
                                                height="14"
                                                rx="2">
                                            </rect>

                                            <path d="M3 7L12 13L21 7"></path>
                                        </svg>

                                    </span>


                                    <input
                                        type="email"
                                        id="demoEmail"
                                        name="email"
                                        value="{{ old('email') }}"
                                        class="form-control"
                                        placeholder="Masukkan email Anda"
                                        required>

                                </div>

                            </div>



                            {{-- COMPANY --}}
                            <div class="ak-demo-field">

                                <label for="demoCompany">
                                    Bidang / Nama Perusahaan <span>*</span>
                                </label>

                                <div class="ak-demo-input-wrap">

                                    <span class="ak-demo-input-icon">

                                        <svg viewBox="0 0 24 24">
                                            <path d="M5 21V4h11v17"></path>
                                            <path d="M16 9h3v12"></path>
                                            <path d="M8 8h2"></path>
                                            <path d="M8 12h2"></path>
                                            <path d="M8 16h2"></path>
                                        </svg>

                                    </span>


                                    <input
                                        type="text"
                                        id="demoCompany"
                                        name="company"
                                        value="{{ old('company') }}"
                                        class="form-control"
                                        placeholder="Contoh: Fashion, Kuliner, PT Maju Bersama"
                                        required>

                                </div>

                            </div>



                            {{-- PACKAGE --}}
                            <div class="ak-demo-field">

                                <label for="demoPackage">
                                    Jenis Paket <span>*</span>
                                </label>

                                <div class="ak-demo-input-wrap">

                                    <span class="ak-demo-input-icon">

                                        <svg viewBox="0 0 24 24">
                                            <path d="M12 3L3 8l9 5 9-5-9-5z"></path>
                                            <path d="M3 12l9 5 9-5"></path>
                                            <path d="M3 16l9 5 9-5"></path>
                                        </svg>

                                    </span>


                                    <select
                                        id="demoPackage"
                                        name="package"
                                        class="form-select"
                                        required>

                                        <option
                                            value=""
                                            selected
                                            disabled>

                                            Pilih paket yang ingin dicoba

                                        </option>

                                        <option value="UMKM">
                                            UMKM
                                        </option>

                                        <option value="Bisnis">
                                            Bisnis
                                        </option>

                                        <option value="Pro Bisnis">
                                            Pro Bisnis
                                        </option>

                                    </select>

                                </div>

                            </div>



                            {{-- PHONE --}}
                            <div class="ak-demo-field">

                                <label for="demoPhone">
                                    No. Telepon <span>*</span>
                                </label>

                                <div class="ak-demo-input-wrap">

                                    <span class="ak-demo-input-icon">

                                        <svg viewBox="0 0 24 24">
                                            <path
                                                d="M5 4l3-1 2 5-2 2c1.5 3 3.5 5 6 6l2-2 5 2-1 3c-.4 1.2-1.5 2-2.8 2C9.3 20.4 3.6 14.7 3 7.8 2.9 6.5 3.8 5.4 5 4z">
                                            </path>
                                        </svg>

                                    </span>


                                    <input
                                        type="tel"
                                        id="demoPhone"
                                        name="phone"
                                        value="{{ old('phone') }}"
                                        class="form-control"
                                        placeholder="Masukkan nomor telepon Anda"
                                        required>

                                </div>

                            </div>



                            {{-- SUBMIT --}}
                            <button
                                type="submit"
                                class="ak-demo-submit">

                                <span>
                                    Kirim Pengajuan
                                </span>

                                <svg viewBox="0 0 24 24">
                                    <path d="M5 12h14"></path>
                                    <path d="M14 7l5 5-5 5"></path>
                                </svg>

                            </button>



                            {{-- TRUST --}}
                            <div class="ak-demo-trust">

                                <div class="ak-demo-trust-item">

                                    <span class="ak-demo-trust-icon">

                                        <svg viewBox="0 0 24 24">
                                            <path d="M12 3l7 3v5c0 5-3 8-7 10-4-2-7-5-7-10V6l7-3z"></path>
                                            <path d="M9 12l2 2 4-4"></path>
                                        </svg>

                                    </span>

                                    <p>
                                        Data aman<br>
                                        dan terlindungi
                                    </p>

                                </div>


                                <div class="ak-demo-trust-item">

                                    <span class="ak-demo-trust-icon">

                                        <svg viewBox="0 0 24 24">
                                            <circle cx="12" cy="12" r="8"></circle>
                                            <path d="M12 7v5l3 2"></path>
                                        </svg>

                                    </span>

                                    <p>
                                        Gratis<br>
                                        selama 14 hari
                                    </p>

                                </div>


                                <div class="ak-demo-trust-item">

                                    <span class="ak-demo-trust-icon">

                                        <svg viewBox="0 0 24 24">
                                            <path d="M4 13v-2a8 8 0 0 1 16 0v2"></path>
                                            <path d="M4 13h3v6H5a2 2 0 0 1-2-2v-2a2 2 0 0 1 1-2z"></path>
                                            <path d="M20 13h-3v6h2a2 2 0 0 0 2-2v-2a2 2 0 0 0-1-2z"></path>
                                        </svg>

                                    </span>

                                    <p>
                                        Dukungan tim<br>
                                        siap membantu
                                    </p>

                                </div>

                            </div>


                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>