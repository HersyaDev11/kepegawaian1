<?php
$Kodecuti=$_GET['kode_cuti'];
$sqlcuti=mysqli_query($koneksi,"SELECT * FROM cuti WHERE kode_cuti='$Kodecuti'");
$cuti=mysqli_fetch_array($sqlcuti,MYSQLI_ASSOC);

//autocek jenis kelamin
//if($dataNasabah['JenisKelamin']=='L') {$laki='checked';
//   $perempuan=null;}
//else {$perempuan='checked' ; $laki=null;}

?>
<h2 teks align="center"><font face="Courier New"><b>Update Cuti</b></font></h2>
<p>Masukan jenis cuti pada form dibawah ini</p>
<form method="POST" action="index.php?modul=CutiUpdate">
<div class="form-group">
	<label>Kode Cuti</label>
	<input type="text" class="form-control"  value="<?php echo $cuti['kode_cuti'];?>" name="TxtKodeCuti" readonly/>
</div>
<div class="form-group">
	<label>Jenis Cuti</label>
	<input type="text" class="form-control"  value="<?php echo $cuti['jenis_cuti'];?>" name="TxtJenisCuti" autocomplete="off" autofocus/>
</div>
</div>
</div>

<div class="form-group">
<button type="submit" class="btn
btn-danger">Simpan</button>
</div>

</form>