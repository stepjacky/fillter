$(function(){

    $("#menu li[is='menuindex']").hover(

        function(){
            $("a:first",this).addClass("hover");
            $("div.menuitempanel",this).slideDown();

        },

        function(){

            $("a:first",this).removeClass("hover");
            $("div.menuitempanel",this).hide();

        }

    )


});