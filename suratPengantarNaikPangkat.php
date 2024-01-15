<?php
include('konfigurasi.php');
$id=$_GET['id'];

$naik_pangkat=mysqli_fetch_array(mysqli_query($koneksi,"SELECT naik_pangkat.*,
kepegawaian.NIP,kepegawaian.nama,kepegawaian.tempat_lahir,kepegawaian.tanggal_lahir 

FROM `naik_pangkat`
JOIN kepegawaian ON kepegawaian.NIK=naik_pangkat.NIK where id_pangkat=$id "));


?>




<!DOCTYPE html>
<html lang="en">
<head>
      <title>Surat Pengantar Kenaikan Pangkat a.n <?=$naik_pangkat['nama'];?></title>
</head>
<body Onload="window.print();">

<table width="100%">

	<tr >
		<td><img class="img-responsive" src="images/logoo.png" width="30" height="30" alt="Not Image class="d-inline-block align-text-top"></td>
		<td></td>
		<td align="center"><h2>Pemerintah Kabupaten Kuningan</h2></td>
	</tr>

</table>


<hr/>

<h2><u>Surat Pengantar Kenaikan Pangkat</u></h2>
<p>No : </p>


<p>Bersama ini kami sampaikan pengajuan naik pangkat atas nama :</p>


Nama                     : <?=$naik_pangkat['nama'];?><br/>
NIP                      : <?=$naik_pangkat['NIP'];?><br/>
Tempat Tanggal Lahir     : <?=$naik_pangkat['tempat_lahir'];?>, <?=$naik_pangkat['tanggal_lahir'];?><br/>
Pangkat Baru             :<br/>
TMT kenaikan pangkat     :<br/> 

<p>Demikian kami sampaikan pengajian kenaikan pamgkat</p>



<p>Kuningan, _______<br/>

<br/>
<br/>
Pejabat <br/>
NIP
</p>

</body>
</html>