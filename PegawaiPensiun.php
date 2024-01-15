<h2><font face="Courier New"><b><font color="black">Pegawai Pensiun</font></b></font></h2>
<p>Berikut ini data Pegawai Pensiun, silahkan kelola pada halaman ini</p>
<p>
<!--	<a href="index.php?modul=TambahPegawaiPensiun" class="btn btn-primary btn-sm">Tambah</a>-->
</p>


<?php


$sql=mysqli_query($koneksi,'SELECT NIK,NIP,nama,tanggal_lahir,
(floor(datediff(now(),tanggal_lahir)/360)*12)-3	 as usia ,
tanggal_lahir + interval 68 year as tgl_pensiun

FROM `kepegawaian`
where
(floor(datediff(now(),tanggal_lahir)/360)*12)-3	 >810');


?>


<table class="table table-hovered">
	<thead>
		<tr>
			<th>No</th>
			<th>NIK</th>
			<th>NIP</th>
			<th>Nama Pegawai</th>
			<th>Tanggal Pensiun</th>


		</tr>
	
	<thead>
	<!-- loop -->
<?php
$no=null;
while($calonPensiun=mysqli_fetch_array($sql,MYSQLI_ASSOC)){
$no++;
?>
	<tr>
		<td><?=$no;?></td>
		<td><?=$calonPensiun['NIK'];?></td>
		<td><?=$calonPensiun['NIP'];?></td>
		<td><?=$calonPensiun['nama'];?></td>
		<td><?=$calonPensiun['tgl_pensiun'];?></td>
		
		<td align="right"> <a href="index.php?modul=FormAjuanPensiun&nik=<?=$calonPensiun['NIK'];?>" class="btn btn-danger"> Ajukan </a>
		
	</tr>
<?php

}
?>
	<!-- end loop -->

</table>