function newOne(){
  	var url="/preorder/editNew";
  	window.showModalDialog(url,window);   
}
function editOne(id){
    var url="/preorder/editNew/"+id;
    window.showModalDialog(url,window);
}
function removeOne(id){
    if(!confirm("确定要删除这条记录吗？"))return;
    var that = getEventSource();
    var url="/preorder/remove/"+id;
    $.post(url,function(){
        $(that).parent().parent().remove();
    });
}