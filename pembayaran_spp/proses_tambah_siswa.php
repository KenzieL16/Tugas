<?php
    if($_POST){
        $nisn=$_POST['nisn'];
        $nis=$_POST['nis'];
        $nama=$_POST['nama'];
        $password=$_POST['password'];
        $id_kelas=$_POST['id_kelas'];
        $alamat=$_POST['alamat'];
        $telp=$_POST['no_tlp'];
        if(empty($nama)){
            echo "<script>alert('nama member tidak boleh kosong');location.href='tambah_siswa.php';</script>";
        } else {
            include "connect.php";
            $insert=mysqli_query($connect,"insert into siswa (nisn, nis, nama, password, id_kelas, alamat, no_tlp) value ('".$nisn."','".$nis."','".$nama."','".$password."','".$id_kelas."','".$alamat."','".$telp."')") or die(mysqli_error($connect));
            if($insert){
                echo "<script>alert('Sukses menambahkan siswa');location.href='data_siswa.php';</script>";
            } else {
                echo "<script>alert('Gagal menambahkan siswa');location.href='data_siswa.php';</script>";
            }
        }
    }
?>
