<?php
$KodeAgama=$_GET['kode_agama'];
$sqlHapusAgama=mysqli_query($koneksi,"DELETE FROM agama WHERE kode_agama='$KodeAgama'") or die(mysqli_error($koneksi));

echo '<meta http-equiv="refresh" content="0;url=index.php?modul=TampilAgama">';
?>