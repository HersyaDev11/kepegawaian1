<?php
$sqlgolongan=mysqli_query($koneksi,"SELECT * FROM golongan");
?>
<h2><font face="Courier New"><b><font color="black">Master Golongan</font></b></font></h2>
<p><font face="comic sans ms">Berikut ini data golongan pegawai, silahkan kelola pada halaman ini</font></p>
<p>
	<a href="index.php?modul=TambahGolongan" class="btn btn-primary btn-sm">Tambah</a>
</p>
<div class="table-responsive">
<table   class="table table-success table-striped-columns">
	<thead class="bg-info text-center">
		<tr>
		    <th>No</th>
			<th>Golongan</th>
			<th>Nama Pangkat Golongan</th>
			<th align="right">Aksi</th>
		</tr>
	<thead>
	<tbody>
<?php
$noUrut=null;
while($golongan=mysqli_fetch_array($sqlgolongan,MYSQLI_ASSOC)){

$noUrut++;
echo '<tr>
	<td align="center">'.$noUrut.'</td> 
	<td align="center">'.$golongan['golongan'].'</td>
	<td>';
	
echo ' <a href ="index.php?modul=GolonganEdit&golongan='.$golongan['golongan'].'" class="btn btn-info btn-sm">Edit</a> &nbsp; <a href="index.php?modul=GolonganHapus&golongan='.$golongan ['golongan'].'" class="btn btn-danger btn-sm">Hapus</a>';

}
?>
	<!-- loop -->
	
	<tr>
		
	<!--<td align="right"> <a href="#" class="btn btn-danger"> Hapus </a>
		
		<a href="#" class="btn btn-success"> Edit </a></td>-->
	</tr>

	<!-- end loop -->
  </tbody>
</table>