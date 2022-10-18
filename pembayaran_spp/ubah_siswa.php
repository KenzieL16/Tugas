<?php 
    include "header.php";
?>
<?php
    if($_SESSION['level']=='admin' || ['level'] == 'petugas'){
?>
<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <?php 
    include "connect.php";
    $qry_get_siswa=mysqli_query($connect,"select * from siswa where nisn = '".$_GET['nisn']."'");
    $dt_siswa=mysqli_fetch_array($qry_get_siswa);
    ?>
    <h3>Ubah Petugas</h3>
    <form action="proses_ubah_siswa.php" method="post">
        NISN : 
        <input type="number" name="nisn" value="<?=$dt_siswa['nisn']?>" class="form-control">
        NIS :
        <input type="number" name="nis" value="<?=$dt_siswa['nis']?>" class="form-control">
        Nama : 
        <input type="text" name="nama" value="<?=$dt_siswa['nama']?>" class="form-control" >
        ID Kelas :
        <input type="text" name="id_kelas" value="<?=$dt_siswa['id_kelas']?>" class="form-control">
        Alamat :
        <input type="text" name="alamat" value="<?=$dt_siswa['alamat']?>" class="form-control">
        No Telepon :
        <input type="number" name="no_tlp" value="<?=$dt_siswa['no_tlp']?>" class="from-control">  
        <br><input type="submit" name="simpan" value="Ubah Petugas" class="btn btn-primary">
    </form>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
<?php
    }
?>