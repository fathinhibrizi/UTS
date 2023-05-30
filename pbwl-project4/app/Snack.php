<?php

namespace App;
use Inc\Koneksi as Koneksi;

class Snack extends Koneksi {

    public function tampil()
    {
        $sql = "SELECT * FROM tb_snack";
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
        $nama_snack = $_POST['nama_snack'];
        $hrg_snack = $_POST['hrg_snack'];

        $sql = "INSERT INTO tb_snack (nama_snack, hrg_snack) VALUES (:nama_snack, :hrg_snack)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":nama_snack", $nama_snack);
        $stmt->bindParam(":hrg_snack", $hrg_snack);
        $stmt->execute();

    }

    public function edit($id)
    {

        $sql = "SELECT * FROM tb_snack WHERE id_snack=:id_snack";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_snack", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $nama_snack = $_POST['nama_snack'];
        $hrg_snack = $_POST['hrg_snack'];
        $id_snack = $_POST['id_snack'];

        $sql = "UPDATE tb_snack SET nama_snack=:nama_snack, hrg_snack=:hrg_snack WHERE id_snack=:id_snack";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":nama_snack", $nama_snack);
        $stmt->bindParam(":hrg_snack", $hrg_snack);
        $stmt->bindParam(":id_snack", $id_snack);
        $stmt->execute();

    }

    public function delete($id)
    {

        $sql = "DELETE FROM tb_snack WHERE id_snack=:id_snack";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_snack", $id);
        $stmt->execute();

    }

}