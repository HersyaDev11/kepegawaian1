<?php
$KodeAgama=$_POST['TxtKodeAgama'];
$NamaAgama=$_POST['TxtNamaAgama'];

$sqlSimpan=mysqli_query($koneksi,"UPDATE agama SET agama='$NamaAgama' WHERE kode_agama='$KodeAgama'") or die(mysqli_error($koneksi));
  echo '<meta http-equiv="refresh" content="0;url=index.php?modul=TampilAgama"/>';
  echo '<script>alert ("Data Telah Diedit")</script>'; 
?>