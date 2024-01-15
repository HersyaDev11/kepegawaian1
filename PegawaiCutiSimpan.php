<?php
$Nik=$_POST['TxtNIK'];
$JenisCuti=$_POST['kodeCuti'];
$LamaCuti=$_POST['TxtLamaCuti'];
$DariTanggal=$_POST['TxtDariTanggal'];
$SampaiTanggal=$_POST['TxtSampaiTanggal'];
$Foto=$_POST['TxtFoto'];
	



$sqlSimpan=mysqli_query($koneksi,"INSERT INTO pegawai_cuti(NIK,jenis_cuti,Lama_cuti,Dari_tanggal,Sampai_tanggal,Foto) 
VALUES ('$Nik','$JenisCuti','$LamaCuti','$DariTanggal','$SampaiTanggal','$Foto')") or die(mysqli_error($koneksi));

echo '<meta http-equiv="refresh"content="0;url=index.php?modul=PegawaiCuti"/>';
echo '<script>alert ("Data Telah Dimasukan")</script>'; 
?>