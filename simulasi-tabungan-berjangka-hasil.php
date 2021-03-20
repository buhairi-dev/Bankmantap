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
td {
  height: 40px;
  width:65%;
  
}
 
</style>
 
<div class="container">
<h4><strong>Hasil Perhitungan Simulasi Tabungan Berjangka</strong></h4>
 
<div class="col-sm-10">
<div class="card card-body mb-5 mt-5">
<div class="container ml-5 mt-3">

<table style="width:70%">
<tbody>
  <tr>
    <td style="padding-left:18px;">Jumlah Setoran (perbulan)</td>
    <td style="color:#0F2B5B; font-weight:bold;">: Rp. 200.000.000,00</td>
  </tr>
 
  <tr style="background-color: #FCD1161A;">
    <td style="padding-left:18px;">Bunga</td>
    <td style=" color:#0F2B5B; font-weight:bold;">: Rp. 770.048,00</td>
  </tr>

  <tr>
    <td style="padding-left:18px;">Jangka Waktu</td>
    <td style="color:#0F2B5B; font-weight:bold;">: 58 Bulan</td>
  </tr>

  <tr style="background-color: #FCD1161A;">
    <td style="padding-left:18px;">Total Dana</td>
    <td  style="color:#0F2B5B; font-weight:bold;">: Rp. 132.778.000,00</td>
  </tr>
   
 </tbody>

 </table>







<div class="col-sm-12">
      <h4 class="mt-4"><small>Catatan</small></h4>
        <small>1.&nbsp;&nbsp;&nbsp;Perhitungan di atas belum termasuk pajak bunga.</small><br>
        <small>2.&nbsp;&nbsp;&nbsp;Suku bunga dapat berubah sewaktu-waktu mengikuti ketentuan yang berlaku.</small><br>
        <small>2.&nbsp;&nbsp;&nbsp;Simulasi ini merupakan ilustrasi, perhitungan sebenarnya mengikuti perhitungan di sistem Bank Mantap</small><br>
</div>
<div class="form-group row">
    <div class="col-sm-3 col-form-label"></div> 
    <div class="col-sm-5 input-group ml-4">
    <a class="btn btn-simulasi-flat ml-5 mt-5" role="button" href="simulasi.php">KEMBALI KE SIMULASI</a>
    </div>
</div>
 
</div>
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


<!-- script hitung simulasi pada form 

<script>
  var bSetor = false;
  var bWaktu = false;
  $(document).ready(function(){
      $('#setor').maskMoney({thousands:'.', decimal:',', precision:0});
      $('#less').hide();
      $('#more').hide();
      $('#lesss').hide();
      $('#moree').hide();

      $('#hasil').hide();

      $('#btnHitung').prop('disabled', true);
  });

  function findAndReplace(string, target, replacement) { 
   var i = 0, length = string.length;   
   for (i; i < length; i++) {   
     string = string.replace(target, replacement);   
   }   
   return string;  
  }

  function updateSetor(input) {
    var str = input.value;
    var strr=findAndReplace(str,".","");

    if (parseInt(strr) <100000) {
        $('#lesss').show();
        window.bSetor = false;
    } else if(parseInt(strr) > 5000000){
        $('#moree').show();
        window.bSetor = false;
    }else{
        $('#lesss').hide();
        $('#moree').hide();
        window.bSetor = true;
    }
  }

  function updateWaktu(input) {
    if (input.value <12) {
        $('#less').show();
        window.bWaktu = false;
    } else if(input.value > 240){
        $('#more').show();
        window.bWaktu = false;
    }else{
        $('#less').hide();
        $('#more').hide();
        window.bWaktu = true;
    }
  }

  function toRp(angka){
    var rev     = parseInt(angka, 10).toString().split('').reverse().join('');
    var rev2    = '';
    for(var i = 0; i < rev.length; i++){
        rev2  += rev[i];
        if((i + 1) % 3 === 0 && i !== (rev.length - 1)){
            rev2 += '.';
        }
    }
    return 'Rp. ' + rev2.split('').reverse().join('') + ',00';
  }

  function checkInput(){
    var bln=findAndReplace($('#setor').val(),".","");    
    var setoran_bulanan = parseInt(bln);
    var jangka_waktu = $('#waktu').val();

    console.log(window.bWaktu);
    console.log(window.bSetor);
    if(setoran_bulanan > 0 && jangka_waktu > 0 && window.bSetor && window.bWaktu){
        $('#btnHitung').prop('disabled', false);
    }else{
        $('#btnHitung').prop('disabled', true);
    }
  }

  function hitung(){
    var bln=findAndReplace($('#setor').val(),".","");    
    var setoran_bulanan = parseInt(bln);
    var jangka_waktu = $('#waktu').val();
    var bunga_thn = ($('#bunga').val()+"."+$('#bungaa').val())/100;
    var bunga_bln = bunga_thn/12;
    var bunga = setoran_bulanan * bunga_bln;
    var total_dana = setoran_bulanan + bunga;

    for (var i = 1; i < jangka_waktu; i++) {
      var ul = total_dana + setoran_bulanan;
      bunga = ul * bunga_bln;
      total_dana = ul +bunga;


      console.log("no = "+(i+1));
      console.log("setoran = "+ul);
      console.log("bunga = "+bunga);
      console.log("total = " + total_dana);
    }
    

    $('#input').hide();
    $('#hasil').show();

    $('#hasil_setor').text(toRp(Math.round(setoran_bulanan)));
    $('#hasil_bunga').text(toRp(Math.round(bunga)));
    $('#hasil_waktu').text(jangka_waktu + " Bulan");
    $('#hasil_total').text(toRp(Math.round(total_dana)));
  }
</script><style>
  w{
    color: white;  
  }  
</style> 

end script -->