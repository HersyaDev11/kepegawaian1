<?php

function TotalPegawai(){
   $sqlTotalPegawai=mysqli_query($GLOBALS['koneksi'],"SELECT COUNT(NIK) as JmlPegawai FROM kepegawaian");
   $TotalPegawai=mysqli_fetch_array($sqlTotalPegawai,MYSQLI_ASSOC);
   return $TotalPegawai['JmlPegawai'];
}

function TotalPegawaiCuti(){
    $sqlTotalPegawaiCuti=mysqli_query($GLOBALS['koneksi'],"SELECT COUNT(NIK) as JmlPegawaiCuti FROM pegawai_cuti");
    $TotalPegawaiCuti=mysqli_fetch_array($sqlTotalPegawaiCuti,MYSQLI_ASSOC);
    return $TotalPegawaiCuti['JmlPegawaiCuti'];
 }

 function TotalPegawaiNaikPangkat(){
    $sqlTotalPegawaiNaikPangkat=mysqli_query($GLOBALS['koneksi'],"SELECT COUNT(NIK) as JmlPegawaiNaikPangkat FROM naik_pangkat");
    $sqlTotalPegawaiNaikPangkat=mysqli_fetch_array($sqlTotalPegawaiNaikPangkat,MYSQLI_ASSOC);
    return $sqlTotalPegawaiNaikPangkat['JmlPegawaiNaikPangkat'];
 }

 function TotalPegawaiMutasi(){
   $sqlTotalPegawaiMutasi=mysqli_query($GLOBALS['koneksi'],"SELECT COUNT(NIK) as JmlPegawaiMutasi FROM datamutasi");
   $sqlTotalPegawaiMutasi=mysqli_fetch_array($sqlTotalPegawaiMutasi,MYSQLI_ASSOC);
   return $sqlTotalPegawaiMutasi['JmlPegawaiMutasi'];
}

function TotalPegawaiPensiun(){
   $sqlTotalPegawaiPensiun=mysqli_query($GLOBALS['koneksi'],"SELECT COUNT(id_pensiun) as JmlPegawaiPensiun FROM pegawai_pensiun");
   $sqlTotalPegawaiPensiun=mysqli_fetch_array($sqlTotalPegawaiPensiun,MYSQLI_ASSOC);
   return $sqlTotalPegawaiPensiun['JmlPegawaiPensiun'];
}

function TotalNasabahNonAktif(){

   $sqlTotalNasabahNA=mysqli_query($GLOBALS['koneksi'],"SELECT COUNT(NoRekening) as JmlNasabah FROM dataNasabah where
   NoRekening NOT IN (SELECT NoRekening From dataSimpanan)");

   $TotalNasabahNA=mysqli_fetch_array($sqlTotalNasabahNA,MYSQLI_ASSOC);
    return $TotalNasabahNA['JmlNasabah'];
}

function HitungPenerimaanHarian($tanggalPenerimaan){
	
   $sqlTotalSimpanan=mysqli_query($GLOBALS['koneksi'],"SELECT SUM(Jumlah) as JmlSimpanan FROM dataSimpanan WHERE
   WaktuTransaksi like '$tanggalPenerimaan%' AND
   MutasiSimpanan='Simpan'");

   $TotalSimpanan=mysqli_fetch_array($sqlTotalSimpanan,MYSQLI_ASSOC);
    return $TotalSimpanan['JmlSimpanan'];
	
}

function HitungPenarikanHarian($tanggalPenerimaan){
	
   $sqlTotalPenarikan=mysqli_query($GLOBALS['koneksi'],"SELECT SUM(Jumlah) as JmlPenarikan FROM dataSimpanan WHERE
   WaktuTransaksi like '$tanggalPenerimaan%' AND MutasiSimpanan='Tarik'");
	
   $TotalPenarikan=mysqli_fetch_array($sqlTotalPenarikan,MYSQLI_ASSOC);
     return $TotalPenarikan['JmlPenarikan'];
	 
}

function HitungTotalSimpanan ($NoRekening){
	
	$sqlTotalSimpanan=mysqli_query($GLOBALS ['koneksi'],"SELECT SUM(Jumlah) as JmlSimpanan FROM dataSimpanan WHERE
	NoRekening='$NoRekening' AND MutasiSimpanan='Simpan'");
	
	$TotalSimpanan=mysqli_fetch_array($sqlTotalSimpanan,MYSQLI_ASSOC);
	return 'Rp.'.number_format($TotalSimpanan['JmlSimpanan'],0,',','.');
	
}

function HitungTotalPenarikan($NoRekening){
	
   $sqlTotalPenarikan=mysqli_query($GLOBALS['koneksi'],"SELECT SUM(Jumlah) as JmlPenarikan FROM dataSimpanan WHERE
   NoRekening='$NoRekening' AND MutasiSimpanan='Tarik'");
   
   $TotalPenarikan=mysqli_fetch_array($sqlTotalPenarikan,MYSQLI_ASSOC);
    return 'Rp.
	'.number_format($TotalPenarikan['JmlPenarikan'],0,',','.');
	
}

function HitungSaldoRekening($NoRekening){

    $sqlSaldoAkhir=mysqli_query($GLOBALS['koneksi'],"SELECT
    NoRekening,MutasiSimpanan,sum(Jumlah) as jml FROM
	`dataSimpanan` WHERE NoRekening='$NoRekening' GROUP BY
    NoRekening,MutasiSimpanan");
	$saldo=null;

while($SaldoAkhir=mysqli_fetch_array($sqlSaldoAkhir,MYSQLI_ASSOC)){
	if($saldo==null){
		$saldo= $SaldoAkhir['jml'];
		} else{
			$saldo=$saldo-$SaldoAkhir['jml'];
			}
			}
			
			return 'Rp. '.number_format($saldo,0,',','.');
			}
?>


	
	