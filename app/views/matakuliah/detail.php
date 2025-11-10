<div class="container mt-5">
    <div class="card" style="width: 22rem;">
        <div class="card-header bg-primary text-white">
            <h5 class="card-title mb-0">Detail Matakuliah</h5>
        </div>
        <div class="card-body">
            <table class="table table-borderless">
                <tr>
                    <th>Kode MK</th>
                    <td>:</td>
                    <td><?= $data['matkul']['kode_mk']; ?></td>
                </tr>
                <tr>
                    <th>Nama Matakuliah</th>
                    <td>:</td>
                    <td><?= $data['matkul']['nama_mk']; ?></td>
                </tr>
                <tr>
                    <th>Jenis MK</th>
                    <td>:</td>
                    <td><?= $data['matkul']['jns_mk']; ?></td>
                </tr>
                <tr>
                    <th>SKS</th>
                    <td>:</td>
                    <td><?= $data['matkul']['sks']; ?></td>
                </tr>
            </table>
            <a href="<?= BASEURL; ?>/matakuliah" class="btn btn-primary">Kembali</a>
        </div>
    </div>
</div>