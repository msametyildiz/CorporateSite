<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header" style="padding-top: 3%;">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6 ">
                    <h3 class="m-0 text-dark">Eğitim Konusu Arama </h3>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">
            <div class="col-md-12"><br></div>

            <form action="#" method="post" enctype="multipart/form-data">
                <div class="col-md-12">
                    <div class="card-body card card-primary">
                        <div class="row">
                            <div class="col-md-6">
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
                                        <!-- İhtiyaç duyulan diğer birimleri burada listelemeye devam edebilirsiniz -->
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Eğitim Konusu</label>
                                    <input type="text" class="form-control" placeholder="Eğitim Konusu ..." name="egitim_konusu">
                                </div>
                            </div>
                            <div class="col-md-12 text-center">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">ARA</button>
                                </div>
                            </div>
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.col-md-8 -->
            </form>

            <!----------------------------------------------------------------------------------------------------------------------------------->

        </div><!-- /.container-fluid -->
    </section>
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
                                <th>Sıra</th>
                                <th>Eğitimi Uygulayan Birim</th>
                                <th>Konusu</th>
                                <th>Tarihi (AY/HAFTA)</th>
                                <th>Süresi (GÜN/SAAT)</th>
                                <th>Uygulama Şekli</th>
                                <th>Unvanı</th>
                                <th>Sayısı</th>
                                <th>Birimi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Sanayi Genel Müdürlüğü</td>
                                <td>Konu 1</td>
                                <td>Şubat 3.Hafta</td>
                                <td>1 Gün</td>
                                <td>Yüzyüze</td>
                                <td>Tüm Unvanlar</td>
                                <td>180</td>
                                <td>Merkez Teşkilatı</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Milli Teknoloji Genel Müdürlüğü</td>
                                <td>Konu 2</td>
                                <td>Mart 1.Hafta</td>
                                <td>4 Saat</td>
                                <td>Çevrimİçi Platformlar</td>
                                <td>Mühendis/Şube Müdürü/ Diğer Personel</td>
                                <td>60</td>
                                <td>Sanayi Genel Müdürlüğü</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Milli Teknoloji Genel Müdürlüğü</td>
                                <td>Konu 3</td>
                                <td>Ocak 2.Hafta</td>
                                <td>2 Gün</td>
                                <td>Yüzyüze</td>
                                <td>Personel Unvanı</td>
                                <td>40</td>
                                <td>İl Müdürlükleri</td>
                            </tr>
                            <!-- Diğer örnek eğitim verileri -->
                            <!-- 4. örnek -->
                            <tr>
                                <td>4</td>
                                <td>Sanayi Genel Müdürlüğü</td>
                                <td>Konu 4</td>
                                <td>Mayıs 2.Hafta</td>
                                <td>3 Gün</td>
                                <td>Yüzyüze</td>
                                <td>Personel Unvanı</td>
                                <td>25</td>
                                <td>Merkez Teşkilatı</td>
                            </tr>
                            <!-- 5. örnek -->
                            <tr>
                                <td>5</td>
                                <td>Milli Teknoloji Genel Müdürlüğü</td>
                                <td>Konu 5</td>
                                <td>Ağustos 3.Hafta</td>
                                <td>1 Gün</td>
                                <td>Çevrimİçi Platformlar</td>
                                <td>Diğer Personel</td>
                                <td>75</td>
                                <td>Sanayi Genel Müdürlüğü</td>
                            </tr>
                            <!-- 6. örnek -->
                            <tr>
                                <td>6</td>
                                <td>Milli Teknoloji Genel Müdürlüğü</td>
                                <td>Konu 6</td>
                                <td>Eylül 1.Hafta</td>
                                <td>2 Gün</td>
                                <td>Yüzyüze</td>
                                <td>Mühendis/Personel</td>
                                <td>50</td>
                                <td>İl Müdürlükleri</td>
                            </tr>
                            <!-- 7. örnek -->
                            <tr>
                                <td>7</td>
                                <td>Sanayi Genel Müdürlüğü</td>
                                <td>Konu 7</td>
                                <td>Ekim 2.Hafta</td>
                                <td>1 Gün</td>
                                <td>Çevrimİçi Platformlar</td>
                                <td>Diğer Personel</td>
                                <td>90</td>
                                <td>Merkez Teşkilatı</td>
                            </tr>
                            <!-- 8. örnek -->
                            <tr>
                                <td>8</td>
                                <td>Milli Teknoloji Genel Müdürlüğü</td>
                                <td>Konu 8</td>
                                <td>Kasım 1.Hafta</td>
                                <td>3 Gün</td>
                                <td>Yüzyüze</td>
                                <td>Personel Unvanı</td>
                                <td>120</td>
                                <td>Sanayi Genel Müdürlüğü</td>
                            </tr>
                            <!-- 9. örnek -->
                            <tr>
                                <td>9</td>
                                <td>Milli Teknoloji Genel Müdürlüğü</td>
                                <td>Konu 9</td>
                                <td>Şubat 2.Hafta</td>
                                <td>1 Gün</td>
                                <td>Yüzyüze</td>
                                <td>Mühendis/Personel</td>
                                <td>60</td>
                                <td>İl Müdürlükleri</td>
                            </tr>
                            <!-- 10. örnek -->
                            <tr>
                                <td>10</td>
                                <td>Sanayi Genel Müdürlüğü</td>
                                <td>Konu 10</td>
                                <td>Temmuz 3.Hafta</td>
                                <td>2 Gün</td>
                                <td>Çevrimİçi Platformlar</td>
                                <td>Diğer Personel</td>
                                <td>100</td>
                                <td>İl Müdürlükleri</td>
                            </tr>
                            <!-- 11. örnek -->
                            <tr>
                                <td>11</td>
                                <td>Milli Teknoloji Genel Müdürlüğü</td>
                                <td>Konu 11</td>
                                <td>Aralık 1.Hafta</td>
                                <td>3 Gün</td>
                                <td>Yüzyüze</td>
                                
                                <td>Mühendis/Personel</td>
                                <td>80</td>
                                <td>Sanayi Genel Müdürlüğü</td>
                            </tr>
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
