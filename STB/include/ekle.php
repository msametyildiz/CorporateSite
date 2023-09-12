

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Ekle Sayfası</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?= SITE ?>">Anasayfa</a></li>
                <li class="breadcrumb-item active">Ekle Sayfası</li>
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
              <a href="<?= SITE ?>liste" class="btn btn-info" style="float:right; margin-bottom=10px; margin-left:10px;"><i class="fa fa-bars"></i> LİSTE</a>
            </div>
          </div>
          <div class="col-md-12"><br></div>
         
          <form action="#" method="post" enctype="multipart/form-data">
            <div class="col-md-8">
              <div class="card-body card card-primary">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Kategori Seç</label>
                      <select class="form-control select2" style="width: 100%;" name="kategori">
                      
                        
                      </select>
                    </div>
                    <!-- /.col -->
                  </div>

                  <!-- header in form -->
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Başlık</label>
                      <input type="text" class="form-control" placeholder="Başlık ..." name="baslik">
                    </div>
                  </div>
                  <!-- Text area-->
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Açıklama</label>
                      <textarea id="summernote" name="metin" placeholder="  Text Area  " style="width:100%; height:450px; line-height:18px; font-size:14px; border:1px solid #dddddd; padding:10px;"></textarea>
                    </div>
                  </div>
                  <!--keywords  -->
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Anahtar Kelimeler</label>
                      <input type="text" class="form-control" placeholder="Anahtar Kelimeler ..." name="anahtar">
                    </div>
                  </div>
                  <!--description  -->
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Description</label>
                      <input type="text" class="form-control" placeholder="Description ..." name="description">
                    </div>
                  </div>
                  <!--pictures  -->
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Resimler</label>
                      <input type="file" class="form-control" placeholder="Resim Seçiniz ..." name="resim" multiple>
                    </div>
                  </div>
                  <!--Serial no  -->
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Sıra no</label>
                      <input type="number" class="form-control" placeholder="Sıra No ..." name="sirano" style="width:100px;">
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

