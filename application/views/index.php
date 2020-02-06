<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web Lagu</title>

    <?php include 'base/head.php'; ?>

</head>
<body id="mantul">
    <!-- NAVBAR -->
    <?php include 'base/header.php'; ?>
    <!-- NAVBAR END -->


    <!-- MAIN  -->
    <div class="max992 row overflow-hidden mx-auto px-3 px-lg-0" style="margin-top: 80px;">
        <!-- SECTION 1  -->
        <div class="col-12 col-md-7 px-0 overflow-hidden" style="">
            <div class="d-flex flex-column mx-auto mx-md-0" style="max-width: 544px;">
                <img src="assets/img/banner.jpg" class="img-fluid btn m-0 p-0"/>

                <div id="3banner" class="d-flex flex-row overflow-auto mt-3 hidescroll">
                    <div class="btn m-0 p-0 text-decoration-none position-relative d-flex align-items-center rounded-lg justify-content-center overflow-hidden" style="max-width: 171px; min-width: 171px; height: 96;">
                        <div class="bgblackblur position-absolute d-flex align-items-center justify-content-center rounded-lg" style="width: 142px; height: 44px;">
                            <p class="twhite f16 medium">TOP 10 SONG</p>
                            <a href="search.php?category=top10" class="o0 d-none bgred position-absolute" style="width: 171px; height: 96px;"></a>
                        </div>
                        <img src="assets/img/top10.jpg" class="" style="min-width: 171px; height: 96px;">
                    </div>
                    <div class="btn p-0 text-decoration-none position-relative d-flex align-items-center rounded-lg justify-content-center overflow-hidden mx-3" style="max-width: 171px; min-width: 171px; height: 96px;">
                        <div class="bgblackblur position-absolute d-flex align-items-center justify-content-center rounded-lg" style="width: 142px; height: 44px;">
                            <p class="twhite f16 medium">HITS 2020</p>
                            <a href="search.php?category=2020" class="o0 d-none bgred position-absolute" style="width: 171px; height: 96px;"></a>
                        </div>
                        <img src="assets/img/hits2020.jpg" class="mx-3" style="min-width: 171px; height: 96px;">
                    </div>
                    <div class="btn m-0 p-0 text-decoration-none position-relative d-flex align-items-center rounded-lg justify-content-center overflow-hidden" style="max-width: 171px; min-width: 171px; height: 96px;">
                        <div class="bgblackblur position-absolute d-flex align-items-center justify-content-center rounded-lg" style="width: 142px; height: 44px;">
                            <p class="twhite f16 medium">LAGU TERBARU</p>
                            <a href="search.php?category=lagubaru" class="o0 d-none bgred position-absolute" style="width: 171px; height: 96px;"></a>
                        </div>
                        <img src="assets/img/terbaru.jpg" class="" style="min-width: 171px; height: 96px;">
                    </div>
                </div>
            </div>
        </div>


        <div class="col-12 col-md-5 p-0 pl-md-3 pl-lg-0 mt-4 mt-md-0" style="">
            <div class="mx-auto mx-md-0" style="max-width: 544px;">
                <p class="f28 bold">Lagu Baru</p>
                <div id="lagubarus" class="d-flex flex-column mt-3">
                    <!-- Content Fill -->
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
                                    <a href="download.php?ID=IDNYE" class="text-decoration-none my-auto">
                                        <img src="" class="bgsoftgreen img-fluid rounded-lg" style="min-width:52px; min-height: 52px;"/>
                                    </a>
                                    <a href="download.php?ID=IDNYE" class="text-decoration-none tgrayblack flex-column ml-3 overflow-hidden mr-2 my-auto">
                                        <p class="f16 overflow-hidden" style="max-height: 50px; max-width: 300px;"><?php echo $lb ?></p>
                                    </a>
                                    <a href="download.php?ID=IDNYE" class="wrapperdownloadicon bordergreen rounded-circle d-none d-sm-flex align-items-center justify-content-center w-100 h-100 my-auto ml-auto position-relative" style="max-width: 48px; max-height: 48px;">
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
                    <!-- Content Fill End -->
                </div>
            </div>
        </div>
        <!-- SECTION 1 END -->



        <!-- SECTION 2  -->
        <div class="col-12 col-md-7 px-0 mt-4 mt-md-5 overflow-hidden" style="">
            <div class="m-auto mx-md-0 overflow-hidden" style="max-width: 544px;">
                <div class="">
                    <p class="fontsub tgray">Download Lagu Terbaru Hanya di Metrolagu.com</p>
                    <p class="f28 bold">Semua Lagu</p>
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
                                        <img src="assets/img/banner.jpg" class="mx-auto position-absolute h-100 mx-auto" style="top: 0;"/>
                                    </a>
                                    <a href="download.php?id=IDNYE" class="ml-3 text-decoration-none tgrayblack">
                                        <p class="f16"><?php echo $lm ?></p>
                                    </a>
                                </div>
                                <div class="maindetails mt-3 d-flex flex-row justify-content-between pt-2 " style="border-top: 1px solid rgba(184, 184, 184, 0.315);">
                                    <div class="text-decoration-none d-flex flex-row">
                                        <img src="assets/icon/icon_main_play.svg" class="" width="15px"/>
                                        <p class="f14 ml-2 tgray medium">24 K</p>
                                    </div>
                                    <div class="text-decoration-none d-flex flex-row">
                                        <img src="assets/icon/icon_main_time.svg" class="" width="15px"/>
                                        <p class="f14 ml-2 tgray medium">07 Jan 2019</p>
                                    </div>
                                    <a href="download.php?id=IDNYE" class="text-decoration-none d-flex flex-row">
                                        <img src="assets/icon/icon_main_download.svg" class="" width="13px"/>
                                        <p class="f14 ml-2 tgray medium">Download</p>
                                    </a>
                                </div>
                            </div>
                            <?php
                        }
                    ?>
                    <!-- Content Fill End -->
                </div>
                <!-- MAIN CONTENT END -->
            </div>
        </div>

        <div class="col-12 col-md-5 p-0 pl-md-3 pl-lg-0 mt-4 mt-md-5" style="">
            <?php include 'base/sidebar.php'; ?>
        </div>
        <!-- SECTION 2 END -->
    </div>
    <!-- MAIN END -->

    

    <!-- FOOTER  -->
    <?php include 'base/footer.php'; ?>
    <!-- FOOTER END -->
</body>
</html>