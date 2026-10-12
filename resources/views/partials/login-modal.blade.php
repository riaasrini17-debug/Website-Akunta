

{{-- =====================================================
    LOGIN MODAL
===================================================== --}}

<div
    class="modal fade"
    id="loginModal"
    tabindex="-1"
    aria-labelledby="loginModalLabel"
    aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content auth-login-modal">


            {{-- CLOSE --}}
            <button
                type="button"
                class="auth-login-close"
                data-bs-dismiss="modal"
                aria-label="Tutup">

                <svg
                    viewBox="0 0 24 24"
                    aria-hidden="true">

                    <path d="M6 6L18 18"></path>
                    <path d="M18 6L6 18"></path>

                </svg>

            </button>



            <form
                method="POST"
                action="{{ route('login.submit') }}"
                class="auth-login-form">

                @csrf


                <div class="modal-body">


                    {{-- =========================
                        HEADING
                    ========================== --}}

                    <div class="auth-login-heading">

                        <h2 id="loginModalLabel">
                            Selamat Datang di
                        </h2>


                        <div class="auth-login-brand">

                            <span class="brand-a">
                                A
                            </span>

                            <span class="brand-kunta">
                                kunta
                            </span>

                        </div>


                        <p>
                            Masuk untuk melanjutkan dan kelola
                            <br class="d-none d-sm-block">
                            keuangan bisnis Anda dengan lebih mudah.
                        </p>

                    </div>



                    {{-- =========================
                        EMAIL
                    ========================== --}}

                    <div class="auth-login-field">

                        <div class="auth-login-input-wrap">


                            {{-- EMAIL ICON --}}
                            <span class="auth-login-input-icon">

                                <svg
                                    viewBox="0 0 24 24"
                                    aria-hidden="true">

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
                                name="email"
                                value="{{ old('email') }}"
                                class="form-control @error('email') is-invalid @enderror"
                                placeholder="Masukkan email Anda"
                                aria-label="Email"
                                autocomplete="email"
                                required>

                        </div>


                        @error('email')

                            <div class="auth-login-error">
                                {{ $message }}
                            </div>

                        @enderror

                    </div>



                    {{-- =========================
                        PASSWORD
                    ========================== --}}

                    <div class="auth-login-field">

                        <div class="auth-login-input-wrap">


                            {{-- LOCK --}}
                            <span class="auth-login-input-icon">

                                <svg
                                    viewBox="0 0 24 24"
                                    aria-hidden="true">

                                    <rect
                                        x="5"
                                        y="10"
                                        width="14"
                                        height="11"
                                        rx="2">
                                    </rect>

                                    <path
                                        d="M8 10V7a4 4 0 0 1 8 0v3">
                                    </path>

                                    <path d="M12 14v3"></path>

                                </svg>

                            </span>


                            <input
                                type="password"
                                name="password"
                                id="loginPassword"
                                class="form-control auth-password-input @error('password') is-invalid @enderror"
                                placeholder="Masukkan password"
                                aria-label="Password"
                                autocomplete="current-password"
                                required>


                            {{-- EYE BUTTON --}}
                            <button
                                type="button"
                                class="auth-password-toggle"
                                data-password-target="loginPassword"
                                aria-label="Tampilkan password">


                                {{-- EYE OPEN --}}
                                <svg
                                    class="eye-open"
                                    viewBox="0 0 24 24"
                                    aria-hidden="true">

                                    <path
                                        d="M2 12s3.5-6 10-6 10 6 10 6-3.5 6-10 6S2 12 2 12z">
                                    </path>

                                    <circle
                                        cx="12"
                                        cy="12"
                                        r="2.5">
                                    </circle>

                                </svg>


                                {{-- EYE CLOSED --}}
                                <svg
                                    class="eye-closed"
                                    viewBox="0 0 24 24"
                                    aria-hidden="true">

                                    <path d="M3 3L21 21"></path>

                                    <path
                                        d="M10.6 6.2A10 10 0 0 1 12 6c6.5 0 10 6 10 6a16 16 0 0 1-3.1 3.8">
                                    </path>

                                    <path
                                        d="M6.5 6.6C3.5 8.4 2 12 2 12s3.5 6 10 6a10 10 0 0 0 3.5-.6">
                                    </path>

                                </svg>


                            </button>


                        </div>


                        @error('password')

                            <div class="auth-login-error">
                                {{ $message }}
                            </div>

                        @enderror

                    </div>



                    {{-- =========================
                        REMEMBER + FORGOT
                    ========================== --}}

                    <div class="auth-login-options">

                        <label class="auth-login-remember">

                            <input
                                type="checkbox"
                                name="remember"
                                value="1">

                            <span class="auth-custom-checkbox"></span>

                            <span>
                                Ingat saya
                            </span>

                        </label>


                        {{-- NANTI HUBUNGKAN KE ROUTE FORGOT PASSWORD --}}
                        <a
                            href="#"
                            class="auth-forgot-link">

                            Lupa password?

                        </a>

                    </div>



                    {{-- =========================
                        LOGIN BUTTON
                    ========================== --}}

                    <button
                        type="submit"
                        class="auth-login-submit">

                        <span>
                            Login
                        </span>

                        <svg
                            viewBox="0 0 24 24"
                            aria-hidden="true">

                            <path d="M5 12h14"></path>
                            <path d="M14 7l5 5-5 5"></path>

                        </svg>

                    </button>



                    {{-- =========================
                        DIVIDER
                    ========================== --}}

                    <div class="auth-login-divider">

                        <span></span>

                        <p>
                            atau masuk dengan
                        </p>

                        <span></span>

                    </div>



                    {{-- =========================
                        GOOGLE
                    ========================== --}}

                    <button
                        type="button"
                        class="auth-google-button">


                        {{-- GOOGLE G --}}
                        <svg
                            class="auth-google-icon"
                            viewBox="0 0 24 24"
                            aria-hidden="true">

                            <path
                                fill="#4285F4"
                                d="M21.35 12.2c0-.7-.06-1.38-.18-2.03H12v3.84h5.24a4.48 4.48 0 0 1-1.94 2.94v2.49h3.14c1.84-1.69 2.91-4.19 2.91-7.24z">
                            </path>

                            <path
                                fill="#34A853"
                                d="M12 21.7c2.62 0 4.82-.87 6.43-2.36l-3.14-2.49c-.87.58-1.98.93-3.29.93-2.53 0-4.67-1.71-5.44-4.01H3.32v2.57A9.7 9.7 0 0 0 12 21.7z">
                            </path>

                            <path
                                fill="#FBBC05"
                                d="M6.56 13.77A5.83 5.83 0 0 1 6.26 12c0-.61.1-1.21.3-1.77V7.66H3.32A9.7 9.7 0 0 0 2.3 12c0 1.56.37 3.03 1.02 4.34l3.24-2.57z">
                            </path>

                            <path
                                fill="#EA4335"
                                d="M12 6.22c1.43 0 2.72.49 3.73 1.46l2.79-2.79C16.81 3.3 14.61 2.3 12 2.3a9.7 9.7 0 0 0-8.68 5.36l3.24 2.57C7.33 7.93 9.47 6.22 12 6.22z">
                            </path>

                        </svg>


                        <span>
                            Google
                        </span>

                    </button>



                    {{-- =========================
                        REGISTER
                    ========================== --}}

                    <div class="auth-login-register">

                        <span>
                            Belum punya akun?
                        </span>


                        <button
                            type="button"
                            class="auth-login-register-link"
                            data-bs-dismiss="modal"
                            data-bs-toggle="modal"
                            data-bs-target="#registerModal">

                            Daftar sekarang

                        </button>

                    </div>


                </div>

            </form>

        </div>

    </div>

</div>



{{-- =====================================================
    PASSWORD VISIBILITY
===================================================== --}}

<script>
document.addEventListener('DOMContentLoaded', function () {

    document
        .querySelectorAll('.auth-password-toggle')
        .forEach(function (button) {

            button.addEventListener('click', function () {

                const targetId =
                    button.getAttribute('data-password-target');

                const input =
                    document.getElementById(targetId);


                if (!input) {
                    return;
                }


                const isPassword =
                    input.type === 'password';


                input.type =
                    isPassword
                        ? 'text'
                        : 'password';


                button.classList.toggle(
                    'show-password',
                    isPassword
                );


                button.setAttribute(
                    'aria-label',
                    isPassword
                        ? 'Sembunyikan password'
                        : 'Tampilkan password'
                );

            });

        });

});
</script>