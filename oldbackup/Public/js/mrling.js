/**
 **
 **mrling专用js，转载或使用请先联系作者小零：http://www.mrcln.com
 **
 **/


/*
 * 检测浏览器
 */
function checkbrowser(){
	var Sys = {};
	var ua = navigator.userAgent.toLowerCase();
	var s;
	var scan;
	(s = ua.match(/msie ([\d.]+)/)) ? Sys.ie = s[1] :
	(s = ua.match(/firefox\/([\d.]+)/)) ? Sys.firefox = s[1] :
	(s = ua.match(/chrome\/([\d.]+)/)) ? Sys.chrome = s[1] :
	(s = ua.match(/opera.([\d.]+)/)) ? Sys.opera = s[1] :
	(s = ua.match(/version\/([\d.]+).*safari/)) ? Sys.safari = s[1] : 0;

	//以下进行测试

	if(Sys.ie)
	{
	    scan="您使用的ie内核"+Sys.ie+"浏览器，本博客对此浏览器严重不兼容，请用其他浏览器打开";
	    alert(scan);
	    //关闭浏览器
	    window.opener=null;    
	  //window.opener=top;    
	    window.open("","_self");    
	    window.close();    
	   // $("#boxcontent_box").css({"background":"../images/bg.png"});
	    
	}
	if(Sys.firefox)
	{    
	    scan="您使用的是firefox内核"+Sys.firefox+"浏览器，如果有问题，建议您使用ie浏览器";
	}
	if(Sys.chrome)
	{
	    scan="您使用的是chrome内核"+Sys.chrome+"浏览器，如果有问题，建议您使用ie浏览器";
	}
	if(Sys.opera) 
	{
	    scan="您使用的是opera内核"+Sys.opera+"浏览器，如果有问题，建议您使用ie浏览器";
	}
	if(Sys.safari)
	{
	    scan="您使用的是safari内核"+Sys.safari+"浏览器，如果有问题，建议您使用ie浏览器";
	}
	//alert(scan)
}




/*
 *鼠标点击图片还原原始大小兼用ie
 */
