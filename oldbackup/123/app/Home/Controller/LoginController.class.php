<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function index(){
       //echo "商业期刊";
       $title="测试登录";
       $this->assign("title",$title);
       $this->display(); 

    }


}