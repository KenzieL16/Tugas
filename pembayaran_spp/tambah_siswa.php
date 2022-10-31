

<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <h3>Tambah Siswa</h3>
    <form action="proses_tambah_siswa.php" method="post">
        NISN :
        <input type="text" name="nisn" value="" class="form-control">
        NIS :
        <input type="text" name="nis" value=   "" class="form-control">
        Nama :
        <input type="text" name="nama" value=   "" class="form-control"><br>
        Password : <br>
        <input type="password" name="password" value="" class="form_control"><br>
        ID Kelas : <br>
        <input type="number" name="id_kelas" value="" class="form_control"><br>
        Alamat : <br>
        <input type="text" name="alamat" value="" class="form_control"><br>
        No Telepon : <br>
        <input type="text" name="no_tlp" value="" class="form_control"><br>
        
        </select><br>
<input type="submit" name="simpan" value="Tambah Siswa" class="btn btn-primary">
    </form>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
<?php
    
?>