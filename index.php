<?php include 'header.html'?>


<body>
<!-- ====================================================== NAVBAR MENU ===================================================== -->
<header>
<nav class="navbar navbar-expand-lg p-3 fixed-top navbar-light bg-white border-bottom">
 
<a class="navbar-brand ml-4 mr-5" href="#"><img src="asset/logo_mantap.png"  alt="Logo" width="80%"></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
 
<div class="collapse navbar-collapse" style="margin-left:10%;" id="navbarSupportedContent">

    <ul class="navbar-nav" style="font-size:12px; font-weight: bold;">
    <li class="nav-item active" >
    <a class="nav-link mr-3" href="beranda.html">BERANDA <span class="sr-only">(current)</span></a>
    </li>
         
    <li class="nav-item dropdown">
    <a class="nav-link mr-3 dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">TENTANG KAMI</a>
    <div class="dropdown-menu" style="font-size:12px;" aria-labelledby="navbarDropdown">
      <a class="dropdown-item"  style="border-bottom-color: yellow;" href="sekilas_perusahaan.html">Sekilas Perusahaan</a>
      <a class="dropdown-item" href="#">Struktur Organisasi</a>
      <a class="dropdown-item" href="#">Budaya Kerja</a>
      <a class="dropdown-item" href="#">Manajemen</a>
      <a class="dropdown-item" href="#">Pemegang Saham</a>
      <a class="dropdown-item" href="#">Good Corporate Goverment</a>
      <a class="dropdown-item" href="#">Budaya Kerja</a>
      <a class="dropdown-item" href="#">Whistleblowing System</a>
      <a class="dropdown-item" href="#">Pengungkapan Kuantitatif Eksposur Risiko</a>
    </div>
    </li> 

    <li class="nav-item"><a class="nav-link mr-3" href="#" tabindex="-1" aria-disabled="true">PINJAMAN</a></li>
    <li class="nav-item"><a class="nav-link mr-3" href="#" tabindex="-1" aria-disabled="true">SIMPANAN</a></li>
    <li class="nav-item"><a class="nav-link mr-3" href="#" tabindex="-1" aria-disabled="true">INFO MANTAP</a></li>
    <li class="nav-item"><a class="nav-link mr-3" href="#" tabindex="-1" aria-disabled="true">JASA BANK</a></li>
    <li class="nav-item"><a class="nav-link mr-3" href="#" tabindex="-1" aria-disabled="true">CABANG</a></li>
    <li class="nav-item"><a class="nav-link mr-3" href="#" tabindex="-1" aria-disabled="true">SIMULASI</a></li>        
    </ul>

    <!-- Search Bottom Here -->
    <div id="myOverlay" class="overlay">
      <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
      <div class="overlay-content">
        <form action="/hasil.php">
          <input type="text" placeholder="Search.." name="search">
          <button type="submit"><i class="fa fa-search"></i></button>
        </form>
      </div>
    </div>
    
    <a class="text-muted" href="#" onclick="openSearch()">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3">
    <circle cx="10.5" cy="10.5" r="7.5"></circle><line x1="21" y1="21" x2="15.8" y2="15.8"></line></svg>
    </a> 
    <!-- End Bottom Here -->

    <div class="btn-group btn-group-toggle" data-toggle="buttons">
    <label class="btn btn-sm btn-warning">
    <input type="radio" name="options" id="option1" autocomplete="off" checked>IDN
    </label>
    <label class="btn btn-sm btn-outline-warning text-dark">
    <input type="radio" name="options" id="option2" autocomplete="off">ENG
    </label>
    </div>

</div>
 
