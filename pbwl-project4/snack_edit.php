<?php

$id = $_GET['id'];
$snc = new App\Snack();

$row = $snc->edit($id);
?>

<h2>Edit Snack</h2>

<form action="snack_proses.php" method="post">
    <input type="hidden" name="id_snack" value="<?php echo $row['id_snack']; ?>">
    <table>
        <tr>
            <td>Nama Snack</td>
            <td><input type="text" name="nama_snack" value="<?php echo $row['nama_snack']; ?>"></td>
        </tr>
        <tr>
            <td>Harga Snack</td>
            <td><input type="text" name="hrg_snack" value="<?php echo $row['hrg_snack']; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>