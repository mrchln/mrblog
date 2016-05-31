// JavaScript Document
document.title="我的博客-M";
var curPage=1; //当前页码
var total,pageSize,totalPage,url;
	

/*-----内容加载----*/ 

<!-------------------查询---------------------->

function seach(page){
	
	var seachv= $("#seach").find("input").val();
	$("#container").empty();
	//alert(seachv)
	$.ajax({
				type:"POST",
				url:"seach.php",
				data:{"seachv":seachv,"pageNum":page-1},
				dataType:"json",
				beforeSend:function(){
				$("#load").append("<div id='loading'><img src='loading.gif'></div>");
		        },
				success:function(json){ 
				//alert(json)
                if(json){ 
				$("#load").empty();
				//alert(json.content);
				total = json.pages.total; //总记录数
				pageSize = json.pages.pageSize; //每页显示条数
				curPage = page; //当前页
				totalPage = json.pages.totalPage; //总页数
				var str = ""; 
                    $.each(json.content,function(index,array){ 
					//alert(json);
					
                        str = "<div class=\"single_item\"><div class=\"element_head\">"; 
						 str += "<div class=\"date\">"+array['date']+"</div>";
                         
						  str += "<div class=\"title\"><span></span>"+array['title']+"</div><div class=\"delete\"><a id='editor' href='javascript: void(0)' rel3='"+array['article_id']+"' rel2='"+array['title']+"'  rel='"+array['content']+"'>编辑</a><a id='delete' href='javascript: void(0)'  rel='"+array['article_id']+"'><img src='images/20140622095219968_easyicon_net_16.png' width='16' height='16' title='删除' /></a></div>"; 
                         str += "<div class='content'><a id='content' href='javascript:void(0)' rel='"+array['article_id']+"'>"+array['content']+"</a></div><br>";
						 str += "<hr><div class='classify'>"+"  "+array['author']+"标签："+"<a id='classify_a' href='javascript: void(0)'>"+array['classify']+"</a>"+"、"+"<a id='select_1_classify_a' href='javascript: void(0)'>"+array['select_1_classify']+"</a>"+"</a></div></div></div><br>";
						  
						 
						
						// if()
                        $("#container").append(str); 
						
						 
                    }); 
				}
				},
				complete:function(){ 
					getPageBar();
				
				}
	})
}

function getData(page){
	$("#container").empty();
	$.ajax({
				type:"POST",
				url:"result.php",
				data:{"pageNum":page-1},
				dataType:"json",
				beforeSend:function(){
				$("#load").append("<div id='loading'><img src='loading.gif'></div>");
		        },
				success:function(json){ 
                if(json){ 
				$("#load").empty();
				total = json.pages.total; //总记录数
				pageSize = json.pages.pageSize; //每页显示条数
				curPage = page; //当前页
				totalPage = json.pages.totalPage; //总页数
			//url = json.url;
					//alert(111);
                    var str = ""; 
                    $.each(json.content,function(index,array){ 
					//alert(json);
					
                        str = "<div class=\"single_item\"><div class=\"element_head\">"; 
						 str += "<div class=\"date\">"+array['date']+"</div>"; 
                         
						  str += "<div class=\"title\"><span></span>"+array['title']+"</div><div class=\"delete\"><?php <a id='editor' href='javascript: void(0)' rel3='"+array['article_id']+"' rel2='"+array['title']+"'  rel='"+array['content']+"'>编辑</a><a id='delete' href='javascript: void(0)'  rel='"+array['article_id']+"'><img src='images/20140622095219968_easyicon_net_16.png' width='16' height='16' title='删除' /></a></div>"; 
                         str += "<div class='content'><a id='content' href='javascript:void(0)' rel='"+array['article_id']+"'>"+array['content']+"</a></div><br>";
						 str += "<div class='classify'>"+"  "+array['author']+"标签："+"<a id='classify_a' href='javascript: void(0)'>"+array['classify']+"</a>"+"、"+"<a id='select_1_classify_a' href='javascript: void(0)'>"+array['select_1_classify']+"</a>"+"</a></div></div></div><br>";
						  
						 
						
						// if()
                        $("#container").append(str); 
						
						 
                    }); 
				}
				},
				complete:function(){ 
					getPageBar();
				
				}
				});
}