</nav>
</header>
<!-- ====================================================== /NAVBAR  ===================================================== -->


 
<!-- ====================================================== CAROUSEL  ======================================================= -->
<section id="hero" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators" style="margin-left:-48rem; margin-bottom:12rem;">
    <li data-target="#hero" data-slide-to="0" class="active" style="height: 10px; width: 50px; padding-box; border-radius: 6px;"></li>
    <li data-target="#hero" data-slide-to="1" style="width: 12px; height: 10px;  padding-box; border-radius: 6px;"></li>
    <li data-target="#hero" data-slide-to="2" style="width: 12px; height: 10px;  padding-box; border-radius: 6px;"></li>
  </ol>
    <div class="carousel-inner">
     
    <div class="carousel-item active w-100" style="background-color: #FDB501; height: 38rem;">
      
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffd700" fill-opacity="1" d="M0,256L48,266.7C96,277,192,299,288,293.3C384,288,480,256,576,218.7C672,181,768,139,864,133.3C960,128,1056,160,1152,170.7C1248,181,1344,171,1392,165.3L1440,160L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
    <!--<img class="d-block w-100" src="asset/1.png" width="5%" alt="First slide"> -->

    <div class="container">
       <div class="row"> 

        <div class="carousel-caption text-left">
        <h2 style="font-weight: bold; color:#0F2B5B;">Ambil uang pensiun
        <br/>dari tarik tunai, tidak harus datang
        <br/>ke kantor cabang</h2>
        <p class="text-dark">Dengan kartu ATM Bank Mantap, nasabah pensiunan ASN<br/>dan TNI/POLRI dapat mengambil uang pensiun dan tarik<br/>
        tunai tidak harus datang ke kantor cabang</p>
       
        <p><a class="btn btn-lg btn-more" href="#" role="button">Selengkapnya</a></p>
        <p>&nbsp;</p><p>&nbsp;</p>
      <div class="row">
      <div class="text-left col-md-4">
      <p class="text-dark" style="font-size: 11px;">PT Bank Mandiri Taspen adalah pelaku jasa keuangan terdaftar dan diawasi oleh<br/>
      Otoritas Jasa Keuangan serta merupakan bank peseta penjamin LPS</p>
      </div>
      <div class="text-right">
        <img src="asset/logo-OJK.png" alt="Ojk"/>
        <img src="asset/logo-lps.png" alt="Lps"/>
        <img src="asset/logo-kebank.png" alt="AyoKebank">
      </div>
      </div>

     
        </div>

          <div class="carousel-caption text-right">
          <div class="hero"> 
            <style>
              .hero { 
                top:45px; 
                z-index:999;
                position:fixed;
                margin-left: 35%;
              }
              </style>
          <img src="asset/1.png" >
         </div>
          </div>

        </div>
    </div>
    </div>

    <div class="carousel-item"><img class="d-block w-100" src="asset/slider2.png" alt="Second slide"></div>
    <div class="carousel-item"><img class="d-block w-100" src="asset/slider3.png" alt="Third slide"></div>

    </div>

    <a class="carousel-control-prev" href="#hero" role="button" data-slide="prev"><img src="asset/left.svg"></a>
    <a class="carousel-control-next" href="#hero" role="button" data-slide="next"><img src="asset/right.svg"></a>
 
</section>
<!-- ====================================================== /CAROUSEL  ==================================================== -->



<!-- ======================================================  SIMULATION ====================================================== -->
<section id="simulasi" class="simulasi">
<br/>
<div class="container">
  
 <div class="row">
    <div class="col-sm">
		<div class="card card-one">
		  <div class="card-body">
		  <br/>
		  <h3 class="card-title text-light">   <img src="asset/campain.png"  alt="Logo" width="10%"> Whistleblowing System</h3>
		  <p class="card-text">Jika Anda yang memiliki informasi dan ingin melaporkan suatu perbuatan berindikasi
      pelanggaran yang terjadi di lingkungan PT Mandiri Taspen</p>
		  <a class="btn btn-simulasi" role="button" href="#">LAPOR WHISTLEBLOWING</a> 
		  </div>
		</div>
		</div>


		<div class="col-sm">
		<div class="card card-two">
		  <div class="card-body">
		  <br/>
		  <h3 class="card-title text-light"> <img src="asset/calculator.png"  alt="Logo" width="10%"> Simulasi Tahapan Berjangka</h3>
		  <p class="card-text">Lakukan simulasi perhitungan besar dana yang terkumpul dengan rentang bulan yang Anda pilih.</p>
      <a class="btn btn-outline-light btn-simulasi" href="#" role="button">HITUNG SIMULASI</a>
		  </div>
		</div>
    </div>
</div>
</div>

 

