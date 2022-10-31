<?php
if($_POST){
        $id=$_POST['id_spp'];
        $nominal=$_POST['nominal'];
        if(empty($id)){
            echo "<script>alert('data tidak boleh kosong');location.href='ubah_petugas.php';</script>";
        } else {
            include "connect.php";
            $update=mysqli_query($connect,"update spp set id_spp='".$id."', nominal='".$nominal."' where id_spp = '".$id."'") or die(mysqli_error($connect));
            if($update){
                echo "<script>alert('Sukses update data SPP');location.href='tagihan.php';</script>";
            } else {
                echo "<script>alert('Gagal update data SPP');location.href='ubah_spp.php?id=".$id."';</script>";
            }
        } 
    }
?>