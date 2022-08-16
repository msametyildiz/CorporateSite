

<!-- bradcam_area  -->
         <div class="bradcam_area bradcam_bg_2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="bradcam_text text-center">
                                <h3>HİZMETLERİMİZ</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ bradcam_area  -->
            
    <!-- about_mission  -->
    <div class="explorer_europe">
        <div class="container" style="padding-top:20px;">
            <div class="row align-items-center">
                    <?php
                        $hizmetler=$VT->VeriGetir("hizmetler","WHERE durum=?",array(1),"ORDER BY sirano ASC");
                        if($hizmetler!=false){
                            for($i=0;$i<count($hizmetler);$i++){
                                    if(!empty($hizmetler[$i]["resim"])){
                                        $resim=$hizmetler[$i]["resim"];
                                    }
                                    else{
                                        $resim='varsayilan.png';
                                    }
                                    ?>
                                        <div class="col-xl-4 col-lg-4 col-md-6">
                                            <div class="single_explorer">
                                                <div class="thumb">
                                                    <img src="<?=SITE?>images/hizmetler/<?=$resim?>" alt="<?=stripcslashes($hizmetler[$i]["baslik"])?>">
                                                </div>
                                                <div class="explorer_bottom d-flex">
                                                    <div class="explorer_info">
                                                        <h3><a href="<?=SITE?>hizmet-detay/<?=$hizmetler[$i]["selflink"]?>"><?=stripcslashes($hizmetler[$i]["baslik"])?></a></h3>
                                                        <P><?=mb_substr(strip_tags(stripcslashes($hizmetler[$i]["metin"])),0,120,"UTF-8")?>...</p>
                                                        <!--metinde html tagları olduğu için sorun yaşamamak için strip_tags methodu ekledim 
                                                    yazının çok olduğu zamanlar hepsinin gözükmesini istemiyorum bunun için mb_substr methodu ekliyorum 0 ile 120 karekter arasında aliyor -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php

                            }
                        }
                    ?>

                    
                        

            </div>
        </div>
    </div>
    <!--/ about_mission -->
    