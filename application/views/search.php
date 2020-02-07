<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web Lagu - Search</title>

    <?php include 'base/head.php'; ?>

</head>
<body id="mantul">
    <!-- NAVBAR -->
    <?php include 'base/header.php'; ?>
    <!-- NAVBAR END -->


    <!-- MAIN  -->
    <div class="max992 row overflow-hidden mx-auto px-3 px-lg-0" style="margin-top: 80px;">
        <!-- SECTION 1  -->
        <div class="col-12 col-md-7 px-0 mt-4 mt-md-5 overflow-hidden" style="">
            <div class="m-auto mx-md-0 overflow-hidden" style="max-width: 544px;">
                <div class="">
                    <p class="fontsub tgray">Hasil Pencarian Lagu</p>
                    <p class="f28 bold">Hasil Pencarian</p>
                </div>

                <div class="borderblue rounded-lg px-5 py-4 mt-4">
                <?php 
                $now = "http://localhost/lagu/category/";
                if($url == $now.$q) { ?>
                    <p class="bold f28 tblack"><?php echo $url; ?></p>

                <?php } ?>
                    <p class="tblue">
                        Download lagu Tones And I Dance Monkey MP3 dapat kamu download secara gratis di MetroLagu. Untuk melihat detail lagu Tones And I Dance Monkey klik salah satu judul yang cocok, kemudian untuk link download Tones And I Dance Monkey ada di halaman berikutnya.
                    </p>
                </div>

                <!-- MAIN CONTENT -->
                <div class="w-100 mt-4">
                    <!-- Content Fill -->
                    <?php 
                        $lagumain = array("Justin Biebir - O Aja Ya Kan", "Charlie Puth - Cinta Satu Malam", "Dua Lipa - Dua Tiga Empat Lipa", "Michael Michael - Sometimes it's Hurts but it's OK");
                        $nomain = 0;
                    ?>
                    <?php
                        foreach($lagumain as $lm) {
                            ?>
                            <div class="d-flex flex-column mb-4 lagumaincontainer pb-3 px-2">
                                <div class="d-flex flex-row" style="">
                                    <a href="download.php?id=IDNYE" class="gambarmain bgsoftgreen rounded-lg overflow-hidden position-relative d-flex justify-content-center" style="">
                                        <img src="<?php echo base_url('assets/img/banner.jpg'); ?>" class="mx-auto position-absolute h-100 mx-auto" style="top: 0;"/>
                                    </a>
                                    <a href="download.php?id=IDNYE" class="ml-3 text-decoration-none tgrayblack">
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
                                    <a href="download.php?id=IDNYE" class="text-decoration-none d-flex flex-row">
                                        <img src="<?php echo base_url('assets/icon/icon_main_download.svg'); ?>" class="" width="13px"/>
                                        <p class="f14 ml-2 tgray medium">Download</p>
                                    </a>
                                </div>
                            </div>
                            <?php
                        }
                    ?>
                    <!-- Content Fill End -->
                </div>

                <div class="d-flex flex-row flex-wrap w-100 justify-content-center mt-4">
                    <div class="paginationcontent mr-2 borderblue rounded-lg bgblue d-flex justify-content-center align-items-center" style="width: 30px; height: 30px;">
                        <p class="twhite">1</p>
                    </div>
                    <div class="paginationcontent mr-2 borderblue rounded-lg d-flex justify-content-center align-items-center" style="width: 30px; height: 30px;">
                        <p class="tblue">2</p>
                    </div>
                </div>
                <!-- MAIN CONTENT END -->
            </div>
        </div>

        <div class="col-12 col-md-5 p-0 pl-md-3 pl-lg-0 mt-4 mt-md-5" style="">
            <?php include 'base/sidebar.php'; ?>
        </div>
        <!-- SECTION 1 END -->
    </div>
    <!-- MAIN END -->

    

    <!-- FOOTER  -->
    <?php include 'base/footer.php'; ?>
    <!-- FOOTER END -->
</body>
</html>