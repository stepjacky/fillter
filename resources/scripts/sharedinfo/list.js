function newOne(){
  	var url="/sharedinfo/editNew";
  	window.showModalDialog(url,window);   
}
function editOne(id){
    var url="/sharedinfo/editNew/"+id;
    window.showModalDialog(url,window);
}
function removeOne(id){
    if(!confirm("确定要删除这条记录吗？"))return;
    var that = this;
    var url="/sharedinfo/remove/"+id;
    $.post(url,function(){
        $(that).parent().parent().remove();
    });
}