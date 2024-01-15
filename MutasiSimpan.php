<?php

$NIK=$_POST['TxtNIK'];
$Nama=$_POST['TxtNamaPegawai'];
$TanggalMutasi=$_POST['TxtTanggalMutasi'];
$LampiranSuratMutasi=$_POST['TxtLampiranSurat'];


$sqlSimpan=mysqli_query($koneksi,"INSERT INTO datamutasi  (NIK,NamaPegawai,TanggalMutasi,LampiranSurat) VALUES ('$NIK','$Nama','$TanggalMutasi','$LampiranSuratMutasi')") or die(mysqli_error($koneksi));
echo '<meta http-equiv="refresh"content="0;url=index.php?modul=PegawaiMutasi"/>';
echo '<script>alert ("Data Telah Dimasukan")</script>'; 
?>