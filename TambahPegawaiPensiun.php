<h1>Tambah Pegawai Pensiun</h1>
<p>Silahkan masukan data pegawai pensiun pada form dibawah ini</p>
<form method="POST" action="index.php?modul=PensiunSimpan">
<div class="form-group">
	<label>Nama</label>
	<select class="form-control" name="nik">
	<?php
$sqlkepegawaian=mysqli_query($koneksi,"SELECT * FROM kepegawaian");
while($kepegawaian=mysqli_fetch_array($sqlkepegawaian,MYSQLI_ASSOC)){
	echo '	<option value="'.$kepegawaian['NIK'].'">'.$kepegawaian['NIK'].' - '.$kepegawaian['nama'].'</option>	';

}
?>
	</select>
</div>
<div class="form-group">
	<label>Tanggal Pensiun</label>
	<input type="text" class="form-control"
name="TxtTanggalPensiunPegawai" placeholder="Masukan tanggal Pensiun pegawai "
autocomplete="off" required autofocus/>
</div>
<div class="form-group">
	<label>Tanggal Berakhir Pensiun</label>
	<input type="text" class="form-control"
name="TxtTanggalBerakhirPensiunPegawai" placeholder="Masukan tanggal berakhir pensiun pegawai "
autocomplete="off" required autofocus/>
</div>

<div class="form-group">
<button type="submit" class="btn
btn-danger">Simpan</button>
</div>

</form>