<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web Lagu - Admin</title>

    <?php include 'head.php'; ?>

</head>
<body class="anjay" style="background: #E9EBEE;">
    <!-- NAVBAR -->
    <?php include 'header.php'; ?>
    <!-- NAVBAR END -->


    <!-- MAIN  -->
    <div class="w-100 d-flex justify-content-center mt-3 mb-5 my-md-5">
        <div class="row m-0 max992 w-100">
            <div class="col-3 d-none d-md-flex justify-content-center">
                <?php include 'sidebar.php'; ?>
            </div>
            <div class="col-12 col-md-6 mx-auto mx-md-0 d-flex flex-column" style="max-width: 544px;">
                <div class="w-100">
                    <div class="bgblacktapiblue w-100 rounded d-flex flex-row p-3">
                        <p class="twhite bold f20">Lagu Terbaru</p>
                        <p class="twhite f20 bold ml-2">(60)</p>
                    </div>
                    <div class="w-100 mt-2">
                        <!-- Content Fill -->
                        <?php 
                            $lagumain = array("Justin Biebir - O Aja Ya Kan", "Charlie Puth - Cinta Satu Malam", "Dua Lipa - Dua Tiga Empat Lipa", "Michael Michael - Sometimes it's Hurts but it's OK");
                            $nomain = 0;
                        ?>
                        <?php
                            foreach($lagumain as $lm) {
                                ?>
                                <div class="d-flex flex-column mb-2 lagumaincontainer py-3 px-2 position-relative">
                                    <a href="edit.php?id=IDNYE" class="position-absolute bg-white" style="right: 4%;">
                                        <img src="../assets/icon/icon_admin_edit.svg" width="26px"/>
                                    </a>
                                    <div class="d-flex flex-row" style="">
                                        <a href="download.php?id=IDNYE" class="gambarmain bgsoftgreen rounded-lg overflow-hidden position-relative d-flex justify-content-center" style="">
                                            <img src="../assets/img/banner.jpg" class="mx-auto position-absolute h-100 mx-auto" style="top: 0;"/>
                                        </a>
                                        <a href="download.php?id=IDNYE" class="ml-3 text-decoration-none tgrayblack">
                                            <p class="f16"><?php echo $lm ?></p>
                                        </a>
                                    </div>
                                    <div class="maindetails mt-3 d-flex flex-row justify-content-end pt-2 " style="border-top: 1px solid rgba(184, 184, 184, 0.315);">
                                        <div class="text-decoration-none d-flex flex-row mr-5">
                                            <img src="../assets/icon/icon_main_play.svg" class="" width="15px"/>
                                            <p class="f14 ml-2 tgray medium">24 K</p>
                                        </div>
                                        <div class="text-decoration-none d-flex flex-row">
                                            <img src="../assets/icon/icon_main_time.svg" class="" width="15px"/>
                                            <p class="f14 ml-2 tgray medium">07 Jan 2019</p>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                        ?>
                        <!-- Content Fill End -->
                    </div>
                </div>




                <div class="w-100 mt-4">
                    <div class="bgblacktapiblue w-100 rounded d-flex flex-row p-3">
                        <p class="twhite bold f20">Semua Lagu</p>
                        <p class="twhite f20 bold ml-2">(1160)</p>
                    </div>
                    <div class="w-100 mt-2">
                        <!-- Content Fill -->
                        <?php 
                            $lagumain = array("Justin Biebir - O Aja Ya Kan", "Charlie Puth - Cinta Satu Malam", "Dua Lipa - Dua Tiga Empat Lipa", "Michael Michael - Sometimes it's Hurts but it's OK");
                            $nomain = 0;
                        ?>
                        <?php
                            foreach($lagumain as $lm) {
                                ?>
                                <div class="d-flex flex-column mb-2 lagumaincontainer py-3 px-2 position-relative">
                                    <a href="edit.php?id=IDNYE" class="position-absolute bg-white" style="right: 4%;">
                                        <img src="../assets/icon/icon_admin_edit.svg" width="26px"/>
                                    </a>
                                    <div class="d-flex flex-row" style="">
                                        <a href="download.php?id=IDNYE" class="gambarmain bgsoftgreen rounded-lg overflow-hidden position-relative d-flex justify-content-center" style="">
                                            <img src="../assets/img/banner.jpg" class="mx-auto position-absolute h-100 mx-auto" style="top: 0;"/>
                                        </a>
                                        <a href="download.php?id=IDNYE" class="ml-3 text-decoration-none tgrayblack">
                                            <p class="f16"><?php echo $lm ?></p>
                                        </a>
                                    </div>
                                    <div class="maindetails mt-3 d-flex flex-row justify-content-end pt-2 " style="border-top: 1px solid rgba(184, 184, 184, 0.315);">
                                        <div class="text-decoration-none d-flex flex-row mr-5">
                                            <img src="../assets/icon/icon_main_play.svg" class="" width="15px"/>
                                            <p class="f14 ml-2 tgray medium">24 K</p>
                                        </div>
                                        <div class="text-decoration-none d-flex flex-row">
                                            <img src="../assets/icon/icon_main_time.svg" class="" width="15px"/>
                                            <p class="f14 ml-2 tgray medium">07 Jan 2019</p>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                        ?>
                        <!-- Content Fill End -->
                    </div>
                </div>
            </div>
            <div class="col-3 d-none d-md-flex">
                <div class="w-100">
                    <div class="w-100  px-3 py-4  d-flex flex-column justify-content-center align-items-center bg-white rounded">
                        <p class="medium f16">
                            Alek Punk
                        </p>
                        <a href="logout.php" class="hovershadow text-decoration-none mt-3 rounded-lg d-flex align-items-center justify-content-center px-3 py-2" style="border: 1px solid rgb(133, 133, 133);">
                            <p class="tgray">Logout</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- MAIN END -->



    <!-- FOOTER  -->

    <!-- FOOTER END -->
</body>
</html>