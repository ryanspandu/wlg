<div class="">
                    <a href="lagu.php" class="text-decoration-none hovershadow rounded-lg bg-white d-flex flex-row px-4 py-2 align-items-center justify-content-center" style="border: 1px solid rgb(14, 196, 209);">
                        <p class="tgreen bold f26">+</p>
                        <p class="tgrayblack ml-3 f18 medium">Tambah Lagu</p>
                    </a>
                    <a href="list.php?id=IDNYE" class="mt-3 text-decoration-none rounded-lg d-flex py-2 pl-3 align-items-center justify-content-center">
                        <div class="ml-5" style="width: 140px;">
                            <p class="tgrayblack f18 medium texthover">Lagu Baru</p>
                        </div>
                    </a>
                    <div id="categorybutton" data-click-state="1" class="btn mt-2 text-decoration-none rounded-lg d-flex flex-row py-2 pl-4 align-items-center justify-content-center">
                        <div class="ml-5 d-flex flex-row align-items-center" style="width: 140px;">
                            <p class="tgrayblack f18 medium texthover mr-3">Category</p>
                            <img id="arrowcategory" src="../assets/icon/icon_admin_right_arrow.svg" height="16px" class="ml-4"/>
                        </div>
                    </div>
                    <div id="categorycontainer" class="w-100 overflow-auto hidescroll" style="background: rgb(226, 226, 226); height: 0;">
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
                                <div class="w-100 py-3 pr-2 pl-4 hovergray">
                                    <a href="list.php?id=IDCATEGORY" class="w-100 h-100 text-decoration-none texthover">
                                        <p class="ml-5 tgrayblack"><?php echo $ct['title']; ?></p>
                                    </a>
                                </div>
                                <?php
                            }
                        ?>
                    </div>
                    <a href="list.php?id=IDNYE" class="mt-2 text-decoration-none rounded-lg d-flex py-2 pl-3 align-items-center justify-content-center">
                        <div class="ml-5" style="width: 140px;">
                            <p class="tgrayblack f18 medium texthover">Semua Lagu</p>
                        </div>
                    </a>
                </div>