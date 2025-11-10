<div class="container mt-4">
    <div class="row">
        <div class="col-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>
    <div class="row">  
        <div class="col-lg-12">
            <!--button modal trigger -->
            <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Tambah Data Mahasiswa
            </button>
            <h3>Daftar Mahasiswa</h3>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach($data['mhs'] as $mhs) : ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $mhs['nama']; ?></td>
                        <td></td>
                        <td></td>
                        <td>
                          <a href="<?php echo BASEURL; ?>/mahasiswa/hapus/<?php echo $mhs['id']; ?>" 
                           class="badge text-bg-danger float-end ms-2" 
                           onclick="return confirm('yakin ingin menghapusnya?');">
                            hapus
                        </a>
                        
                        <a href="#" 
                           class="badge text-bg-success float-end ms-2 tampilModalUbah" 
                           data-bs-toggle="modal" 
                           data-bs-target="#exampleModal" 
                           data-id="<?php echo $mhs['id']; ?>">
                            ubah</a>
                        <a href="<?php echo BASEURL; ?>/mahasiswa/detail/<?php  echo $mhs['id']; ?>" 
                           class="badge text-bg-primary float-end">
                            detail
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!--modal-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="judulModal">Tambah Data Mahasiswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?php echo BASEURL; ?>/mahasiswa/tambah" method="post">
            <!-- Input hidden untuk ID -->
            <input type="hidden" name="id" id="id">
            
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="mb-3">
                <label for="nim" class="form-label">NIM</label>
                <input type="text" class="form-control" id="nim" name="nim" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="jurusan" class="form-label">Jurusan</label>
                <select class="form-control" id="jurusan" name="jurusan" required>
                    <option value="Teknik Informatika">Teknik Informatika</option>
                    <option value="Sistem Informasi">Sistem Informasi</option>
                    <option value="Management Informatika">Management Informatika</option>
                </select>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>