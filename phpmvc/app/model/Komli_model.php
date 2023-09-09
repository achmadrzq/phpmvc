<?php
class Komli_model
{
    private $table = 'komli';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllKomli()
    {
        $this->db->query("SELECT * FROM " . $this->table);
        return $this->db->resultSet(); 
    }

    public function getKomliById($id)
    {
        $this->db->query("SELECT * FROM " . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
    public function tambahDataKomli()
    {
        $this->db->query("INSERT INTO komli VALUES ('',:kompentensi)");
        $this->db->bind('kompentensi', $_POST['kompentensi']);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function hapusDataKomli($id)
    {
        $query = "DELETE FROM komli WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }
    public function ubahDataKomli($data)
    {
        $query = "UPDATE komli SET
        kompentensi = :kompentensi
        WHERE id = :id";

    $this->db->query($query);
    $this->db->bind('kompentensi', $data['kompentensi']);
    $this->db->bind('id', $data['id']);

    $this->db->execute();

    return $this->db->rowCount();
    }

}