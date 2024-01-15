<?php
$KodeCuti=$_POST['TxtkodeCuti'];
$JenisCuti=$_POST['TxtJenisCuti'];


$sqlSimpan=mysqli_query($koneksi,"INSERT INTO cuti(kode_cuti,jenis_cuti) VALUES ('$KodeCuti','$JenisCuti')") or die(mysqli_error($koneksi));
echo '<meta http-equiv="refresh"content="0;url=index.php?modul=TampilCuti"/>';
echo '<script>alert ("Data Telah Dimasukan")</script>'; 
?>