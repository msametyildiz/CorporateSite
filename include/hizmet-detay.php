<?php
    if(!empty($_GET["selflink"])){
        $selflink=$VT->filter($_GET["selflink"]);
        $veri=$VT->VeriGetir("hizmetler","WHERE selflink=? AND durum=?",array($selflink,1),"ORDER BY ID ASC",1);
        if($veri!=false){
?>


<!-- bradcam_area  -->
         <div class="bradcam_area bradcam_bg_2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="bradcam_text text-center">
                                <h3><?=stripslashes($veri[0]["baslik"])?></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ bradcam_area  -->
            
    <!-- about_mission  -->
    <div class="about_mission">
        <div class="container">
            <div class="row align-items-center">
            <?php
                if(!empty($veri[0]["resim"])){
                    ?>
                        <div class="col-xl-6 col-md-6">
    <!--images/hizmetler/<?=$veri[0]["resim"]?>-->    <img src="<?=SITE?>img/about/small_1.png" style="width:100%; height:auto;">
                        </div>
                        <div class="col-xl-6 col-md-6">
                            <div class="about_text">
                            <?=stripslashes($veri[0]["metin"])?>
                            </div>
                        </div>
                    <?php
                }
                else{
                    ?>
                        <div class="col-xl-12 col-md-12">
                            <div class="about_text">
                                <?=stripslashes($veri[0]["metin"])?>
                            </div>
                        </div>
                    <?php
                }
            ?>

                
            </div>
        </div>
    </div>
    <!--/ about_mission -->
    
    <?php
        }
    }
    ?>