function imgshow(){
    /*
      --变量说明--
    */
    content_div:"";//内容
    bg_div:"";//背景变暗
    img_div:"";//图片
    prev_div:"";//上一页
    next_div:"";//下一页
	speed;//动画速度
    acitive;//动画效果，共支持三种"opacity","width","height"
    /*
    */

    var JosnObject = {opacity_act:"opacity",width_act:"width",height_act:"height"};
    


    $(content_div).find("img").click(function(){
    var img = new Image(); 
    img.src =$(this).attr("src") ;
    num=$(content_div).find("img").length;
    imgcount=$(content_div).find("img").index($(this)); 
    divimg=$(content_div).find("img").eq(imgcount);
    var src=divimg.attr("src");
    var wid=divimg.width();
    var hei=divimg.height();
    //martop=divimg.offset().top;
    //alert(martop);
     imgWidth=img.width;
     imgHeiht=img.height;
    if(imgWidth>100||imgHeiht>100){
    wh=document.documentElement.clientHeight;
    ww=document.documentElement.clientWidth;
    marginH=(wh-imgHeiht)/2;
    marginW=(ww-imgWidth)/2;
    $(img_div).show(speed);
    $(img_div).html("<img src='"+src+"'>");
    opacity=$(img_div).animate({"opacity":"1"},0);
    //alert(JosnObject.opacity_act)
    if(acitive==JosnObject.opacity_act){
        $(img_div).css({"top":marginH,"left":marginW,"opacity":"0"});
        $(img_div).animate({"opacity":"1"},speed);
            
            //$(img_div).animate({"opacity":"0"});
    }else if(acitive==JosnObject.height_act){
        //$(img_div).animate({"opacity":"1"},0);
        $(img_div).css({"top":-(marginH+imgHeiht),"left":marginW},speed);
        $(img_div).animate({"top":marginH,"left":marginW},speed);
        $(img_div).animate({"top":marginH+20,"left":marginW},200);
        $(img_div).animate({"top":marginH,"left":marginW},speed);
    }else if(acitive==JosnObject.width_act){
        //$(img_div).animate({"opacity":"1"},0);
        $(img_div).css({"top":marginH,"left":-ww});
        $(img_div).animate({"top":marginH,"left":marginW},speed);
        $(img_div).animate({"top":marginH,"left":marginW+20},200);
        $(img_div).animate({"top":marginH,"left":marginW},speed);
    }
    
    //alert(www);
    
    $(bg_div).css({"width":ww,"height":wh});
    $(bg_div).css({"display":"block"});
    $(bg_div).animate({"opacity":"0.7"});
    
    //$(img_div).css({"top":-marginH,"left":marginW});
    
    //$(img_div).find("img").css({"margin":(-wid/2)+"px"+(-hei/2)+"px"+"0px","right":"50%","top":"50%"});
    //$(img_div).find("img").animate({"width":imgWidth,"height":imgHeiht},"500");
    $(prev_div).html("<h1><div class='previco'><</div></h1>");
    $(next_div).html("<h1><div class='nextico'>></div></h1>");
    $(prev_div).css({"top":wh/2,"left":"50px","display":"block","width":"50px","height": "50px"});
    $(next_div).css({"top":wh/2,"right":"50px","display":"block","width":"50px","height": "50px"});
    //$(".big-img:after").css({"top":-h});
   
    $(img_div).find("img").css({"max-height":wh,"max-width":ww});
    }

  })
    $(content_div).find("img").mouseover(function(){
        if(imgWidth>100||imgHeiht>100){
        //$(this).addClass
        $(this).attr("title","点击放大");
        }
    })

  function kginfo(){
    var imgWidth=$(img_div).find("img").width();
    var imgHeiht=$(img_div).find("img").height();
    //alert(imgWidth);
    wh=document.documentElement.clientHeight;
    ww=document.documentElement.clientWidth;
    marginH=(wh-imgHeiht)/2;
    marginW=(ww-imgWidth)/2;
    $(img_div).show(speed);
  }
 /* function formatStr(){
    str_1=str.replace(/-1/,+1); 
    str_20=str.replace(/\r\n/ig,"<br/>"); 
  }*/



  $(prev_div).click(function(){
    
    if(imgcount!=0){
    var src=$("#content-detailed img").eq(imgcount-1).attr("src");
    kginfo();
    if(acitive==JosnObject.opacity_act){
        $(img_div).html("<img src='"+src+"'>");
        kginfo()
        $(img_div).css({"top":marginH,"left":marginW,"opacity":"0"});
        $(img_div).animate({"opacity":"1"},speed);
    }else if(acitive==JosnObject.height_act){
        //$(img_div).animate({"opacity":"1"},0);
        $(img_div).animate({"top":marginH+20,"left":marginW},200);
        $(img_div).animate({"top":-(marginH+imgHeiht),"left":marginW},speed,function(){
            $(img_div).html("<img src='"+src+"'>");
            kginfo();
            //$(img_div).animate({"top":imgHeiht,"left":marginW},speed);
            $(img_div).css({"top":marginH+imgHeiht,"left":marginW});
            $(img_div).html("<img src='"+src+"'>");
            $(img_div).animate({"top":marginH-20,"left":marginW},200);
            $(img_div).animate({"top":marginH,"left":marginW},speed);
        });
    }else if(acitive==JosnObject.width_act){
        //$(img_div).animate({"opacity":"1"},0);
        $(img_div).animate({"top":marginH,"left":marginW+20},200);
        $(img_div).animate({"top":marginH,"left":-ww},speed,function(){
            $(img_div).html("<img src='"+src+"'>");
            kginfo();
            //$(img_div).animate({"top":marginH,"left":marginW},speed);
            $(img_div).css({"top":marginH,"left":ww});
            $(img_div).html("<img src='"+src+"'>");
            $(img_div).animate({"top":marginH,"left":marginW-20},200);
            $(img_div).animate({"top":marginH,"left":marginW},speed);
        });
        
        
    }

    
    //$(img_div).find("img").eq(imgcount-1).animate({"width":imgWidth,"height":imgHeiht},"300");
    $(img_div).find("img").css({"max-height":wh,"max-width":ww});
    imgcount--;
    }
    
  })
  $(next_div).click(function(){
    
    if(imgcount<num-1){
   
        var src=$("#content-detailed img").eq(imgcount+1).attr("src");
    
    var imgWidth=$(img_div).find("img").width();
    var imgHeiht=$(img_div).find("img").height();
    //alert(imgWidth);
    wh=document.documentElement.clientHeight;
    ww=document.documentElement.clientWidth;
    marginH=(wh-imgHeiht)/2;
    marginW=(ww-imgWidth)/2;
    $(img_div).show(speed);
    if(acitive==JosnObject.opacity_act){
        $(img_div).html("<img src='"+src+"'>");
        kginfo()
        $(img_div).css({"top":marginH,"left":marginW,"opacity":"0"});
        $(img_div).animate({"opacity":"1"},speed);
    }else if(acitive==JosnObject.height_act){
        //$(img_div).animate({"opacity":"1"},0);
        $(img_div).animate({"top":marginH-20,"left":marginW},200);
        $(img_div).animate({"top":marginH+imgHeiht,"left":marginW},speed,function(){
            $(img_div).html("<img src='"+src+"'>");
            kginfo();
            //$(img_div).animate({"top":imgHeiht,"left":marginW},speed);
            $(img_div).css({"top":-(marginH+imgHeiht),"left":marginW});
            $(img_div).html("<img src='"+src+"'>");
            $(img_div).animate({"top":marginH+20,"left":marginW},200);
            $(img_div).animate({"top":marginH,"left":marginW},speed);
        });
    }else if(acitive==JosnObject.width_act){
        //$(img_div).animate({"opacity":"1"},0);
        $(img_div).animate({"top":marginH,"left":marginW-20},200);
        $(img_div).animate({"top":marginH,"left":ww},speed,function(){
            $(img_div).html("<img src='"+src+"'>");
            kginfo();
            //$(img_div).animate({"top":marginH,"left":marginW},speed);
            $(img_div).css({"top":marginH,"left":-ww},speed);
            $(img_div).html("<img src='"+src+"'>");
            $(img_div).animate({"top":marginH,"left":marginW+20},200);
            $(img_div).animate({"top":marginH,"left":marginW},speed);
    })
    }
    $(img_div).find("img").css({"max-height":wh,"max-width":ww});
    imgcount++;
    }
    
    
  })
  $(bg_div).click(function(){
        
      
      //$(img_div).hide(speed);
      $(prev_div).hide(speed);
      $(next_div).hide(speed);
      if(acitive==JosnObject.opacity_act){
          $(img_div).animate({"opacity":"0"},speed,function(){
              $(img_div).html("");
              $(img_div).animate({"opacity":"0"});
              $(bg_div).animate({"opacity":"0"},speed,function(){
              $(bg_div).css({"display":"none"});
              })
          });
      }else if(acitive==JosnObject.width_act){
          $(img_div).animate({"top":marginH,"left":marginW+50},200,function(){
            $(img_div).animate({"top":marginH,"left":-ww},speed,function(){
              $(img_div).html("");
              $(img_div).animate({"width":ww});
              $(bg_div).animate({"opacity":"0"},function(){
              $(bg_div).css({"display":"none"});
              })                
            });

          });
      }else if(acitive==JosnObject.height_act){
          $(img_div).animate({"top":marginH+50,"left":marginW},200,function(){
            $(img_div).animate({"top":-(marginH+imgHeiht),"left":marginW},speed,function(){
                $(img_div).html("");
                $(img_div).animate({"height":wh});
                $(bg_div).animate({"opacity":"0"},function(){
                $(bg_div).css({"display":"none"});
                })
            });
              
              
          });
      }
      


    
  })

  }

