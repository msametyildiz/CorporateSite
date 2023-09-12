<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Kullanıcı Yetkilendirme Formu</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= SITE ?>">Anasayfa</a></li>
                        <li class="breadcrumb-item active">Kullanıcı Yetkilendirme Formu</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Form -->
            <div class="row">
                <div class="col-md-10">
                    <div class="card-body card ">
                        <div class="card-header">
                            <h3 class="card-title" style="font-weight:bold;">Kullanıcı Bilgileri</h3>
                        </div>
                        <!-- /.card-header -->
                        <form action="#" method="post" enctype="multipart/form-data">
                            <div class="card-body">
                                <!-- Çalıştığı Birim -->
                                <div class="form-group">
                                    <label>Çalıştığı Birim</label>
                                    <select class="form-control" name="calistigi_birim">
                                        <option value="Avrupa Birliği Ve Dış İlişkiler Genel Müdürlüğü">Avrupa Birliği Ve Dış İlişkiler Genel Müdürlüğü</option>
                                        <option value="Bilgi İşlem Dairesi Başkanlığı">Bilgi İşlem Dairesi Başkanlığı</option>
                                        <option value="Sanayi Genel Müdürlüğü">Sanayi Genel Müdürlüğü</option>
                                        <option value="Metroloji ve Sanayi Ürünleri Güvenliği Genel Müdürlüğü">Metroloji ve Sanayi Ürünleri Güvenliği Genel Müdürlüğü</option>
                                        <option value="Stratejik Araştırmalar ve Verimlilik Genel Müdürlüğü">Stratejik Araştırmalar ve Verimlilik Genel Müdürlüğü</option>
                                        <option value="Sanayi Bölgeleri Genel Müdürlüğü">Sanayi Bölgeleri Genel Müdürlüğü</option>
                                        <option value="Yönetim Hizmetleri Genel Müdürlüğü">Yönetim Hizmetleri Genel Müdürlüğü</option>
                                        <option value="Strateji Geliştirme Başkanlığı">Strateji Geliştirme Başkanlığı</option>
                                        <option value="Ar-Ge Teşvikleri Genel Müdürlüğü">Ar-Ge Teşvikleri Genel Müdürlüğü</option>
                                        <option value="Teşvik Uygulama ve Yabancı Sermaye Genel Müdürlüğü">Teşvik Uygulama ve Yabancı Sermaye Genel Müdürlüğü</option>
                                        <option value="Milli Teknoloji Genel Müdürlüğü">Milli Teknoloji Genel Müdürlüğü</option>
                                        <!-- İhtiyaç duyulan diğer birimleri burada listelemeye devam edebilirsiniz -->
                                    </select>
                                </div>
                                <!-- Kurumsal Mail -->
                                <div class="form-group">
                                    <label>Kurumsal Mail</label>
                                    <input type="email" class="form-control" placeholder="Kurumsal Mail..." name="kurumsal_mail">
                                </div>
                                <!-- Kullanıcı Adı -->
                                <div class="form-group">
                                    <label>Kullanıcı Adı</label>
                                    <input type="text" class="form-control" placeholder="Kullanıcı Adı..." name="kullanici_adi">
                                </div>
                                <!-- Şifre -->
                                <div class="form-group">
                                    <label>Şifre</label>
                                    <input type="password" class="form-control" placeholder="Şifre..." name="sifre">
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Kaydet</button>
                            </div>
                            <!-- /.card-footer -->
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col-md-10 -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
