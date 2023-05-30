<?php

require_once "inc/Koneksi.php";
require_once "app/Snack.php";

$snc = new App\Snack();

if (isset($_POST['btn_simpan'])) {
    $snc->simpan();
    header("location:index.php?hal=snack_tampil");
}

if (isset($_POST['btn_update'])) {
    $snc->update();
    header("location:index.php?hal=snack_tampil");
}