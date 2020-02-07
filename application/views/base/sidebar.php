<div class="m-auto mx-md-0 overflow-hidden" style="max-width: 544px;">
    <div class="">
        <p class="fontsub tgray">Cari Lagu Berdasarkan Genre Musikmu</p>
        <p class="f28 bold">Genre</p>
    </div>
    <div id="genrecategory" class="row mt-3 m-0">
        <!-- Content Fill  -->
        <?php 
            $categories = array(
                array(
                    "img" => base_url('assets/img/edm.jpg'),
                    "title" => "EDM",
                    "link" => "search.php?id=IDCATEGORY"
                ),
                array(
                    "img" => base_url('assets/img/kpop.jpg'),
                    "title" => "K-POP",
                    "link" => "search.php?id=IDCATEGORY"
                ),
                array(
                    "img" => base_url('assets/img/dangdut.jpg'),
                    "title" => "DANGDUT",
                    "link" => "search.php?id=IDCATEGORY"
                ),
                array(
                    "img" => base_url('assets/img/pop.jpg'),
                    "title" => "POP",
                    "link" => "search.php?id=IDCATEGORY"
                ),
                array(
                    "img" => base_url('assets/img/acoustic.jpg'),
                    "title" => "ACOUSTIC",
                    "link" => "search.php?id=IDCATEGORY"
                ),
                array(
                    "img" => base_url('assets/img/indie.jpg'),
                    "title" => "INDIE",
                    "link" => "search.php?id=IDCATEGORY"
                )
            );                        
        ?>
        <?php
            foreach ( $categories as $category ) { ?>
                <div class="col-6 col-sm-4 col-md-6 d-flex justify-content-center mb-3">
                    <div class="rounded-lg overflow-hidden position-relative" style="max-width: 180px; max-height: 180px;">
                        <div class="categoryblur btn bgblackblur w-100 d-flex justify-content-center align-items-center position-absolute" style="height: 40%; bottom:0;">
                            <a href="<?php echo $category['link']; ?>" class="w-100 h-100 position-absolute d-none"></a>
                            <p class="text-white bold"><?php echo $category['title']; ?></p>
                        </div>
                        <img src="<?php echo $category['img'] ?>" class="img-fluid"/>
                    </div>
                </div>
            <?php }
        ?>
        <!-- Content Fill End -->
    </div>
</div>
<div class="m-auto mx-md-0 overflow-hidden" style="max-width: 544px;">
    <div class="mt-4">
        <p class="fontsub tgray">Pencarian Lagu Terakhir</p>
        <p class="f28 bold">Pencarian Terakhir</p>
    </div>
    <div class="d-flex flex-column">
        <?php
            $lagubaru = array("Justin Biebir - O Aja Ya Kan", "Charlie Puth - Cinta Satu Malam", "Dua Lipa - Dua Tiga Empat Lipa", "Michael Michael - Sometimes it's Hurts but it's OK");
            $no = 0;
        ?>
        <?php foreach($lagubaru as $lb) { ?>
            <div class="border-bottom p-3">
                <a href="search.php?id=<?php echo $lb; ?>" class="tblue text-decoration-none f16"><?php echo $lb; ?></a>
            </div>
        <?php }
        ?>
    </div>
</div>
<div class="m-auto mx-md-0 overflow-hidden" style="max-width: 544px;">
    <div class="bgbluelinear rounded-lg px-5 py-4 mt-4">
        <p class="text-white">
            Lagu456z.Com Download lagu gratis - lagu terbaru 2020, download mp3 cepat, mudah dan yang stabil. Download gudang lagu Mp3 penuh Genre.
        </p>
    </div>
</div>