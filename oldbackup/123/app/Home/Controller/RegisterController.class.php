<?php
namespace Home\Controller;
use Think\Controller;
class RegisterController extends Controller {
    public function index(){
       //echo "商业期刊";
       $title="测试注册";
       $this->assign("title",$title);
       $this->display(); 

    }


}