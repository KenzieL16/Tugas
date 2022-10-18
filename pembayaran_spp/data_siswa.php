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
    <title>Data Siswa</title>
</head>
<body>
    <h1>Data Siswa</h1>
    <h3><a href="tambah_siswa.php" class="btn btn-success">Tambah Siswa</a></h3>

    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>NO</th>
    <th>NISN</th>
    <th>NIS</th>
    <th>Nama</th>
    <th>ID Kelas</th>
    <th>Alamat</th>
    <th>No Telepon</th>
    <th>AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            include "connect.php";
$qry_siswa=mysqli_query($connect,"select * from siswa");
            $no=0;
            while($data_siswa=mysqli_fetch_array($qry_siswa)){
            $no++;?>
<tr>              
    <td><?=$no?></td>
    <td><?=$data_siswa['nisn']?></td> 
    <td><?=$data_siswa['nis']?></td> 
    <td><?=$data_siswa['nama']?></td>
    <td><?=$data_siswa['id_kelas']?></td> 
    <td><?=$data_siswa['alamat']?></td>
    <td><?=$data_siswa['no_tlp']?></td> 
    <td><a href="ubah_siswa.php?nisn=<?=$data_siswa['nisn']?>" class="btn btn-success">Ubah</a> | <a href="hapus_siswa.php?nisn=<?=$data_siswa['nisn']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>
 
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