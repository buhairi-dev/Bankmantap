<?php include 'layout/header.php';?>

<section id="img-header" class="img-header">
<img src="asset/slider_simulasi.png">
<ul class="breadcrumb">

<div class="container">
  <li><a href="#">Home</a></li>
  <li>Simulasi</li>
  <li>Tabungan Berjangka</li>
</div>

</ul>
</section>

 
<style>

.select, .option{
width: 490px;
height: 44px;
background-color:red;
}
</style>
 
<div class="container">
<div class="row">
  <div class="col-sm-6 text-left">
  <h4><strong>Simulasi Tabungan Berjangka</strong></h4>
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

<p><small>Lakukan simulasi perhitungan dana sesuai dengan kebutuhan yang Anda pilih.</small></p>


<div class="col-sm-10">
<div class="card card-body mb-5 mt-5">




<div class="text-center"><a class="btn btn-simulasi-flat" role="button" href="simulasi-tabungan-berjangka-hasil.php">HITUNG SIMULASI</a> </div>
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