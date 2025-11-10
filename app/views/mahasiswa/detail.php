<div class="container mt-5">
    <div class="card" style="width: 22rem;">
        <div class="card-header bg-primary text-white">
            <h5 class="card-title mb-0">Detail Mahasiswa</h5>
        </div>
        <div class="card-body">
            <table class="table table-borderless">
                <tr>
                    <th>Nama </th>
                    <td>:</td>
                    <td><?= $data['mhs']['nama']; ?></td>
                </tr>
                <tr>
                    <th>NIM</th>
                    <td>:</td>
                    <td><?= $data['mhs']['nim']; ?></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>:</td>
                    <td><?= $data['mhs']['email']; ?></td>
                </tr>
                <tr>
                    <th>Jurusan</th>
                    <td>:</td>
                    <td><?= $data['mhs']['jurusan']; ?></td>
                </tr>
            </table>
            <a href="<?= BASEURL; ?>/mahasiswa" class="btn btn-primary">Kembali</a>
        </div>
    </div>
</div>