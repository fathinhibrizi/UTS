<?php

$sna = new App\Snack;
$rows = $sna->tampil();

?>

<h2>Snack</h2>

<a href="index.php?hal=snack_input" class="btn">Tambah Snack</a>

<table>
    <tr>
        <th>ID SNACK</th>
        <th>NAMA SNACK</th>
        <th>HARGA SNACK</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    <?php foreach ($rows as $row) { ?>
    <tr>
        <td><?php echo $row['id_snack']; ?></td>
        <td><?php echo $row['nama_snack']; ?></td>
        <td><?php echo $row['hrg_snack']; ?></td>
        <td><a href="index.php?hal=snack_edit&id=<?php echo $row['id_snack']; ?>" class="btn">Edit</a></td>
        <td><a href="index.php?hal=snack_delete&id=<?php echo $row['id_snack']; ?>" class="btn">Delete</a></td>
    </tr>
    <?php } ?>
</table>
