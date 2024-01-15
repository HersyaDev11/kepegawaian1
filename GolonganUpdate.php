<?php
$NamaGolongan=$_POST['TxtGolongan'];
$PangkatGolongan=$_POST['TxtPangkatGolongan'];

$sqlSimpan=mysqli_query($koneksi,"UPDATE golongan SET pangkat_golongan='$PangkatGolongan' WHERE golongan='$NamaGolongan'") or die(mysqli_error($koneksi));
    echo '<meta http-equiv="refresh" content="0;url=index.php?modul=TampilGolongan"/>';
    echo '<script>alert ("Data Telah Diedit")</script>'; 
?>