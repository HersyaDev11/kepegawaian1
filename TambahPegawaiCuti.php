<h1>Tambah Pegawai Cuti</h1>
<p>Masukan data pegawai cuti pada form dibawah ini</p>
<form method="POST" action="index.php?modul=PegawaiCutiSimpan">
<div class="form-group">
		<label>Nik</label>
		<select name="kodeNik" class="form-control">
		<?php
		$sqlkepegawaian=mysqli_query($koneksi,"SELECT * FROM kepegawaian");
		while($kepegawaian=mysqli_fetch_array($sqlkepegawaian,MYSQLI_ASSOC)){
			
		echo '<option value="'.$kepegawaian['NIK'].'">'.$kepegawaian['NIK'].' - '.$kepegawaian['nama'].'</option>';

		}
		?>
		</select>
</div>

<div class="form-group">
<label>Jenis Cuti</label>
    <select name="kodeCuti" class="form-control">
<?php
$sqlcuti=mysqli_query($koneksi,"SELECT * FROM cuti");
while($cuti=mysqli_fetch_array($sqlcuti,MYSQLI_ASSOC)){
	
echo '<option value="'.$cuti['jenis_cuti'].'">'.$cuti['jenis_cuti'].'</option>';

}
?>
    </select>
</div>

<div class="form-group">
	<label>Lama Cuti</label>
	<input type="text" class="form-control" name="TxtLamaCuti" placeholder="Masukan Lama Cuti " autocomplete="off" required/>
</div>

<div class="form-group">
	<label>Dari Tanggal</label>
	<input type="date" class="form-control" name="TxtDariTanggal" placeholder="Masukan tanggal masuk " autocomplete="off" required/>
</div>

<div class="form-group">
	<label>Sampai Tanggal</label>
	<input type="date" class="form-control" name="TxtSampaiTanggal" placeholder="Masukan Tanggal Selesai " autocomplete="off" required/>
</div>

<div class="form-group">
	<label>Uplod File</label>
	<input type="file" class="form-control" name="TxtFoto" autocomplete="off" required autofocus/>
</div>
<div class="form-group">
<button type="submit" class="btn
btn-danger">Simpan</button>
</div>

</form>