<?php
namespace Home\Controller;
use Think\Controller;
class PwdController extends Controller {
    public function index(){
       //echo "商业期刊";
       
    }
    public function forgetpwd(){
       $title="忘记密码";
       $min_title="找回密码";
       $arr_title=array("title"=>$title,"min_title"=>$min_title);
       dump($arr_title);
       $this->assign($arr_title);
       $this->display(); 

    }


}