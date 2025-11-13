<div class="container mt-5">
    <div class="card" style="width: 30rem;">
        <div class="card-header bg-primary text-white">
            <h5 class="card-title mb-0">Detail Peminjaman</h5>
        </div>
        <div class="card-body">
            <?php if (!empty($data['pinjam'])) : ?>
                <table class="table table-borderless">
                    <tr>
                        <th>Kode Pinjam</th>
                        <td>:</td>
                        <td><?= htmlspecialchars($data['pinjam']['kd_pinjam061']); ?></td>
                    </tr>
                    <tr>
                        <th>NIM</th>
                        <td>:</td>
                        <td><?= htmlspecialchars($data['pinjam']['nimmhs061']); ?></td>
                    </tr>
                    <tr>
                        <th>Tgl Pinjam</th>
                        <td>:</td>
                        <td><?= htmlspecialchars($data['pinjam']['tglpinjam061']); ?></td>
                    </tr>
                    <tr>
                        <th>Jumlah</th>
                        <td>:</td>
                        <td><?= htmlspecialchars($data['pinjam']['jmlpinjam061']); ?></td>
                    </tr>
                    <tr>
                        <th>Judul Buku</th>
                        <td>:</td>
                        <td><?= htmlspecialchars($data['pinjam']['judulbuku061']); ?></td>
                    </tr>
                    <tr>
                        <th>Tgl Kembali</th>
                        <td>:</td>
                        <td><?= htmlspecialchars($data['pinjam']['tglkembali061']); ?></td>
                    </tr>
                </table>
            <?php else : ?>
                <p class="text-danger mb-0">Data peminjaman tidak ditemukan.</p>
            <?php endif; ?>
        </div>
        <div class="card-footer text-end">
            <a href="<?= BASEURL; ?>/peminjambuku061" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>


