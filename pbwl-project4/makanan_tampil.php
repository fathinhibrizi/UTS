<?php

$mak = new App\Makanan;
$rows = $mak->tampil();

?>

<h2>Makanan</h2>

<a href="index.php?hal=makanan_input" class="btn">Tambah Makanan</a>

<table>
    <tr>
        <th>ID MAKANAN</th>
        <th>NAMA MAKANAN</th>
        <th>HARGA MAKANAN</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    <?php foreach ($rows as $row) { ?>
    <tr>
        <td><?php echo $row['id_makanan']; ?></td>
        <td><?php echo $row['nama_makanan']; ?></td>
        <td><?php echo $row['hrg_makanan']; ?></td>
        <td><a href="index.php?hal=makanan_edit&id=<?php echo $row['id_makanan']; ?>" class="btn">Edit</a></td>
        <td><a href="index.php?hal=makanan_delete&id=<?php echo $row['id_makanan']; ?>" class="btn">Delete</a></td>
    </tr>
    <?php } ?>
</table>
