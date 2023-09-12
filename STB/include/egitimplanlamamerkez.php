<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Taşra Teşkilatı Eğitim Planlama </h1>
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
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Eğitim Tarihi (AY/HAFTA) </label>
                                                <input type="text" class="form-control"placeholder="Eğitim Tarihi " name="egitim_tarihi">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Eğitim Süresi (GÜN/SAAT)</label>
                                                <input type="text" class="form-control" placeholder="Eğitim Süresi " name="egitim_suresi">
                                            </div>
                                        </div>
                                    </div>
                                </div>





                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Eğitim Konusu</label>
                                        <textarea class="form-control" rows="3" placeholder="Eğitim Konusu" name="egitim_konusu_text"></textarea>
                                    </div>
                                </div>

                                <!-- -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Eğitim Uygulama Şekli</label>
                                        <select class="form-control" name="egitim_uygulama_sekli">
                                            <option value="" selected>Seçiniz</option>
                                            <option value="Yüz Yüze Eğitim">Yüz Yüze Eğitim</option>
                                            <option value="Uzaktan Eğitim">Uzaktan Eğitim</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6" id="yüzYüzeEgitimAlani" style="display: none;">
                                    <div class="form-group">
                                        <label>Toplantı Mekanı</label>
                                        <input type="text" class="form-control" placeholder="Toplantı Mekanı" name="toplanti_mekani">
                                    </div>
                                    
                                </div>
                                <!-- Eğer uzaktan eğitim seçilirse aşağıdaki alanlar görünecek -->
                                <div class="col-md-6" id="uzaktanEgitimAlanlari" style="display: none;">
                                    <div class="form-group">
                                        <label>Toplantı Kimliği</label>
                                        <input type="text" class="form-control" placeholder="Toplantı Kimliği" name="toplanti_kimligi">
                                    </div>
                                    <div class="form-group">
                                        <label>Toplantı Parolası</label>
                                        <input type="password" class="form-control" placeholder="Toplantı Parolası" name="toplanti_parolasi">
                                    </div>
                                    <div class="form-group">
                                        <label>Toplantı URL'si</label>
                                        <input type="text" class="form-control" placeholder="Toplantı URL'si" name="toplanti_urlsi">
                                    </div>
                                </div>

                                <script>
                                    document.querySelector('select[name="egitim_uygulama_sekli"]').addEventListener('change', function() {
                                        const uzaktanEgitimAlanlari = document.getElementById('uzaktanEgitimAlanlari');
                                        if (this.value === "Uzaktan Eğitim") {
                                            uzaktanEgitimAlanlari.style.display = "block";
                                        } else {
                                            uzaktanEgitimAlanlari.style.display = "none";
                                        }
                                    });
                                    document.querySelector('select[name="egitim_uygulama_sekli"]').addEventListener('change', function() {
                                        const yüzYüzeEgitimAlani = document.getElementById('yüzYüzeEgitimAlani');
                                        if (this.value === "Yüz Yüze Eğitim") {
                                            yüzYüzeEgitimAlani.style.display = "block";
                                        } else {
                                            yüzYüzeEgitimAlani.style.display = "none";
                                        }
                                    });
                                </script>

                                
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Eğitime Katılması Öngörülen Personel Bilgileri</label>
                                        <div class="row">
                                            <div class="col-md-8" >
                                                <input type="text" class="form-control" placeholder="Personel Unvanı " name="unvani">
                                            </div>
                                            <div class="col-md-8" style="padding-top: 2%;">
                                                <input type="text" class="form-control" placeholder="Personel Sayısı " name="sayisi">
                                            </div>
                                            <div class="col-md-8" style="padding-top: 2%;">
                                                <input type="text" class="form-control" placeholder="Personel Birimi " name="birimi">
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>


                                <div class="col-md-12 text-center">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">KAYDET</button>
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