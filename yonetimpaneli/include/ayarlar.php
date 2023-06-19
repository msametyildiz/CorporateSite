<?php
  $kontrol = $VT->VeriGetir("smtpayarlar", "WHERE durum=?", array(1), "ORDER BY ID ASC", 1);
  if ($kontrol != false) {
?>
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">SMTP Mail Server Ayarları</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?=SITE?>">Anasayfa</a></li>
          <li class="breadcrumb-item active">SMTP Mail Server Ayarları</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

  <section class="content">
    <div class="container-fluid">
      
<!----------------------------------------------------------------------------------------------------------------------------------->
<?php 
if($_POST){
  if(!empty($_POST["username"]) && !empty($_POST["password"]) && !empty($_POST["port"]) && !empty($_POST["setFrom"]) &&!empty($_POST["addAddress"])&& !empty($_POST["setFromName"]) &&!empty($_POST["addAddressName"])){
        $username=$VT->filter($_POST["username"]);
        $password=$VT->filter($_POST["password"]);
        $port=$VT->filter($_POST["port"]);
        $setFrom=$VT->filter($_POST["setFrom"]);
        $addAddress=$VT->filter($_POST["addAddress"]);
        $setFromName=$VT->filter($_POST["setFromName"]);
        $addAddressName=$VT->filter($_POST["addAddressName"]);
        $guncelle=$VT->SorguCalistir("UPDATE smtpayarlar","SET username=?, password=?, port=?, setFrom=? , addAddress=?, setFromName=? , addAddressName=?, date=? WHERE ID=?",
        array($username,$password,$port,$setFrom,$addAddress,$setFromName,$addAddressName,date("y-m-d"),1),1);
        if($guncelle!=false){
              ?>
                <div class="alert alert-success">İŞLEMLER BAŞARIYLA KAYDEDİLDİ ...</div>
                <meta http-equiv="refresh" content="0;url=<?=SITE?>ayarlar"/>
              <?php
        }
        else{
              ?>
              <div class="alert alert-danger">! İŞLEM SIRASINDA BİR SORUNLA KARŞILAŞILDI. LÜTFEN DAHA SONRA TEKRAR DENEYİNİZ !</div>
              <?php
        }
  }
  else{
        ?>
        <div class="alert alert-danger">! BOŞ BIRAKILAN ALANLARI DOLDURUNUZ !</div>
        <?php
  }
}
?>
<!----------------------------------------------------------------------------------------------------------------------------------->

      <form action="#" method="post" enctype="multipart/form-data">
      <div class="col-md-8">
      <div class="card-body card card-primary">
        <div class="row">
          

            <!-- header in form -->
            <div class="col-md-12">
                <div class="form-group">
                  <label>SMTP Username</label>
                  <input type="text" class="form-control" placeholder="SMTP username ..." name="username" value="<?=$kontrol[0]["username"]?>">
                </div>
            </div>
            
             <!--mail  -->
            <div class="col-md-12">
                <div class="form-group">
                  <label>SMTP Password</label>
                  <input type="text" class="form-control" placeholder="SMTP Password ..." name="password" value="<?=$kontrol[0]["password"]?>">
                </div>
            </div>
            <!--adres  -->
            <div class="col-md-12">
                <div class="form-group">
                  <label>Port</label>
                  <input type="text" class="form-control" placeholder="Port ..." name="port" value="<?=$kontrol[0]["port"]?>">
                </div>
            </div>
            <!--description  -->
            <div class="col-md-12">
                <div class="form-group">
                  <label>Recipients SetFrom</label>
                  <input type="text" class="form-control" placeholder="Recipients SetFrom ..." name="setFrom" value="<?=$kontrol[0]["setFrom"]?>">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                  <label>Recipients SetFrom Name</label>
                  <input type="text" class="form-control" placeholder="Recipients SetFrom Name..." name="setFromName" value="<?=$kontrol[0]["setFromName"]?>">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                  <label>Recipients AddAddress</label>
                  <input type="text" class="form-control" placeholder="Recipients AddAddress ..." name="addAddress" value="<?=$kontrol[0]["addAddress"]?>">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                  <label>Recipients AddAddress Name</label>
                  <input type="text" class="form-control" placeholder="Recipients AddAddress Name ..." name="addAddressName" value="<?=$kontrol[0]["addAddressName"]?>">
                </div>
            </div>
            <!--button  -->
            <div class="col-md-12">
                <div class="form-group">
                    <button type="submit" class="btn btn-block btn-primary">Güncelle</button>
                </div>
            </div>
            <!-- /.row -->
      </div>
      <!-- /.card-body -->
      
    </div>
    <!-- /.card --> 
  </div>
  </form>

<!----------------------------------------------------------------------------------------------------------------------------------->

  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<?php
  } else {
  ?>
    <meta http-equiv="refresh" content="0;url=<?= SITE ?>">
  <?php

  }

?>