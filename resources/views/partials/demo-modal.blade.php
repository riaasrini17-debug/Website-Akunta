<div class="modal fade" id="demoModal" tabindex="-1">
<div class="modal-dialog modal-dialog-centered"><div class="modal-content border-0 rounded-4">
  <div 
    class="modal-header border-0"><h5 class="modal-title fw-bold">Coba Gratis Akunta</h5>
    <button class="btn-close" data-bs-dismiss="modal"></button>
  </div>
  <form method="POST" action="{{ route('demo.submit') }}">@csrf<div class="modal-body pt-0">
    <div class="mb-3"><label>Nama</label><input name="name" class="form-control" required></div>
    <div class="mb-3"><label>Email</label><input type="email" name="email" class="form-control" required></div>
    <div class="mb-3"><label>Bidang / Nama Perusahaan</label><input name="company" class="form-control" required></div>
    <div class="mb-3"><label>Jenis Paket</label>
      <select name="package" class="form-select" required> 
        <option value="" selected disabled> </option>
          <option>UMKM</option>
          <option>Bisnis</option>
          <option>Pro Bisnis</option>
      </select>
    </div>
    <div class="mb-3"><label>No. Telepon</label><input name="phone" class="form-control" required></div>
  </div>
  
  <div class="modal-footer border-0"><button class="btn btn-akunta w-100">Kirim Pengajuan</button></div></form>
</div>
</div>
</div>
