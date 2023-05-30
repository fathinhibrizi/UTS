<?php

namespace App;
use Inc\Koneksi as Koneksi;

class Makanan extends Koneksi {

    public function tampil()
    {
        $sql = "SELECT * FROM tb_makanan";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $data = [];

        while ($rows = $stmt->fetch()) {
            $data[] = $rows;
        }

        return $data;
    }

    public function simpan()
    {
        $nama_makanan = $_POST['nama_makanan'];
        $hrg_makanan = $_POST['hrg_makanan'];

        $sql = "INSERT INTO tb_makanan (nama_makanan, hrg_makanan) VALUES (:nama_makanan, :hrg_makanan)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":nama_makanan", $nama_makanan);
        $stmt->bindParam(":hrg_makanan", $hrg_makanan);
        $stmt->execute();

    }

    public function edit($id)
    {

        $sql = "SELECT * FROM tb_makanan WHERE id_makanan=:id_makanan";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_makanan", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $nama_makanan = $_POST['nama_makanan'];
        $hrg_makanan = $_POST['hrg_makanan'];
        $id_makanan = $_POST['id_makanan'];

        $sql = "UPDATE tb_makanan SET nama_makanan=:nama_makanan, hrg_makanan=:hrg_makanan WHERE id_makanan=:id_makanan";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":nama_makanan", $nama_makanan);
        $stmt->bindParam(":hrg_makanan", $hrg_makanan);
        $stmt->bindParam(":id_makanan", $id_makanan);
        $stmt->execute();

    }

    public function delete($id)
    {

        $sql = "DELETE FROM tb_makanan WHERE id_makanan=:id_makanan";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_makanan", $id);
        $stmt->execute();

    }

}