<br><br><br><br>
<div class="container" align="center">
<h3 class="text-center">Dapatkan informasi berita, promosi, program terbaru serta<br/> laporan keuangan dari <strong>Bank Mantap</strong></h3>

<p><br/></p>
<p><a class="btn btn-lg btn-outline-secondary btn-wr" href="#" role="button">Berita Mantap</a>
<a class="btn btn-lg btn-outline-secondary  btn-wr" href="#" role="button">Promosi Mantap</a>
<a class="btn btn-lg btn-outline-secondary  btn-wr" href="#" role="button">Program Mantap</a>
<a class="btn btn-lg btn-outline-secondary  btn-wr" href="#" role="button">Laporan Keuangan</a></p>

</section>
<!-- ==================================================  /SIMULATION ====================================================== -->
<br/>



<!-- ================================================  NEWS SLIDER ============================================================ -->
<section style="margin-top:-8rem;">
 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#F2F7FF" fill-opacity="1" d="M0,160L48,138.7C96,117,192,75,288,96C384,117,480,203,576,245.3C672,288,768,288,864,256C960,224,1056,160,1152,128C1248,96,1344,96,1392,96L1440,96L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
<!-- MENU CARD SLIDER -->
<div class="container my-3">
  <!--Carousel Wrapper-->
  <div id="news" class="carousel slide carousel-multi-item" data-ride="carousel" style="margin-top: -20rem;">
    <ol class="carousel-indicators" style="top: 25rem;">
      <li data-target="#news" data-slide-to="0" class="active"  style="width: 8%; height: 7px; background: var(--yellow-fcd116) 0% 0% no-repeat padding-box;
      background: #FCD116 0% 0% no-repeat padding-box; border-radius: 6px;"></li>
      <li data-target="#news" data-slide-to="1"  style="width: 6px; height: 6px; padding-box; border-radius: 6px; background-color: #121212;"></li>
      <li data-target="#news" data-slide-to="2"  style="width: 6px; height: 6px; padding-box; border-radius: 6px; background-color: #121212;"></li>
      <li data-target="#news" data-slide-to="3"  style="width: 6px; height: 6px; padding-box; border-radius: 6px; background-color: #121212;"></li>
    </ol>
  <!--Slides-->
  
  <div class="carousel-inner" role="listbox">
    <!--First slide-->
    <div class="carousel-item active">
        
      <div class="col-md-3" style="float:left;">
       <div class="card mb-2" style="height: 23rem; box-shadow: 0px 20px 40px #75B2DD1A;border-radius: 12px 12px 0px 0px; opacity: 1;">
          <img class="card-img-top" src="asset/minislide1.png" alt="Card image cap"  style="height: 12rem;">
          <div class="card-body">
          <p class="card-text text-left"><small class="text-muted">Last Update : 7 Des 2020</small></p>
          <p class="card-text text-left" style="color: #0F2B5B; cursor:pointer;" onclick="location.href='404.html';">Bank Mantap Serahkan Bantuan Alat Pelindung Diri Kepada RSPI Sulianti Saroso</p>
          </div>
        </div>
      </div>
  
      <div class="col-md-3" style="float:left">
        <div class="card mb-2" style="height: 23rem; box-shadow: 0px 20px 40px #75B2DD1A;border-radius: 12px 12px 0px 0px; opacity: 1;">
          <img class="card-img-top" src="asset/minislide2.png" alt="Card image cap"  style="height: 12rem;">
          <div class="card-body">
          <p class="card-text text-left"><small class="text-muted">Last Update : 16 Nov 2020</small></p>
          <p class="card-text text-left" style="color:#0F2B5B; cursor:pointer;" onclick="location.href='404.html';">Hadiah langsung tabungan siMantap, tentukan hadiahmu!</p>   
          </div>
        </div>
      </div>
      
      <div class="col-md-3" style="float:left">
        <div class="card mb-2" style="height: 23rem; box-shadow: 0px 20px 40px #75B2DD1A;border-radius: 12px 12px 0px 0px; opacity: 1;">
          <img class="card-img-top" src="asset/minislide3.png" alt="Card image cap" style="height: 12rem;">
          <div class="card-body">
          <p class="card-text text-left"><small class="text-muted">Last Update : 10 Nov 2020</small></p>
          <p class="card-text text-left" style="color: #0F2B5B; cursor:pointer;" onclick="location.href='404.html';">Pegawai Bank Mandiri Taspen Sisihkan Gaji Untuk Bantuan Akibat Dampak Virus Covid-19</p>
          </div>
        </div>
      </div>
      
       <div class="col-md-3" style="float:left">
       <div class="card mb-2" style="height: 23rem; box-shadow: 0px 20px 40px #75B2DD1A;border-radius: 12px 12px 0px 0px; opacity: 1;">
          <img class="card-img-top" src="asset/minislide4.png" alt="Card image cap" style="height: 12rem;">
          <div class="card-body">
          <p class="card-text text-left"><small class="text-muted">Last Update : 25 Okt 2020</small></p>
          <p class="card-text text-left" style="color: #0F2B5B; cursor:pointer;" onclick="location.href='404.html';">Badan Kepegawaian Negara Taspen dan Bank Mantap Perkuat Sinergi</p>
          </div>
        </div>
      </div>
  
    </div>
    <!--/.First slide-->
    <div class="carousel-item">
        
      <div class="col-md-3" style="float:left">
       <div class="card mb-2" style="height: 23rem; box-shadow: 0px 20px 40px #75B2DD1A;border-radius: 12px 12px 0px 0px; opacity: 1;">
          <img class="card-img-top" src="asset/minislide1.png" alt="Card image cap" style="height: 12rem;">
          <div class="card-body">
          <p class="card-text text-left"><small class="text-muted">Last Update : 7 Des 2020</small></p>
          <p class="card-text text-left" style="color: #0F2B5B; cursor:pointer;" onclick="location.href='404.html';">Bank Mantap Serahkan Bantuan Alat Pelindung Diri Kepada RSPI Sulianti Saroso</p>
          </div>
        </div>
      </div>
  
      <div class="col-md-3" style="float:left">
        <div class="card mb-2" style="height: 23rem; box-shadow: 0px 20px 40px #75B2DD1A;border-radius: 12px 12px 0px 0px; opacity: 1;">
          <img class="card-img-top" src="asset/minislide2.png" alt="Card image cap" style="height: 12rem;">
          <div class="card-body">
          <p class="card-text text-left"><small class="text-muted">Last Update : 16 Nov 2020</small></p>
          <p class="card-text text-left" style="color: #0F2B5B; cursor:pointer;" onclick="location.href='404.html';">Hadiah langsung tabungan siMantap, tentukan hadiahmu!</p>   
          </div>
        </div>
      </div>
  
      <div class="col-md-3" style="float:left">
        <div class="card mb-2" style="height: 23rem; box-shadow: 0px 20px 40px #75B2DD1A;border-radius: 12px 12px 0px 0px; opacity: 1;">
          <img class="card-img-top" src="asset/minislide3.png" alt="Card image cap" style="height: 12rem;">
          <div class="card-body">
          <p class="card-text text-left"><small class="text-muted">Last Update : 10 Nov 2020</small></p>
          <p class="card-text text-left" style="color: #0F2B5B; cursor:pointer;" onclick="location.href='404.html';">Pegawai Bank Mandiri Taspen Sisihkan Gaji Untuk Bantuan Akibat Dampak Virus Covid-19</p>
          </div>
        </div>
      </div>
      
       <div class="col-md-3" style="float:left">
       <div class="card mb-2" style="height: 23rem; box-shadow: 0px 20px 40px #75B2DD1A;border-radius: 12px 12px 0px 0px; opacity: 1;">
          <img class="card-img-top" src="asset/minislide4.png" alt="Card image cap" style="height: 12rem;">
          <div class="card-body">
          <p class="card-text text-left"><small class="text-muted">Last Update : 25 Okt 2020</small></p>
          <p class="card-text text-left" style="color: #0F2B5B; cursor:pointer;" onclick="location.href='404.html';">Badan Kepegawaian Negara Taspen dan Bank Mantap Perkuat Sinergi</p>
          </div>
        </div>
      </div>
  
    </div>
    <!--Second slide--> 
  
    
    <!--/.Second slide-->
  
  
  </div>
  <!--/.Slides-->

  <!-- Indicator Slider -->
  <a class="carousel-control-prev" href="#news" role="button" data-slide="prev"><img src="asset/left.svg" style="margin-left: -10rem;"></a>
  <a class="carousel-control-next" href="#news" role="button" data-slide="next"><img src="asset/right.svg" style="margin-right: -10rem;"></a>
   <!-- End Indicator Slider -->
    
  </div>
  
   
  <br/><br/><br/>
  <p class="text-center"><a class="btn btn-lg btn-more" href="#" role="button">Lihat Semua Info</a></p>
  </div>
  </div>
   

