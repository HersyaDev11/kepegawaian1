<?php
$sqlkepegawaian=mysqli_query($koneksi,"SELECT * FROM kepegawaian");
?>
<h2><font face="Courier New"><b><font color="black">Master Pegawai</font></b></font></h2>

<p><font face="comic sans ms">Berikut ini data pegawai, silahkan kelola pada halaman ini</font></p>
<p>
	<a href="index.php?modul=TambahDataPegawai" class="btn btn-primary btn-sm">Tambah</a>
</p>
<div class="table-responsive">

<table   class="table table-success table-striped-columns">
   <thead class="bg-info text-center">
		<tr>
		    <th>No</th>
			<th>NIK</th>
			<th> NIP </th>
			<th> Nama </th>
			<th> Tempat Lahir </th>
			<th> Tanggal Lahir </th>
			<th> Jenis Kelamin </th>
			<th align="right">Aksi</th>

		</tr>
	</thead>
	<tbody>
<?php
$noUrut=null;
while($kepegawaian=mysqli_fetch_array($sqlkepegawaian,MYSQLI_ASSOC)){

$noUrut++;
echo '<tr>
	<td align="center">'.$noUrut.'</td> 
	<td align="center">'.$kepegawaian['NIK'].'</td> 
	<td align="center">'.$kepegawaian['NIP'].'</td>
	<td align="center">'.$kepegawaian['nama'].'</td>
	<td align="center">'.$kepegawaian['tempat_lahir'].'</td> 
	<td align="center">'.$kepegawaian['tanggal_lahir'].'</td>
	<td align="center">'.($kepegawaian['jk']=='L' ? 'Laki-laki' : 'Perempuan').'</td>
	<td>';
	
echo ' <a href="index.php?modul=PegawaiEdit&NIK='.$kepegawaian['NIK'].'" class="btn btn-info btn-sm">Edit</a> &nbsp; <a href="index.php?modul=PegawaiHapus&NIK='.$kepegawaian ['NIK'].'" class="btn btn-danger btn-sm">Hapus</a> &nbsp; <a href="index.php?modul=DetailPegawai&NIK='.$kepegawaian['NIK'].'" class="btn btn-info btn-sm">Detail</a>';
}
?>
	<!-- loop -->	
	
<!-- 	<tr>
		<td>  <td>
		<td>  <td>
		<td>  <td>
		<td>  <td>
		
		<td align="right"> 
                <a href="index.php?modul=DetailPegawai&nip=123" class="btn btn-info"> Detail</a>
				<a href="#" class="btn btn-danger"> Hapus </a>
		        <a href="#" class="btn btn-success"> Edit </a></td>
	   </tr>

	<!-- end loop -->
   </tbody>
</table>
</div>