// JavaScript Document
function current(){ 
var d=new Date(),str=''; 
var date=((d.getMonth()+1)*30+(d.getFullYear())*365+d.getDate()-(2014*365+7*30+10));//当前天数-要设置时间的天数
str+="至2014年7月10日12时始，已经历：第"+date+"天，";
var Hours=date*24+d.getHours()-12;//12为从几点开始，24小时制
str+="第"+Hours+"小时，";
var Minutes=Hours*60+d.getMinutes()-0//0为从几分钟开始
str+="第"+Minutes+"分钟，";
var Seconds=Minutes*60+d.getSeconds()-0;//0为从几秒钟开始
str+="第"+Seconds+"秒钟";
return str; } 

function current_Seconds(){ 
var d=new Date(),str=''; 
var date=((d.getMonth()+1)*30+(d.getFullYear())*365+d.getDate()-(2014*365+7*30+10));//当前天数-要设置时间的天数

var Hours=date*24+d.getHours()-12;//12为从几点开始，24小时制

var Minutes=Hours*60+d.getMinutes()-0//0为从几分钟开始

var Seconds=Minutes*60+d.getSeconds()-0;//0为从几秒钟开始
Second=Seconds;
//str +=d.getDay()+'周'; 
return Second; } 

setInterval(function(){$("#nowTime").html(current)},1000); 
setInterval(function(){$("#Seconds").html(current_Seconds)},1000); 
