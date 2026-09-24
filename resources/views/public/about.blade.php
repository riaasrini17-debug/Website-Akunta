@extends('layouts.app')

@section('title','Tentang Kami - Akunta')

@section('content')


<!-- HERO -->
<section class="hero-akunta">
    <div class="container py-5">
        <div class="row align-items-center g-5">

            <div class="col-lg-5">
                <p class="eyebrow">
                    Tentang Akunta
                </p>

                <h1>
                    Bersama, Membangun Masa Depan Bisnis 
                    <span>yang Lebih Baik</span>
                </h1>

                <p class="lead">
                    Akunta hadir untuk membantu setiap bisnis di Indonesia
                    mengelola keuangan dengan lebih mudah, cepat, dan akurat.
                    Kami percaya teknologi yang tepat dapat membuka lebih banyak
                    peluang bagi bisnis untuk tumbuh.
                </p>


                <a href="#" class="btn btn-akunta">
                    Kenali Kami Lebih Dekat →
                </a>

            </div>


            <div class="col-lg-7">


            </div>

        </div>
    </div>
</section>




<!-- STATISTIK -->
<section class="container py-5">

<div class="row g-4">

<div class="col-md-3">
<div class="metric-card text-center">
<h3>10.000+</h3>
<p>Bisnis di Indonesia mempercayai Akunta</p>
</div>
</div>


<div class="col-md-3">
<div class="metric-card text-center">
<h3>4+</h3>
<p>Tahun pengalaman di industri</p>
</div>
</div>


<div class="col-md-3">
<div class="metric-card text-center">
<h3>98%</h3>
<p>Tingkat kepuasan pelanggan</p>
</div>
</div>


<div class="col-md-3">
<div class="metric-card text-center">
<h3>50+</h3>
<p>Tim profesional dan berdedikasi</p>
</div>
</div>


</div>

</section>





<!-- SIAPA KAMI -->

<section class="container py-5">

<div class="row align-items-center g-5">


<div class="col-lg-6">

<p class="eyebrow">
Siapa Kami?
</p>


<h2>
Partner Keuangan untuk Pertumbuhan Bisnis Anda
</h2>


<p>
Akunta adalah platform manajemen keuangan berbasis cloud
yang dikembangkan untuk membantu bisnis mengelola keuangan
dengan lebih mudah, efisien, dan akurat.
</p>


<p>
Dengan teknologi terkini dan pendekatan yang berfokus pada pengguna,
Akunta terus menghadirkan solusi yang relevan dengan kebutuhan bisnis
di Indonesia.
</p>


</div>



<div class="col-lg-6">


</div>


</div>


</section>







<section class="soft-section py-5">

<div class="container">

<div class="row g-4">


<div class="col-md-6">

<div class="feature-card">

<h3>
Visi Kami
</h3>

<p>
Menjadi platform manajemen keuangan terdepan
di Indonesia yang membantu bisnis berkembang
lebih besar dan berkelanjutan.
</p>


</div>

</div>



<div class="col-md-6">

<div class="feature-card">

<h3>
Misi Kami
</h3>


<p>
Menghadirkan solusi pengelolaan keuangan
yang mudah, terjangkau, inovatif,
dan memberikan dampak nyata bagi bisnis.
</p>


</div>

</div>



</div>

</div>

</section>







<section class="container py-5">


<p class="eyebrow">
Nilai-Nilai Kami
</p>


<h2>
Prinsip yang Membimbing Setiap Langkah Kami
</h2>


<div class="row g-4 mt-3">


@foreach([
['Customer First','Kebutuhan pelanggan selalu menjadi prioritas utama kami.'],
['Innovation','Kami terus berinovasi memberikan solusi yang lebih baik.'],
['Integrity','Kami menjunjung tinggi kejujuran dan tanggung jawab.'],
['Impact','Kami berkomitmen memberikan dampak positif.']
] as $item)


<div class="col-md-3">

<div class="feature-card">

<div class="icon-pill">
★
</div>

<h5>
{{$item[0]}}
</h5>

<p>
{{$item[1]}}
</p>


</div>

</div>


@endforeach


</div>


</section>






<section class="timeline-section py-5">

    <div class="container">

        <div class="row align-items-center mb-5">

            <div class="col-lg-5">

                <p class="eyebrow">
                    Perjalanan Kami
                </p>

                <h2>
                    Langkah Demi Langkah 
                    untuk Dampak yang Lebih Besar
                </h2>


                <p>
                    Perjalanan Akunta adalah cerita tentang inovasi,
                    kepercayaan, dan komitmen untuk selalu memberikan
                    solusi terbaik bagi pelanggan kami.
                </p>


                <a href="#" class="btn btn-outline-akunta">
                    Lihat Perjalanan Kami →
                </a>

            </div>


            <div class="col-lg-7">


                <div class="timeline-wrapper">


                    <div class="timeline-line"></div>


                    <div class="timeline-items">


                        <div class="timeline-item">

                            <div class="timeline-dot"></div>

                            <h4>2020</h4>

                            <h5>Awal Mula</h5>

                            <p>
                                Akunta didirikan dengan visi membantu bisnis
                                Indonesia mengelola keuangan dengan lebih mudah.
                            </p>

                        </div>




                        <div class="timeline-item">

                            <div class="timeline-dot"></div>

                            <h4>2021</h4>

                            <h5>Meluncurkan Produk</h5>

                            <p>
                                Versi pertama Akunta mulai dirilis dan
                                digunakan oleh ratusan UMKM.
                            </p>

                        </div>




                        <div class="timeline-item">

                            <div class="timeline-dot"></div>

                            <h4>2023</h4>

                            <h5>Tumbuh Lebih Besar</h5>

                            <p>
                                Dipercaya oleh lebih dari 10.000 bisnis
                                di seluruh Indonesia.
                            </p>

                        </div>




                        <div class="timeline-item">

                            <div class="timeline-dot"></div>

                            <h4>2024</h4>

                            <h5>Terus Melangkah</h5>

                            <p>
                                Terus menghadirkan inovasi baru untuk
                                membantu perkembangan bisnis.
                            </p>

                        </div>



                    </div>


                </div>


            </div>


        </div>


    </div>

</section>




@include('public.partials.cta')


@endsection