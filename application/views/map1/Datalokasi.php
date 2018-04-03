<?php

Class Datalokasi {

    private $db;

    public function __construct() {
        $this->db = Database::connect();
    }

    public function ambilLokasi() {
        try {
            $sst = $this->db->prepare("SELECT * FROM lokasi JOIN kategori using(kode_kategori) "
                    . "order by kode_kategori, nama_lokasi asc");
            $sst->execute();
            return $sst->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

}
