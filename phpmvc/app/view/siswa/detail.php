<div class="card text-center">
  <div class="card-header">
    Detail Siswa
  </div>
  <div class="card-body">
    <h5 class="card-title"><?= $data['siswa']['nama']; ?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?= $data['siswa']['jenis_kelamin']; ?></h6>
    <p class="card-text"><?= $data['siswa']['alamat']; ?></p>
  </div>
  <div class="card-footer text-body-secondary">
  <a href=" <?= BASE_URL; ?>/siswa" class="card-link" style="text-decoration:none;">Kembali</a>
  </div>
</div>