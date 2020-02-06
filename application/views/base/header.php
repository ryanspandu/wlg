<div class="w-100 bg-white fixed-top" style="">
    <nav class="max992 mx-auto px-3 px-lg-0 d-flex align-items-center d-flex justify-content-between justify-content-md-start position-relative" style="height: 60px;">
        <a href="index.php" class="text-decoration-none mr-0 mr-md-5">
            <img src="assets/img/logo.jpg" class=""/>
        </a>
        <form action="search.php" method="POST" class="d-md-flex d-none flex-row ml-5 w-100 bggray rounded-pill p-1" style="max-width: 470px; height: 50px;">
            <input type="search" name="q" placeholder="Cari lagu disini.." class="w-100 px-3 text-center" style="background: none; border: none;"/>
            <button type="submit" class="btn bgblue hoverblue rounded-pill p-0" style="width: 70px;">
                <img src="assets/icon/icon_search.svg" class="mx-auto my-0">
            </button>
        </form>
        <div class="d-flex d-md-none align-items-center position-relative">
            <button id="searchopen" class="btn rounded-pill bggraynavbutton hovergray" style="width:60px;">
                <img src="assets/icon/icon_search_blue.svg" class="m-0" style="width: 20px; height: 20px;">
            </button>
            <button id="searchclose" class="btn rounded-pill bggraynavbutton hovergray d-none" style="width:60px;">
                <img src="assets/icon/icon_x.svg" class="m-auto" style="width: 18px; height:18px;">
            </button>
        </div>
    </nav>
    <div id="searchbar" class="d-flex d-md-none max992 mx-auto overflow-hidden px-3" style="height: 0;">
        <form action="search.php" method="POST" class="d-flex flex-row m-auto w-100 bggray rounded-pill p-1" style="height: 50px;">
            <input type="search" name="q" placeholder="Cari lagu disini.." class="w-100 px-3 text-center" style="background: none; border: none;"/>
            <button type="submit" class="btn bgblue hoverblue rounded-pill p-0" style="width: 70px;">
                <img src="assets/icon/icon_search.svg" class="mx-auto my-0">
            </button>
        </form>
    </div>
</div>