<!-- ================================================  VIDEO YOUTUBE ====================================================== -->
  <br/><br/>
  <div class="container">
    <h1 align="center">#BankMantap #BankMandiriTaspen</h1>
    <p align="center"><a>Bank Mantap memahami Anda untuk tetap produktif demi keluarga yang selalu bahagia.</a></p>
    <br/><br/><br/>
    <div align="center"> 
    <iframe width="750" height="400" border="0" style="border-radius: 20px;" frameborder="0" allowfullscreen src="https://www.youtube.com/embed/ablEvldqTCY"></iframe>
     </div>
     <br/><br/>

     <div class="row text-left text-xs-center text-sm-left text-md-left">
     <div class="col-xs-2 col-sm-3 col-md-4 text-right">
      <a href="https://web.facebook.com/BankMandiriTaspen" target="_blank" class="fa fa-facebook" style="background-color:transparent;"></a>
      <a href="https://twitter.com/BankMantap_id" target="_blank" class="fa fa-twitter" style="background-color:transparent;"></a>
      <a href="https://www.instagram.com/bankmantap_id" target="_blank" class="fa fa-instagram" style="background-color:transparent;"></a>
      <a href="https://www.youtube.com/channel/UCtV1KsHbxe2bbP3MA-eYfJA/featured?view_as=subscriber" target="_blank" class="fa fa-youtube-play" style="background-color:transparent;"></a>
     </div>

     <div class="col-xs-12 col-sm-6 col-md-6">
      <a>Like, subscribe dan follow untuk mendapatkan informasi terbaru dari Bank Mantap di media sosial</a>
      </div>
      </div>
  </div>
