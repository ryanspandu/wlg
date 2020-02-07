<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web Lagu</title>
    
    <?php $this->view('base/head'); ?>

</head>
<body id="mantul">
    <!-- NAVBAR -->
    <?php $this->view('base/header');; ?>
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
                            <a href="<?php echo base_url('search/TOP10'); ?>" class="o0 d-none bgred position-absolute" style="width: 171px; height: 96px;"></a>
                        </div>
                        <img src="assets/img/top10.jpg" class="" style="min-width: 171px; height: 96px;">
                    </div>
                    <div class="btn p-0 text-decoration-none position-relative d-flex align-items-center rounded-lg justify-content-center overflow-hidden mx-3" style="max-width: 171px; min-width: 171px; height: 96px;">
                        <div class="bgblackblur position-absolute d-flex align-items-center justify-content-center rounded-lg" style="width: 142px; height: 44px;">
                            <p class="twhite f16 medium">HITS 2020</p>
                            <a href="<?php echo base_url('search/HITS2020'); ?>" class="o0 d-none bgred position-absolute" style="width: 171px; height: 96px;"></a>
                        </div>
                        <img src="assets/img/hits2020.jpg" class="mx-3" style="min-width: 171px; height: 96px;">
                    </div>
                    <div class="btn m-0 p-0 text-decoration-none position-relative d-flex align-items-center rounded-lg justify-content-center overflow-hidden" style="max-width: 171px; min-width: 171px; height: 96px;">
                        <div class="bgblackblur position-absolute d-flex align-items-center justify-content-center rounded-lg" style="width: 142px; height: 44px;">
                            <p class="twhite f16 medium">LAGU TERBARU</p>
                            <a href="<?php echo base_url('search/LAGUBARU'); ?>" class="o0 d-none bgred position-absolute" style="width: 171px; height: 96px;"></a>
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
                    <?php $this->load->view('content/lagubaru'); ?>
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
                        $this->view('content/home');
                    ?>
                    <!-- Content Fill End -->
                </div>
                <!-- MAIN CONTENT END -->
            </div>
        </div>

        <div class="col-12 col-md-5 p-0 pl-md-3 pl-lg-0 mt-4 mt-md-5" style="">
            <?php $this->view('base/sidebar'); ?>
        </div>
        <!-- SECTION 2 END -->
    </div>
    <!-- MAIN END -->

    

    <!-- FOOTER  -->
    <?php $this->view('base/footer'); ?>
    <!-- FOOTER END -->
</body>
</html>