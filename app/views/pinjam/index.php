<div class="container mt-4">
    <div class="row">
        <div class="col-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalPeminjaman">
                Tambah Data Peminjaman
            </button>
            <h3 class="mt-3">Data Peminjaman Buku</h3>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Kode Pinjam</th>
                        <th>NIM</th>
                        <th>Tanggal Pinjam</th>
                        <th>Jumlah</th>
                        <th>Judul Buku</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (empty($data['peminjaman'])) : ?>
                        <tr>
                            <td colspan="6" class="text-center">Belum ada data peminjaman.</td>
                        </tr>
                    <?php else : ?>
                        <?php foreach ($data['peminjaman'] as $pinjam) : ?>
                            <tr>
                                <td><?= htmlspecialchars($pinjam['kd_pinjam061']); ?></td>
                                <td><?= htmlspecialchars($pinjam['nimmhs061']); ?></td>
                                <td><?= htmlspecialchars($pinjam['tglpinjam061']); ?></td>
                                <td><?= htmlspecialchars($pinjam['jmlpinjam061']); ?></td>
                                <td><?= htmlspecialchars($pinjam['judulbuku061']); ?></td>
                                <td>
                                    <a href="<?= BASEURL; ?>/peminjambuku061/detail/<?= urlencode($pinjam['kd_pinjam061']); ?>" class="badge text-bg-primary">detail</a>
                                    <a href="<?= BASEURL; ?>/peminjambuku061/hapus/<?= urlencode($pinjam['kd_pinjam061']); ?>" class="badge text-bg-danger ms-1" onclick="return confirm('Yakin ingin menghapus data ini?');">hapus</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal Tambah -->
<div class="modal fade" id="modalPeminjaman" tabindex="-1" aria-labelledby="modalPeminjamanLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="modalPeminjamanLabel">Tambah Data Peminjaman</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/peminjambuku061/tambah" method="post">
            <div class="mb-3">
                <label for="kd_pinjam061" class="form-label">Kode Pinjam</label>
                <input type="text" class="form-control" id="kd_pinjam061" name="kd_pinjam061" maxlength="6" required>
            </div>
            <div class="mb-3">
                <label for="nimmhs061" class="form-label">NIM Mahasiswa</label>
                <input type="text" class="form-control" id="nimmhs061" name="nimmhs061" maxlength="11" required>
            </div>
            <div class="mb-3">
                <label for="tglpinjam061" class="form-label">Tanggal Pinjam</label>
                <input type="date" class="form-control" id="tglpinjam061" name="tglpinjam061" required>
            </div>
            <div class="mb-3">
                <label for="jmlpinjam061" class="form-label">Jumlah Pinjam</label>
                <input type="number" class="form-control" id="jmlpinjam061" name="jmlpinjam061" min="1" max="99" required>
            </div>
            <div class="mb-3">
                <label for="judulbuku061" class="form-label">Judul Buku</label>
                <input type="text" class="form-control" id="judulbuku061" name="judulbuku061" maxlength="30" required>
            </div>
            <div class="mb-3">
                <label for="tglkembali061" class="form-label">Tanggal Kembali</label>
                <input type="date" class="form-control" id="tglkembali061" name="tglkembali061" required>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Simpan Data</button>
        </form>
      </div>
    </div>
  </div>
</div>