<!-- ================================================ END VIDEO YOUTUBE ====================================================== -->

</section>
<!-- ================================================  /NEWS SLIDER =========================================================== -->




<!-- ================================================ WHY US ================================================================= -->
<section id="content">
    <div class="container">
    <div class="row text-center text-xs-center text-sm-left text-md-left">
    <div class="col-xs-12 col-sm-4 col-md-4">
    <h1>Mengapa memilih<br/>Bank Mandiri Taspen</h1>
    </div>
    </div>

    <div class="row text-center text-xs-center text-sm-left text-md-left">
    <div class="col-xs-12 col-sm-8">
    <p>Melayani lebih dari 28 tahun, Bank Mandiri Taspen senantiasa memberikan kemudahan dan kecepatan dalam merespon berbagai kebutuhan nasabah dengan didukung oleh layanan perbankan yang prima.</p>
    <br/>
    </div>
    </div>

    <div class="row text-center text-xs-center text-sm-left text-md-left">
    <div class="col-xs-12 col-sm-3 col-sm-3">
           
    <div class="row">
    <div class="col-sm2"><a class="fa fa-globe"></a></div>
    <div class="col-sm-10">
    <h3>Kantor Cabang</h3>
    <p>274 jaringan kantor Bank Mantap di 34 provisi</p>
    </div>
    </div>

    <div class="row">
    <div class="col-sm2"><a class="fa fa-thumbs-up"></a></div>
    <div class="col-sm-10">
    <h3>Budaya Kerja</h3>
    <p>Kompeten dan dapat dipercaya dan Melayani dengan hati</p>
    </div>
    </div>        
    </div>

    <div class="col-xs-12 col-sm-4 col-md-4">

    <div class="row">
    <div class="col-sm2"><a class="fa fa-trophy"></a></div>
    <div class="col-sm-10">
    <h3>Penghargaan</h3>
    <p>Sebagai bank pesiunan terbaik di Indonesia</p>
    </div>
    </div>

    <div class="row">
    <div class="col-sm2">
    <a class="fa fa-lightbulb-o"></a>
    </div>
    <div class="col-sm-10">
    <h3>Terus Berinovasi</h3>
    <p>Bank Mantap terus berinovasi mengembangkan produk yang sesuai dengan perkembangan jaman untuk memenuhi kebutuhan nasabah</p>
    </div>
    </div>
            
    </div>

    <!-- Video Youtube -->
    <div class="col-xs-12 col-sm-4 col-md-4">
    <iframe width="420" height="285" border="0" style="border-radius: 20px;" frameborder="0" allowfullscreen src="https://www.youtube.com/embed/QGZeCE-3QJ0"></iframe>
    </div>
    <!-- / Video Youtube -->
 
    </div>


    <p><a class="btn btn-lg btn-more" href="#" role="button">Selengkapnya tentang Bank Mantap</a></p>
    </div>
       
