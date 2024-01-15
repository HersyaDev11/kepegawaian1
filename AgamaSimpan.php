<?php
$KodeAgama=$_POST['TxtkodeAgama'];
$NamaAgama=$_POST['TxtNamaAgama'];


$sqlSimpan=mysqli_query($koneksi,"INSERT INTO agama(kode_agama,agama) VALUES ('$KodeAgama','$NamaAgama')") or die(mysqli_error($koneksi));
echo '<meta http-equiv="refresh"content="0;url=index.php?modul=TampilAgama"/>';
echo '<script>alert ("Data Telah Dimasukan")</script>'; 
?>