<div class="content-wrapper">
    <!-- Duyuru Arama Bölümü -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Duyuru Arama</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= SITE ?>">Anasayfa</a></li>
                        <li class="breadcrumb-item active">Duyuru Arama</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="#" method="post" enctype="multipart/form-data">
                        <div class="col-md-12">
                            <div class="card-body card card-primary">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Başlık</label>
                                            <input type="text" class="form-control" placeholder="Başlık ..." name="baslik">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Başlama Tarihi</label>
                                                    <input type="date" class="form-control" name="baslama_tarihi">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Bitiş Tarihi</label>
                                                    <input type="date" class="form-control" name="bitis_tarihi">
                                                </div>
                                            </div>
                                            <div class="col-md-12 text-center">
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-primary">ARA</button>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.col-md-8 -->
                    </form>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    <!-- Duyuru Ekle Bölümü -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <a href="<?= SITE ?>duyuru_ekle" class="btn btn-success" style="float:right; margin-bottom=10px;"><i class="fa fa-plus"></i> DUYURU EKLE</a>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    <!-- Duyuru Listele Bölümü -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12"><br></div>
            </div>

            <div class="card">
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Başlık</th>
                                <th>Başlama Tarihi</th>
                                <th>Bitiş Tarihi</th>
                                <th>İşlemler</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="width: 50%;">Duyuru Başlığı 1</td>
                                <td>01.08.2023</td>
                                <td>10.08.2023</td>
                                <td>
                                    <a href="<?= SITE ?>duyuru_duzenle/1" class="btn btn-warning btn-sm" style="width: 40%;">Düzenle</a>
                                    <a href="<?= SITE ?>duyuru_sil/1" class="btn btn-danger btn-sm" style="width: 40%;">Sil</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="width: 50%;">Duyuru Başlığı 2</td>
                                <td>05.08.2023</td>
                                <td>15.08.2023</td>
                                <td>
                                    <a href="<?= SITE ?>duyuru_duzenle/2" class="btn btn-warning btn-sm" style="width: 40%;">Düzenle</a>
                                    <a href="<?= SITE ?>duyuru_sil/2" class="btn btn-danger btn-sm" style="width: 40%;">Sil</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="width: 50%;">Duyuru Başlığı 3</td>
                                <td>10.08.2023</td>
                                <td>20.08.2023</td>
                                <td>
                                    <a href="<?= SITE ?>duyuru_duzenle/3" class="btn btn-warning btn-sm" style="width: 40%;">Düzenle</a>
                                    <a href="<?= SITE ?>duyuru_sil/3" class="btn btn-danger btn-sm" style="width: 40%;">Sil</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="width: 50%;">Duyuru Başlığı 4</td>
                                <td>15.08.2023</td>
                                <td>25.08.2023</td>
                                <td>
                                    <a href="<?= SITE ?>duyuru_duzenle/4" class="btn btn-warning btn-sm" style="width: 40%;">Düzenle</a>
                                    <a href="<?= SITE ?>duyuru_sil/4" class="btn btn-danger btn-sm" style="width: 40%;">Sil</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="width: 50%;">Duyuru Başlığı 5</td>
                                <td>20.08.2023</td>
                                <td>30.08.2023</td>
                                <td>
                                    <a href="<?= SITE ?>duyuru_duzenle/5" class="btn btn-warning btn-sm" style="width: 40%;">Düzenle</a>
                                    <a href="<?= SITE ?>duyuru_sil/5" class="btn btn-danger btn-sm" style="width: 40%;">Sil</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="width: 50%;">Duyuru Başlığı 6</td>
                                <td>25.08.2023</td>
                                <td>05.09.2023</td>
                                <td>
                                    <a href="<?= SITE ?>duyuru_duzenle/6" class="btn btn-warning btn-sm" style="width: 40%;">Düzenle</a>
                                    <a href="<?= SITE ?>duyuru_sil/6" class="btn btn-danger btn-sm" style="width: 40%;">Sil</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="width: 50%;">Duyuru Başlığı 7</td>
                                <td>30.08.2023</td>
                                <td>10.09.2023</td>
                                <td>
                                    <a href="<?= SITE ?>duyuru_duzenle/7" class="btn btn-warning btn-sm" style="width: 40%;">Düzenle</a>
                                    <a href="<?= SITE ?>duyuru_sil/7" class="btn btn-danger btn-sm" style="width: 40%;">Sil</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="width: 50%;">Duyuru Başlığı 8</td>
                                <td>05.09.2023</td>
                                <td>15.09.2023</td>
                                <td>
                                    <a href="<?= SITE ?>duyuru_duzenle/8" class="btn btn-warning btn-sm" style="width: 40%;">Düzenle</a>
                                    <a href="<?= SITE ?>duyuru_sil/8" class="btn btn-danger btn-sm" style="width: 40%;">Sil</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="width: 50%;">Duyuru Başlığı 9</td>
                                <td>10.09.2023</td>
                                <td>20.09.2023</td>
                                <td>
                                    <a href="<?= SITE ?>duyuru_duzenle/9" class="btn btn-warning btn-sm" style="width: 40%;">Düzenle</a>
                                    <a href="<?= SITE ?>duyuru_sil/9" class="btn btn-danger btn-sm" style="width: 40%;">Sil</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="width: 50%;">Duyuru Başlığı 10</td>
                                <td>15.09.2023</td>
                                <td>25.09.2023</td>
                                <td>
                                    <a href="<?= SITE ?>duyuru_duzenle/10" class="btn btn-warning btn-sm" style="width: 40%;">Düzenle</a>
                                    <a href="<?= SITE ?>duyuru_sil/10" class="btn btn-danger btn-sm" style="width: 40%;">Sil</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="width: 50%;">Duyuru Başlığı 11</td>
                                <td>20.09.2023</td>
                                <td>30.09.2023</td>
                                <td>
                                    <a href="<?= SITE ?>duyuru_duzenle/11" class="btn btn-warning btn-sm" style="width: 40%;">Düzenle</a>
                                    <a href="<?= SITE ?>duyuru_sil/11" class="btn btn-danger btn-sm" style="width: 40%;">Sil</a>
                                </td>
                            </tr>

                            <!-- Diğer duyurular da aynı şekilde devam edecek -->
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