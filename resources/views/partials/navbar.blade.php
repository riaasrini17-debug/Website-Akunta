<nav class="navbar navbar-expand-lg bg-white sticky-top border-bottom">
  <div class="container py-2">
    <a class="navbar-brand fw-bold fs-3" href="{{ route('home') }}"><span class="brand-a">A</span><span class="brand-kunta">kunta</span></a>
    <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navAkunta"><span class="navbar-toggler-icon"></span></button>
    <div id="navAkunta" class="collapse navbar-collapse">
      <ul class="navbar-nav mx-auto gap-lg-2 small fw-semibold">
        @foreach([
          'home'=>'Home','about'=>'Tentang Kami','features'=>'Produk & Fitur','pricing'=>'Harga','portfolio'=>'Portofolio','blog'=>'Blog','faq'=>'FAQ','contact'=>'Kontak'
        ] as $r=>$label)
        <li class="nav-item"><a class="nav-link {{ request()->routeIs($r) ? 'active-akunta':'' }}" href="{{ route($r) }}">{{ $label }}</a></li>
        @endforeach
      </ul>
      <div class="d-flex gap-2">
        @if(session('auth'))
          <a href="{{ session('auth.role')==='admin' ? route('admin.dashboard') : route('user.dashboard') }}" class="btn btn-outline-akunta">Dashboard</a>
          <form action="{{ route('logout') }}" method="POST">@csrf<button class="btn btn-akunta">Logout</button></form>
        @else
          <a href="{{ route('login') }}" class="btn btn-outline-akunta">Login</a>
          <button class="btn btn-akunta" data-bs-toggle="modal" data-bs-target="#demoModal">Coba Gratis</button>
        @endif
      </div>
    </div>
  </div>
</nav>