</section>
<!-- ================================================ /WHY US ================================================================ -->
 



<!--  ================================================ FIRST FOOTER ========================================================== -->
<section id="footer">
    <div class="container">
      <div class="row text-center text-xs-center text-sm-left text-md-left">
        <div class="col-xs-12 col-sm-7 col-md-5">
         <h1>Bank Mantap, tiada kata pensiun untuk berkarya</h1>
       </div>
        <div class="col-xs-12 col-sm-7 col-md-6">
         <img class="small-logo" src="asset/map-dot.png" width="90%" alt="Logo Corp" />
       </div>
     </div>
      <div class="row text-left text-xs-center text-sm-left text-md-left">
        <div class="col-xs-12 col-sm-2 col-sm-2">
          <h5>TENTANG KAMI</h5>
          <ul class="list-unstyled quick-links">
            <li><a href="#">Sekilas Perusahaan</a></li>
            <li><a href="#">Struktur Organisasi</a></li>
            <li><a href="#">Budaya Kerja</a></li>
            <li><a href="#">Management</a></li>
            <li><a href="#">Pemegang Saham</a></li>
            <li><a href="#">Penghargaan</a></li>
            <li><a href="#">Good Corporate Governance</a></li>
            <li><a href="#">Whistleblowing System</a></li>
            <li><a href="#">Pengungkapan Kuantitatif Eksposur Risiko</a></li>

          </ul>
        </div>
        <div class="col-xs-12 col-sm-2 col-sm-2">
          <h5>PINJAMAN</h5>
          <ul class="list-unstyled quick-links">
            <li><a href="#">Kredit Mantap Pensiun </a></li>
            <li><a href="#">Retail</a></li>
            <li><a href="#">Mikro</a></li>
 
          </ul>
        </div>

       <div class="col-xs-12 col-sm-2 col-sm-2">
          <h5>SIMPANAN</h5>
          <ul class="list-unstyled quick-links">
            <li><a href="#">Tabunganku Deposito </a></li>
            <li><a href="#">Tabungan Simantap Berjangka </a></li>
            <li><a href="#">Tabungan Simantap Gold </a></li>
            <li><a href="#">Tabungan Simantap Pensiun </a></li>
            <li><a href="#">Mantap Giro</a></li>
          </ul>
        </div>
 
       <div class="col-xs-12 col-sm-2 col-sm-2">
          <h5>INFO MANTAP</h5>
          <ul class="list-unstyled quick-links">
            <li><a href="#">Berita Mantap</a></li>
            <li><a href="#">Promosi Mantap</a></li>
            <li><a href="#">Program Mantap</a></li>
            <li><a href="#">Laporan Keuangan</a></li>
          </ul>
        </div>

        <div class="col-xs-12 col-sm-2 col-sm-2">
          <h5>JASA BANK</h5>
          <ul class="list-unstyled quick-links">
            <li><a href="#">Tarif Layanan</a></li>
            <li><a href="#">Bank Garansi</a></li>
            <li><a href="#">Transfer</a></li>
            <li><a href="#">Inkaso</a></li>
          </ul>
        </div>

        <div class="col-xs-12 col-sm-1 col-sm-1">
          <h5>LANINNYA</h5>
          <ul class="list-unstyled quick-links">
            <li><a href="#">Simulasi</a></li>
            <li><a href="#">Cabang</a></li>    
            </ul>
        </div>
      </div>
     

    </div>
