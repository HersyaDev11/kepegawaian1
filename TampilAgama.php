<?php
$sqlagama=mysqli_query($koneksi,"SELECT * FROM agama");
?>
<!--<hr color=blue>-->
<h2><font face="Courier New"><b><font color="black">Master Agama</font></b></font></h2>
<!--<hr color=blue>-->
<p><font face="comic sans ms">Berikut ini data agama, silahkan kelola dan input pada halaman ini!!!</font></p>
<p>
	<a href="index.php?modul=TambahAgama" class="btn btn-primary"><i class="glyphicon glyphicon-user"></i>Tambah</a>
</p>
<table   class="table table-success  table-striped-columns">
	<thead class="bg-info text-center">
		<tr>
		    <th>No</th>
			<th>Kode Agama</th>
			<th>Agama</th>
			<th>Aksi</th>
		</tr>
    </thead>
  <tbody>
<?php
$noUrut=null;
while($agama=mysqli_fetch_array($sqlagama,MYSQLI_ASSOC)){

$noUrut++;
echo '<tr>
	<td align="center">'.$noUrut.'</td> 
	<td align="center">'.$agama['kode_agama'].'</td> 
	<td align="center">'.$agama['agama'].'</td>
	<td>';
	
echo ' <a href="index.php?modul=AgamaEdit&kode_agama='.$agama['kode_agama'].'" class="btn btn-info btn-sm">Edit</a> &nbsp; <a href="index.php?modul=AgamaHapus&kode_agama='.$agama ['kode_agama'].'" class="btn btn-danger btn-sm">Hapus</a>';

//} else{
//echo '<a href="index.php?modul=AgamaDetail='.$agama['kode_agama'].'" class="btn btn-info btn-sm btn-block">Detail</a>';
//echo '</td></tr>';
}
?>
	
	<!-- end loop -->
  </tbody>
</table>