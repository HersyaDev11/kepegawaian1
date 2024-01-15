<?php
$id=$_GET['id_pangkat'];
$sqlnaik_pangkat=mysqli_query($koneksi,"SELECT naik_pangkat.id_pangkat,naik_pangkat.NIK,naik_pangkat.id_golongan,
naik_pangkat.tmt_naik_pangkat,naik_pangkat.tanggal_pengajuan,
kepegawaian.NIP,kepegawaian.nama,
golongan.golongan
FROM naik_pangkat
join kepegawaian on kepegawaian.NIK=naik_pangkat.NIK
join golongan on golongan.id_golongan=naik_pangkat.id_golongan WHERE naik_pangkat.id_pangkat='$id'") or die(mysqli_error($koneksi));
$naik_pangkat=mysqli_fetch_array($sqlnaik_pangkat,MYSQLI_ASSOC);

//var_dump( $naik_pangkat);
?>

<h1>Update Pegawai Naik Pangkat</h1>
<p>Masukan data pegawai naik pangkat pada form dibawah ini</p>
<form method="POST" action="index.php?modul=PegawaiNaikPangkatSimpan">
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
	<label>Golongan Baru</label>
	<select name="Golongan" class="form-control">
<?php

$sqlgolongan=mysqli_query($koneksi,"SELECT * FROM golongan") or die(mysqli_error($koneksi));

while($golongan=mysqli_fetch_array($sqlgolongan,MYSQLI_ASSOC)){
	
$naik_pangkat['id_golongan']==$golongan['id_golongan'] ? $pilih='selected' : $pilih = null;

echo '<option '.$pilih.' value="'.$golongan['id_golongan'].'">'.$golongan['golongan'].'</option>';

}
?>
</select>
</div>

<div class="form-group">
	<label>Tmt Naik Pangkat</label>
	<input type="date" class="form-control" value="<?php echo $naik_pangkat['tmt_naik_pangkat'];?>"  name="TxtNaikPangkat"  autocomplete="off" required/>
</div>

<div class="form-group">
	<label>Tanggal Pengajuan</label>
	<input type="date" class="form-control" value="<?php echo $naik_pangkat['tanggal_pengajuan'];?>"  name="TxtTanggalPengajuan" autocomplete="off" required/>
</div>

<div class="form-group">
<button type="submit" class="btn
btn-danger">Simpan</button>
</div>

</form>