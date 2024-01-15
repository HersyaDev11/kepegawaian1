<?php
$NIP=$_GET['NIK'];
$sqlHapusdatamutasi=mysqli_query($koneksi,"DELETE FROM datamutasi WHERE NIK='$NIK'") or die(mysqli_error($koneksi));

echo '<meta http-equiv="refresh" content="0;url=index.php?modul=PegawaiMutasi">';
echo '<script>alert ("Data Telah Dihapus")</script>'; 
?>