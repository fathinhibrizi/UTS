<?php

$id = $_GET['id'];
$mak= new App\Makanan();

$row = $mak->edit($id);
?>

<h2>Edit Makanan</h2>

<form action="makanan_proses.php" method="post">
    <input type="hidden" name="id_makanan" value="<?php echo $row['id_makanan']; ?>">
    <table>
        <tr>
            <td>Nama Makanan</td>
            <td><input type="text" name="nama_makanan" value="<?php echo $row['nama_makanan']; ?>"></td>
        </tr>
        <tr>
            <td>Harga Makanan</td>
            <td><input type="text" name="hrg_makanan" value="<?php echo $row['hrg_makanan']; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>