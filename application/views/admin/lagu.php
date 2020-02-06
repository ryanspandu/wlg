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
                    <div class="bgblacktapiblue w-100 rounded d-flex flex-row justify-content-between p-3">
                        <p class="twhite bold f20">Post Lagu</p>
                        <a href="grab.php"class="text-decoration-none twhite bold f20">Grab Lagu ></a>
                    </div>
                    <div class="w-100 mt-2">
                        <!-- Content Fill -->
                        <?php 
                            $lagumain = array("Justin Biebir - O Aja Ya Kan");
                            $nomain = 0;
                        ?>
                        <?php
                            foreach($lagumain as $lm) {
                                ?>
                                <form method="GET" action="proses_lagu.php" class="d-flex flex-column mb-2 lagumaincontainer py-3 px-2 position-relative">
                                    <div class="bggray d-flex flex-column justify-content-center align-items-center p-4">
                                        <div class="gambarmain bgsoftgreen rounded-lg overflow-hidden position-relative d-flex justify-content-center">
                                            <img src="../assets/img/banner.jpg" class="mx-auto position-absolute h-100 mx-auto" style=""/>
                                        </div>
                                        <div id="nameimg" class="mt-3">- No file -</div>
                                        <label for="imgupload" class="mt-1 btn bold f14 px-3 py-2 bggraynavbutton hovergray">Tambah Gambar</label>
                                        <input id="imgupload" type="file" name="img" class="d-none"/>
                                        <script>
                                            $("#imgupload").change(function(){
                                                $("#nameimg").text($("#imgupload")[0].files[0].name);
                                            });
                                        </script>
                                    </div>
                                    <div class="d-flex flex-column mt-3">
                                        <p class="bold mb-2">Title</p>
                                        <input type="text" name="title" placeholder="Judul Lagu" value="" class="px-3 py-2"/>
                                    </div>
                                    <div class="d-flex flex-column mt-3">
                                        <p class="bold mb-2">Youtube Id</p>
                                        <input type="text" name="ytid" placeholder="Youtube Id" value="" class="px-3 py-2"/>
                                    </div>
                                    <div class="d-flex flex-column mt-3">
                                        <p class="bold mb-2">Category</p>
                                        <div class="d-flex flex-row">
                                            <input id="category" type="text" name="category" placeholder="Category" value="" disabled class="px-3 py-2 w-75"/>
                                            <select id="categories" class="w-25 btn rounded-0" style="border: 1px solid rgb(194, 194, 194)">
                                                <option value="" class="d-none">Category</option>
                                                <?php
                                                $categories = array(
                                                    array(
                                                        "img" => "assets/img/edm.jpg",
                                                        "title" => "EDM",
                                                        "link" => "search.php?id=IDCATEGORY"
                                                    ),
                                                    array(
                                                        "img" => "assets/img/kpop.jpg",
                                                        "title" => "K-POP",
                                                        "link" => "search.php?id=IDCATEGORY"
                                                    ),
                                                    array(
                                                        "img" => "assets/img/dangdut.jpg",
                                                        "title" => "DANGDUT",
                                                        "link" => "search.php?id=IDCATEGORY"
                                                    ),
                                                    array(
                                                        "img" => "assets/img/pop.jpg",
                                                        "title" => "POP",
                                                        "link" => "search.php?id=IDCATEGORY"
                                                    ),
                                                    array(
                                                        "img" => "assets/img/acoustic.jpg",
                                                        "title" => "ACOUSTIC",
                                                        "link" => "search.php?id=IDCATEGORY"
                                                    ),
                                                    array(
                                                        "img" => "assets/img/indie.jpg",
                                                        "title" => "INDIE",
                                                        "link" => "search.php?id=IDCATEGORY"
                                                    )
                                                );       
                                                ?>     
                                                <?php 
                                                foreach($categories as $ct){
                                                    ?>
                                                    <option value="<?php echo $ct['title']; ?>"><?php echo $ct['title']; ?></option>
                                                    <?php
                                                }  ?>       
                                            </select>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column mt-3">
                                        <p class="bold mb-2">Views</p>
                                        <input type="number" name="views" placeholder="Views" value="" class="px-3 py-2"/>
                                    </div>
                                    <div class="d-flex flex-column mt-3">
                                        <p class="bold mb-2">Date</p>
                                        <input type="datetime" id="datepicker" name="date" placeholder="Date" value="" class="px-3 py-2"/>
                                    </div>
                                    <div class="d-flex flex-column mt-3">
                                        <p class="bold mb-2">Description</p>
                                        <textarea name="desc" placeholder="Description" value="" class="px-3 py-2" style="height: 250px; resize: none;"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary mt-3">SAVE</button>
                                </form>
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