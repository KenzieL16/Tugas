<?php
if($_POST){
        $id=$_POST['id_petugas'];
        $username=$_POST['nama'];
        $nama=$_POST['nama_petugas'];
        $level=$_POST['level'];
        if(empty($nama)){
            echo "<script>alert('nama tidak boleh kosong');location.href='ubah_petugas.php';</script>";
        } else {
            include "connect.php";
            $update=mysqli_query($connect,"update petugas set nama='".$username."', nama_petugas='".$nama."', level='".$level."' where id_petugas = '".$id."'") or die(mysqli_error($connect));
            if($update){
                echo "<script>alert('Sukses update member');location.href='data_petugas.php';</script>";
            } else {
                echo "<script>alert('Gagal update member');location.href='ubah_petugas.php?id=".$id."';</script>";
            }
        } 
    }
?>