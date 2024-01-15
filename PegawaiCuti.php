<?php
$sqlpegawai_cuti=mysqli_query($koneksi,"SELECT * FROM pegawai_cuti");
?>
<h2><font face="Courier New"><b><font color="black">Pegawai Cuti</font></b></font></h2>
<p><font face="comic sans ms">Berikut ini data pegawai cuti, silahkan kelola dan input pada halaman ini!!!</font></p>
<p>
	<a href="index.php?modul=TambahPegawaiCuti" class="btn btn-primary"><i class="glyphicon glyphicon-user"></i>Tambah</a>
</p>

<table   class="table table-success table-striped-columns">
	<thead class="bg-info text-center">
		<tr>
		    <th>No</th>
			<th>Nik</th>
			<th>Jenis Cuti</th>
			<th>Lama cuti</th>
			<th>Dari Tanggal</th>
			<th>Sampai Tanggal</th>
			<th>Upload File</th>
			<th>Aksi</th>

		</tr>
   </thead>
 <tbody>
 <?php
$noUrut=null;
while($pegawai_cuti=mysqli_fetch_array($sqlpegawai_cuti,MYSQLI_ASSOC)){


$noUrut++;
echo '<tr>
	<td align="center">'.$noUrut.'</td> 
	<td align="center">'.$pegawai_cuti['NIK'].'</td> 
	<td align="center">'.$pegawai_cuti['jenis_cuti'].'</td>
	<td align="center">'.$pegawai_cuti['Lama_cuti'].'</td>
	<td align="center">'.$pegawai_cuti['Dari_tanggal'].'</td>
	<td align="center">'.$pegawai_cuti['Sampai_tanggal'].'</td>
	<td align="center">'.$pegawai_cuti['Foto'].'</td>
	<td>';
	
echo ' <a href="index.php?modul=PegawaiCutiEdit&NIK='.$pegawai_cuti['NIK'].'" class="btn btn-info btn-sm">Edit</a> &nbsp; <a href="index.php?modul=PegawaiCutiHapus&NIK='.$pegawai_cuti ['NIK'].'" class="btn btn-danger btn-sm">Hapus</a>';
	
	
}
?>

</tbody>
</table>