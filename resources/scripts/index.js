/**
 * Created with JetBrains PhpStorm.
 * User: 饭
 * Date: 12-11-29
 * Time: 下午9:44
 * To change this template use File | Settings | File Templates.
 */
$(function () {


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

    $('#coin-slider').coinslider({ width: 980,height:396,delay: 3000 });


});