</section>
<!--  ================================================ /FIRST FOOTER ========================================================= -->




<!--  ================================================ SECOND FOOTER ========================================================= -->
<section class="footer">
<div class="container">

<div class="table">
<div class="row">

<div class="col-sm">
      <!-- Left Coloum -->
      <div class="cell text-left">
        <div class="row">

          <div class="col-sm-4">
              <img class="small-logo" src="https://www.bankmantap.co.id/assets/images/mantap.png" width="85%" alt="Logo Corp" />
            </div>

          <div class="col-sm-8">
            <b>PT Bank Mandiri Taspen</b><br/>
            <b>Kantor Pusat Bank Mantap</b>
            <br/>
            <small class="small"> 
            <a>Graha Mantap</a> <br/>
            <a>Jl. Cikini Raya No.42 Menteng Jakarta Pusat 10330</a>
            <a>Indonesia</a>
            <br/></small>
            <a href="https://web.facebook.com/BankMandiriTaspen" target="_blank" class="fa fa-facebook"></a>
            <a href="https://twitter.com/BankMantap_id" target="_blank" class="fa fa-twitter"></a>
            <a href="https://www.instagram.com/bankmantap_id" target="_blank" class="fa fa-instagram"></a>
            <a href="https://www.youtube.com/channel/UCtV1KsHbxe2bbP3MA-eYfJA/featured?view_as=subscriber" target="_blank" class="fa fa-youtube-play"></a>
          </div>


          
         </div>
      </div>
</div>
      <!-- Right Coloum -->
      <div class="col-sm">

        <div class="cell text-center">
          <img src="asset/mantapcall.png" alt="Partner2"/>
          <img src="asset/milea.png" width="30%" alt="Partner3"  style="padding-left: 7%;"/>
     
          </div>
      <div class="cell text-center">
        <img src="asset/logo-OJK.png" alt="Ojk"/>
        <img src="asset/logo-lps.png" alt="Lps"/>
        <img src="asset/logo-kebank.png" alt="AyoKebank">
      </div>
      </div>
      <!-- End Right Coloum -->

    </div>
  </div>
</div>


</section>
<!--  ================================================ /SECOND FOOTER ======================================================== -->


<hr/>
<div class="container">
  <div class="table box small-footer">
    <div class="row small-footer">
      <div class="col-sm">
      <div class="cell text-center">
        <small><a>Copyright &copy; 2017 PT. Bank Mandiri Taspen. All Rights Reserved</a></small>
      </div>
    </div>
     <div class="col-sm small-footer">
      <div class="cell box text-center">
       <small class="small-footer">
         <a href="#" style="color: #808080;">Syarat Penggunaan</a> 
         <a href="#" style="color: #808080; padding-left: 5%;">Kebijakan Privasi</a> 
         <a href="#" style="color: #808080; padding-left: 5%;">Hubungi Kami</a>
       </small>
      </div>
    </div>
    </div>
  </div>
  </div>

 



<!--  ================================================ MILEA ================================================================== -->
<div class="chat-float">
  <a id="milea" href="https://milea.bankmantap.co.id/" target="_blank">
    <div>
      <img src="asset/milea.png" />
    </div>
  </a>
  <div id="milea-tol" class="tooltip fade top in" role="tooltip" id="tooltip416138" style="top: -35px; left: -60px; display: none;">
    <div class="tooltip-arrow" style="left: 50%; border-top-color: #ffd427;"></div>
    <div class="tooltip-inner" style="padding: 7px;background: #ffd00a;color: #043364;font-weight: bold;    -webkit-box-shadow: 0 5px 15px 0 #808080;-ms-box-shadow: 0 5px 15px 0 #808080; -o-box-shadow: 0 5px 15px 0 #808080;box-shadow: 0 5px 15px 0 #808080;">Chat langsung dengan MILeA</div>
  </div>
</div>
<!--  ================================================ END MILEA ============================================================== -->


<!-- Start Scrolling -->
<button onclick="topFunction()" id="onTop" title="Go to top" class="fa fa-angle-double-up"></button>
<!-- End Scrolling -->

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

 
</body>
</html>

