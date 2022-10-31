<?php
    if($_POST){
        $username=$_POST['nama'];
        $nama=$_POST['nama_petugas'];
        $password=$_POST['password'];
        $level=$_POST['level'];
        if(empty($nama)){
            echo "<script>alert('nama member tidak boleh kosong');location.href='signup.php';</script>";
        } else {
            include "connect.php";
            $insert=mysqli_query($connect,"insert into petugas (nama, nama_petugas, password, level) value ('".$username."','".$nama."','".$password."','".$level."')") or die(mysqli_error($connect));
            if($insert){
                echo "<script>alert('Sukses menambahkan petugas');location.href='home.php';</script>";
            } else {
                echo "<script>alert('Gagal menambahkan petugas');location.href='home.php';</script>";
            }
        }
    }
?>
