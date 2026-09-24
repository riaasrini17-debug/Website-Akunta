@extends('layouts.app')
@section('title','Harga - Akunta')
@section('content')
<section class="hero-akunta"><div class="container py-5"><p class="eyebrow">Harga Akunta</p><h1>Pilih Paket yang Sesuai dengan Kebutuhan <span>Bisnis Anda</span></h1><p class="lead col-lg-6">Solusi keuangan bisnis yang fleksibel dengan harga terjangkau.</p></div></section>
<section class="container py-5"><div class="text-center mb-5"><h2>Harga yang Transparan, Tanpa Kejutan</h2></div><div class="row g-4">
@foreach([['UMKM','Rp 99.000','Pencatatan transaksi dasar|Laporan keuangan standar|Kelola hingga 1 pengguna|Akses web dan mobile'],['Bisnis','Rp 299.000','Semua fitur UMKM|Laporan keuangan lengkap|Kelola hingga 5 pengguna|Integrasi rekening bank'],['Pro Bisnis','Hubungi Kami','Semua fitur Bisnis|Pengguna tanpa batas|Multi-cabang|Integrasi sistem tambahan']] as $p)
<div class="col-lg-4"><div class="price-card h-100"><h3>{{ $p[0] }}</h3><div class="price">{{ $p[1] }}</div><ul class="check-list">@foreach(explode('|',$p[2]) as $x)<li>{{ $x }}</li>@endforeach</ul><button class="btn btn-akunta w-100 mt-auto" data-bs-toggle="modal" data-bs-target="#demoModal">{{ $p[0]=='Pro Bisnis'?'Hubungi Kami':'Coba Gratis' }}</button></div></div>
@endforeach</div></section>
@include('public.partials.cta')
@endsection
