<link rel="stylesheet" href="<?= SITE ?>plugins/fontawesome-free/css/all.min.css">
<style>
    .content-wrapper {
        padding: 20px;
    }

    .video-container {
        display: flex;
        gap: 20px;
    }

    .video-player {
        flex: 0 0 66.66%;
    }

    .video-menu {
        flex: 0 0 33.33%;
        border-left: 1px solid #ccc;
        padding-left: 20px;
    }

    .video-menu ul {
        list-style: none;
        padding-left: 0;
    }

    .video-menu li {
        margin-bottom: 10px;
        border-radius: 5px;


    }

    .video-menu a {
        color: black;
        font-size: small;
        font-weight: 600;
    }

    .text-container {
        background-color: #f8f9fa;
        padding: 15px;
        border: 1px solid #e0e0e0;
        border-radius: 5px;
        margin-top: 20px;
    }

    .text-container p {
        font-size: 14px;
        line-height: 1.6;
    }
</style>
<div class="content-wrapper">

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="video-container">
                        <div class="col-md-10">
                            <div class="video-player">
                                <h2>Eğitim Adı 1</h2>
                                <!-- Büyük video oynatıcı buraya yer alacak -->
                                <!-- Örnek olarak bir video oynatıcı ekleyebilirsiniz -->
                                <iframe width="100%" height="400" src="https://www.youtube.com/embed/VIDEO_ID" frameborder="0" allowfullscreen></iframe>
                                <div>
                                    <div class="text-container">
                                        <h3>Bu Eğitim Hakkında</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Aliquam ultrices sagittis orci a scelerisque. Mattis ullamcorper velit sed ullamcorper morbi tincidunt ornare. Est pellentesque elit ullamcorper dignissim cras tincidunt. Donec et odio pellentesque diam volutpat. Praesent elementum facilisis leo vel. Eget egestas purus viverra accumsan in nisl. Dignissim diam quis enim lobortis. Eget arcu dictum varius duis at consectetur lorem. Morbi enim nunc faucibus a pellentesque sit amet porttitor. Neque vitae tempus quam pellentesque nec nam aliquam. Pretium quam vulputate dignissim suspendisse in est ante in nibh. Tortor posuere ac ut consequat semper viverra. Est pellentesque elit ullamcorper dignissim cras. Odio euismod lacinia at quis risus sed vulputate odio ut. Scelerisque mauris pellentesque pulvinar pellentesque habitant morbi tristique senectus. Mi ipsum faucibus vitae aliquet nec ullamcorper. Phasellus egestas tellus rutrum tellus pellentesque. Odio pellentesque diam volutpat commodo sed. Tellus in metus vulputate eu scelerisque felis imperdiet proin. Pulvinar etiam non quam lacus suspendisse faucibus interdum posuere lorem. Malesuada nunc vel risus commodo viverra maecenas accumsan. Arcu ac tortor dignissim convallis aenean et tortor at risus. Donec massa sapien faucibus et molestie. Nulla aliquet enim tortor at auctor urna nunc id. Convallis aenean et tortor at. Integer vitae justo eget magna fermentum iaculis eu. Nunc vel risus commodo viverra maecenas accumsan lacus vel facilisis. Egestas sed tempus urna et pharetra pharetra massa massa ultricies. In nulla posuere sollicitudin aliquam ultrices sagittis orci a. Nec ullamcorper sit amet risus nullam eget felis. Gravida rutrum quisque non tellus orci. Ac feugiat sed lectus vestibulum mattis. Feugiat nisl pretium fusce id velit ut. Placerat duis ultricies lacus sed. Eleifend mi in nulla posuere.
                                        </p>
                                        <h3>Sorular</h3>
                                        <ol>
                                            <li style=" font-family: Arial, sans-serif;  background-color: #f4f4f4;  padding: 20px; border: 1px solid #ddd;">
                                                <label >Soru 1: Hangi ülkenin başkenti Ankara'dır?</label>
                                                <ol type="A">
                                                    <li><input type="radio" name="soru1" value="A"> Türkiye</li>
                                                    <li><input type="radio" name="soru1" value="B"> Yunanistan</li>
                                                    <li><input type="radio" name="soru1" value="C"> İspanya</li>
                                                    <li><input type="radio" name="soru1" value="D"> Fransa</li>
                                                </ol>
                                            </li>
                                            <li style=" font-family: Arial, sans-serif;  background-color: #f4f4f4;  padding: 20px; border: 1px solid #ddd;">
                                                <label>Soru 2: 7 x 8 işlemi sonucu kaçtır?</label>
                                                <ol type="A">
                                                    <li><input type="radio" name="soru2" value="A"> 42</li>
                                                    <li><input type="radio" name="soru2" value="B"> 56</li>
                                                    <li><input type="radio" name="soru2" value="C"> 64</li>
                                                    <li><input type="radio" name="soru2" value="D"> 49</li>
                                                </ol>
                                            </li>
                                            <li style=" font-family: Arial, sans-serif;  background-color: #f4f4f4;  padding: 20px; border: 1px solid #ddd;">
                                                <label>Soru 3: "Merhaba" kelimesi hangi dilde "hello" anlamına gelir?</label>
                                                <ol type="A">
                                                    <li ><input type="radio" name="soru3" value="A"> İngilizce</li>
                                                    <li ><input type="radio" name="soru3" value="B"> Almanca</li>
                                                    <li ><input type="radio" name="soru3" value="C"> İspanyolca</li>
                                                    <li ><input type="radio" name="soru3" value="D"> Fransızca</li>
                                                </ol>
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="video-menu">
                                <h4>Eğitim İçeriği</h4>
                                <hr>
                                <ul>
                                <li>
    <a href="#" style="text-align: center;">O &nbsp; &nbsp;Bölüm 1: Ders Adı </a><br>
    <i class="fa fa-file-video-o" aria-hidden="true"></i><a href="#" style="padding-left: 6%;">30 dak</a>
    <a href="#" style="padding-right:0; border:1px solid black; margin-left: 55px; font-weight:normal" onclick="toggleFiles('dosyalar1')">Kaynaklar</a>
    <ul id="dosyalar1" style="display: none;">
        <!-- Dosya listesi burada yer alır -->
        <li><a href="dosya1.pdf">Dosya Adı 1</a></li>
        <li><a href="dosya2.pdf">Dosya Adı 2</a></li>
        <!-- Diğer dosyalar burada yer alır -->
    </ul>
