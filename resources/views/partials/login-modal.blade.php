<div class="modal fade" id="loginModal" tabindex="-1">

    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content auth-modal">


            <div class="modal-header border-0">


                <button 
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal">
                </button>

            </div>



            <form method="POST" action="{{ route('login.submit') }}">

                @csrf


                <div class="modal-body">


                    <div class="auth-logo text-center mb-3">

                        <span class="brand-a">
                            A
                        </span>

                        <span class="brand-kunta">
                            kunta
                        </span>

                    </div>



                    <p class="text-center auth-desc">
                        Gunakan akun Anda untuk masuk ke Akunta.
                    </p>



                    <div class="mb-3">

                        <label>
                            Email
                        </label>

                        <input 
                            type="email"
                            name="email"
                            class="form-control"
                            placeholder="Masukkan email"
                            required>

                    </div>




                    <div class="mb-3">

                        <label>
                            Password
                        </label>

                        <input 
                            type="password"
                            name="password"
                            class="form-control"
                            placeholder="Masukkan password"
                            required>

                    </div>



                    <button class="btn btn-akunta w-100">

                        Login

                    </button>



                    <p class="text-center mt-3 mb-0">

                        Belum punya akun?

                        <button 
                            type="button"
                            class="auth-link"
                            data-bs-dismiss="modal"
                            data-bs-toggle="modal"
                            data-bs-target="#registerModal">

                            Daftar

                        </button>

                    </p>


                </div>


            </form>


        </div>

    </div>

</div>