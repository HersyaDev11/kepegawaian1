<?php
 SESSION_START();
 include('konfigurasi.php');
  $user=$_POST['username'];
  $pass=md5($_POST['password']);
  $queryCekUser=mysqli_query($koneksi,"SELECT * FROM datauser WHERE username='$user' AND password='$pass'");
  $dataUserLogin=mysqli_fetch_array($queryCekUser,MYSQLI_ASSOC);
 if($user==$dataUserLogin['username'] && $pass==$dataUserLogin['password']){
   $_SESSION['user']=$dataUserLogin['username'];
   $_SESSION['level']=$dataUserLogin['levelUser'];
 

header('location:index.php');
echo '<script>alert ("Selamat Datang")</script>'; 
} else {
  echo '<script>alert("Gagal Login")</script>';
  echo '<script>alert("Berhasil Login")</script>';
header('location:login.php');
 
}
?>