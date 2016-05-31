<?php
namespace Home\Model;
use Think\Model;
class AdminModel extends Model{
	protected $_map=array(
		'user'=>'username',
		'name'=>'author',
		'afig'=>'fig',
		'newpwd'=>'password',
		'ip'=>'ip',
		'time'=>'time',
		'email'=>'email',

	);
	protected $_validate=array(
		array('username','require',"<script>alert('用户名不能为空哦~');history.go(-1)</script>"),
		array('username','chekuser',"<script>alert('用户名貌似有点长哦~');history.go(-1)</script>",0,'callback'),
		array('username','',"<script>alert('用户名已经存在了哦~');history.go(-1)</script>",0,'unique',2),
		array('author','require',"<script>alert('作者不能为空哦~');history.go(-1)</script>"),
		//array('author','',"<script>alert('作者已经存在了哦~');history.go(-1)</script>",0,'unique',1),
		array('fig','chekfig',"<script>alert('权限不对哦~');history.go(-1)</script>",2,'callback'),
		//array('username','',"<script>alert('用户名已经存在哦~');history.go(-1)</script>",0,'unique',1),
		array('password','require',"<script>alert('密码不能为空哦~');history.go(-1)</script>",2),
		array('password','repwd',"<script>alert('确认密码不正确哦~');history.go(-1)</script>",2,'confirm'),
		array('password','checkPwd',"<script>alert('密码不能小于6位哦~');history.go(-1)</script>",2,'callback'), // 自定义函数验证密码格式

		);
	protected $_auto=array(
		array('password','md5',3,'function'),
		array('ip','getIP',3,'callback'),
		array('time','date',3,'callback'),
		);
	protected function chekfig(){
		if(!($fig==0||$fig==1||$fig=2)){
			return false;
		}
	}
	protected function chekuser($user){
		if(strlen($user)>50){
			return false;
		}
	}
	protected function checkPwd($pwd){
		if(strlen($pwd)<6){
			return false;
		}
	}
	protected function date($now){
		return $now=date('Y-m-d H:i:s');
		

	}
	// 获取客户端真实ip()
	protected function getIP()
	{
	global $ip;
	if (getenv("HTTP_CLIENT_IP"))
	$ip = getenv("HTTP_CLIENT_IP");
	else if(getenv("HTTP_X_FORWARDED_FOR"))
	$ip = getenv("HTTP_X_FORWARDED_FOR");
	else if(getenv("REMOTE_ADDR"))
	$ip = getenv("REMOTE_ADDR");
	else $ip = "Unknow";
	return $ip;
	}
}