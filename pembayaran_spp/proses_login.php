<?php 
  if($_POST){
        $username=$_POST['nama'];
        $password=$_POST['password'];
        if(empty($username)){
            echo "<script>alert('Username tidak boleh kosong');location.href='form_login_siswa.php';</script>";
        } elseif(empty($password)){
            echo "<script>alert('Password tidak boleh kosong');location.href='form_login_siswa.php';</script>";
        } else {
            include "connect.php";
            $qry_login=mysqli_query($connect,"select * from siswa where nama = '".$username."' and password = '".($password)."'");
            if(mysqli_num_rows($qry_login)>0){
                $dt_login=mysqli_fetch_array($qry_login);
                session_start();
                $_SESSION['id']=$dt_login['id'];
                $_SESSION['nama']=$dt_login['nama'];
                $_SESSION['level']=$dt_login['level'];
                $_SESSION['status_login']=true;
                header("location: home.php");
            } 
            else {
                echo "<script>alert('Username dan Password tidak benar');location.href='form_login_siswa.php';</script>";
            }
        }
    }
?>
