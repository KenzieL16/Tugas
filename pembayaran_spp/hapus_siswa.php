<?php 
        if($_GET['nisn']){
            include "connect.php";
            $qry_hapus=mysqli_query($connect,"delete from siswa where nisn='".$_GET['nisn']."'");
            if($qry_hapus){
                echo "<script>alert('Sukses hapus user');location.href='data_siswa.php';</script>";
            } else {
                echo "<script>alert('Gagal hapus user');location.href='data_siswa.php';</script>";
            }
        }
?>