//Sticking the navbar//
$(document).ready(function() {
    var header = $(".fixed-top");
    $(window).scroll(function() {    
        var scroll = $(window).scrollTop();
    
        if (scroll >= 100) {
            header.removeClass("fixed-top").addClass("sticky");
        } else {
            header.removeClass("sticky").addClass('fixed-top');
        }
    });
});

$('#owl-carousel1').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    dots:true,
    autoplay:true,
    autoplayTimeout:8000,
    autoplayHoverPause:true,
    responsiveClass:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});

$('#owl-carousel2').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    dots:false,
    autoplay:true,
    autoplayTimeout:8000,
    autoplayHoverPause:true,
    responsiveClass:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
});
$('#owl-carousel3').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    dots:false,
    autoplay:true,
    autoplayTimeout:5000,
    autoplayHoverPause:true,
    responsiveClass:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
});

$(document).ready(function(){
    $(".register").click(function(){
        $(".login-form").fadeOut(400);
        if($(".register-form").css("display")==="none"){
            $(".register-form").fadeIn(500);
        }else{
            $(".register-form").fadeOut(500);
        }
    });

     $(".login").click(function(){
        $(".register-form").fadeOut(400);
        if($(".login-form").css("display")==="none"){
            $(".login-form").fadeIn(500);
        }else{
            $(".login-form").fadeOut(500);
        }
    });

    $(".search").click(function(){
        $(".search-dropdown").toggle();
    });

    $("li.search").siblings().click(function(){
        $(".search-dropdown").slideUp();
    });

    $(".updateprofile").click(function(){
        $(".description").fadeOut(400);
        if($(".updateprofile-form").css("display")==="none"){
            $(".updateprofile-form").fadeIn(500);
        }else{
             $(".updateprofile-form").fadeOut(500);
        }
    });

});