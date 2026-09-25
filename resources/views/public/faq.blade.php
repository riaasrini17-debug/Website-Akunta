@extends('layouts.app')


@section('title','FAQ - Akunta')



@section('content')



<section class="faq-hero">


<div class="container">


<p class="eyebrow">
FAQ
</p>



<h1>
Pertanyaan yang
<span>
Sering Diajukan
</span>
</h1>



<p class="lead">

Temukan jawaban untuk pertanyaan umum seputar Akunta.
Jika Anda tidak menemukan jawaban yang Anda cari,
tim kami siap membantu.

</p>




<div class="faq-search">


<input 
type="text"
placeholder="Cari pertanyaan di sini...">


<button>
Cari
</button>


</div>



</div>


</section>






<section class="container">


<div class="faq-category">


<button class="active">
Semua
</button>


<button>
Akun & Langganan
</button>


<button>
Fitur & Penggunaan
</button>


<button>
Pembayaran
</button>


<button>
Keamanan
</button>


<button>
Lainnya
</button>


</div>




<div class="faq-wrapper">


<div class="accordion" id="faqAcc">



@foreach([

'Apa itu Akunta?',

'Bagaimana cara membuat akun di Akunta?',

'Apakah Akunta bisa digunakan secara gratis?',

'Fitur apa saja yang tersedia di Akunta?',

'Bagaimana cara membuat invoice di Akunta?',

'Apakah Akunta bisa digunakan oleh lebih dari satu pengguna?',

'Bagaimana cara melakukan pembayaran langganan?',

'Metode pembayaran apa saja yang diterima?',



] as $i=>$q)



<div class="accordion-item">


<h2 class="accordion-header">


<button

class="accordion-button collapsed"

data-bs-toggle="collapse"

data-bs-target="#faq{{$i}}">


<span class="faq-number">
{{ $i+1 }}
</span>


{{ $q }}


</button>


</h2>




<div

id="faq{{$i}}"

class="accordion-collapse collapse"

data-bs-parent="#faqAcc">


<div class="accordion-body">


Jawaban terkait {{ $q }}

</div>


</div>


</div>



@endforeach




</div>


</div>


</section>





@include('public.partials.cta')



@endsection