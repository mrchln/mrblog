<?php

//获取时间间隔1、
function transDate($timestamp){
    $curTime=time();
    $space=$curTime-$timestamp;
    if($space<60){
        $string='刚刚';
        return $string;
    }elseif($space<3600){
        $string=floor($space/60).'分钟前';
        return $string;
    }
    $curtimeArray=getdate($curTime);
    $timeArray=getDate($timestamp);
    if($curtimeArray['year']==$timeArray['year']){
        if($curtimeArray['yday']==$timeArray['yday']){
            $format='%H:%M';
            $string=strftime($format,$timestamp);
            return '今天';
        }elseif(($curtimeArray['yday']-1)==$timeArray['yday']){
            $format='%H:%M';
            $string=strftime($format,$timestamp);
            return '昨天';
        }else{
            $string=sprintf('%d月%d日',$timeArray['mon'],$timeArray['mday']);
            return $string;
        }
    }
    $string=sprintf('%d年%d月%d日',$timeArray['year'],$timeArray['mon'],$timeArray['mday']);  
    return $string;
}


//获取时间间隔2、
function time_tran($timeInt,$format='Y-m-d'){
    $d=time()-$timeInt;
    if($d<0){
        return $timeInt;
    }else{
        if($d<60){
            return $d.'秒前';
        }else{
            if($d<3600){
                return floor($d/60).'分钟前';
            }else{
                if($d<86400){
                    return floor($d/3600).'小时前';
                }else{
                    if($d<604800){//一周内
                        return floor($d/86400).'天前';
                    }else{
                        if($d<2592000){//一个月内
                            return floor($d/604800).'周前'; 
                        }else{
                            if($d<31536000){//一年内
                                return floor($d/2592000).'个月前';
                            }else{
                                if($d>31536000){//一年后
                                    return floor($d/31536000).'年前';
                                }else{
                                    return date($format,$timeInt);
                                }
                            }
                        }
                    }
                }
            }
        }
    }

//使用方法
/*header('Content-type:text/html;charset=utf-8');
$d=time()-10;
echo transDate($d);//显示结果将为：刚刚
echo '<br />';
echo time_tran($d);//显示结果将为：10秒前*/

}

//网站相关资料
function webinfo(){
	$string = array(
		"server"=>$_SERVER['SERVER_NAME'],
		"name"=>"汉服青史",
		"time"=>"2014",
		"icp"=>"<a href='http://www.miitbeian.gov.cn/'>桂ICP备16002083号</a>",
		"title"=>"汉服青史",
	);
	return $string;
}