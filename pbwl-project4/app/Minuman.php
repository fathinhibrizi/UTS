<?php

namespace App;
use Inc\Koneksi as Koneksi;

class Minuman extends Koneksi {

    public function tampil()
    {
        $sql = "SELECT * FROM tb_minuman";
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
        $nama_minuman = $_POST['nama_minuman'];
        $hrg_minuman = $_POST['hrg_minuman'];

        $sql = "INSERT INTO tb_minuman (nama_minuman, hrg_minuman) VALUES (:nama_minuman, :hrg_minuman)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":nama_minuman", $nama_minuman);
        $stmt->bindParam(":hrg_minuman", $hrg_minuman);
        $stmt->execute();

    }

    public function edit($id)
    {

        $sql = "SELECT * FROM tb_minuman WHERE id_minuman=:id_minuman";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_minuman", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $nama_minuman = $_POST['nama_minuman'];
        $hrg_minuman = $_POST['hrg_minuman'];
        $id_minuman = $_POST['id_minuman'];

        $sql = "UPDATE tb_minuman SET nama_minuman=:nama_minuman, hrg_minuman=:hrg_minuman WHERE id_minuman=:id_minuman";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":nama_minuman", $nama_minuman);
        $stmt->bindParam(":hrg_minuman", $hrg_minuman);
        $stmt->bindParam(":id_minuman", $id_minuman);
        $stmt->execute();

    }

    public function delete($id)
    {

        $sql = "DELETE FROM tb_minuman WHERE id_minuman=:id_minuman";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_minuman", $id);
        $stmt->execute();

    }

}