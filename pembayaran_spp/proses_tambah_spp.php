<?php
    if($_POST){
        $id=$_POST['id_spp'];
        $nominal=$_POST['nominal'];
        if(empty($id)){
            echo "<script>alert('ID SPP tidak boleh kosong');location.href='tambah_spp.php';</script>";
        } else {
            include "connect.php";
            $insert=mysqli_query($connect,"insert into spp (id_spp, nominal) value ('".$id."','".$nominal."')") or die(mysqli_error($connect));
            if($insert){
                echo "<script>alert('Sukses menambahkan data SPP');location.href='tagihan.php';</script>";
            } else {
                echo "<script>alert('Gagal menambahkan data SPP');location.href='tagihan.php';</script>";
            }
        }
    }
?>
