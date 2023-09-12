<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kullanıcı Ayarları</title>
    <style>
        /* ... (yukarıdaki stil kodları) ... */
    </style>
</head>
<body>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Kullanıcı Ayarları</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Anasayfa</a></li>
                            <li class="breadcrumb-item active">Kullanıcı Ayarları</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <form action="#" method="post">
                    <div class="col-md-12">
                        <div class="card-body card card-primary">
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <label>Kullanıcı Adı</label>
                                        <input type="text" class="form-control" placeholder="Kullanıcı Adı" name="username">
                                    </div>
                                    <div class="form-group">
                                        <label>Şifre</label>
                                        <input type="password" class="form-control" placeholder="Şifre" name="password">
                                    </div>
                                    <div class="form-group">
                                        <label>Şifre Tekrar</label>
                                        <input type="password" class="form-control" placeholder="Şifre Tekrar" name="password_confirmation">
                                    </div>
                                    <div class="form-group">
                                        <label>E-posta</label>
                                        <input type="email" class="form-control" placeholder="E-posta" name="email">
                                    </div>
                                    <div class="form-group">
                                        <label>Görev Yaptığı Birim</label>
                                        <select class="form-control" name="birim">
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
                               
                                <div class="col-md-12 text-center">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Kaydet</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
</body>
</html>
