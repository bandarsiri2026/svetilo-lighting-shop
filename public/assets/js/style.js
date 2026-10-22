$(document).ready(function(){
    $('.carousel').carousel({

        interval:4000
    });


});
//Scroll

var scrollButton=$("#scroll-top");
$(window).on('scroll', function()
{
    if($(this).scrollTop()>=700)
    {
        scrollButton.show();
    }
    else
    {
        scrollButton.hide();
    }


});
scrollButton.click(function()
{
    $("html,body").animate({scrollTop:0},1000);
});


(function(){
    $(".item-section-thumbnail").click(function () {
       $(".item-section-image .zoom_01").css('opacity','0');
        var src = $(this).find('img').attr('src');
        $(".item-section-image .zoom_01").attr('src' , src).css('opacity', '1').elevateZoom({tint:true, tintColour:'#F90', tintOpacity:0.5});


    });

})();
$(".zoom_01").elevateZoom({tint:true, tintColour:'#F90', tintOpacity:0.5});




$(document).ready(function () {
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
        $(this).toggleClass('active');
    });
});

function blink(selector){
    $(".megat").fadeOut(800, function(){
        $(this).fadeIn(900, function(){
            blink(this);
        });
    });
}

$(document).ready(function(){
    blink('.blink');
});


