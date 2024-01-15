<?php
$Nama=$_GET['golongan'];
$sqlgolongan=mysqli_query($koneksi,"SELECT * FROM golongan WHERE golongan='$Nama'");
$golongan=mysqli_fetch_array($sqlgolongan,MYSQLI_ASSOC);
?>
<hr color=blue>
<h2 teks align="center"><font face="Courier New"><b>~~Update Golongan~~</b></font></h2>
<hr color=blue>
<p>Masukan data golongan pada form dibawah ini</p>
<form method="POST" action="index.php?modul=GolonganUpdate">
<div class="form-group">
	<label>Golongan</label>
	<input type="text" class="form-control" value="<?php echo $golongan['golongan'];?>" name="TxtGolongan" readonly/>
</div>

<div class="form-group">
	<label>Pangkat Golongan</label>
	<input type="text" class="form-control" value="<?php echo $golongan['pangkat_golongan'];?>" name="TxtPangkatGolongan" autofocus/>
</div>

<div class="form-group">
<button type="submit" class="btn
btn-danger">Simpan</button>
</div>

</form>