/*
 *最后修改
 */
  function time_comment(){
$("#zuozhe").find("a").live("click",function(){
        srcHeight=$(document).height(); 
        $('html,body').animate({scrollTop: srcHeight}, 800);    
    })


        //alert($("#title_hidden").val());
        document.title=$("#title_hidden").val();
        var txt=$(".updatetime").text();
        //alert(txt);
        if(txt=="最后修改于：01-01 08:00:00"||txt=="最后修改于：11-30 00:00:00"){
            $(".updatetime").text("最后修改于：无修改");
        }
    }

/*
 *最近时间高亮
 */
 function indextime(){
    var d=new Date();
        month=d.getMonth()+1;
        date=d.getDate();
        year = d.getFullYear();
        
        var count=$(".title-skill").children(".time").length;
        for(i=0;i<count;i++){
            sqldate=$(".title-skill").children("#date").eq(i).val();
            sqlmonth=$(".title-skill").children("#month").eq(i).val();
            sqlyear=$(".title-skill").children("#year").eq(i).val();
            da=month*30+date*1+parseInt(year)*365;
            mo=sqlmonth*30+sqldate*1+parseInt(sqlyear)*365;
            rel=da-mo;
            //console.log(rel);
            if(rel<3){
                //console.log($(".title-skill").find(".time").eq(i).html());
                console.log(rel);
                $(".title-skill").find(".time").eq(i).addClass("new");
            }       
        }
        var q=$(".title").children(".time").length;
        //alert(q)
        $(".title").children(".time").eq(0).addClass("new");
        $(".title").children(".time").eq(1).addClass("new");
 }


