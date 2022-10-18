<?php 
    include "header.php";
?>
<?php
    if($_SESSION['level']=='admin'){
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
    $qry_get_petugas=mysqli_query($connect,"select * from petugas where id_petugas = '".$_GET['id_petugas']."'");
    $dt_petugas=mysqli_fetch_array($qry_get_petugas);
    ?>
    <h3>Ubah Petugas</h3>
    <form action="proses_ubah_petugas.php" method="post">
        <input type="hidden" name="id_petugas" value= "<?=$dt_petugas['id_petugas']?>">
        Username : 
        <input type="text" name="nama" value="<?=$dt_petugas['nama']?>" class="form-control" >
        Nama Petugas :
        <input type="text" name="nama_petugas" value=   "<?=$dt_petugas['nama_petugas']?>" class="form-control">
        Role : 
        <?php 
        $level=array('admin'=>'admin','petugas'=>'petugas');
        ?>
        <select name="level" class="form-control">
            <option></option>
            <?php foreach ($level as $key_level => $val_level):
                if($key_level==$dt_petugas['level']){
                    $selek="selected";
                } else {
                    $selek="";
                }
             ?>
<option value="<?=$key_level?>" <?=$selek?>><?=$val_level?></option>
            <?php endforeach ?>
        </select>    
        <br><input type="submit" name="simpan" value="Ubah Petugas" class="btn btn-primary">
    </form>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
<?php
    }
?>