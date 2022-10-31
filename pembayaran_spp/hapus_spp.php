<?php 
        if($_GET['id_spp']){
            include "connect.php";
            $qry_hapus=mysqli_query($connect,"delete from spp where id_spp='".$_GET['id_spp']."'");
            if($qry_hapus){
                echo "<script>alert('Sukses hapus data');location.href='tagihan.php';</script>";
            } else {
                echo "<script>alert('Gagal hapus data');location.href='tagihan.php';</script>";
            }
        }
?>