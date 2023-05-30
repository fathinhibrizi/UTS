<?php

$id = $_GET['id'];
$min= new App\Minuman();

$row = $min->edit($id);
?>

<h2>Edit Minuman</h2>

<form action="minuman_proses.php" method="post">
    <input type="hidden" name="id_minuman" value="<?php echo $row['id_minuman']; ?>">
    <table>
        <tr>
            <td>Nama Minuman</td>
            <td><input type="text" name="nama_minuman" value="<?php echo $row['nama_minuman']; ?>"></td>
        </tr>
        <tr>
            <td>Harga Minuman</td>
            <td><input type="text" name="hrg_minuman" value="<?php echo $row['hrg_minuman']; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>