<?php
$Nik=$_POST['TxtNIK'];
$Nip=$_POST['TxtNIP'];
$NamaPegawai=$_POST['TxtNama'];
$TempatLahir=$_POST['TxtTempatLahir'];
$TanggalLahir=$_POST['TxtTanggalLahir'];
$JenisKelamin=$_POST['TxtJenisKelamin'];
$Agama=$_POST['TxtkodeAgama'];
$Golongan=$_POST['TxtGolongan'];
$Alamat=$_POST['TxtAlamat'];
$NoTelepone=$_POST['TxtNoTelepone'];
$Email=$_POST['TxtEmail'];
$JenisPegawai=$_POST['TxtJenisPegawai'];
$Status=$_POST['TxtStatus'];


$sqlSimpan=mysqli_query($koneksi,"UPDATE naik_pangkat SET NIP='$Nip',
nama='$NamaPegawai',
tempat_lahir='$TempatLahir',
tanggal_lahir='$TanggalLahir',
jk='$JenisKelamin',
agama='$Agama',
golongan='$Golongan',
alamat='$Alamat',
no_tlp='$NoTelepone',
email='$Email',
jenis_pegawai='$JenisPegawai',
status='$Status',
WHERE NIK='$Nik'") or die(mysqli_error($koneksi));
echo '<meta http-equiv="refresh"content="0;url=index.php?modul=TampilPegawai"/>';
echo '<script>alert ("Data Telah Diedit")</script>'; 
?>