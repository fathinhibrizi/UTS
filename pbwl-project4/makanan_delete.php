<?php

$id = $_GET['id'];

$mak = new App\Makanan();
$rows = $mak->delete($id);

?>

<div class="info">
      Data berhasil dihapus!
      <a href="index.php?=makanan_tampil">Kembali</a>
</div>