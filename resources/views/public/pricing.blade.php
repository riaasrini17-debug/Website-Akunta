@extends('layouts.app')

@section('title','Harga - Akunta')

@section('content')


<!-- HERO HARGA -->
<section class="hero-akunta">

    <div class="container py-5">

        <div class="row align-items-center">

            <div class="col-lg-6">

                <p class="eyebrow">
                    Harga Akunta
                </p>


                <h1>
                    Pilih Paket yang Sesuai
                    dengan Kebutuhan
                    <span>Bisnis Anda</span>
                </h1>


                <p class="lead">
                    Solusi keuangan bisnis yang fleksibel dengan harga
                    terjangkau. Mulai dari UMKM hingga perusahaan berkembang,
                    Akunta siap mendukung setiap langkah Anda.
                </p>


                <div class="hero-check">

                    <span>
                        ✓ Mudah digunakan
                    </span>

                    <span>
                        ✓ Aman & terpercaya
                    </span>

                    <span>
                        ✓ Dukungan tim profesional
                    </span>

                </div>


            </div>


            <div class="col-lg-6">

                <img 
                src="{{ asset('assets/fitur-statistik.png') }}"
                class="img-fluid"
                alt="Harga Akunta">

            </div>


        </div>

    </div>

</section>





<!-- PRICING -->

<section class="pricing-section container py-5">


<div class="text-center mb-4">

<h2>
Harga yang Transparan, Tanpa Kejutan
</h2>


<p>
Pilih paket terbaik untuk bisnis Anda.
Semua paket sudah termasuk fitur inti Akunta.
</p>


</div>



<!-- TOGGLE -->

<div class="pricing-toggle">

<button class="price-toggle active" data-type="monthly">
    Bulanan
</button>

<button class="price-toggle" data-type="yearly">
    Tahunan
</button>

<span>
    Hemat 20%
</span>

</div>





<div class="row g-4 mt-4">



@foreach([

[
'name'=>'UMKM',
'desc'=>'Cocok untuk memulai bisnis Anda',
'monthly'=>'Rp 99.000',
'yearly'=>'Rp 950.400',
'features'=>[
'Pencatatan transaksi dasar',
'Laporan keuangan standar',
'Kelola hingga 1 pengguna',
'Akses melalui web dan mobile',
'Layanan bantuan via chat'
]
],


[
'name'=>'Bisnis',
'desc'=>'Pilihan terbaik untuk bisnis berkembang',
'monthly'=>'Rp 299.000',
'yearly'=>'Rp 2.880.000',
'popular'=>true,
'features'=>[
'Semua fitur UMKM',
'Laporan keuangan lengkap',
'Kelola hingga 5 pengguna',
'Manajemen produk & pelanggan',
'Integrasi rekening bank'
]
],


[
'name'=>'Pro Bisnis',
'desc'=>'Untuk kebutuhan bisnis lebih kompleks',
'price'=>'Hubungi Kami',
'features'=>[
'Semua fitur Bisnis',
'Pengguna tanpa batas',
'Multi-cabang',
'Integrasi sistem tambahan',
'Custom laporan'
]
]


] as $p)



<div class="col-lg-4">


<div class="price-card 
@if(isset($p['popular'])) popular @endif">


@if(isset($p['popular']))

<div class="popular-badge">
⭐ Paling Populer
</div>

@endif



<h3>
{{ $p['name'] }}
</h3>


<p class="package-desc">
{{ $p['desc'] }}
</p>



<div class="price">


@if($p['name']=="Pro Bisnis")

Hubungi Kami


@else


<span class="monthly-price">
    {{ $p['monthly'] }}
</span>


<span class="yearly-price d-none">
    {{ $p['yearly'] }}
</span>


<span>
/
<small class="period">
bulan
</small>
</span>


@endif


</div>





<ul class="check-list">


@foreach($p['features'] as $feature)

<li>
{{ $feature }}
</li>

@endforeach


</ul>




<button 
class="btn btn-akunta w-100"
data-bs-toggle="modal"
data-bs-target="#demoModal">


@if($p['name']=="Pro Bisnis")

Hubungi Kami

@else

Coba Gratis

@endif


</button>



</div>


</div>


@endforeach



</div>



</section>





@include('public.partials.cta')

<script>

const buttons = document.querySelectorAll('.price-toggle');

const monthlyPrices = document.querySelectorAll('.monthly-price');
const yearlyPrices = document.querySelectorAll('.yearly-price');

const periods = document.querySelectorAll('.period');


buttons.forEach(button => {


button.addEventListener('click',()=>{


buttons.forEach(btn=>{
    btn.classList.remove('active');
});


button.classList.add('active');



if(button.dataset.type === "yearly"){


monthlyPrices.forEach(item=>{
    item.classList.add('d-none');
});


yearlyPrices.forEach(item=>{
    item.classList.remove('d-none');
});


periods.forEach(item=>{
    item.innerHTML="tahun";
});



}else{


monthlyPrices.forEach(item=>{
    item.classList.remove('d-none');
});


yearlyPrices.forEach(item=>{
    item.classList.add('d-none');
});


periods.forEach(item=>{
    item.innerHTML="bulan";
});


}



});


});

</script>

@endsection