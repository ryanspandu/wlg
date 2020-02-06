<div class="w-100">
    <nav class="max992 mx-auto px-3 px-md-2 d-flex align-items-center d-flex justify-content-between justify-content-md-start position-relative pt-2" style="height: 75px;">
        <!-- <img src="../assets/img/logo.jpg" class="mr-0 mr-md-5"/> -->
        <a href="index.php" class="tblue bold f26">Dashboard Admin.</a>
    
        <div class="d-flex d-md-none align-items-center position-relative">
            <button id="burgeropen" class="btn rounded-lg py-3 px-3 hovershadow borderblue">
                <div class="d-flex flex-column">
                    <hr class="borderblue m-0" style="width: 15px"/>
                    <hr class="borderblue mt-1 mb-0" style="width: 15px"/>                
                </div>
            </button>
            <button id="burgerclose" class="btn rounded-lg py-2 px-3 hovershadow borderblue d-none">
                <img src="../assets/icon/icon_x.svg" class="m-auto" style="width: 15px; height:18px;">
            </button>
        </div>
    </nav>
    <div id="burgerbarcontainer" class="d-flex d-md-none max992 mx-auto overflow-auto px-3" style="height: 0; max-width: 544px;">
        <div class="w-100 position-relative">
            <a href="tambah.php?id=IDNYE" class="mt-3 text-decoration-none rounded-lg d-flex flex-column py-2 align-items-center justify-content-center">
                <div class="ml-4" style="width: 140px;">
                    <p class="tgrayblack f18 medium texthover">Tambah Lagu</p>
                </div>
            </a>
            <hr class="w-75 mb-0" style="border: 1px solid rgb(212, 210, 210);"/>
            <a href="tambah.php?id=IDNYE" class="mt-3 text-decoration-none rounded-lg d-flex flex-column py-2 align-items-center justify-content-center">
                <div class="ml-4" style="width: 140px;">
                    <p class="tgrayblack f18 medium texthover">Lagu Baru</p>
                </div>
            </a>
            <hr class="w-75 mb-0" style="border: 1px solid rgb(212, 210, 210);"/>
            <div id="categorybuttonmobile" data-click-state="1" class="btn mt-2 text-decoration-none rounded-lg d-flex flex-column py-2 align-items-center justify-content-center">
                <div class="ml-4 d-flex flex-row align-items-center" style="width: 140px;">
                    <p class="tgrayblack f18 medium texthover mr-3">Category</p>
                    <img id="arrowcategorymobile" src="../assets/icon/icon_admin_right_arrow.svg" height="16px" class="ml-4"/>
                </div>
            </div>
            <hr class="w-75 mb-0" style="border: 1px solid rgb(212, 210, 210);"/>
            <div id="categorycontainermobile" class="w-100 overflow-hidden position-relative" style="background: rgb(226, 226, 226); height: 0; z-index: 99;">
                <?php 
                $categories = array(
                    array(
                        "img" => "assets/img/edm.jpg",
                        "title" => "LIHAT SEMUA",
                        "link" => "search.php?id=IDCATEGORY"
                    ),
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
                        <div class="w-100 py-3 pr-2 hovergray">
                            <a href="semualagu.php?id=IDCATEGORY" class="w-100 h-100 text-decoration-none texthover d-flex justify-content-center">
                                <p class=" tgrayblack"><?php echo $ct['title']; ?></p>
                            </a>
                        </div>
                        <?php
                    }
                ?>
            </div>
            <a href="tambah.php?id=IDNYE" class="mt-2 text-decoration-none rounded-lg d-flex py-2 align-items-center justify-content-center">
                <div class="ml-4" style="width: 140px;">
                    <p class="tgrayblack f18 medium texthover">Semua Lagu</p>
                </div>
            </a>
            <a href="logout.php" class="mt-2 text-decoration-none rounded-lg d-flex py-2 align-items-center justify-content-center position-absolute w-100 hovergray" style="bottom: 0; background: rgb(122, 122, 122);">
                <div class="d-flex justify-content-center" style="width: 140px;">
                    <p class="twhite f18 medium texthover">Logout</p>
                </div>
            </a>
        </div>
    </div>
</div>