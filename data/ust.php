<!-- header-start -->
<header>
    <div class="header-area ">
        <div id="sticky-header" class="main-header-area">
            <div class="container-fluid ">
                <div class="header_bottom_border">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-2">
                            <div class="logo">
                                <a href="<?= SITE ?>" style="color:black;font-size:30px;background-image: url('<?= SITE ?>img/about/counter.png')">
                                    PAYLASTIKCA
                                    <!--<img src="<?= SITE ?>img/logo.png" alt="">-->
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-7">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="<?= SITE ?>">ANASAYFA</a></li>
                                        <li><a href="#">KURUMSAL <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <?php
                                                $kurumsal = $VT->VeriGetir("kurumsal", "WHERE durum=?", array(1), "ORDER BY sirano ASC");
                                                //(LıNE 23)  kurumsal tablosundan alınmasını istedim,  "eğer durumu = 1 olan kısımı getir diyorum",sıra numarasında göre  sıralamasını istediğimi belirttim. herhangi bir limit işlemi yapmıyorum
                                                if ($kurumsal != false) { //eğer bir değer var ise
                                                    for ($i = 0; $i < count($kurumsal); $i++) {
                                                ?>
                                                        <li><a href="<?= SITE ?>kurumsal/<?= $kurumsal[$i]["selflink"] ?>"><?= stripslashes($kurumsal[$i]["baslik"]) ?></a></li>
                                                <?php
                                                    }
                                                }
                                                ?>
                                            </ul>
                                        </li>
                                        <!--hizmetlerimin yada başka bir sayfanın altına bir şey kelemek için yani açılır menü yapmak için href kısmına # ekle -->
                                        <li><a href="<?= SITE ?>hizmetler">HİZMETLER</a></li>
                                        <li><a href="<?= SITE ?>projeler">PROJELER</a></li>
                                        <li><a href="<?= SITE ?>blog">BLOG</a></li>
                                        <li><a href="<?= SITE ?>iletisim">İLETİŞİM</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div>
                            <div style="float: left; padding-left:80px;">
                                <a href="<?= SITE ?>iletisim" class="buttonIDUst">BİZE ULAŞIN</a>
                            </div>
                            <div style="float: right; padding-left:5px;">
                                <a href="<?= SITE ?>bagis" class="buttonIDUst">BAĞIŞ YAP  <i class="fa fa-heart" aria-hidden="true" style="padding:3px;"></i></a>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>
<!-- header-end -->