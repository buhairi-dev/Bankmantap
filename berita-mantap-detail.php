<?php include 'layout/header.php';?>

<style>
.active,.btn-wr:hover{
	background-color: #FCD116;
	color:black;
	color: #121212;
	opacity: 1;
	font-size: 13px;
	border-radius: 25px;
	width: 179px;
	font-family: 'Roboto', sans-serif;
	font-weight: 900;
	border:none;
	transition-duration: 0.7s;
	box-shadow: 0 8px 10px 0 rgba(0,0,0,0.24), 0 14px 40px 0 rgba(0,0,0,0.15);
 }
</style>


<!-- Breadcrumb menu -->
<section id="img-header" class="img-header">
<img src="asset/slider_berita_mantap.png">
<ul class="breadcrumb">
<div class="container">
  <li><a href="#">Home</a></li>
  <li>Info Mantap</li>
  <li>Berita Mantap</li>
</div>
</ul>
</section>
<!-- end -->


<!-- Category News -->
<section class="section">
<div class="container text-center" id="news">
<p><a class="btn btn-lg btn-wr active" href="#" role="button">Berita Mantap</a>
<a class="btn btn-lg btn-wr" href="#" role="button">Promosi Mantap</a>
<a class="btn btn-lg btn-wr" href="#" role="button">Program Mantap</a>
<a class="btn btn-lg btn-wr" href="#" role="button">Laporan Keuangan</a></p>
</div>
<!-- end -->


<!-- Picture News -->
<div class="container mt-5">
<img src="asset/pic-berita.png">

<div class="row">
<div class="col-sm-7 mt-5">
<h4><strong>Bank Mantap Salurkan Bantuan Kepada Korban Bencana Alam Pekalongan<strong></h4>
<p><small>Kamis, 11 Februari 2021</small></p>
</div>

<div class="col-sm-12 mt-5">
<p class="text-center"><a class="btn btn-lg btn-share" href="index.php" role="button"><span class="fa fa-share"></span> Bagikan</a></p>
</div>
</div>

<div class="row">
<div class="col-sm-11 mt-3">

<p><small>Pekalongan, 16 Februari 2021 – Bank Mandiri Taspen (Bank Mantap) dalam bagian Hari Ulang Tahun (HUT) Ke-6 perseroan, mengadakan program Mantap Berbagi dan Mantap Peduli yaitu berencana menyalurkan 6.600 paket sembako dan vitamin di 6 (enam) Kota di Indonesia yang terkena bencana alam.</small></p>
<p><small>Acara simbolis penyerahan pake sembako yang hadiri oleh Wakil Walikota Pekalongan Achmad Afzan Arslan Djunaid , Direktur IT & Network Bank Mantap Iwan Soeroto dan Ketua PWRI Pekalongan Sodiri.</small></p>

<p><small>Direktur IT & Network Bank Mantap Iwan Soeroto mengatakan bahwa bantuan tanggap darurat ini merupakan bagian dari upaya Bank Mantap untuk selalu hadir untuk masyarakat dan menunjukan rasa empati terhadap sesama, khususnya di daerah yang terkena bencana alam seperti kota Manado, Mamuju, Barabai, Sumedang dan pada hari ini penyerahan bantuan dilaksanakan di Pekalongan. “Di Kotamadya Pekalongan ini, Bank Mantap menyerahkan bantuan sebanyak 500 paket sembako dan 200 paket vitamin senilai total Rp. 105.000.000,00 kepada pensiunan ASN maupun TNI/Polri dan warga sekitar yang terkena dampak bencana banjir rob”, ujar Iwan.
</small></p>

<p><small>Iwan menambahkan, program ini merupakan realisasi dari Program Mantap Peduli yang menyisihkan dari keuntungan perusahaan untuk dana Corporate Social Responbility (CSR) sebesar Rp. 1 miliar untuk kegiatan sosial di 6 kota. “Tujuan utama penerima bantuan ini adalah pegawai perseroan, nasabah pensiunan ASN dan TNI/Polri yang terkena dampak dari bencana alam dan diharapkan program-program Bank Mantap juga sejalan untuk mendukung pemerintah dalam memulihkan daerah-daerah yang terkena bencana alam”, tutur Iwan</small></p>
</div>
</div>
</div>
<!-- end -->

<!-- Slider News -->
<div class="container text-center mt-5">
 
</div>
<!-- end -->

 


 


<br/> <br/> <br/> <br/>

</section>

 <script>
// Add active class to the current button (highlight it)
var header = document.getElementById("news");
var btns = header.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("active");
  current[0].className = current[0].className.replace(" active", "");
  this.className += " active";
  });
}
</script>

<?php include 'layout/footer.php';?>