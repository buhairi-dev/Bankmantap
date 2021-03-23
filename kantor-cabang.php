<?php include 'layout/header.php';?>

<section id="img-header" class="img-header">
<div>
     
        <div class="row">
            &nbsp
            <div id="googlemap" style="width: 100%; height: 470px;"></div>
        </div>
 
</div>

<ul class="breadcrumb">

<div class="container">
  <li><a href="#">Home</a></li>
  <li>Kantor Cabang</li>
</div>

</ul>
</section>

<div class="container" id="search">
<script type="text/javascript">
    function show(obj) {
      no = obj.options[obj.selectedIndex].value;
      count = obj.options.length;
      for(i=1;i<count;i++)
        document.getElementById('myDiv'+i).style.display = 'none';
      if(no>0)
        document.getElementById('myDiv'+no).style.display = 'block';
    }
  </script>
    <h4><b>Lokasi Kantor Cabang Mandiri Taspen</b></h4>
        <div class="row mt-4">
          <div class="col-sm-4 text-left">
            <form action="">
            <select class="btn btn-lg" aria-label="Default select example" onchange="show(this)">
              <option value="0" selected="selected">Pilih area kantor cabang (Provinsi)</option>
              <option value="1">Sumatera</option>
              <option value="2">Jawa</option>
              <option value="3">Bali</option>
              <option value="4">Kalimantan</option>
              <option value="5">Sulawesi</option>
              <option value="6">Nusa Tenggara</option>
              <option value="7">Maluku</option>
              <option value="8">Papua</option>
            </select>
          </div>
          <!-- <div class="col-sm text-center"><button class="btn btn-lg btn-search" type="submit">Cari</button></div> -->
        </form>
       
</div>

<div id="myDiv1" style="display:none" class="mt-5">
        <div   class="row mb-5">

    <div class="col-sm">
      <div class="card branch">
        <div class="card-body">
        <br/>
        <img src="asset/logo_mantap.png" style="width: 40%" class="card-img-top mb-2" alt="Image Simulasi"/>
        <p><small>Wisma Mandiri</small><br/>
        <small>Jalan M.H. Thamrin No. 5, Kelurahan Kebon Sirih, Kecamatan Menteng</small><br/>
        <small>021-230265</small></p>
        <h3><img src="asset/icon/maps.png"  alt="Maps"  style="width: 5%"> &nbsp;<a href="">Lihat Map</a></h3>
        </div>
      </div>
		</div>

    <div class="col-sm">
      <div class="card branch">
        <div class="card-body">
        <br/>
        <img src="asset/logo_mantap.png" style="width: 40%" class="card-img-top mb-2" alt="Image Simulasi"/>
        <p><small>Wisma Mandiri</small><br/>
        <small>Jalan M.H. Thamrin No. 5, Kelurahan Kebon Sirih, Kecamatan Menteng</small><br/>
        <small>021-230265</small></p>
        <h3><img src="asset/icon/maps.png"  alt="Maps"  style="width: 5%"> &nbsp;Lihat Map</h3>
        </div>
      </div>
		</div>

    <div class="col-sm">
      <div class="card branch">
        <div class="card-body">
        <br/>
        <img src="asset/logo_mantap.png" style="width: 40%" class="card-img-top mb-2" alt="Image Simulasi"/>
        <p><small>Wisma Mandiri</small><br/>
        <small>Jalan M.H. Thamrin No. 5, Kelurahan Kebon Sirih, Kecamatan Menteng</small><br/>
        <small>021-230265</small></p>
        <h3><img src="asset/icon/maps.png"  alt="Maps"  style="width: 5%"> &nbsp;Lihat Map</h3>
        </div>
      </div>
		</div>

    <div class="col-sm">
      <div class="card branch">
        <div class="card-body">
        <br/>
        <img src="asset/logo_mantap.png" style="width: 40%" class="card-img-top mb-2" alt="Image Simulasi"/>
        <p><small>Wisma Mandiri</small><br/>
        <small>Jalan M.H. Thamrin No. 5, Kelurahan Kebon Sirih, Kecamatan Menteng</small><br/>
        <small>021-230265</small></p>
        <h3><img src="asset/icon/maps.png"  alt="Maps"  style="width: 5%"> &nbsp;Lihat Map</h3>
        </div>
      </div>
		</div>

 

  </div> <!-- End Row -->
</div>

<div id="myDiv2" style="display:none">Jawa</div>
<div id="myDiv3" style="display:none">Bali</div>
<div id="myDiv4" style="display:none">Kalimantan</div>
<div id="myDiv5" style="display:none">Sulawesi</div>
<div id="myDiv6" style="display:none">Nusa Tenggara</div>
<div id="myDiv7" style="display:none">Maluku</div>
<div id="myDiv8" style="display:none">Papua</div>
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