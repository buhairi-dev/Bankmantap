<?php include 'layout/header.php';?>

<style>
table {
  margin-bottom:8%;
  margin-top:2%;
  width: 100%;
  font-size:12px;
  box-shadow: 0px 20px 40px #00000014;
  border-radius: 16px;
   
}

th {
  height: 60px;
  color: #121212;

}
td {
  text-align: left;
  height: 40px;
  color: #121212;;
}
tr:nth-child(even){
    background-color: #FCD1161A;
}

th {
  background-color: #FCD116;
  color: #0F2B5B;
}

tr .footer{
  font-weight:bold;
  background-color: #D0D8E6;
  height: 50px;
  color: #0F2B5B;
  
}
</style>


<section id="img-header" class="img-header">
<img src="asset/slider21.png">
 
<ul class="breadcrumb">
<div class="container">
  <li><a href="#">Home</a></li>
  <li>Jasa Bank</li>
  <li>Tarif Layanan</li>
</div>
</ul>
 
</section>

<section class="section">
<!-- Content Start Here -->

<div class="container">
<h4><strong>Layanan Tarif</strong></h4>
<table>

<thead>
  <tr>
    <th class="pl-5" style="border-radius: 16px 0px 0px 0px;">Nomor</th>
    <th>Jenis Layanan</th>
    <th class="pl-4" style="border-radius: 0px 16px 0px 0px;">Tarif</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td class="pl-5">1</td>
    <td colspan="2">Giro Rupiah</td>
  </tr>
   
  <tr>
    <td class="pl-5"></td>
    <td>a. Biaya administrasi rekening-perorangan</td>
    <td>Rp 20,000,-/bulan</td>
  </tr>

  <tr>
    <td class="pl-5"></td>
    <td><strong>Biaya Administrasi Badan Usaha</strong></td>
  </tr>

  <tr>
    <td class="pl-5"></td>
    <td>a. Pemerintah</td>
    <td>Bebas</td>
  </tr>

  <tr>
    <td class="pl-5"></td>
    <td>b. BUMN</td>
    <td>Rp 25,000,-/bulan</td>
  </tr>

  <tr>
    <td class="pl-4"></td>
    <td>c. Perusahaan/Institusi Lain (diluar bank)</td>
    <td>Rp 25,000,-/bulan</td>
  </tr>

  <tr>
    <td class="pl-4"></td>
    <td>d. Pembatalan Gilyet Giro</td>
    <td>Rp 25,000,-/lembar</td>
  </tr>

  <tr>
    <td class="pl-5"></td>
    <td colspan="2"><strong>Cek atau Bilyet Giro Hilang</strong></td>
  </tr>

  <tr>
    <td class="pl-5"></td>
    <td>a. Telah diisi</td>
    <td>Rp 25,000,- per warkat</td>
  </tr>

  <tr>
    <td class="pl-5"></td>
    <td>b. Belum diisi</td>
    <td>Rp 25,000,- per laporan</td>
  </tr>

  <tr>
    <td class="pl-5"></td>
    <td>c. Penalti karena saldo dibawah saldo minimum</td>
    <td>Rp 20,000,- per laporan</td>
  </tr>

  <tr>
    <td class="pl-5"></td>
    <td>d. Biaya administrasi rekening pasif / dormant</td>
    <td>Rp 2,000,- per laporan</td>
  </tr>

  <tr>
    <td class="pl-5"></td>
    <td colspan="2"><strong>Biaya Penutupan</strong></td>
  </tr>




  <tr>
    <td class="pl-4" style="border-radius: 16px 0px 0px 0px;"></td>
    <td></td>
    <td class="pl-4" style="border-radius: 0px 16px 0px 0px;"></td>
  </tr>
</tbody>

   

</table>



</section>

<?php include 'layout/footer.php';?>