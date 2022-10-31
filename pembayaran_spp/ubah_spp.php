<?php 
    include "header.php";
?>
<?php
    if($_SESSION['level']=='admin' || ['level']=='petugas'){
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
    $qry_get_spp=mysqli_query($connect,"select * from spp where id_spp = '".$_GET['id_spp']."'");
    $dt_spp=mysqli_fetch_array($qry_get_spp);
    ?>
    <h3>Ubah Data SPP</h3>
    <form action="proses_ubah_spp.php" method="post">
        ID SPP : 
        <input type="number" name="id_spp" value="<?=$dt_spp['id_spp']?>" class="form-control" >
        Nominal :
        <input type="number" name="nominal" value=   "<?=$dt_spp['nominal']?>" class="form-control">
        
        <br><input type="submit" name="simpan" value="Ubah Data SPP" class="btn btn-primary">
    </form>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
<?php
    }
?>