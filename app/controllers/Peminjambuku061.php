<?php

class Peminjambuku061 extends Controller
{
    public function index()
    {
        $data['judul'] = 'Peminjaman Buku';
        $data['peminjaman'] = $this->model('Peminjamanbuku061_model')->getAllPeminjaman();
        $this->view('templates/header', $data);
        $this->view('pinjam/index', $data);
        $this->view('templates/footer');
    }

    public function detail($kode)
    {
        $data['judul'] = 'Detail Peminjaman';
        $data['pinjam'] = $this->model('Peminjamanbuku061_model')->getPeminjamanByKode($kode);
        if (!$data['pinjam']) {
            Flasher::setFlash('tidak ditemukan', 'detail', 'danger');
            header('Location: ' . BASEURL . '/peminjambuku061');
            exit;
        }
        $this->view('templates/header', $data);
        $this->view('pinjam/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('Peminjamanbuku061_model')->tambahDataPeminjaman($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/peminjambuku061');
            exit;
        }

        Flasher::setFlash('gagal', 'ditambahkan', 'danger');
        header('Location: ' . BASEURL . '/peminjambuku061');
        exit;
    }

    public function hapus($kode)
    {
        if ($this->model('Peminjamanbuku061_model')->hapusDataPeminjaman($kode) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
        }

        header('Location: ' . BASEURL . '/peminjambuku061');
        exit;
    }
}


