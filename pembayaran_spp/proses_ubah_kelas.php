<?php
if($_POST){
        $id_kelas=$_POST['id_kelas'];
        $nama=$_POST['nama_kelas'];
        $jurusan=$_POST['jurusan'];
        $angkatan=$_POST['angkatan'];
        if(empty($nama)){
            echo "<script>alert('data tidak boleh kosong');location.href='ubah_kelas.php';</script>";
        } else {
            include "connect.php";
            $update=mysqli_query($connect,"update kelas set id_kelas='".$id_kelas."', nama_kelas='".$nama."', jurusan='".$jurusan."', angkatan='".$angkatan."' where id_kelas = '".$id_kelas."'") or die(mysqli_error($connect));
            if($update){
                echo "<script>alert('Sukses update kelas');location.href='data_kelas.php';</script>";
            } else {
                echo "<script>alert('Gagal update kelas');location.href='ubah_kelas.php?id_kelas=".$id_kelas."';</script>";
            }
        } 
    }
?>