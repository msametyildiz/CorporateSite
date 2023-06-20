<?php
if (!empty($_GET["ID"])) {

  $ID = $VT->filter($_GET["ID"]);
  $kontrol = $VT->VeriGetir("team", "WHERE durum=? AND ID=?", array(1,$ID), "ORDER BY ID ASC", 1);
  
  if ($kontrol != false) {
?>


      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0"><?= $kontrol[0]["adsoyad"] ?> Düzenleme Sayfası</h1>
              </div><!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="<?= SITE ?>">Anasayfa</a></li>
                  <li class="breadcrumb-item active"><?= $kontrol[0]["adsoyad"] ?></li>
                </ol>
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                <a href="<?= SITE ?>ekip-uyeleri" class="btn btn-info" style="float:right; margin-bottom=10px; margin-left:10px;"><i class="fa fa-bars"></i> LİSTE</a>
              </div>
            </div>
            <!----------------------------------------------------------------------------------------------------------------------------------->
            <?php
            if ($_POST) {
              if (!empty($_POST["adsoyad"]) && !empty($_POST["unvan"]) && !empty($_POST["instagram"]) && 
              !empty($_POST["twitter"]) && !empty($_POST["facebook"])) {
                $adsoyad = $VT->filter($_POST["adsoyad"]);
                $unvan = $VT->filter($_POST["unvan"]);
                $instagram = $VT->filter($_POST["instagram"]);
                $facebook = $VT->filter($_POST["facebook"]);
                $twitter = $VT->filter($_POST["twitter"]);
                
                /*foreach ($_FILES["resim"]["name"] as $key => $value) {
                  if (!empty($_FILES["resim"]["name"])) {
                    $yukle = $VT->upload("resim", "../images/" . $kontrol[0]["adsoyad"] . "/");
                    if ($yukle != false) {
                      $ekle = $VT->SorguCalistir("UPDATE team", "SET adsoyad=?, unvan=?, instagram=?,facebook=?, twitter=?,resim=? , date=?, WHERE ID=?", 
                      array($adsoyad, $unvan, $instagram, $facebook, $twitter, $yukle,date("Y-m-d"), $kontrol[0]["ID"]));
                    } else { ?>
                      <div class="alert alert-info">! RESİM YÜKLEME İŞLEMİNİZ BAŞARISIZ !</div>
                <?php
                    }
                  } else {*/
                    $ekle = $VT->SorguCalistir("UPDATE team", "SET adsoyad=?, unvan=?, instagram=?,facebook=?, twitter=?, date=?, WHERE ID=?",array($adsoyad, $unvan, $instagram, $facebook, $twitter, date("Y-m-d"), $kontrol[0]["ID"]));}
                /*}

                ?>

                <?php
*/
                if ($ekle != false) {
                  $veri = $VT->VeriGetir($kontrol[0]["adsoyad"], "WHERE ID=?", array($kontrol[0]["ID"]), "ORDER BY ID ASC", 1);
                ?>
                  <div class="alert alert-success">İŞLEMLER BAŞARIYLA KAYDEDİLDİ ...</div>
                <?php
                } else {
                ?>
                  <div class="alert alert-danger">! İŞLEM SIRASINDA BİR SORUNLA KARŞILAŞILDI. LÜTFEN DAHA SONRA TEKRAR DENEYİNİZ !</div>
                <?php
                }
              } else {
                ?>
                <div class="alert alert-danger">! BOŞ BIRAKILAN ALANLARI DOLDURUNUZ !</div>
            <?php
              }
            }
            ?>
            <!----------------------------------------------------------------------------------------------------------------------------------->
            <!-- SELECT2 EXAMPLE -->
            <!-- /.card-header -->,
            <form action="#" method="post" enctype="multipart/form-data">
              <div class="col-md-8">
                <div class="card-body card card-primary">
                  <div class="row">
                    

                    <!-- header in form -->
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Ad Soyad</label>
                        <input type="text" class="form-control" placeholder="Ad Soyad ..." name="adsoyad" value="<?= stripslashes($kontrol[0]["adsoyad"]) ?>">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Unvan</label>
                        <input type="text" class="form-control" placeholder="Unvan ..." name="unvan" value="<?= stripslashes($kontrol[0]["unvan"]) ?>">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Facebook</label>
                        <input type="text" class="form-control" placeholder="Facebook ..." name="facebook" value="<?= stripslashes($kontrol[0]["facebook"]) ?>">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Twitter</label>
                        <input type="text" class="form-control" placeholder="Twitter ..." name="twitter" value="<?= stripslashes($kontrol[0]["twitter"]) ?>">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Instagram</label>
                        <input type="text" class="form-control" placeholder="Instagram ..." name="instagram" value="<?= stripslashes($kontrol[0]["instagram"]) ?>">
                      </div>
                    </div>                 
                    <!--pictures  -->
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Resimler</label>
                        <input type="file" class="form-control" placeholder="Resim Seçiniz ..." name="resim[]" multiple>
                      </div>
                    </div>
                    
                    <div class="col-md-12">
                      <div class="form-group">
                        <button type="submit" class="btn btn-block btn-primary">KAYDET</button>
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
    } 
   else {
  ?>
  <meta http-equiv="refresh" content="0;url=<?= SITE ?>">
<?php
}
?>