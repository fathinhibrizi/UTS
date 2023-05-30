<?php

$id = $_GET['id'];

$min = new App\Minuman();
$rows = $min->delete($id);

?>

<div class="info">
      Data berhasil dihapus!
      <a href="index.php?=minuman_tampil">Kembali</a>
</div>