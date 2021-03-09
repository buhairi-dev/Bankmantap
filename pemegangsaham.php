<?php include 'layout/header.php';?>
 

<section id="img-header" class="img-header">
<img src="asset/slider3.png">
<ul class="breadcrumb">
<div class="container">
  <li><a href="#">Home</a></li>
  <li>Tentang Kami</li>
  <li>Pemegang Saham</li>
</div>
</ul>
</section>

<div class="container">
<h4 style="color:#0F2B5B;">Pemegang Saham</h4>
<p  class="mb-5"><small>Komposisi Pemegang Saham</small></p>
<style>
table {
  margin-bottom:25%;
  width: 100%;
  font-size:14px;
  box-shadow: 0px 20px 40px #00000014;
  border-radius: 16px;
}

th {
  text-align: center;
  height: 60px;
  color: #121212;

}
td {
 text-align: center;
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
<table>
<thead>
  <tr>
    <th  style="border-radius: 16px 0px 0px 0px;">Nama Pemegang Saham (Owner)</th>
    <th>Jumlah Saham (Lembar)</th>
    <th>Prosentase (%)</th>
    <th  style="border-radius: 0px 16px 0px 0px;">Pengendali</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td>PT Bank Mandiri (Persero) Tbk.</td>
    <td>767.488.261</td>
    <td>51.077</td>
    <td>Ya</td>
  </tr>
  <tr>
    <td>PT Taspen (Persero)</td>
    <td>727.509.225</td>
    <td>48.416</td>
    <td>Ya</td>
  </tr>
  <tr>
    <td>IB Made Putra Jandjana</td>
    <td>7.617.432</td>
    <td>0.507</td>
    <td>Tidak</td>
  
  </tr>

  <tr>
    <td colspan='4' class="bg-white">&nbsp;</td>
 
  </tr>

</tbody>

  <tr class="footer">
    <td  class="footer" style="border-radius: 0px 0px 0px 16px;">Jumlah</td>
    <td class="footer">1.502.614.918</td>
    <td class="footer">100.00</td>
    <td class="footer" style="border-radius: 0px 0px 16px 0px;">-</td>
  </tr>

</table>
</div>
<?php include 'layout/footer.php';?>