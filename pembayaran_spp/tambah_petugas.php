

<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <h3>Tambah Petugas</h3>
    <form action="proses_tambah_petugas.php" method="post">
        Username :
        <input type="text" name="nama" value="" class="form-control">
        Nama Petugas :
        <input type="text" name="nama_petugas" value=   "" class="form-control">
        Password :
        <input type="password" name="password" value=   "" class="form-control">
        Level : 
        <?php 
        $arr_level=array('admin'=>'admin','petugas'=>'petugas');
        ?>
        <select name="level" class="form-control">
            <option></option>
            <?php foreach ($arr_level as $key_level => $val_level):
                if($key_level==$dt_petugas['level']){
                    $selek="selected";
                } else {
                    $selek="";
                }
             ?>
            <option value="<?=$key_level?>" <?=$selek?>><?=$val_level?></option>
            <?php endforeach ?>
        </select>
<input type="submit" name="simpan" value="Tambah Petugas" class="btn btn-primary">
    </form>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
<?php
    
?>