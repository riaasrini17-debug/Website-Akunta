<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title','Akunta')</title>
  <meta name="description" content="@yield('meta','Akunta - solusi pembukuan bisnis tanpa ribet')">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/akunta.css') }}">
</head>
<body>
@include('partials.navbar')
@if(session('success'))<div class="container pt-3"><div class="alert alert-success">{{ session('success') }}</div></div>@endif
@yield('content')
@include('partials.footer')
@include('partials.demo-modal')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('js/akunta.js') }}"></script>
@include('partials.whatsapp')
</body></html>
