<?php
    if($_POST){
        $id_kelas=$_POST['id_kelas'];
        $nama=$_POST['nama_kelas'];
        $jurusan=$_POST['jurusan'];
        $angkatan=$_POST['angkatan'];
        if(empty($nama)){
            echo "<script>alert('data tidak boleh kosong');location.href='tambah_kelas.php';</script>";
        } else {
            include "connect.php";
            $insert=mysqli_query($connect,"insert into kelas (id_kelas, nama_kelas, jurusan, angkatan) value ('".$id_kelas."','".$nama."','".$jurusan."','".$angkatan."')") or die(mysqli_error($connect));
            if($insert){
                echo "<script>alert('Sukses menambahkan kelas');location.href='data_kelas.php';</script>";
            } else {
                echo "<script>alert('Gagal menambahkan kelas');location.href='tambah_kelas.php';</script>";
            }
        }
    }
?>
