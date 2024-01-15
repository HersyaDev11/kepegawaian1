<?php

$NIK=$_POST['TxtNIK'];
$TanggalMutasi=$_POST['TxtTanggalMutasi'];
$LampiranSuratMutasi=$_POST['TxtLampiranSurat'];


$sqlSimpan=mysqli_query($koneksi,"UPDATE datamutasi SET TanggalMutasi='$TanggalMutasi',
LampiranSurat='$LampiranSuratMutasi',
WHERE NIK='$Nik'") or die(mysqli_error($koneksi));
echo '<meta http-equiv="refresh"content="0;url=index.php?modul=PegawaiMutasi"/>';
echo '<script>alert ("Data Telah Diedit")</script>'; 
?>