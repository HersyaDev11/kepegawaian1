<?php
//include('konfigurasi.php');
$id=$_GET['NIK'];

$sql=mysqli_query($koneksi,"SELECT kepegawaian.NIK,kepegawaian.NIP ,kepegawaian.nama,kepegawaian.tempat_lahir,kepegawaian.tanggal_lahir ,kepegawaian.jk,kepegawaian.agama,kepegawaian.golongan,kepegawaian.alamat,kepegawaian.no_tlp,kepegawaian.email,kepegawaian.jenis_pegawai,kepegawaian.status FROM `kepegawaian` where kepegawaian.NIK='$id' ") or die(mysqli_error($koneksi));

$kepegawaian=mysqli_fetch_array($sql);
?>





<hr/>
<td><img class="img-responsive" src="images/logoo.png" width="30" height="30" alt="Not Image class="d-inline-block align-text-top"></td>
<h2>Detail Pegawai</h2>

<table   class="table table-success table-striped-columns">
<tr><td class="font-weight-bold">NIK</td> <td>:<?=$kepegawaian['NIK'];?></td></td>
<tr><td class="font-weight-bold">NIP</td> <td>:<?=$kepegawaian['NIP'];?></td></td>
<tr><td class="font-weight-bold">Nama</td> <td>:<?=$kepegawaian['nama'];?>, <?=$kepegawaian['tanggal_lahir'];?></td></td>
<tr><td class="font-weight-bold">Jenis Kelamin</td> <td>:<?=$kepegawaian['jk'];?></td></td>
<tr><td class="font-weight-bold">Agama</td> <td>:<?=$kepegawaian['agama'];?></td></td>
<tr><td class="font-weight-bold">Golongan</td> <td>:<?=$kepegawaian['golongan'];?></td></td>
<tr><td class="font-weight-bold">Alamat</td> <td>:<?=$kepegawaian['alamat'];?></td></td>
<tr><td class="font-weight-bold">No Telephone</td> <td>:<?=$kepegawaian['no_tlp'];?></td></td>
<tr><td class="font-weight-bold">Email</td> <td>:<?=$kepegawaian['email'];?></td></td>
<tr><td class="font-weight-bold">Jenis Pegawai</td> <td>:<?=$kepegawaian['jenis_pegawai'];?></td></td>
<tr><td class="font-weight-bold">Status</td> <td>:<?=$kepegawaian['status'];?></td></td>


</table>
