<?php
include 'header.php';
?>
<?php
    if($_SESSION['level']=='admin' || $_SESSION['level'] == 'petugas'){
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Data Kelas</title>
</head>
<body>
    <h1>Data Kelas</h1>
    <h3><a href="tambah_kelas.php" class="btn btn-success">Tambah Kelas</a></h3>

    <table class="table table-hover table-striped">
        <thead>
            <tr>
    <th>NO</th>           
    
    <th>Nama Kelas</th>
    <th>Jurusan</th>
    <th>Angkatan</th>
   
    <th>AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            include "connect.php";
$qry_kelas=mysqli_query($connect,"select * from kelas");
            $no=0;
            while($data_kelas=mysqli_fetch_array($qry_kelas)){
            $no++;?>
<tr>              
    <td><?=$no?></td>
    
    <td><?=$data_kelas['nama_kelas']?></td> 
    <td><?=$data_kelas['jurusan']?></td>
    <td><?=$data_kelas['angkatan']?></td> 

    <td><a href="ubah_kelas.php?id_kelas=<?=$data_kelas['id_kelas']?>" class="btn btn-success">Ubah</a> | <a href="hapus_kelas.php?id_kelas=<?=$data_kelas['id_kelas']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>
 
            </tr>
            <?php 
            }
            ?>
            
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>
</html>

<?php
    }
?>