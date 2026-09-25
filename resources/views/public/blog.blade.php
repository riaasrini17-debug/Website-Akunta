@extends('layouts.app')

@section('title','Blog - Akunta')


@section('content')



<!-- HERO BLOG -->

<section class="blog-hero">

    <div class="container">

        <div class="row align-items-center">


            <div class="col-lg-6">


                <p class="eyebrow">
                    Blog & Insight
                </p>


                <h1>
                    Insight dan Informasi
                    untuk <span>Bisnis Anda</span>
                </h1>


                <p class="lead">

                    Temukan berbagai artikel, tips, dan panduan seputar
                    keuangan, akuntansi, pajak, dan pengembangan bisnis
                    untuk membantu Anda melangkah lebih jauh bersama Akunta.

                </p>


            </div>



            <div class="col-lg-6">


                <img

                src="{{ asset('assets/blog-hero.png') }}"

                class="img-fluid blog-hero-image"

                alt="Blog Akunta">


            </div>


        </div>

    </div>


</section>







<!-- SEARCH -->


<section class="container">


<div class="blog-search">


<input

type="text"

placeholder="Cari artikel, topik, atau kata kunci...">


<button>

Cari

</button>


</div>






<div class="blog-category">


<button class="active">
Semua
</button>


<button>
Akuntansi
</button>


<button>
Keuangan
</button>


<button>
Pajak
</button>


<button>
Tips Bisnis
</button>


<button>
Produk
</button>


<button>
Panduan
</button>



</div>



</section>








<!-- ARTICLE LIST -->


<section class="container blog-content">


<div class="row g-4">



@foreach([


[
'title'=>'5 Tips Mengelola Keuangan Bisnis di Era Digital',
'category'=>'Akuntansi',
'image'=>'artikel 1.png'
],


[
'title'=>'Cara Meningkatkan Cash Flow untuk Pertumbuhan Bisnis',
'category'=>'Keuangan',
'image'=>'artikel 2.png'
],


[
'title'=>'Panduan Lengkap Lapor Pajak untuk UMKM di 2024',
'category'=>'Pajak',
'image'=>'artikel 3.png'
],


[
'title'=>'7 Strategi Mengembangkan Bisnis di Tengah Persaingan',
'category'=>'Tips Bisnis',
'image'=>'artikel 4.png'
],


[
'title'=>'Mengenal Fitur Akunta yang Memudahkan Bisnis Anda',
'category'=>'Produk',
'image'=>'artikel 5.png'
],


[
'title'=>'Cara Membuat Rencana Bisnis yang Efektif',
'category'=>'Panduan',
'image'=>'artikel 6.png'
]


] as $blog)



<div class="col-lg-4 col-md-6">



<div class="article-card">



<img

src="{{ asset('assets/blog/'.$blog['image']) }}"

alt="{{ $blog['title'] }}">





<span class="badge-soft">

{{ $blog['category'] }}

</span>





<h4>

{{ $blog['title'] }}

</h4>





<p>

Pelajari insight praktis untuk membantu bisnis berkembang
lebih terstruktur.

</p>






<div class="article-meta">


<span>

📅 12 Apr 2024

</span>



<span>

👁 1.2K

</span>



</div>




<a href="#" class="stretched-link"></a>



</div>




</div>



@endforeach



</div>






<!-- PAGINATION -->

<div class="blog-pagination">

    <a href="#" class="page-btn">
        ←
    </a>

    <a href="#" class="page-btn active">
        1
    </a>

    <a href="#" class="page-btn">
        2
    </a>

    <a href="#" class="page-btn">
        3
    </a>

    <a href="#" class="page-btn">
        4
    </a>

    <a href="#" class="page-btn">
        →
    </a>

</div>









<!-- ABOUT BLOG CTA -->


<section class="container blog-about">



<div class="row align-items-center">



<div class="col-lg-6">


<p class="eyebrow">

Tertarik Akunta

</p>




<h2>

Bersama, Membangun Masa Depan
Bisnis yang Lebih Baik

</h2>





<p>

Akunta adalah platform akuntansi berbasis cloud
yang dirancang membantu bisnis Indonesia mengelola
keuangan lebih mudah, efisien, dan akurat.

</p>





<a href="#" class="btn btn-akunta">

Lihat Tentang Kami →

</a>



</div>







<div class="col-lg-6">



<img

src="{{ asset('assets/about-team.png') }}"

class="img-fluid"

alt="Akunta Team">



</div>




</div>



</section>







@include('public.partials.cta')



@endsection