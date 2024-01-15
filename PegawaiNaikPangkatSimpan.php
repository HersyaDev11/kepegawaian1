<?php
$NIK=$_POST['kodeNik'];
$Golongan=$_POST['kodeGolongan'];
$TmtNaikPangkat=$_POST['TxtNaikPangkat'];
$TanggalPengajuan=$_POST['TxtTanggalPengajuan'];
	



$sqlSimpan=mysqli_query($koneksi,"INSERT INTO naik_pangkat(NIK,golongan,tmt_naik_pangkat,tanggal_pengajuan) 
VALUES ('$NIK','$Golongan','$TmtNaikPangkat','$TanggalPengajuan')") or die(mysqli_error($koneksi));

echo '<meta http-equiv="refresh"content="0;url=index.php?modul=PegawaiNaikPangkat"/>';
echo '<script>alert ("Data Telah Dimasukan")</script>'; 
?>