<?php
$Nik=$_GET['NIK'];
$sqldatamutasi=mysqli_query($koneksi,"SELECT * FROM datamutasi WHERE NIK='$Nik'");
$datamutasi=mysqli_fetch_array($sqldatamutasi,MYSQLI_ASSOC);
?>

<h1>Update Pegawai Mutasi</h1>
<p>Silahkan Edit data pegawai mutasi pada form dibawah ini</p>
<form method="POST" action="index.php?modul=MutasiUpdate">


<div class="form-group">
		<label>Nik</label>
		<select name="kodeNik" class="form-control" readonly/>
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
	<input type="date" class="form-control" value="<?php echo $datamutasi['Tanggal_mutasi'];?>" name="TxtTanggalMutasi"  autocomplete="off" required autofocus/>
</div>

<div class="form-group">
	<label>Lampiran Surat Mutasi</label>
	<input type="file" class="form-control" value="<?php echo $datamutasi['foto'];?>" name="TxtLampiranSurat" autocomplete="off" required autofocus/>
</div>

<div class="form-group">
<button type="submit" class="btn btn-danger">Simpan</button>
</div>

</form>