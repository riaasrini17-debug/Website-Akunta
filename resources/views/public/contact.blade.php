@extends('layouts.app')

@section('title','Kontak - Akunta')

@section('content')


<section class="hero-akunta">
    <div class="container py-2 text-center">

        <p class="eyebrow">
            Hubungi Kami
        </p>

        <h1>
            Kami Siap <span>Membantu Anda</span>
        </h1>

        <p class="lead mx-auto">
            Punya pertanyaan, butuh konsultasi, atau ingin tahu lebih lanjut tentang Akunta?
            Tim kami siap membantu.
        </p>

    </div>
</section>



<section class="container py-3">


<div class="row g-3">


    <!-- FORM -->

    <div class="col-lg-7">


        <div class="form-card">


            <h3>
                Kirim Pesan untuk Kami
            </h3>


            <form method="POST" action="{{ route('contact.submit') }}">

            @csrf


                <div class="mb-2">
 
                    <label>
                        Nama Lengkap
                    </label>

                    <input 
                        name="name" 
                        class="form-control" 
                        required>

                </div>



                <div class="mb-2">

                    <label>
                        Email
                    </label>

                    <input 
                        type="email"
                        name="email" 
                        class="form-control" 
                        required>

                </div>



                <div class="mb-2">

                    <label>
                        Nomor WhatsApp / Telepon
                    </label>

                    <input 
                        name="phone" 
                        class="form-control" 
                        required>

                </div>



                <div class="mb-2">

                    <label>
                        Pesan
                    </label>

                    <textarea 
                        name="message" 
                        rows="2" 
                        class="form-control"
                        required></textarea>

                </div>



                <button class="btn btn-akunta w-100">
                    Kirim Pesan →
                </button>


            </form>


        </div>


    </div>





    <!-- INFO -->

    <div class="col-lg-5">


        <div class="form-card">


            <h3>
                Informasi Kontak
            </h3>


            <p>
                <b>WhatsApp</b><br>
                +62 812-3456-7890
            </p>


            <p>
                <b>Email</b><br>
                halo@akunta.id
            </p>


            <p>
                <b>Alamat</b><br>
                Jakarta, Indonesia
            </p>


            <p>
                <b>Jam Operasional</b><br>
                Senin - Jumat, 09.00 - 18.00 WIB
            </p>


        </div>


    </div>


</div>


</section>


@endsection