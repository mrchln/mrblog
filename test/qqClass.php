<?php



private $APP_ID = 101304086;
private $APP_KEY = '562aa1a5c371550712f479ae11baa329';
private $redirect_url = 'http://hanfuqingshi.com';

public function login(){
	$state = md5(uniqid(rand(),TRUE));
	$redirect_url = urldecode($this->redi)
}
