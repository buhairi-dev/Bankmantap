<?php include 'layout/header.php';?>
 

<section id="img-header" class="img-header">
<img src="asset/slider3.png">
<ul class="breadcrumb">
<div class="container">
  <li><a href="#">Home</a></li>
  <li>Tentang Kami</li>
  <li>Manajemen</li>
</div>
</ul>
</section>


<style>


.manage{
    border: none;
    width: 300px;
    height: 50px;
    text-align:center;
    margin-top:15px;
   
    letter-spacing: var(--unnamed-character-spacing-0);
    color: var(--darkblue-0f2b5b);
    font-size:24px;
    font-family:roboto;
    font: normal normal medium 24px/54px Roboto;
    letter-spacing: 0px;
    color: #0F2B5B;
}

.nav-link.manage:hover{
    border: none;
    color: #FFF;
    border-bottom: 3px solid #0F2B5B;
    background-color:#0F2B5B;

}

.nav-link.manage.active {
    border: none;
    border-bottom: 3px solid #0F2B5B;
}
</style>

<div class="container mt-3 mb-5">
 
  <!-- Nav tabs -->
  <ul class="nav nav-tabs taps" role="tablist">
    <li class="nav-item">
      <a class="nav-link manage active" data-toggle="tab" href="#home">Dewan Komisaris</a>
    </li>
    <li class="nav-item">
      <a class="nav-link manage" data-toggle="tab" href="#menu1">Direksi</a>
    </li>
    <li class="nav-item">
      <a class="nav-link manage" data-toggle="tab" href="#menu2">Seketaris Perusahaan</a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="home" class="container tab-pane active"><br>
    <div class="row">
        
        <div class="col-lg-4">
        <div class="card bg-white text-white">
        <img src="asset/dewankomisaris_01.png" class="card-img" alt="..." style="width: 22rem; box-shadow: 0px 20px 40px #00000014; border-radius: 16 px 16px; height:25rem;">
        <div class="card-img-overlay" style="margin-top:86%;">
        <p class="card-text" style="font-size: 20px; font-weight: 500;" data-toggle="modal" data-target="#myModal"><!-- nama pejabat --> Abdul Rahman</p>
        <p class="card-text" style="font-size: 12px;"><!-- jabatam --></p>
        </div>
        </div>
        </div>

        <div class="col-lg-4">
        <div class="card bg-white text-white">
        <img src="asset/dewankomisaris_02.png" class="card-img" alt="..." style="width: 22rem; box-shadow: 0px 20px 40px #00000014; border-radius: 16 px 16px; height:25rem;">
        <div class="card-img-overlay" style="margin-top:86%;">
        <p class="card-text" style="font-size: 20px; font-weight: 500;"><!-- nama pejabat --></p>
        <p class="card-text" style="font-size: 12px;"><!-- jabatam --></p>
        </div>
        </div>
        </div>

        <div class="col-lg-4">
        <div class="card bg-white text-white">
        <img src="asset/dewankomisaris_03.png" class="card-img" alt="..." style="width: 22rem; box-shadow: 0px 20px 40px #00000014; border-radius: 16 px 16px; height:25rem;">
        <div class="card-img-overlay" style="margin-top:86%;">
        <p class="card-text" style="font-size: 20px; font-weight: 500;"><!-- nama pejabat --></p>
        <p class="card-text" style="font-size: 12px;"><!-- jabatam --></p>
        </div>
        </div>
        </div>

    </div>
                 
    <div class="row mt-4">

        <div class="col-lg-4">
        <div class="card bg-white text-white">
        <img src="asset/dewankomisaris_04.png" class="card-img" alt="..." style="width: 22rem; box-shadow: 0px 20px 40px #00000014; border-radius: 16 px 16px; height:25rem;">
        <div class="card-img-overlay" style="margin-top:86%;">
        <p class="card-text" style="font-size: 20px; font-weight: 500;"><!-- nama pejabat --></p>
        <p class="card-text" style="font-size: 12px;"><!-- jabatam --></p>
        </div>
        </div>
        </div>
        </div>

    </div>




    <div id="menu1" class="container tab-pane fade"><br>
    <div class="row">
                    <div class="col-lg-4">
                    <div class="card bg-white text-white">
                    <img src="asset/dewankomisaris_01.png" class="card-img" alt="..."
                    style="width: 22rem; box-shadow: 0px 20px 40px #00000014; border-radius: 16 px 16px; height:25rem;">
                        <div class="card-img-overlay" style="margin-top:86%;">
                            <p class="card-text" style="font-size: 20px; font-weight: 500;"><!-- nama pejabat --></p>
                            <p class="card-text" style="font-size: 12px;"><!-- jabatam --></p>
                        </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                    <div class="card bg-white text-white">
                    <img src="asset/dewankomisaris_02.png" class="card-img" alt="..."
                    style="width: 22rem; box-shadow: 0px 20px 40px #00000014; border-radius: 16 px 16px; height:25rem;">
                        <div class="card-img-overlay" style="margin-top:86%;">
                            <p class="card-text" style="font-size: 20px; font-weight: 500;"><!-- nama pejabat --></p>
                            <p class="card-text" style="font-size: 12px;"><!-- jabatam --></p>
                        </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                    <div class="card bg-white text-white">
                            <img src="asset/dewankomisaris_03.png" class="card-img" alt="..."
                            style="width: 22rem; box-shadow: 0px 20px 40px #00000014; border-radius: 16 px 16px; height:25rem;">
                        <div class="card-img-overlay" style="margin-top:86%;">
                            <p class="card-text" style="font-size: 20px; font-weight: 500;"><!-- nama pejabat --></p>
                            <p class="card-text" style="font-size: 12px;"><!-- jabatam --></p>
                        </div>
                    </div>
                    </div>

                </div>
                 
                <div class="row mt-4">

                <div class="col-lg-4">
               
                </div>
                </div>
    </div>
    <div id="menu2" class="container tab-pane fade"><br>
    <div class="row">
                    <div class="col-lg-4">
                    <div class="card bg-white text-white">
                    <img src="asset/dewankomisaris_01.png" class="card-img" alt="..."
                    style="width: 22rem; box-shadow: 0px 20px 40px #00000014; border-radius: 16 px 16px; height:25rem;">
                        <div class="card-img-overlay" style="margin-top:86%;">
                            <p class="card-text" style="font-size: 20px; font-weight: 500;"><!-- nama pejabat --></p>
                            <p class="card-text" style="font-size: 12px;"><!-- jabatam --></p>
                        </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                    <div class="card bg-white text-white">
                    <img src="asset/dewankomisaris_02.png" class="card-img" alt="..."
                    style="width: 22rem; box-shadow: 0px 20px 40px #00000014; border-radius: 16 px 16px; height:25rem;">
                        <div class="card-img-overlay" style="margin-top:86%;">
                            <p class="card-text" style="font-size: 20px; font-weight: 500;"><!-- nama pejabat --></p>
                            <p class="card-text" style="font-size: 12px;"><!-- jabatam --></p>
                        </div>
                        </div>
                    </div>

                  

                </div>
                 
                <div class="row mt-4">

                <div class="col-lg-4">
                
                </div>
                </div>
    </div>
  </div>

