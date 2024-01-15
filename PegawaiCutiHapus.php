<?php
$NIK=$_GET['NIK'];
$sqlHapusPegawaiCuti=mysqli_query($koneksi,"DELETE FROM pegawai_cuti WHERE NIK='$NIK'") or die(mysqli_error($koneksi));

echo '<meta http-equiv="refresh" content="0;url=index.php?modul=PegawaiCuti">';
?>