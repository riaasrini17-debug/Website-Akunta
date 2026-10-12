<nav class="navbar navbar-expand-lg bg-white sticky-top border-bottom">

    <div class="container py-2">

        {{-- LOGO --}}
        <a
            class="navbar-brand fw-bold fs-3"
            href="{{ route('home') }}">

            <span class="brand-a">A</span><span class="brand-kunta">kunta</span>

        </a>


        {{-- MOBILE TOGGLER --}}
        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navAkunta">

            <span class="navbar-toggler-icon"></span>

        </button>


        <div
            id="navAkunta"
            class="collapse navbar-collapse">


            {{-- =========================
                NAVIGATION
            ========================== --}}
            <ul class="navbar-nav mx-auto gap-lg-2 small fw-semibold">


                {{-- MENU BIASA --}}
                @foreach([
                    'home' => 'Home',
                    'about' => 'Tentang Kami',
                    'features' => 'Produk & Fitur',
                    'pricing' => 'Harga',
                    'portfolio' => 'Portofolio',
                    'blog' => 'Blog',
                ] as $r => $label)

                    <li class="nav-item">

                        <a
                            class="nav-link {{ request()->routeIs($r) ? 'active-akunta' : '' }}"
                            href="{{ route($r) }}">

                            {{ $label }}

                        </a>

                    </li>

                @endforeach



                {{-- FAQ --}}
                <li class="nav-item">

                    <a
                        id="navFaq"
                        class="nav-link"
                        href="{{ route('faq') }}#faq">

                        FAQ

                    </a>

                </li>



                {{-- KONTAK --}}
                <li class="nav-item">

                    <a
                        id="navContact"
                        class="nav-link"
                        href="{{ route('faq') }}#contact">

                        Kontak

                    </a>

                </li>


            </ul>



            {{-- =========================
                AUTH BUTTON
            ========================== --}}
            <div class="d-flex gap-2">

                @if(session('auth'))

                    <a
                        href="{{ session('auth.role') === 'admin'
                            ? route('admin.dashboard')
                            : route('user.dashboard') }}"
                        class="btn btn-outline-akunta">

                        Dashboard

                    </a>


                    <form
                        action="{{ route('logout') }}"
                        method="POST">

                        @csrf

                        <button class="btn btn-akunta">
                            Logout
                        </button>

                    </form>

                @else

                    <button
                        type="button"
                        class="btn btn-outline-akunta"
                        data-bs-toggle="modal"
                        data-bs-target="#loginModal">

                        Login

                    </button>


                    <button
                        type="button"
                        class="btn btn-akunta"
                        data-bs-toggle="modal"
                        data-bs-target="#demoModal">

                        Coba Gratis

                    </button>

                @endif

            </div>


        </div>

    </div>

</nav>



{{-- =====================================================
    ACTIVE FAQ / CONTACT NAVBAR
===================================================== --}}

<script>
document.addEventListener('DOMContentLoaded', function () {

    const faqLink =
        document.getElementById('navFaq');

    const contactLink =
        document.getElementById('navContact');


    function updateHelpNavigation() {

        if (!faqLink || !contactLink) {
            return;
        }


        faqLink.classList.remove('active-akunta');
        contactLink.classList.remove('active-akunta');


        /*
         * Hanya berlaku saat berada
         * di halaman /faq
         */
        if (window.location.pathname !== '/faq') {
            return;
        }


        const hash =
            window.location.hash;


        /* FAQ */
        if (hash === '#faq') {

            faqLink.classList.add('active-akunta');

        }

        /* KONTAK */
        else if (
            hash === '#contact' ||
            hash === '#contactName'
        ) {

            contactLink.classList.add('active-akunta');

        }

        /*
         * Kalau buka /faq tanpa hash,
         * karena section pertama adalah Kontak,
         * maka Kontak dibuat aktif.
         */
        else {

            contactLink.classList.add('active-akunta');

        }

    }


    updateHelpNavigation();


    window.addEventListener(
        'hashchange',
        updateHelpNavigation
    );

});
</script>