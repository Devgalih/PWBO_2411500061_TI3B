<?php

class Peminjamanbuku061_model
{
    private $table = 'peminjaman061';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllPeminjaman()
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' ORDER BY tglpinjam061 DESC');
        return $this->db->resultSet();
    }

    public function getPeminjamanByKode($kode)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE kd_pinjam061 = :kode');
        $this->db->bind('kode', $kode);
        return $this->db->single();
    }

    public function tambahDataPeminjaman($data)
    {
        $query = "INSERT INTO {$this->table}
                    (kd_pinjam061, nimmhs061, tglpinjam061, jmlpinjam061, judulbuku061, tglkembali061)
                  VALUES
                    (:kd_pinjam061, :nimmhs061, :tglpinjam061, :jmlpinjam061, :judulbuku061, :tglkembali061)";

        $this->db->query($query);
        $this->db->bind('kd_pinjam061', $data['kd_pinjam061']);
        $this->db->bind('nimmhs061', $data['nimmhs061']);
        $this->db->bind('tglpinjam061', $data['tglpinjam061']);
        $this->db->bind('jmlpinjam061', (int) $data['jmlpinjam061']);
        $this->db->bind('judulbuku061', $data['judulbuku061']);
        $this->db->bind('tglkembali061', $data['tglkembali061']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataPeminjaman($kode)
    {
        $this->db->query('DELETE FROM ' . $this->table . ' WHERE kd_pinjam061 = :kode');
        $this->db->bind('kode', $kode);
        $this->db->execute();

        return $this->db->rowCount();
    }
}


