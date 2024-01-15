<?php
$NIK=$_GET['NIK'];
$sqlHapusPegawaiNaikPangkat=mysqli_query($koneksi,"DELETE FROM naik_pangkat WHERE NIK='$NIK'") or die(mysqli_error($koneksi));

echo '<meta http-equiv="refresh" content="0;url=index.php?modul=PegawaiNaikPangkat">';
echo '<script>alert ("Data Telah Dihapus:)")</script>'; 
?>