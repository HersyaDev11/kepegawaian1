<?php
$KodeCuti=$_POST['TxtKodeCuti'];
$JenisCuti=$_POST['TxtJenisCuti'];

$sqlSimpan=mysqli_query($koneksi,"UPDATE cuti SET cuti='$JenisCuti' WHERE kode_cuti='$KodeCuti'") or die(mysqli_error($koneksi));
  echo '<meta http-equiv="refresh" content="0;url=index.php?modul=TampilCuti"/>';
  echo '<script>alert ("Data Telah Diedit")</script>'; 
?>