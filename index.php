<?php
SESSION_START();
if(!isset($_SESSION['user'])){
	header("Location:login.php");
	exit;
}
?>
<style>
   body{
        background-image: url(images/rekap1.jpg);
	    background-color: red;
        background-repeat: no-repeat;
		background-position: auto;
        background-attachment: fixed;
	    background-size: cover;
	    margin-left: auto;
        margin-right: auto;
    }
</style>
<!DOCTYPE html>
<html lang="en">
<head>
      <title>Aplikasi Kepegawaian DPKPP</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width,inital-scale=1, shrink-to-fit=no"/>
      <link href="bootstrap/css/bootstrap.css"rel="stylesheet"/>
	  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"rel="stylesheet"/>
	  <link rel="shortcut icon"  href="images/favi.ico" type="images/x-icon">
</head>
<body>
 <main role="main">
  </hr>
 <nav class="navbar navbar-expand-md navbar-dark bg-dark">
     <a class="navbar-brand" href="index.php?modul=dashboard">
     <img class="img-responsive" src="images/logoo.png" width="30" height="30" alt="Not Image class="d-inline-block align-text-top"><font color="white"><font face="Courier New"><b> Dinas Perumahan Kawasan Permukiman Dan Pertanahan</font></font></b></a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
            <span class="navbar-toggler-icon"><i class="fa fa-navicon" style="color:#fff; font-size:28px;"></i></span>
     </button>

     <div class="navbar-collapse collapse w-100 dual-collapse2 order-1 order-md-0">
     <ul class="navbar-nav ml-auto text-center">
     <li class="nav-item active">
   <a class="nav-link"href="index.php?modul=dashboard"><i class="fa-solid fa-house fa-lg"></i> <b>Dashboard</b></font></a>
   </li>

<li class="navbar-item  dropdown">
    <a class="nav-link dropdown-toggle"href="#" id="navbardrop"data-toggle="dropdown"><i class="fa-solid fa-pen-to-square fa-lg"></i> <b>Master Data</b></font></a>
    <div class="dropdown-menu">
    <a class="dropdown-item"href="index.php?modul=TampilAgama"><i class="fa-solid fa-mosque"></i> Agama</a>
    <a class="dropdown-item"href="index.php?modul=TampilGolongan"><i class="fa-solid fa-people-group"></i> Golongan</a>
	<a class="dropdown-item"href="index.php?modul=TampilPegawai"><i class="fa-solid fa-user-group"></i> Data Pegawai</a>
	<a class="dropdown-item"href="index.php?modul=TampilCuti"><i class="fa-solid fa-check"></i> Jenis Cuti</a>
 </div>
</li>


<li class="nav-item dropdown">

    <a class="nav-link dropdown-toggle" href="#" id="navbardrop"data-toggle="dropdown"><i class="fa-solid fa-comment fa-lg"></i> <b>Transaksi</b></font></a>
    <div class="dropdown-menu">
    <a class="dropdown-item"href="index.php?modul=PegawaiCuti"><i class="fa-solid fa-book"></i> Pegawai Cuti</a>
	<a class="dropdown-item"href="index.php?modul=PegawaiMutasi"><i class="fa-solid fa-bookmark"></i> Pegawai Mutasi</a>
	<a class="dropdown-item"href="index.php?modul=PegawaiNaikPangkat"><i class="fa-solid fa-up-long"></i> Pegawai Naik Pangkat</a>
	<a class="dropdown-item"href="index.php?modul=PegawaiPensiun"><i class="fa-solid fa-circle-stop"></i> Pegawai Pensiun</a>
 </div>
</li>

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbardrop"data-toggle="dropdown"><i class="fa-sharp fa-solid fa-flag fa-lg"></i> <b>Laporan</b></font></a>
    <div class="dropdown-menu">
    <a class="dropdown-item"href="index.php?modul=Rekap"><i class="fa-solid fa-user"></i> Rekap</a>
   </div>
</li>

<li class="navbar-item">
   <a class="nav-link"href="logout.php"><i class="fa-sharp fa-solid fa-right-from-bracket fa-lg"></i> <b>Logout</b></a>
  </li>

<!--<nav class="navbar navbar-expand-md bg-info navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand"></a>
    <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>-->
  </li>
    </form>
  </div>
</nav>
 </ul>
</div>
</nav>
<div class="container-fluid mt-2">
<?php
include('konfigurasi.php');
include('fungsi.php');
if(isset($_GET['modul'])){
	if(file_exists($_GET['modul'].'.php')){
	include($_GET['modul'].'.php');
	} else {
		echo '<h4 align="center" style="margin-top:150px;color:red">Error file tidak ditemukan</h4>';
		//include('dtPegawai.php');
	}
} 


/*else {
if($_SESSION['level']=='cs'){
	include('csPanel.php');
} else if
($_SESSION['level']=='teller') {

include('tellerPanel.php');
} else if
($_SESSION['level']=='manager') {

include('csPanel.php');
include('tellerPanel.php');
} else if
($_SESSION['level']=='nasabah') {
include('nasabahPanel.php');
} else{

//header("Location:http://localhost/apl_kepegawaian/");

}
}*/
?>
</div> <!--container-fluid-->

</main>
  <script src="bootstrap/js/jquery-3.6.0.min.js"></script>
  <script src="bootstrap/js/bootstrap.js"></script>
</body>
</html>