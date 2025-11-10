<div class="container mt-4">
    <div class="row">
        <div class="col-lg-12">
            <h3>Daftar Matakuliah</h3>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode MK</th>
                        <th>Nama Matakuliah</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach($data['matkul'] as $matkul) : ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $matkul['kode_mk']; ?></td>
                        <td><?= $matkul['nama_mk']; ?></td>
                        <td>
                            <a href="<?= BASEURL; ?>/matakuliah/detail/<?= $matkul['id']; ?>" class="btn btn-sm btn-info">Detail</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>