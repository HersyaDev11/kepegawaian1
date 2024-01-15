<?php
$Nik=$_GET['NIK'];
$sqlkepegawaian=mysqli_query($koneksi,"SELECT * FROM kepegawaian");
$kepegawaian=mysqli_fetch_array($sqlkepegawaian,MYSQLI_ASSOC);

//autocek jenis kelamin
if($kepegawaian['jk']=='L') {$laki='checked';
   $perempuan=null;}
else {$perempuan='checked' ; $laki=null;}

?>

<h1>Update Data Pegawai</h1>
<p>Silahkan masukan data pegawai pada form dibawah ini</p>
<form method="POST" action="index.php?modul=PegawaiUpdate">
<div class="form-group">
	<label>NIK</label>
	<input type="text" class="form-control" value="<?php echo $kepegawaian['NIK'];?>" name="TxtNIK" autocomplete="off" required readonly/>
</div>
<div class="form-group">
	<label>NIP</label>
	<input type="text" class="form-control" value="<?php echo $kepegawaian['NIP'];?>" name="TxtNIP" autocomplete="off" required autofocus/>
</div>
<div class="form-group">
	<label>Nama</label>
	<input type="text" class="form-control" value="<?php echo $kepegawaian['nama'];?>" autocomplete="off" required/>
</div>

<div class="form-group">
	<label>Tempat Lahir</label>
	<input type="text" class="form-control" value="<?php echo $kepegawaian['tempat_lahir'];?>" name="TxtTempatLahir" autocomplete="off" required/>
</div>

<div class="form-group">
	<label>Tanggal Lahir</label>
	<input type="date" class="form-control" value="<?php echo $kepegawaian['tanggal_lahir'];?>" name="TxtTanggalLahir" autofocus/>
</div>

<div class="form-group">
	<label>Jenis Kelamin</label>
	<div>
<input type="radio" value="L" name="TxtJenisKelamin"> Laki-laki
<input type="radio" value="P" name="TxtJenisKelamin"> Perempuan
</div>
</div>

<div class="form-group">
	<label>Agama</label>
	<select name="kodeAgama" class="form-control">
<?php
$sqlagama=mysqli_query($koneksi,"SELECT * FROM agama");
while($agama=mysqli_fetch_array($sqlagama,MYSQLI_ASSOC)){

echo '<option value="'.$agama['kode_agama'].'">'.$agama['agama'].'</option>';

}
?>
</select>
</div>

<div class="form-group">
	<label>Golongan</label>
	<select name="kodeGolongan" class="form-control">
<?php
$sqlgolongan=mysqli_query($koneksi,"SELECT * FROM golongan");
while($golongan=mysqli_fetch_array($sqlgolongan,MYSQLI_ASSOC)){
	
echo '<option value="'.$golongan['kode_golongan'].'">'.$golongan['golongan'].'</option>';

}
?>
</select>
</div>

<div class="form-group">
	<label>Alamat</label>
	<input type="text" class="form-control" value="<?php echo $kepegawaian['alamat'];?>" name="TxtAlamat" autocomplete="off" required autofocus></textarea>
</div>

<div class="form-group">
	<label>No Telepone</label>
	<input type="text" class="form-control" value="<?php echo $kepegawaian['no_tlp'];?>" name="TxtNoTelepone" autocomplete="off" required/>
</div>

<div class="form-group">
	<label>Email</label>
	<input type="text" class="form-control" value="<?php echo $kepegawaian['email'];?>" name="TxtEmail" autocomplete="off" required autofocus/>
</div>

<div class="form-group">
	<label>Jenis Pegawai</label>
	<input type="text" class="form-control" value="<?php echo $kepegawaian['jenis_pegawai'];?>" name="TxtJenisPegawai" autocomplete="off" required autofocus/>
</div>

<div class="form-group">
	<label>Status</label>
	<input type="text" class="form-control" value="<?php echo $kepegawaian['status'];?>" name="TxtStatus" autocomplete="off" required autofocus/>
</div>

<div class="form-group">
<button type="submit" class="btn btn-danger">Simpan</button>
</div>

</form>