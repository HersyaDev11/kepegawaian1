<h2 class="text-4x1 tracking-wider neon"><marquee><b><font face="Monaco">Selamat Datang Di Halaman Dashboard</font></marquee></b></h2>

<style>
   .neon{
				text-align:center;
				color: white;
			}
   body{
        background-image: url(images/back.jpg);
	    background-color: red;
        background-repeat: no-repeat;
		background-position: auto;
        background-attachment: fixed;
	    background-size: cover;
	    margin-left: auto;
        margin-right: auto;
    }
</style>
<?php
include('dtPegawai.php');
?>
<hr class="border border-primary border-3 opacity-75">
<div class="row">
	<div class="col-sm-12">
		<div class="card-group">
		  <div class="card">
		    <img src="images/logoo.png" class="card-img-top" alt="gambar">
		    <div class="card-body">
		      <h5 class="card-title">Dinas Perumahan Kawasan Permukiman Dan Pertanahan</h5>
		      <p class="card-text">
			  “Terwujudnya Permukiman Prima yang Berwawasan Lingkungan dan Berbudaya Menuju Rapih Winangun Kerta Raharja”
		      </p>
			  <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="http://dpkpp.kuningankab.go.id/">Website DPKPP</a></li>
                </ol>
              </nav>
		    </div>
		    <div class="card-footer"><small class="text-muted">Last updated 3 mins ago</small></div>
		  </div>
		  <div class="card">
		    <img src="images/avatar.jpg" class="card-img-top" alt="gambar">
		    <div class="card-body">
		      <h5 class="card-title">Total Pegawai DPKPP</h5>
			  <div class="card-body text-center bg-success">
                 <h3><font color="black"><i class="fa-regular fa-user"></i>  <?=TotalPegawai();?> Orang</font></font></h3>
              </div
		      <p class="card-text">
		      	Diatas adalah jumlah pegawai di DPKPP
		      </p>
			  <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php?modul=TampilPegawai">Pegawai DPKPP</a></li>
                </ol>
              </nav>
		    </div>
		    <div class="card-footer"><small class="text-muted">Last updated 3 mins ago</small></div>
		  </div>
		  <div class="card">
		    <img src="images/cuti.jpg" class="card-img-top" alt="gambar">
		    <div class="card-body">
		      <h5 class="card-title">Jumlah Pegawai Cuti</h5>
			  <br/>
			  <br/>
			  <br/>
			  <div class="card-body text-center bg-success">
                 <h3><font color="black"><i class="fa-regular fa-user"></i>  <?=TotalPegawaiCuti();?> Orang</font></font></h3>
              </div
		      <p class="card-text">
		      	Berikut adalah jumlah pegawai cuti yang ada di Dinas DPKPP
		      </p>
			  <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php?modul=PegawaiCuti">Pegawai Cuti DPKPP</a></li>
                </ol>
		    </div>
		    <div class="card-footer"><small class="text-muted">Last updated 3 mins ago</small></div>
		  </div>
		  <div class="card">
		    <img src="images/naik.jpeg" class="card-img-top" alt="gambar">
		    <div class="card-body">
		      <h5 class="card-title">Pegawai Naik Pangkat</h5>
			  <div class="card-body text-center bg-success">
                 <h3><font color="black"><i class="fa-regular fa-user"></i>  <?=TotalPegawaiNaikPangkat();?> Orang</font></font></h3>
              </div
		      <p class="card-text">
		      	Berikut data pegawai yang naik pangkat di Dinas DPKPP
		      </p>
			  <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php?modul=PegawaiNaikPangkat">Pegawai Naik Pangkat DPKPP</a></li>
                </ol>
		    </div>
		    <div class="card-footer"><small class="text-muted">Last updated 3 mins ago</small></div>
		  </div>
		  <div class="card">
		    <img src="images/pensiun.jpg" class="card-img-top" alt="gambar">
		    <div class="card-body">
		      <h5 class="card-title">Pegawai Pensiun Dinas DPKPP</h5>
			  <div class="card-body text-center bg-success">
                 <h3><font color="black"><i class="fa-regular fa-user"></i>  <?=TotalPegawaiPensiun();?> Orang</font></font></h3>
              </div
		      <p class="card-text">
		      	Diatas Adalah Laporan Pegawai Pensiun di Dinas DPKPP
		      </p>
			  <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php?modul=PegawaiPensiun">Pegawai Pensiun DPKPP</a></li>
                </ol>
		    </div>
		    <div class="card-footer"><small class="text-muted">Last updated 3 mins ago</small></div>
		  </div>
		</div>
	</div>
</div>
<hr class="border border-primary border-3 opacity-75">
