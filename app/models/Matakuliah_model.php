<?php
class Matakuliah_model {
    private $table = 'matakuliah';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getMatakuliah()
    {
        $this->db->query('SELECT * FROM '. $this->table);
        return $this->db->resultSet();
    }

    public function getMatakuliahById($id)
    {
        $this->db->query('SELECT * FROM '. $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
}
?>