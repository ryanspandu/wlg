<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web Lagu - Search</title>

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
                <?php 
                if($url == base_url('search/').$q) { ?>
                    <p class="fontsub tgray">Hasil Pencarian Lagu</p>
                    <p class="f28 bold">Hasil Pencarian</p>
                <?php }elseif($url == base_url('category/').$q) { ?>
                    <p class="fontsub tgray">Genre Lagu</p>
                    <p class="f28 bold"><?php echo $q; ?></p>
                <?php } ?>
                </div>
                <?php 
                if($url !== base_url('category/').$q) { ?>
                <div class="borderblue rounded-lg px-5 py-4 mt-4">
                    <p class="tblue">
                        Download lagu Tones And I Dance Monkey MP3 dapat kamu download secara gratis di MetroLagu. Untuk melihat detail lagu Tones And I Dance Monkey klik salah satu judul yang cocok, kemudian untuk link download Tones And I Dance Monkey ada di halaman berikutnya.
                    </p>
                </div>
                <?php } ?>

                <!-- MAIN CONTENT -->
                <div class="w-100 mt-4">
                    <!-- Content Fill -->
                    <?php 
                    if($url == base_url('search/').$q) {
                        $this->view('content/search');
                    }elseif($url == base_url('category/').$q) { 
                        $this->view('content/category');
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
            <?php $this->view('base/sidebar'); ?>
        </div>
        <!-- SECTION 1 END -->
    </div>
    <!-- MAIN END -->

    

    <!-- FOOTER  -->
    <?php $this->view('base/footer'); ?>
    <!-- FOOTER END -->
</body>
</html>