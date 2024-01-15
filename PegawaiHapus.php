<?php
$Nik=$_GET['NIK'];
$sqlHapusPegawai=mysqli_query($koneksi,"DELETE FROM kepegawaian WHERE NIK='$Nik'") or die(mysqli_error($koneksi));

echo '<meta http-equiv="refresh" content="0;url=index.php?modul=TampilPegawai">';
?>