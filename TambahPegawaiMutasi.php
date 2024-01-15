<h1>Tambah Pegawai Mutasi</h1>
<p>Silahkan masukan data pegawai mutasi pada form dibawah ini</p>
<form method="POST" action="index.php?modul=MutasiSimpan">


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
	<label>Tanggal Mutasi</label>
	<input type="date" class="form-control" name="TxtTanggalMutasi" placeholder="Masukan tanggal mutasi pegawai " autocomplete="off" required autofocus/>
</div>

<div class="form-group">
	<label>Lampiran Surat Mutasi</label>
	<input type="file" class="form-control" name="TxtLampiranSurat" autocomplete="off" required autofocus/>
</div>

<div class="form-group">
<button type="submit" class="btn btn-danger">Simpan</button>
</div>

</form>