<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Ekip Üyeleri</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=SITE?>">Anasayfa</a></li>
              <li class="breadcrumb-item active">Ekip Üyeleri</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

       <!-- Main content -->

       <section class="content">

<div class="container-fluid">

  <div class="row">

    <div class="col-md-12">

      <a href="<?= SITE ?>ekip-uyeleri-ekle" class="btn btn-success" style="float:right; margin-bottom=10px;"><i class="fa fa-plus"></i>YENİ EKLE</a>

    </div>
    <div class="col-md-12"><br></div>

  </div>

  <div class="card">

    <!-- /.card-header -->

    <div class="card-body">

      <table id="example1" class="table table-bordered table-striped">

        <thead>

          <tr>

            <th style="width:50px;">Sıra</th>

            <th>Ad Soyad</th>
            
            <th>Unvan</th>

            <th style="width:50px;">Durum</th>

            <th style="width:80px;">Tarih</th>

            <th style="width:120px;">İşlem</th>

          </tr>

        </thead>

        <tbody>

          <!-----------------------------------------------------------PHP--------------------------------------------------------------------------->

          <?php

          $veriler = $VT->VeriGetir("team", "", "", "ORDER BY ID ASC");

          if ($veriler != false) {

            $sira = 0;

            for ($i = 0; $i < count($veriler); $i++) {

              $sira++;

              if ($veriler[$i]["durum"] == 1) {
                $aktifpasif = 'checked="checked"';
              } else {
                $aktifpasif = '';
              }

          ?>

              <tr>

                <td><?= $sira ?></td>

                <td><?php

                    echo stripslashes($veriler[$i]["adsoyad"]); //stripslashes -->html taglarını temizlemiyor

                    ?>
                </td>
                <td><?php

                    echo stripslashes($veriler[$i]["unvan"]); //stripslashes -->html taglarını temizlemiyor

                    ?>
                </td>
                <td>

                  <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">

                    <input type="checkbox" class="custom-control-input aktifpasif<?= $veriler[$i]["ID"] ?>" id="customSwitch3<?= $veriler[$i]["ID"] ?>" <?= $aktifpasif ?> value="<?= $veriler[$i]["ID"] ?>" onclick="aktifpasif(<?= $veriler[$i]['ID'] ?>,'<?= $kontrol[0]['tablo'] ?>')" ;>

                    <label class="custom-control-label" for="customSwitch3<?= $veriler[$i]["ID"] ?>"></label>

                  </div>

                </td>

                <td><?= $veriler[$i]["date"] ?></td>

                <td>

                  <a href="<?= SITE ?>ekip-duzenle/<?= $veriler[$i]["ID"] ?>" class="btn btn-warning btn-sm">Düzenle</a>

                  <a href="<?= SITE ?>sil/<?= $kontrol[0]["tablo"] ?>/<?= $veriler[$i]["ID"] ?>" class="btn btn-danger btn-sm">Kaldır</a>

                </td>

              </tr>

          <?php

            }
          }



          ?>

          <!-----------------------------------------------------------/PHP--------------------------------------------------------------------------->



        </tbody>

        
      </table>

    </div>

    <!-- /.card-body -->

  </div>

  <!-- /.card -->





</div><!-- /.container-fluid -->

</section>

<!-- /.content -->
  </div>