//获取分页条
function getPageBar(){	
	if(curPage>totalPage) curPage=totalPage;
	//页码小于1
	if(curPage<1) curPage=1;
	pageStr="";
	//
	
	//如果是第一页
	if(curPage==1){
		pageStr += "<span>首页</span><span><img src='images/2014062207590085_easyicon_net_16.png' width='16' height='16' /></span>";
		
	}else{
		
		pageStr += "<span><a href='javascript:void(0)' rel='"+1+"'> 首页</a></span><span><a href='javascript:void(0)' rel='"+(curPage-1)+"'><img src='images/2014062207590085_easyicon_net_16.png' width='16' height='16' /></a></span>";
		
		
	}
	
	//如果是最后页
	if(curPage>=totalPage){
		pageStr += "<span><img src='images/20140622080041859_easyicon_net_16.png' width='16' height='16' /></span><span>末页</span>";
	}else{
		pageStr += "<span><a href='javascript:void(0)' rel='"+(parseInt(curPage)+1)+"'><img src='images/20140622080041859_easyicon_net_16.png' width='16' height='16' /></a></span><span><a href='javascript:void(0)' rel='"+totalPage+"'>末页</a></span>";
	}
	pageStr += "<span>共"+total+"条</span><span>"+curPage+"/"+totalPage+"</span>";
	pageStr+= "到第:<select id='sele' name='topage' size='1'>\n";
		for (i = 1; i <= totalPage; i++) {
			if (i == curPage)
				pageStr += "<option value='"+i+"' selected>"+i+"</option>\n";
			else
				pageStr += "<option value='"+i+"'>"+i+"</option>\n";
		}
		"</select>";
		
	$("#container").append(pageStr);
}
<!---------------------分页事件---------------------->
$(document).ready(function(){
	//getData(curPage);
	seach(curPage)
	$("#container span a").live('click',function(){
		var rel = $(this).attr("rel");
		if(rel){
		//	getData(rel);
			seach(rel)
		}
	});
	$("#sele").live('change',function(){
		//alert($(this).text());
		//alert($(this).val());
		var sele = $(this).val();
		if(sele){
			//getData(sele);
			seach(sele)
		}
	});
});
<!---------------------获取内容id，设置cookie---------------------->
	$("#content").live("click",function(){
		var rel = $(this).attr("rel");
		//alert(rel);
		setCookie('coki_content_id',rel,365);
		window.open('contentajax.php');
	})
	

		//var article_id=array['article_id'];
		
	$(".more a").live('click',function(){
		var rel = $(this).attr("rel");
		//alert(rel);
		setCookie('coki_content_id',rel,365);
		
	});	
	
	$(".date input[type='checkbox']").attr('value')
	
		
	
	<!---------------------删除文章---------------------->
	$("#delete").live('click',function(){
		if(confirm('确认删除吗?')){
		var rel = $(this).attr("rel");
		}
		$.ajax({
		type:"POST",
		url:"delete.php",
		data:({"article_id":rel}),
		dataType:"json",
		beforeSend:function(){
				$(".delete").append("<div id='loading'><img src='loading.gif'></div>");
		        },
		success:function(json){ 
			
		 //return	fbb();
			//alert(json)
			if(json){
				getData()
				//alert(json)
				
			}
			$("#loading").empty();
		},
	})
	
		
	});	
	
	<!---------------------编辑文章---------------------->
	$("#editor").live('click',function(){
		//alert(1)
		
		var rel = $(this).attr("rel");
		var rel2 = $(this).attr("rel2");
		rel3 = $(this).attr("rel3");
		var ue = UE.getEditor('container1');
		ue.setContent(rel)
		ueditor_show();
		$("#btnfabiao").val("更新")
		$("#title_input").val(rel2)
		//$("#select option:selected").text('111');
		x=2;
	});	
	

<!---------------------设置cookie---------------------->
function setCookie(c_name,value,expiredays)
{
var exdate=new Date()
exdate.setDate(exdate.getDate()+expiredays)
document.cookie=c_name+ "=" +escape(value)+
((expiredays==null) ? "" : ";expires="+exdate.toGMTString())
}

function getCookie(c_name)
{
if (document.cookie.length>0)
  {
  c_start=document.cookie.indexOf(c_name + "=")
  if (c_start!=-1)
    { 
    c_start=c_start + c_name.length+1 
    c_end=document.cookie.indexOf(";",c_start)
    if (c_end==-1) c_end=document.cookie.length
    return unescape(document.cookie.substring(c_start,c_end))
    } 

  }
return ""
}
<!---------------------生成游客---------------------->
$(document).ready(function(){
		
adminuser=$("#adminusername").val()
adminemail=admin=$("#adminemail").val()
var email = /^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;
username=getCookie('username')
useremail=getCookie('useremail')
if(adminuser==""){
if (username!=null && username!=""){
	
	$.ajax({
		type:"POST",
		url:"visitor_insert.php",
		data:({"nickname":username,"email":useremail}),
		dataType:"json",
		success:function(data){ 
		if(data){
			alert(data)	
			alert('昵称：'+username+'!'+'\n邮箱：'+useremail)	
		}else{
			setCookie('username',username,365)
			setCookie('useremail',useremail,365)
		}
		}
	})
}else 
  {
  username=prompt('您的昵称:',"")
  useremail=prompt('您的邮箱:',"")
  if (username!=null && username!=""&&useremail!=null&&useremail!=""&&!email.test(username))
    {
		
    setCookie('username',username,365)
	setCookie('useremail',useremail,365)
	history.go(0) 
		
    }else{
			alert('用户名不能为空，邮箱格式要正确哦！');
			history.go(0) 
		}
  }
}

})//cookie设置

