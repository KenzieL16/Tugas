<?php

session_start();

if(!(isset($_SESSION['user']))){
    header("location: ../login/form-login.php");
}

include '../connect.php';

$query= "SELECT * FROM dosen";
$result= mysqli_query($connect, $query);
$num = mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Dosen</title>
</head>
<body>
    <h1>Data Dosen</h1>
    <table border='1'>
        <h2>Data Dosen</h2>
        <tr>
            <th>No.</th>
            <th>Nama Dosen</th>
            <th>Telepon</th>
            <th colspan="2">Aksi</th>
            
        </tr>
        <?php
        if($num > 0){
            $no=1;
            while($data = mysqli_fetch_assoc($result)){
                echo "<tr>";
                echo "<td>". $no ."</td>";
                echo "<td>". $data['nama_dosen']. "</td>";
                echo "<td>". $data['Telp']. "</td>";
                echo "<td><a href='form-update.php?id_dosen=". $data['id_dosen']. "'> Edit </a> | ";
                echo "<td><a href='delete.php?id_dosen=". $data['id_dosen']. "'onclick='return confirm(\"Apakah Anda Yakin Ingin Menghapus Data?\")'>Hapus</a></td>";
                echo "</tr>";
                $no++;
            }
        }
        else{
            echo "<td colspan='3'>Tidak Ada Data</td>";
        }
        ?>
    </table>
</body>
</html>
<?php
echo "<br><a href = 'form-create.php'>Tambah Data</a><br>";
echo "<br><a href = '../login/logout.php'>Keluar</a>";
?>