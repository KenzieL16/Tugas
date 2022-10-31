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
            echo "<script>alert('data tidak boleh kosong');location.href='ubah_siswa.php';</script>";
        } else {
            include "connect.php";
            $update=mysqli_query($connect,"update siswa set nisn='".$nisn."', nis='".$nis."', nama='".$nama."', password='".$password."', id_kelas='".$id_kelas."', alamat='".$alamat."', no_tlp='".$telp."' where nisn = '".$nisn."'") or die(mysqli_error($connect));
            if($update){
                echo "<script>alert('Sukses update data siswa');location.href='data_siswa.php';</script>";
            } else {
                echo "<script>alert('Gagal update data siswa');location.href='ubah_siswa.php?id=".$id."';</script>";
            }
        } 
    }
?>