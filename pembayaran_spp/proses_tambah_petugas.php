<?php
    if($_POST){
        $username=$_POST['nama'];
        $password=$_POST['password'];
        $nama=$_POST['nama_petugas'];
        $alamat=$_POST['alamat'];
        $level=$_POST['level'];
        if(empty($nama)){
            echo "<script>alert('Data tidak boleh kosong');location.href='tambah_petugas.php';</script>";
        } else {
            include "connect.php";
            $insert=mysqli_query($connect,"insert into petugas (nama, password, nama_petugas, alamat, level) value ('".$username."','".$password."','".$nama."','".$alamat."','".$level."')") or die(mysqli_error($connect));
            if($insert){
                echo "<script>alert('Sukses menambahkan petugas');location.href='data_petugas.php';</script>";
            } else {
                echo "<script>alert('Gagal menambahkan petugas');location.href='data_petugas.php';</script>";
            }
        }
    }
?>
