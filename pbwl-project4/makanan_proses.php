<?php

require_once "inc/Koneksi.php";
require_once "app/Makanan.php";

$mak = new App\Makanan();

if (isset($_POST['btn_simpan'])) {
    $mak->simpan();
    header("location:index.php?hal=makanan_tampil");
}

if (isset($_POST['btn_update'])) {
    $mak->update();
    header("location:index.php?hal=makanan_tampil");
}