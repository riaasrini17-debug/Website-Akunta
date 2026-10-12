{{-- =====================================================
    REGISTER MODAL
===================================================== --}}

<div
    class="modal fade"
    id="registerModal"
    tabindex="-1"
    aria-labelledby="registerModalLabel"
    aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content auth-register-modal">


            {{-- CLOSE --}}
            <button
                type="button"
                class="auth-register-close"
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
                action="{{ route('register.submit') }}"
                class="auth-register-form">

                @csrf


                <div class="modal-body">


                    {{-- =========================
                        HEADER
                    ========================== --}}

                    <div class="auth-register-heading">

                        <h2 id="registerModalLabel">
                            Buat Akun
                        </h2>


                        <div class="auth-register-brand">

                            <span class="brand-a">
                                A
                            </span>

                            <span class="brand-kunta">
                                kunta
                            </span>

                        </div>


                        <p>
                            Daftar akun untuk mulai menggunakan Akunta.
                        </p>

                    </div>



                    {{-- =========================
                        NAMA
                    ========================== --}}

                    <div class="auth-register-field">

                        <label for="registerName">
                            Nama Lengkap
                        </label>

                        <div class="auth-register-input-wrap">

                            <span class="auth-register-input-icon">

                                <svg viewBox="0 0 24 24">
                                    <circle
                                        cx="12"
                                        cy="8"
                                        r="4">
                                    </circle>

                                    <path
                                        d="M4 21c0-4 3-7 8-7s8 3 8 7">
                                    </path>
                                </svg>

                            </span>


                            <input
                                type="text"
                                id="registerName"
                                name="name"
                                value="{{ old('name') }}"
                                class="form-control @error('name') is-invalid @enderror"
                                placeholder="Masukkan nama lengkap Anda"
                                autocomplete="name"
                                required>

                        </div>


                        @error('name')

                            <div class="auth-register-error">
                                {{ $message }}
                            </div>

                        @enderror

                    </div>



                    {{-- =========================
                        EMAIL
                    ========================== --}}

                    <div class="auth-register-field">

                        <label for="registerEmail">
                            Email
                        </label>

                        <div class="auth-register-input-wrap">

                            <span class="auth-register-input-icon">

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
                                id="registerEmail"
                                name="email"
                                value="{{ old('email') }}"
                                class="form-control @error('email') is-invalid @enderror"
                                placeholder="Masukkan email Anda"
                                autocomplete="email"
                                required>

                        </div>


                        @error('email')

                            <div class="auth-register-error">
                                {{ $message }}
                            </div>

                        @enderror

                    </div>



                    {{-- =========================
                        PASSWORD
                    ========================== --}}

                    <div class="auth-register-field">

                        <label for="registerPassword">
                            Password
                        </label>

                        <div class="auth-register-input-wrap">

                            <span class="auth-register-input-icon">

                                <svg viewBox="0 0 24 24">

                                    <rect
                                        x="5"
                                        y="10"
                                        width="14"
                                        height="11"
                                        rx="2">
                                    </rect>

                                    <path d="M8 10V7a4 4 0 0 1 8 0v3"></path>

                                    <path d="M12 14v3"></path>

                                </svg>

                            </span>


                            <input
                                type="password"
                                id="registerPassword"
                                name="password"
                                class="form-control auth-register-password @error('password') is-invalid @enderror"
                                placeholder="Masukkan password"
                                autocomplete="new-password"
                                required>


                            <button
                                type="button"
                                class="auth-register-password-toggle"
                                data-password-target="registerPassword"
                                aria-label="Tampilkan password">

                                <svg
                                    class="eye-open"
                                    viewBox="0 0 24 24">

                                    <path
                                        d="M2 12s3.5-6 10-6 10 6 10 6-3.5 6-10 6S2 12 2 12z">
                                    </path>

                                    <circle
                                        cx="12"
                                        cy="12"
                                        r="2.5">
                                    </circle>

                                </svg>


                                <svg
                                    class="eye-closed"
                                    viewBox="0 0 24 24">

                                    <path d="M3 3L21 21"></path>

                                    <path
                                        d="M10.5 6.2A10 10 0 0 1 12 6c6.5 0 10 6 10 6a17 17 0 0 1-3 3.7">
                                    </path>

                                    <path
                                        d="M6.4 6.6C3.5 8.4 2 12 2 12s3.5 6 10 6a10 10 0 0 0 3.5-.6">
                                    </path>

                                </svg>

                            </button>

                        </div>


                        @error('password')

                            <div class="auth-register-error">
                                {{ $message }}
                            </div>

                        @enderror

                    </div>



                    {{-- =========================
                        CONFIRM PASSWORD
                    ========================== --}}

                    <div class="auth-register-field">

                        <label for="registerPasswordConfirmation">
                            Konfirmasi Password
                        </label>

                        <div class="auth-register-input-wrap">

                            <span class="auth-register-input-icon">

                                <svg viewBox="0 0 24 24">

                                    <rect
                                        x="5"
                                        y="10"
                                        width="14"
                                        height="11"
                                        rx="2">
                                    </rect>

                                    <path d="M8 10V7a4 4 0 0 1 8 0v3"></path>

                                    <path d="M12 14v3"></path>

                                </svg>

                            </span>


                            <input
                                type="password"
                                id="registerPasswordConfirmation"
                                name="password_confirmation"
                                class="form-control auth-register-password"
                                placeholder="Ulangi password"
                                autocomplete="new-password"
                                required>


                            <button
                                type="button"
                                class="auth-register-password-toggle"
                                data-password-target="registerPasswordConfirmation"
                                aria-label="Tampilkan password">

                                <svg
                                    class="eye-open"
                                    viewBox="0 0 24 24">

                                    <path
                                        d="M2 12s3.5-6 10-6 10 6 10 6-3.5 6-10 6S2 12 2 12z">
                                    </path>

                                    <circle
                                        cx="12"
                                        cy="12"
                                        r="2.5">
                                    </circle>

                                </svg>


                                <svg
                                    class="eye-closed"
                                    viewBox="0 0 24 24">

                                    <path d="M3 3L21 21"></path>

                                    <path
                                        d="M10.5 6.2A10 10 0 0 1 12 6c6.5 0 10 6 10 6a17 17 0 0 1-3 3.7">
                                    </path>

                                    <path
                                        d="M6.4 6.6C3.5 8.4 2 12 2 12s3.5 6 10 6a10 10 0 0 0 3.5-.6">
                                    </path>

                                </svg>

                            </button>

                        </div>

                    </div>



                    {{-- =========================
                        REGISTER BUTTON
                    ========================== --}}

                    <button
                        type="submit"
                        class="auth-register-submit">

                        <span>
                            Daftar
                        </span>

                        <svg viewBox="0 0 24 24">
                            <path d="M5 12h14"></path>
                            <path d="M14 7l5 5-5 5"></path>
                        </svg>

                    </button>



                    {{-- =========================
                        DIVIDER
                    ========================== --}}

                    <div class="auth-register-divider">

                        <span></span>

                        <p>
                            atau daftar dengan
                        </p>

                        <span></span>

                    </div>



                    {{-- =========================
                        GOOGLE
                    ========================== --}}

                    <button
                        type="button"
                        class="auth-register-google">

                        <svg
                            class="auth-register-google-icon"
                            viewBox="0 0 24 24">

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
                        LOGIN
                    ========================== --}}

                    <div class="auth-register-login">

                        <span>
                            Sudah punya akun?
                        </span>


                        <button
                            type="button"
                            class="auth-register-login-link"
                            data-bs-dismiss="modal"
                            data-bs-toggle="modal"
                            data-bs-target="#loginModal">

                            Login

                        </button>

                    </div>


                </div>

            </form>

        </div>

    </div>

</div>



{{-- PASSWORD SHOW / HIDE --}}
<script>
document.addEventListener('DOMContentLoaded', function () {

    document
        .querySelectorAll('.auth-register-password-toggle')
        .forEach(function (button) {

            button.addEventListener('click', function () {

                const targetId =
                    button.getAttribute('data-password-target');

                const input =
                    document.getElementById(targetId);

                if (!input) {
                    return;
                }

                const showPassword =
                    input.type === 'password';

                input.type =
                    showPassword
                        ? 'text'
                        : 'password';

                button.classList.toggle(
                    'show-password',
                    showPassword
                );

            });

        });

});
</script>