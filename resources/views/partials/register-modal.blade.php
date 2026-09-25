<div class="modal fade" id="registerModal" tabindex="-1">

    <div class="modal-dialog modal-dialog-centered">


        <div class="modal-content auth-modal">


            <div class="modal-header border-0">



                <button 
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal">
                </button>


            </div>



            <form method="POST" action="{{ route('register.submit') }}">

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

                        Daftar akun untuk mulai menggunakan Akunta.

                    </p>




                    <div class="mb-3">

                        <label>
                            Nama Lengkap
                        </label>

                        <input 
                            type="text"
                            name="name"
                            class="form-control"
                            placeholder="Nama lengkap"
                            required>

                    </div>




                    <div class="mb-3">

                        <label>
                            Email
                        </label>

                        <input 
                            type="email"
                            name="email"
                            class="form-control"
                            placeholder="Email"
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
                            placeholder="Password"
                            required>

                    </div>




                    <div class="mb-3">

                        <label>
                            Konfirmasi Password
                        </label>

                        <input 
                            type="password"
                            name="password_confirmation"
                            class="form-control"
                            placeholder="Ulangi password"
                            required>

                    </div>




                    <button class="btn btn-akunta w-100">

                        Daftar

                    </button>




                    <p class="text-center mt-3 mb-0">


                        Sudah punya akun?


                        <button 
                            type="button"
                            class="auth-link"
                            data-bs-dismiss="modal"
                            data-bs-toggle="modal"
                            data-bs-target="#loginModal">

                            Login

                        </button>


                    </p>


                </div>


            </form>


        </div>


    </div>


</div>