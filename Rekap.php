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
<hr/ color="blue">
<h2 text align="center"><font face="Monaco"><b>Berikut Laporan Dan Jumlah Data Yang Telah Masuk</b></font> <h2>
<hr/ color="blue">
<div class="row mt-2">
<div class="col-md-4 mt-2">
<div class="card">
<div class="card-header text-center

font-weight-bold">Total Pegawai</div>

<div class="card-body text-center bg-success">
<h3><?=TotalPegawai();?> Orang</h3>
</div><!--card-body-->
</div> <!--card-->
</div>

<div class="col-md-4 mt-2">
<div class="card">
<div class="card-header text-center

font-weight-bold">Total Pegawai Cuti</div>

<div class="card-body text-center bg-primary">
<h3><?=TotalPegawaiCuti();?> Orang</h3>

</div><!--card-body-->
</div> <!--card-->
</div>

<div class="col-md-4 mt-2">
<div class="card">
<div class="card-header text-center

font-weight-bold">Total Pegawai Mutasi</div>

<div class="card-body text-center bg-danger">
<h3><?=TotalPegawaiMutasi();?> Orang</h3>

</div><!--card-body-->
</div> <!--card-->
</div> <!--col-md-4-->
</div>
<br/>
<br/>
<div class="col-md-4 mt-2">
<div class="card">
<div class="card-header text-center

font-weight-bold">Total Pegawai Naik Pangkat</div>

<div class="card-body text-center bg-danger">
<h3><?=TotalPegawaiNaikPangkat();?> Orang</h3>

</div><!--card-body-->
</div> <!--card-->
</div> <!--col-md-4-->
</div>
<br/>
<br/>

<div class="col-md-4 mt-2">
<div class="card">
<div class="card-header text-center

font-weight-bold">Total Pegawai Pensiun</div>

<div class="card-body text-center bg-primary">
<h3><?=TotalPegawaiPensiun();?> Orang</h3>

</div><!--card-body-->
</div> <!--card-->
</div>