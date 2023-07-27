jQuery(document).ready(function ($) {
    $("li.subMenuOne-ul-li-1").hover(function(){
        $(".subMenuOne-itemTwo").css("display", "block");

        $(".subMenuTwo-itemOne").css("display", "none");
        $(".subMenuTwo-itemTwo").css("display", "none");
    });

    $("li.subMenuOne-ul-li-6").hover(function(){
        $(".subMenuOne-itemThree").css("display", "block");

        $(".subMenuOne-itemFour").css("display", "none");
        $(".subMenuOne-itemFive").css("display", "none");
    });

    $("li.subMenuOne-ul-li-7").hover(function(){
        $(".subMenuOne-itemFour").css("display", "block");

        $(".subMenuOne-itemThree").css("display", "none");
        $(".subMenuOne-itemFive").css("display", "none");
    });

    $("li.subMenuOne-ul-li-8").hover(function(){
        $(".subMenuOne-itemFive").css("display", "block");

        $(".subMenuOne-itemThree").css("display", "none");
        $(".subMenuOne-itemFour").css("display", "none");

    });

});

jQuery(document).ready(function ($) {
    $("li.subMenuOne-ul-li-2").hover(function(){
        $(".subMenuTwo-itemOne").css("display", "block");

        $(".subMenuOne-itemTwo").css("display", "none");
        $(".subMenuOne-itemThree").css("display", "none");
        $(".subMenuOne-itemFour").css("display", "none");
        $(".subMenuOne-itemFive").css("display", "none");
        $(".subMenuTwo-itemTwo").css("display", "none");
    });


});

jQuery(document).ready(function ($) {
    $("li.subMenuOne-ul-li-3").hover(function(){
        $(".subMenuTwo-itemTwo").css("display", "block");

        $(".subMenuOne-itemTwo").css("display", "none");
        $(".subMenuOne-itemThree").css("display", "none");
        $(".subMenuOne-itemFour").css("display", "none");
        $(".subMenuOne-itemFive").css("display", "none");
        $(".subMenuTwo-itemOne").css("display", "none");
    });


});


jQuery(document).ready(function ($) {
    $("li.subMenuTwo-ul-li-1").hover(function(){
        $(".subMenuTwo-itemThree").css("display", "block");
    });


});



