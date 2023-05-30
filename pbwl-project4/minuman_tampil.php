<?php

$min = new App\Minuman;
$rows = $min->tampil();

?>

<h2>Minuman</h2>

<a href="index.php?hal=minuman_input" class="btn">Tambah Minuman</a>

<table>
    <tr>
        <th>ID MINUMAN</th>
        <th>NAMA MINUMAN</th>
        <th>HARGA MINUMAN</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    <?php foreach ($rows as $row) { ?>
    <tr>
        <td><?php echo $row['id_minuman']; ?></td>
        <td><?php echo $row['nama_minuman']; ?></td>
        <td><?php echo $row['hrg_minuman']; ?></td>
        <td><a href="index.php?hal=minuman_edit&id=<?php echo $row['id_minuman']; ?>" class="btn">Edit</a></td>
        <td><a href="index.php?hal=minuman_delete&id=<?php echo $row['id_minuman']; ?>" class="btn">Delete</a></td>
    </tr>
    <?php } ?>
</table>
