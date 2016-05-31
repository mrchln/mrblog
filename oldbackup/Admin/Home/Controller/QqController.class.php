<?php
namespace Home\Controller;
use Think\Controller;

class QqController extends Controller {

private $APP_ID = 101304086;
private $APP_KEY = '562aa1a5c371550712f479ae11baa329';
private $redirect_url = 'http://hanfuqingshi.com';

public function login(){
	$state = md5(uniqid(rand(),TRUE));//uniqid() 函数基于以微秒计的当前时间，生成一个唯一的 ID,client端的状态值。用于第三方应用防止CSRF攻击，成功授权后回调时会原样带回。请务必严格按照流程检查用户与state参数状态的绑定。
	$redirect_url = urldecode($this->redirect_url);//降URL解编码
	$location = 'https://graph.qq.com/oauth2.0/authorize?response_type=code&scope=get_user_info&client_id='.$this->APP_ID.'&redirect_uri='.$this->redirect_url.'&state='.$state;
	$this->call_back();
	header("location:".$location);
	
}

private function getAccessToken($code){
	$grant_type = 'authorization_code';
	$client_id = $this->APP_ID;
	$client_secret = $this->APP_KEY;
	$redirect_url = urldecode($this->redirect_url);
	$ACCESS_TOKEN = file_get_contents('https://graph.qq.com/oauth2.0/token?grant_type='.$grant_type.'&client_id='.$client_id.'&client_secret='.$client_secret.'&code='.$code.'&redirect_uri='.$redirect_url);
	return $ACCESS_TOKEN;//file_get_contents将文件读入字符串
	
}
private function getOpenid($ACCESS_TOKEN){
	$url = 'https://graph.qq.com/oauth2.0/me';
	$res = file_get_contents($url.'?'.$ACCESS_TOKEN);
	return $res;
}
private function getUserInfo($access_token,$openid){
	$url = 'https://graph.qq.com/user/get_user_info?access_token'.$access_token.'&oauth_consumer_key='.$this->APP_ID.'&openid='.$openid;
	return file_get_contents($url);
}
public function call_back(){
	//获取accesstoken
	$access_token =$this->getAccessToken($_GET['code']);
	$str = $this->getOpenid($access_token);
	if(strpos($str, "callback")!==FALSE){//查找callback字符串第一次出现的位置
		$lpos = strpos($str, "(");//查找括号第一次出现的位置
		$rpos = strpos($str, ")");
		$str = substr($str, $lpos + 1,$rpos - $lpos -1);//返回括号中的字符串
		//获取用户openid
		$user = json_decode($str,TRUE);
		//输出用户信息
		echo $this->getUserInfo($access_token, $user['openid']);
	}
}

}