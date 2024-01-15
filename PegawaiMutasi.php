<?php
$sqldatamutasi=mysqli_query($koneksi,"SELECT * FROM datamutasi");
?>

<h2><font face="Courier New"><b><font color="black">Pegawai Mutasi</font></b></font></h2>
<p>Berikut ini data Pegawai Mutasi, silahkan kelola pada halaman ini</p>
<p>
	<a href="index.php?modul=TambahPegawaiMutasi" class="btn btn-primary btn-sm">Tambah</a>
</p>

<div class="table-responsive">

<table   class="table table-success table-striped-columns">
   <thead class="bg-info text-center">
		<tr>
		    <th>No</th>
			<th>NIK</th>
			<th>Nama</th>
			<th>Tanggal Mutasi</th>
			<th>Lampiran Surat Mutasi</th>
			<th align="right">Aksi</th>
        </tr>
	</thead>
<tbody>

<?php
$noUrut=null;
while($datamutasi=mysqli_fetch_array($sqldatamutasi,MYSQLI_ASSOC)){

$noUrut++;
echo '<tr>
<td align="center">'.$noUrut.'</td> 
<td align="center">'.$datamutasi['NIK'].'</td> 
<td align="center">'.$datamutasi['NamaPegawai'].'</td>
<td align="center">'.$datamutasi['TanggalMutasi'].'</td> 
<td align="center">'.$datamutasi['LampiranSurat'].'</td> 
<td>';
echo ' <a href="index.php?modul=PegawaiMutasiEdit&NIk='.$datamutasi['NIK'].'" class="btn btn-info btn-sm">Edit</a> &nbsp; <a href="index.php?modul=PegawaiMutasiHapus&NIK='.$datamutasi ['NIK'].'" class="btn btn-danger btn-sm">Hapus</a>';
	
}
?>
</tbody>
</table>
