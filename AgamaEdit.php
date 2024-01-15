<?php
$Kodeagama=$_GET['kode_agama'];
$sqlagama=mysqli_query($koneksi,"SELECT * FROM agama WHERE kode_agama='$Kodeagama'");
$agama=mysqli_fetch_array($sqlagama,MYSQLI_ASSOC);

//autocek jenis kelamin
//if($dataNasabah['JenisKelamin']=='L') {$laki='checked';
//   $perempuan=null;}
//else {$perempuan='checked' ; $laki=null;}

?>
<hr color=blue>
<h2 teks align="center"><font face="Courier New"><b>~~Update Agama~~</b></font></h2>
<hr color=blue>
<p>Masukan data agama pada form dibawah ini</p>
<form method="POST" action="index.php?modul=AgamaUpdate">
<div class="form-group">
	<label>Kode Agama</label>
	<input type="text" class="form-control"  value="<?php echo $agama['kode_agama'];?>" name="TxtKodeAgama" readonly/>
</div>
<div class="form-group">
	<label>Nama</label>
	<input type="text" class="form-control"  value="<?php echo $agama['agama'];?>" name="TxtNamaAgama" autofocus autocomplete="off" autofocus/>
</div>
</div>
</div>

<div class="form-group">
<button type="submit" class="btn
btn-danger">Simpan</button>
</div>

</form>