<h1>Tambah Pegawai Naik Pangkat</h1>
<p>Masukan data pegawai naik pangkat pada form dibawah ini</p>
<form method="POST" action="index.php?modul=PegawaiNaikPangkatSimpan">
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
	<label>Golongan Baru</label>
	<select name="kodeGolongan" class="form-control">
<?php
$sqlgolongan=mysqli_query($koneksi,"SELECT * FROM golongan");
while($golongan=mysqli_fetch_array($sqlgolongan,MYSQLI_ASSOC)){
	
	echo '<option value="'.$golongan['golongan'].'">'.$golongan['golongan'].' - '.$golongan['pangkat_golongan'].'</option>';

}
?>
</select>
</div>

<div class="form-group">
	<label>Tmt Naik Pangkat</label>
	<input type="date" class="form-control" name="TxtNaikPangkat" placeholder="Masukan Naik Pangkat " autocomplete="off" required/>
</div>

<div class="form-group">
	<label>Tanggal Pengajuan</label>
	<input type="date" class="form-control" name="TxtTanggalPengajuan" placeholder="Masukan Naik Pangkat " autocomplete="off" required/>
</div>

<div class="form-group">
<button type="submit" class="btn
btn-danger">Simpan</button>
</div>

</form>