<?php
namespace Home\Controller;
use Think\Controller;

class QqController extends Controller {

private $APP_ID = 101304086;
private $APP_KEY = '562aa1a5c371550712f479ae11baa329';
private $redirect_url = 'http://hanfuqingshi.com';

public function login(){
	$state = md5(uniqid(rand(),TRUE));
	$redirect_url = urldecode($this->redirect_url);
	$location = 'https://graph.qq.com/oauth2.0/authorize?response_type=code&scope=get_user_info&client_id='.$this->APP_ID.'&redirect_uri='.$this->redirect_url.'&state'.$state;
	header("location:".$location);
}


}