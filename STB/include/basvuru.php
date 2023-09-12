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
                                        <label>Eğitimi Hazırlayan Birim Adı</label>
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
                                        <label>Eğitim Konusu</label>
                                        <textarea class="form-control" rows="3" placeholder="Eğitim Konusu" name="egitim_konusu_text"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Toplantı Bilgisi</label>
                                        <input type="text" class="form-control" placeholder="Toplantı Bilgisi" name="toplanti_bilgisi">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Eğitim Uygulama Şekli</label>
                                        <select class="form-control" name="egitim_uygulama_sekli">
                                            <option value="Yüz Yüze Eğitim">Yüz Yüze Eğitim</option>
                                            <option value="Uzaktan Eğitim">Uzaktan Eğitim</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Eğer uzaktan eğitim seçilirse aşağıdaki alanlar görünecek -->
                                <div class="col-md-6" id="uzaktanEgitimAlanlari" style="display: none;">
                                    <div class="form-group">
                                        <label>Link Bilgisi</label>
                                        <input type="text" class="form-control" placeholder="Uzaktan Bağlantı URL" name="link_bilgisi">
                                    </div>
                                </div>

                                <script>
                                    document.querySelector('select[name="egitim_uygulama_sekli"]').addEventListener('change', function() {
                                        if (this.value === "Uzaktan Eğitim") {
                                            document.getElementById('uzaktanEgitimAlanlari').style.display = "block";
                                        } else {
                                            document.getElementById('uzaktanEgitimAlanlari').style.display = "none";
                                        }
                                    });
                                </script>
                                <!-- -->

                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Eğitim Başlama Tarihi</label>
                                                <input type="date" class="form-control" name="baslama_tarihi">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Eğitim Bitiş Tarihi</label>
                                                <input type="date" class="form-control" name="bitis_tarihi">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Eğitim Süresi</label>
                                                <input type="text" class="form-control" placeholder="Eğitim Süresi" name="egitim_suresi">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Katılımcı Bilgileri</label>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" placeholder="Adı Soyadı" name="adi_soyadi">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" placeholder="Unvanı" name="unvani">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Birim" name="birimi">
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