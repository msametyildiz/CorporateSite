<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Eğitim Başvuru Formu</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <form action="#" method="post" enctype="multipart/form-data">
                        <div class="card-body card card-primary">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Eğitimi Uygulayacak Birim</label>
                                        <select class="form-control select2" style="width: 100%;" name="egitim_birimi">
                                            <option value="Milli Teknoloji Genel Müdürlüğü">Milli Teknoloji Genel Müdürlüğü</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Eğitime Katılacak Personel Birimi </label>
                                        <select class="form-control select2" style="width: 100%;" name="egitim_birimi">
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
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Eğitimin Konusu</label>
                                        <select class="form-control select2" style="width: 100%;" name="egitim_konusu">
                                            <option value="EBYS Eğitimi">EBYS Eğitimi</option>
                                            <option value="Ekip Yönetimi Eğitimi">Ekip Yönetimi Eğitimi</option>
                                            <option value="İletişim Becerileri Eğitimi">İletişim Becerileri Eğitimi</option>
                                            <option value="Liderlik ve Motivasyon Eğitimi">Liderlik ve Motivasyon Eğitimi</option>
                                            <option value="Zaman Yönetimi Eğitimi">Zaman Yönetimi Eğitimi</option>
                                            <option value="Proje Yönetimi Eğitimi">Proje Yönetimi Eğitimi</option>
                                            <option value="Problem Çözme ve Karar Verme Eğitimi">Problem Çözme ve Karar Verme Eğitimi</option>
                                            <option value="Müşteri İlişkileri Yönetimi Eğitimi">Müşteri İlişkileri Yönetimi Eğitimi</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Toplantı Bilgileri</label>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <input type="text" class="form-control" placeholder="Toplantı Kimliği" name="toplanti_kimligi" value="123456789">
                                            </div>
                                            <div class="col-md-3">
                                                <input type="text" class="form-control" placeholder="Toplantı Parolası" name="mysecretpassword" value="mysecretpassword">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" placeholder="Toplantı URL" name="https://example.com/meeting-room" value="https://example.com/meeting-room">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Eğitim Tarihi</label>
                                                <input type="text" class="form-control" name="baslama_tarihi" value="2023-08-15">
                                            </div>
                                        </div>
                                        

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Katılımcı Sayısı</label>
                                                <input type="number" class="form-control" placeholder="Katılımcı Sayısı" name="katilimci_sayisi">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 text-center">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">BAŞVURU YAP</button>
                                    </div>
                                </div>
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.card-body -->
                    </form>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>