<?php

class Mafia_model
{
    private $table = 'mafia';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllMafia()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getMafiaById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataMafia($data)
    {
        $query = "INSERT INTO mafia
                    VALUES
                ('', :nama, :nrp, :email, :pengalaman)";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nrp', $data['nrp']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('pengalaman', $data['pengalaman']);

        $this->db->execute();


        return $this->db->rowCount();
    }

    public function hapusDataMafia($id)
    {
        $query = "DELETE FROM mafia WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataMafia($data)
    {
        $query = "UPDATE mafia SET
                    nama = :nama,
                    nrp = :nrp,
                    email = :email,
                    pengalaman = :pengalaman
                WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nrp', $data['nrp']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('pengalaman', $data['pengalaman']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();


        return $this->db->rowCount();
    }

    public function cariDataMafia()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM mafia WHERE nama LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }
}

    // $this->stmt = $this->dbh->prepare('SELECT * FROM mafia');
    // $this->stmt->execute();
    // return $this->stmt->fetchAll(PDO::FETCH_ASSOC);


    // private $dbh; //database handler
    // private $stmt;

    // public function __construct()
    // {
    // data source name
    //     $dsn = 'mysql:host=localhost;dbname=phpmvc';

    //     try {
    //         $this->dbh = new PDO($dsn, 'root', '');
    //     } catch (PDOException $e) {
    //         die($e->getMessage());
    //     }
    //

    // private $maf = [
    //     [
    //         "nama" => "Frans Sebastian",
    //         "nrp" => "0852822142154",
    //         "email" => "stefanusfranssebastian@gmail.com",
    //         "pengalaman" => "Menjadi pengusaha yang sukses dalam mengembangkan suatu karya teknologi"
    //     ],
    //     [
    //         "nama" => "Yohanes Sanjaya",
    //         "nrp" => "04658588472154",
    //         "email" => "yohanes.coly@gg.id",
    //         "pengalaman" => "Menjadi pengusaha yang sangat hebat dalam percolyan"
    //     ],
    //     [
    //         "nama" => "Hadi Oyoy",
    //         "nrp" => "05658588472154",
    //         "email" => "hadi.hardcore@mesum.core",
    //         "pengalaman" => "Pernah melakukan hal mesum bersama ai wakwak"
    //     ],
    // ];
