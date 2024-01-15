<?php
$Nik=$_POST['TxtNIK'];
$Nip=$_POST['TxtNIP'];
$NamaPegawai=$_POST['TxtNama'];
$TempatLahir=$_POST['TxtTempatLahir'];
$TanggalLahir=$_POST['TxtTanggalLahir'];
$JenisKelamin=$_POST['TxtJenisKelamin'];
$Agama=$_POST['kodeAgama'];
$Golongan=$_POST['TxtGolongan'];
$Alamat=$_POST['TxtAlamat'];
$NoTelepone=$_POST['TxtNoTelepone'];
$Email=$_POST['TxtEmail'];
$JenisPegawai=$_POST['TxtJenisPegawai'];
$Status=$_POST['TxtStatus'];


$sqlSimpan=mysqli_query($koneksi,"INSERT INTO kepegawaian(NIK,NIP,nama,tempat_lahir,tanggal_lahir,jk,agama,golongan,alamat,no_tlp,email,jenis_pegawai,status) VALUES ('$Nik','$Nip','$NamaPegawai','$TempatLahir','$TanggalLahir','$JenisKelamin','$Agama','$Golongan','$Alamat','$NoTelepone','$Email','$JenisPegawai','$Status')") or die(mysqli_error($koneksi));
echo '<meta http-equiv="refresh"content="0;url=index.php?modul=TampilPegawai"/>';
echo '<script>alert ("Data Telah Dimasukan")</script>'; 
?>