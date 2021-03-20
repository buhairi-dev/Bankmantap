<?php include 'layout/header.php';?>

<section id="img-header" class="img-header">
<img src="asset/slider_simulasi.png">
<ul class="breadcrumb">

<div class="container">
  <li><a href="#">Home</a></li>
  <li>Simulasi</li>
  <li>Tabungan Kredit Pensiun</li>
</div>

</ul>
</section>

 
 
 
<div class="container">
<div class="row">
  <div class="col-sm-6 text-left">
  <h4><strong>Simulasi Kredit Pensiun</strong></h4>
  </div>
  
  <div class="col-sm-5 text-center">
 
  <select name="cars" id="cars" style="background: #FFFFFF 0% 0% no-repeat padding-box;
        border: 1px solid #D0D8E6;
        border-radius: 8px;
        opacity: 1; width: 260px;
        height: 40px;">
    <option value="volvo">Pilih simulasi produk lain</option>
    <option value="Simulasi Tabungan Berjangka">Simulasi Tabungan Berjangka</option>
    <option value="Simulasi Deposito">Simulasi Deposito</option>
    <option value="Simulasi kredit Serbaguna Mikro">Simulasi kredit Serbaguna Mikro</option>
    <option value="Simulasi Kredit Pensiun">Simulasi Kredit Pensiun</option>
  </select>
 
  </div>
</div>

 
<style>
input[type=text] {
background: #FFFFFF 0% 0% no-repeat padding-box;
border: 2px solid #D0D8E6;
border-radius: 12px;
height: 50px;
}

.input-group-text{
background: #D0D8E6 0% 0% no-repeat padding-box;
border-radius: 12px 0px 0px 12px;
height: 50px;
width: 110px;
}
</style>


<div class="col-sm-10 mt-5">
<p><small>Lakukan simulasi perhitungan dana sesuai dengan kebutuhan yang Anda pilih.</small></p>
<div class="card card-body mb-5" style="box-shadow: 0px 20px 40px #75B2DD1A;
border: 1px solid #D0D8E6;
border-radius: 12px;">
<form>
<div class="container ml-5">
    <div class="form-group row mt-4">
    <label class="col-sm-4 col-form-label">Jumlah Setoran (perbulan)</label> 
        <div class="col-sm-5 input-group">
          <div class="input-group-prepend "><span class="input-group-text"><b>Rp</b></span></div>
          <input type="text" class="form-control text-right" placeholder="0,0">
        </div>
    </div>

    <div class="form-group row">
    <label class="col-sm-4 col-form-label">Jangka Waktu</label> 
        <div class="col-sm-5 input-group">
          <input type="text" class="form-control text-right" placeholder="0,0">
          <div class="input-group-prepend"><span class="input-group-text" style="border-radius: 0px 12px 12px 0px;"><b>Bulan</b></span></div>
        </div>
    </div>

    <div class="form-group row">
    <label class="col-sm-4 col-form-label">Suku Bunga</label> 
        <div class="col-sm-5 input-group">
        <input type="text" class="form-control" id="bunga" disabled="" placeholder="0" style="background-color:#FFF;">
        <span class="input-group-text" style="border-radius: 0px 0px 0px 0px; width:50px; background-color:#FFF;">,</span>
        <input type="text" class="form-control" id="bunga" disabled="" placeholder="0"  style="background-color:#FFF;">
        <span class="input-group-text"  style="border-radius: 0px 12px 12px 0px;"><b style="">% Pertahun</b></span>
        </div>
    </div>

    <div class="form-group row">
    <div class="col-sm-3 col-form-label"></div> 
    <div class="col-sm-5 input-group ml-4">
    <a class="btn btn-simulasi-flat ml-5" role="button" href="simulasi-tabungan-berjangka-hasil.php">HITUNG SIMULASI</a>
    </div>
    </div>

    </div>
</form>
</div> <!-- card -->
</div>
 
</div>
   
</div>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
  



 

 
 

<?php include 'layout/footer.php';?>