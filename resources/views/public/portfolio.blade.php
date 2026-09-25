@extends('layouts.app')

@section('title','Portofolio - Akunta')

@section('content')


<!-- ================= HERO PORTFOLIO ================= -->

<section class="portfolio-hero">

<div class="container">

<div class="row align-items-center">


<div class="col-lg-6">


<span class="eyebrow">
Portofolio
</span>


<h1>
Bisnis yang Tumbuh
<br>
<span>Bersama Akunta</span>
</h1>


<p>
Ribuan bisnis di Indonesia telah mempercayai Akunta
untuk menyederhanakan pengelolaan keuangan mereka
dan melangkah lebih jauh.
</p>



<div class="hero-btn">

<a href="#" class="btn-primary-akunta">
Coba Gratis →
</a>


<a href="#client" class="btn-outline-akunta">
Lihat Semua Client
</a>

</div>



<div class="hero-check">

<span>
✓ Nyata dan Terukur
</span>

<span>
✓ Dari Berbagai Industri
</span>

<span>
✓ Bersama Menuju Lebih Besar
</span>


</div>



</div>




<div class="col-lg-6">

<img 
src="{{ asset('assets/portofolio-hero.png') }}"
class="img-fluid"
alt="Portfolio Akunta">

</div>


</div>

</div>

</section>





<!-- ================= CLIENT ================= -->


<section class="client-section" id="client">

<div class="container">


<div class="section-title text-center">

<h2>
Client yang Telah Menggunakan Akunta
</h2>


<p>
Dari UMKM hingga perusahaan berkembang,
berbagai bisnis di Indonesia telah memilih Akunta.
</p>


</div>




<div class="client-grid">


@foreach([

['logo'=>'kopi-senja.png','name'=>'Kopi Senja'],
['logo'=>'luxe.png','name'=>'Luxe Fashion'],
['logo'=>'karya-indah.png','name'=>'Karya Indah'],
['logo'=>'solusi-kreatif.png','name'=>'Solusi Kreatif'],
['logo'=>'maju-bersama.png','name'=>'Maju Bersama'],

['logo'=>'chuyu.png','name'=>'Chuyu'],
['logo'=>'bali.png','name'=>'Bali District'],
['logo'=>'oris.png','name'=>'Oris Cake'],
['logo'=>'getup.jpg','name'=>'Get Up'],
['logo'=>'roti.png','name'=>'Roti Manis'],



] as $client)


<div class="client-card">


<img 
src="{{asset('assets/'.$client['logo'])}}"
alt="{{$client['name']}}">


<h3>
{{$client['name']}}
</h3>


</div>


@endforeach


</div>


</div>

</section>







<!-- ================= EXPERIENCE ================= -->

<section class="experience-section">


<div class="container">


<div class="section-title text-center">

<h2>
Pengalaman Akunta
</h2>

<p>
Kepercayaan dari ribuan bisnis adalah bukti komitmen kami.
</p>

</div>



<div class="experience-grid">


@foreach([

['icon'=>'👥','title'=>'10.000+','desc'=>'bisnis mempercayai Akunta'],

['icon'=>'📅','title'=>'4+ tahun','desc'=>'pengalaman di Indonesia'],

['icon'=>'🏢','title'=>'Beragam industri','desc'=>'dari UMKM hingga perusahaan'],

['icon'=>'🎧','title'=>'Pendampingan profesional','desc'=>'tim yang selalu siap membantu'],

['icon'=>'⚡','title'=>'Solusi mudah','desc'=>'diimplementasikan untuk semua bisnis']


] as $exp)


<div class="experience-card">

<div class="exp-icon">
{{$exp['icon']}}
</div>


<h3>
{{$exp['title']}}
</h3>


<p>
{{$exp['desc']}}
</p>


</div>


@endforeach


</div>


</div>


</section>







<!-- ================= TESTIMONIAL ================= -->


<div class="testimonial-track">


<div class="testimonial-group">


@foreach([

[
'name'=>'Andi Pratama',
'role'=>'CEO, Kopi Senja',
'text'=>'Akunta sangat membantu kami dalam mengelola keuangan.'
],


[
'name'=>'Sari Melati',
'role'=>'Founder, Roti Manis',
'text'=>'Tim support sangat responsif dan membantu bisnis kami.'
],


[
'name'=>'Budi Santoso',
'role'=>'Direktur, Maju Bersama',
'text'=>'Fitur Akunta lengkap dan mudah digunakan.'
],


[
'name'=>'Dewi Ayu',
'role'=>'Owner Bali District',
'text'=>'Pengelolaan bisnis menjadi lebih mudah dengan Akunta.'
]


] as $testi)


<div class="testimonial-card">

<div class="quote">
“
</div>


<p>
{{$testi['text']}}
</p>


<h4>
{{$testi['name']}}
</h4>


<span>
{{$testi['role']}}
</span>


<div class="stars">
★★★★★
</div>


</div>


@endforeach


</div>



<!-- DUPLIKAT UNTUK LOOP -->

<div class="testimonial-group">


@foreach([

[
'name'=>'Andi Pratama',
'role'=>'CEO, Kopi Senja',
'text'=>'Akunta sangat membantu kami dalam mengelola keuangan.'
],


[
'name'=>'Sari Melati',
'role'=>'Founder, Roti Manis',
'text'=>'Tim support sangat responsif dan membantu bisnis kami.'
],


[
'name'=>'Budi Santoso',
'role'=>'Direktur, Maju Bersama',
'text'=>'Fitur Akunta lengkap dan mudah digunakan.'
],


[
'name'=>'Dewi Ayu',
'role'=>'Owner Bali District',
'text'=>'Pengelolaan bisnis menjadi lebih mudah dengan Akunta.'
]

] as $testi)


<div class="testimonial-card">

<div class="quote">
“
</div>


<p>
{{$testi['text']}}
</p>


<h4>
{{$testi['name']}}
</h4>


<span>
{{$testi['role']}}
</span>


<div class="stars">
★★★★★
</div>


</div>


@endforeach


</div>


</div>


</section>





@include('public.partials.cta')


@endsection