<?php 
        if($_GET['id_kelas']){
            include "connect.php";
            $qry_hapus=mysqli_query($connect,"delete from kelas where id_kelas='".$_GET['id_kelas']."'");
            if($qry_hapus){
                echo "<script>alert('Sukses hapus kelas');location.href='data_kelas.php';</script>";
            } else {
                echo "<script>alert('Gagal hapus kelas');location.href='data_kelas.php';</script>";
            }
        }
?>