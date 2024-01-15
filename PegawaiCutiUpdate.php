<?php
$Nik=$_POST['kodeNik'];
$JenisCuti=$_POST['kodeCuti'];
$LamaCuti=$_POST['TxtLamaCuti'];
$DariTanggal=$_POST['TxtDariTanggal'];
$SampaiTanggal=$_POST['TxtSampaiTanggal'];
$Foto=$_POST['TxtFoto'];

$sqlSimpan=mysqli_query($koneksi,"UPDATE pegawai_cuti SET jenis_cuti='$JenisCuti',
lama_cuti='$LamaCuti',
dari_tanggal='$DariTanggal',
sampai_tanggal='$SampaiTanggal',
foto='$Foto',
WHERE NIK='$Nik'") or die(mysqli_error($koneksi));
  echo '<meta http-equiv="refresh" content="0;url=index.php?modul=PegawaiCuti"/>';
  echo '<script>alert ("Data Telah Diedit")</script>'; 
?>