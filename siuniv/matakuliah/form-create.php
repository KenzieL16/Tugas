<?php
include '../connect.php';

$query = "SELECT id_dosen, nama_dosen FROM dosen";
$result = mysqli_query($connect, $query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tambah Data Matakuliah</h1>
    <form action="create.php" method="post">
        <table>
            <tr>
                <td>Kode</td>
                <td> : <input type="text" name="kode" id="kode"></td>
            </tr>
            <tr>
                <td>Matakuliah</td>
                <td> : <input type="text" name="nama_matkul" id="nama_matkul"></td>
            </tr>
            <tr>
                <td>SKS</td>
                <td> : <input type="number" name="sks" id="sks"></td>
            </tr>
            <tr>
                <td>Semester</td>
                <td> : <input type="number" name="semester" id="semester"></td>
            </tr>
            <tr>
                <td>Dosen Pengajar</td>
                <td> : <select name="id_dosen" id="nama_dosen">
                <option value="-">--Pilih Salah Satu--</option>
                <?php
                while($data = mysqli_fetch_assoc($result)){
                    ?>
                <option value="<?php echo $data['id_dosen']; ?>"><?php echo $data['nama_dosen'];?></option>
                <?php
                }
                ?>
                </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="btnSimpan" id=""></td>
            </tr>
        </table>
    </form>
</body>
</html>