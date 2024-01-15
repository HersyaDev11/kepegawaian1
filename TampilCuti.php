<?php
$sqlcuti=mysqli_query($koneksi,"SELECT * FROM cuti");
?>
<h2><font face="Courier New"><b><font color="black">Master Cuti</font></b></font></h2>
<p><font face="comic sans ms">Berikut ini jenis cuti, silahkan kelola dan input pada halaman ini!!!</font></p>
<p>
	<a href="index.php?modul=TambahCuti" class="btn btn-primary"><i class="glyphicon glyphicon-user"></i>Tambah</a>
</p>

<table   class="table table-success table-striped-columns">
	<thead class="bg-info text-center">
		<tr>
		    <th>No</th>
			<th>Kode Cuti</th>
			<th>Jenis Cuti</th>
			<th>Aksi</th>

		</tr>
   </thead>
 <tbody>
<?php
$noUrut=null;
while($cuti=mysqli_fetch_array($sqlcuti,MYSQLI_ASSOC)){
$noUrut++;
echo '<tr>
	<td align="center">'.$noUrut.'</td> 
	<td align="center">'.$cuti['kode_cuti'].'</td> 
	<td align="center">'.$cuti['jenis_cuti'].'</td>
	<td>';
	
echo ' <a href="index.php?modul=CutiEdit&kode_cuti='.$cuti['kode_cuti'].'" class="btn btn-info btn-sm">Edit</a> &nbsp; <a href="index.php?modul=CutiHapus&kode_cuti='.$cuti ['kode_cuti'].'" class="btn btn-danger btn-sm">Hapus</a>';
	
}
?>
	<!-- end loop -->
</tbody>
</table>