@extends('layouts.app')

@section('title','Produk & Fitur - Akunta')

@section('content')

<section class="feature-hero">
    <div class="container text-center">
        <span class="feature-badge">
            Produk & Fitur
        </span>

        <h1>
            Fitur Utama Akunta
        </h1>

        <p>
            Semua yang Anda butuhkan untuk mengelola bisnis dalam satu platform,
            lebih mudah, lebih cepat, dan lebih terintegrasi.
        </p>


        <div class="feature-tabs">
            <button class="active">Semua</button>
            <button>Keuangan</button>
            <button>Penjualan</button>
            <button>Operasional</button>
            <button>Manajemen</button>
        </div>

    </div>
</section>



<section class="container feature-list">


@foreach([
[
'title'=>'Dashboard',
'desc'=>'Lihat kondisi bisnis Anda secara real-time dalam satu tampilan yang simpel dan informatif.',
'image'=>'fitur-statistik.png'
],

[
'title'=>'Digital Invoicing',
'desc'=>'Buat dan kirim faktur profesional dengan mudah, lebih cepat, dan bebas kesalahan.',
'image'=>'fitur-2.png'
],

[
'title'=>'Finance Report',
'desc'=>'Hasilkan laporan keuangan otomatis yang akurat.',
'image'=>'fitur-3.png'
],

[
'title'=>'Kelola Proyek',
'desc'=>'Atur proyek, tugas, dan tim dalam satu tempat.',
'image'=>'fitur-4.png'
]

] as $i=>$f)


<div class="feature-row {{ $i%2 ? 'reverse':'' }}">


<div class="feature-image">

<img src="{{ asset('assets/'.$f['image']) }}" 
alt="{{ $f['title'] }}">

</div>


<div class="feature-content">

<h2>
{{$f['title']}}
</h2>

<p>
{{$f['desc']}}
</p>


<ul>
<li>Informasi lebih terstruktur</li>
<li>Akses cepat dan mudah</li>
<li>Mendukung pekerjaan bisnis harian</li>
</ul>


<a href="#">
Pelajari Fitur →
</a>

</div>


</div>


@endforeach


</section>


@include('public.partials.cta')


@endsection