<div class="card text-center">
  <div class="card-header">
    Detail Guru
  </div>
  <div class="card-body">
    <h5 class="card-title"><?= $data['guru']['nama']; ?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?= $data['guru']['jenis_kelamin']; ?></h6>
    <p class="card-text"><?= $data['guru']['pelajaran']; ?></p>
  </div>
  <div class="card-footer text-body-secondary">
  <a href=" <?= BASE_URL; ?>/guru" class="card-link" style="text-decoration:none;">Kembali</a>
  </div>
</div>