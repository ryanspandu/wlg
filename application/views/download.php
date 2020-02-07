<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web Lagu - Download Lagu</title>

    <?php $this->view('base/head'); ?>

</head>
<body id="mantul">
    <!-- NAVBAR -->
    <?php $this->view('base/header'); ?>
    <!-- NAVBAR END -->


    <!-- MAIN  -->
    <div class="max992 row overflow-hidden mx-auto px-3 px-lg-0" style="margin-top: 80px;">
        <!-- SECTION 1  -->
        <div class="col-12 col-md-7 px-0 mt-4 mt-md-5 overflow-hidden" style="">
            <div class="m-auto mx-md-0 overflow-hidden" style="max-width: 544px;">
                <div class="">
                    <p class="fontsub tgray">Download Lagu Terlengkap Hanya di Metrolagunew</p>
                    <p class="f28 bold">Bruno Mars - Just The Way You Are</p>
                </div>

                <!-- MAIN CONTENT -->
                <div class="w-100 mt-4 border-bottom pb-5">
                    <!-- Player -->
                    <div class="bgblue rounded-lg position-relative pt-5">
                        <div class="bgsoftgreen rounded-lg overflow-hidden position-relative d-flex justify-content-center mx-auto img-fluid" style="width: 160px; height: 120px;">
                            <img src="<?php echo base_url('assets/img/banner.jpg'); ?>" class="mx-auto position-absolute h-100 mx-auto" style="top: 0;"/>
                        </div>
                        <p class="w-75 twhite mx-auto mt-4 text-center overflow-auto hidescroll" style="max-height: 70px; height: 70px;">Bruno Mars - Just The Way You Are </p>
                        <div id="popupplay" class="mx-3 position-absolute" style="bottom: 12%; opacity: 0;">
                            <div class="d-flex flex-row">
                                <div class="speech-bubble px-3 py-2">
                                    <p class="tblue">Klik play dan tunggu sebentar untuk memulai lagu</p>
                                </div>
                                <button id="closepopuplagu" class="btn p-0 rounded-circle borderwhite ml-2 d-flex justify-content-center align-items-center shadowbackgroundblack" style="min-width: 37px; height: 37px;">
                                    <p class="bold twhite">X</p>
                                </button>
                            </div>
                            <div class="speech-bubble-bawah"></div>
                        </div>
                        <div class="mt-3">
                            <audio class="audio" controls="controls">
                                <source src="https://www.youtube.com/watch?v=OLpeX4RRo28" type="video/youtube">
                            </audio>                       
                        </div>
                    </div>
                    <!-- Player End -->

                    <!-- Download -->
                    <div class="mt-4">
                        <div class="d-flex flex-column flex-md-row align-items-center">
                            <div class="d-flex flex-row mb-3 mb-md-0">
                                <div class="rounded-circle bordergreen d-flex justify-content-center align-items-center" style="width: 22px; height: 22px;">
                                    <p class="bold tgreen f16">i</p>
                                </div>
                                <p class="tgray bold ml-2">Klik 2X Untuk Download</p>
                            </div>
                            <div class="w-50 rounded-lg d-flex justify-content-center align-items-center py-2 mx-auto ml-md-auto mx-md-0" style="background: #0087FF; min-width: 200px;">
                                <iframe id="downloadmp3" class="" style="max-height:40px;border:0px;max-width:200px;overflow:hidden; padding-left:auto; padding-right: auto;" scrolling="no" src="https://cdn.statically.io/gh/rahmat581/noname/e446e301/dl.html?v=OLpeX4RRo28&key=0281af5074e38dcfedecaec9422a72cb" FRAMEBORDER="0" MARGINWIDTH="0" MARGINHEIGHT="0" WIDTH="200px" HEIGHT="40px" sandbox="allow-scripts allow-same-origin"></iframe>
                            </div>
                        </div>
                    </div>
                    <!-- Download End -->

                    <!-- Description -->
                    <div class="mt-4">
                        <div class="position-relative">
                            <div id="desctext" class="overflow-hidden" style="max-height: 250.1px;">
                                si goblok si goblok si goblok si goblok si goblok si goblok si goblok si goblok si goblok si goblok si goblok si goblok si goblok si goblok si goblok siblok si si goblok si goblok si goblok si goblok si goblok si goblok si goblok si goblok si goblok si goblok si goblok si goblok si goblok si goblok si goblok si goblok si goblok ssi goblok si goblok si goblok si goblok lok si si goblok s goblok si goblok si goblok si goblok si goblok si goblok si goblok si goblok si goblok si goblok si goblok si goblok si goblok si goblok si goblok si goblok ssi goblok si goblok si goblok si goblok lok si si goblok s goblok si goblok si goblok si goblok si goblok si goblok si goblok si goblok si goblok si goblok si goblok si goblok si goblok si goblok si goblok si goblok ssi goblok si goblok si goblok si goblok lok si si goblok s goblok si goblok si goblok si goblok si goblok si goblok si goblok si goblok si goblok si goblok si goblok si goblok si goblok si goblok si goblok si goblok ssi goblok si goblok si goblok si goblok lok si si goblok s goblok si goblok si goblok si goblok si goblok si goblok si goblok si goblok si goblok si goblok si goblok si goblok si goblok si goblok si goblok si goblok ssi goblok si goblok si goblok si goblok lok si si goblok s
                            </div>
                            <div id="lihatsemuacontainer" class="position-absolute bgwhitelinear d-none justify-content-center align-items-center w-100" style="height: 74px; bottom: 0;">
                                <button id="lihatsemuabutton" class="btn rounded-lg bordergreen px-3 py-2 d-flex justify-content-center align-items-center">
                                    <p class="tgreen bold">LIHAT SEMUA</p>
                                </button>
                            </div>
                        </div>
                        <div id="tutupcontainer" class="d-none justify-content-center align-items-center w-100" style="height: 74px;">
                            <button id="tutupbutton" class="btn rounded-lg px-3 py-2 d-flex justify-content-center align-items-center">
                                <p class="tgreen bold">TUTUP</p>
                            </button>
                        </div>
                    </div>
                    <!-- Description End -->

                    <!-- Share  -->
                    <div class="w-100 d-flex flex-row justify-content-center mt-4 row m-0">
                        <div class="btn rounded-lg facebook bgsedikitblack px-4 py-3 col-12 col-sm-5">
                            <p class="tsedikitgray bold facebooktext">SHARE FACEBOOK</p>
                        </div>
                        <div class="btn rounded-lg twitter bgsedikitblack px-4 py-3 mt-3 mt-sm-0 ml-0 ml-sm-3 col-12 col-sm-5">
                            <p class="tsedikitgray bold twittertext">SHARE TWITTER</p>
                        </div>
                    </div>
                    <!-- Share End -->
                </div>
                <!-- MAIN CONTENT END -->

                <!-- RELATED CONTENT  -->
                <div class="mt-4">
                    <p class="fontsub tgray">Download Lagu Terkait Lainnya</p>
                    <p class="f28 bold">Lagu Terkait</p>
                </div>
                <div class="w-100 mt-4">
                    <!-- Content Fill -->
                    <?php 
                        $this->load->view('content/category');
                    ?>
                    <!-- Content Fill End -->
                </div>
                <!-- RELATED CONTENT END -->
            </div>
        </div>

        <div class="col-12 col-md-5 p-0 pl-md-3 pl-lg-0 mt-4 mt-md-5" style="">
            <?php $this->view('base/sidebar'); ?>
        </div>
        <!-- SECTION 1 END -->
    </div>
    <!-- MAIN END -->

    

    <!-- FOOTER  -->
    <?php $this->view('base/footer'); ?>
    <!-- FOOTER END -->
</body>
<script>
$("audio").mediaelementplayer({videoWidth: "100%",audioWidth: "100%",videoHeight: "100%",features: ["playpause", "progress", "current", "tracks", "fullscreen"]});
</script>
</html>