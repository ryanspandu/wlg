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
    <div id="containerblack" class="d-none position-absolute w-100 h-100" style="z-index: 99;">
        <div id="boxnya" class="w-100 h-100 position-fixed  align-items-center justify-content-center d-none" style="z-index: 99;">
            <div class="p-5 rounded-lg bg-white position-relative" style=" min-width: 400px; max-width: 400px;">
                <p id="xcb" class="btn p-0 f20 bold position-absolute twhite px-2 rounded-circle bgblue" style="top: 6%; right: 5%;">X</p>
                <form action="list.php" method="GET" class="">
                    <p class="bold mb-2">Nama Category</p>
                    <input type="text" name="categoryname" class="px-3 py-2 w-100" value="" placeholder="Nama Category"/>
                    <button type="submit" class="btn btn-primary w-100 mt-4">SAVE</button>
                </form>
            </div>
        </div>
        <div id='bgblack' class='w-100 h-100 position-fixed' style='background: black; opacity: 0.5; z-index: 98;'></div>
    </div>
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
                    <div class="bgblacktapiblue w-100 rounded d-flex flex-row justify-content-between p-3">
                        <p class="twhite bold f20">Lagu</p>
                    </div>
                    <form action="list.php" method="GET" class="bg-white w-100 rounded-bottom p-3">
                        <div class="d-flex flex-row w-100" style="border: 1px solid rgb(163, 163, 163);">
                            <input type="search" name="q" placeholder="Cari lagu..." class="px-3 py-2 w-100" style="border: none;"/>
                            <button type="submit" class="btn rounded-0 btn-primary">Cari</button>
                        </div>
                    </form>
                    <?php 
                    $no = 0;
                    $okey = array("halojifj", "sjhsajhd", "fjhasujfhdasjfh", "jfhasjhfaisjhf", "jfhasjhfaisjhf");
                    ?> 
                    <div class="d-flex flex-column w-100 my-4 px-3 position-relative">
                        <div class="d-flex flex-row w-100 justify-content-between mb-2">
                            <div class="d-flex flex-row align-items-center">
                                <p id="categorybuttonlist" data-click-state="1" class="bold mr-3 tblue btn p-0">Lihat Category</p>
                            </div>
                            <button id="tambahcategorybutton" class="btn rounded-lg bordergreen px-3 py-2">
                                <p class="">Tambah Category</p>
                            </button>
                        </div>
                        <div id="categorycontainerlist" class="position-relative bg-gray shadow rounded-bottom overflow-auto hidescroll" style="height: 0;">
                            <?php
                                foreach($okey as $ok){
                                    ?>
                                    <div class="p-3 d-flex flex-row">
                                        <a href="list.php?id=IDENYE" class="text-decoration-none tgrayblack overflow-hidden" style="max-width: 315px;"><?php echo $ok; ?></a>
                                        <div class="d-flex flex-row ml-auto">
                                            <button class="renamecategorybutton mr-1 text-decoration-none btn rounded-lg px-2 h-75 my-auto d-flex align-items-center">
                                                <img src="../assets/icon/icon_admin_edit.svg" class="" width=""/>
                                            </button>
                                            <a href="delete.php?id=IDNYE" class="text-decoration-none btn  rounded-lg px-3 h-75 my-auto d-flex align-items-center">
                                                <p class="f14 tred bold">X</p>
                                            </a>
                                        </div>                                        
                                    </div>
                                    <?php
                                }
                            ?>
                        </div>
                    </div>

                         
                    <?php
                        foreach($okey as $ok){ ?>
                            <div class="w-100 mt-2 bg-white rounded-lg p-3 d-flex flex-row">
                                <!-- Content Fill -->
                                <div class="d-flex flex-row align-items-center">
                                    <p class="bold mr-2"><?php echo ++$no; ?>.</p>
                                    <div class="bgsoftgreen rounded-lg overflow-hidden d-flex justify-content-center align-items-center" style="min-width: 50px; min-height: 40px; max-width: 50px; max-height: 40px;">
                                        <img src="../assets/img/banner.jpg" class="" height="100"/>
                                    </div>
                                </div>
                                <p class="ml-2 my-auto overflow-hidden" style="max-width: 255px;"><?php echo $ok; ?></p>
                                <div class="d-flex flex-row ml-auto">
                                    <a href="lagu.php?id=IDNYE" class="mr-1 text-decoration-none btn btn-secondary rounded-lg px-2 h-75 my-auto d-flex align-items-center">
                                        <p class="f14">EDIT</p>
                                    </a>
                                    <a href="delete.php?id=IDNYE" class="text-decoration-none btn btn-danger rounded-lg px-3 h-75 my-auto d-flex align-items-center">
                                        <p class="f14">X</p>
                                    </a>
                                </div>
                                <!-- Content Fill End -->
                            </div>
                        <?php }
                    ?> 
                    <div class="d-flex flex-row flex-wrap w-100 justify-content-center mt-4">
                        <div class="paginationcontent mr-2 borderblue rounded-lg bgblue d-flex justify-content-center align-items-center" style="width: 30px; height: 30px;">
                            <p class="twhite">1</p>
                        </div>
                        <div class="paginationcontent mr-2 borderblue rounded-lg d-flex justify-content-center align-items-center" style="width: 30px; height: 30px;">
                            <p class="tblue">2</p>
                        </div>
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