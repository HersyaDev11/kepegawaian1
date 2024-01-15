<?php
$sqlnaik_pangkat=mysqli_query($koneksi,"SELECT naik_pangkat.id_pangkat,naik_pangkat.NIK,naik_pangkat.id_golongan,
naik_pangkat.tmt_naik_pangkat,naik_pangkat.tanggal_pengajuan,
kepegawaian.NIP,kepegawaian.nama,
golongan.golongan
FROM naik_pangkat
join kepegawaian on kepegawaian.NIK=naik_pangkat.NIK
join golongan on golongan.id_golongan=naik_pangkat.id_golongan");
?>
<h2><font face="Courier New"><b><font color="black">Pengajuan Pegawai Naik Pangkat</font></b></font></h2>
<p>Berikut ini data Pegawai Naik Pangkat, silahkan kelola pada halaman ini</p>
<p>
	<a href="index.php?modul=TambahPegawaiNaikPangkat" class="btn btn-primary btn-sm">Tambah</a>
</p>

<table   class="table table-success table-striped-columns">
	<thead class="bg-info text-center">
		<tr>
			<th>No</th>
			<th>NIK</th>
			<th>NIP</th>
			<th>Nama Pegawai</th>
			<th>Golongan Baru</th>k
			<th>Tmt Naik Pangkat</th>
			<th>Tanggal Pengajuan</th>
			<th align="right">Aksi</th>
		</tr>
	
    </thead>
<tbody>
<?php
$noUrut=null;
while($naik_pangkat=mysqli_fetch_array($sqlnaik_pangkat,MYSQLI_ASSOC)){

$noUrut++;
echo '<tr>
	<td align="center">'.$noUrut.'</td> 
	<td align="center">'.$naik_pangkat['NIK'].'</td> 
	<td align="center">'.$naik_pangkat['NIP'].'</td> 
	<td align="center">'.$naik_pangkat['nama'].'</td> 
	<td align="center">'.$naik_pangkat['golongan'].'</td>
	<td align="center">'.$naik_pangkat['tmt_naik_pangkat'].'</td>
	<td align="center">'.$naik_pangkat['tanggal_pengajuan'].'</td>
	<td>';
echo ' <a href="index.php?modul=PegawaiNaikPangkatEdit&id_pangkat='.$naik_pangkat['id_pangkat'].'" class="btn btn-info btn-sm">Edit</a> &nbsp; 
<a href="index.php?modul=PegawaiNaikPangkatHapus&id_pangkat='.$naik_pangkat['id_pangkat'].'" class="btn btn-danger btn-sm">Hapus</a> &nbsp; 

<a href="suratPengantarNaikPangkat.php?id_pangkat='.$naik_pangkat['id_pangkat'].'" target="_blank" class="btn btn-info btn-sm">Cetak</a>';
	
	
}
?>
	
</tbody>
</table>

<!--<a href="suratPengantarNaikPangkat.php?id=" target="_blank">Cetak </a>