/*
 *div收缩
 */
 function filediv(){
 $(".all").click(function(){
            $(this).find(".ico").toggleClass("showall");
            $(".box-content").slideToggle('normal');
        })
        $(".nav-title").click(function(){
            $(this).find(".ico").toggleClass("showall");
            $(this).next(".box-year").slideToggle();
        })
        $(".month").click(function(){
            $(this).find(".ico-small").toggleClass("showall-small");
            $(this).nextUntil(".month").slideToggle();
        })
        $(".year").click(function(){
            $(this).find(".ico-small").toggleClass("showall-small");
            $(this).nextUntil(".year").slideToggle();
        })
        var count=$(".file-all").children("div").children("span").length;
        for(i=2;i<count;i++){
            var txt=$(".file-all").children("div").children("span").eq(i).text();
            if(txt=="最后修改于：0000-00-00 00:00:00"){
                //alert(txt);
                $(".file-all").children("div").children("span").eq(i).text("");
                $(".file-all").children("div").children("span").eq(i).prev("a").text("");
            }
        }
    }

/*
 *图片切换特效
 */
 function imgmsg(){

    $('#slides').slides({
            preload: true,
            preloadImage: 'img/loading.gif',
            play: 5000,
            pause: 2500,
            hoverPause: true
        });

        $(".slides_container").find('img').live('mouseover',function(){
            b=$(this).attr('alt');
            $('.info').addClass('infoadd'); 
            $('.next').addClass('slides_show');
            $('.prev').addClass('slides_show'); 
            var t=$(this).attr('title');
            $('.info').text(t);
            //alert(b);             
            //alert(r);

        })
        $(".slides_container").find('img').live('mouseout',function(){
            $(".info").removeClass('infoadd');
            $('.next').removeClass('slides_show');
            $('.prev').removeClass('slides_show');  
        });
}


/*
 *字符串截取
 */
 function textcut(){
        var count=$("#container_box").find("#content_index").length;
        for(i=0;i<count;i++){
            num=$("#container_box").find("#content_index").eq(i).text();
            text=$("#container_box").find("#content_index").eq(i);
            sub=text.text().length;
            //alert(sub);
            if(sub>150){   
            text.text(text.text().substring(0,150));
            text.html(text.html()+'...'); 
            }  
        }
}
 
/*
 * 导航动态定位，及滑动特效
 * 
 */
//设置当前页的active，定位
function navlink(){
	var navdhState = false;
	var n = false;
	var activeleft = 0;
	var enameArr = new Array();
	enameArr = $("input[name=ename]");
	//console.log(enameArr[0]['value']);
	var urlename = window.location.pathname;
	var enamelenght = enameArr.length;
	for (i=0;i<enamelenght;i++) {
		if(urlename.indexOf(enameArr[i]['value'])!=-1){
			var active = $("input[value="+enameArr[i]['value']+"]").prev("a").find("li");
			active.addClass("navdh");
			var activeleft = active.position().left;//当前页激活的active的位置
			n = true;
			//console.log(enameArr[i]['value']);
		}
	}
	navdh(n,activeleft);
	//console.log(navdhState);
}
//特效
function navdh(n,f){
	var navElent = $("#daohang_box li");
	var navdhElent = $("#navdh");
	var navLength = navElent.length;
	var navHeight = navElent.height();
	var navWidth = navElent.width();
	//alert(navElent);
	//console.log(navHeight);
	navdhState = false;
	navElent.mouseover(function() {
		
		var navdhInitial_left = navdhElent.position().left;
		var navLeft = $(this).position().left;
		//console.log(navLeft);
		//console.log(navdhInitial_left);
		//(n==true)?f=navLeft:f=0;
		//console.log(navLeft);
		if (navdhState == false) { //判断是否是刷新页面
			navElent.removeClass("navdh");
			navdhElent.css({
				height: '10px',
				width: 10,
				'background': '#fff',
				'text-shadow': '0 0 3px #000',
				'opacity': '0.7',
				'top': '15px',
				'left': f+40,
				'border-radius': '50%'
			});
			navdhElent.animate({
				'left': f,
				width: navWidth + 20
			}, 200, function() {
				navdhElent.animate({
					'height': navHeight + 20,
					'left': f,
					'top': 0,
					'border-radius': '0px'
				}, 100)
			})
			navdhState = true;
			//return;
		}
		if (navdhState == true) {
			
			navdhElent.stop(true, false);
			//第一段
			navdhElent.animate({
				height: '10px',
				width: 10,
				'left': navLeft+40,
				'top': '15px',
				'border-radius': '50%'
			}, 350, function() {
				//第二段
				
					//第三段
					navdhElent.animate({
						width: navWidth + 20,
						'left': navLeft
					}, 200, function() {
						navdhElent.animate({
							'top': 0,
							'border-radius': '0px',
							height: navHeight + 20
						}, 100);
					})
				
			})
		}
	})
}
