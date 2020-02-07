<?php 
    $lagumain = array("Justin Biebir - O Aja Ya Kan", "Charlie Puth - Cinta Satu Malam", "Dua Lipa - Dua Tiga Empat Lipa", "Michael Michael - Sometimes it's Hurts but it's OK");
    $nomain = 0;
?>
<?php
    foreach($lagumain as $lm) {
        ?>
        <div class="d-flex flex-column mb-4 lagumaincontainer pb-3 px-2">
            <div class="d-flex flex-row" style="">
                <a href="<?php echo base_url().'download/'; ?>" class="gambarmain bgsoftgreen rounded-lg overflow-hidden position-relative d-flex justify-content-center" style="">
                    <img src="<?php echo base_url('assets/img/banner.jpg'); ?>" class="mx-auto position-absolute h-100 mx-auto" style="top: 0;"/>
                </a>
                <a href="<?php echo base_url().'download/'; ?>" class="ml-3 text-decoration-none tgrayblack">
                    <p class="f16"><?php echo $lm ?></p>
                </a>
            </div>
            <div class="maindetails mt-3 d-flex flex-row justify-content-between pt-2 " style="border-top: 1px solid rgba(184, 184, 184, 0.315);">
                <div class="text-decoration-none d-flex flex-row">
                    <img src="<?php echo base_url('assets/icon/icon_main_play.svg'); ?>" class="" width="15px"/>
                    <p class="f14 ml-2 tgray medium">24 K</p>
                </div>
                <div class="text-decoration-none d-flex flex-row">
                    <img src="<?php echo base_url('assets/icon/icon_main_time.svg'); ?>" class="" width="15px"/>
                    <p class="f14 ml-2 tgray medium">07 Jan 2019</p>
                </div>
                <a href="<?php echo base_url().'download/'; ?>" class="text-decoration-none d-flex flex-row">
                    <img src="<?php echo base_url('assets/icon/icon_main_download.svg'); ?>" class="" width="13px"/>
                    <p class="f14 ml-2 tgray medium">Download</p>
                </a>
            </div>
        </div>
        <?php
    }
?>