<script>
//Get the button
var mybutton = document.getElementById("onTop");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 10 || document.documentElement.scrollTop > 10) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>


<script>
  $('#milea').hover(function() {
       if (width >= 768) {
         $("#milea-tol").show();
       }else{
         $("#milea-tol").hide();
       }
      
     }, function() {
       $("#milea-tol").hide();
     });
  
    function showModalImage(img) {
      $("#imageModalDialog").attr('src', "");
      $("#imageModalDialog").attr('src', "https://staticx.bankmantap.co.id/assets/images/upload/" + img);
      $("#modalImageDialog").modal('show');
  
    }
  </script>


<script>
  $(document).ready(function () {
    var itemsMainDiv = ('.MultiCarousel');
    var itemsDiv = ('.MultiCarousel-inner');
    var itemWidth = "";

    $('.leftLst, .rightLst').click(function () {
        var condition = $(this).hasClass("leftLst");
        if (condition)
            click(0, this);
        else
            click(1, this)
    });

    ResCarouselSize();




    $(window).resize(function () {
        ResCarouselSize();
    });

    //this function define the size of the items
    function ResCarouselSize() {
        var incno = 0;
        var dataItems = ("data-items");
        var itemClass = ('.item');
        var id = 0;
        var btnParentSb = '';
        var itemsSplit = '';
        var sampwidth = $(itemsMainDiv).width();
        var bodyWidth = $('body').width();
        $(itemsDiv).each(function () {
            id = id + 1;
            var itemNumbers = $(this).find(itemClass).length;
            btnParentSb = $(this).parent().attr(dataItems);
            itemsSplit = btnParentSb.split(',');
            $(this).parent().attr("id", "MultiCarousel" + id);


            if (bodyWidth >= 1200) {
                incno = itemsSplit[3];
                itemWidth = sampwidth / incno;
            }
            else if (bodyWidth >= 992) {
                incno = itemsSplit[2];
                itemWidth = sampwidth / incno;
            }
            else if (bodyWidth >= 768) {
                incno = itemsSplit[1];
                itemWidth = sampwidth / incno;
            }
            else {
                incno = itemsSplit[0];
                itemWidth = sampwidth / incno;
            }
            $(this).css({ 'transform': 'translateX(0px)', 'width': itemWidth * itemNumbers });
            $(this).find(itemClass).each(function () {
                $(this).outerWidth(itemWidth);
            });

            $(".leftLst").addClass("over");
            $(".rightLst").removeClass("over");

        });
    }


    //this function used to move the items
    function ResCarousel(e, el, s) {
        var leftBtn = ('.leftLst');
        var rightBtn = ('.rightLst');
        var translateXval = '';
        var divStyle = $(el + ' ' + itemsDiv).css('transform');
        var values = divStyle.match(/-?[\d\.]+/g);
        var xds = Math.abs(values[4]);
        if (e == 0) {
            translateXval = parseInt(xds) - parseInt(itemWidth * s);
            $(el + ' ' + rightBtn).removeClass("over");

            if (translateXval <= itemWidth / 2) {
                translateXval = 0;
                $(el + ' ' + leftBtn).addClass("over");
            }
        }
        else if (e == 1) {
            var itemsCondition = $(el).find(itemsDiv).width() - $(el).width();
            translateXval = parseInt(xds) + parseInt(itemWidth * s);
            $(el + ' ' + leftBtn).removeClass("over");

            if (translateXval >= itemsCondition - itemWidth / 2) {
                translateXval = itemsCondition;
                $(el + ' ' + rightBtn).addClass("over");
            }
        }
        $(el + ' ' + itemsDiv).css('transform', 'translateX(' + -translateXval + 'px)');
    }

    //It is used to get some elements from btn
    function click(ell, ee) {
        var Parent = "#" + $(ee).parent().attr("id");
        var slide = $(Parent).attr("data-slide");
        ResCarousel(ell, Parent, slide);
    }

});
</script>


<script>
  function openSearch() {
    document.getElementById("myOverlay").style.display = "block";
  }
  
  function closeSearch() {
    document.getElementById("myOverlay").style.display = "none";
  }
  </script>