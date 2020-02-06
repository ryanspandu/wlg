$(document).ready(function(){
    // SEARCHBAR MOBILE
    $("#searchopen").click(function(){
        $(this).fadeOut(275, function(){
            $(this).addClass("d-none");
            $("#searchclose").fadeIn(100, function(){
                $("#searchclose").removeClass("d-none");
            });
        });    
        $("#searchbar").animate({height: 60},300);  
    });
    $("#searchclose").click(function(){
        $(this).fadeOut(275, function(){
            $(this).addClass("d-none");
            $("#searchopen").fadeIn(100, function(){
                $("#searchopen").removeClass("d-none");
            });
        });
        $("#searchbar").animate({height: 0},200); 
    });
    // SEARCHBAR MOBILE END


    // 3 BANNER BLUR EXPAND
    $("#3banner > div").click(function(){
        let number = $(this).index() + 1;
        $("#3banner > div:nth-child("+ number +") div").animate({"height": 200, "width": 200});
        // $("#3banner > a:nth-child("+ number +")").attr("href", "search.php?IDNYA");
        $("#3banner > div:nth-child("+ number +") div a").removeClass("d-none");
    });
    $("#3banner > div div").mouseleave(function(){
        $("#3banner > div div").animate({"height": 44, "width": 142});
        $("#3banner > div div a").addClass("d-none");
    });
    // 3 BANNER BLUR EXPAND END


    // DOWNLOAD LAGU BAGU ICON ANIMATE
    $("#lagubarus > div").hover(
        function(){
            let number = $(this).index() + 1;
            $("#lagubarus > div:nth-child("+ number +") .wrapperdownloadicon").addClass("bggreen");
            $("#lagubarus > div:nth-child("+ number +") .downloadicon hr").removeClass("bordergreen");
            $("#lagubarus > div:nth-child("+ number +") .downloadicon hr").addClass("borderwhite");
            $("#lagubarus > div:nth-child("+ number +") .downloadicon .arrowutama").animate({"top": 20}, 1);
            $("#lagubarus > div:nth-child("+ number +") .downloadicon .arrowsatu").animate({"top": 20}, 150);
            $("#lagubarus > div:nth-child("+ number +") .downloadicon .arrowdua").animate({"top": 0});
        },
        function(){
            let number = $(this).index() + 1;
            $("#lagubarus > div:nth-child("+ number +") .wrapperdownloadicon").removeClass("bggreen");
            $("#lagubarus > div:nth-child("+ number +") .downloadicon hr").removeClass("borderwhite");
            $("#lagubarus > div:nth-child("+ number +") .downloadicon hr").addClass("bordergreen");
            $("#lagubarus > div:nth-child("+ number +") .downloadicon .arrowutama").animate({"top": 0}, 170);
            $("#lagubarus > div:nth-child("+ number +") .downloadicon .arrowsatu").animate({"top": 0});
            $("#lagubarus > div:nth-child("+ number +") .downloadicon .arrowdua").animate({"top": -20}, 150);
        }
    );
    // DOWNLOAD LAGU BAGU ICON ANIMATE END

    // CATEGORY BLUR 
    $("#genrecategory > div").click(function(){
        let number = $(this).index() + 1;
        $("#genrecategory > div:nth-child("+ number +") .categoryblur").animate({"height": 200});
        $("#genrecategory > div:nth-child("+ number +") .categoryblur p").animate({"font-size": 24});
        $("#genrecategory > div:nth-child("+ number +") .categoryblur a").removeClass("d-none");
    });
    $("#genrecategory > div").mouseleave(function(){
        $("#genrecategory > div .categoryblur").animate({"height": "40%"});
        $("#genrecategory > div .categoryblur p").animate({"font-size": 16});
        $("#genrecategory > div .categoryblur a").addClass("d-none");
    });
    // CATEGORY BLUR END

    // AUDIO PLAYER
    
    // AUDIO PLAYER END

    // DOWNLOAD LAGU 
        // $("#downloadmp3").ready(function(){
        //     $("#downloadmp3button").click(function(event){
        //         $("#initialize").addClass("d-none");
        //         $("#downloads").removeClass("d-none");
        //         event.preventDefault(); 
        //         $("#downloadmp3").click();  
        //     });
        // });
    // DOWNLOAD LAGU END

    // POP UP PLAY LAGU
    $(window).on( "load", function(){
        // $("#popupplay").removeClass("d-none");
        // $("#popupplay").animate({bottom: "40px"}, 500);    
        $("#popupplay").animate({opacity: 1}, 950);
    });
    $(window).click(function(){
        $("#popupplay").animate({opacity: 0}, 900, function(){
            $(this).addClass("d-none")
        });
    });
    $("#closepopuplagu").click(function(){
        $("#popupplay").animate({opacity: 0}, 900, function(){
            $(this).addClass("d-none")
        });
    });
    // POP UP PLAY LAGU END

    // DESCRIPTION
    if($("#desctext").height() > 250){
        $("#lihatsemuacontainer").removeClass("d-none");
        $("#lihatsemuacontainer").addClass("d-flex");
    } 
    $("#lihatsemuabutton").click(function(){
        $("#desctext").animate({maxHeight: 7000}, 800, function(){
            $("#lihatsemuacontainer").fadeOut(700, function(){
                $("#lihatsemuacontainer").removeClass("d-flex");                
                $("#tutupcontainer").fadeIn(400, function(){
                    $("#tutupcontainer").addClass("d-flex");
                });
                
            });
        });
    });
    $("#tutupbutton").click(function(){
        $("#tutupcontainer").fadeOut(400, function(){
            $("#tutupcontainer").removeClass("d-flex");                
            $("#desctext").animate({maxHeight: 250}, 2000, function(){
                $("#lihatsemuacontainer").fadeIn(400);
                $("#lihatsemuacontainer").addClass("d-flex");
            });
        });
    });
    // DESCRIPTION END

    // SHARE BUTTON 
    $(".facebook").hover(
    function(){
        $(this).css("background", "#1a55d3");
        $(".facebooktext").css("color", "white");
    }, function(){
        $(this).css("background", "#e0e0e0");
        $(".facebooktext").css("color", "#9a9ca0");
    });
    $(".twitter").hover(
        function(){
            $(this).css("background", "#1a8df8");
            $(".twittertext").css("color", "white");
        }, function(){
            $(this).css("background", "#e0e0e0");
            $(".twittertext").css("color", "#9a9ca0");
        });
    // SHARE BUTTON END

    // ADMIN CATEGORY BUTTON 
    $('#categorybutton').on('click',function(){

        if($(this).attr('data-click-state') == 1) {
        $(this).attr('data-click-state', 0)
        $("#categorycontainer").animate({height: 395});
        $("#arrowcategory").css({'transform': 'rotate(90deg)'});
        } else {
        $(this).attr('data-click-state', 1)
        $("#categorycontainer").animate({height: 0});
        $("#arrowcategory").css({'transform': 'rotate(0deg)'});
        }
        
    });

    $('#categorybuttonmobile').on('click',function(){

        if($(this).attr('data-click-state') == 1) {
        $(this).attr('data-click-state', 0)
        $("#categorycontainermobile").animate({height: 395});
        $("#arrowcategorymobile").css({'transform': 'rotate(90deg)'});
        } else {
        $(this).attr('data-click-state', 1)
        $("#categorycontainermobile").animate({height: 0});
        $("#arrowcategorymobile").css({'transform': 'rotate(0deg)'});
        }
        
    });
    // ADMIN CATEGORY BUTTON

    // ADMIN BURGERBAR
    $("#burgeropen").click(function(){
        $(this).fadeOut(275, function(){
            $(this).addClass("d-none");
            $("#burgerclose").fadeIn(55, function(){
                $("#burgerclose").removeClass("d-none");
            });
        });    
        $("#burgerbarcontainer").animate({height: 400},300);  
    });
    $("#burgerclose").click(function(){
        $(this).fadeOut(275, function(){
            $(this).addClass("d-none");
            $("#burgeropen").fadeIn(55, function(){
                $("#burgeropen").removeClass("d-none");
            });
        });
        $("#burgerbarcontainer").animate({height: 0},200); 
    });
    // ADMIN BURGERBAR END

    // SELECT CATEGORY ADMIN
    $("#categories").change(function(){
        $("#category").val($(this).val());
    })
    // SELECT CATEGORY ADMIN

    // DATE PICKER
    $("#datepicker").datepicker();
    // DATE PICKER END

    // CATEGORY LIST ADMIN
    $('#categorybuttonlist').on('click',function(){

        if($(this).attr('data-click-state') == 1) {
        $(this).attr('data-click-state', 0)
        $("#categorycontainerlist").animate({height: 200});
        } else {
        $(this).attr('data-click-state', 1)
        $("#categorycontainerlist").animate({height: 0});
        }
    });

    $("#tambahcategorybutton").click(function(){
        $("#containerblack").removeClass("d-none");
        $("#boxnya").fadeIn(750);
        $("#boxnya").addClass("d-flex");
    });

    $(".renamecategorybutton").click(function(){
        $("#containerblack").removeClass("d-none");
        $("#boxnya").fadeIn(750);
        $("#boxnya").addClass("d-flex");
    });

    $("#xcb").click(function(){
        $("#boxnya").fadeOut(750, function(){
            $("#containerblack").addClass("d-none");
        });
        
    });
    // CATEGORY LIST ADMIN END
});