
		
var a,b;

function admin_op(a,b){ 

	 $("#left").find("li").attr("class","");
	 $("#left").find("li").eq(a).attr("class","active");
	 //$("#left").children("li").removeAttr('style');	
	 //$("#left").children("li").eq(a).css({"box-shadow":"-2px -2px 2px #888"});
	 
	
}
function mover(a,b){
	var active=$("#left").find("li").eq(a).attr("class");
	if(active!="active"){
		$("#left").find("li").eq(a).attr("class","active");
	}
	
}
function mout(a,b){

	
		$("#left").find("li").eq(a).attr("class","");
	
	
}

function set(){
	$("#left").children("div").eq(0).css({"box-shadow":"-2px -2px 2px #888"});
}
function delsure(){
	if(confirm('确认删除吗？')){
		return true;
	}else{
		return false;
	}
}