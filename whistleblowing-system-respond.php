<?php include 'layout/header.php';?>
 

<section id="img-header" class="img-header">
<ul class="breadcrumb mt-4">
<div class="container">
  <li><a href="#">Home</a></li>
  <li>Tentang Kami</li>
  <li>Whistleblowing System</li>
</div>
</ul>
</section>

<div class="container text-center">
<img src="asset/amplop.png" width="50%">
        <?php
        $namapelapor = $_POST["nama_pelapor"];
        ?>
        <h4 class="text-center mb-3 mt-3">Terimakasih <strong><?php echo $namapelapor; ?> </strong>Laporan anda sudah kami terima,<br/>akan kami proses lebih lanjut</h4>
       
         <p class="text-center"><a class="btn btn-lg btn-more" href="index.php" role="button"> Kembali Ke Beranda</a></p>
         
</div>
<br/><br/><br/><br/><br/><br/><br/> 

<?php include 'layout/footer.php';?>