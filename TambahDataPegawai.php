<h1>Tambah Data Pegawai</h1>
<p>Silahkan masukan data pegawai pada form dibawah ini</p>
<form method="POST" action="index.php?modul=PegawaiSimpan">
<div class="form-group">
	<label>NIK</label>
	<input type="text" class="form-control" name="TxtNIK" placeholder="Masukan NIK pegawai " autocomplete="off" required autofocus/>
</div>
<div class="form-group">
	<label>NIP</label>
	<input type="text" class="form-control" name="TxtNIP" placeholder="Masukan NIP pegawai " autocomplete="off" required autofocus/>
</div>
<div class="form-group">
	<label>Nama</label>
	<input type="text" class="form-control" name="TxtNama" placeholder="Masukan nama pegawai " autocomplete="off" required/>
</div>

<div class="form-group">
	<label>Tempat Lahir</label>
	<input type="text" class="form-control" name="TxtTempatLahir" placeholder="Masukan tempat lahir pegawai " autocomplete="off" required/>
</div>

<div class="form-group">
	<label>Tanggal Lahir</label>
	<input type="date" class="form-control" name="TxtTanggalLahir" placeholder="Masukan tanggal lahir pegawai " autocomplete="off" required/>
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
	<select name="TxtGolongan" class="form-control">
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
	<input type="text" class="form-control" name="TxtAlamat" placeholder="Masukan alamat pegawai " autocomplete="off" required autofocus></textarea>
</div>

<div class="form-group">
	<label>No Telepone</label>
	<input type="text" class="form-control" name="TxtNoTelepone" placeholder="Masukan no telepone pegawai " autocomplete="off" required/>
</div>

<div class="form-group">
	<label>Email</label>
	<input type="text" class="form-control" name="TxtEmail" placeholder="Masukan email pegawai " autocomplete="off" required autofocus/>
</div>

<div class="form-group">
	<label>Jenis Pegawai</label>
	<input type="text" class="form-control" name="TxtJenisPegawai" placeholder="Masukan jenis pegawai " autocomplete="off" required autofocus/>
</div>

<div class="form-group">
	<label>Status</label>
	<input type="text" class="form-control" name="TxtStatus" placeholder="Masukan status pegawai " autocomplete="off" required autofocus/>
</div>

<div class="form-group">
<button type="submit" class="btn btn-danger">Simpan</button>
</div>

</form>