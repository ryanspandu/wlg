<?php 
$lagubaru = array("Justin Biebir - O Aja Ya Kan", "Charlie Puth - Cinta Satu Malam", "Dua Lipa - Dua Tiga Empat Lipa", "Michael Michael - Sometimes it's Hurts but it's OK");
$no = 0;
?>
<?php 
foreach($lagubaru as $lb) {
    ?>
    <div class="w-100 d-flex flex-row m-0 px-2 lagubarucontainer" style="max-width: 544px; height: 73px;">
        <div class="p-0 d-flex align-items-end justify-content-start mr-2 mb-2">
            <div class="rounded-circle bgsangatsoftgreen d-flex align-items-center justify-content-center" style="height: 35px; width: 35px;">
                <p class="f18 tgreen bold"><?php echo ++$no; ?></p>
            </div>
        </div>
        <div class="d-flex flex-row p-0 position-relative w-100">
            <a href="<?php echo base_url('download/'); ?>" class="text-decoration-none my-auto">
                <img src="" class="bgsoftgreen img-fluid rounded-lg" style="min-width:52px; min-height: 52px;"/>
            </a>
            <a href="<?php echo base_url('download/'); ?>" class="text-decoration-none tgrayblack flex-column ml-3 overflow-hidden mr-2 my-auto">
                <p class="f16 overflow-hidden" style="max-height: 50px; max-width: 300px;"><?php echo $lb ?></p>
            </a>
            <a href="<?php echo base_url('download/'); ?>" class="wrapperdownloadicon bordergreen rounded-circle d-none d-sm-flex align-items-center justify-content-center w-100 h-100 my-auto ml-auto position-relative" style="max-width: 48px; max-height: 48px;">
                <div class="downloadicon overflow-hidden h-100 w-100 d-flex flex-column position-relative" style="max-width:14.11px; max-height:19.5px;">
                    <img src="assets/icon/icon_download_white.svg" class="arrowdua p-0 position-absolute" style="top: -15px;"/>
                    <img src="assets/icon/icon_download_white.svg" class="arrowsatu p-0 position-absolute" style=""/>
                    <img src="assets/icon/icon_download_green.svg" class="position-absolute arrowutama"/>
                    <hr class="w-100 bordergreen p-0 position-absolute" style="top: 2px;">
                </div>
            </a> 
        </div>
    </div>
    <?php
}
?>