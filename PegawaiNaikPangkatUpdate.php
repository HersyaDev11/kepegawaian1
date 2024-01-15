<?php
$NIK=$_POST['kodeNik'];
$Golongan=$_POST['kodeGolongan'];
$TmtNaikPangkat=$_POST['TxtNaikPangkat'];
$TanggalPengajuan=$_POST['TxtTanggalPengajuan'];

$sqlSimpan=mysqli_query($koneksi,"UPDATE naik_pangkat SET id_golongan='$golongan',
tmt_naik_pangkat='$TmtNaikPangkat',
tanggal_pengajuan='$TanggalPengajuan'
WHERE NIK='$NIK'") or die(mysqli_error($koneksi));
echo '<meta http-equiv="refresh"content="0;url=index.php?modul=PegawaiNaikPangkat"/>';
echo '<script>alert ("Data Telah Diedit")</script>'; 
?>