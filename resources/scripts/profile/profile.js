/**
 * Created with JetBrains PhpStorm.
 * User: 饭
 * Date: 13-2-4
 * Time: 下午2:46
 * To change this template use File | Settings | File Templates.
 */


$(function(){

});

function saveBasic(){

    var data  =$("form#userinfo").serialize();

    $.post('/myuser/saveupdate',data);
}

function saveNewAddress(){
    var data = $("#addrform").serialize();

    $.post('/shipaddress/saveupdate',data);
}

function setDefaultAddr(id){
    var data = "usedit=1&id="+id;
    $.post('/shipaddress/saveupdate',data);

}

function removeAddr(id){
    $.post('/shipaddress/remove/'+id);
}

function modifyAvatar(){
   var path =  window.showModalDialog('/avator/');
   $.post('/myuser/modify_avatar','avatar='+path);
}