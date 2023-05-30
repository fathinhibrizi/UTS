<?php

require_once "inc/Koneksi.php";
require_once "app/Minuman.php";

$min = new App\Minuman();

if (isset($_POST['btn_simpan'])) {
    $min->simpan();
    header("location:index.php?hal=minuman_tampil");
}

if (isset($_POST['btn_update'])) {
    $min->update();
    header("location:index.php?hal=minuman_tampil");
}