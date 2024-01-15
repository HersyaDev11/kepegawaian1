<?php
$NamaGolongan=$_POST['TxtGolongan'];
$PangkatGolongan=$_POST['TxtPangkatGolongan'];



$sqlSimpan=mysqli_query($koneksi,"INSERT INTO golongan(golongan,pangkat_golongan) VALUES ('$NamaGolongan','$PangkatGolongan')") or die(mysqli_error($koneksi));
echo '<meta http-equiv="refresh"content="0;url=index.php?modul=TampilGolongan"/>';
?>