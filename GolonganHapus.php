<?php
$NamaGolongan=$_GET['golongan'];
$sqlHapusGolongan=mysqli_query($koneksi,"DELETE FROM golongan WHERE golongan='$NamaGolongan'") or die(mysqli_error($koneksi));

echo '<meta http-equiv="refresh" content="0;url=index.php?modul=TampilGolongan">';
?>