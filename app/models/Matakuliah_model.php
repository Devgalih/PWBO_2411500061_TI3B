<?php
class Matakuliah_model {
    private $table = 'matakuliah'; //database handler
    private $db; //statement yang digunakan untuk koneksi ke database

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getMatakuliah()
    {
        $this->db->query('SELECT * FROM '. $this->table);
        return $this->db->resultSet();

        //debug buat cek apakah ada data
        if(empty($result)) {
        error_log("Tidak ada data di tabel: " . $this->table);
    }
    
    return $result;
    }

    public function getMatakuliahById($id)
    {
        $this->db->query('SELECT * FROM '. $this->table . ' WHERE id=:id'); // TAMBAH SPASI SETELAH FROM
        $this->db->bind('id', $id);
        return $this->db->single();
    }
}
?>