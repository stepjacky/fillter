function newOne(){
  	var url="/phone/editNew";
  	window.showModalDialog(url,window);   
}
function editOne(id){
    var url="/phone/editNew/"+id;
    window.showModalDialog(url,window);
}
function removeOne(id){
    if(!confirm("确定要删除这条记录吗？"))return;
    var that = this;
    var url="/phone/remove/"+id;
    $.post(url,function(){
        $(that).parent().parent().remove();
    });
}

function editPrice(id){
    var url = "/phone/price/"+id;
    window.showModalDialog(url,window);
}
function mainArtitle(id){
    var url="/phone/main_artitle/"+id;
    window.showModalDialog(url);
}

function modifyStatus(id,s){
    $.post('/phone/modify_status/'+id+"/"+s);

}