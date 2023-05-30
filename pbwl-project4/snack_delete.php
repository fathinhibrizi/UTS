<?php

$id = $_GET['id'];

$snc = new App\Snack();
$rows = $snc->delete($id);

?>

<div class="info">
      Data berhasil dihapus!
      <a href="index.php?=snack_tampil">Kembali</a>
</div>