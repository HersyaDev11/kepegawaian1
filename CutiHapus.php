<?php
$KodeCuti=$_GET['kode_cuti'];
$sqlHapusCuti=mysqli_query($koneksi,"DELETE FROM cuti WHERE kode_cuti='$KodeCuti'") or die(mysqli_error($koneksi));

echo '<meta http-equiv="refresh" content="0;url=index.php?modul=TampilCuti">';
?>