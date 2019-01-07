jssor_1_slider_init = function() {

    var jssor_1_options = {
        $AutoPlay: 1,
        $SlideDuration: 800,
        $SlideEasing: $Jease$.$OutQuint,
        $ArrowNavigatorOptions: {
            $Class: $JssorArrowNavigator$
        },
        $BulletNavigatorOptions: {
            $Class: $JssorBulletNavigator$
        }
    };

    var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

    /*#region responsive code begin*/

    var MAX_WIDTH = 3000;

    function ScaleSlider() {
        var containerElement = jssor_1_slider.$Elmt.parentNode;
        var containerWidth = containerElement.clientWidth;

        if (containerWidth) {

            var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

            jssor_1_slider.$ScaleWidth(expectedWidth);
        }
        else {
            window.setTimeout(ScaleSlider, 30);
        }
    }

    ScaleSlider();

    $Jssor$.$AddEvent(window, "load", ScaleSlider);
    $Jssor$.$AddEvent(window, "resize", ScaleSlider);
    $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
    /*#endregion responsive code end*/
};



//increment decrement
var $input = $("#textCounter");

// Colocar a 0 ao início
$input.val(0);

// Aumenta ou diminui o valor sendo 0 o mais baixo possível
$(".altera").click(function(){
    if ($(this).hasClass('incrementor'))
        $input.val(parseInt($input.val())+1);
    else if ($input.val()>=1)
        $input.val(parseInt($input.val())-1);
});

//tabs
$('#myTabs a').click(function (e) {
    e.preventDefault()
    $(this).tab('show')
})
//search

//



$(function () {
    $('#error').click(function () {
        // make it not dissappear
        toastr.error("Noooo oo oo ooooo!!!", "Title", {
            "timeOut": "0",
            "extendedTImeout": "0"
        });
    });
    $('#info').click(function () {
        // title is optional
        toastr.info("Info Message", "Title");
    });
    $('#warning').click(function () {
        toastr.warning("Warning");
    });
    $('#success').click(function () {
        toastr.success("YYEESSSSSSS");
    });
});