</li>

<script>
    function toggleFiles(elementId) {
        var element = document.getElementById(elementId);
        if (element.style.display === "none") {
            element.style.display = "block";
        } else {
            element.style.display = "none";
        }
    }
</script>
<hr>
                                    <li><a href="#" style="text-align: center;">O &nbsp; &nbsp;Bölüm 2: Ders Adı </a><br><i class="fa fa-file-video-o" aria-hidden="true"></i><a href="#" style="padding-left: 6%;">35 dak</a><a href="#" style="padding-right:0; border:1px solid black; margin-left: 55px; font-weight:normal">Kaynaklar</a></li>
                                    <hr>
                                    <li><a href="#" style="text-align: center;">O &nbsp; &nbsp;Bölüm 3: Ders Adı </a><br><i class="fa fa-file-video-o" aria-hidden="true"></i><a href="#" style="padding-left: 6%;">37 dak</a><a href="#" style="padding-right:0; border:1px solid black; margin-left: 55px; font-weight:normal">Kaynaklar</a></li>
                                    <hr>
                                    <li><a href="#" style="text-align: center;">O &nbsp; &nbsp;Bölüm 4: Ders Adı </a><br><i class="fa fa-file-video-o" aria-hidden="true"></i><a href="#" style="padding-left: 6%;">34 dak</a><a href="#" style="padding-right:0; border:1px solid black; margin-left: 55px; font-weight:normal">Kaynaklar</a></li>
                                    <hr>
                                    <li><a href="#" style="text-align: center;">O &nbsp; &nbsp;Bölüm 5: Ders Adı </a><br><i class="fa fa-file-video-o" aria-hidden="true"></i><a href="#" style="padding-left: 6%;">25 dak</a><a href="#" style="padding-right:0; border:1px solid black; margin-left: 55px; font-weight:normal">Kaynaklar</a></li>
                                    <hr>
                                    <li><a href="#" style="text-align: center;">O &nbsp; &nbsp;Bölüm 6: Ders Adı </a><br><i class="fa fa-file-video-o" aria-hidden="true"></i><a href="#" style="padding-left: 6%;">17 dak</a><a href="#" style="padding-right:0; border:1px solid black; margin-left: 55px; font-weight:normal">Kaynaklar</a></li>
                                    <hr>
                                    <li><a href="#" style="text-align: center;">O &nbsp; &nbsp;Bölüm 7: Ders Adı </a><br><i class="fa fa-file-video-o" aria-hidden="true"></i><a href="#" style="padding-left: 6%;">13 dak</a><a href="#" style="padding-right:0; border:1px solid black; margin-left: 55px; font-weight:normal">Kaynaklar</a></li>
                                    <hr>
                                    <li><a href="#" style="text-align: center;">O &nbsp; &nbsp;Bölüm 8: Ders Adı </a><br><i class="fa fa-file-video-o" aria-hidden="true"></i><a href="#" style="padding-left: 6%;">23 dak</a><a href="#" style="padding-right:0; border:1px solid black; margin-left: 55px; font-weight:normal">Kaynaklar</a></li>
                                    <hr>
                                    <li><a href="#" style="text-align: center;">O &nbsp; &nbsp;Bölüm 9: Ders Adı </a><br><i class="fa fa-file-video-o" aria-hidden="true"></i><a href="#" style="padding-left: 6%;">38 dak</a><a href="#" style="padding-right:0; border:1px solid black; margin-left: 55px; font-weight:normal">Kaynaklar</a></li>
                                    <hr>
                                    <li><a href="#" style="text-align: center;">O &nbsp; &nbsp;Bölüm 10: Ders Adı </a><br><i class="fa fa-file-video-o" aria-hidden="true"></i><a href="#" style="padding-left: 6%;">13 dak</a><a href="#" style="padding-right:0; border:1px solid black; margin-left: 55px; font-weight:normal">Kaynaklar</a></li>
                                    <hr>
                                    <li><a href="#" style="text-align: center;">O &nbsp; &nbsp;Bölüm 11: Ders Adı </a><br><i class="fa fa-file-video-o" aria-hidden="true"></i><a href="#" style="padding-left: 6%;">52 dak</a><a href="#" style="padding-right:0; border:1px solid black; margin-left: 55px; font-weight:normal">Kaynaklar</a></li>
                                    <hr>
                                    <li><a href="#" style="text-align: center;">O &nbsp; &nbsp;Bölüm 12: Ders Adı </a><br><i class="fa fa-file-video-o" aria-hidden="true"></i><a href="#" style="padding-left: 6%;">23 dak</a><a href="#" style="padding-right:0; border:1px solid black; margin-left: 55px; font-weight:normal">Kaynaklar</a></li>
                                    <hr>
                                    <li><a href="#" style="text-align: center;">O &nbsp; &nbsp;Bölüm 13: Ders Adı </a><br><i class="fa fa-file-video-o" aria-hidden="true"></i><a href="#" style="padding-left: 6%;">12 dak</a><a href="#" style="padding-right:0; border:1px solid black; margin-left: 55px; font-weight:normal">Kaynaklar</a></li>
                                    <hr>
                                    <li><a href="#" style="text-align: center;">O &nbsp; &nbsp;Bölüm 14: Ders Adı </a><br><i class="fa fa-file-video-o" aria-hidden="true"></i><a href="#" style="padding-left: 6%;">31 dak</a><a href="#" style="padding-right:0; border:1px solid black; margin-left: 55px; font-weight:normal">Kaynaklar</a></li>
                                    <hr>
                                    <li><a href="#" style="text-align: center;">O &nbsp; &nbsp;Bölüm 15: Ders Adı </a><br><i class="fa fa-file-video-o" aria-hidden="true"></i><a href="#" style="padding-left: 6%;">31 dak</a><a href="#" style="padding-right:0; border:1px solid black; margin-left: 55px; font-weight:normal">Kaynaklar</a></li>
                                    <hr>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>