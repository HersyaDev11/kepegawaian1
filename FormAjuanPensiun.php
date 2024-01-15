<h1>Tambah Pegawai Pensiun</h1>
<p>Silahkan masukan data pegawai pensiun pada form dibawah ini</p>
<form method="POST" action="index.php?modul=PensiunSimpan">
<div class="form-group">
	<label>Nama</label>
	<input type="text" class="form-control" value="<?php echo $calonPensiun['nama'];?>" name="TxtNama" autocomplete="off" required autofocus/>
</div>
<div class="form-group">
	<label>Tanggal Pensiun</label>
	<input type="date" class="form-control"
name="TxtTanggalPensiunPegawai" placeholder="Masukan tanggal Pensiun pegawai "
autocomplete="off" required autofocus/>
</div>
<div class="form-group">
	<label>File Surat </label>
	<input type="file" class="form-control"
name="TxtFileSurat" placeholder="Masukan tanggal berakhir pensiun pegawai "
autocomplete="off" required autofocus/>
</div>

<div class="form-group">
<button type="submit" class="btn
btn-danger">Simpan</button>
</div>

</form>