<?php
if (!empty($_GET["tablo"]) && !empty($_GET["ID"])) {

  $tablo = $VT->filter($_GET["tablo"]);
  $ID = $VT->filter($_GET["ID"]);
  $kontrol = $VT->VeriGetir("moduller", "WHERE tablo=? ", array($tablo), "ORDER BY ID ASC", 1);
  
  if ($kontrol != false) {
    $veri = $VT->VeriGetir("userblog", "WHERE ID=?", array($ID), "ORDER BY ID ASC", 1);
    if ($veri != false) {
?>


      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0"><?= $kontrol[0]["baslik"] ?> Düzenleme Sayfası</h1>
              </div><!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="<?= SITE ?>">Anasayfa</a></li>
                  <li class="breadcrumb-item active"><?= $kontrol[0]["baslik"] ?></li>
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
                <a href="<?= SITE ?>liste/<?= $kontrol[0]["tablo"] ?>" class="btn btn-info" style="float:right; margin-bottom=10px; margin-left:10px;"><i class="fa fa-bars"></i> LİSTE</a>
              </div>
            </div>
            <!----------------------------------------------------------------------------------------------------------------------------------->
            <?php
            if ($_POST) {
              if (!empty($_POST["kategori"]) && !empty($_POST["baslik"]) && !empty($_POST["anahtar"]) && !empty($_POST["description"]) && !empty($_POST["sirano"])) {
                $kategori = $VT->filter($_POST["kategori"]);
                $baslik = $VT->filter($_POST["baslik"]);
                $anahtar = $VT->filter($_POST["anahtar"]);
                $selflink = $VT->selflink($baslik);
                $description = $VT->filter($_POST["description"]);
                $sirano = $VT->filter($_POST["sirano"]);
                $metin = $VT->filter($_POST["metin"], true); //true yazılmasının sebebi editor kullnıldığı için html komutlarını temizlemesini istemiyorum

                foreach ($_FILES["resim"]["name"] as $key => $value) {
                  if (!empty($_FILES["resim"]["name"])) {
                    $yukle = $VT->upload("resim", "../images/" . $kontrol[0]["tablo"] . "/");
                    if ($yukle != false) {
                      $ekle = $VT->SorguCalistir("UPDATE " . $kontrol[0]["tablo"], "SET baslik=?, selflink=?, kategori=?, metin=?, resim=?, anahtar=?, description=?, durum=?,sirano=?,tarih=? WHERE ID=?", array($baslik, $selflink, $kategori, $metin, $yukle, $anahtar, $description, 1, $sirano, date("Y-m-d"), $veri[0]["ID"]));
                    } else { ?>
                      <div class="alert alert-info">! RESİM YÜKLEME İŞLEMİNİZ BAŞARISIZ !</div>
                <?php
                    }
                  } else {
                    $ekle = $VT->SorguCalistir("UPDATE " . $kontrol[0]["tablo"], "SET baslik=?, selflink=?, kategori=?, metin=?, anahtar=?, description=?, durum=?, sirano=?, tarih=? WHERE ID=?", array($baslik, $selflink, $kategori, $metin, $anahtar, $description, 1, $sirano, date("Y-m-d"), $veri[0]["ID"]));
                  }
                }

                ?>

                <?php

                if ($ekle != false) {
                  $veri = $VT->VeriGetir($kontrol[0]["tablo"], "WHERE ID=?", array($veri[0]["ID"]), "ORDER BY ID ASC", 1);
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
                        <input type="text" class="form-control" placeholder="Ad Soyad ..." name="adsoyad" value="<?= stripslashes($veri[0]["adsoyad"]) ?>">
                      </div>
                    </div>
                    <!-- Text area-->
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Açıklama</label>
                        <textarea id="summernote" name="aciklama" placeholder="  Text Area  " style="width:100%; height:450px; line-height:18px; font-size:14px; border:1px solid #dddddd; padding:10px;">
                                <?= stripslashes($veri[0]["aciklama"]) ?>
                        </textarea>
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
                        <div>
                            <a href="#"><img src="<?=SITE?>/images/<?=$veri[0]["resim"]?>" alt="Örnek Resim" /></a>
                        </div>
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
    } else {
    ?>
      <meta http-equiv="refresh" content="0;url=<?= SITE ?>liste/<?= $kontrol[0]["tablo"] ?>">
    <?php
    }
  } else {
    ?>
    <meta http-equiv="refresh" content="0;url=<?= SITE ?>">
  <?php

  }
} else {
  ?>
  <meta http-equiv="refresh" content="0;url=<?= SITE ?>">
<?php
}
?>