</div>




 

 
    <style>
        .modal-dialog{
            width: 729px;
            height: 700px;
            background: #FFFFFF 0% 0% no-repeat padding-box;
            border-radius: 16px 16px 0px 0px;
            opacity: 1;
        }

        .modal-content{
            background: var(--yellow-fcd116) 0% 0% no-repeat padding-box;
            background: #FCD116 0% 0% no-repeat padding-box;
            border-radius: 16px 16px 0px 0px;
            opacity: 1;
        }
    </style>



        <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content">
            <div class="row">
                <div class="col-sm">
                <img class="card-img-top" src="asset/dewankomisaris_01.png">
                </div>
                <div class="col-sm">
                   <h3>Abdul Rahman</h3>
                   <p>Komisaris Utama</p>
                </div>
            </div>
            </div>
            
            <div class="row mt-5" sytle="font-size:10px;">
            <div class="col-sm-3 ml-4 text-left" style="color: #0F2B5B;">
                <p>Umur</p>
                <p>Warga Negara</p>
                <p>Domisili</p>
                <p>Pendidikan</p>
                
            </div>
            <div class="col-sm-3-right" style="width:70%;">
            <p>52 Tahun</p>
            <p>Indonesia</p>
            <p>Jakarta</p>
            <p>Sarjana Keuangan dan Akuntansi (jurusan ganda) dari University of Virginia, Charlottesville, Amerika Serikat (1995)</p>
          
            </div>
            
        </div>
        </div> </div>
            <!-- /.modal-content -->
    
 
<?php include 'layout/footer.php';?>