function ueditor(){
	ue.setContent("");
	ueditor_show();
	$('#title').find("input").val("");
	$("#btnfabiao").val("发表")
	x=1;
}

function ueditor_show(){
	
	$("#edietor").toggle(200)
	window.scrollTo(0,0);
}
function caozuo(){
	$("#input").toggle()
}


<!---------------------设置百度ueditor---------------------->

<!-- 实例化编辑器 -->
     var ue = UE.getEditor('container1');
	 ue.ready(function() {
    //设置编辑器的内容
    //获取html内容，返回: <p>hello</p>
	
    //获取纯文本内容，返回: hello
    
	//alert(txt)
	<!---------------------文章分类设置---------------------->
	function select_1(){
			select_1_classify=$("#select_1 option:selected").text();
			$("#select_1").live('change',function(){
			select_1_classify=$("#select_1 option:selected").text();
			select_1_classifyval=$("#select_1 option:selected").val();
			})
			}
	
	$("#select").prepend("<option value='' selected='selected'>请选择…</option>");
	classifyval=$("#select option:selected").val();
	
	$("#select").live('change',function(){
		
		classify=$("#select option:selected").text();
		classifyval=$("#select option:selected").val();
		$(".select_1").empty()
		if('1'==classifyval){
			$("#classify").append("<div class='select_1'><select id='select_1'><option value='11' selected='selected'>高兴</option><option value='12'>忧伤</option><option value='13'>抒情</option></select>");	
			select_1()
		}
		if('2'==classifyval){
			$("#classify").append("<div class='select_1'><select id='select_1'><option value='21' selected='selected'>搞笑</option><option value='22'>美图</option><option value='23'>生活</option></select>");	
			select_1()
		}
		if('3'==classifyval){
			$("#classify").append("<div class='select_1'><select id='select_1'><option value='31' selected='selected'>心情记录</option><option value='32'>收藏笔录</option>");	
			select_1()
		}
		if('4'==classifyval||'5'==classifyval)
		select_1_classify="";
		
	})
	
	$("#btnfabiao").live("click",function(){
	var titleval=$('#title').find("input").val();
	var html = ue.getContent();
		//alert(select_1_classify)
	var value =  $(this).val()
		if(""!==classifyval){
		if(html!=""){
			if(x==1){
	$.ajax({
		type:"POST",
		url:"insert.php",
		data:({"content":html,"classify":classify,"titleval":titleval,"select_1_classify":select_1_classify}),
		dataType:"json",
		beforeSend:function(){
				$("#loading").append("<img src='loading.gif'>");
		        },
		success:function(json){ 
				alert(json)
				getData()
					
			$("#loading").empty();
		},
	})
			}else if(x==2){
				
				$.ajax({
		type:"POST",
		url:"update.php",
		data:({"content":html,"classify":classify,"titleval":titleval,"select_1_classify":select_1_classify,"article_id":rel3}),
		dataType:"json",
		beforeSend:function(){
				$("#loading").append("<img src='loading.gif'>");
		        },
		success:function(json){ 
		if(json){
				alert(json)
				getData()
				$("#edietor").hide(200)
		}
					
			$("#loading").empty();
		},
	})
			}
	}else
	alert("内容为空")
		}else
	alert("请选择分类")
	})
	
	
});

<!---------------------简单的鼠标经过事件---------------------->

$("#img").live("mouseover",function(){
	//$(this).css({'box-shadow':' 5px 0px 0px #888'})
	this.src='images/inputc.png'
})
$("#img").live("mouseout",function(){
	//$(this).css({'box-shadow':' 5px 0px 0px #888'})
	this.src='images/input.png'
})
$("#img").live("mousedown",function(){
	//$(this).css({'box-shadow':' 5px 0px 0px #888'})
	this.src='images/inputi.png'
})
$("#img").live("mouseup",function(){
	//$(this).css({'box-shadow':' 5px 0px 0px #888'})
	this.src='images/inputc.png'
})

$("#refresh").live("mouseover",function(){
	//$(this).css({'box-shadow':' 5px 0px 0px #888'})
	this.src='images/refresho.png'
})
$("#refresh").live("mouseout",function(){
	//$(this).css({'box-shadow':' 5px 0px 0px #888'})
	this.src='images/refresh.png'
})
$("#refresh").live("mousedown",function(){
	//$(this).css({'box-shadow':' 5px 0px 0px #888'})
	this.src='images/refreshd.png'
})
$("#refresh").live("mouseup",function(){
	//$(this).css({'box-shadow':' 5px 0px 0px #888'})
	this.src='images/refresho.png'
})

function closer(){
	$("#edietor").hide(200);
}






